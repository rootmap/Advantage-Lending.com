<?php

namespace App\Http\Controllers;

use App\HowItWorkCasesWeFund;
use App\AdminLog;
use Illuminate\Http\Request;

class HowItWorkCasesWeFundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="How It Work Cases We Fund";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=HowItWorkCasesWeFund::count();
        if($tabCount==0)
        {
            return redirect(url('howitworkcaseswefund/create'));
        }else{

            $tab=HowItWorkCasesWeFund::orderBy('id','DESC')->first();      
        return view('admin.pages.howitworkcaseswefund.howitworkcaseswefund_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=HowItWorkCasesWeFund::count();
        if($tabCount==0)
        {            
        return view('admin.pages.howitworkcaseswefund.howitworkcaseswefund_create');
            
        }else{

            $tab=HowItWorkCasesWeFund::orderBy('id','DESC')->first();      
        return view('admin.pages.howitworkcaseswefund.howitworkcaseswefund_edit',['dataRow'=>$tab,'edit'=>true]); 
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
                'section_image'=>'required',
                'heading_two_title'=>'required',
                'heading_options'=>'required',
                'link_text'=>'required',
                'link_url'=>'required',
                'section_background_forecolor'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("How It Work Cases We Fund","Save New","Create New");

        

        $filename_howitworkcaseswefund_3='';
        if ($request->hasFile('section_image')) {
            $img_howitworkcaseswefund = $request->file('section_image');
            $upload_howitworkcaseswefund = 'upload/howitworkcaseswefund';
            $filename_howitworkcaseswefund_3 = env('APP_NAME').'_'.time() . '.' . $img_howitworkcaseswefund->getClientOriginalExtension();
            $img_howitworkcaseswefund->move($upload_howitworkcaseswefund, $filename_howitworkcaseswefund_3);
        }

                
        $tab=new HowItWorkCasesWeFund();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->button_text=$request->button_text;
        $tab->section_image=$filename_howitworkcaseswefund_3;
        $tab->heading_two_title=$request->heading_two_title;
        $tab->heading_options=$request->heading_options;
        $tab->link_text=$request->link_text;
        $tab->link_url=$request->link_url;
        $tab->section_background_forecolor=$request->section_background_forecolor;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('howitworkcaseswefund')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'section_image'=>'required',
                'heading_two_title'=>'required',
                'heading_options'=>'required',
                'link_text'=>'required',
                'link_url'=>'required',
                'section_background_forecolor'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new HowItWorkCasesWeFund();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->button_text=$request->button_text;
        $tab->section_image=$filename_howitworkcaseswefund_3;
        $tab->heading_two_title=$request->heading_two_title;
        $tab->heading_options=$request->heading_options;
        $tab->link_text=$request->link_text;
        $tab->link_url=$request->link_url;
        $tab->section_background_forecolor=$request->section_background_forecolor;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HowItWorkCasesWeFund  $howitworkcaseswefund
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
                            $query->orWhere('section_image','LIKE','%'.$search.'%');
                            $query->orWhere('heading_two_title','LIKE','%'.$search.'%');
                            $query->orWhere('heading_options','LIKE','%'.$search.'%');
                            $query->orWhere('link_text','LIKE','%'.$search.'%');
                            $query->orWhere('link_url','LIKE','%'.$search.'%');
                            $query->orWhere('section_background_forecolor','LIKE','%'.$search.'%');
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
                            $query->orWhere('section_image','LIKE','%'.$search.'%');
                            $query->orWhere('heading_two_title','LIKE','%'.$search.'%');
                            $query->orWhere('heading_options','LIKE','%'.$search.'%');
                            $query->orWhere('link_text','LIKE','%'.$search.'%');
                            $query->orWhere('link_url','LIKE','%'.$search.'%');
                            $query->orWhere('section_background_forecolor','LIKE','%'.$search.'%');
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

    
    public function HowItWorkCasesWeFundQuery($request)
    {
        $HowItWorkCasesWeFund_data=HowItWorkCasesWeFund::orderBy('id','DESC')->get();

        return $HowItWorkCasesWeFund_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Detail','Button text','Section Image','Heading Two Title','Heading Options','Link Text','Link URL','Section Background Forecolor','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->HowItWorkCasesWeFundQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->detail,$voi->button_text,$voi->section_image,$voi->heading_two_title,$voi->heading_options,$voi->link_text,$voi->link_url,$voi->section_background_forecolor,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'How It Work Cases We Fund Report',
            'report_title'=>'How It Work Cases We Fund Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Button text</th>
                        
                            <th class='text-center' style='font-size:12px;' >Section Image</th>
                        
                            <th class='text-center' style='font-size:12px;' >Heading Two Title</th>
                        
                            <th class='text-center' style='font-size:12px;' >Heading Options</th>
                        
                            <th class='text-center' style='font-size:12px;' >Link Text</th>
                        
                            <th class='text-center' style='font-size:12px;' >Link URL</th>
                        
                            <th class='text-center' style='font-size:12px;' >Section Background Forecolor</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->HowItWorkCasesWeFundQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->button_text."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->section_image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->heading_two_title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->heading_options."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->link_text."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->link_url."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->section_background_forecolor."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('How It Work Cases We Fund Report',$html);


    }
    public function show(HowItWorkCasesWeFund $howitworkcaseswefund)
    {
        
        $tab=HowItWorkCasesWeFund::all();return view('admin.pages.howitworkcaseswefund.howitworkcaseswefund_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HowItWorkCasesWeFund  $howitworkcaseswefund
     * @return \Illuminate\Http\Response
     */
    public function edit(HowItWorkCasesWeFund $howitworkcaseswefund,$id=0)
    {
        $tab=HowItWorkCasesWeFund::find($id);      
        return view('admin.pages.howitworkcaseswefund.howitworkcaseswefund_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HowItWorkCasesWeFund  $howitworkcaseswefund
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HowItWorkCasesWeFund $howitworkcaseswefund,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'heading_two_title'=>'required',
                'heading_options'=>'required',
                'link_text'=>'required',
                'link_url'=>'required',
                'section_background_forecolor'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("How It Work Cases We Fund","Update","Edit / Modify");

        

        $filename_howitworkcaseswefund_3=$request->ex_section_image;
        if ($request->hasFile('section_image')) {
            $img_howitworkcaseswefund = $request->file('section_image');
            $upload_howitworkcaseswefund = 'upload/howitworkcaseswefund';
            $filename_howitworkcaseswefund_3 = env('APP_NAME').'_'.time() . '.' . $img_howitworkcaseswefund->getClientOriginalExtension();
            $img_howitworkcaseswefund->move($upload_howitworkcaseswefund, $filename_howitworkcaseswefund_3);
        }

                
        $tab=HowItWorkCasesWeFund::find($id);
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->button_text=$request->button_text;
        $tab->section_image=$filename_howitworkcaseswefund_3;
        $tab->heading_two_title=$request->heading_two_title;
        $tab->heading_options=$request->heading_options;
        $tab->link_text=$request->link_text;
        $tab->link_url=$request->link_url;
        $tab->section_background_forecolor=$request->section_background_forecolor;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('howitworkcaseswefund')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HowItWorkCasesWeFund  $howitworkcaseswefund
     * @return \Illuminate\Http\Response
     */
    public function destroy(HowItWorkCasesWeFund $howitworkcaseswefund,$id=0)
    {
        $this->SystemAdminLog("How It Work Cases We Fund","Destroy","Delete");

        $tab=HowItWorkCasesWeFund::find($id);
        $tab->delete();
        return redirect('howitworkcaseswefund')->with('status','Deleted Successfully !');}
}
