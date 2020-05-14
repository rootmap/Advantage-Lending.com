<?php

namespace App\Http\Controllers;

use App\CareerPost;
use App\AdminLog;
use Illuminate\Http\Request;

class CareerPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Career Post";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=CareerPost::all();
        return view('admin.pages.careerpost.careerpost_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


                   
        return view('admin.pages.careerpost.careerpost_create');
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
                
                'career_title'=>'required',
                'career_detail'=>'required',
                'career_link_text'=>'required',
                'career_link_url'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Career Post","Save New","Create New");

        
        $tab=new CareerPost();
        
        $tab->career_title=$request->career_title;
        $tab->career_detail=$request->career_detail;
        $tab->career_link_text=$request->career_link_text;
        $tab->career_link_url=$request->career_link_url;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('careerpost')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'career_title'=>'required',
                'career_detail'=>'required',
                'career_link_text'=>'required',
                'career_link_url'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new CareerPost();
        
        $tab->career_title=$request->career_title;
        $tab->career_detail=$request->career_detail;
        $tab->career_link_text=$request->career_link_text;
        $tab->career_link_url=$request->career_link_url;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CareerPost  $careerpost
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('career_title','LIKE','%'.$search.'%');
                            $query->orWhere('career_detail','LIKE','%'.$search.'%');
                            $query->orWhere('career_link_text','LIKE','%'.$search.'%');
                            $query->orWhere('career_link_url','LIKE','%'.$search.'%');
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
                            $query->orWhere('career_title','LIKE','%'.$search.'%');
                            $query->orWhere('career_detail','LIKE','%'.$search.'%');
                            $query->orWhere('career_link_text','LIKE','%'.$search.'%');
                            $query->orWhere('career_link_url','LIKE','%'.$search.'%');
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

    
    public function CareerPostQuery($request)
    {
        $CareerPost_data=CareerPost::orderBy('id','DESC')->get();

        return $CareerPost_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Career Title','Career Detail','Career Link Text','Career Link URL','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->CareerPostQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->career_title,$voi->career_detail,$voi->career_link_text,$voi->career_link_url,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Career Post Report',
            'report_title'=>'Career Post Report',
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
                            <th class='text-center' style='font-size:12px;' >Career Title</th>
                        
                            <th class='text-center' style='font-size:12px;' >Career Detail</th>
                        
                            <th class='text-center' style='font-size:12px;' >Career Link Text</th>
                        
                            <th class='text-center' style='font-size:12px;' >Career Link URL</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->CareerPostQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->career_title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->career_detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->career_link_text."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->career_link_url."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Career Post Report',$html);


    }
    public function show(CareerPost $careerpost)
    {
        
        $tab=CareerPost::all();return view('admin.pages.careerpost.careerpost_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CareerPost  $careerpost
     * @return \Illuminate\Http\Response
     */
    public function edit(CareerPost $careerpost,$id=0)
    {
        $tab=CareerPost::find($id);      
        return view('admin.pages.careerpost.careerpost_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CareerPost  $careerpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CareerPost $careerpost,$id=0)
    {
        $this->validate($request,[
                
                'career_title'=>'required',
                'career_detail'=>'required',
                'career_link_text'=>'required',
                'career_link_url'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Career Post","Update","Edit / Modify");

        
        $tab=CareerPost::find($id);
        
        $tab->career_title=$request->career_title;
        $tab->career_detail=$request->career_detail;
        $tab->career_link_text=$request->career_link_text;
        $tab->career_link_url=$request->career_link_url;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('careerpost')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CareerPost  $careerpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(CareerPost $careerpost,$id=0)
    {
        $this->SystemAdminLog("Career Post","Destroy","Delete");

        $tab=CareerPost::find($id);
        $tab->delete();
        return redirect('careerpost')->with('status','Deleted Successfully !');}
}
