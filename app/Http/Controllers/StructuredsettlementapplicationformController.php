<?php

namespace App\Http\Controllers;

use App\StructuredSettlementApplicationForm;
use App\AdminLog;
use Illuminate\Http\Request;
use App\USAState;
                

class StructuredSettlementApplicationFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Structured Settlement Application Form";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=StructuredSettlementApplicationForm::all();
        return view('admin.pages.structuredsettlementapplicationform.structuredsettlementapplicationform_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tab_USAState=USAState::all();           
        return view('admin.pages.structuredsettlementapplicationform.structuredsettlementapplicationform_create',['dataRow_USAState'=>$tab_USAState]);
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
                'age_over_18'=>'required',
                'address'=>'required',
                'street_address'=>'required',
                'state'=>'required',
                'zip_code'=>'required',
                'when_did_your_case_settle'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'total_amount_of_the_award'=>'required',
                'how_much_receive_each_payment'=>'required',
                'how_much_do_you_need_now'=>'required',
                'refer_your_application'=>'required',
                'settlement_status'=>'required',
        ]);

        $this->SystemAdminLog("Structured Settlement Application Form","Save New","Create New");

        
        $tab_5_USAState=USAState::where('id',$request->state)->first();
        $state_5_USAState=$tab_5_USAState->name;
        $tab=new StructuredSettlementApplicationForm();
        
        $tab->first_name=$request->first_name;
        $tab->last_name=$request->last_name;
        $tab->age_over_18=$request->age_over_18;
        $tab->address=$request->address;
        $tab->street_address=$request->street_address;
        $tab->state_name=$state_5_USAState;
        $tab->state=$request->state;
        $tab->zip_code=$request->zip_code;
        $tab->when_did_your_case_settle=$request->when_did_your_case_settle;
        $tab->email=$request->email;
        $tab->phone=$request->phone;
        $tab->total_amount_of_the_award=$request->total_amount_of_the_award;
        $tab->how_much_receive_each_payment=$request->how_much_receive_each_payment;
        $tab->how_much_do_you_need_now=$request->how_much_do_you_need_now;
        $tab->refer_your_application=$request->refer_your_application;
        $tab->settlement_status=$request->settlement_status;
        $tab->save();

        return redirect('structuredsettlementapplicationform')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'first_name'=>'required',
                'last_name'=>'required',
                'age_over_18'=>'required',
                'address'=>'required',
                'street_address'=>'required',
                'state'=>'required',
                'zip_code'=>'required',
                'when_did_your_case_settle'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'total_amount_of_the_award'=>'required',
                'how_much_receive_each_payment'=>'required',
                'how_much_do_you_need_now'=>'required',
                'refer_your_application'=>'required',
                'settlement_status'=>'required',
        ]);

        $tab=new StructuredSettlementApplicationForm();
        
        $tab->first_name=$request->first_name;
        $tab->last_name=$request->last_name;
        $tab->age_over_18=$request->age_over_18;
        $tab->address=$request->address;
        $tab->street_address=$request->street_address;
        $tab->state_name=$state_5_USAState;
        $tab->state=$request->state;
        $tab->zip_code=$request->zip_code;
        $tab->when_did_your_case_settle=$request->when_did_your_case_settle;
        $tab->email=$request->email;
        $tab->phone=$request->phone;
        $tab->total_amount_of_the_award=$request->total_amount_of_the_award;
        $tab->how_much_receive_each_payment=$request->how_much_receive_each_payment;
        $tab->how_much_do_you_need_now=$request->how_much_do_you_need_now;
        $tab->refer_your_application=$request->refer_your_application;
        $tab->settlement_status=$request->settlement_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StructuredSettlementApplicationForm  $structuredsettlementapplicationform
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('first_name','LIKE','%'.$search.'%');
                            $query->orWhere('last_name','LIKE','%'.$search.'%');
                            $query->orWhere('age_over_18','LIKE','%'.$search.'%');
                            $query->orWhere('address','LIKE','%'.$search.'%');
                            $query->orWhere('street_address','LIKE','%'.$search.'%');
                            $query->orWhere('state','LIKE','%'.$search.'%');
                            $query->orWhere('zip_code','LIKE','%'.$search.'%');
                            $query->orWhere('when_did_your_case_settle','LIKE','%'.$search.'%');
                            $query->orWhere('email','LIKE','%'.$search.'%');
                            $query->orWhere('phone','LIKE','%'.$search.'%');
                            $query->orWhere('total_amount_of_the_award','LIKE','%'.$search.'%');
                            $query->orWhere('how_much_receive_each_payment','LIKE','%'.$search.'%');
                            $query->orWhere('how_much_do_you_need_now','LIKE','%'.$search.'%');
                            $query->orWhere('refer_your_application','LIKE','%'.$search.'%');
                            $query->orWhere('settlement_status','LIKE','%'.$search.'%');
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
                            $query->orWhere('age_over_18','LIKE','%'.$search.'%');
                            $query->orWhere('address','LIKE','%'.$search.'%');
                            $query->orWhere('street_address','LIKE','%'.$search.'%');
                            $query->orWhere('state','LIKE','%'.$search.'%');
                            $query->orWhere('zip_code','LIKE','%'.$search.'%');
                            $query->orWhere('when_did_your_case_settle','LIKE','%'.$search.'%');
                            $query->orWhere('email','LIKE','%'.$search.'%');
                            $query->orWhere('phone','LIKE','%'.$search.'%');
                            $query->orWhere('total_amount_of_the_award','LIKE','%'.$search.'%');
                            $query->orWhere('how_much_receive_each_payment','LIKE','%'.$search.'%');
                            $query->orWhere('how_much_do_you_need_now','LIKE','%'.$search.'%');
                            $query->orWhere('refer_your_application','LIKE','%'.$search.'%');
                            $query->orWhere('settlement_status','LIKE','%'.$search.'%');
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

    
    public function StructuredSettlementApplicationFormQuery($request)
    {
        $StructuredSettlementApplicationForm_data=StructuredSettlementApplicationForm::orderBy('id','DESC')->get();

        return $StructuredSettlementApplicationForm_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','First Name','Last name','Age Over 18','Address','Street Address','State','ZIP CODE','When did your case settle','Email','Phone','Total Amount Of The Award','How Much Receive Each Payment','How Much Do You Need Now','Refer Your Application','Settlement Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->StructuredSettlementApplicationFormQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->first_name,$voi->last_name,$voi->age_over_18,$voi->address,$voi->street_address,$voi->state,$voi->zip_code,$voi->when_did_your_case_settle,$voi->email,$voi->phone,$voi->total_amount_of_the_award,$voi->how_much_receive_each_payment,$voi->how_much_do_you_need_now,$voi->refer_your_application,$voi->settlement_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Structured Settlement Application Form Report',
            'report_title'=>'Structured Settlement Application Form Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Last name</th>
                        
                            <th class='text-center' style='font-size:12px;' >Age Over 18</th>
                        
                            <th class='text-center' style='font-size:12px;' >Address</th>
                        
                            <th class='text-center' style='font-size:12px;' >Street Address</th>
                        
                            <th class='text-center' style='font-size:12px;' >State</th>
                        
                            <th class='text-center' style='font-size:12px;' >ZIP CODE</th>
                        
                            <th class='text-center' style='font-size:12px;' >When did your case settle</th>
                        
                            <th class='text-center' style='font-size:12px;' >Email</th>
                        
                            <th class='text-center' style='font-size:12px;' >Phone</th>
                        
                            <th class='text-center' style='font-size:12px;' >Total Amount Of The Award</th>
                        
                            <th class='text-center' style='font-size:12px;' >How Much Receive Each Payment</th>
                        
                            <th class='text-center' style='font-size:12px;' >How Much Do You Need Now</th>
                        
                            <th class='text-center' style='font-size:12px;' >Refer Your Application</th>
                        
                            <th class='text-center' style='font-size:12px;' >Settlement Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->StructuredSettlementApplicationFormQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->first_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->last_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->age_over_18."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->address."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->street_address."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->state."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->zip_code."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->when_did_your_case_settle."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->email."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->phone."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->total_amount_of_the_award."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->how_much_receive_each_payment."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->how_much_do_you_need_now."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->refer_your_application."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->settlement_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Structured Settlement Application Form Report',$html);


    }
    public function show(StructuredSettlementApplicationForm $structuredsettlementapplicationform)
    {
        
        $tab=StructuredSettlementApplicationForm::all();return view('admin.pages.structuredsettlementapplicationform.structuredsettlementapplicationform_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StructuredSettlementApplicationForm  $structuredsettlementapplicationform
     * @return \Illuminate\Http\Response
     */
    public function edit(StructuredSettlementApplicationForm $structuredsettlementapplicationform,$id=0)
    {
        $tab=StructuredSettlementApplicationForm::find($id); 
        $tab_USAState=USAState::all();     
        return view('admin.pages.structuredsettlementapplicationform.structuredsettlementapplicationform_edit',['dataRow_USAState'=>$tab_USAState,'dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StructuredSettlementApplicationForm  $structuredsettlementapplicationform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StructuredSettlementApplicationForm $structuredsettlementapplicationform,$id=0)
    {
        $this->validate($request,[
                
                'first_name'=>'required',
                'last_name'=>'required',
                'age_over_18'=>'required',
                'address'=>'required',
                'street_address'=>'required',
                'state'=>'required',
                'zip_code'=>'required',
                'when_did_your_case_settle'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'total_amount_of_the_award'=>'required',
                'how_much_receive_each_payment'=>'required',
                'how_much_do_you_need_now'=>'required',
                'refer_your_application'=>'required',
                'settlement_status'=>'required',
        ]);

        $this->SystemAdminLog("Structured Settlement Application Form","Update","Edit / Modify");

        
        $tab_5_USAState=USAState::where('id',$request->state)->first();
        $state_5_USAState=$tab_5_USAState->name;
        $tab=StructuredSettlementApplicationForm::find($id);
        
        $tab->first_name=$request->first_name;
        $tab->last_name=$request->last_name;
        $tab->age_over_18=$request->age_over_18;
        $tab->address=$request->address;
        $tab->street_address=$request->street_address;
        $tab->state_name=$state_5_USAState;
        $tab->state=$request->state;
        $tab->zip_code=$request->zip_code;
        $tab->when_did_your_case_settle=$request->when_did_your_case_settle;
        $tab->email=$request->email;
        $tab->phone=$request->phone;
        $tab->total_amount_of_the_award=$request->total_amount_of_the_award;
        $tab->how_much_receive_each_payment=$request->how_much_receive_each_payment;
        $tab->how_much_do_you_need_now=$request->how_much_do_you_need_now;
        $tab->refer_your_application=$request->refer_your_application;
        $tab->settlement_status=$request->settlement_status;
        $tab->save();

        return redirect('structuredsettlementapplicationform')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StructuredSettlementApplicationForm  $structuredsettlementapplicationform
     * @return \Illuminate\Http\Response
     */
    public function destroy(StructuredSettlementApplicationForm $structuredsettlementapplicationform,$id=0)
    {
        $this->SystemAdminLog("Structured Settlement Application Form","Destroy","Delete");

        $tab=StructuredSettlementApplicationForm::find($id);
        $tab->delete();
        return redirect('structuredsettlementapplicationform')->with('status','Deleted Successfully !');}
}
