<?php

namespace App\Http\Controllers;

use App\AboutMeetOurTeam;
use App\AdminLog;
use Illuminate\Http\Request;

class AboutMeetOurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="About Meet Our Team";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=AboutMeetOurTeam::count();
        if($tabCount==0)
        {
            return redirect(url('aboutmeetourteam/create'));
        }else{

            $tab=AboutMeetOurTeam::orderBy('id','DESC')->first();      
        return view('admin.pages.aboutmeetourteam.aboutmeetourteam_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=AboutMeetOurTeam::count();
        if($tabCount==0)
        {            
        return view('admin.pages.aboutmeetourteam.aboutmeetourteam_create');
            
        }else{

            $tab=AboutMeetOurTeam::orderBy('id','DESC')->first();      
        return view('admin.pages.aboutmeetourteam.aboutmeetourteam_edit',['dataRow'=>$tab,'edit'=>true]); 
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
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("About Meet Our Team","Save New","Create New");

        
        $tab=new AboutMeetOurTeam();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('aboutmeetourteam')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new AboutMeetOurTeam();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutMeetOurTeam  $aboutmeetourteam
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('detail','LIKE','%'.$search.'%');
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

    
    public function AboutMeetOurTeamQuery($request)
    {
        $AboutMeetOurTeam_data=AboutMeetOurTeam::orderBy('id','DESC')->get();

        return $AboutMeetOurTeam_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Detail','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->AboutMeetOurTeamQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->detail,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'About Meet Our Team Report',
            'report_title'=>'About Meet Our Team Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->AboutMeetOurTeamQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('About Meet Our Team Report',$html);


    }
    public function show(AboutMeetOurTeam $aboutmeetourteam)
    {
        
        $tab=AboutMeetOurTeam::all();return view('admin.pages.aboutmeetourteam.aboutmeetourteam_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutMeetOurTeam  $aboutmeetourteam
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutMeetOurTeam $aboutmeetourteam,$id=0)
    {
        $tab=AboutMeetOurTeam::find($id);      
        return view('admin.pages.aboutmeetourteam.aboutmeetourteam_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutMeetOurTeam  $aboutmeetourteam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutMeetOurTeam $aboutmeetourteam,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("About Meet Our Team","Update","Edit / Modify");

        
        $tab=AboutMeetOurTeam::find($id);
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('aboutmeetourteam')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutMeetOurTeam  $aboutmeetourteam
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutMeetOurTeam $aboutmeetourteam,$id=0)
    {
        $this->SystemAdminLog("About Meet Our Team","Destroy","Delete");

        $tab=AboutMeetOurTeam::find($id);
        $tab->delete();
        return redirect('aboutmeetourteam')->with('status','Deleted Successfully !');}
}
