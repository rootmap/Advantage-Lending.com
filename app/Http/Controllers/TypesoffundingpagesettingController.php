<?php

namespace App\Http\Controllers;

use App\TypesOfFundingPageSetting;
use App\AdminLog;
use Illuminate\Http\Request;

class TypesOfFundingPageSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Types Of Funding Page Setting";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=TypesOfFundingPageSetting::count();
        if($tabCount==0)
        {
            return redirect(url('typesoffundingpagesetting/create'));
        }else{

            $tab=TypesOfFundingPageSetting::orderBy('id','DESC')->first();      
        return view('admin.pages.typesoffundingpagesetting.typesoffundingpagesetting_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=TypesOfFundingPageSetting::count();
        if($tabCount==0)
        {            
        return view('admin.pages.typesoffundingpagesetting.typesoffundingpagesetting_create');
            
        }else{

            $tab=TypesOfFundingPageSetting::orderBy('id','DESC')->first();      
        return view('admin.pages.typesoffundingpagesetting.typesoffundingpagesetting_edit',['dataRow'=>$tab,'edit'=>true]); 
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
                'case_fund_heading'=>'required',
                'case_fund_detail'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Types Of Funding Page Setting","Save New","Create New");

        

        $filename_typesoffundingpagesetting_1='';
        if ($request->hasFile('background_image')) {
            $img_typesoffundingpagesetting = $request->file('background_image');
            $upload_typesoffundingpagesetting = 'upload/typesoffundingpagesetting';
            $filename_typesoffundingpagesetting_1 = env('APP_NAME').'_'.time() . '.' . $img_typesoffundingpagesetting->getClientOriginalExtension();
            $img_typesoffundingpagesetting->move($upload_typesoffundingpagesetting, $filename_typesoffundingpagesetting_1);
        }

                
        $tab=new TypesOfFundingPageSetting();
        
        $tab->title=$request->title;
        $tab->background_image=$filename_typesoffundingpagesetting_1;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->page_detail=$request->page_detail;
        $tab->case_fund_heading=$request->case_fund_heading;
        $tab->case_fund_detail=$request->case_fund_detail;
        $tab->case_fund_bottom_button_text=$request->case_fund_bottom_button_text;
        $tab->case_fund_bottom_button_url=$request->case_fund_bottom_button_url;
        $tab->page_bottom_notification=$request->page_bottom_notification;
        $tab->page_bottom_detail_content=$request->page_bottom_detail_content;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('typesoffundingpagesetting')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'background_image'=>'required',
                'background_forecolor'=>'required',
                'case_fund_heading'=>'required',
                'case_fund_detail'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new TypesOfFundingPageSetting();
        
        $tab->title=$request->title;
        $tab->background_image=$filename_typesoffundingpagesetting_1;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->page_detail=$request->page_detail;
        $tab->case_fund_heading=$request->case_fund_heading;
        $tab->case_fund_detail=$request->case_fund_detail;
        $tab->case_fund_bottom_button_text=$request->case_fund_bottom_button_text;
        $tab->case_fund_bottom_button_url=$request->case_fund_bottom_button_url;
        $tab->page_bottom_notification=$request->page_bottom_notification;
        $tab->page_bottom_detail_content=$request->page_bottom_detail_content;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypesOfFundingPageSetting  $typesoffundingpagesetting
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
                            $query->orWhere('page_detail','LIKE','%'.$search.'%');
                            $query->orWhere('case_fund_heading','LIKE','%'.$search.'%');
                            $query->orWhere('case_fund_detail','LIKE','%'.$search.'%');
                            $query->orWhere('case_fund_bottom_button_text','LIKE','%'.$search.'%');
                            $query->orWhere('case_fund_bottom_button_url','LIKE','%'.$search.'%');
                            $query->orWhere('page_bottom_notification','LIKE','%'.$search.'%');
                            $query->orWhere('page_bottom_detail_content','LIKE','%'.$search.'%');
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
                            $query->orWhere('page_detail','LIKE','%'.$search.'%');
                            $query->orWhere('case_fund_heading','LIKE','%'.$search.'%');
                            $query->orWhere('case_fund_detail','LIKE','%'.$search.'%');
                            $query->orWhere('case_fund_bottom_button_text','LIKE','%'.$search.'%');
                            $query->orWhere('case_fund_bottom_button_url','LIKE','%'.$search.'%');
                            $query->orWhere('page_bottom_notification','LIKE','%'.$search.'%');
                            $query->orWhere('page_bottom_detail_content','LIKE','%'.$search.'%');
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

    
    public function TypesOfFundingPageSettingQuery($request)
    {
        $TypesOfFundingPageSetting_data=TypesOfFundingPageSetting::orderBy('id','DESC')->get();

        return $TypesOfFundingPageSetting_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Background Image','Background Forecolor','Page Detail','Case Fund Heading','Case Fund Detail','Case Fund Bottom Button Text','Case Fund Bottom Button URL','Page Bottom Notification','Page Bottom Detail Content','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->TypesOfFundingPageSettingQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->background_image,$voi->background_forecolor,$voi->page_detail,$voi->case_fund_heading,$voi->case_fund_detail,$voi->case_fund_bottom_button_text,$voi->case_fund_bottom_button_url,$voi->page_bottom_notification,$voi->page_bottom_detail_content,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Types Of Funding Page Setting Report',
            'report_title'=>'Types Of Funding Page Setting Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Page Detail</th>
                        
                            <th class='text-center' style='font-size:12px;' >Case Fund Heading</th>
                        
                            <th class='text-center' style='font-size:12px;' >Case Fund Detail</th>
                        
                            <th class='text-center' style='font-size:12px;' >Case Fund Bottom Button Text</th>
                        
                            <th class='text-center' style='font-size:12px;' >Case Fund Bottom Button URL</th>
                        
                            <th class='text-center' style='font-size:12px;' >Page Bottom Notification</th>
                        
                            <th class='text-center' style='font-size:12px;' >Page Bottom Detail Content</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->TypesOfFundingPageSettingQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->background_image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->background_forecolor."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->page_detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->case_fund_heading."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->case_fund_detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->case_fund_bottom_button_text."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->case_fund_bottom_button_url."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->page_bottom_notification."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->page_bottom_detail_content."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Types Of Funding Page Setting Report',$html);


    }
    public function show(TypesOfFundingPageSetting $typesoffundingpagesetting)
    {
        
        $tab=TypesOfFundingPageSetting::all();return view('admin.pages.typesoffundingpagesetting.typesoffundingpagesetting_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypesOfFundingPageSetting  $typesoffundingpagesetting
     * @return \Illuminate\Http\Response
     */
    public function edit(TypesOfFundingPageSetting $typesoffundingpagesetting,$id=0)
    {
        $tab=TypesOfFundingPageSetting::find($id);      
        return view('admin.pages.typesoffundingpagesetting.typesoffundingpagesetting_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypesOfFundingPageSetting  $typesoffundingpagesetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypesOfFundingPageSetting $typesoffundingpagesetting,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'background_forecolor'=>'required',
                'case_fund_heading'=>'required',
                'case_fund_detail'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Types Of Funding Page Setting","Update","Edit / Modify");

        

        $filename_typesoffundingpagesetting_1=$request->ex_background_image;
        if ($request->hasFile('background_image')) {
            $img_typesoffundingpagesetting = $request->file('background_image');
            $upload_typesoffundingpagesetting = 'upload/typesoffundingpagesetting';
            $filename_typesoffundingpagesetting_1 = env('APP_NAME').'_'.time() . '.' . $img_typesoffundingpagesetting->getClientOriginalExtension();
            $img_typesoffundingpagesetting->move($upload_typesoffundingpagesetting, $filename_typesoffundingpagesetting_1);
        }

                
        $tab=TypesOfFundingPageSetting::find($id);
        
        $tab->title=$request->title;
        $tab->background_image=$filename_typesoffundingpagesetting_1;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->page_detail=$request->page_detail;
        $tab->case_fund_heading=$request->case_fund_heading;
        $tab->case_fund_detail=$request->case_fund_detail;
        $tab->case_fund_bottom_button_text=$request->case_fund_bottom_button_text;
        $tab->case_fund_bottom_button_url=$request->case_fund_bottom_button_url;
        $tab->page_bottom_notification=$request->page_bottom_notification;
        $tab->page_bottom_detail_content=$request->page_bottom_detail_content;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('typesoffundingpagesetting')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypesOfFundingPageSetting  $typesoffundingpagesetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypesOfFundingPageSetting $typesoffundingpagesetting,$id=0)
    {
        $this->SystemAdminLog("Types Of Funding Page Setting","Destroy","Delete");

        $tab=TypesOfFundingPageSetting::find($id);
        $tab->delete();
        return redirect('typesoffundingpagesetting')->with('status','Deleted Successfully !');}
}
