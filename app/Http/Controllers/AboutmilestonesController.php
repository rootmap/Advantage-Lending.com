<?php

namespace App\Http\Controllers;

use App\AboutMilestones;
use App\AdminLog;
use Illuminate\Http\Request;

class AboutMilestonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="About Milestones";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=AboutMilestones::count();
        if($tabCount==0)
        {
            return redirect(url('aboutmilestones/create'));
        }else{

            $tab=AboutMilestones::orderBy('id','DESC')->first();      
        return view('admin.pages.aboutmilestones.aboutmilestones_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=AboutMilestones::count();
        if($tabCount==0)
        {            
        return view('admin.pages.aboutmilestones.aboutmilestones_create');
            
        }else{

            $tab=AboutMilestones::orderBy('id','DESC')->first();      
        return view('admin.pages.aboutmilestones.aboutmilestones_edit',['dataRow'=>$tab,'edit'=>true]); 
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
                'image_one'=>'required',
                'image_two'=>'required',
                'image_three'=>'required',
                'image_four'=>'required',
                'image_five'=>'required',
                'image_six'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("About Milestones","Save New","Create New");

        

        $filename_aboutmilestones_2='';
        if ($request->hasFile('image_one')) {
            $img_aboutmilestones = $request->file('image_one');
            $upload_aboutmilestones = 'upload/aboutmilestones';
            $filename_aboutmilestones_2 = env('APP_NAME').'_'.time() . '.' . $img_aboutmilestones->getClientOriginalExtension();
            $img_aboutmilestones->move($upload_aboutmilestones, $filename_aboutmilestones_2);
        }

                

        $filename_aboutmilestones_3='';
        if ($request->hasFile('image_two')) {
            $img_aboutmilestones = $request->file('image_two');
            $upload_aboutmilestones = 'upload/aboutmilestones';
            $filename_aboutmilestones_3 = env('APP_NAME').'_'.time() . '.' . $img_aboutmilestones->getClientOriginalExtension();
            $img_aboutmilestones->move($upload_aboutmilestones, $filename_aboutmilestones_3);
        }

                

        $filename_aboutmilestones_4='';
        if ($request->hasFile('image_three')) {
            $img_aboutmilestones = $request->file('image_three');
            $upload_aboutmilestones = 'upload/aboutmilestones';
            $filename_aboutmilestones_4 = env('APP_NAME').'_'.time() . '.' . $img_aboutmilestones->getClientOriginalExtension();
            $img_aboutmilestones->move($upload_aboutmilestones, $filename_aboutmilestones_4);
        }

                

        $filename_aboutmilestones_5='';
        if ($request->hasFile('image_four')) {
            $img_aboutmilestones = $request->file('image_four');
            $upload_aboutmilestones = 'upload/aboutmilestones';
            $filename_aboutmilestones_5 = env('APP_NAME').'_'.time() . '.' . $img_aboutmilestones->getClientOriginalExtension();
            $img_aboutmilestones->move($upload_aboutmilestones, $filename_aboutmilestones_5);
        }

                

        $filename_aboutmilestones_6='';
        if ($request->hasFile('image_five')) {
            $img_aboutmilestones = $request->file('image_five');
            $upload_aboutmilestones = 'upload/aboutmilestones';
            $filename_aboutmilestones_6 = env('APP_NAME').'_'.time() . '.' . $img_aboutmilestones->getClientOriginalExtension();
            $img_aboutmilestones->move($upload_aboutmilestones, $filename_aboutmilestones_6);
        }

                

        $filename_aboutmilestones_7='';
        if ($request->hasFile('image_six')) {
            $img_aboutmilestones = $request->file('image_six');
            $upload_aboutmilestones = 'upload/aboutmilestones';
            $filename_aboutmilestones_7 = env('APP_NAME').'_'.time() . '.' . $img_aboutmilestones->getClientOriginalExtension();
            $img_aboutmilestones->move($upload_aboutmilestones, $filename_aboutmilestones_7);
        }

                
        $tab=new AboutMilestones();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->image_one=$filename_aboutmilestones_2;
        $tab->image_two=$filename_aboutmilestones_3;
        $tab->image_three=$filename_aboutmilestones_4;
        $tab->image_four=$filename_aboutmilestones_5;
        $tab->image_five=$filename_aboutmilestones_6;
        $tab->image_six=$filename_aboutmilestones_7;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('aboutmilestones')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'image_one'=>'required',
                'image_two'=>'required',
                'image_three'=>'required',
                'image_four'=>'required',
                'image_five'=>'required',
                'image_six'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new AboutMilestones();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->image_one=$filename_aboutmilestones_2;
        $tab->image_two=$filename_aboutmilestones_3;
        $tab->image_three=$filename_aboutmilestones_4;
        $tab->image_four=$filename_aboutmilestones_5;
        $tab->image_five=$filename_aboutmilestones_6;
        $tab->image_six=$filename_aboutmilestones_7;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutMilestones  $aboutmilestones
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('detail','LIKE','%'.$search.'%');
                            $query->orWhere('image_one','LIKE','%'.$search.'%');
                            $query->orWhere('image_two','LIKE','%'.$search.'%');
                            $query->orWhere('image_three','LIKE','%'.$search.'%');
                            $query->orWhere('image_four','LIKE','%'.$search.'%');
                            $query->orWhere('image_five','LIKE','%'.$search.'%');
                            $query->orWhere('image_six','LIKE','%'.$search.'%');
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
                            $query->orWhere('image_one','LIKE','%'.$search.'%');
                            $query->orWhere('image_two','LIKE','%'.$search.'%');
                            $query->orWhere('image_three','LIKE','%'.$search.'%');
                            $query->orWhere('image_four','LIKE','%'.$search.'%');
                            $query->orWhere('image_five','LIKE','%'.$search.'%');
                            $query->orWhere('image_six','LIKE','%'.$search.'%');
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

    
    public function AboutMilestonesQuery($request)
    {
        $AboutMilestones_data=AboutMilestones::orderBy('id','DESC')->get();

        return $AboutMilestones_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Detail','Image One','Image Two','Image Three','Image Four','Image Five','Image Six','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->AboutMilestonesQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->detail,$voi->image_one,$voi->image_two,$voi->image_three,$voi->image_four,$voi->image_five,$voi->image_six,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'About Milestones Report',
            'report_title'=>'About Milestones Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Image One</th>
                        
                            <th class='text-center' style='font-size:12px;' >Image Two</th>
                        
                            <th class='text-center' style='font-size:12px;' >Image Three</th>
                        
                            <th class='text-center' style='font-size:12px;' >Image Four</th>
                        
                            <th class='text-center' style='font-size:12px;' >Image Five</th>
                        
                            <th class='text-center' style='font-size:12px;' >Image Six</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->AboutMilestonesQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->image_one."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->image_two."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->image_three."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->image_four."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->image_five."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->image_six."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('About Milestones Report',$html);


    }
    public function show(AboutMilestones $aboutmilestones)
    {
        
        $tab=AboutMilestones::all();return view('admin.pages.aboutmilestones.aboutmilestones_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutMilestones  $aboutmilestones
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutMilestones $aboutmilestones,$id=0)
    {
        $tab=AboutMilestones::find($id);      
        return view('admin.pages.aboutmilestones.aboutmilestones_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutMilestones  $aboutmilestones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutMilestones $aboutmilestones,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("About Milestones","Update","Edit / Modify");

        

        $filename_aboutmilestones_2=$request->ex_image_one;
        if ($request->hasFile('image_one')) {
            $img_aboutmilestones = $request->file('image_one');
            $upload_aboutmilestones = 'upload/aboutmilestones';
            $filename_aboutmilestones_2 = env('APP_NAME').'_'.time() . '.' . $img_aboutmilestones->getClientOriginalExtension();
            $img_aboutmilestones->move($upload_aboutmilestones, $filename_aboutmilestones_2);
        }

                

        $filename_aboutmilestones_3=$request->ex_image_two;
        if ($request->hasFile('image_two')) {
            $img_aboutmilestones = $request->file('image_two');
            $upload_aboutmilestones = 'upload/aboutmilestones';
            $filename_aboutmilestones_3 = env('APP_NAME').'_'.time() . '.' . $img_aboutmilestones->getClientOriginalExtension();
            $img_aboutmilestones->move($upload_aboutmilestones, $filename_aboutmilestones_3);
        }

                

        $filename_aboutmilestones_4=$request->ex_image_three;
        if ($request->hasFile('image_three')) {
            $img_aboutmilestones = $request->file('image_three');
            $upload_aboutmilestones = 'upload/aboutmilestones';
            $filename_aboutmilestones_4 = env('APP_NAME').'_'.time() . '.' . $img_aboutmilestones->getClientOriginalExtension();
            $img_aboutmilestones->move($upload_aboutmilestones, $filename_aboutmilestones_4);
        }

                

        $filename_aboutmilestones_5=$request->ex_image_four;
        if ($request->hasFile('image_four')) {
            $img_aboutmilestones = $request->file('image_four');
            $upload_aboutmilestones = 'upload/aboutmilestones';
            $filename_aboutmilestones_5 = env('APP_NAME').'_'.time() . '.' . $img_aboutmilestones->getClientOriginalExtension();
            $img_aboutmilestones->move($upload_aboutmilestones, $filename_aboutmilestones_5);
        }

                

        $filename_aboutmilestones_6=$request->ex_image_five;
        if ($request->hasFile('image_five')) {
            $img_aboutmilestones = $request->file('image_five');
            $upload_aboutmilestones = 'upload/aboutmilestones';
            $filename_aboutmilestones_6 = env('APP_NAME').'_'.time() . '.' . $img_aboutmilestones->getClientOriginalExtension();
            $img_aboutmilestones->move($upload_aboutmilestones, $filename_aboutmilestones_6);
        }

                

        $filename_aboutmilestones_7=$request->ex_image_six;
        if ($request->hasFile('image_six')) {
            $img_aboutmilestones = $request->file('image_six');
            $upload_aboutmilestones = 'upload/aboutmilestones';
            $filename_aboutmilestones_7 = env('APP_NAME').'_'.time() . '.' . $img_aboutmilestones->getClientOriginalExtension();
            $img_aboutmilestones->move($upload_aboutmilestones, $filename_aboutmilestones_7);
        }

                
        $tab=AboutMilestones::find($id);
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->image_one=$filename_aboutmilestones_2;
        $tab->image_two=$filename_aboutmilestones_3;
        $tab->image_three=$filename_aboutmilestones_4;
        $tab->image_four=$filename_aboutmilestones_5;
        $tab->image_five=$filename_aboutmilestones_6;
        $tab->image_six=$filename_aboutmilestones_7;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('aboutmilestones')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutMilestones  $aboutmilestones
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutMilestones $aboutmilestones,$id=0)
    {
        $this->SystemAdminLog("About Milestones","Destroy","Delete");

        $tab=AboutMilestones::find($id);
        $tab->delete();
        return redirect('aboutmilestones')->with('status','Deleted Successfully !');}
}
