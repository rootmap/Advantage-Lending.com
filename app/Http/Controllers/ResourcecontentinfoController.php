<?php

namespace App\Http\Controllers;

use App\ResourceContentInfo;
use App\AdminLog;
use Illuminate\Http\Request;

class ResourceContentInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Resource Content Info";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=ResourceContentInfo::count();
        if($tabCount==0)
        {
            return redirect(url('resourcecontentinfo/create'));
        }else{

            $tab=ResourceContentInfo::orderBy('id','DESC')->first();      
        return view('admin.pages.resourcecontentinfo.resourcecontentinfo_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=ResourceContentInfo::count();
        if($tabCount==0)
        {            
        return view('admin.pages.resourcecontentinfo.resourcecontentinfo_create');
            
        }else{

            $tab=ResourceContentInfo::orderBy('id','DESC')->first();      
        return view('admin.pages.resourcecontentinfo.resourcecontentinfo_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function SystemAdminLog($module_name="",$action="",$details=""){
        $tab=new AdminLog();
        $tab->module_name=$module_name;
        $tab->action=$action;
        $tab->details=$details;
        $tab->admin_id=$this->sdc->admin_id();
        $tab->admin_name=$this->sdc->UserName();
        $tab->save();
    }


    public function store(Request $request)
    {
        $this->validate($request,[
                
        ]);

        $this->SystemAdminLog("Resource Content Info","Save New","Create New");

        
        $tab=new ResourceContentInfo();
        
        $tab->detail=$request->detail;
        $tab->save();

        return redirect('resourcecontentinfo')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
        ]);

        $tab=new ResourceContentInfo();
        
        $tab->detail=$request->detail;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ResourceContentInfo  $resourcecontentinfo
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('detail','LIKE','%'.$search.'%');
                            $query->orWhere('created_at','LIKE','%'.$search.'%');

                        return $query;
                     })
                     ->count();
        return $tab;
    }


    private function methodToGetMembers($start, $length,$search=''){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('detail','LIKE','%'.$search.'%');
                            $query->orWhere('created_at','LIKE','%'.$search.'%');

                        return $query;
                     })
                     ->skip($start)->take($length)->get();
        return $tab;
    }

    public function datatable(Request $request){

        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $search = $request->get('search');

        $search = (isset($search['value']))? $search['value'] : '';

        $total_members = $this->methodToGetMembersCount($search); // get your total no of data;
        $members = $this->methodToGetMembers($start, $length,$search); //supply start and length of the table data

        $data = array(
            'draw' => $draw,
            'recordsTotal' => $total_members,
            'recordsFiltered' => $total_members,
            'data' => $members,
        );

        echo json_encode($data);

    }

    
    public function ResourceContentInfoQuery($request)
    {
        $ResourceContentInfo_data=ResourceContentInfo::orderBy('id','DESC')->get();

        return $ResourceContentInfo_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Detail','Created Date');
        array_push($data, $array_column);
        $inv=$this->ResourceContentInfoQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->detail,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Resource Content Info Report',
            'report_title'=>'Resource Content Info Report',
            'report_description'=>'Report Genarated : '.$dataDateTimeIns,
            'data'=>$data
        );

        $this->sdc->ExcelLayout($excelArray);
        
    }

    public function ExportPDF(Request $request)
    {

        $html="<table class='table table-bordered' style='width:100%;'>
                <thead>
                <tr>
                <th class='text-center' style='font-size:12px;'>ID</th>
                            <th class='text-center' style='font-size:12px;' >Detail</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->ResourceContentInfoQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->detail."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Resource Content Info Report',$html);


    }
    public function show(ResourceContentInfo $resourcecontentinfo)
    {
        
        $tab=ResourceContentInfo::all();return view('admin.pages.resourcecontentinfo.resourcecontentinfo_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ResourceContentInfo  $resourcecontentinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(ResourceContentInfo $resourcecontentinfo,$id=0)
    {
        $tab=ResourceContentInfo::find($id);      
        return view('admin.pages.resourcecontentinfo.resourcecontentinfo_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ResourceContentInfo  $resourcecontentinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResourceContentInfo $resourcecontentinfo,$id=0)
    {
        $this->validate($request,[
                
        ]);

        $this->SystemAdminLog("Resource Content Info","Update","Edit / Modify");

        
        $tab=ResourceContentInfo::find($id);
        
        $tab->detail=$request->detail;
        $tab->save();

        return redirect('resourcecontentinfo')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ResourceContentInfo  $resourcecontentinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResourceContentInfo $resourcecontentinfo,$id=0)
    {
        $this->SystemAdminLog("Resource Content Info","Destroy","Delete");

        $tab=ResourceContentInfo::find($id);
        $tab->delete();
        return redirect('resourcecontentinfo')->with('status','Deleted Successfully !');}
}
