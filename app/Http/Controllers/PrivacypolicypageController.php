<?php

namespace App\Http\Controllers;

use App\PrivacyPolicyPage;
use App\AdminLog;
use Illuminate\Http\Request;

class PrivacyPolicyPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Privacy Policy Page";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=PrivacyPolicyPage::count();
        if($tabCount==0)
        {
            return redirect(url('privacypolicypage/create'));
        }else{

            $tab=PrivacyPolicyPage::orderBy('id','DESC')->first();      
        return view('admin.pages.privacypolicypage.privacypolicypage_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=PrivacyPolicyPage::count();
        if($tabCount==0)
        {            
        return view('admin.pages.privacypolicypage.privacypolicypage_create');
            
        }else{

            $tab=PrivacyPolicyPage::orderBy('id','DESC')->first();      
        return view('admin.pages.privacypolicypage.privacypolicypage_edit',['dataRow'=>$tab,'edit'=>true]); 
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
                'background_image'=>'required',
                'background_forecolor'=>'required',
                'page_content'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Privacy Policy Page","Save New","Create New");

        

        $filename_privacypolicypage_1='';
        if ($request->hasFile('background_image')) {
            $img_privacypolicypage = $request->file('background_image');
            $upload_privacypolicypage = 'upload/privacypolicypage';
            $filename_privacypolicypage_1 = env('APP_NAME').'_'.time() . '.' . $img_privacypolicypage->getClientOriginalExtension();
            $img_privacypolicypage->move($upload_privacypolicypage, $filename_privacypolicypage_1);
        }

                
        $tab=new PrivacyPolicyPage();
        
        $tab->title=$request->title;
        $tab->background_image=$filename_privacypolicypage_1;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->page_content=$request->page_content;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('privacypolicypage')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'background_image'=>'required',
                'background_forecolor'=>'required',
                'page_content'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new PrivacyPolicyPage();
        
        $tab->title=$request->title;
        $tab->background_image=$filename_privacypolicypage_1;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->page_content=$request->page_content;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PrivacyPolicyPage  $privacypolicypage
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('background_image','LIKE','%'.$search.'%');
                            $query->orWhere('background_forecolor','LIKE','%'.$search.'%');
                            $query->orWhere('page_content','LIKE','%'.$search.'%');
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
                            $query->orWhere('background_image','LIKE','%'.$search.'%');
                            $query->orWhere('background_forecolor','LIKE','%'.$search.'%');
                            $query->orWhere('page_content','LIKE','%'.$search.'%');
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

    
    public function PrivacyPolicyPageQuery($request)
    {
        $PrivacyPolicyPage_data=PrivacyPolicyPage::orderBy('id','DESC')->get();

        return $PrivacyPolicyPage_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Background Image','Background Forecolor','Page Content','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->PrivacyPolicyPageQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->background_image,$voi->background_forecolor,$voi->page_content,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Privacy Policy Page Report',
            'report_title'=>'Privacy Policy Page Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Background Image</th>
                        
                            <th class='text-center' style='font-size:12px;' >Background Forecolor</th>
                        
                            <th class='text-center' style='font-size:12px;' >Page Content</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->PrivacyPolicyPageQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->background_image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->background_forecolor."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->page_content."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Privacy Policy Page Report',$html);


    }
    public function show(PrivacyPolicyPage $privacypolicypage)
    {
        
        $tab=PrivacyPolicyPage::all();return view('admin.pages.privacypolicypage.privacypolicypage_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PrivacyPolicyPage  $privacypolicypage
     * @return \Illuminate\Http\Response
     */
    public function edit(PrivacyPolicyPage $privacypolicypage,$id=0)
    {
        $tab=PrivacyPolicyPage::find($id);      
        return view('admin.pages.privacypolicypage.privacypolicypage_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PrivacyPolicyPage  $privacypolicypage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PrivacyPolicyPage $privacypolicypage,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'background_forecolor'=>'required',
                'page_content'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Privacy Policy Page","Update","Edit / Modify");

        

        $filename_privacypolicypage_1=$request->ex_background_image;
        if ($request->hasFile('background_image')) {
            $img_privacypolicypage = $request->file('background_image');
            $upload_privacypolicypage = 'upload/privacypolicypage';
            $filename_privacypolicypage_1 = env('APP_NAME').'_'.time() . '.' . $img_privacypolicypage->getClientOriginalExtension();
            $img_privacypolicypage->move($upload_privacypolicypage, $filename_privacypolicypage_1);
        }

                
        $tab=PrivacyPolicyPage::find($id);
        
        $tab->title=$request->title;
        $tab->background_image=$filename_privacypolicypage_1;
        $tab->background_forecolor=$request->background_forecolor;
        $tab->page_content=$request->page_content;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('privacypolicypage')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PrivacyPolicyPage  $privacypolicypage
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrivacyPolicyPage $privacypolicypage,$id=0)
    {
        $this->SystemAdminLog("Privacy Policy Page","Destroy","Delete");

        $tab=PrivacyPolicyPage::find($id);
        $tab->delete();
        return redirect('privacypolicypage')->with('status','Deleted Successfully !');}
}
