<?php

namespace App\Http\Controllers;

use App\HelpOnManyCase;
use App\AdminLog;
use Illuminate\Http\Request;

class HelpOnManyCaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Help On Many Case";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=HelpOnManyCase::count();
        if($tabCount==0)
        {
            return redirect(url('helponmanycase/create'));
        }else{

            $tab=HelpOnManyCase::orderBy('id','DESC')->first();      
        return view('admin.pages.helponmanycase.helponmanycase_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=HelpOnManyCase::count();
        if($tabCount==0)
        {            
        return view('admin.pages.helponmanycase.helponmanycase_create');
            
        }else{

            $tab=HelpOnManyCase::orderBy('id','DESC')->first();      
        return view('admin.pages.helponmanycase.helponmanycase_edit',['dataRow'=>$tab,'edit'=>true]); 
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
                'button_text'=>'required',
                'button_url'=>'required',
                'case_block_forecolor'=>'required',
                'case_block_bottom_forecolor'=>'required',
                'case_block_bottom_text_color'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Help On Many Case","Save New","Create New");

        
        $tab=new HelpOnManyCase();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->button_text=$request->button_text;
        $tab->button_url=$request->button_url;
        $tab->case_block_forecolor=$request->case_block_forecolor;
        $tab->case_block_bottom_forecolor=$request->case_block_bottom_forecolor;
        $tab->case_block_bottom_text_color=$request->case_block_bottom_text_color;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('helponmanycase')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'button_text'=>'required',
                'button_url'=>'required',
                'case_block_forecolor'=>'required',
                'case_block_bottom_forecolor'=>'required',
                'case_block_bottom_text_color'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new HelpOnManyCase();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->button_text=$request->button_text;
        $tab->button_url=$request->button_url;
        $tab->case_block_forecolor=$request->case_block_forecolor;
        $tab->case_block_bottom_forecolor=$request->case_block_bottom_forecolor;
        $tab->case_block_bottom_text_color=$request->case_block_bottom_text_color;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HelpOnManyCase  $helponmanycase
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('detail','LIKE','%'.$search.'%');
                            $query->orWhere('button_text','LIKE','%'.$search.'%');
                            $query->orWhere('button_url','LIKE','%'.$search.'%');
                            $query->orWhere('case_block_forecolor','LIKE','%'.$search.'%');
                            $query->orWhere('case_block_bottom_forecolor','LIKE','%'.$search.'%');
                            $query->orWhere('case_block_bottom_text_color','LIKE','%'.$search.'%');
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
                            $query->orWhere('button_text','LIKE','%'.$search.'%');
                            $query->orWhere('button_url','LIKE','%'.$search.'%');
                            $query->orWhere('case_block_forecolor','LIKE','%'.$search.'%');
                            $query->orWhere('case_block_bottom_forecolor','LIKE','%'.$search.'%');
                            $query->orWhere('case_block_bottom_text_color','LIKE','%'.$search.'%');
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

    
    public function HelpOnManyCaseQuery($request)
    {
        $HelpOnManyCase_data=HelpOnManyCase::orderBy('id','DESC')->get();

        return $HelpOnManyCase_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Detail','Button Text','Button URL','Case Block Forecolor','Case Block Bottom Forecolor','Case Block Bottom Text Color','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->HelpOnManyCaseQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->detail,$voi->button_text,$voi->button_url,$voi->case_block_forecolor,$voi->case_block_bottom_forecolor,$voi->case_block_bottom_text_color,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Help On Many Case Report',
            'report_title'=>'Help On Many Case Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Button Text</th>
                        
                            <th class='text-center' style='font-size:12px;' >Button URL</th>
                        
                            <th class='text-center' style='font-size:12px;' >Case Block Forecolor</th>
                        
                            <th class='text-center' style='font-size:12px;' >Case Block Bottom Forecolor</th>
                        
                            <th class='text-center' style='font-size:12px;' >Case Block Bottom Text Color</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->HelpOnManyCaseQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->button_text."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->button_url."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->case_block_forecolor."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->case_block_bottom_forecolor."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->case_block_bottom_text_color."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Help On Many Case Report',$html);


    }
    public function show(HelpOnManyCase $helponmanycase)
    {
        
        $tab=HelpOnManyCase::all();return view('admin.pages.helponmanycase.helponmanycase_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HelpOnManyCase  $helponmanycase
     * @return \Illuminate\Http\Response
     */
    public function edit(HelpOnManyCase $helponmanycase,$id=0)
    {
        $tab=HelpOnManyCase::find($id);      
        return view('admin.pages.helponmanycase.helponmanycase_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HelpOnManyCase  $helponmanycase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HelpOnManyCase $helponmanycase,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'button_text'=>'required',
                'button_url'=>'required',
                'case_block_forecolor'=>'required',
                'case_block_bottom_forecolor'=>'required',
                'case_block_bottom_text_color'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Help On Many Case","Update","Edit / Modify");

        
        $tab=HelpOnManyCase::find($id);
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->button_text=$request->button_text;
        $tab->button_url=$request->button_url;
        $tab->case_block_forecolor=$request->case_block_forecolor;
        $tab->case_block_bottom_forecolor=$request->case_block_bottom_forecolor;
        $tab->case_block_bottom_text_color=$request->case_block_bottom_text_color;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('helponmanycase')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HelpOnManyCase  $helponmanycase
     * @return \Illuminate\Http\Response
     */
    public function destroy(HelpOnManyCase $helponmanycase,$id=0)
    {
        $this->SystemAdminLog("Help On Many Case","Destroy","Delete");

        $tab=HelpOnManyCase::find($id);
        $tab->delete();
        return redirect('helponmanycase')->with('status','Deleted Successfully !');}
}
