<?php

namespace App\Http\Controllers;

use App\ForBrokerPageSetting;
use App\AdminLog;
use Illuminate\Http\Request;

class ForBrokerPageSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="For Broker Page Setting";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=ForBrokerPageSetting::count();
        if($tabCount==0)
        {
            return redirect(url('forbrokerpagesetting/create'));
        }else{

            $tab=ForBrokerPageSetting::orderBy('id','DESC')->first();      
        return view('admin.pages.forbrokerpagesetting.forbrokerpagesetting_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=ForBrokerPageSetting::count();
        if($tabCount==0)
        {            
        return view('admin.pages.forbrokerpagesetting.forbrokerpagesetting_create');
            
        }else{

            $tab=ForBrokerPageSetting::orderBy('id','DESC')->first();      
        return view('admin.pages.forbrokerpagesetting.forbrokerpagesetting_edit',['dataRow'=>$tab,'edit'=>true]); 
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
                'page_title'=>'required',
                'page_detail'=>'required',
                'form_title'=>'required',
                'form_detail'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("For Broker Page Setting","Save New","Create New");

        

        $filename_forbrokerpagesetting_1='';
        if ($request->hasFile('background_image')) {
            $img_forbrokerpagesetting = $request->file('background_image');
            $upload_forbrokerpagesetting = 'upload/forbrokerpagesetting';
            $filename_forbrokerpagesetting_1 = env('APP_NAME').'_'.time() . '.' . $img_forbrokerpagesetting->getClientOriginalExtension();
            $img_forbrokerpagesetting->move($upload_forbrokerpagesetting, $filename_forbrokerpagesetting_1);
        }

                
        $tab=new ForBrokerPageSetting();
        
        $tab->title=$request->title;
        $tab->background_image=$filename_forbrokerpagesetting_1;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->page_title=$request->page_title;
        $tab->page_detail=$request->page_detail;
        $tab->form_title=$request->form_title;
        $tab->form_detail=$request->form_detail;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('forbrokerpagesetting')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'background_image'=>'required',
                'background_forecolor'=>'required',
                'page_title'=>'required',
                'page_detail'=>'required',
                'form_title'=>'required',
                'form_detail'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new ForBrokerPageSetting();
        
        $tab->title=$request->title;
        $tab->background_image=$filename_forbrokerpagesetting_1;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->page_title=$request->page_title;
        $tab->page_detail=$request->page_detail;
        $tab->form_title=$request->form_title;
        $tab->form_detail=$request->form_detail;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ForBrokerPageSetting  $forbrokerpagesetting
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
                            $query->orWhere('page_title','LIKE','%'.$search.'%');
                            $query->orWhere('page_detail','LIKE','%'.$search.'%');
                            $query->orWhere('form_title','LIKE','%'.$search.'%');
                            $query->orWhere('form_detail','LIKE','%'.$search.'%');
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
                            $query->orWhere('page_title','LIKE','%'.$search.'%');
                            $query->orWhere('page_detail','LIKE','%'.$search.'%');
                            $query->orWhere('form_title','LIKE','%'.$search.'%');
                            $query->orWhere('form_detail','LIKE','%'.$search.'%');
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

    
    public function ForBrokerPageSettingQuery($request)
    {
        $ForBrokerPageSetting_data=ForBrokerPageSetting::orderBy('id','DESC')->get();

        return $ForBrokerPageSetting_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Background Image','Background Forecolor','Page Title','Page Detail','Form Title','Form Detail','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->ForBrokerPageSettingQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->background_image,$voi->background_forecolor,$voi->page_title,$voi->page_detail,$voi->form_title,$voi->form_detail,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'For Broker Page Setting Report',
            'report_title'=>'For Broker Page Setting Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Page Title</th>
                        
                            <th class='text-center' style='font-size:12px;' >Page Detail</th>
                        
                            <th class='text-center' style='font-size:12px;' >Form Title</th>
                        
                            <th class='text-center' style='font-size:12px;' >Form Detail</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->ForBrokerPageSettingQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->background_image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->background_forecolor."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->page_title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->page_detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->form_title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->form_detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('For Broker Page Setting Report',$html);


    }
    public function show(ForBrokerPageSetting $forbrokerpagesetting)
    {
        
        $tab=ForBrokerPageSetting::all();return view('admin.pages.forbrokerpagesetting.forbrokerpagesetting_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ForBrokerPageSetting  $forbrokerpagesetting
     * @return \Illuminate\Http\Response
     */
    public function edit(ForBrokerPageSetting $forbrokerpagesetting,$id=0)
    {
        $tab=ForBrokerPageSetting::find($id);      
        return view('admin.pages.forbrokerpagesetting.forbrokerpagesetting_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ForBrokerPageSetting  $forbrokerpagesetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ForBrokerPageSetting $forbrokerpagesetting,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'background_forecolor'=>'required',
                'page_title'=>'required',
                'page_detail'=>'required',
                'form_title'=>'required',
                'form_detail'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("For Broker Page Setting","Update","Edit / Modify");

        

        $filename_forbrokerpagesetting_1=$request->ex_background_image;
        if ($request->hasFile('background_image')) {
            $img_forbrokerpagesetting = $request->file('background_image');
            $upload_forbrokerpagesetting = 'upload/forbrokerpagesetting';
            $filename_forbrokerpagesetting_1 = env('APP_NAME').'_'.time() . '.' . $img_forbrokerpagesetting->getClientOriginalExtension();
            $img_forbrokerpagesetting->move($upload_forbrokerpagesetting, $filename_forbrokerpagesetting_1);
        }

                
        $tab=ForBrokerPageSetting::find($id);
        
        $tab->title=$request->title;
        $tab->background_image=$filename_forbrokerpagesetting_1;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->page_title=$request->page_title;
        $tab->page_detail=$request->page_detail;
        $tab->form_title=$request->form_title;
        $tab->form_detail=$request->form_detail;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('forbrokerpagesetting')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ForBrokerPageSetting  $forbrokerpagesetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(ForBrokerPageSetting $forbrokerpagesetting,$id=0)
    {
        $this->SystemAdminLog("For Broker Page Setting","Destroy","Delete");

        $tab=ForBrokerPageSetting::find($id);
        $tab->delete();
        return redirect('forbrokerpagesetting')->with('status','Deleted Successfully !');}
}
