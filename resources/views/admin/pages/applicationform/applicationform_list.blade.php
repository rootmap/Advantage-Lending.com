
@extends("admin.layout.master")
@section("title","Application Form")
@section("content")
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Application Form</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('applicationform/create')}}">Create New </a></li>
                  <li class="breadcrumb-item active">Application Form Data</li>
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
                  <h3 class="card-title">Application Form Data</h3>

                    <div class="card-tools">
                      <ul class="pagination pagination-sm float-right">
                        <li class="page-item">
                            <a class="page-link bg-primary" href="{{url('applicationform/create')}}"> 
                                Add New 
                                <i class="fas fa-plus"></i> 
                            </a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" target="_blank" href="{{url('applicationform/export/pdf')}}">
                            <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                          </a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" target="_blank" href="{{url('applicationform/export/excel')}}">
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
                            <th class="text-center">Last Name</th>
                            <th class="text-center">How much money do you need</th>
                            <th class="text-center">What was the date of your accident</th>
                            <th class="text-center">State Case Name</th>
                            <th class="text-center">Case Type Name</th>
                            <th class="text-center">How Did You Heard Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">How should we contact you</th>
                            <th class="text-center">Street Address</th>
                            <th class="text-center">State Name</th>
                            <th class="text-center">ZIP Code</th>
                            <th class="text-center">Attorney  First Name</th>
                            <th class="text-center">Attorney  Last Name</th>
                            <th class="text-center">Law Firm Name</th>
                            <th class="text-center">Law Firm Phone</th>
                            <th class="text-center">Case Status</th>
                            <th class="text-center">Application Status</th>
                            <th class="text-center">Created At</th>
                            <th class="text-center">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if(count($dataRow))
                            @foreach($dataRow as $row)  
                                <tr>
                                    <td class="text-center">{{$row->id}}</td><td class="text-center">{{$row->first_name}}</td><td class="text-center">{{$row->last_name}}</td><td class="text-center">{{$row->how_much_money_do_you_need}}</td><td class="text-center">{{$row->what_was_the_date_of_your_accident}}</td><td class="text-center">{{$row->state_case_name}}</td><td class="text-center">{{$row->case_type_name}}</td><td class="text-center">{{$row->how_did_you_heard_name}}</td><td class="text-center">{{$row->email}}</td><td class="text-center">{{$row->phone}}</td><td class="text-center">{{$row->how_should_we_contact_you}}</td><td class="text-center">{{$row->street_address}}</td><td class="text-center">{{$row->state_name}}</td><td class="text-center">{{$row->zip_code}}</td><td class="text-center">{{$row->attorney__first_name}}</td><td class="text-center">{{$row->attorney__last_name}}</td><td class="text-center">{{$row->law_firm_name}}</td><td class="text-center">{{$row->law_firm_phone}}</td><td class="text-center">{{$row->case_status}}</td><td class="text-center">{{$row->application_status}}</td>
                                    <td>{{formatDate($row->created_at)}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('applicationform/edit/'.$row->id)}}" type="button" class="btn btn-default">
                                                Edit 
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{url('applicationform/delete/'.$row->id)}}" type="button" class="btn btn-default">
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
                        <th class="text-center">Last Name</th>
                        <th class="text-center">How much money do you need</th>
                        <th class="text-center">What was the date of your accident</th>
                        <th class="text-center">State Case Name</th>
                        <th class="text-center">Case Type Name</th>
                        <th class="text-center">How Did You Heard Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">How should we contact you</th>
                        <th class="text-center">Street Address</th>
                        <th class="text-center">State Name</th>
                        <th class="text-center">ZIP Code</th>
                        <th class="text-center">Attorney  First Name</th>
                        <th class="text-center">Attorney  Last Name</th>
                        <th class="text-center">Law Firm Name</th>
                        <th class="text-center">Law Firm Phone</th>
                        <th class="text-center">Case Status</th>
                        <th class="text-center">Application Status</th>
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
        