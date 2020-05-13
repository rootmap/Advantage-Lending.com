<?php

namespace App\Http\Controllers;

use App\HelpOnManyCaseTypes;
use App\AdminLog;
use Illuminate\Http\Request;

class HelpOnManyCaseTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Help On Many Case Types";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=HelpOnManyCaseTypes::all();
        return view('admin.pages.helponmanycasetypes.helponmanycasetypes_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


                   
        return view('admin.pages.helponmanycasetypes.helponmanycasetypes_create');
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
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Help On Many Case Types","Save New","Create New");

        

        $filename_helponmanycasetypes_2='';
        if ($request->hasFile('image')) {
            $img_helponmanycasetypes = $request->file('image');
            $upload_helponmanycasetypes = 'upload/helponmanycasetypes';
            $filename_helponmanycasetypes_2 = env('APP_NAME').'_'.time() . '.' . $img_helponmanycasetypes->getClientOriginalExtension();
            $img_helponmanycasetypes->move($upload_helponmanycasetypes, $filename_helponmanycasetypes_2);
        }

                
        $tab=new HelpOnManyCaseTypes();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->image=$filename_helponmanycasetypes_2;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('helponmanycasetypes')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'image'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new HelpOnManyCaseTypes();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->image=$filename_helponmanycasetypes_2;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HelpOnManyCaseTypes  $helponmanycasetypes
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('detail','LIKE','%'.$search.'%');
                            $query->orWhere('image','LIKE','%'.$search.'%');
                            $query->orWhere('module_status','LIKE','%'.$search.'%');
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
                            $query->orWhere('detail','LIKE','%'.$search.'%');
                            $query->orWhere('image','LIKE','%'.$search.'%');
                            $query->orWhere('module_status','LIKE','%'.$search.'%');
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

    
    public function HelpOnManyCaseTypesQuery($request)
    {
        $HelpOnManyCaseTypes_data=HelpOnManyCaseTypes::orderBy('id','DESC')->get();

        return $HelpOnManyCaseTypes_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Detail','Image','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->HelpOnManyCaseTypesQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->detail,$voi->image,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Help On Many Case Types Report',
            'report_title'=>'Help On Many Case Types Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Detail</th>
                        
                            <th class='text-center' style='font-size:12px;' >Image</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->HelpOnManyCaseTypesQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Help On Many Case Types Report',$html);


    }
    public function show(HelpOnManyCaseTypes $helponmanycasetypes)
    {
        
        $tab=HelpOnManyCaseTypes::all();return view('admin.pages.helponmanycasetypes.helponmanycasetypes_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HelpOnManyCaseTypes  $helponmanycasetypes
     * @return \Illuminate\Http\Response
     */
    public function edit(HelpOnManyCaseTypes $helponmanycasetypes,$id=0)
    {
        $tab=HelpOnManyCaseTypes::find($id);      
        return view('admin.pages.helponmanycasetypes.helponmanycasetypes_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HelpOnManyCaseTypes  $helponmanycasetypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HelpOnManyCaseTypes $helponmanycasetypes,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Help On Many Case Types","Update","Edit / Modify");

        

        $filename_helponmanycasetypes_2=$request->ex_image;
        if ($request->hasFile('image')) {
            $img_helponmanycasetypes = $request->file('image');
            $upload_helponmanycasetypes = 'upload/helponmanycasetypes';
            $filename_helponmanycasetypes_2 = env('APP_NAME').'_'.time() . '.' . $img_helponmanycasetypes->getClientOriginalExtension();
            $img_helponmanycasetypes->move($upload_helponmanycasetypes, $filename_helponmanycasetypes_2);
        }

                
        $tab=HelpOnManyCaseTypes::find($id);
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->image=$filename_helponmanycasetypes_2;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('helponmanycasetypes')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HelpOnManyCaseTypes  $helponmanycasetypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(HelpOnManyCaseTypes $helponmanycasetypes,$id=0)
    {
        $this->SystemAdminLog("Help On Many Case Types","Destroy","Delete");

        $tab=HelpOnManyCaseTypes::find($id);
        $tab->delete();
        return redirect('helponmanycasetypes')->with('status','Deleted Successfully !');}
}
