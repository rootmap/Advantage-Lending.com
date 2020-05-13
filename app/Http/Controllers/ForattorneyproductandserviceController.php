<?php

namespace App\Http\Controllers;

use App\ForAttorneyProductAndService;
use App\AdminLog;
use Illuminate\Http\Request;

class ForAttorneyProductAndServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="For Attorney Product And Service";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=ForAttorneyProductAndService::all();
        return view('admin.pages.forattorneyproductandservice.forattorneyproductandservice_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


                   
        return view('admin.pages.forattorneyproductandservice.forattorneyproductandservice_create');
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
                
                'logo'=>'required',
                'detail'=>'required',
                'link_text'=>'required',
                'link_url'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("For Attorney Product And Service","Save New","Create New");

        

        $filename_forattorneyproductandservice_0='';
        if ($request->hasFile('logo')) {
            $img_forattorneyproductandservice = $request->file('logo');
            $upload_forattorneyproductandservice = 'upload/forattorneyproductandservice';
            $filename_forattorneyproductandservice_0 = env('APP_NAME').'_'.time() . '.' . $img_forattorneyproductandservice->getClientOriginalExtension();
            $img_forattorneyproductandservice->move($upload_forattorneyproductandservice, $filename_forattorneyproductandservice_0);
        }

                
        $tab=new ForAttorneyProductAndService();
        
        $tab->logo=$filename_forattorneyproductandservice_0;
        $tab->detail=$request->detail;
        $tab->link_text=$request->link_text;
        $tab->link_url=$request->link_url;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('forattorneyproductandservice')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'logo'=>'required',
                'detail'=>'required',
                'link_text'=>'required',
                'link_url'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new ForAttorneyProductAndService();
        
        $tab->logo=$filename_forattorneyproductandservice_0;
        $tab->detail=$request->detail;
        $tab->link_text=$request->link_text;
        $tab->link_url=$request->link_url;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ForAttorneyProductAndService  $forattorneyproductandservice
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('logo','LIKE','%'.$search.'%');
                            $query->orWhere('detail','LIKE','%'.$search.'%');
                            $query->orWhere('link_text','LIKE','%'.$search.'%');
                            $query->orWhere('link_url','LIKE','%'.$search.'%');
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
                            $query->orWhere('logo','LIKE','%'.$search.'%');
                            $query->orWhere('detail','LIKE','%'.$search.'%');
                            $query->orWhere('link_text','LIKE','%'.$search.'%');
                            $query->orWhere('link_url','LIKE','%'.$search.'%');
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

    
    public function ForAttorneyProductAndServiceQuery($request)
    {
        $ForAttorneyProductAndService_data=ForAttorneyProductAndService::orderBy('id','DESC')->get();

        return $ForAttorneyProductAndService_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Logo','Detail','Link Text','Link URL','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->ForAttorneyProductAndServiceQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->logo,$voi->detail,$voi->link_text,$voi->link_url,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'For Attorney Product And Service Report',
            'report_title'=>'For Attorney Product And Service Report',
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
                            <th class='text-center' style='font-size:12px;' >Logo</th>
                        
                            <th class='text-center' style='font-size:12px;' >Detail</th>
                        
                            <th class='text-center' style='font-size:12px;' >Link Text</th>
                        
                            <th class='text-center' style='font-size:12px;' >Link URL</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->ForAttorneyProductAndServiceQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->logo."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->link_text."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->link_url."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('For Attorney Product And Service Report',$html);


    }
    public function show(ForAttorneyProductAndService $forattorneyproductandservice)
    {
        
        $tab=ForAttorneyProductAndService::all();return view('admin.pages.forattorneyproductandservice.forattorneyproductandservice_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ForAttorneyProductAndService  $forattorneyproductandservice
     * @return \Illuminate\Http\Response
     */
    public function edit(ForAttorneyProductAndService $forattorneyproductandservice,$id=0)
    {
        $tab=ForAttorneyProductAndService::find($id);      
        return view('admin.pages.forattorneyproductandservice.forattorneyproductandservice_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ForAttorneyProductAndService  $forattorneyproductandservice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ForAttorneyProductAndService $forattorneyproductandservice,$id=0)
    {
        $this->validate($request,[
                
                'detail'=>'required',
                'link_text'=>'required',
                'link_url'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("For Attorney Product And Service","Update","Edit / Modify");

        

        $filename_forattorneyproductandservice_0=$request->ex_logo;
        if ($request->hasFile('logo')) {
            $img_forattorneyproductandservice = $request->file('logo');
            $upload_forattorneyproductandservice = 'upload/forattorneyproductandservice';
            $filename_forattorneyproductandservice_0 = env('APP_NAME').'_'.time() . '.' . $img_forattorneyproductandservice->getClientOriginalExtension();
            $img_forattorneyproductandservice->move($upload_forattorneyproductandservice, $filename_forattorneyproductandservice_0);
        }

                
        $tab=ForAttorneyProductAndService::find($id);
        
        $tab->logo=$filename_forattorneyproductandservice_0;
        $tab->detail=$request->detail;
        $tab->link_text=$request->link_text;
        $tab->link_url=$request->link_url;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('forattorneyproductandservice')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ForAttorneyProductAndService  $forattorneyproductandservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(ForAttorneyProductAndService $forattorneyproductandservice,$id=0)
    {
        $this->SystemAdminLog("For Attorney Product And Service","Destroy","Delete");

        $tab=ForAttorneyProductAndService::find($id);
        $tab->delete();
        return redirect('forattorneyproductandservice')->with('status','Deleted Successfully !');}
}
