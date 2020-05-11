<?php

namespace App\Http\Controllers;

use App\SiteSetting;
use App\AdminLog;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Site Setting";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=SiteSetting::count();
        if($tabCount==0)
        {
            return redirect(url('sitesetting/create'));
        }else{

            $tab=SiteSetting::orderBy('id','DESC')->first();      
        return view('admin.pages.sitesetting.sitesetting_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=SiteSetting::count();
        if($tabCount==0)
        {            
        return view('admin.pages.sitesetting.sitesetting_create');
            
        }else{

            $tab=SiteSetting::orderBy('id','DESC')->first();      
        return view('admin.pages.sitesetting.sitesetting_edit',['dataRow'=>$tab,'edit'=>true]); 
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
                
                'site_name'=>'required',
                'site_title'=>'required',
                'top_logo'=>'required',
                'bottom_logo'=>'required',
                'contact_number'=>'required',
                'email'=>'required',
                'top_toll_free_call_message'=>'required',
                'top_apply_button_text'=>'required',
                'bottom_copyright_text'=>'required',
                'bottom_right_reserved_text'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Site Setting","Save New","Create New");

        

        $filename_sitesetting_2='';
        if ($request->hasFile('top_logo')) {
            $img_sitesetting = $request->file('top_logo');
            $upload_sitesetting = 'upload/sitesetting';
            $filename_sitesetting_2 = env('APP_NAME').'_'.time() . '.' . $img_sitesetting->getClientOriginalExtension();
            $img_sitesetting->move($upload_sitesetting, $filename_sitesetting_2);
        }

                

        $filename_sitesetting_3='';
        if ($request->hasFile('bottom_logo')) {
            $img_sitesetting = $request->file('bottom_logo');
            $upload_sitesetting = 'upload/sitesetting';
            $filename_sitesetting_3 = env('APP_NAME').'_'.time() . '.' . $img_sitesetting->getClientOriginalExtension();
            $img_sitesetting->move($upload_sitesetting, $filename_sitesetting_3);
        }

                
        $tab=new SiteSetting();
        
        $tab->site_name=$request->site_name;
        $tab->site_title=$request->site_title;
        $tab->top_logo=$filename_sitesetting_2;
        $tab->bottom_logo=$filename_sitesetting_3;
        $tab->contact_number=$request->contact_number;
        $tab->email=$request->email;
        $tab->top_toll_free_call_message=$request->top_toll_free_call_message;
        $tab->top_apply_button_text=$request->top_apply_button_text;
        $tab->bottom_copyright_text=$request->bottom_copyright_text;
        $tab->bottom_right_reserved_text=$request->bottom_right_reserved_text;
        $tab->facebook_page_link=$request->facebook_page_link;
        $tab->twitter_page_link=$request->twitter_page_link;
        $tab->linkedin_page_link=$request->linkedin_page_link;
        $tab->youtube_page_link=$request->youtube_page_link;
        $tab->google_plus_page_link=$request->google_plus_page_link;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('sitesetting')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'site_name'=>'required',
                'site_title'=>'required',
                'top_logo'=>'required',
                'bottom_logo'=>'required',
                'contact_number'=>'required',
                'email'=>'required',
                'top_toll_free_call_message'=>'required',
                'top_apply_button_text'=>'required',
                'bottom_copyright_text'=>'required',
                'bottom_right_reserved_text'=>'required',
                'facebook_page_link'=>'required',
                'twitter_page_link'=>'required',
                'linkedin_page_link'=>'required',
                'youtube_page_link'=>'required',
                'google_plus_page_link'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new SiteSetting();
        
        $tab->site_name=$request->site_name;
        $tab->site_title=$request->site_title;
        $tab->top_logo=$filename_sitesetting_2;
        $tab->bottom_logo=$filename_sitesetting_3;
        $tab->contact_number=$request->contact_number;
        $tab->email=$request->email;
        $tab->top_toll_free_call_message=$request->top_toll_free_call_message;
        $tab->top_apply_button_text=$request->top_apply_button_text;
        $tab->bottom_copyright_text=$request->bottom_copyright_text;
        $tab->bottom_right_reserved_text=$request->bottom_right_reserved_text;
        $tab->facebook_page_link=$request->facebook_page_link;
        $tab->twitter_page_link=$request->twitter_page_link;
        $tab->linkedin_page_link=$request->linkedin_page_link;
        $tab->youtube_page_link=$request->youtube_page_link;
        $tab->google_plus_page_link=$request->google_plus_page_link;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SiteSetting  $sitesetting
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('site_name','LIKE','%'.$search.'%');
                            $query->orWhere('site_title','LIKE','%'.$search.'%');
                            $query->orWhere('top_logo','LIKE','%'.$search.'%');
                            $query->orWhere('bottom_logo','LIKE','%'.$search.'%');
                            $query->orWhere('contact_number','LIKE','%'.$search.'%');
                            $query->orWhere('email','LIKE','%'.$search.'%');
                            $query->orWhere('top_toll_free_call_message','LIKE','%'.$search.'%');
                            $query->orWhere('top_apply_button_text','LIKE','%'.$search.'%');
                            $query->orWhere('bottom_copyright_text','LIKE','%'.$search.'%');
                            $query->orWhere('bottom_right_reserved_text','LIKE','%'.$search.'%');
                            $query->orWhere('facebook_page_link','LIKE','%'.$search.'%');
                            $query->orWhere('twitter_page_link','LIKE','%'.$search.'%');
                            $query->orWhere('linkedin_page_link','LIKE','%'.$search.'%');
                            $query->orWhere('youtube_page_link','LIKE','%'.$search.'%');
                            $query->orWhere('google_plus_page_link','LIKE','%'.$search.'%');
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
                            $query->orWhere('site_name','LIKE','%'.$search.'%');
                            $query->orWhere('site_title','LIKE','%'.$search.'%');
                            $query->orWhere('top_logo','LIKE','%'.$search.'%');
                            $query->orWhere('bottom_logo','LIKE','%'.$search.'%');
                            $query->orWhere('contact_number','LIKE','%'.$search.'%');
                            $query->orWhere('email','LIKE','%'.$search.'%');
                            $query->orWhere('top_toll_free_call_message','LIKE','%'.$search.'%');
                            $query->orWhere('top_apply_button_text','LIKE','%'.$search.'%');
                            $query->orWhere('bottom_copyright_text','LIKE','%'.$search.'%');
                            $query->orWhere('bottom_right_reserved_text','LIKE','%'.$search.'%');
                            $query->orWhere('facebook_page_link','LIKE','%'.$search.'%');
                            $query->orWhere('twitter_page_link','LIKE','%'.$search.'%');
                            $query->orWhere('linkedin_page_link','LIKE','%'.$search.'%');
                            $query->orWhere('youtube_page_link','LIKE','%'.$search.'%');
                            $query->orWhere('google_plus_page_link','LIKE','%'.$search.'%');
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

    
    public function SiteSettingQuery($request)
    {
        $SiteSetting_data=SiteSetting::orderBy('id','DESC')->get();

        return $SiteSetting_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Site Name','Site Title','Top Logo','Bottom Logo','Contact Number','Email','Top Toll Free Call Message','Top Apply Button Text','Bottom Copyright Text','Bottom Right Reserved Text','Facebook Page Link','Twitter Page Link','LinkedIn Page Link','Youtube Page Link','Google Plus Page Link','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->SiteSettingQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->site_name,$voi->site_title,$voi->top_logo,$voi->bottom_logo,$voi->contact_number,$voi->email,$voi->top_toll_free_call_message,$voi->top_apply_button_text,$voi->bottom_copyright_text,$voi->bottom_right_reserved_text,$voi->facebook_page_link,$voi->twitter_page_link,$voi->linkedin_page_link,$voi->youtube_page_link,$voi->google_plus_page_link,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Site Setting Report',
            'report_title'=>'Site Setting Report',
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
                            <th class='text-center' style='font-size:12px;' >Site Name</th>
                        
                            <th class='text-center' style='font-size:12px;' >Site Title</th>
                        
                            <th class='text-center' style='font-size:12px;' >Top Logo</th>
                        
                            <th class='text-center' style='font-size:12px;' >Bottom Logo</th>
                        
                            <th class='text-center' style='font-size:12px;' >Contact Number</th>
                        
                            <th class='text-center' style='font-size:12px;' >Email</th>
                        
                            <th class='text-center' style='font-size:12px;' >Top Toll Free Call Message</th>
                        
                            <th class='text-center' style='font-size:12px;' >Top Apply Button Text</th>
                        
                            <th class='text-center' style='font-size:12px;' >Bottom Copyright Text</th>
                        
                            <th class='text-center' style='font-size:12px;' >Bottom Right Reserved Text</th>
                        
                            <th class='text-center' style='font-size:12px;' >Facebook Page Link</th>
                        
                            <th class='text-center' style='font-size:12px;' >Twitter Page Link</th>
                        
                            <th class='text-center' style='font-size:12px;' >LinkedIn Page Link</th>
                        
                            <th class='text-center' style='font-size:12px;' >Youtube Page Link</th>
                        
                            <th class='text-center' style='font-size:12px;' >Google Plus Page Link</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->SiteSettingQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->site_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->site_title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->top_logo."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->bottom_logo."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->contact_number."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->email."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->top_toll_free_call_message."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->top_apply_button_text."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->bottom_copyright_text."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->bottom_right_reserved_text."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->facebook_page_link."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->twitter_page_link."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->linkedin_page_link."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->youtube_page_link."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->google_plus_page_link."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Site Setting Report',$html);


    }
    public function show(SiteSetting $sitesetting)
    {
        
        $tab=SiteSetting::all();return view('admin.pages.sitesetting.sitesetting_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SiteSetting  $sitesetting
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteSetting $sitesetting,$id=0)
    {
        $tab=SiteSetting::find($id);      
        return view('admin.pages.sitesetting.sitesetting_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SiteSetting  $sitesetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteSetting $sitesetting,$id=0)
    {
        $this->validate($request,[
                
                'site_name'=>'required',
                'site_title'=>'required',
                'contact_number'=>'required',
                'email'=>'required',
                'top_toll_free_call_message'=>'required',
                'top_apply_button_text'=>'required',
                'bottom_copyright_text'=>'required',
                'bottom_right_reserved_text'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Site Setting","Update","Edit / Modify");

        

        $filename_sitesetting_2=$request->ex_top_logo;
        if ($request->hasFile('top_logo')) {
            $img_sitesetting = $request->file('top_logo');
            $upload_sitesetting = 'upload/sitesetting';
            $filename_sitesetting_2 = env('APP_NAME').'_'.time() . '.' . $img_sitesetting->getClientOriginalExtension();
            $img_sitesetting->move($upload_sitesetting, $filename_sitesetting_2);
        }

                

        $filename_sitesetting_3=$request->ex_bottom_logo;
        if ($request->hasFile('bottom_logo')) {
            $img_sitesetting = $request->file('bottom_logo');
            $upload_sitesetting = 'upload/sitesetting';
            $filename_sitesetting_3 = env('APP_NAME').'_'.time() . '.' . $img_sitesetting->getClientOriginalExtension();
            $img_sitesetting->move($upload_sitesetting, $filename_sitesetting_3);
        }

                
        $tab=SiteSetting::find($id);
        
        $tab->site_name=$request->site_name;
        $tab->site_title=$request->site_title;
        $tab->top_logo=$filename_sitesetting_2;
        $tab->bottom_logo=$filename_sitesetting_3;
        $tab->contact_number=$request->contact_number;
        $tab->email=$request->email;
        $tab->top_toll_free_call_message=$request->top_toll_free_call_message;
        $tab->top_apply_button_text=$request->top_apply_button_text;
        $tab->bottom_copyright_text=$request->bottom_copyright_text;
        $tab->bottom_right_reserved_text=$request->bottom_right_reserved_text;
        $tab->facebook_page_link=$request->facebook_page_link;
        $tab->twitter_page_link=$request->twitter_page_link;
        $tab->linkedin_page_link=$request->linkedin_page_link;
        $tab->youtube_page_link=$request->youtube_page_link;
        $tab->google_plus_page_link=$request->google_plus_page_link;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('sitesetting')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SiteSetting  $sitesetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteSetting $sitesetting,$id=0)
    {
        $this->SystemAdminLog("Site Setting","Destroy","Delete");

        $tab=SiteSetting::find($id);
        $tab->delete();
        return redirect('sitesetting')->with('status','Deleted Successfully !');}
}
