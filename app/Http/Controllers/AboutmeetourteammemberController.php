<?php

namespace App\Http\Controllers;

use App\AboutMeetOurTeamMember;
use App\AdminLog;
use Illuminate\Http\Request;

class AboutMeetOurTeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="About Meet Our Team Member";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=AboutMeetOurTeamMember::all();
        return view('admin.pages.aboutmeetourteammember.aboutmeetourteammember_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


                   
        return view('admin.pages.aboutmeetourteammember.aboutmeetourteammember_create');
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
                'team_image'=>'required',
                'image_with_border'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("About Meet Our Team Member","Save New","Create New");

        

        $filename_aboutmeetourteammember_2='';
        if ($request->hasFile('team_image')) {
            $img_aboutmeetourteammember = $request->file('team_image');
            $upload_aboutmeetourteammember = 'upload/aboutmeetourteammember';
            $filename_aboutmeetourteammember_2 = env('APP_NAME').'_'.time() . '.' . $img_aboutmeetourteammember->getClientOriginalExtension();
            $img_aboutmeetourteammember->move($upload_aboutmeetourteammember, $filename_aboutmeetourteammember_2);
        }

                
        $tab=new AboutMeetOurTeamMember();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->team_image=$filename_aboutmeetourteammember_2;
        $tab->image_with_border=$request->image_with_border;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('aboutmeetourteammember')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'team_image'=>'required',
                'image_with_border'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new AboutMeetOurTeamMember();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->team_image=$filename_aboutmeetourteammember_2;
        $tab->image_with_border=$request->image_with_border;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutMeetOurTeamMember  $aboutmeetourteammember
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('detail','LIKE','%'.$search.'%');
                            $query->orWhere('team_image','LIKE','%'.$search.'%');
                            $query->orWhere('image_with_border','LIKE','%'.$search.'%');
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
                            $query->orWhere('team_image','LIKE','%'.$search.'%');
                            $query->orWhere('image_with_border','LIKE','%'.$search.'%');
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

    
    public function AboutMeetOurTeamMemberQuery($request)
    {
        $AboutMeetOurTeamMember_data=AboutMeetOurTeamMember::orderBy('id','DESC')->get();

        return $AboutMeetOurTeamMember_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Detail','Team Image','Image With Border','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->AboutMeetOurTeamMemberQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->detail,$voi->team_image,$voi->image_with_border,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'About Meet Our Team Member Report',
            'report_title'=>'About Meet Our Team Member Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Team Image</th>
                        
                            <th class='text-center' style='font-size:12px;' >Image With Border</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->AboutMeetOurTeamMemberQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->team_image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->image_with_border."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('About Meet Our Team Member Report',$html);


    }
    public function show(AboutMeetOurTeamMember $aboutmeetourteammember)
    {
        
        $tab=AboutMeetOurTeamMember::all();return view('admin.pages.aboutmeetourteammember.aboutmeetourteammember_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutMeetOurTeamMember  $aboutmeetourteammember
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutMeetOurTeamMember $aboutmeetourteammember,$id=0)
    {
        $tab=AboutMeetOurTeamMember::find($id);      
        return view('admin.pages.aboutmeetourteammember.aboutmeetourteammember_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutMeetOurTeamMember  $aboutmeetourteammember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutMeetOurTeamMember $aboutmeetourteammember,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'image_with_border'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("About Meet Our Team Member","Update","Edit / Modify");

        

        $filename_aboutmeetourteammember_2=$request->ex_team_image;
        if ($request->hasFile('team_image')) {
            $img_aboutmeetourteammember = $request->file('team_image');
            $upload_aboutmeetourteammember = 'upload/aboutmeetourteammember';
            $filename_aboutmeetourteammember_2 = env('APP_NAME').'_'.time() . '.' . $img_aboutmeetourteammember->getClientOriginalExtension();
            $img_aboutmeetourteammember->move($upload_aboutmeetourteammember, $filename_aboutmeetourteammember_2);
        }

                
        $tab=AboutMeetOurTeamMember::find($id);
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->team_image=$filename_aboutmeetourteammember_2;
        $tab->image_with_border=$request->image_with_border;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('aboutmeetourteammember')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutMeetOurTeamMember  $aboutmeetourteammember
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutMeetOurTeamMember $aboutmeetourteammember,$id=0)
    {
        $this->SystemAdminLog("About Meet Our Team Member","Destroy","Delete");

        $tab=AboutMeetOurTeamMember::find($id);
        $tab->delete();
        return redirect('aboutmeetourteammember')->with('status','Deleted Successfully !');}
}
