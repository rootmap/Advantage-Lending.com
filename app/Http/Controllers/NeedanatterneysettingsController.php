<?php

namespace App\Http\Controllers;

use App\NeedAnAtterneySettings;
use App\AdminLog;
use Illuminate\Http\Request;

class NeedAnAtterneySettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Need An Atterney Settings";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=NeedAnAtterneySettings::count();
        if($tabCount==0)
        {
            return redirect(url('needanatterneysettings/create'));
        }else{

            $tab=NeedAnAtterneySettings::orderBy('id','DESC')->first();      
        return view('admin.pages.needanatterneysettings.needanatterneysettings_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=NeedAnAtterneySettings::count();
        if($tabCount==0)
        {            
        return view('admin.pages.needanatterneysettings.needanatterneysettings_create');
            
        }else{

            $tab=NeedAnAtterneySettings::orderBy('id','DESC')->first();      
        return view('admin.pages.needanatterneysettings.needanatterneysettings_edit',['dataRow'=>$tab,'edit'=>true]); 
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
                'page_description'=>'required',
                'page_bottom_description'=>'required',
                'page_bottom_button'=>'required',
        ]);

        $this->SystemAdminLog("Need An Atterney Settings","Save New","Create New");

        

        $filename_needanatterneysettings_1='';
        if ($request->hasFile('background_image')) {
            $img_needanatterneysettings = $request->file('background_image');
            $upload_needanatterneysettings = 'upload/needanatterneysettings';
            $filename_needanatterneysettings_1 = env('APP_NAME').'_'.time() . '.' . $img_needanatterneysettings->getClientOriginalExtension();
            $img_needanatterneysettings->move($upload_needanatterneysettings, $filename_needanatterneysettings_1);
        }

                
        $tab=new NeedAnAtterneySettings();
        
        $tab->title=$request->title;
        $tab->background_image=$filename_needanatterneysettings_1;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->page_title=$request->page_title;
        $tab->page_description=$request->page_description;
        $tab->page_bottom_description=$request->page_bottom_description;
        $tab->page_bottom_button=$request->page_bottom_button;
        $tab->save();

        return redirect('needanatterneysettings')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'background_image'=>'required',
                'background_forecolor'=>'required',
                'page_title'=>'required',
                'page_description'=>'required',
                'page_bottom_description'=>'required',
                'page_bottom_button'=>'required',
        ]);

        $tab=new NeedAnAtterneySettings();
        
        $tab->title=$request->title;
        $tab->background_image=$filename_needanatterneysettings_1;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->page_title=$request->page_title;
        $tab->page_description=$request->page_description;
        $tab->page_bottom_description=$request->page_bottom_description;
        $tab->page_bottom_button=$request->page_bottom_button;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NeedAnAtterneySettings  $needanatterneysettings
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
                            $query->orWhere('page_description','LIKE','%'.$search.'%');
                            $query->orWhere('page_bottom_description','LIKE','%'.$search.'%');
                            $query->orWhere('page_bottom_button','LIKE','%'.$search.'%');
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
                            $query->orWhere('page_description','LIKE','%'.$search.'%');
                            $query->orWhere('page_bottom_description','LIKE','%'.$search.'%');
                            $query->orWhere('page_bottom_button','LIKE','%'.$search.'%');
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

    
    public function NeedAnAtterneySettingsQuery($request)
    {
        $NeedAnAtterneySettings_data=NeedAnAtterneySettings::orderBy('id','DESC')->get();

        return $NeedAnAtterneySettings_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Background Image','Background Forecolor','Page Title','Page Description','Page Bottom Description','Page Bottom Button','Created Date');
        array_push($data, $array_column);
        $inv=$this->NeedAnAtterneySettingsQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->background_image,$voi->background_forecolor,$voi->page_title,$voi->page_description,$voi->page_bottom_description,$voi->page_bottom_button,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Need An Atterney Settings Report',
            'report_title'=>'Need An Atterney Settings Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Page Description</th>
                        
                            <th class='text-center' style='font-size:12px;' >Page Bottom Description</th>
                        
                            <th class='text-center' style='font-size:12px;' >Page Bottom Button</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->NeedAnAtterneySettingsQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->background_image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->background_forecolor."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->page_title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->page_description."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->page_bottom_description."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->page_bottom_button."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Need An Atterney Settings Report',$html);


    }
    public function show(NeedAnAtterneySettings $needanatterneysettings)
    {
        
        $tab=NeedAnAtterneySettings::all();return view('admin.pages.needanatterneysettings.needanatterneysettings_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NeedAnAtterneySettings  $needanatterneysettings
     * @return \Illuminate\Http\Response
     */
    public function edit(NeedAnAtterneySettings $needanatterneysettings,$id=0)
    {
        $tab=NeedAnAtterneySettings::find($id);      
        return view('admin.pages.needanatterneysettings.needanatterneysettings_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NeedAnAtterneySettings  $needanatterneysettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NeedAnAtterneySettings $needanatterneysettings,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'background_forecolor'=>'required',
                'page_title'=>'required',
                'page_description'=>'required',
                'page_bottom_description'=>'required',
                'page_bottom_button'=>'required',
        ]);

        $this->SystemAdminLog("Need An Atterney Settings","Update","Edit / Modify");

        

        $filename_needanatterneysettings_1=$request->ex_background_image;
        if ($request->hasFile('background_image')) {
            $img_needanatterneysettings = $request->file('background_image');
            $upload_needanatterneysettings = 'upload/needanatterneysettings';
            $filename_needanatterneysettings_1 = env('APP_NAME').'_'.time() . '.' . $img_needanatterneysettings->getClientOriginalExtension();
            $img_needanatterneysettings->move($upload_needanatterneysettings, $filename_needanatterneysettings_1);
        }

                
        $tab=NeedAnAtterneySettings::find($id);
        
        $tab->title=$request->title;
        $tab->background_image=$filename_needanatterneysettings_1;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->page_title=$request->page_title;
        $tab->page_description=$request->page_description;
        $tab->page_bottom_description=$request->page_bottom_description;
        $tab->page_bottom_button=$request->page_bottom_button;
        $tab->save();

        return redirect('needanatterneysettings')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NeedAnAtterneySettings  $needanatterneysettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(NeedAnAtterneySettings $needanatterneysettings,$id=0)
    {
        $this->SystemAdminLog("Need An Atterney Settings","Destroy","Delete");

        $tab=NeedAnAtterneySettings::find($id);
        $tab->delete();
        return redirect('needanatterneysettings')->with('status','Deleted Successfully !');}
}
