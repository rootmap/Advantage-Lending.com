<?php

namespace App\Http\Controllers;

use App\AboutMedia;
use App\AdminLog;
use Illuminate\Http\Request;

class AboutMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="About Media";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=AboutMedia::all();
        return view('admin.pages.aboutmedia.aboutmedia_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


                   
        return view('admin.pages.aboutmedia.aboutmedia_create');
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
                'thumble_image'=>'required',
                'detail'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("About Media","Save New","Create New");

        

        $filename_aboutmedia_1='';
        if ($request->hasFile('thumble_image')) {
            $img_aboutmedia = $request->file('thumble_image');
            $upload_aboutmedia = 'upload/aboutmedia';
            $filename_aboutmedia_1 = env('APP_NAME').'_'.time() . '.' . $img_aboutmedia->getClientOriginalExtension();
            $img_aboutmedia->move($upload_aboutmedia, $filename_aboutmedia_1);
        }

                
        $tab=new AboutMedia();
        
        $tab->title=$request->title;
        $tab->thumble_image=$filename_aboutmedia_1;
        $tab->detail=$request->detail;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('aboutmedia')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'thumble_image'=>'required',
                'detail'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new AboutMedia();
        
        $tab->title=$request->title;
        $tab->thumble_image=$filename_aboutmedia_1;
        $tab->detail=$request->detail;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutMedia  $aboutmedia
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('thumble_image','LIKE','%'.$search.'%');
                            $query->orWhere('detail','LIKE','%'.$search.'%');
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
                            $query->orWhere('thumble_image','LIKE','%'.$search.'%');
                            $query->orWhere('detail','LIKE','%'.$search.'%');
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

    
    public function AboutMediaQuery($request)
    {
        $AboutMedia_data=AboutMedia::orderBy('id','DESC')->get();

        return $AboutMedia_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Thumble Image','Detail','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->AboutMediaQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->thumble_image,$voi->detail,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'About Media Report',
            'report_title'=>'About Media Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Thumble Image</th>
                        
                            <th class='text-center' style='font-size:12px;' >Detail</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->AboutMediaQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->thumble_image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('About Media Report',$html);


    }
    public function show(AboutMedia $aboutmedia)
    {
        
        $tab=AboutMedia::all();return view('admin.pages.aboutmedia.aboutmedia_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutMedia  $aboutmedia
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutMedia $aboutmedia,$id=0)
    {
        $tab=AboutMedia::find($id);      
        return view('admin.pages.aboutmedia.aboutmedia_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutMedia  $aboutmedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutMedia $aboutmedia,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("About Media","Update","Edit / Modify");

        

        $filename_aboutmedia_1=$request->ex_thumble_image;
        if ($request->hasFile('thumble_image')) {
            $img_aboutmedia = $request->file('thumble_image');
            $upload_aboutmedia = 'upload/aboutmedia';
            $filename_aboutmedia_1 = env('APP_NAME').'_'.time() . '.' . $img_aboutmedia->getClientOriginalExtension();
            $img_aboutmedia->move($upload_aboutmedia, $filename_aboutmedia_1);
        }

                
        $tab=AboutMedia::find($id);
        
        $tab->title=$request->title;
        $tab->thumble_image=$filename_aboutmedia_1;
        $tab->detail=$request->detail;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('aboutmedia')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutMedia  $aboutmedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutMedia $aboutmedia,$id=0)
    {
        $this->SystemAdminLog("About Media","Destroy","Delete");

        $tab=AboutMedia::find($id);
        $tab->delete();
        return redirect('aboutmedia')->with('status','Deleted Successfully !');}
}
