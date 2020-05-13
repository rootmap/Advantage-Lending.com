<?php

namespace App\Http\Controllers;

use App\AboutPageSetting;
use App\AdminLog;
use Illuminate\Http\Request;

class AboutPageSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="About Page Setting";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=AboutPageSetting::count();
        if($tabCount==0)
        {
            return redirect(url('aboutpagesetting/create'));
        }else{

            $tab=AboutPageSetting::orderBy('id','DESC')->first();      
        return view('admin.pages.aboutpagesetting.aboutpagesetting_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=AboutPageSetting::count();
        if($tabCount==0)
        {            
        return view('admin.pages.aboutpagesetting.aboutpagesetting_create');
            
        }else{

            $tab=AboutPageSetting::orderBy('id','DESC')->first();      
        return view('admin.pages.aboutpagesetting.aboutpagesetting_edit',['dataRow'=>$tab,'edit'=>true]); 
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
                
                'section_title'=>'required',
                'background_image'=>'required',
                'background_forecolor'=>'required',
                'page_heading_title'=>'required',
                'page_sub_heading'=>'required',
                'page_short_content'=>'required',
                'page_options'=>'required',
                'page_options_image'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("About Page Setting","Save New","Create New");

        

        $filename_aboutpagesetting_1='';
        if ($request->hasFile('background_image')) {
            $img_aboutpagesetting = $request->file('background_image');
            $upload_aboutpagesetting = 'upload/aboutpagesetting';
            $filename_aboutpagesetting_1 = env('APP_NAME').'_'.time() . '.' . $img_aboutpagesetting->getClientOriginalExtension();
            $img_aboutpagesetting->move($upload_aboutpagesetting, $filename_aboutpagesetting_1);
        }

                

        $filename_aboutpagesetting_7='';
        if ($request->hasFile('page_options_image')) {
            $img_aboutpagesetting = $request->file('page_options_image');
            $upload_aboutpagesetting = 'upload/aboutpagesetting';
            $filename_aboutpagesetting_7 = env('APP_NAME').'_'.time() . '.' . $img_aboutpagesetting->getClientOriginalExtension();
            $img_aboutpagesetting->move($upload_aboutpagesetting, $filename_aboutpagesetting_7);
        }

                
        $tab=new AboutPageSetting();
        
        $tab->section_title=$request->section_title;
        $tab->background_image=$filename_aboutpagesetting_1;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->page_heading_title=$request->page_heading_title;
        $tab->page_sub_heading=$request->page_sub_heading;
        $tab->page_short_content=$request->page_short_content;
        $tab->page_options=$request->page_options;
        $tab->page_options_image=$filename_aboutpagesetting_7;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('aboutpagesetting')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'section_title'=>'required',
                'background_image'=>'required',
                'background_forecolor'=>'required',
                'page_heading_title'=>'required',
                'page_sub_heading'=>'required',
                'page_short_content'=>'required',
                'page_options'=>'required',
                'page_options_image'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new AboutPageSetting();
        
        $tab->section_title=$request->section_title;
        $tab->background_image=$filename_aboutpagesetting_1;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->page_heading_title=$request->page_heading_title;
        $tab->page_sub_heading=$request->page_sub_heading;
        $tab->page_short_content=$request->page_short_content;
        $tab->page_options=$request->page_options;
        $tab->page_options_image=$filename_aboutpagesetting_7;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutPageSetting  $aboutpagesetting
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('section_title','LIKE','%'.$search.'%');
                            $query->orWhere('background_image','LIKE','%'.$search.'%');
                            $query->orWhere('background_forecolor','LIKE','%'.$search.'%');
                            $query->orWhere('page_heading_title','LIKE','%'.$search.'%');
                            $query->orWhere('page_sub_heading','LIKE','%'.$search.'%');
                            $query->orWhere('page_short_content','LIKE','%'.$search.'%');
                            $query->orWhere('page_options','LIKE','%'.$search.'%');
                            $query->orWhere('page_options_image','LIKE','%'.$search.'%');
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
                            $query->orWhere('section_title','LIKE','%'.$search.'%');
                            $query->orWhere('background_image','LIKE','%'.$search.'%');
                            $query->orWhere('background_forecolor','LIKE','%'.$search.'%');
                            $query->orWhere('page_heading_title','LIKE','%'.$search.'%');
                            $query->orWhere('page_sub_heading','LIKE','%'.$search.'%');
                            $query->orWhere('page_short_content','LIKE','%'.$search.'%');
                            $query->orWhere('page_options','LIKE','%'.$search.'%');
                            $query->orWhere('page_options_image','LIKE','%'.$search.'%');
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

    
    public function AboutPageSettingQuery($request)
    {
        $AboutPageSetting_data=AboutPageSetting::orderBy('id','DESC')->get();

        return $AboutPageSetting_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Section Title','Background Image','Background Forecolor','Page Heading Title','Page Sub Heading','Page Short Content','Page Options','Page Options Image','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->AboutPageSettingQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->section_title,$voi->background_image,$voi->background_forecolor,$voi->page_heading_title,$voi->page_sub_heading,$voi->page_short_content,$voi->page_options,$voi->page_options_image,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'About Page Setting Report',
            'report_title'=>'About Page Setting Report',
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
                            <th class='text-center' style='font-size:12px;' >Section Title</th>
                        
                            <th class='text-center' style='font-size:12px;' >Background Image</th>
                        
                            <th class='text-center' style='font-size:12px;' >Background Forecolor</th>
                        
                            <th class='text-center' style='font-size:12px;' >Page Heading Title</th>
                        
                            <th class='text-center' style='font-size:12px;' >Page Sub Heading</th>
                        
                            <th class='text-center' style='font-size:12px;' >Page Short Content</th>
                        
                            <th class='text-center' style='font-size:12px;' >Page Options</th>
                        
                            <th class='text-center' style='font-size:12px;' >Page Options Image</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->AboutPageSettingQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->section_title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->background_image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->background_forecolor."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->page_heading_title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->page_sub_heading."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->page_short_content."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->page_options."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->page_options_image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('About Page Setting Report',$html);


    }
    public function show(AboutPageSetting $aboutpagesetting)
    {
        
        $tab=AboutPageSetting::all();return view('admin.pages.aboutpagesetting.aboutpagesetting_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutPageSetting  $aboutpagesetting
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutPageSetting $aboutpagesetting,$id=0)
    {
        $tab=AboutPageSetting::find($id);      
        return view('admin.pages.aboutpagesetting.aboutpagesetting_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutPageSetting  $aboutpagesetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutPageSetting $aboutpagesetting,$id=0)
    {
        $this->validate($request,[
                
                'section_title'=>'required',
                'background_forecolor'=>'required',
                'page_heading_title'=>'required',
                'page_sub_heading'=>'required',
                'page_short_content'=>'required',
                'page_options'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("About Page Setting","Update","Edit / Modify");

        

        $filename_aboutpagesetting_1=$request->ex_background_image;
        if ($request->hasFile('background_image')) {
            $img_aboutpagesetting = $request->file('background_image');
            $upload_aboutpagesetting = 'upload/aboutpagesetting';
            $filename_aboutpagesetting_1 = env('APP_NAME').'_'.time() . '.' . $img_aboutpagesetting->getClientOriginalExtension();
            $img_aboutpagesetting->move($upload_aboutpagesetting, $filename_aboutpagesetting_1);
        }

                

        $filename_aboutpagesetting_7=$request->ex_page_options_image;
        if ($request->hasFile('page_options_image')) {
            $img_aboutpagesetting = $request->file('page_options_image');
            $upload_aboutpagesetting = 'upload/aboutpagesetting';
            $filename_aboutpagesetting_7 = env('APP_NAME').'_'.time() . '.' . $img_aboutpagesetting->getClientOriginalExtension();
            $img_aboutpagesetting->move($upload_aboutpagesetting, $filename_aboutpagesetting_7);
        }

                
        $tab=AboutPageSetting::find($id);
        
        $tab->section_title=$request->section_title;
        $tab->background_image=$filename_aboutpagesetting_1;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->page_heading_title=$request->page_heading_title;
        $tab->page_sub_heading=$request->page_sub_heading;
        $tab->page_short_content=$request->page_short_content;
        $tab->page_options=$request->page_options;
        $tab->page_options_image=$filename_aboutpagesetting_7;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('aboutpagesetting')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutPageSetting  $aboutpagesetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutPageSetting $aboutpagesetting,$id=0)
    {
        $this->SystemAdminLog("About Page Setting","Destroy","Delete");

        $tab=AboutPageSetting::find($id);
        $tab->delete();
        return redirect('aboutpagesetting')->with('status','Deleted Successfully !');}
}
