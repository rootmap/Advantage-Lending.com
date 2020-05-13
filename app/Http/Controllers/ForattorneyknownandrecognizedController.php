<?php

namespace App\Http\Controllers;

use App\ForAttorneyKnownandRecognized;
use App\AdminLog;
use Illuminate\Http\Request;

class ForAttorneyKnownandRecognizedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="For Attorney Known and Recognized";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=ForAttorneyKnownandRecognized::count();
        if($tabCount==0)
        {
            return redirect(url('forattorneyknownandrecognized/create'));
        }else{

            $tab=ForAttorneyKnownandRecognized::orderBy('id','DESC')->first();      
        return view('admin.pages.forattorneyknownandrecognized.forattorneyknownandrecognized_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=ForAttorneyKnownandRecognized::count();
        if($tabCount==0)
        {            
        return view('admin.pages.forattorneyknownandrecognized.forattorneyknownandrecognized_create');
            
        }else{

            $tab=ForAttorneyKnownandRecognized::orderBy('id','DESC')->first();      
        return view('admin.pages.forattorneyknownandrecognized.forattorneyknownandrecognized_edit',['dataRow'=>$tab,'edit'=>true]); 
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
                'detail'=>'required',
                'primary_background_color'=>'required',
                'secondary_background_color'=>'required',
                'video_background_image'=>'required',
                'youtube_link'=>'required',
                'video_by'=>'required',
                'video_location'=>'required',
                'video_short_detail'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("For Attorney Known and Recognized","Save New","Create New");

        

        $filename_forattorneyknownandrecognized_4='';
        if ($request->hasFile('video_background_image')) {
            $img_forattorneyknownandrecognized = $request->file('video_background_image');
            $upload_forattorneyknownandrecognized = 'upload/forattorneyknownandrecognized';
            $filename_forattorneyknownandrecognized_4 = env('APP_NAME').'_'.time() . '.' . $img_forattorneyknownandrecognized->getClientOriginalExtension();
            $img_forattorneyknownandrecognized->move($upload_forattorneyknownandrecognized, $filename_forattorneyknownandrecognized_4);
        }

                
        $tab=new ForAttorneyKnownandRecognized();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->primary_background_color=$request->primary_background_color;
        $tab->secondary_background_color=$request->secondary_background_color;
        $tab->video_background_image=$filename_forattorneyknownandrecognized_4;
        $tab->youtube_link=$request->youtube_link;
        $tab->video_by=$request->video_by;
        $tab->video_location=$request->video_location;
        $tab->video_short_detail=$request->video_short_detail;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('forattorneyknownandrecognized')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'primary_background_color'=>'required',
                'secondary_background_color'=>'required',
                'video_background_image'=>'required',
                'youtube_link'=>'required',
                'video_by'=>'required',
                'video_location'=>'required',
                'video_short_detail'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new ForAttorneyKnownandRecognized();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->primary_background_color=$request->primary_background_color;
        $tab->secondary_background_color=$request->secondary_background_color;
        $tab->video_background_image=$filename_forattorneyknownandrecognized_4;
        $tab->youtube_link=$request->youtube_link;
        $tab->video_by=$request->video_by;
        $tab->video_location=$request->video_location;
        $tab->video_short_detail=$request->video_short_detail;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ForAttorneyKnownandRecognized  $forattorneyknownandrecognized
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('detail','LIKE','%'.$search.'%');
                            $query->orWhere('primary_background_color','LIKE','%'.$search.'%');
                            $query->orWhere('secondary_background_color','LIKE','%'.$search.'%');
                            $query->orWhere('video_background_image','LIKE','%'.$search.'%');
                            $query->orWhere('youtube_link','LIKE','%'.$search.'%');
                            $query->orWhere('video_by','LIKE','%'.$search.'%');
                            $query->orWhere('video_location','LIKE','%'.$search.'%');
                            $query->orWhere('video_short_detail','LIKE','%'.$search.'%');
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
                            $query->orWhere('detail','LIKE','%'.$search.'%');
                            $query->orWhere('primary_background_color','LIKE','%'.$search.'%');
                            $query->orWhere('secondary_background_color','LIKE','%'.$search.'%');
                            $query->orWhere('video_background_image','LIKE','%'.$search.'%');
                            $query->orWhere('youtube_link','LIKE','%'.$search.'%');
                            $query->orWhere('video_by','LIKE','%'.$search.'%');
                            $query->orWhere('video_location','LIKE','%'.$search.'%');
                            $query->orWhere('video_short_detail','LIKE','%'.$search.'%');
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

    
    public function ForAttorneyKnownandRecognizedQuery($request)
    {
        $ForAttorneyKnownandRecognized_data=ForAttorneyKnownandRecognized::orderBy('id','DESC')->get();

        return $ForAttorneyKnownandRecognized_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Detail','Primary Background Color','Secondary Background Color','Video Background Image','Youtube Link','Video By','Video Location','Video Short Detail','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->ForAttorneyKnownandRecognizedQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->detail,$voi->primary_background_color,$voi->secondary_background_color,$voi->video_background_image,$voi->youtube_link,$voi->video_by,$voi->video_location,$voi->video_short_detail,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'For Attorney Known and Recognized Report',
            'report_title'=>'For Attorney Known and Recognized Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Detail</th>
                        
                            <th class='text-center' style='font-size:12px;' >Primary Background Color</th>
                        
                            <th class='text-center' style='font-size:12px;' >Secondary Background Color</th>
                        
                            <th class='text-center' style='font-size:12px;' >Video Background Image</th>
                        
                            <th class='text-center' style='font-size:12px;' >Youtube Link</th>
                        
                            <th class='text-center' style='font-size:12px;' >Video By</th>
                        
                            <th class='text-center' style='font-size:12px;' >Video Location</th>
                        
                            <th class='text-center' style='font-size:12px;' >Video Short Detail</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->ForAttorneyKnownandRecognizedQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->primary_background_color."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->secondary_background_color."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->video_background_image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->youtube_link."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->video_by."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->video_location."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->video_short_detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('For Attorney Known and Recognized Report',$html);


    }
    public function show(ForAttorneyKnownandRecognized $forattorneyknownandrecognized)
    {
        
        $tab=ForAttorneyKnownandRecognized::all();return view('admin.pages.forattorneyknownandrecognized.forattorneyknownandrecognized_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ForAttorneyKnownandRecognized  $forattorneyknownandrecognized
     * @return \Illuminate\Http\Response
     */
    public function edit(ForAttorneyKnownandRecognized $forattorneyknownandrecognized,$id=0)
    {
        $tab=ForAttorneyKnownandRecognized::find($id);      
        return view('admin.pages.forattorneyknownandrecognized.forattorneyknownandrecognized_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ForAttorneyKnownandRecognized  $forattorneyknownandrecognized
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ForAttorneyKnownandRecognized $forattorneyknownandrecognized,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'primary_background_color'=>'required',
                'secondary_background_color'=>'required',
                'youtube_link'=>'required',
                'video_by'=>'required',
                'video_location'=>'required',
                'video_short_detail'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("For Attorney Known and Recognized","Update","Edit / Modify");

        

        $filename_forattorneyknownandrecognized_4=$request->ex_video_background_image;
        if ($request->hasFile('video_background_image')) {
            $img_forattorneyknownandrecognized = $request->file('video_background_image');
            $upload_forattorneyknownandrecognized = 'upload/forattorneyknownandrecognized';
            $filename_forattorneyknownandrecognized_4 = env('APP_NAME').'_'.time() . '.' . $img_forattorneyknownandrecognized->getClientOriginalExtension();
            $img_forattorneyknownandrecognized->move($upload_forattorneyknownandrecognized, $filename_forattorneyknownandrecognized_4);
        }

                
        $tab=ForAttorneyKnownandRecognized::find($id);
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->primary_background_color=$request->primary_background_color;
        $tab->secondary_background_color=$request->secondary_background_color;
        $tab->video_background_image=$filename_forattorneyknownandrecognized_4;
        $tab->youtube_link=$request->youtube_link;
        $tab->video_by=$request->video_by;
        $tab->video_location=$request->video_location;
        $tab->video_short_detail=$request->video_short_detail;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('forattorneyknownandrecognized')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ForAttorneyKnownandRecognized  $forattorneyknownandrecognized
     * @return \Illuminate\Http\Response
     */
    public function destroy(ForAttorneyKnownandRecognized $forattorneyknownandrecognized,$id=0)
    {
        $this->SystemAdminLog("For Attorney Known and Recognized","Destroy","Delete");

        $tab=ForAttorneyKnownandRecognized::find($id);
        $tab->delete();
        return redirect('forattorneyknownandrecognized')->with('status','Deleted Successfully !');}
}
