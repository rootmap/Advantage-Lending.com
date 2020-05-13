<?php

namespace App\Http\Controllers;

use App\MeetLeaderSetting;
use App\AdminLog;
use Illuminate\Http\Request;

class MeetLeaderSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Meet Leader Setting";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=MeetLeaderSetting::count();
        if($tabCount==0)
        {
            return redirect(url('meetleadersetting/create'));
        }else{

            $tab=MeetLeaderSetting::orderBy('id','DESC')->first();      
        return view('admin.pages.meetleadersetting.meetleadersetting_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=MeetLeaderSetting::count();
        if($tabCount==0)
        {            
        return view('admin.pages.meetleadersetting.meetleadersetting_create');
            
        }else{

            $tab=MeetLeaderSetting::orderBy('id','DESC')->first();      
        return view('admin.pages.meetleadersetting.meetleadersetting_edit',['dataRow'=>$tab,'edit'=>true]); 
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
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Meet Leader Setting","Save New","Create New");

        

        $filename_meetleadersetting_1='';
        if ($request->hasFile('background_image')) {
            $img_meetleadersetting = $request->file('background_image');
            $upload_meetleadersetting = 'upload/meetleadersetting';
            $filename_meetleadersetting_1 = env('APP_NAME').'_'.time() . '.' . $img_meetleadersetting->getClientOriginalExtension();
            $img_meetleadersetting->move($upload_meetleadersetting, $filename_meetleadersetting_1);
        }

                
        $tab=new MeetLeaderSetting();
        
        $tab->title=$request->title;
        $tab->background_image=$filename_meetleadersetting_1;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('meetleadersetting')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'background_image'=>'required',
                'background_forecolor'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new MeetLeaderSetting();
        
        $tab->title=$request->title;
        $tab->background_image=$filename_meetleadersetting_1;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MeetLeaderSetting  $meetleadersetting
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

    
    public function MeetLeaderSettingQuery($request)
    {
        $MeetLeaderSetting_data=MeetLeaderSetting::orderBy('id','DESC')->get();

        return $MeetLeaderSetting_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Background Image','Background Forecolor','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->MeetLeaderSettingQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->background_image,$voi->background_forecolor,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Meet Leader Setting Report',
            'report_title'=>'Meet Leader Setting Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->MeetLeaderSettingQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->background_image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->background_forecolor."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Meet Leader Setting Report',$html);


    }
    public function show(MeetLeaderSetting $meetleadersetting)
    {
        
        $tab=MeetLeaderSetting::all();return view('admin.pages.meetleadersetting.meetleadersetting_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MeetLeaderSetting  $meetleadersetting
     * @return \Illuminate\Http\Response
     */
    public function edit(MeetLeaderSetting $meetleadersetting,$id=0)
    {
        $tab=MeetLeaderSetting::find($id);      
        return view('admin.pages.meetleadersetting.meetleadersetting_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MeetLeaderSetting  $meetleadersetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MeetLeaderSetting $meetleadersetting,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'background_forecolor'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Meet Leader Setting","Update","Edit / Modify");

        

        $filename_meetleadersetting_1=$request->ex_background_image;
        if ($request->hasFile('background_image')) {
            $img_meetleadersetting = $request->file('background_image');
            $upload_meetleadersetting = 'upload/meetleadersetting';
            $filename_meetleadersetting_1 = env('APP_NAME').'_'.time() . '.' . $img_meetleadersetting->getClientOriginalExtension();
            $img_meetleadersetting->move($upload_meetleadersetting, $filename_meetleadersetting_1);
        }

                
        $tab=MeetLeaderSetting::find($id);
        
        $tab->title=$request->title;
        $tab->background_image=$filename_meetleadersetting_1;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('meetleadersetting')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MeetLeaderSetting  $meetleadersetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(MeetLeaderSetting $meetleadersetting,$id=0)
    {
        $this->SystemAdminLog("Meet Leader Setting","Destroy","Delete");

        $tab=MeetLeaderSetting::find($id);
        $tab->delete();
        return redirect('meetleadersetting')->with('status','Deleted Successfully !');}
}
