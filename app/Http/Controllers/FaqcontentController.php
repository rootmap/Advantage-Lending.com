<?php

namespace App\Http\Controllers;

use App\FAQContent;
use App\AdminLog;
use Illuminate\Http\Request;
use App\FAQCategory;
                

class FAQContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="FAQ Content";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=FAQContent::all();
        return view('admin.pages.faqcontent.faqcontent_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tab_FAQCategory=FAQCategory::all();           
        return view('admin.pages.faqcontent.faqcontent_create',['dataRow_FAQCategory'=>$tab_FAQCategory]);
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
                
                'category_id'=>'required',
                'content_title'=>'required',
                'content_detail'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("FAQ Content","Save New","Create New");

        
        $tab_0_FAQCategory=FAQCategory::where('id',$request->category_id)->first();
        $category_id_0_FAQCategory=$tab_0_FAQCategory->name;
        $tab=new FAQContent();
        
        $tab->category_id_name=$category_id_0_FAQCategory;
        $tab->category_id=$request->category_id;
        $tab->content_title=$request->content_title;
        $tab->content_detail=$request->content_detail;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('faqcontent')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'category_id'=>'required',
                'content_title'=>'required',
                'content_detail'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new FAQContent();
        
        $tab->category_id_name=$category_id_0_FAQCategory;
        $tab->category_id=$request->category_id;
        $tab->content_title=$request->content_title;
        $tab->content_detail=$request->content_detail;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FAQContent  $faqcontent
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('category_id','LIKE','%'.$search.'%');
                            $query->orWhere('content_title','LIKE','%'.$search.'%');
                            $query->orWhere('content_detail','LIKE','%'.$search.'%');
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
                            $query->orWhere('category_id','LIKE','%'.$search.'%');
                            $query->orWhere('content_title','LIKE','%'.$search.'%');
                            $query->orWhere('content_detail','LIKE','%'.$search.'%');
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

    
    public function FAQContentQuery($request)
    {
        $FAQContent_data=FAQContent::orderBy('id','DESC')->get();

        return $FAQContent_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Category Id','Content Title','Content Detail','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->FAQContentQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->category_id,$voi->content_title,$voi->content_detail,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'FAQ Content Report',
            'report_title'=>'FAQ Content Report',
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
                            <th class='text-center' style='font-size:12px;' >Category Id</th>
                        
                            <th class='text-center' style='font-size:12px;' >Content Title</th>
                        
                            <th class='text-center' style='font-size:12px;' >Content Detail</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->FAQContentQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->category_id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->content_title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->content_detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('FAQ Content Report',$html);


    }
    public function show(FAQContent $faqcontent)
    {
        
        $tab=FAQContent::all();return view('admin.pages.faqcontent.faqcontent_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FAQContent  $faqcontent
     * @return \Illuminate\Http\Response
     */
    public function edit(FAQContent $faqcontent,$id=0)
    {
        $tab=FAQContent::find($id); 
        $tab_FAQCategory=FAQCategory::all();     
        return view('admin.pages.faqcontent.faqcontent_edit',['dataRow_FAQCategory'=>$tab_FAQCategory,'dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FAQContent  $faqcontent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FAQContent $faqcontent,$id=0)
    {
        $this->validate($request,[
                
                'category_id'=>'required',
                'content_title'=>'required',
                'content_detail'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("FAQ Content","Update","Edit / Modify");

        
        $tab_0_FAQCategory=FAQCategory::where('id',$request->category_id)->first();
        $category_id_0_FAQCategory=$tab_0_FAQCategory->name;
        $tab=FAQContent::find($id);
        
        $tab->category_id_name=$category_id_0_FAQCategory;
        $tab->category_id=$request->category_id;
        $tab->content_title=$request->content_title;
        $tab->content_detail=$request->content_detail;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('faqcontent')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FAQContent  $faqcontent
     * @return \Illuminate\Http\Response
     */
    public function destroy(FAQContent $faqcontent,$id=0)
    {
        $this->SystemAdminLog("FAQ Content","Destroy","Delete");

        $tab=FAQContent::find($id);
        $tab->delete();
        return redirect('faqcontent')->with('status','Deleted Successfully !');}
}
