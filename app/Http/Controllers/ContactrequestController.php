<?php

namespace App\Http\Controllers;

use App\ContactRequest;
use App\AdminLog;
use Illuminate\Http\Request;
use App\ContactMeAbout;
                
use App\USAState;
                

class ContactRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Contact Request";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=ContactRequest::all();
        return view('admin.pages.contactrequest.contactrequest_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tab_ContactMeAbout=ContactMeAbout::all();
        $tab_USAState=USAState::all();           
        return view('admin.pages.contactrequest.contactrequest_create',['dataRow_ContactMeAbout'=>$tab_ContactMeAbout,'dataRow_USAState'=>$tab_USAState]);
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
                'contact_about'=>'required',
                'state_case'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'message'=>'required',
        ]);

        $this->SystemAdminLog("Contact Request","Save New","Create New");

        
        $tab_2_ContactMeAbout=ContactMeAbout::where('id',$request->contact_about)->first();
        $contact_about_2_ContactMeAbout=$tab_2_ContactMeAbout->Reviewed;
        $tab_3_USAState=USAState::where('id',$request->state_case)->first();
        $state_case_3_USAState=$tab_3_USAState->name;
        $tab=new ContactRequest();
        
        $tab->first_name=$request->first_name;
        $tab->last_name=$request->last_name;
        $tab->contact_about_Reviewed=$contact_about_2_ContactMeAbout;
        $tab->contact_about=$request->contact_about;
        $tab->state_case_name=$state_case_3_USAState;
        $tab->state_case=$request->state_case;
        $tab->phone=$request->phone;
        $tab->email=$request->email;
        $tab->message=$request->message;
        $tab->save();

        return redirect('contactrequest')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'first_name'=>'required',
                'last_name'=>'required',
                'contact_about'=>'required',
                'state_case'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'message'=>'required',
        ]);

        $tab=new ContactRequest();
        
        $tab->first_name=$request->first_name;
        $tab->last_name=$request->last_name;
        $tab->contact_about_Reviewed=$contact_about_2_ContactMeAbout;
        $tab->contact_about=$request->contact_about;
        $tab->state_case_name=$state_case_3_USAState;
        $tab->state_case=$request->state_case;
        $tab->phone=$request->phone;
        $tab->email=$request->email;
        $tab->message=$request->message;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactRequest  $contactrequest
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('first_name','LIKE','%'.$search.'%');
                            $query->orWhere('last_name','LIKE','%'.$search.'%');
                            $query->orWhere('contact_about','LIKE','%'.$search.'%');
                            $query->orWhere('state_case','LIKE','%'.$search.'%');
                            $query->orWhere('phone','LIKE','%'.$search.'%');
                            $query->orWhere('email','LIKE','%'.$search.'%');
                            $query->orWhere('message','LIKE','%'.$search.'%');
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
                            $query->orWhere('contact_about','LIKE','%'.$search.'%');
                            $query->orWhere('state_case','LIKE','%'.$search.'%');
                            $query->orWhere('phone','LIKE','%'.$search.'%');
                            $query->orWhere('email','LIKE','%'.$search.'%');
                            $query->orWhere('message','LIKE','%'.$search.'%');
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

    
    public function ContactRequestQuery($request)
    {
        $ContactRequest_data=ContactRequest::orderBy('id','DESC')->get();

        return $ContactRequest_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','First Name','Last Name','Contact About','State Case','Phone','Email','Message','Created Date');
        array_push($data, $array_column);
        $inv=$this->ContactRequestQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->first_name,$voi->last_name,$voi->contact_about,$voi->state_case,$voi->phone,$voi->email,$voi->message,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Contact Request Report',
            'report_title'=>'Contact Request Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Contact About</th>
                        
                            <th class='text-center' style='font-size:12px;' >State Case</th>
                        
                            <th class='text-center' style='font-size:12px;' >Phone</th>
                        
                            <th class='text-center' style='font-size:12px;' >Email</th>
                        
                            <th class='text-center' style='font-size:12px;' >Message</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->ContactRequestQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->first_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->last_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->contact_about."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->state_case."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->phone."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->email."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->message."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Contact Request Report',$html);


    }
    public function show(ContactRequest $contactrequest)
    {
        
        $tab=ContactRequest::all();return view('admin.pages.contactrequest.contactrequest_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactRequest  $contactrequest
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactRequest $contactrequest,$id=0)
    {
        $tab=ContactRequest::find($id); 
        $tab_ContactMeAbout=ContactMeAbout::all();
        $tab_USAState=USAState::all();     
        return view('admin.pages.contactrequest.contactrequest_edit',['dataRow_ContactMeAbout'=>$tab_ContactMeAbout,'dataRow_USAState'=>$tab_USAState,'dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactRequest  $contactrequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactRequest $contactrequest,$id=0)
    {
        $this->validate($request,[
                
                'first_name'=>'required',
                'last_name'=>'required',
                'contact_about'=>'required',
                'state_case'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'message'=>'required',
        ]);

        $this->SystemAdminLog("Contact Request","Update","Edit / Modify");

        
        $tab_2_ContactMeAbout=ContactMeAbout::where('id',$request->contact_about)->first();
        $contact_about_2_ContactMeAbout=$tab_2_ContactMeAbout->Reviewed;
        $tab_3_USAState=USAState::where('id',$request->state_case)->first();
        $state_case_3_USAState=$tab_3_USAState->name;
        $tab=ContactRequest::find($id);
        
        $tab->first_name=$request->first_name;
        $tab->last_name=$request->last_name;
        $tab->contact_about_Reviewed=$contact_about_2_ContactMeAbout;
        $tab->contact_about=$request->contact_about;
        $tab->state_case_name=$state_case_3_USAState;
        $tab->state_case=$request->state_case;
        $tab->phone=$request->phone;
        $tab->email=$request->email;
        $tab->message=$request->message;
        $tab->save();

        return redirect('contactrequest')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactRequest  $contactrequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactRequest $contactrequest,$id=0)
    {
        $this->SystemAdminLog("Contact Request","Destroy","Delete");

        $tab=ContactRequest::find($id);
        $tab->delete();
        return redirect('contactrequest')->with('status','Deleted Successfully !');}
}
