<?php

namespace App\Http\Controllers;

use App\AboutWorkAtAdvantageLending;
use App\AdminLog;
use Illuminate\Http\Request;

class AboutWorkAtAdvantageLendingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="About Work At Advantage Lending";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=AboutWorkAtAdvantageLending::count();
        if($tabCount==0)
        {
            return redirect(url('aboutworkatadvantagelending/create'));
        }else{

            $tab=AboutWorkAtAdvantageLending::orderBy('id','DESC')->first();      
        return view('admin.pages.aboutworkatadvantagelending.aboutworkatadvantagelending_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=AboutWorkAtAdvantageLending::count();
        if($tabCount==0)
        {            
        return view('admin.pages.aboutworkatadvantagelending.aboutworkatadvantagelending_create');
            
        }else{

            $tab=AboutWorkAtAdvantageLending::orderBy('id','DESC')->first();      
        return view('admin.pages.aboutworkatadvantagelending.aboutworkatadvantagelending_edit',['dataRow'=>$tab,'edit'=>true]); 
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
                'section_image'=>'required',
                'image_popup_content'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("About Work At Advantage Lending","Save New","Create New");

        

        $filename_aboutworkatadvantagelending_2='';
        if ($request->hasFile('section_image')) {
            $img_aboutworkatadvantagelending = $request->file('section_image');
            $upload_aboutworkatadvantagelending = 'upload/aboutworkatadvantagelending';
            $filename_aboutworkatadvantagelending_2 = env('APP_NAME').'_'.time() . '.' . $img_aboutworkatadvantagelending->getClientOriginalExtension();
            $img_aboutworkatadvantagelending->move($upload_aboutworkatadvantagelending, $filename_aboutworkatadvantagelending_2);
        }

                
        $tab=new AboutWorkAtAdvantageLending();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->section_image=$filename_aboutworkatadvantagelending_2;
        $tab->image_popup_content=$request->image_popup_content;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('aboutworkatadvantagelending')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'section_image'=>'required',
                'image_popup_content'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new AboutWorkAtAdvantageLending();
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->section_image=$filename_aboutworkatadvantagelending_2;
        $tab->image_popup_content=$request->image_popup_content;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutWorkAtAdvantageLending  $aboutworkatadvantagelending
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('detail','LIKE','%'.$search.'%');
                            $query->orWhere('section_image','LIKE','%'.$search.'%');
                            $query->orWhere('image_popup_content','LIKE','%'.$search.'%');
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
                            $query->orWhere('section_image','LIKE','%'.$search.'%');
                            $query->orWhere('image_popup_content','LIKE','%'.$search.'%');
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

    
    public function AboutWorkAtAdvantageLendingQuery($request)
    {
        $AboutWorkAtAdvantageLending_data=AboutWorkAtAdvantageLending::orderBy('id','DESC')->get();

        return $AboutWorkAtAdvantageLending_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Detail','Section Image','Image Popup Content','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->AboutWorkAtAdvantageLendingQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->detail,$voi->section_image,$voi->image_popup_content,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'About Work At Advantage Lending Report',
            'report_title'=>'About Work At Advantage Lending Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Section Image</th>
                        
                            <th class='text-center' style='font-size:12px;' >Image Popup Content</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->AboutWorkAtAdvantageLendingQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->section_image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->image_popup_content."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('About Work At Advantage Lending Report',$html);


    }
    public function show(AboutWorkAtAdvantageLending $aboutworkatadvantagelending)
    {
        
        $tab=AboutWorkAtAdvantageLending::all();return view('admin.pages.aboutworkatadvantagelending.aboutworkatadvantagelending_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutWorkAtAdvantageLending  $aboutworkatadvantagelending
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutWorkAtAdvantageLending $aboutworkatadvantagelending,$id=0)
    {
        $tab=AboutWorkAtAdvantageLending::find($id);      
        return view('admin.pages.aboutworkatadvantagelending.aboutworkatadvantagelending_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutWorkAtAdvantageLending  $aboutworkatadvantagelending
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutWorkAtAdvantageLending $aboutworkatadvantagelending,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'detail'=>'required',
                'image_popup_content'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("About Work At Advantage Lending","Update","Edit / Modify");

        

        $filename_aboutworkatadvantagelending_2=$request->ex_section_image;
        if ($request->hasFile('section_image')) {
            $img_aboutworkatadvantagelending = $request->file('section_image');
            $upload_aboutworkatadvantagelending = 'upload/aboutworkatadvantagelending';
            $filename_aboutworkatadvantagelending_2 = env('APP_NAME').'_'.time() . '.' . $img_aboutworkatadvantagelending->getClientOriginalExtension();
            $img_aboutworkatadvantagelending->move($upload_aboutworkatadvantagelending, $filename_aboutworkatadvantagelending_2);
        }

                
        $tab=AboutWorkAtAdvantageLending::find($id);
        
        $tab->title=$request->title;
        $tab->detail=$request->detail;
        $tab->section_image=$filename_aboutworkatadvantagelending_2;
        $tab->image_popup_content=$request->image_popup_content;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('aboutworkatadvantagelending')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutWorkAtAdvantageLending  $aboutworkatadvantagelending
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutWorkAtAdvantageLending $aboutworkatadvantagelending,$id=0)
    {
        $this->SystemAdminLog("About Work At Advantage Lending","Destroy","Delete");

        $tab=AboutWorkAtAdvantageLending::find($id);
        $tab->delete();
        return redirect('aboutworkatadvantagelending')->with('status','Deleted Successfully !');}
}
