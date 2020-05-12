<?php

namespace App\Http\Controllers;

use App\FundingNeedPageContent;
use App\AdminLog;
use Illuminate\Http\Request;

class FundingNeedPageContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Funding Need Page Content";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=FundingNeedPageContent::count();
        if($tabCount==0)
        {
            return redirect(url('fundingneedpagecontent/create'));
        }else{

            $tab=FundingNeedPageContent::orderBy('id','DESC')->first();      
        return view('admin.pages.fundingneedpagecontent.fundingneedpagecontent_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=FundingNeedPageContent::count();
        if($tabCount==0)
        {            
        return view('admin.pages.fundingneedpagecontent.fundingneedpagecontent_create');
            
        }else{

            $tab=FundingNeedPageContent::orderBy('id','DESC')->first();      
        return view('admin.pages.fundingneedpagecontent.fundingneedpagecontent_edit',['dataRow'=>$tab,'edit'=>true]); 
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
                'bottom_button_text'=>'required',
                'bottom_button_url'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Funding Need Page Content","Save New","Create New");

        
        $tab=new FundingNeedPageContent();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->bottom_button_text=$request->bottom_button_text;
        $tab->bottom_button_url=$request->bottom_button_url;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('fundingneedpagecontent')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'bottom_button_text'=>'required',
                'bottom_button_url'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new FundingNeedPageContent();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->bottom_button_text=$request->bottom_button_text;
        $tab->bottom_button_url=$request->bottom_button_url;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FundingNeedPageContent  $fundingneedpagecontent
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('detail','LIKE','%'.$search.'%');
                            $query->orWhere('bottom_button_text','LIKE','%'.$search.'%');
                            $query->orWhere('bottom_button_url','LIKE','%'.$search.'%');
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
                            $query->orWhere('bottom_button_text','LIKE','%'.$search.'%');
                            $query->orWhere('bottom_button_url','LIKE','%'.$search.'%');
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

    
    public function FundingNeedPageContentQuery($request)
    {
        $FundingNeedPageContent_data=FundingNeedPageContent::orderBy('id','DESC')->get();

        return $FundingNeedPageContent_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Detail','Bottom Button Text','Bottom Button URL','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->FundingNeedPageContentQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->detail,$voi->bottom_button_text,$voi->bottom_button_url,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Funding Need Page Content Report',
            'report_title'=>'Funding Need Page Content Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Bottom Button Text</th>
                        
                            <th class='text-center' style='font-size:12px;' >Bottom Button URL</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->FundingNeedPageContentQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->bottom_button_text."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->bottom_button_url."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Funding Need Page Content Report',$html);


    }
    public function show(FundingNeedPageContent $fundingneedpagecontent)
    {
        
        $tab=FundingNeedPageContent::all();return view('admin.pages.fundingneedpagecontent.fundingneedpagecontent_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FundingNeedPageContent  $fundingneedpagecontent
     * @return \Illuminate\Http\Response
     */
    public function edit(FundingNeedPageContent $fundingneedpagecontent,$id=0)
    {
        $tab=FundingNeedPageContent::find($id);      
        return view('admin.pages.fundingneedpagecontent.fundingneedpagecontent_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FundingNeedPageContent  $fundingneedpagecontent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FundingNeedPageContent $fundingneedpagecontent,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'bottom_button_text'=>'required',
                'bottom_button_url'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Funding Need Page Content","Update","Edit / Modify");

        
        $tab=FundingNeedPageContent::find($id);
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->bottom_button_text=$request->bottom_button_text;
        $tab->bottom_button_url=$request->bottom_button_url;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('fundingneedpagecontent')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FundingNeedPageContent  $fundingneedpagecontent
     * @return \Illuminate\Http\Response
     */
    public function destroy(FundingNeedPageContent $fundingneedpagecontent,$id=0)
    {
        $this->SystemAdminLog("Funding Need Page Content","Destroy","Delete");

        $tab=FundingNeedPageContent::find($id);
        $tab->delete();
        return redirect('fundingneedpagecontent')->with('status','Deleted Successfully !');}
}
