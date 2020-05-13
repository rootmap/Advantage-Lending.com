<?php

namespace App\Http\Controllers;

use App\HowItWorkSecuringTheMoney;
use App\AdminLog;
use Illuminate\Http\Request;

class HowItWorkSecuringTheMoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="How It Work Securing The Money";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=HowItWorkSecuringTheMoney::count();
        if($tabCount==0)
        {
            return redirect(url('howitworksecuringthemoney/create'));
        }else{

            $tab=HowItWorkSecuringTheMoney::orderBy('id','DESC')->first();      
        return view('admin.pages.howitworksecuringthemoney.howitworksecuringthemoney_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=HowItWorkSecuringTheMoney::count();
        if($tabCount==0)
        {            
        return view('admin.pages.howitworksecuringthemoney.howitworksecuringthemoney_create');
            
        }else{

            $tab=HowItWorkSecuringTheMoney::orderBy('id','DESC')->first();      
        return view('admin.pages.howitworksecuringthemoney.howitworksecuringthemoney_edit',['dataRow'=>$tab,'edit'=>true]); 
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
                'content_image_one'=>'required',
                'content_image_two'=>'required',
                'background_forecolor'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("How It Work Securing The Money","Save New","Create New");

        

        $filename_howitworksecuringthemoney_2='';
        if ($request->hasFile('content_image_one')) {
            $img_howitworksecuringthemoney = $request->file('content_image_one');
            $upload_howitworksecuringthemoney = 'upload/howitworksecuringthemoney';
            $filename_howitworksecuringthemoney_2 = env('APP_NAME').'_'.time() . '.' . $img_howitworksecuringthemoney->getClientOriginalExtension();
            $img_howitworksecuringthemoney->move($upload_howitworksecuringthemoney, $filename_howitworksecuringthemoney_2);
        }

                

        $filename_howitworksecuringthemoney_3='';
        if ($request->hasFile('content_image_two')) {
            $img_howitworksecuringthemoney = $request->file('content_image_two');
            $upload_howitworksecuringthemoney = 'upload/howitworksecuringthemoney';
            $filename_howitworksecuringthemoney_3 = env('APP_NAME').'_'.time() . '.' . $img_howitworksecuringthemoney->getClientOriginalExtension();
            $img_howitworksecuringthemoney->move($upload_howitworksecuringthemoney, $filename_howitworksecuringthemoney_3);
        }

                
        $tab=new HowItWorkSecuringTheMoney();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->content_image_one=$filename_howitworksecuringthemoney_2;
        $tab->content_image_two=$filename_howitworksecuringthemoney_3;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('howitworksecuringthemoney')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'content_image_one'=>'required',
                'content_image_two'=>'required',
                'background_forecolor'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new HowItWorkSecuringTheMoney();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->content_image_one=$filename_howitworksecuringthemoney_2;
        $tab->content_image_two=$filename_howitworksecuringthemoney_3;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HowItWorkSecuringTheMoney  $howitworksecuringthemoney
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('detail','LIKE','%'.$search.'%');
                            $query->orWhere('content_image_one','LIKE','%'.$search.'%');
                            $query->orWhere('content_image_two','LIKE','%'.$search.'%');
                            $query->orWhere('background_forecolor','LIKE','%'.$search.'%');
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
                            $query->orWhere('content_image_one','LIKE','%'.$search.'%');
                            $query->orWhere('content_image_two','LIKE','%'.$search.'%');
                            $query->orWhere('background_forecolor','LIKE','%'.$search.'%');
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

    
    public function HowItWorkSecuringTheMoneyQuery($request)
    {
        $HowItWorkSecuringTheMoney_data=HowItWorkSecuringTheMoney::orderBy('id','DESC')->get();

        return $HowItWorkSecuringTheMoney_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Detail','Content Image One','Content Image Two','Background Forecolor','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->HowItWorkSecuringTheMoneyQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->detail,$voi->content_image_one,$voi->content_image_two,$voi->background_forecolor,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'How It Work Securing The Money Report',
            'report_title'=>'How It Work Securing The Money Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Content Image One</th>
                        
                            <th class='text-center' style='font-size:12px;' >Content Image Two</th>
                        
                            <th class='text-center' style='font-size:12px;' >Background Forecolor</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->HowItWorkSecuringTheMoneyQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->content_image_one."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->content_image_two."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->background_forecolor."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('How It Work Securing The Money Report',$html);


    }
    public function show(HowItWorkSecuringTheMoney $howitworksecuringthemoney)
    {
        
        $tab=HowItWorkSecuringTheMoney::all();return view('admin.pages.howitworksecuringthemoney.howitworksecuringthemoney_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HowItWorkSecuringTheMoney  $howitworksecuringthemoney
     * @return \Illuminate\Http\Response
     */
    public function edit(HowItWorkSecuringTheMoney $howitworksecuringthemoney,$id=0)
    {
        $tab=HowItWorkSecuringTheMoney::find($id);      
        return view('admin.pages.howitworksecuringthemoney.howitworksecuringthemoney_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HowItWorkSecuringTheMoney  $howitworksecuringthemoney
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HowItWorkSecuringTheMoney $howitworksecuringthemoney,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'background_forecolor'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("How It Work Securing The Money","Update","Edit / Modify");

        

        $filename_howitworksecuringthemoney_2=$request->ex_content_image_one;
        if ($request->hasFile('content_image_one')) {
            $img_howitworksecuringthemoney = $request->file('content_image_one');
            $upload_howitworksecuringthemoney = 'upload/howitworksecuringthemoney';
            $filename_howitworksecuringthemoney_2 = env('APP_NAME').'_'.time() . '.' . $img_howitworksecuringthemoney->getClientOriginalExtension();
            $img_howitworksecuringthemoney->move($upload_howitworksecuringthemoney, $filename_howitworksecuringthemoney_2);
        }

                

        $filename_howitworksecuringthemoney_3=$request->ex_content_image_two;
        if ($request->hasFile('content_image_two')) {
            $img_howitworksecuringthemoney = $request->file('content_image_two');
            $upload_howitworksecuringthemoney = 'upload/howitworksecuringthemoney';
            $filename_howitworksecuringthemoney_3 = env('APP_NAME').'_'.time() . '.' . $img_howitworksecuringthemoney->getClientOriginalExtension();
            $img_howitworksecuringthemoney->move($upload_howitworksecuringthemoney, $filename_howitworksecuringthemoney_3);
        }

                
        $tab=HowItWorkSecuringTheMoney::find($id);
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->content_image_one=$filename_howitworksecuringthemoney_2;
        $tab->content_image_two=$filename_howitworksecuringthemoney_3;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('howitworksecuringthemoney')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HowItWorkSecuringTheMoney  $howitworksecuringthemoney
     * @return \Illuminate\Http\Response
     */
    public function destroy(HowItWorkSecuringTheMoney $howitworksecuringthemoney,$id=0)
    {
        $this->SystemAdminLog("How It Work Securing The Money","Destroy","Delete");

        $tab=HowItWorkSecuringTheMoney::find($id);
        $tab->delete();
        return redirect('howitworksecuringthemoney')->with('status','Deleted Successfully !');}
}
