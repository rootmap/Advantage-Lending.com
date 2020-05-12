<?php

namespace App\Http\Controllers;

use App\YOUARENOTALONE;
use App\AdminLog;
use Illuminate\Http\Request;

class YOUARENOTALONEController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="YOU ARE NOT ALONE";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=YOUARENOTALONE::count();
        if($tabCount==0)
        {
            return redirect(url('youarenotalone/create'));
        }else{

            $tab=YOUARENOTALONE::orderBy('id','DESC')->first();      
        return view('admin.pages.youarenotalone.youarenotalone_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=YOUARENOTALONE::count();
        if($tabCount==0)
        {            
        return view('admin.pages.youarenotalone.youarenotalone_create');
            
        }else{

            $tab=YOUARENOTALONE::orderBy('id','DESC')->first();      
        return view('admin.pages.youarenotalone.youarenotalone_edit',['dataRow'=>$tab,'edit'=>true]); 
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
                'section_button_text'=>'required',
                'section_button_url'=>'required',
                'background_first_color'=>'required',
                'background_second_color'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("YOU ARE NOT ALONE","Save New","Create New");

        
        $tab=new YOUARENOTALONE();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->section_button_text=$request->section_button_text;
        $tab->section_button_url=$request->section_button_url;
        $tab->background_first_color=$request->background_first_color;
        $tab->background_second_color=$request->background_second_color;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('youarenotalone')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'section_button_text'=>'required',
                'section_button_url'=>'required',
                'background_first_color'=>'required',
                'background_second_color'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new YOUARENOTALONE();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->section_button_text=$request->section_button_text;
        $tab->section_button_url=$request->section_button_url;
        $tab->background_first_color=$request->background_first_color;
        $tab->background_second_color=$request->background_second_color;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\YOUARENOTALONE  $youarenotalone
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('detail','LIKE','%'.$search.'%');
                            $query->orWhere('section_button_text','LIKE','%'.$search.'%');
                            $query->orWhere('section_button_url','LIKE','%'.$search.'%');
                            $query->orWhere('background_first_color','LIKE','%'.$search.'%');
                            $query->orWhere('background_second_color','LIKE','%'.$search.'%');
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
                            $query->orWhere('section_button_text','LIKE','%'.$search.'%');
                            $query->orWhere('section_button_url','LIKE','%'.$search.'%');
                            $query->orWhere('background_first_color','LIKE','%'.$search.'%');
                            $query->orWhere('background_second_color','LIKE','%'.$search.'%');
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

    
    public function YOUARENOTALONEQuery($request)
    {
        $YOUARENOTALONE_data=YOUARENOTALONE::orderBy('id','DESC')->get();

        return $YOUARENOTALONE_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Detail','Section Button Text','Section Button URL','Background First Color','Background Second Color','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->YOUARENOTALONEQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->detail,$voi->section_button_text,$voi->section_button_url,$voi->background_first_color,$voi->background_second_color,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'YOU ARE NOT ALONE Report',
            'report_title'=>'YOU ARE NOT ALONE Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Section Button Text</th>
                        
                            <th class='text-center' style='font-size:12px;' >Section Button URL</th>
                        
                            <th class='text-center' style='font-size:12px;' >Background First Color</th>
                        
                            <th class='text-center' style='font-size:12px;' >Background Second Color</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->YOUARENOTALONEQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->section_button_text."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->section_button_url."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->background_first_color."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->background_second_color."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('YOU ARE NOT ALONE Report',$html);


    }
    public function show(YOUARENOTALONE $youarenotalone)
    {
        
        $tab=YOUARENOTALONE::all();return view('admin.pages.youarenotalone.youarenotalone_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\YOUARENOTALONE  $youarenotalone
     * @return \Illuminate\Http\Response
     */
    public function edit(YOUARENOTALONE $youarenotalone,$id=0)
    {
        $tab=YOUARENOTALONE::find($id);      
        return view('admin.pages.youarenotalone.youarenotalone_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\YOUARENOTALONE  $youarenotalone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, YOUARENOTALONE $youarenotalone,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'section_button_text'=>'required',
                'section_button_url'=>'required',
                'background_first_color'=>'required',
                'background_second_color'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("YOU ARE NOT ALONE","Update","Edit / Modify");

        
        $tab=YOUARENOTALONE::find($id);
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->section_button_text=$request->section_button_text;
        $tab->section_button_url=$request->section_button_url;
        $tab->background_first_color=$request->background_first_color;
        $tab->background_second_color=$request->background_second_color;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('youarenotalone')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\YOUARENOTALONE  $youarenotalone
     * @return \Illuminate\Http\Response
     */
    public function destroy(YOUARENOTALONE $youarenotalone,$id=0)
    {
        $this->SystemAdminLog("YOU ARE NOT ALONE","Destroy","Delete");

        $tab=YOUARENOTALONE::find($id);
        $tab->delete();
        return redirect('youarenotalone')->with('status','Deleted Successfully !');}
}
