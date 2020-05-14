<?php

namespace App\Http\Controllers;

use App\Attorneysform;
use App\AdminLog;
use Illuminate\Http\Request;

class AttorneysformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Attorneys form";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=Attorneysform::all();
        return view('admin.pages.attorneysform.attorneysform_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


                   
        return view('admin.pages.attorneysform.attorneysform_create');
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
                'contact_me_by'=>'required',
                'best_time'=>'required',
        ]);

        $this->SystemAdminLog("Attorneys form","Save New","Create New");

        
        $tab=new Attorneysform();
        
        $tab->contact_me_about=$request->contact_me_about;
        $tab->first_name=$request->first_name;
        $tab->last_name=$request->last_name;
        $tab->phone=$request->phone;
        $tab->email=$request->email;
        $tab->contact_me_by=$request->contact_me_by;
        $tab->best_time=$request->best_time;
        $tab->message=$request->message;
        $tab->save();

        return redirect('attorneysform')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'first_name'=>'required',
                'last_name'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'contact_me_by'=>'required',
                'best_time'=>'required',
        ]);

        $tab=new Attorneysform();
        
        $tab->contact_me_about=$request->contact_me_about;
        $tab->first_name=$request->first_name;
        $tab->last_name=$request->last_name;
        $tab->phone=$request->phone;
        $tab->email=$request->email;
        $tab->contact_me_by=$request->contact_me_by;
        $tab->best_time=$request->best_time;
        $tab->message=$request->message;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attorneysform  $attorneysform
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('contact_me_about','LIKE','%'.$search.'%');
                            $query->orWhere('first_name','LIKE','%'.$search.'%');
                            $query->orWhere('last_name','LIKE','%'.$search.'%');
                            $query->orWhere('phone','LIKE','%'.$search.'%');
                            $query->orWhere('email','LIKE','%'.$search.'%');
                            $query->orWhere('contact_me_by','LIKE','%'.$search.'%');
                            $query->orWhere('best_time','LIKE','%'.$search.'%');
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
                            $query->orWhere('contact_me_about','LIKE','%'.$search.'%');
                            $query->orWhere('first_name','LIKE','%'.$search.'%');
                            $query->orWhere('last_name','LIKE','%'.$search.'%');
                            $query->orWhere('phone','LIKE','%'.$search.'%');
                            $query->orWhere('email','LIKE','%'.$search.'%');
                            $query->orWhere('contact_me_by','LIKE','%'.$search.'%');
                            $query->orWhere('best_time','LIKE','%'.$search.'%');
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

    
    public function AttorneysformQuery($request)
    {
        $Attorneysform_data=Attorneysform::orderBy('id','DESC')->get();

        return $Attorneysform_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Contact me about','First Name','Last Name','Phone','Email','Contact me by','Best time','Message','Created Date');
        array_push($data, $array_column);
        $inv=$this->AttorneysformQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->contact_me_about,$voi->first_name,$voi->last_name,$voi->phone,$voi->email,$voi->contact_me_by,$voi->best_time,$voi->message,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Attorneys form Report',
            'report_title'=>'Attorneys form Report',
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
                            <th class='text-center' style='font-size:12px;' >Contact me about</th>
                        
                            <th class='text-center' style='font-size:12px;' >First Name</th>
                        
                            <th class='text-center' style='font-size:12px;' >Last Name</th>
                        
                            <th class='text-center' style='font-size:12px;' >Phone</th>
                        
                            <th class='text-center' style='font-size:12px;' >Email</th>
                        
                            <th class='text-center' style='font-size:12px;' >Contact me by</th>
                        
                            <th class='text-center' style='font-size:12px;' >Best time</th>
                        
                            <th class='text-center' style='font-size:12px;' >Message</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->AttorneysformQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->contact_me_about."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->first_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->last_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->phone."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->email."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->contact_me_by."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->best_time."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->message."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Attorneys form Report',$html);


    }
    public function show(Attorneysform $attorneysform)
    {
        
        $tab=Attorneysform::all();return view('admin.pages.attorneysform.attorneysform_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attorneysform  $attorneysform
     * @return \Illuminate\Http\Response
     */
    public function edit(Attorneysform $attorneysform,$id=0)
    {
        $tab=Attorneysform::find($id);      
        return view('admin.pages.attorneysform.attorneysform_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attorneysform  $attorneysform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attorneysform $attorneysform,$id=0)
    {
        $this->validate($request,[
                
                'first_name'=>'required',
                'last_name'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'contact_me_by'=>'required',
                'best_time'=>'required',
        ]);

        $this->SystemAdminLog("Attorneys form","Update","Edit / Modify");

        
        $tab=Attorneysform::find($id);
        
        $tab->contact_me_about=$request->contact_me_about;
        $tab->first_name=$request->first_name;
        $tab->last_name=$request->last_name;
        $tab->phone=$request->phone;
        $tab->email=$request->email;
        $tab->contact_me_by=$request->contact_me_by;
        $tab->best_time=$request->best_time;
        $tab->message=$request->message;
        $tab->save();

        return redirect('attorneysform')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attorneysform  $attorneysform
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attorneysform $attorneysform,$id=0)
    {
        $this->SystemAdminLog("Attorneys form","Destroy","Delete");

        $tab=Attorneysform::find($id);
        $tab->delete();
        return redirect('attorneysform')->with('status','Deleted Successfully !');
    }
    public function attorneyRequest(Request $request){
        $validator = \Validator::make($request->all(), [
            'contact_me_about' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required',
            'contact_me_by' => 'required',
            'best_time' => 'required',
        ]);
    
        if (!$validator->passes()) {
            return response()->json(['status'=>0, 'msg' => 'Please Enter all required (*) field','error'=> $validator->errors()->all()]);
        }
    
        $this->SystemAdminLog("User Attonreys Request Submitted", "Save New", "Create New");
    
    
        //dd($request);
        
        $tab=new Attorneysform();
        $tab->contact_me_about=$request->contact_me_about;
        $tab->first_name=$request->first_name;
        $tab->last_name=$request->last_name;
        $tab->phone=$request->phone;
        $tab->email=$request->email;
        $tab->contact_me_by=json_encode($request->contact_me_by) ;
        $tab->best_time=json_encode($request->best_time);
        $tab->message=$request->message;
        $tab->save();
    
        return response()->json(['status' => 1, 'msg' => 'Your Attorneys request submitted successfully.']);
    } 
}
