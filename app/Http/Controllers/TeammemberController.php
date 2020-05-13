<?php

namespace App\Http\Controllers;

use App\TeamMember;
use App\AdminLog;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Team Member";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=TeamMember::all();
        return view('admin.pages.teammember.teammember_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


                   
        return view('admin.pages.teammember.teammember_create');
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
                
                'member_name'=>'required',
                'member_designation'=>'required',
                'member_responsible'=>'required',
                'relevant_experience'=>'required',
                'education'=>'required',
                'member_image'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Team Member","Save New","Create New");

        

        $filename_teammember_5='';
        if ($request->hasFile('member_image')) {
            $img_teammember = $request->file('member_image');
            $upload_teammember = 'upload/teammember';
            $filename_teammember_5 = env('APP_NAME').'_'.time() . '.' . $img_teammember->getClientOriginalExtension();
            $img_teammember->move($upload_teammember, $filename_teammember_5);
        }

                
        $tab=new TeamMember();
        
        $tab->member_name=$request->member_name;
        $tab->member_designation=$request->member_designation;
        $tab->member_responsible=$request->member_responsible;
        $tab->relevant_experience=$request->relevant_experience;
        $tab->education=$request->education;
        $tab->member_image=$filename_teammember_5;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('teammember')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'member_name'=>'required',
                'member_designation'=>'required',
                'member_responsible'=>'required',
                'relevant_experience'=>'required',
                'education'=>'required',
                'member_image'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new TeamMember();
        
        $tab->member_name=$request->member_name;
        $tab->member_designation=$request->member_designation;
        $tab->member_responsible=$request->member_responsible;
        $tab->relevant_experience=$request->relevant_experience;
        $tab->education=$request->education;
        $tab->member_image=$filename_teammember_5;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeamMember  $teammember
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('member_name','LIKE','%'.$search.'%');
                            $query->orWhere('member_designation','LIKE','%'.$search.'%');
                            $query->orWhere('member_responsible','LIKE','%'.$search.'%');
                            $query->orWhere('relevant_experience','LIKE','%'.$search.'%');
                            $query->orWhere('education','LIKE','%'.$search.'%');
                            $query->orWhere('member_image','LIKE','%'.$search.'%');
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
                            $query->orWhere('member_name','LIKE','%'.$search.'%');
                            $query->orWhere('member_designation','LIKE','%'.$search.'%');
                            $query->orWhere('member_responsible','LIKE','%'.$search.'%');
                            $query->orWhere('relevant_experience','LIKE','%'.$search.'%');
                            $query->orWhere('education','LIKE','%'.$search.'%');
                            $query->orWhere('member_image','LIKE','%'.$search.'%');
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

    
    public function TeamMemberQuery($request)
    {
        $TeamMember_data=TeamMember::orderBy('id','DESC')->get();

        return $TeamMember_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Member Name','Member Designation','Member Responsible','Relevant Experience','Education','Member Image','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->TeamMemberQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->member_name,$voi->member_designation,$voi->member_responsible,$voi->relevant_experience,$voi->education,$voi->member_image,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Team Member Report',
            'report_title'=>'Team Member Report',
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
                            <th class='text-center' style='font-size:12px;' >Member Name</th>
                        
                            <th class='text-center' style='font-size:12px;' >Member Designation</th>
                        
                            <th class='text-center' style='font-size:12px;' >Member Responsible</th>
                        
                            <th class='text-center' style='font-size:12px;' >Relevant Experience</th>
                        
                            <th class='text-center' style='font-size:12px;' >Education</th>
                        
                            <th class='text-center' style='font-size:12px;' >Member Image</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->TeamMemberQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->member_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->member_designation."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->member_responsible."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->relevant_experience."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->education."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->member_image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Team Member Report',$html);


    }
    public function show(TeamMember $teammember)
    {
        
        $tab=TeamMember::all();return view('admin.pages.teammember.teammember_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeamMember  $teammember
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamMember $teammember,$id=0)
    {
        $tab=TeamMember::find($id);      
        return view('admin.pages.teammember.teammember_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeamMember  $teammember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamMember $teammember,$id=0)
    {
        $this->validate($request,[
                
                'member_name'=>'required',
                'member_designation'=>'required',
                'member_responsible'=>'required',
                'relevant_experience'=>'required',
                'education'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Team Member","Update","Edit / Modify");

        

        $filename_teammember_5=$request->ex_member_image;
        if ($request->hasFile('member_image')) {
            $img_teammember = $request->file('member_image');
            $upload_teammember = 'upload/teammember';
            $filename_teammember_5 = env('APP_NAME').'_'.time() . '.' . $img_teammember->getClientOriginalExtension();
            $img_teammember->move($upload_teammember, $filename_teammember_5);
        }

                
        $tab=TeamMember::find($id);
        
        $tab->member_name=$request->member_name;
        $tab->member_designation=$request->member_designation;
        $tab->member_responsible=$request->member_responsible;
        $tab->relevant_experience=$request->relevant_experience;
        $tab->education=$request->education;
        $tab->member_image=$filename_teammember_5;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('teammember')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeamMember  $teammember
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamMember $teammember,$id=0)
    {
        $this->SystemAdminLog("Team Member","Destroy","Delete");

        $tab=TeamMember::find($id);
        $tab->delete();
        return redirect('teammember')->with('status','Deleted Successfully !');}
}
