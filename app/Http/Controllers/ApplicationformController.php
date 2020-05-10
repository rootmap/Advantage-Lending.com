<?php

namespace App\Http\Controllers;

use App\ApplicationForm;
use App\AdminLog;
use Illuminate\Http\Request;
use App\USAState;
                
use App\CaseType;
                
use App\HearAbout;
                

class ApplicationFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Application Form";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=ApplicationForm::all();
        return view('admin.pages.applicationform.applicationform_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tab_USAState=USAState::all();
        $tab_CaseType=CaseType::all();
        $tab_HearAbout=HearAbout::all();
        $tab_USAState=USAState::all();           
        return view('admin.pages.applicationform.applicationform_create',['dataRow_USAState'=>$tab_USAState,'dataRow_CaseType'=>$tab_CaseType,'dataRow_HearAbout'=>$tab_HearAbout,'dataRow_USAState'=>$tab_USAState]);
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
                'how_much_money_do_you_need'=>'required',
                'what_was_the_date_of_your_accident'=>'required',
                'state_case'=>'required',
                'case_type'=>'required',
                'how_did_you_heard'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'how_should_we_contact_you'=>'required',
                'street_address'=>'required',
                'state'=>'required',
                'zip_code'=>'required',
                'attorney__first_name'=>'required',
                'attorney__last_name'=>'required',
                'law_firm_name'=>'required',
                'law_firm_phone'=>'required',
                'case_status'=>'required',
                'application_status'=>'required',
        ]);

        $this->SystemAdminLog("Application Form","Save New","Create New");

        
        $tab_4_USAState=USAState::where('id',$request->state_case)->first();
        $state_case_4_USAState=$tab_4_USAState->name;
        $tab_5_CaseType=CaseType::where('id',$request->case_type)->first();
        $case_type_5_CaseType=$tab_5_CaseType->name;
        $tab_6_HearAbout=HearAbout::where('id',$request->how_did_you_heard)->first();
        $how_did_you_heard_6_HearAbout=$tab_6_HearAbout->name;
        $tab_11_USAState=USAState::where('id',$request->state)->first();
        $state_11_USAState=$tab_11_USAState->name;
        $tab=new ApplicationForm();
        
        $tab->first_name=$request->first_name;
        $tab->last_name=$request->last_name;
        $tab->how_much_money_do_you_need=$request->how_much_money_do_you_need;
        $tab->what_was_the_date_of_your_accident=$request->what_was_the_date_of_your_accident;
        $tab->state_case_name=$state_case_4_USAState;
        $tab->state_case=$request->state_case;
        $tab->case_type_name=$case_type_5_CaseType;
        $tab->case_type=$request->case_type;
        $tab->how_did_you_heard_name=$how_did_you_heard_6_HearAbout;
        $tab->how_did_you_heard=$request->how_did_you_heard;
        $tab->email=$request->email;
        $tab->phone=$request->phone;
        $tab->how_should_we_contact_you=$request->how_should_we_contact_you;
        $tab->street_address=$request->street_address;
        $tab->state_name=$state_11_USAState;
        $tab->state=$request->state;
        $tab->zip_code=$request->zip_code;
        $tab->attorney__first_name=$request->attorney__first_name;
        $tab->attorney__last_name=$request->attorney__last_name;
        $tab->law_firm_name=$request->law_firm_name;
        $tab->law_firm_phone=$request->law_firm_phone;
        $tab->case_status=$request->case_status;
        $tab->application_status=$request->application_status;
        $tab->save();

        return redirect('applicationform')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'first_name'=>'required',
                'last_name'=>'required',
                'how_much_money_do_you_need'=>'required',
                'what_was_the_date_of_your_accident'=>'required',
                'state_case'=>'required',
                'case_type'=>'required',
                'how_did_you_heard'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'how_should_we_contact_you'=>'required',
                'street_address'=>'required',
                'state'=>'required',
                'zip_code'=>'required',
                'attorney__first_name'=>'required',
                'attorney__last_name'=>'required',
                'law_firm_name'=>'required',
                'law_firm_phone'=>'required',
                'case_status'=>'required',
                'application_status'=>'required',
        ]);

        $tab=new ApplicationForm();
        
        $tab->first_name=$request->first_name;
        $tab->last_name=$request->last_name;
        $tab->how_much_money_do_you_need=$request->how_much_money_do_you_need;
        $tab->what_was_the_date_of_your_accident=$request->what_was_the_date_of_your_accident;
        $tab->state_case_name=$state_case_4_USAState;
        $tab->state_case=$request->state_case;
        $tab->case_type_name=$case_type_5_CaseType;
        $tab->case_type=$request->case_type;
        $tab->how_did_you_heard_name=$how_did_you_heard_6_HearAbout;
        $tab->how_did_you_heard=$request->how_did_you_heard;
        $tab->email=$request->email;
        $tab->phone=$request->phone;
        $tab->how_should_we_contact_you=$request->how_should_we_contact_you;
        $tab->street_address=$request->street_address;
        $tab->state_name=$state_11_USAState;
        $tab->state=$request->state;
        $tab->zip_code=$request->zip_code;
        $tab->attorney__first_name=$request->attorney__first_name;
        $tab->attorney__last_name=$request->attorney__last_name;
        $tab->law_firm_name=$request->law_firm_name;
        $tab->law_firm_phone=$request->law_firm_phone;
        $tab->case_status=$request->case_status;
        $tab->application_status=$request->application_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ApplicationForm  $applicationform
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('first_name','LIKE','%'.$search.'%');
                            $query->orWhere('last_name','LIKE','%'.$search.'%');
                            $query->orWhere('how_much_money_do_you_need','LIKE','%'.$search.'%');
                            $query->orWhere('what_was_the_date_of_your_accident','LIKE','%'.$search.'%');
                            $query->orWhere('state_case','LIKE','%'.$search.'%');
                            $query->orWhere('case_type','LIKE','%'.$search.'%');
                            $query->orWhere('how_did_you_heard','LIKE','%'.$search.'%');
                            $query->orWhere('email','LIKE','%'.$search.'%');
                            $query->orWhere('phone','LIKE','%'.$search.'%');
                            $query->orWhere('how_should_we_contact_you','LIKE','%'.$search.'%');
                            $query->orWhere('street_address','LIKE','%'.$search.'%');
                            $query->orWhere('state','LIKE','%'.$search.'%');
                            $query->orWhere('zip_code','LIKE','%'.$search.'%');
                            $query->orWhere('attorney__first_name','LIKE','%'.$search.'%');
                            $query->orWhere('attorney__last_name','LIKE','%'.$search.'%');
                            $query->orWhere('law_firm_name','LIKE','%'.$search.'%');
                            $query->orWhere('law_firm_phone','LIKE','%'.$search.'%');
                            $query->orWhere('case_status','LIKE','%'.$search.'%');
                            $query->orWhere('application_status','LIKE','%'.$search.'%');
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
                            $query->orWhere('how_much_money_do_you_need','LIKE','%'.$search.'%');
                            $query->orWhere('what_was_the_date_of_your_accident','LIKE','%'.$search.'%');
                            $query->orWhere('state_case','LIKE','%'.$search.'%');
                            $query->orWhere('case_type','LIKE','%'.$search.'%');
                            $query->orWhere('how_did_you_heard','LIKE','%'.$search.'%');
                            $query->orWhere('email','LIKE','%'.$search.'%');
                            $query->orWhere('phone','LIKE','%'.$search.'%');
                            $query->orWhere('how_should_we_contact_you','LIKE','%'.$search.'%');
                            $query->orWhere('street_address','LIKE','%'.$search.'%');
                            $query->orWhere('state','LIKE','%'.$search.'%');
                            $query->orWhere('zip_code','LIKE','%'.$search.'%');
                            $query->orWhere('attorney__first_name','LIKE','%'.$search.'%');
                            $query->orWhere('attorney__last_name','LIKE','%'.$search.'%');
                            $query->orWhere('law_firm_name','LIKE','%'.$search.'%');
                            $query->orWhere('law_firm_phone','LIKE','%'.$search.'%');
                            $query->orWhere('case_status','LIKE','%'.$search.'%');
                            $query->orWhere('application_status','LIKE','%'.$search.'%');
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

    
    public function ApplicationFormQuery($request)
    {
        $ApplicationForm_data=ApplicationForm::orderBy('id','DESC')->get();

        return $ApplicationForm_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','First Name','Last Name','How much money do you need','What was the date of your accident','State Case','Case Type','How Did You Heard','Email','Phone','How should we contact you','Street Address','State','ZIP Code','Attorney  First Name','Attorney  Last Name','Law Firm Name','Law Firm Phone','Case Status','Application Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->ApplicationFormQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->first_name,$voi->last_name,$voi->how_much_money_do_you_need,$voi->what_was_the_date_of_your_accident,$voi->state_case,$voi->case_type,$voi->how_did_you_heard,$voi->email,$voi->phone,$voi->how_should_we_contact_you,$voi->street_address,$voi->state,$voi->zip_code,$voi->attorney__first_name,$voi->attorney__last_name,$voi->law_firm_name,$voi->law_firm_phone,$voi->case_status,$voi->application_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Application Form Report',
            'report_title'=>'Application Form Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >How much money do you need</th>
                        
                            <th class='text-center' style='font-size:12px;' >What was the date of your accident</th>
                        
                            <th class='text-center' style='font-size:12px;' >State Case</th>
                        
                            <th class='text-center' style='font-size:12px;' >Case Type</th>
                        
                            <th class='text-center' style='font-size:12px;' >How Did You Heard</th>
                        
                            <th class='text-center' style='font-size:12px;' >Email</th>
                        
                            <th class='text-center' style='font-size:12px;' >Phone</th>
                        
                            <th class='text-center' style='font-size:12px;' >How should we contact you</th>
                        
                            <th class='text-center' style='font-size:12px;' >Street Address</th>
                        
                            <th class='text-center' style='font-size:12px;' >State</th>
                        
                            <th class='text-center' style='font-size:12px;' >ZIP Code</th>
                        
                            <th class='text-center' style='font-size:12px;' >Attorney  First Name</th>
                        
                            <th class='text-center' style='font-size:12px;' >Attorney  Last Name</th>
                        
                            <th class='text-center' style='font-size:12px;' >Law Firm Name</th>
                        
                            <th class='text-center' style='font-size:12px;' >Law Firm Phone</th>
                        
                            <th class='text-center' style='font-size:12px;' >Case Status</th>
                        
                            <th class='text-center' style='font-size:12px;' >Application Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->ApplicationFormQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->first_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->last_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->how_much_money_do_you_need."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->what_was_the_date_of_your_accident."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->state_case."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->case_type."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->how_did_you_heard."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->email."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->phone."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->how_should_we_contact_you."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->street_address."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->state."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->zip_code."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->attorney__first_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->attorney__last_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->law_firm_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->law_firm_phone."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->case_status."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->application_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Application Form Report',$html);


    }
    public function show(ApplicationForm $applicationform)
    {
        
        $tab=ApplicationForm::all();return view('admin.pages.applicationform.applicationform_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ApplicationForm  $applicationform
     * @return \Illuminate\Http\Response
     */
    public function edit(ApplicationForm $applicationform,$id=0)
    {
        $tab=ApplicationForm::find($id); 
        $tab_USAState=USAState::all();
        $tab_CaseType=CaseType::all();
        $tab_HearAbout=HearAbout::all();
        $tab_USAState=USAState::all();     
        return view('admin.pages.applicationform.applicationform_edit',['dataRow_USAState'=>$tab_USAState,'dataRow_CaseType'=>$tab_CaseType,'dataRow_HearAbout'=>$tab_HearAbout,'dataRow_USAState'=>$tab_USAState,'dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ApplicationForm  $applicationform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApplicationForm $applicationform,$id=0)
    {
        $this->validate($request,[
                
                'first_name'=>'required',
                'last_name'=>'required',
                'how_much_money_do_you_need'=>'required',
                'what_was_the_date_of_your_accident'=>'required',
                'state_case'=>'required',
                'case_type'=>'required',
                'how_did_you_heard'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'how_should_we_contact_you'=>'required',
                'street_address'=>'required',
                'state'=>'required',
                'zip_code'=>'required',
                'attorney__first_name'=>'required',
                'attorney__last_name'=>'required',
                'law_firm_name'=>'required',
                'law_firm_phone'=>'required',
                'case_status'=>'required',
                'application_status'=>'required',
        ]);

        $this->SystemAdminLog("Application Form","Update","Edit / Modify");

        
        $tab_4_USAState=USAState::where('id',$request->state_case)->first();
        $state_case_4_USAState=$tab_4_USAState->name;
        $tab_5_CaseType=CaseType::where('id',$request->case_type)->first();
        $case_type_5_CaseType=$tab_5_CaseType->name;
        $tab_6_HearAbout=HearAbout::where('id',$request->how_did_you_heard)->first();
        $how_did_you_heard_6_HearAbout=$tab_6_HearAbout->name;
        $tab_11_USAState=USAState::where('id',$request->state)->first();
        $state_11_USAState=$tab_11_USAState->name;
        $tab=ApplicationForm::find($id);
        
        $tab->first_name=$request->first_name;
        $tab->last_name=$request->last_name;
        $tab->how_much_money_do_you_need=$request->how_much_money_do_you_need;
        $tab->what_was_the_date_of_your_accident=$request->what_was_the_date_of_your_accident;
        $tab->state_case_name=$state_case_4_USAState;
        $tab->state_case=$request->state_case;
        $tab->case_type_name=$case_type_5_CaseType;
        $tab->case_type=$request->case_type;
        $tab->how_did_you_heard_name=$how_did_you_heard_6_HearAbout;
        $tab->how_did_you_heard=$request->how_did_you_heard;
        $tab->email=$request->email;
        $tab->phone=$request->phone;
        $tab->how_should_we_contact_you=$request->how_should_we_contact_you;
        $tab->street_address=$request->street_address;
        $tab->state_name=$state_11_USAState;
        $tab->state=$request->state;
        $tab->zip_code=$request->zip_code;
        $tab->attorney__first_name=$request->attorney__first_name;
        $tab->attorney__last_name=$request->attorney__last_name;
        $tab->law_firm_name=$request->law_firm_name;
        $tab->law_firm_phone=$request->law_firm_phone;
        $tab->case_status=$request->case_status;
        $tab->application_status=$request->application_status;
        $tab->save();

        return redirect('applicationform')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ApplicationForm  $applicationform
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApplicationForm $applicationform,$id=0)
    {
        $this->SystemAdminLog("Application Form","Destroy","Delete");

        $tab=ApplicationForm::find($id);
        $tab->delete();
        return redirect('applicationform')->with('status','Deleted Successfully !');}
}
