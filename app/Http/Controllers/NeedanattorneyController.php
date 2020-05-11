<?php

namespace App\Http\Controllers;

use App\NeedAnAttorney;
use App\AdminLog;
use Illuminate\Http\Request;
use App\CaseType;
                
use App\USAState;
                

class NeedAnAttorneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Need An Attorney";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=NeedAnAttorney::all();
        return view('admin.pages.needanattorney.needanattorney_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tab_CaseType=CaseType::all();
        $tab_USAState=USAState::all();           
        return view('admin.pages.needanattorney.needanattorney_create',['dataRow_CaseType'=>$tab_CaseType,'dataRow_USAState'=>$tab_USAState]);
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
                
                'first_name'=>'required',
                'last_name'=>'required',
                'case_type'=>'required',
                'state_case'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'message'=>'required',
                'request_status'=>'required',
        ]);

        $this->SystemAdminLog("Need An Attorney","Save New","Create New");

        
        $tab_2_CaseType=CaseType::where('id',$request->case_type)->first();
        $case_type_2_CaseType=$tab_2_CaseType->name;
        $tab_3_USAState=USAState::where('id',$request->state_case)->first();
        $state_case_3_USAState=$tab_3_USAState->name;
        $tab=new NeedAnAttorney();
        
        $tab->first_name=$request->first_name;
        $tab->last_name=$request->last_name;
        $tab->case_type_name=$case_type_2_CaseType;
        $tab->case_type=$request->case_type;
        $tab->state_case_name=$state_case_3_USAState;
        $tab->state_case=$request->state_case;
        $tab->phone=$request->phone;
        $tab->email=$request->email;
        $tab->message=$request->message;
        $tab->request_status=$request->request_status;
        $tab->save();

        return redirect('needanattorney')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'first_name'=>'required',
                'last_name'=>'required',
                'case_type'=>'required',
                'state_case'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'message'=>'required',
                'request_status'=>'required',
        ]);

        $tab=new NeedAnAttorney();
        
        $tab->first_name=$request->first_name;
        $tab->last_name=$request->last_name;
        $tab->case_type_name=$case_type_2_CaseType;
        $tab->case_type=$request->case_type;
        $tab->state_case_name=$state_case_3_USAState;
        $tab->state_case=$request->state_case;
        $tab->phone=$request->phone;
        $tab->email=$request->email;
        $tab->message=$request->message;
        $tab->request_status=$request->request_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NeedAnAttorney  $needanattorney
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('first_name','LIKE','%'.$search.'%');
                            $query->orWhere('last_name','LIKE','%'.$search.'%');
                            $query->orWhere('case_type','LIKE','%'.$search.'%');
                            $query->orWhere('state_case','LIKE','%'.$search.'%');
                            $query->orWhere('phone','LIKE','%'.$search.'%');
                            $query->orWhere('email','LIKE','%'.$search.'%');
                            $query->orWhere('message','LIKE','%'.$search.'%');
                            $query->orWhere('request_status','LIKE','%'.$search.'%');
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
                            $query->orWhere('first_name','LIKE','%'.$search.'%');
                            $query->orWhere('last_name','LIKE','%'.$search.'%');
                            $query->orWhere('case_type','LIKE','%'.$search.'%');
                            $query->orWhere('state_case','LIKE','%'.$search.'%');
                            $query->orWhere('phone','LIKE','%'.$search.'%');
                            $query->orWhere('email','LIKE','%'.$search.'%');
                            $query->orWhere('message','LIKE','%'.$search.'%');
                            $query->orWhere('request_status','LIKE','%'.$search.'%');
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

    
    public function NeedAnAttorneyQuery($request)
    {
        $NeedAnAttorney_data=NeedAnAttorney::orderBy('id','DESC')->get();

        return $NeedAnAttorney_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','First Name','Last Name','Case Type','State Case','Phone','Email','Message','Request Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->NeedAnAttorneyQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->first_name,$voi->last_name,$voi->case_type,$voi->state_case,$voi->phone,$voi->email,$voi->message,$voi->request_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Need An Attorney Report',
            'report_title'=>'Need An Attorney Report',
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
                            <th class='text-center' style='font-size:12px;' >First Name</th>
                        
                            <th class='text-center' style='font-size:12px;' >Last Name</th>
                        
                            <th class='text-center' style='font-size:12px;' >Case Type</th>
                        
                            <th class='text-center' style='font-size:12px;' >State Case</th>
                        
                            <th class='text-center' style='font-size:12px;' >Phone</th>
                        
                            <th class='text-center' style='font-size:12px;' >Email</th>
                        
                            <th class='text-center' style='font-size:12px;' >Message</th>
                        
                            <th class='text-center' style='font-size:12px;' >Request Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->NeedAnAttorneyQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->first_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->last_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->case_type."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->state_case."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->phone."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->email."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->message."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->request_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Need An Attorney Report',$html);


    }
    public function show(NeedAnAttorney $needanattorney)
    {
        
        $tab=NeedAnAttorney::all();return view('admin.pages.needanattorney.needanattorney_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NeedAnAttorney  $needanattorney
     * @return \Illuminate\Http\Response
     */
    public function edit(NeedAnAttorney $needanattorney,$id=0)
    {
        $tab=NeedAnAttorney::find($id); 
        $tab_CaseType=CaseType::all();
        $tab_USAState=USAState::all();     
        return view('admin.pages.needanattorney.needanattorney_edit',['dataRow_CaseType'=>$tab_CaseType,'dataRow_USAState'=>$tab_USAState,'dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NeedAnAttorney  $needanattorney
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NeedAnAttorney $needanattorney,$id=0)
    {
        $this->validate($request,[
                
                'first_name'=>'required',
                'last_name'=>'required',
                'case_type'=>'required',
                'state_case'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'message'=>'required',
                'request_status'=>'required',
        ]);

        $this->SystemAdminLog("Need An Attorney","Update","Edit / Modify");

        
        $tab_2_CaseType=CaseType::where('id',$request->case_type)->first();
        $case_type_2_CaseType=$tab_2_CaseType->name;
        $tab_3_USAState=USAState::where('id',$request->state_case)->first();
        $state_case_3_USAState=$tab_3_USAState->name;
        $tab=NeedAnAttorney::find($id);
        
        $tab->first_name=$request->first_name;
        $tab->last_name=$request->last_name;
        $tab->case_type_name=$case_type_2_CaseType;
        $tab->case_type=$request->case_type;
        $tab->state_case_name=$state_case_3_USAState;
        $tab->state_case=$request->state_case;
        $tab->phone=$request->phone;
        $tab->email=$request->email;
        $tab->message=$request->message;
        $tab->request_status=$request->request_status;
        $tab->save();

        return redirect('needanattorney')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NeedAnAttorney  $needanattorney
     * @return \Illuminate\Http\Response
     */
    public function destroy(NeedAnAttorney $needanattorney,$id=0)
    {
        $this->SystemAdminLog("Need An Attorney","Destroy","Delete");

        $tab=NeedAnAttorney::find($id);
        $tab->delete();
        return redirect('needanattorney')->with('status','Deleted Successfully !');}
}
