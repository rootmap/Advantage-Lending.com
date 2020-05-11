<?php

namespace App\Http\Controllers;

use App\ResourceContent;
use App\AdminLog;
use Illuminate\Http\Request;

class ResourceContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Resource Content";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=ResourceContent::all();
        return view('admin.pages.resourcecontent.resourcecontent_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


                   
        return view('admin.pages.resourcecontent.resourcecontent_create');
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
                
                'title'=>'required',
                'image'=>'required',
                'short_detail'=>'required',
                'long_detail'=>'required',
        ]);

        $this->SystemAdminLog("Resource Content","Save New","Create New");

        

        $filename_resourcecontent_1='';
        if ($request->hasFile('image')) {
            $img_resourcecontent = $request->file('image');
            $upload_resourcecontent = 'upload/resourcecontent';
            $filename_resourcecontent_1 = env('APP_NAME').'_'.time() . '.' . $img_resourcecontent->getClientOriginalExtension();
            $img_resourcecontent->move($upload_resourcecontent, $filename_resourcecontent_1);
        }

                
        $tab=new ResourceContent();
        
        $tab->title=$request->title;
        $tab->image=$filename_resourcecontent_1;
        $tab->short_detail=$request->short_detail;
        $tab->long_detail=$request->long_detail;
        $tab->save();

        return redirect('resourcecontent')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'image'=>'required',
                'short_detail'=>'required',
                'long_detail'=>'required',
        ]);

        $tab=new ResourceContent();
        
        $tab->title=$request->title;
        $tab->image=$filename_resourcecontent_1;
        $tab->short_detail=$request->short_detail;
        $tab->long_detail=$request->long_detail;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ResourceContent  $resourcecontent
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('image','LIKE','%'.$search.'%');
                            $query->orWhere('short_detail','LIKE','%'.$search.'%');
                            $query->orWhere('long_detail','LIKE','%'.$search.'%');
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
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('image','LIKE','%'.$search.'%');
                            $query->orWhere('short_detail','LIKE','%'.$search.'%');
                            $query->orWhere('long_detail','LIKE','%'.$search.'%');
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

    
    public function ResourceContentQuery($request)
    {
        $ResourceContent_data=ResourceContent::orderBy('id','DESC')->get();

        return $ResourceContent_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Image','Short Detail','Long Detail','Created Date');
        array_push($data, $array_column);
        $inv=$this->ResourceContentQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->image,$voi->short_detail,$voi->long_detail,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Resource Content Report',
            'report_title'=>'Resource Content Report',
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
                            <th class='text-center' style='font-size:12px;' >Title</th>
                        
                            <th class='text-center' style='font-size:12px;' >Image</th>
                        
                            <th class='text-center' style='font-size:12px;' >Short Detail</th>
                        
                            <th class='text-center' style='font-size:12px;' >Long Detail</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->ResourceContentQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->short_detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->long_detail."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Resource Content Report',$html);


    }
    public function show(ResourceContent $resourcecontent)
    {
        
        $tab=ResourceContent::all();return view('admin.pages.resourcecontent.resourcecontent_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ResourceContent  $resourcecontent
     * @return \Illuminate\Http\Response
     */
    public function edit(ResourceContent $resourcecontent,$id=0)
    {
        $tab=ResourceContent::find($id);      
        return view('admin.pages.resourcecontent.resourcecontent_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ResourceContent  $resourcecontent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResourceContent $resourcecontent,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'short_detail'=>'required',
                'long_detail'=>'required',
        ]);

        $this->SystemAdminLog("Resource Content","Update","Edit / Modify");

        

        $filename_resourcecontent_1=$request->ex_image;
        if ($request->hasFile('image')) {
            $img_resourcecontent = $request->file('image');
            $upload_resourcecontent = 'upload/resourcecontent';
            $filename_resourcecontent_1 = env('APP_NAME').'_'.time() . '.' . $img_resourcecontent->getClientOriginalExtension();
            $img_resourcecontent->move($upload_resourcecontent, $filename_resourcecontent_1);
        }

                
        $tab=ResourceContent::find($id);
        
        $tab->title=$request->title;
        $tab->image=$filename_resourcecontent_1;
        $tab->short_detail=$request->short_detail;
        $tab->long_detail=$request->long_detail;
        $tab->save();

        return redirect('resourcecontent')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ResourceContent  $resourcecontent
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResourceContent $resourcecontent,$id=0)
    {
        $this->SystemAdminLog("Resource Content","Destroy","Delete");

        $tab=ResourceContent::find($id);
        $tab->delete();
        return redirect('resourcecontent')->with('status','Deleted Successfully !');}
}
