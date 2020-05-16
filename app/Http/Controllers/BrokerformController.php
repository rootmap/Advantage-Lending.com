<?php

namespace App\Http\Controllers;

use App\BrokerForm;
use App\AdminLog;
use Illuminate\Http\Request;

class BrokerFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Broker Form";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=BrokerForm::all();
        return view('admin.pages.brokerform.brokerform_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


                   
        return view('admin.pages.brokerform.brokerform_create');
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
                'phone'=>'required',
                'email'=>'required',
                'state'=>'required',
                'zip_code'=>'required',
        ]);

        $this->SystemAdminLog("Broker Form","Save New","Create New");

        
        $tab=new BrokerForm();
        
        $tab->first_name=$request->first_name;
        $tab->last_name=$request->last_name;
        $tab->phone=$request->phone;
        $tab->email=$request->email;
        $tab->state=$request->state;
        $tab->zip_code=$request->zip_code;
        $tab->message=$request->message;
        $tab->save();

        return redirect('brokerform')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'first_name'=>'required',
                'last_name'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'state'=>'required',
                'zip_code'=>'required',
        ]);

        $tab=new BrokerForm();
        
        $tab->first_name=$request->first_name;
        $tab->last_name=$request->last_name;
        $tab->phone=$request->phone;
        $tab->email=$request->email;
        $tab->state=$request->state;
        $tab->zip_code=$request->zip_code;
        $tab->message=$request->message;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BrokerForm  $brokerform
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('first_name','LIKE','%'.$search.'%');
                            $query->orWhere('last_name','LIKE','%'.$search.'%');
                            $query->orWhere('phone','LIKE','%'.$search.'%');
                            $query->orWhere('email','LIKE','%'.$search.'%');
                            $query->orWhere('state','LIKE','%'.$search.'%');
                            $query->orWhere('zip_code','LIKE','%'.$search.'%');
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
                            $query->orWhere('phone','LIKE','%'.$search.'%');
                            $query->orWhere('email','LIKE','%'.$search.'%');
                            $query->orWhere('state','LIKE','%'.$search.'%');
                            $query->orWhere('zip_code','LIKE','%'.$search.'%');
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

    
    public function BrokerFormQuery($request)
    {
        $BrokerForm_data=BrokerForm::orderBy('id','DESC')->get();

        return $BrokerForm_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','First Name','Last Name','Phone','Email','State','ZIP Code','Message','Created Date');
        array_push($data, $array_column);
        $inv=$this->BrokerFormQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->first_name,$voi->last_name,$voi->phone,$voi->email,$voi->state,$voi->zip_code,$voi->message,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Broker Form Report',
            'report_title'=>'Broker Form Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Phone</th>
                        
                            <th class='text-center' style='font-size:12px;' >Email</th>
                        
                            <th class='text-center' style='font-size:12px;' >State</th>
                        
                            <th class='text-center' style='font-size:12px;' >ZIP Code</th>
                        
                            <th class='text-center' style='font-size:12px;' >Message</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->BrokerFormQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->first_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->last_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->phone."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->email."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->state."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->zip_code."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->message."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Broker Form Report',$html);


    }
    public function show(BrokerForm $brokerform)
    {
        
        $tab=BrokerForm::all();return view('admin.pages.brokerform.brokerform_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BrokerForm  $brokerform
     * @return \Illuminate\Http\Response
     */
    public function edit(BrokerForm $brokerform,$id=0)
    {
        $tab=BrokerForm::find($id);      
        return view('admin.pages.brokerform.brokerform_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BrokerForm  $brokerform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BrokerForm $brokerform,$id=0)
    {
        $this->validate($request,[
                
                'first_name'=>'required',
                'last_name'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'state'=>'required',
                'zip_code'=>'required',
        ]);

        $this->SystemAdminLog("Broker Form","Update","Edit / Modify");

        
        $tab=BrokerForm::find($id);
        
        $tab->first_name=$request->first_name;
        $tab->last_name=$request->last_name;
        $tab->phone=$request->phone;
        $tab->email=$request->email;
        $tab->state=$request->state;
        $tab->zip_code=$request->zip_code;
        $tab->message=$request->message;
        $tab->save();

        return redirect('brokerform')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BrokerForm  $brokerform
     * @return \Illuminate\Http\Response
     */
    public function destroy(BrokerForm $brokerform,$id=0)
    {
        $this->SystemAdminLog("Broker Form","Destroy","Delete");

        $tab=BrokerForm::find($id);
        $tab->delete();
        return redirect('brokerform')->with('status','Deleted Successfully !');
    }
    public function brokerRequest(Request $request){
        $validator = \Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
        ]);
    
        if (!$validator->passes()) {
            return response()->json(['status'=>0, 'msg' => 'Please Enter all required (*) field','error'=> $validator->errors()->all()]);
        }
    
        $this->SystemAdminLog("User Broker Request Submitted", "Save New", "Create New");
    
    
        //dd($request);
        
        $tab=new BrokerForm();
        
        $tab->first_name=$request->first_name;
        $tab->last_name=$request->last_name;
        $tab->phone=$request->phone;
        $tab->email=$request->email;
        $tab->state=$request->state;
        $tab->zip_code=$request->zip_code;
        $tab->message=$request->message;
        $tab->save();
    
        return response()->json(['status' => 1, 'msg' => 'Your Broker request submitted successfully.']);
    } 
}
