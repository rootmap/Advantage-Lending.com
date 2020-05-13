<?php

namespace App\Http\Controllers;

use App\ResourcePageSetting;
use App\AdminLog;
use Illuminate\Http\Request;

class ResourcePageSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Resource Page Setting";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=ResourcePageSetting::count();
        if($tabCount==0)
        {
            return redirect(url('resourcepagesetting/create'));
        }else{

            $tab=ResourcePageSetting::orderBy('id','DESC')->first();      
        return view('admin.pages.resourcepagesetting.resourcepagesetting_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=ResourcePageSetting::count();
        if($tabCount==0)
        {            
        return view('admin.pages.resourcepagesetting.resourcepagesetting_create');
            
        }else{

            $tab=ResourcePageSetting::orderBy('id','DESC')->first();      
        return view('admin.pages.resourcepagesetting.resourcepagesetting_edit',['dataRow'=>$tab,'edit'=>true]); 
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
                'background_image'=>'required',
                'background_forecolor'=>'required',
                'default_show_item'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Resource Page Setting","Save New","Create New");

        

        $filename_resourcepagesetting_2='';
        if ($request->hasFile('background_image')) {
            $img_resourcepagesetting = $request->file('background_image');
            $upload_resourcepagesetting = 'upload/resourcepagesetting';
            $filename_resourcepagesetting_2 = env('APP_NAME').'_'.time() . '.' . $img_resourcepagesetting->getClientOriginalExtension();
            $img_resourcepagesetting->move($upload_resourcepagesetting, $filename_resourcepagesetting_2);
        }

                
        $tab=new ResourcePageSetting();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->background_image=$filename_resourcepagesetting_2;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->default_show_item=$request->default_show_item;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('resourcepagesetting')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'background_image'=>'required',
                'background_forecolor'=>'required',
                'default_show_item'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new ResourcePageSetting();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->background_image=$filename_resourcepagesetting_2;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->default_show_item=$request->default_show_item;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ResourcePageSetting  $resourcepagesetting
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('detail','LIKE','%'.$search.'%');
                            $query->orWhere('background_image','LIKE','%'.$search.'%');
                            $query->orWhere('background_forecolor','LIKE','%'.$search.'%');
                            $query->orWhere('default_show_item','LIKE','%'.$search.'%');
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
                            $query->orWhere('background_image','LIKE','%'.$search.'%');
                            $query->orWhere('background_forecolor','LIKE','%'.$search.'%');
                            $query->orWhere('default_show_item','LIKE','%'.$search.'%');
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

    
    public function ResourcePageSettingQuery($request)
    {
        $ResourcePageSetting_data=ResourcePageSetting::orderBy('id','DESC')->get();

        return $ResourcePageSetting_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Detail','Background Image','Background Forecolor','Default Show Item','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->ResourcePageSettingQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->detail,$voi->background_image,$voi->background_forecolor,$voi->default_show_item,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Resource Page Setting Report',
            'report_title'=>'Resource Page Setting Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Background Image</th>
                        
                            <th class='text-center' style='font-size:12px;' >Background Forecolor</th>
                        
                            <th class='text-center' style='font-size:12px;' >Default Show Item</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->ResourcePageSettingQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->background_image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->background_forecolor."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->default_show_item."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Resource Page Setting Report',$html);


    }
    public function show(ResourcePageSetting $resourcepagesetting)
    {
        
        $tab=ResourcePageSetting::all();return view('admin.pages.resourcepagesetting.resourcepagesetting_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ResourcePageSetting  $resourcepagesetting
     * @return \Illuminate\Http\Response
     */
    public function edit(ResourcePageSetting $resourcepagesetting,$id=0)
    {
        $tab=ResourcePageSetting::find($id);      
        return view('admin.pages.resourcepagesetting.resourcepagesetting_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ResourcePageSetting  $resourcepagesetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResourcePageSetting $resourcepagesetting,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'background_forecolor'=>'required',
                'default_show_item'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Resource Page Setting","Update","Edit / Modify");

        

        $filename_resourcepagesetting_2=$request->ex_background_image;
        if ($request->hasFile('background_image')) {
            $img_resourcepagesetting = $request->file('background_image');
            $upload_resourcepagesetting = 'upload/resourcepagesetting';
            $filename_resourcepagesetting_2 = env('APP_NAME').'_'.time() . '.' . $img_resourcepagesetting->getClientOriginalExtension();
            $img_resourcepagesetting->move($upload_resourcepagesetting, $filename_resourcepagesetting_2);
        }

                
        $tab=ResourcePageSetting::find($id);
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->background_image=$filename_resourcepagesetting_2;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->default_show_item=$request->default_show_item;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('resourcepagesetting')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ResourcePageSetting  $resourcepagesetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResourcePageSetting $resourcepagesetting,$id=0)
    {
        $this->SystemAdminLog("Resource Page Setting","Destroy","Delete");

        $tab=ResourcePageSetting::find($id);
        $tab->delete();
        return redirect('resourcepagesetting')->with('status','Deleted Successfully !');}
}
