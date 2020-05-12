<?php

namespace App\Http\Controllers;

use App\YouAreNotAloneVideo;
use App\AdminLog;
use Illuminate\Http\Request;

class YouAreNotAloneVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="You Are Not Alone Video";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=YouAreNotAloneVideo::all();
        return view('admin.pages.youarenotalonevideo.youarenotalonevideo_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


                   
        return view('admin.pages.youarenotalonevideo.youarenotalonevideo_create');
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
                
                'video_by'=>'required',
                'video_from_location'=>'required',
                'short_detail'=>'required',
                'video_image'=>'required',
                'play_video_text'=>'required',
                'youtube_video_link'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("You Are Not Alone Video","Save New","Create New");

        

        $filename_youarenotalonevideo_3='';
        if ($request->hasFile('video_image')) {
            $img_youarenotalonevideo = $request->file('video_image');
            $upload_youarenotalonevideo = 'upload/youarenotalonevideo';
            $filename_youarenotalonevideo_3 = env('APP_NAME').'_'.time() . '.' . $img_youarenotalonevideo->getClientOriginalExtension();
            $img_youarenotalonevideo->move($upload_youarenotalonevideo, $filename_youarenotalonevideo_3);
        }

                
        $tab=new YouAreNotAloneVideo();
        
        $tab->video_by=$request->video_by;
        $tab->video_from_location=$request->video_from_location;
        $tab->short_detail=$request->short_detail;
        $tab->video_image=$filename_youarenotalonevideo_3;
        $tab->play_video_text=$request->play_video_text;
        $tab->youtube_video_link=$request->youtube_video_link;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('youarenotalonevideo')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'video_by'=>'required',
                'video_from_location'=>'required',
                'short_detail'=>'required',
                'video_image'=>'required',
                'play_video_text'=>'required',
                'youtube_video_link'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new YouAreNotAloneVideo();
        
        $tab->video_by=$request->video_by;
        $tab->video_from_location=$request->video_from_location;
        $tab->short_detail=$request->short_detail;
        $tab->video_image=$filename_youarenotalonevideo_3;
        $tab->play_video_text=$request->play_video_text;
        $tab->youtube_video_link=$request->youtube_video_link;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\YouAreNotAloneVideo  $youarenotalonevideo
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('video_by','LIKE','%'.$search.'%');
                            $query->orWhere('video_from_location','LIKE','%'.$search.'%');
                            $query->orWhere('short_detail','LIKE','%'.$search.'%');
                            $query->orWhere('video_image','LIKE','%'.$search.'%');
                            $query->orWhere('play_video_text','LIKE','%'.$search.'%');
                            $query->orWhere('youtube_video_link','LIKE','%'.$search.'%');
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
                            $query->orWhere('video_by','LIKE','%'.$search.'%');
                            $query->orWhere('video_from_location','LIKE','%'.$search.'%');
                            $query->orWhere('short_detail','LIKE','%'.$search.'%');
                            $query->orWhere('video_image','LIKE','%'.$search.'%');
                            $query->orWhere('play_video_text','LIKE','%'.$search.'%');
                            $query->orWhere('youtube_video_link','LIKE','%'.$search.'%');
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

    
    public function YouAreNotAloneVideoQuery($request)
    {
        $YouAreNotAloneVideo_data=YouAreNotAloneVideo::orderBy('id','DESC')->get();

        return $YouAreNotAloneVideo_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Video By','Video From Location','Short Detail','Video Image','Play Video Text','Youtube Video Link','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->YouAreNotAloneVideoQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->video_by,$voi->video_from_location,$voi->short_detail,$voi->video_image,$voi->play_video_text,$voi->youtube_video_link,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'You Are Not Alone Video Report',
            'report_title'=>'You Are Not Alone Video Report',
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
                            <th class='text-center' style='font-size:12px;' >Video By</th>
                        
                            <th class='text-center' style='font-size:12px;' >Video From Location</th>
                        
                            <th class='text-center' style='font-size:12px;' >Short Detail</th>
                        
                            <th class='text-center' style='font-size:12px;' >Video Image</th>
                        
                            <th class='text-center' style='font-size:12px;' >Play Video Text</th>
                        
                            <th class='text-center' style='font-size:12px;' >Youtube Video Link</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->YouAreNotAloneVideoQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->video_by."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->video_from_location."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->short_detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->video_image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->play_video_text."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->youtube_video_link."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('You Are Not Alone Video Report',$html);


    }
    public function show(YouAreNotAloneVideo $youarenotalonevideo)
    {
        
        $tab=YouAreNotAloneVideo::all();return view('admin.pages.youarenotalonevideo.youarenotalonevideo_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\YouAreNotAloneVideo  $youarenotalonevideo
     * @return \Illuminate\Http\Response
     */
    public function edit(YouAreNotAloneVideo $youarenotalonevideo,$id=0)
    {
        $tab=YouAreNotAloneVideo::find($id);      
        return view('admin.pages.youarenotalonevideo.youarenotalonevideo_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\YouAreNotAloneVideo  $youarenotalonevideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, YouAreNotAloneVideo $youarenotalonevideo,$id=0)
    {
        $this->validate($request,[
                
                'video_by'=>'required',
                'video_from_location'=>'required',
                'short_detail'=>'required',
                'play_video_text'=>'required',
                'youtube_video_link'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("You Are Not Alone Video","Update","Edit / Modify");

        

        $filename_youarenotalonevideo_3=$request->ex_video_image;
        if ($request->hasFile('video_image')) {
            $img_youarenotalonevideo = $request->file('video_image');
            $upload_youarenotalonevideo = 'upload/youarenotalonevideo';
            $filename_youarenotalonevideo_3 = env('APP_NAME').'_'.time() . '.' . $img_youarenotalonevideo->getClientOriginalExtension();
            $img_youarenotalonevideo->move($upload_youarenotalonevideo, $filename_youarenotalonevideo_3);
        }

                
        $tab=YouAreNotAloneVideo::find($id);
        
        $tab->video_by=$request->video_by;
        $tab->video_from_location=$request->video_from_location;
        $tab->short_detail=$request->short_detail;
        $tab->video_image=$filename_youarenotalonevideo_3;
        $tab->play_video_text=$request->play_video_text;
        $tab->youtube_video_link=$request->youtube_video_link;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('youarenotalonevideo')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\YouAreNotAloneVideo  $youarenotalonevideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(YouAreNotAloneVideo $youarenotalonevideo,$id=0)
    {
        $this->SystemAdminLog("You Are Not Alone Video","Destroy","Delete");

        $tab=YouAreNotAloneVideo::find($id);
        $tab->delete();
        return redirect('youarenotalonevideo')->with('status','Deleted Successfully !');}
}
