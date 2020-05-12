<?php

namespace App\Http\Controllers;

use App\HowWeHelp;
use App\AdminLog;
use Illuminate\Http\Request;

class HowWeHelpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="How We Help";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=HowWeHelp::count();
        if($tabCount==0)
        {
            return redirect(url('howwehelp/create'));
        }else{

            $tab=HowWeHelp::orderBy('id','DESC')->first();      
        return view('admin.pages.howwehelp.howwehelp_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=HowWeHelp::count();
        if($tabCount==0)
        {            
        return view('admin.pages.howwehelp.howwehelp_create');
            
        }else{

            $tab=HowWeHelp::orderBy('id','DESC')->first();      
        return view('admin.pages.howwehelp.howwehelp_edit',['dataRow'=>$tab,'edit'=>true]); 
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
                'section_detail'=>'required',
                'section_one_icon'=>'required',
                'section_one_content'=>'required',
                'section_two_icon'=>'required',
                'section_two_content'=>'required',
                'section_three_icon'=>'required',
                'section_three_content'=>'required',
                'section_four_icon'=>'required',
                'section_four_content'=>'required',
                'section_image'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("How We Help","Save New","Create New");

        

        $filename_howwehelp_10='';
        if ($request->hasFile('section_image')) {
            $img_howwehelp = $request->file('section_image');
            $upload_howwehelp = 'upload/howwehelp';
            $filename_howwehelp_10 = env('APP_NAME').'_'.time() . '.' . $img_howwehelp->getClientOriginalExtension();
            $img_howwehelp->move($upload_howwehelp, $filename_howwehelp_10);
        }

                
        $tab=new HowWeHelp();
        
        $tab->section_title=$request->section_title;
        $tab->section_detail=$request->section_detail;
        $tab->section_one_icon=$request->section_one_icon;
        $tab->section_one_content=$request->section_one_content;
        $tab->section_two_icon=$request->section_two_icon;
        $tab->section_two_content=$request->section_two_content;
        $tab->section_three_icon=$request->section_three_icon;
        $tab->section_three_content=$request->section_three_content;
        $tab->section_four_icon=$request->section_four_icon;
        $tab->section_four_content=$request->section_four_content;
        $tab->section_image=$filename_howwehelp_10;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('howwehelp')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'section_title'=>'required',
                'section_detail'=>'required',
                'section_one_icon'=>'required',
                'section_one_content'=>'required',
                'section_two_icon'=>'required',
                'section_two_content'=>'required',
                'section_three_icon'=>'required',
                'section_three_content'=>'required',
                'section_four_icon'=>'required',
                'section_four_content'=>'required',
                'section_image'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new HowWeHelp();
        
        $tab->section_title=$request->section_title;
        $tab->section_detail=$request->section_detail;
        $tab->section_one_icon=$request->section_one_icon;
        $tab->section_one_content=$request->section_one_content;
        $tab->section_two_icon=$request->section_two_icon;
        $tab->section_two_content=$request->section_two_content;
        $tab->section_three_icon=$request->section_three_icon;
        $tab->section_three_content=$request->section_three_content;
        $tab->section_four_icon=$request->section_four_icon;
        $tab->section_four_content=$request->section_four_content;
        $tab->section_image=$filename_howwehelp_10;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HowWeHelp  $howwehelp
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('section_title','LIKE','%'.$search.'%');
                            $query->orWhere('section_detail','LIKE','%'.$search.'%');
                            $query->orWhere('section_one_icon','LIKE','%'.$search.'%');
                            $query->orWhere('section_one_content','LIKE','%'.$search.'%');
                            $query->orWhere('section_two_icon','LIKE','%'.$search.'%');
                            $query->orWhere('section_two_content','LIKE','%'.$search.'%');
                            $query->orWhere('section_three_icon','LIKE','%'.$search.'%');
                            $query->orWhere('section_three_content','LIKE','%'.$search.'%');
                            $query->orWhere('section_four_icon','LIKE','%'.$search.'%');
                            $query->orWhere('section_four_content','LIKE','%'.$search.'%');
                            $query->orWhere('section_image','LIKE','%'.$search.'%');
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
                            $query->orWhere('section_detail','LIKE','%'.$search.'%');
                            $query->orWhere('section_one_icon','LIKE','%'.$search.'%');
                            $query->orWhere('section_one_content','LIKE','%'.$search.'%');
                            $query->orWhere('section_two_icon','LIKE','%'.$search.'%');
                            $query->orWhere('section_two_content','LIKE','%'.$search.'%');
                            $query->orWhere('section_three_icon','LIKE','%'.$search.'%');
                            $query->orWhere('section_three_content','LIKE','%'.$search.'%');
                            $query->orWhere('section_four_icon','LIKE','%'.$search.'%');
                            $query->orWhere('section_four_content','LIKE','%'.$search.'%');
                            $query->orWhere('section_image','LIKE','%'.$search.'%');
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

    
    public function HowWeHelpQuery($request)
    {
        $HowWeHelp_data=HowWeHelp::orderBy('id','DESC')->get();

        return $HowWeHelp_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Section Title','Section Detail','Section One Icon','Section One Content','Section Two Icon','Section Two Content','Section Three Icon','Section Three Content','Section Four Icon','Section Four Content','Section Image','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->HowWeHelpQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->section_title,$voi->section_detail,$voi->section_one_icon,$voi->section_one_content,$voi->section_two_icon,$voi->section_two_content,$voi->section_three_icon,$voi->section_three_content,$voi->section_four_icon,$voi->section_four_content,$voi->section_image,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'How We Help Report',
            'report_title'=>'How We Help Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Section Detail</th>
                        
                            <th class='text-center' style='font-size:12px;' >Section One Icon</th>
                        
                            <th class='text-center' style='font-size:12px;' >Section One Content</th>
                        
                            <th class='text-center' style='font-size:12px;' >Section Two Icon</th>
                        
                            <th class='text-center' style='font-size:12px;' >Section Two Content</th>
                        
                            <th class='text-center' style='font-size:12px;' >Section Three Icon</th>
                        
                            <th class='text-center' style='font-size:12px;' >Section Three Content</th>
                        
                            <th class='text-center' style='font-size:12px;' >Section Four Icon</th>
                        
                            <th class='text-center' style='font-size:12px;' >Section Four Content</th>
                        
                            <th class='text-center' style='font-size:12px;' >Section Image</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->HowWeHelpQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->section_title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->section_detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->section_one_icon."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->section_one_content."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->section_two_icon."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->section_two_content."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->section_three_icon."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->section_three_content."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->section_four_icon."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->section_four_content."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->section_image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('How We Help Report',$html);


    }
    public function show(HowWeHelp $howwehelp)
    {
        
        $tab=HowWeHelp::all();return view('admin.pages.howwehelp.howwehelp_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HowWeHelp  $howwehelp
     * @return \Illuminate\Http\Response
     */
    public function edit(HowWeHelp $howwehelp,$id=0)
    {
        $tab=HowWeHelp::find($id);      
        return view('admin.pages.howwehelp.howwehelp_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HowWeHelp  $howwehelp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HowWeHelp $howwehelp,$id=0)
    {
        $this->validate($request,[
                
                'section_title'=>'required',
                'section_detail'=>'required',
                'section_one_icon'=>'required',
                'section_one_content'=>'required',
                'section_two_icon'=>'required',
                'section_two_content'=>'required',
                'section_three_icon'=>'required',
                'section_three_content'=>'required',
                'section_four_icon'=>'required',
                'section_four_content'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("How We Help","Update","Edit / Modify");

        

        $filename_howwehelp_10=$request->ex_section_image;
        if ($request->hasFile('section_image')) {
            $img_howwehelp = $request->file('section_image');
            $upload_howwehelp = 'upload/howwehelp';
            $filename_howwehelp_10 = env('APP_NAME').'_'.time() . '.' . $img_howwehelp->getClientOriginalExtension();
            $img_howwehelp->move($upload_howwehelp, $filename_howwehelp_10);
        }

                
        $tab=HowWeHelp::find($id);
        
        $tab->section_title=$request->section_title;
        $tab->section_detail=$request->section_detail;
        $tab->section_one_icon=$request->section_one_icon;
        $tab->section_one_content=$request->section_one_content;
        $tab->section_two_icon=$request->section_two_icon;
        $tab->section_two_content=$request->section_two_content;
        $tab->section_three_icon=$request->section_three_icon;
        $tab->section_three_content=$request->section_three_content;
        $tab->section_four_icon=$request->section_four_icon;
        $tab->section_four_content=$request->section_four_content;
        $tab->section_image=$filename_howwehelp_10;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('howwehelp')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HowWeHelp  $howwehelp
     * @return \Illuminate\Http\Response
     */
    public function destroy(HowWeHelp $howwehelp,$id=0)
    {
        $this->SystemAdminLog("How We Help","Destroy","Delete");

        $tab=HowWeHelp::find($id);
        $tab->delete();
        return redirect('howwehelp')->with('status','Deleted Successfully !');}
}
