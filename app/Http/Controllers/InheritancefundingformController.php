<?php

namespace App\Http\Controllers;

use App\InheritanceFundingForm;
use App\AdminLog;
use Illuminate\Http\Request;
use App\USAState;
                

class InheritanceFundingFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Inheritance Funding Form";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=InheritanceFundingForm::all();
        return view('admin.pages.inheritancefundingform.inheritancefundingform_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tab_USAState=USAState::all();           
        return view('admin.pages.inheritancefundingform.inheritancefundingform_create',['dataRow_USAState'=>$tab_USAState]);
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
                'address'=>'required',
                'city'=>'required',
                'state'=>'required',
                'zip_code'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'person_received_inheritance'=>'required',
                'receive_inheritance_date'=>'required',
                'total_amount_inheritance'=>'required',
                'amount_you_need_now'=>'required',
                'would_you_like_to_refer'=>'required',
                'form_status'=>'required',
        ]);

        $this->SystemAdminLog("Inheritance Funding Form","Save New","Create New");

        
        $tab_4_USAState=USAState::where('id',$request->state)->first();
        $state_4_USAState=$tab_4_USAState->name;
        $tab=new InheritanceFundingForm();
        
        $tab->first_name=$request->first_name;
        $tab->last_name=$request->last_name;
        $tab->address=$request->address;
        $tab->city=$request->city;
        $tab->state_name=$state_4_USAState;
        $tab->state=$request->state;
        $tab->zip_code=$request->zip_code;
        $tab->email=$request->email;
        $tab->phone=$request->phone;
        $tab->person_received_inheritance=$request->person_received_inheritance;
        $tab->receive_inheritance_date=$request->receive_inheritance_date;
        $tab->total_amount_inheritance=$request->total_amount_inheritance;
        $tab->amount_you_need_now=$request->amount_you_need_now;
        $tab->would_you_like_to_refer=$request->would_you_like_to_refer;
        $tab->form_status=$request->form_status;
        $tab->save();

        return redirect('inheritancefundingform')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'first_name'=>'required',
                'last_name'=>'required',
                'address'=>'required',
                'city'=>'required',
                'state'=>'required',
                'zip_code'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'person_received_inheritance'=>'required',
                'receive_inheritance_date'=>'required',
                'total_amount_inheritance'=>'required',
                'amount_you_need_now'=>'required',
                'would_you_like_to_refer'=>'required',
                'form_status'=>'required',
        ]);

        $tab=new InheritanceFundingForm();
        
        $tab->first_name=$request->first_name;
        $tab->last_name=$request->last_name;
        $tab->address=$request->address;
        $tab->city=$request->city;
        $tab->state_name=$state_4_USAState;
        $tab->state=$request->state;
        $tab->zip_code=$request->zip_code;
        $tab->email=$request->email;
        $tab->phone=$request->phone;
        $tab->person_received_inheritance=$request->person_received_inheritance;
        $tab->receive_inheritance_date=$request->receive_inheritance_date;
        $tab->total_amount_inheritance=$request->total_amount_inheritance;
        $tab->amount_you_need_now=$request->amount_you_need_now;
        $tab->would_you_like_to_refer=$request->would_you_like_to_refer;
        $tab->form_status=$request->form_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InheritanceFundingForm  $inheritancefundingform
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('first_name','LIKE','%'.$search.'%');
                            $query->orWhere('last_name','LIKE','%'.$search.'%');
                            $query->orWhere('address','LIKE','%'.$search.'%');
                            $query->orWhere('city','LIKE','%'.$search.'%');
                            $query->orWhere('state','LIKE','%'.$search.'%');
                            $query->orWhere('zip_code','LIKE','%'.$search.'%');
                            $query->orWhere('email','LIKE','%'.$search.'%');
                            $query->orWhere('phone','LIKE','%'.$search.'%');
                            $query->orWhere('person_received_inheritance','LIKE','%'.$search.'%');
                            $query->orWhere('receive_inheritance_date','LIKE','%'.$search.'%');
                            $query->orWhere('total_amount_inheritance','LIKE','%'.$search.'%');
                            $query->orWhere('amount_you_need_now','LIKE','%'.$search.'%');
                            $query->orWhere('would_you_like_to_refer','LIKE','%'.$search.'%');
                            $query->orWhere('form_status','LIKE','%'.$search.'%');
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
                            $query->orWhere('address','LIKE','%'.$search.'%');
                            $query->orWhere('city','LIKE','%'.$search.'%');
                            $query->orWhere('state','LIKE','%'.$search.'%');
                            $query->orWhere('zip_code','LIKE','%'.$search.'%');
                            $query->orWhere('email','LIKE','%'.$search.'%');
                            $query->orWhere('phone','LIKE','%'.$search.'%');
                            $query->orWhere('person_received_inheritance','LIKE','%'.$search.'%');
                            $query->orWhere('receive_inheritance_date','LIKE','%'.$search.'%');
                            $query->orWhere('total_amount_inheritance','LIKE','%'.$search.'%');
                            $query->orWhere('amount_you_need_now','LIKE','%'.$search.'%');
                            $query->orWhere('would_you_like_to_refer','LIKE','%'.$search.'%');
                            $query->orWhere('form_status','LIKE','%'.$search.'%');
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

    
    public function InheritanceFundingFormQuery($request)
    {
        $InheritanceFundingForm_data=InheritanceFundingForm::orderBy('id','DESC')->get();

        return $InheritanceFundingForm_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','First Name','Last Name','Address','City','State','ZIP Code','Email','Phone','Person Received Inheritance','Receive Inheritance Date','Total Amount Inheritance','Amount You Need Now','Would You Like To Refer','Form Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->InheritanceFundingFormQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->first_name,$voi->last_name,$voi->address,$voi->city,$voi->state,$voi->zip_code,$voi->email,$voi->phone,$voi->person_received_inheritance,$voi->receive_inheritance_date,$voi->total_amount_inheritance,$voi->amount_you_need_now,$voi->would_you_like_to_refer,$voi->form_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Inheritance Funding Form Report',
            'report_title'=>'Inheritance Funding Form Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Address</th>
                        
                            <th class='text-center' style='font-size:12px;' >City</th>
                        
                            <th class='text-center' style='font-size:12px;' >State</th>
                        
                            <th class='text-center' style='font-size:12px;' >ZIP Code</th>
                        
                            <th class='text-center' style='font-size:12px;' >Email</th>
                        
                            <th class='text-center' style='font-size:12px;' >Phone</th>
                        
                            <th class='text-center' style='font-size:12px;' >Person Received Inheritance</th>
                        
                            <th class='text-center' style='font-size:12px;' >Receive Inheritance Date</th>
                        
                            <th class='text-center' style='font-size:12px;' >Total Amount Inheritance</th>
                        
                            <th class='text-center' style='font-size:12px;' >Amount You Need Now</th>
                        
                            <th class='text-center' style='font-size:12px;' >Would You Like To Refer</th>
                        
                            <th class='text-center' style='font-size:12px;' >Form Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->InheritanceFundingFormQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->first_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->last_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->address."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->city."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->state."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->zip_code."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->email."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->phone."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->person_received_inheritance."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->receive_inheritance_date."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->total_amount_inheritance."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->amount_you_need_now."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->would_you_like_to_refer."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->form_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Inheritance Funding Form Report',$html);


    }
    public function show(InheritanceFundingForm $inheritancefundingform)
    {
        
        $tab=InheritanceFundingForm::all();return view('admin.pages.inheritancefundingform.inheritancefundingform_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InheritanceFundingForm  $inheritancefundingform
     * @return \Illuminate\Http\Response
     */
    public function edit(InheritanceFundingForm $inheritancefundingform,$id=0)
    {
        $tab=InheritanceFundingForm::find($id); 
        $tab_USAState=USAState::all();     
        return view('admin.pages.inheritancefundingform.inheritancefundingform_edit',['dataRow_USAState'=>$tab_USAState,'dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InheritanceFundingForm  $inheritancefundingform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InheritanceFundingForm $inheritancefundingform,$id=0)
    {
        $this->validate($request,[
                
                'first_name'=>'required',
                'last_name'=>'required',
                'address'=>'required',
                'city'=>'required',
                'state'=>'required',
                'zip_code'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'person_received_inheritance'=>'required',
                'receive_inheritance_date'=>'required',
                'total_amount_inheritance'=>'required',
                'amount_you_need_now'=>'required',
                'would_you_like_to_refer'=>'required',
                'form_status'=>'required',
        ]);

        $this->SystemAdminLog("Inheritance Funding Form","Update","Edit / Modify");

        
        $tab_4_USAState=USAState::where('id',$request->state)->first();
        $state_4_USAState=$tab_4_USAState->name;
        $tab=InheritanceFundingForm::find($id);
        
        $tab->first_name=$request->first_name;
        $tab->last_name=$request->last_name;
        $tab->address=$request->address;
        $tab->city=$request->city;
        $tab->state_name=$state_4_USAState;
        $tab->state=$request->state;
        $tab->zip_code=$request->zip_code;
        $tab->email=$request->email;
        $tab->phone=$request->phone;
        $tab->person_received_inheritance=$request->person_received_inheritance;
        $tab->receive_inheritance_date=$request->receive_inheritance_date;
        $tab->total_amount_inheritance=$request->total_amount_inheritance;
        $tab->amount_you_need_now=$request->amount_you_need_now;
        $tab->would_you_like_to_refer=$request->would_you_like_to_refer;
        $tab->form_status=$request->form_status;
        $tab->save();

        return redirect('inheritancefundingform')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InheritanceFundingForm  $inheritancefundingform
     * @return \Illuminate\Http\Response
     */
    public function destroy(InheritanceFundingForm $inheritancefundingform,$id=0)
    {
        $this->SystemAdminLog("Inheritance Funding Form","Destroy","Delete");

        $tab=InheritanceFundingForm::find($id);
        $tab->delete();
        return redirect('inheritancefundingform')->with('status','Deleted Successfully !');}
}
