<?php

namespace App\Http\Controllers;

use App\TypesOfFundingPreSettlement;
use App\AdminLog;
use Illuminate\Http\Request;

class TypesOfFundingPreSettlementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Types Of Funding Pre Settlement";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=TypesOfFundingPreSettlement::count();
        if($tabCount==0)
        {
            return redirect(url('typesoffundingpresettlement/create'));
        }else{

            $tab=TypesOfFundingPreSettlement::orderBy('id','DESC')->first();      
        return view('admin.pages.typesoffundingpresettlement.typesoffundingpresettlement_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=TypesOfFundingPreSettlement::count();
        if($tabCount==0)
        {            
        return view('admin.pages.typesoffundingpresettlement.typesoffundingpresettlement_create');
            
        }else{

            $tab=TypesOfFundingPreSettlement::orderBy('id','DESC')->first();      
        return view('admin.pages.typesoffundingpresettlement.typesoffundingpresettlement_edit',['dataRow'=>$tab,'edit'=>true]); 
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
                'icon_image_one'=>'required',
                'icon_one_heading'=>'required',
                'icon_image_two'=>'required',
                'icon_two_heading'=>'required',
                'icon_image_three'=>'required',
                'icon_three_heading'=>'required',
                'button_text'=>'required',
                'button_url'=>'required',
                'background_forecolor'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Types Of Funding Pre Settlement","Save New","Create New");

        

        $filename_typesoffundingpresettlement_2='';
        if ($request->hasFile('icon_image_one')) {
            $img_typesoffundingpresettlement = $request->file('icon_image_one');
            $upload_typesoffundingpresettlement = 'upload/typesoffundingpresettlement';
            $filename_typesoffundingpresettlement_2 = env('APP_NAME').'_'.time() . '.' . $img_typesoffundingpresettlement->getClientOriginalExtension();
            $img_typesoffundingpresettlement->move($upload_typesoffundingpresettlement, $filename_typesoffundingpresettlement_2);
        }

                

        $filename_typesoffundingpresettlement_4='';
        if ($request->hasFile('icon_image_two')) {
            $img_typesoffundingpresettlement = $request->file('icon_image_two');
            $upload_typesoffundingpresettlement = 'upload/typesoffundingpresettlement';
            $filename_typesoffundingpresettlement_4 = env('APP_NAME').'_'.time() . '.' . $img_typesoffundingpresettlement->getClientOriginalExtension();
            $img_typesoffundingpresettlement->move($upload_typesoffundingpresettlement, $filename_typesoffundingpresettlement_4);
        }

                

        $filename_typesoffundingpresettlement_6='';
        if ($request->hasFile('icon_image_three')) {
            $img_typesoffundingpresettlement = $request->file('icon_image_three');
            $upload_typesoffundingpresettlement = 'upload/typesoffundingpresettlement';
            $filename_typesoffundingpresettlement_6 = env('APP_NAME').'_'.time() . '.' . $img_typesoffundingpresettlement->getClientOriginalExtension();
            $img_typesoffundingpresettlement->move($upload_typesoffundingpresettlement, $filename_typesoffundingpresettlement_6);
        }

                
        $tab=new TypesOfFundingPreSettlement();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->icon_image_one=$filename_typesoffundingpresettlement_2;
        $tab->icon_one_heading=$request->icon_one_heading;
        $tab->icon_image_two=$filename_typesoffundingpresettlement_4;
        $tab->icon_two_heading=$request->icon_two_heading;
        $tab->icon_image_three=$filename_typesoffundingpresettlement_6;
        $tab->icon_three_heading=$request->icon_three_heading;
        $tab->button_text=$request->button_text;
        $tab->button_url=$request->button_url;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('typesoffundingpresettlement')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'icon_image_one'=>'required',
                'icon_one_heading'=>'required',
                'icon_image_two'=>'required',
                'icon_two_heading'=>'required',
                'icon_image_three'=>'required',
                'icon_three_heading'=>'required',
                'button_text'=>'required',
                'button_url'=>'required',
                'background_forecolor'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new TypesOfFundingPreSettlement();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->icon_image_one=$filename_typesoffundingpresettlement_2;
        $tab->icon_one_heading=$request->icon_one_heading;
        $tab->icon_image_two=$filename_typesoffundingpresettlement_4;
        $tab->icon_two_heading=$request->icon_two_heading;
        $tab->icon_image_three=$filename_typesoffundingpresettlement_6;
        $tab->icon_three_heading=$request->icon_three_heading;
        $tab->button_text=$request->button_text;
        $tab->button_url=$request->button_url;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypesOfFundingPreSettlement  $typesoffundingpresettlement
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('detail','LIKE','%'.$search.'%');
                            $query->orWhere('icon_image_one','LIKE','%'.$search.'%');
                            $query->orWhere('icon_one_heading','LIKE','%'.$search.'%');
                            $query->orWhere('icon_image_two','LIKE','%'.$search.'%');
                            $query->orWhere('icon_two_heading','LIKE','%'.$search.'%');
                            $query->orWhere('icon_image_three','LIKE','%'.$search.'%');
                            $query->orWhere('icon_three_heading','LIKE','%'.$search.'%');
                            $query->orWhere('button_text','LIKE','%'.$search.'%');
                            $query->orWhere('button_url','LIKE','%'.$search.'%');
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
                            $query->orWhere('icon_image_one','LIKE','%'.$search.'%');
                            $query->orWhere('icon_one_heading','LIKE','%'.$search.'%');
                            $query->orWhere('icon_image_two','LIKE','%'.$search.'%');
                            $query->orWhere('icon_two_heading','LIKE','%'.$search.'%');
                            $query->orWhere('icon_image_three','LIKE','%'.$search.'%');
                            $query->orWhere('icon_three_heading','LIKE','%'.$search.'%');
                            $query->orWhere('button_text','LIKE','%'.$search.'%');
                            $query->orWhere('button_url','LIKE','%'.$search.'%');
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

    
    public function TypesOfFundingPreSettlementQuery($request)
    {
        $TypesOfFundingPreSettlement_data=TypesOfFundingPreSettlement::orderBy('id','DESC')->get();

        return $TypesOfFundingPreSettlement_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Detail','Icon Image One','Icon One Heading','Icon Image Two','Icon Two Heading','Icon Image Three','Icon Three Heading','Button Text','Button URL','Background Forecolor','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->TypesOfFundingPreSettlementQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->detail,$voi->icon_image_one,$voi->icon_one_heading,$voi->icon_image_two,$voi->icon_two_heading,$voi->icon_image_three,$voi->icon_three_heading,$voi->button_text,$voi->button_url,$voi->background_forecolor,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Types Of Funding Pre Settlement Report',
            'report_title'=>'Types Of Funding Pre Settlement Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Icon Image One</th>
                        
                            <th class='text-center' style='font-size:12px;' >Icon One Heading</th>
                        
                            <th class='text-center' style='font-size:12px;' >Icon Image Two</th>
                        
                            <th class='text-center' style='font-size:12px;' >Icon Two Heading</th>
                        
                            <th class='text-center' style='font-size:12px;' >Icon Image Three</th>
                        
                            <th class='text-center' style='font-size:12px;' >Icon Three Heading</th>
                        
                            <th class='text-center' style='font-size:12px;' >Button Text</th>
                        
                            <th class='text-center' style='font-size:12px;' >Button URL</th>
                        
                            <th class='text-center' style='font-size:12px;' >Background Forecolor</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->TypesOfFundingPreSettlementQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->icon_image_one."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->icon_one_heading."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->icon_image_two."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->icon_two_heading."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->icon_image_three."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->icon_three_heading."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->button_text."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->button_url."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->background_forecolor."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Types Of Funding Pre Settlement Report',$html);


    }
    public function show(TypesOfFundingPreSettlement $typesoffundingpresettlement)
    {
        
        $tab=TypesOfFundingPreSettlement::all();return view('admin.pages.typesoffundingpresettlement.typesoffundingpresettlement_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypesOfFundingPreSettlement  $typesoffundingpresettlement
     * @return \Illuminate\Http\Response
     */
    public function edit(TypesOfFundingPreSettlement $typesoffundingpresettlement,$id=0)
    {
        $tab=TypesOfFundingPreSettlement::find($id);      
        return view('admin.pages.typesoffundingpresettlement.typesoffundingpresettlement_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypesOfFundingPreSettlement  $typesoffundingpresettlement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypesOfFundingPreSettlement $typesoffundingpresettlement,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'icon_one_heading'=>'required',
                'icon_two_heading'=>'required',
                'icon_three_heading'=>'required',
                'button_text'=>'required',
                'button_url'=>'required',
                'background_forecolor'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Types Of Funding Pre Settlement","Update","Edit / Modify");

        

        $filename_typesoffundingpresettlement_2=$request->ex_icon_image_one;
        if ($request->hasFile('icon_image_one')) {
            $img_typesoffundingpresettlement = $request->file('icon_image_one');
            $upload_typesoffundingpresettlement = 'upload/typesoffundingpresettlement';
            $filename_typesoffundingpresettlement_2 = env('APP_NAME').'_'.time() . '.' . $img_typesoffundingpresettlement->getClientOriginalExtension();
            $img_typesoffundingpresettlement->move($upload_typesoffundingpresettlement, $filename_typesoffundingpresettlement_2);
        }

                

        $filename_typesoffundingpresettlement_4=$request->ex_icon_image_two;
        if ($request->hasFile('icon_image_two')) {
            $img_typesoffundingpresettlement = $request->file('icon_image_two');
            $upload_typesoffundingpresettlement = 'upload/typesoffundingpresettlement';
            $filename_typesoffundingpresettlement_4 = env('APP_NAME').'_'.time() . '.' . $img_typesoffundingpresettlement->getClientOriginalExtension();
            $img_typesoffundingpresettlement->move($upload_typesoffundingpresettlement, $filename_typesoffundingpresettlement_4);
        }

                

        $filename_typesoffundingpresettlement_6=$request->ex_icon_image_three;
        if ($request->hasFile('icon_image_three')) {
            $img_typesoffundingpresettlement = $request->file('icon_image_three');
            $upload_typesoffundingpresettlement = 'upload/typesoffundingpresettlement';
            $filename_typesoffundingpresettlement_6 = env('APP_NAME').'_'.time() . '.' . $img_typesoffundingpresettlement->getClientOriginalExtension();
            $img_typesoffundingpresettlement->move($upload_typesoffundingpresettlement, $filename_typesoffundingpresettlement_6);
        }

                
        $tab=TypesOfFundingPreSettlement::find($id);
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->icon_image_one=$filename_typesoffundingpresettlement_2;
        $tab->icon_one_heading=$request->icon_one_heading;
        $tab->icon_image_two=$filename_typesoffundingpresettlement_4;
        $tab->icon_two_heading=$request->icon_two_heading;
        $tab->icon_image_three=$filename_typesoffundingpresettlement_6;
        $tab->icon_three_heading=$request->icon_three_heading;
        $tab->button_text=$request->button_text;
        $tab->button_url=$request->button_url;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('typesoffundingpresettlement')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypesOfFundingPreSettlement  $typesoffundingpresettlement
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypesOfFundingPreSettlement $typesoffundingpresettlement,$id=0)
    {
        $this->SystemAdminLog("Types Of Funding Pre Settlement","Destroy","Delete");

        $tab=TypesOfFundingPreSettlement::find($id);
        $tab->delete();
        return redirect('typesoffundingpresettlement')->with('status','Deleted Successfully !');}
}
