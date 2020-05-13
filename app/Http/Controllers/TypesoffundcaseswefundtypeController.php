<?php

namespace App\Http\Controllers;

use App\TypesOfFundCasesWeFundType;
use App\AdminLog;
use Illuminate\Http\Request;

class TypesOfFundCasesWeFundTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Types Of Fund Cases We Fund Type";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=TypesOfFundCasesWeFundType::count();
        if($tabCount==0)
        {
            return redirect(url('typesoffundcaseswefundtype/create'));
        }else{

            $tab=TypesOfFundCasesWeFundType::orderBy('id','DESC')->first();      
        return view('admin.pages.typesoffundcaseswefundtype.typesoffundcaseswefundtype_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=TypesOfFundCasesWeFundType::count();
        if($tabCount==0)
        {            
        return view('admin.pages.typesoffundcaseswefundtype.typesoffundcaseswefundtype_create');
            
        }else{

            $tab=TypesOfFundCasesWeFundType::orderBy('id','DESC')->first();      
        return view('admin.pages.typesoffundcaseswefundtype.typesoffundcaseswefundtype_edit',['dataRow'=>$tab,'edit'=>true]); 
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
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Types Of Fund Cases We Fund Type","Save New","Create New");

        
        $tab=new TypesOfFundCasesWeFundType();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->button_text=$request->button_text;
        $tab->button_url=$request->button_url;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('typesoffundcaseswefundtype')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'button_text'=>'required',
                'button_url'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new TypesOfFundCasesWeFundType();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->button_text=$request->button_text;
        $tab->button_url=$request->button_url;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypesOfFundCasesWeFundType  $typesoffundcaseswefundtype
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

    
    public function TypesOfFundCasesWeFundTypeQuery($request)
    {
        $TypesOfFundCasesWeFundType_data=TypesOfFundCasesWeFundType::orderBy('id','DESC')->get();

        return $TypesOfFundCasesWeFundType_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Detail','Button Text','Button URL','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->TypesOfFundCasesWeFundTypeQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->detail,$voi->button_text,$voi->button_url,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Types Of Fund Cases We Fund Type Report',
            'report_title'=>'Types Of Fund Cases We Fund Type Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->TypesOfFundCasesWeFundTypeQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->button_text."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->button_url."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Types Of Fund Cases We Fund Type Report',$html);


    }
    public function show(TypesOfFundCasesWeFundType $typesoffundcaseswefundtype)
    {
        
        $tab=TypesOfFundCasesWeFundType::all();return view('admin.pages.typesoffundcaseswefundtype.typesoffundcaseswefundtype_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypesOfFundCasesWeFundType  $typesoffundcaseswefundtype
     * @return \Illuminate\Http\Response
     */
    public function edit(TypesOfFundCasesWeFundType $typesoffundcaseswefundtype,$id=0)
    {
        $tab=TypesOfFundCasesWeFundType::find($id);      
        return view('admin.pages.typesoffundcaseswefundtype.typesoffundcaseswefundtype_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypesOfFundCasesWeFundType  $typesoffundcaseswefundtype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypesOfFundCasesWeFundType $typesoffundcaseswefundtype,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'button_text'=>'required',
                'button_url'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Types Of Fund Cases We Fund Type","Update","Edit / Modify");

        
        $tab=TypesOfFundCasesWeFundType::find($id);
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->button_text=$request->button_text;
        $tab->button_url=$request->button_url;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('typesoffundcaseswefundtype')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypesOfFundCasesWeFundType  $typesoffundcaseswefundtype
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypesOfFundCasesWeFundType $typesoffundcaseswefundtype,$id=0)
    {
        $this->SystemAdminLog("Types Of Fund Cases We Fund Type","Destroy","Delete");

        $tab=TypesOfFundCasesWeFundType::find($id);
        $tab->delete();
        return redirect('typesoffundcaseswefundtype')->with('status','Deleted Successfully !');}
}
