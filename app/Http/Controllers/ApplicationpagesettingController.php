<?php

namespace App\Http\Controllers;

use App\ApplicationPageSetting;
use App\AdminLog;
use Illuminate\Http\Request;

class ApplicationPageSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Application Page Setting";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=ApplicationPageSetting::count();
        if($tabCount==0)
        {
            return redirect(url('applicationpagesetting/create'));
        }else{

            $tab=ApplicationPageSetting::orderBy('id','DESC')->first();      
        return view('admin.pages.applicationpagesetting.applicationpagesetting_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=ApplicationPageSetting::count();
        if($tabCount==0)
        {            
        return view('admin.pages.applicationpagesetting.applicationpagesetting_create');
            
        }else{

            $tab=ApplicationPageSetting::orderBy('id','DESC')->first();      
        return view('admin.pages.applicationpagesetting.applicationpagesetting_edit',['dataRow'=>$tab,'edit'=>true]); 
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
                
                'title'=>'required',
                'background_image'=>'required',
                'background_forecolor'=>'required',
                'form_title'=>'required',
                'form_state_your_case_below_text'=>'required',
                'form_phone_below_text'=>'required',
                'form_how_contact_you_below_text'=>'required',
                'form_footer_below_text'=>'required',
                'form_button_text'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Application Page Setting","Save New","Create New");

        

        $filename_applicationpagesetting_1='';
        if ($request->hasFile('background_image')) {
            $img_applicationpagesetting = $request->file('background_image');
            $upload_applicationpagesetting = 'upload/applicationpagesetting';
            $filename_applicationpagesetting_1 = env('APP_NAME').'_'.time() . '.' . $img_applicationpagesetting->getClientOriginalExtension();
            $img_applicationpagesetting->move($upload_applicationpagesetting, $filename_applicationpagesetting_1);
        }

                
        $tab=new ApplicationPageSetting();
        
        $tab->title=$request->title;
        $tab->background_image=$filename_applicationpagesetting_1;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->form_title=$request->form_title;
        $tab->form_state_your_case_below_text=$request->form_state_your_case_below_text;
        $tab->form_phone_below_text=$request->form_phone_below_text;
        $tab->form_how_contact_you_below_text=$request->form_how_contact_you_below_text;
        $tab->form_footer_below_text=$request->form_footer_below_text;
        $tab->form_button_text=$request->form_button_text;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('applicationpagesetting')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'background_image'=>'required',
                'background_forecolor'=>'required',
                'form_title'=>'required',
                'form_state_your_case_below_text'=>'required',
                'form_phone_below_text'=>'required',
                'form_how_contact_you_below_text'=>'required',
                'form_footer_below_text'=>'required',
                'form_button_text'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new ApplicationPageSetting();
        
        $tab->title=$request->title;
        $tab->background_image=$filename_applicationpagesetting_1;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->form_title=$request->form_title;
        $tab->form_state_your_case_below_text=$request->form_state_your_case_below_text;
        $tab->form_phone_below_text=$request->form_phone_below_text;
        $tab->form_how_contact_you_below_text=$request->form_how_contact_you_below_text;
        $tab->form_footer_below_text=$request->form_footer_below_text;
        $tab->form_button_text=$request->form_button_text;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ApplicationPageSetting  $applicationpagesetting
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('background_image','LIKE','%'.$search.'%');
                            $query->orWhere('background_forecolor','LIKE','%'.$search.'%');
                            $query->orWhere('form_title','LIKE','%'.$search.'%');
                            $query->orWhere('form_state_your_case_below_text','LIKE','%'.$search.'%');
                            $query->orWhere('form_phone_below_text','LIKE','%'.$search.'%');
                            $query->orWhere('form_how_contact_you_below_text','LIKE','%'.$search.'%');
                            $query->orWhere('form_footer_below_text','LIKE','%'.$search.'%');
                            $query->orWhere('form_button_text','LIKE','%'.$search.'%');
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
                            $query->orWhere('background_image','LIKE','%'.$search.'%');
                            $query->orWhere('background_forecolor','LIKE','%'.$search.'%');
                            $query->orWhere('form_title','LIKE','%'.$search.'%');
                            $query->orWhere('form_state_your_case_below_text','LIKE','%'.$search.'%');
                            $query->orWhere('form_phone_below_text','LIKE','%'.$search.'%');
                            $query->orWhere('form_how_contact_you_below_text','LIKE','%'.$search.'%');
                            $query->orWhere('form_footer_below_text','LIKE','%'.$search.'%');
                            $query->orWhere('form_button_text','LIKE','%'.$search.'%');
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

    
    public function ApplicationPageSettingQuery($request)
    {
        $ApplicationPageSetting_data=ApplicationPageSetting::orderBy('id','DESC')->get();

        return $ApplicationPageSetting_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Background Image','Background Forecolor','Form Title','Form State Your Case Below Text','Form Phone Below Text','Form How Contact You Below Text','Form Footer Below Text','Form Button Text','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->ApplicationPageSettingQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->background_image,$voi->background_forecolor,$voi->form_title,$voi->form_state_your_case_below_text,$voi->form_phone_below_text,$voi->form_how_contact_you_below_text,$voi->form_footer_below_text,$voi->form_button_text,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Application Page Setting Report',
            'report_title'=>'Application Page Setting Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Background Image</th>
                        
                            <th class='text-center' style='font-size:12px;' >Background Forecolor</th>
                        
                            <th class='text-center' style='font-size:12px;' >Form Title</th>
                        
                            <th class='text-center' style='font-size:12px;' >Form State Your Case Below Text</th>
                        
                            <th class='text-center' style='font-size:12px;' >Form Phone Below Text</th>
                        
                            <th class='text-center' style='font-size:12px;' >Form How Contact You Below Text</th>
                        
                            <th class='text-center' style='font-size:12px;' >Form Footer Below Text</th>
                        
                            <th class='text-center' style='font-size:12px;' >Form Button Text</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->ApplicationPageSettingQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->background_image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->background_forecolor."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->form_title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->form_state_your_case_below_text."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->form_phone_below_text."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->form_how_contact_you_below_text."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->form_footer_below_text."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->form_button_text."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Application Page Setting Report',$html);


    }
    public function show(ApplicationPageSetting $applicationpagesetting)
    {
        
        $tab=ApplicationPageSetting::all();return view('admin.pages.applicationpagesetting.applicationpagesetting_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ApplicationPageSetting  $applicationpagesetting
     * @return \Illuminate\Http\Response
     */
    public function edit(ApplicationPageSetting $applicationpagesetting,$id=0)
    {
        $tab=ApplicationPageSetting::find($id);      
        return view('admin.pages.applicationpagesetting.applicationpagesetting_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ApplicationPageSetting  $applicationpagesetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApplicationPageSetting $applicationpagesetting,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'background_forecolor'=>'required',
                'form_title'=>'required',
                'form_state_your_case_below_text'=>'required',
                'form_phone_below_text'=>'required',
                'form_how_contact_you_below_text'=>'required',
                'form_footer_below_text'=>'required',
                'form_button_text'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Application Page Setting","Update","Edit / Modify");

        

        $filename_applicationpagesetting_1=$request->ex_background_image;
        if ($request->hasFile('background_image')) {
            $img_applicationpagesetting = $request->file('background_image');
            $upload_applicationpagesetting = 'upload/applicationpagesetting';
            $filename_applicationpagesetting_1 = env('APP_NAME').'_'.time() . '.' . $img_applicationpagesetting->getClientOriginalExtension();
            $img_applicationpagesetting->move($upload_applicationpagesetting, $filename_applicationpagesetting_1);
        }

                
        $tab=ApplicationPageSetting::find($id);
        
        $tab->title=$request->title;
        $tab->background_image=$filename_applicationpagesetting_1;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->form_title=$request->form_title;
        $tab->form_state_your_case_below_text=$request->form_state_your_case_below_text;
        $tab->form_phone_below_text=$request->form_phone_below_text;
        $tab->form_how_contact_you_below_text=$request->form_how_contact_you_below_text;
        $tab->form_footer_below_text=$request->form_footer_below_text;
        $tab->form_button_text=$request->form_button_text;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('applicationpagesetting')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ApplicationPageSetting  $applicationpagesetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApplicationPageSetting $applicationpagesetting,$id=0)
    {
        $this->SystemAdminLog("Application Page Setting","Destroy","Delete");

        $tab=ApplicationPageSetting::find($id);
        $tab->delete();
        return redirect('applicationpagesetting')->with('status','Deleted Successfully !');}
}
