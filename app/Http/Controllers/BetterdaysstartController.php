<?php

namespace App\Http\Controllers;

use App\BetterDaysStart;
use App\AdminLog;
use Illuminate\Http\Request;

class BetterDaysStartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Better Days Start";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=BetterDaysStart::count();
        if($tabCount==0)
        {
            return redirect(url('betterdaysstart/create'));
        }else{

            $tab=BetterDaysStart::orderBy('id','DESC')->first();      
        return view('admin.pages.betterdaysstart.betterdaysstart_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=BetterDaysStart::count();
        if($tabCount==0)
        {            
        return view('admin.pages.betterdaysstart.betterdaysstart_create');
            
        }else{

            $tab=BetterDaysStart::orderBy('id','DESC')->first();      
        return view('admin.pages.betterdaysstart.betterdaysstart_edit',['dataRow'=>$tab,'edit'=>true]); 
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
                
                'content_title'=>'required',
                'content_detail'=>'required',
                'content_image'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Better Days Start","Save New","Create New");

        

        $filename_betterdaysstart_2='';
        if ($request->hasFile('content_image')) {
            $img_betterdaysstart = $request->file('content_image');
            $upload_betterdaysstart = 'upload/betterdaysstart';
            $filename_betterdaysstart_2 = env('APP_NAME').'_'.time() . '.' . $img_betterdaysstart->getClientOriginalExtension();
            $img_betterdaysstart->move($upload_betterdaysstart, $filename_betterdaysstart_2);
        }

                
        $tab=new BetterDaysStart();
        
        $tab->content_title=$request->content_title;
        $tab->content_detail=$request->content_detail;
        $tab->content_image=$filename_betterdaysstart_2;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('betterdaysstart')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'content_title'=>'required',
                'content_detail'=>'required',
                'content_image'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new BetterDaysStart();
        
        $tab->content_title=$request->content_title;
        $tab->content_detail=$request->content_detail;
        $tab->content_image=$filename_betterdaysstart_2;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BetterDaysStart  $betterdaysstart
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('content_title','LIKE','%'.$search.'%');
                            $query->orWhere('content_detail','LIKE','%'.$search.'%');
                            $query->orWhere('content_image','LIKE','%'.$search.'%');
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
                            $query->orWhere('content_title','LIKE','%'.$search.'%');
                            $query->orWhere('content_detail','LIKE','%'.$search.'%');
                            $query->orWhere('content_image','LIKE','%'.$search.'%');
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

    
    public function BetterDaysStartQuery($request)
    {
        $BetterDaysStart_data=BetterDaysStart::orderBy('id','DESC')->get();

        return $BetterDaysStart_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Content Title','Content Detail','Content Image','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->BetterDaysStartQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->content_title,$voi->content_detail,$voi->content_image,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Better Days Start Report',
            'report_title'=>'Better Days Start Report',
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
                            <th class='text-center' style='font-size:12px;' >Content Title</th>
                        
                            <th class='text-center' style='font-size:12px;' >Content Detail</th>
                        
                            <th class='text-center' style='font-size:12px;' >Content Image</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->BetterDaysStartQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->content_title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->content_detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->content_image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Better Days Start Report',$html);


    }
    public function show(BetterDaysStart $betterdaysstart)
    {
        
        $tab=BetterDaysStart::all();return view('admin.pages.betterdaysstart.betterdaysstart_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BetterDaysStart  $betterdaysstart
     * @return \Illuminate\Http\Response
     */
    public function edit(BetterDaysStart $betterdaysstart,$id=0)
    {
        $tab=BetterDaysStart::find($id);      
        return view('admin.pages.betterdaysstart.betterdaysstart_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BetterDaysStart  $betterdaysstart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BetterDaysStart $betterdaysstart,$id=0)
    {
        $this->validate($request,[
                
                'content_title'=>'required',
                'content_detail'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Better Days Start","Update","Edit / Modify");

        

        $filename_betterdaysstart_2=$request->ex_content_image;
        if ($request->hasFile('content_image')) {
            $img_betterdaysstart = $request->file('content_image');
            $upload_betterdaysstart = 'upload/betterdaysstart';
            $filename_betterdaysstart_2 = env('APP_NAME').'_'.time() . '.' . $img_betterdaysstart->getClientOriginalExtension();
            $img_betterdaysstart->move($upload_betterdaysstart, $filename_betterdaysstart_2);
        }

                
        $tab=BetterDaysStart::find($id);
        
        $tab->content_title=$request->content_title;
        $tab->content_detail=$request->content_detail;
        $tab->content_image=$filename_betterdaysstart_2;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('betterdaysstart')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BetterDaysStart  $betterdaysstart
     * @return \Illuminate\Http\Response
     */
    public function destroy(BetterDaysStart $betterdaysstart,$id=0)
    {
        $this->SystemAdminLog("Better Days Start","Destroy","Delete");

        $tab=BetterDaysStart::find($id);
        $tab->delete();
        return redirect('betterdaysstart')->with('status','Deleted Successfully !');}
}
