
@extends("admin.layout.master")
@section("title","Structured Settlement Application Form")
@section("content")
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Structured Settlement Application Form</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('structuredsettlementapplicationform/create')}}">Create New </a></li>
                  <li class="breadcrumb-item active">Structured Settlement Application Form Data</li>
                </ol>
              </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @include("admin.include.msg")
                </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        
        <section class="content">
          <div class="row">
            <div class="col-12">
              <!-- /.card -->
              <div class="card">

                <div class="card-header">
                  <h3 class="card-title">Structured Settlement Application Form Data</h3>

                    <div class="card-tools">
                      <ul class="pagination pagination-sm float-right">
                        <li class="page-item">
                            <a class="page-link bg-primary" href="{{url('structuredsettlementapplicationform/create')}}"> 
                                Add New 
                                <i class="fas fa-plus"></i> 
                            </a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" target="_blank" href="{{url('structuredsettlementapplicationform/export/pdf')}}">
                            <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                          </a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" target="_blank" href="{{url('structuredsettlementapplicationform/export/excel')}}">
                            <i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"title="Excel"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                </div>


                
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">First Name</th>
                            <th class="text-center">Last name</th>
                            <th class="text-center">Age Over 18</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Street Address</th>
                            <th class="text-center">State Name</th>
                            <th class="text-center">ZIP CODE</th>
                            <th class="text-center">When did your case settle</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">Total Amount Of The Award</th>
                            <th class="text-center">How Much Receive Each Payment</th>
                            <th class="text-center">How Much Do You Need Now</th>
                            <th class="text-center">Refer Your Application</th>
                            <th class="text-center">Settlement Status</th>
                            <th class="text-center">Created At</th>
                            <th class="text-center">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if(count($dataRow))
                            @foreach($dataRow as $row)  
                                <tr>
                                    <td class="text-center">{{$row->id}}</td><td class="text-center">{{$row->first_name}}</td><td class="text-center">{{$row->last_name}}</td><td class="text-center">{{$row->age_over_18}}</td><td class="text-center">{{$row->address}}</td><td class="text-center">{{$row->street_address}}</td><td class="text-center">{{$row->state_name}}</td><td class="text-center">{{$row->zip_code}}</td><td class="text-center">{{$row->when_did_your_case_settle}}</td><td class="text-center">{{$row->email}}</td><td class="text-center">{{$row->phone}}</td><td class="text-center">{{$row->total_amount_of_the_award}}</td><td class="text-center">{{$row->how_much_receive_each_payment}}</td><td class="text-center">{{$row->how_much_do_you_need_now}}</td><td class="text-center">{{$row->refer_your_application}}</td><td class="text-center">{{$row->settlement_status}}</td>
                                    <td>{{formatDate($row->created_at)}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('structuredsettlementapplicationform/edit/'.$row->id)}}" type="button" class="btn btn-default">
                                                Edit 
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{url('structuredsettlementapplicationform/delete/'.$row->id)}}" type="button" class="btn btn-default">
                                                Delete 
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </td>
                                
                                </tr>
                            @endforeach
                        @endif
                                        
                    </tbody>
                    <tfoot>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">First Name</th>
                        <th class="text-center">Last name</th>
                        <th class="text-center">Age Over 18</th>
                        <th class="text-center">Address</th>
                        <th class="text-center">Street Address</th>
                        <th class="text-center">State Name</th>
                        <th class="text-center">ZIP CODE</th>
                        <th class="text-center">When did your case settle</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Total Amount Of The Award</th>
                        <th class="text-center">How Much Receive Each Payment</th>
                        <th class="text-center">How Much Do You Need Now</th>
                        <th class="text-center">Refer Your Application</th>
                        <th class="text-center">Settlement Status</th>
                        <th class="text-center">Created At</th>
                        <th class="text-center">Actions</th>

                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
@endsection
@section("css")
    @include("admin.include.lib.datatable.css")
@endsection

@section("js")
    @include("admin.include.lib.datatable.js")
@endsection
        