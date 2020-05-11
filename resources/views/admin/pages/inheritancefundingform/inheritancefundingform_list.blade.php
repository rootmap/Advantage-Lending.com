
@extends("admin.layout.master")
@section("title","Inheritance Funding Form")
@section("content")
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Inheritance Funding Form</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('inheritancefundingform/create')}}">Create New </a></li>
                  <li class="breadcrumb-item active">Inheritance Funding Form Data</li>
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
                  <h3 class="card-title">Inheritance Funding Form Data</h3>

                    <div class="card-tools">
                      <ul class="pagination pagination-sm float-right">
                        <li class="page-item">
                            <a class="page-link bg-primary" href="{{url('inheritancefundingform/create')}}"> 
                                Add New 
                                <i class="fas fa-plus"></i> 
                            </a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" target="_blank" href="{{url('inheritancefundingform/export/pdf')}}">
                            <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                          </a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" target="_blank" href="{{url('inheritancefundingform/export/excel')}}">
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
                            <th class="text-center">Address</th>
                            <th class="text-center">City</th>
                            <th class="text-center">State Name</th>
                            <th class="text-center">ZIP Code</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">Person Received Inheritance</th>
                            <th class="text-center">Receive Inheritance Date</th>
                            <th class="text-center">Total Amount Inheritance</th>
                            <th class="text-center">Amount You Need Now</th>
                            <th class="text-center">Would You Like To Refer</th>
                            <th class="text-center">Form Status</th>
                            <th class="text-center">Created At</th>
                            <th class="text-center">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if(count($dataRow))
                            @foreach($dataRow as $row)  
                                <tr>
                                    <td class="text-center">{{$row->id}}</td><td class="text-center">{{$row->first_name}}</td><td class="text-center">{{$row->last_name}}</td><td class="text-center">{{$row->address}}</td><td class="text-center">{{$row->city}}</td><td class="text-center">{{$row->state_name}}</td><td class="text-center">{{$row->zip_code}}</td><td class="text-center">{{$row->email}}</td><td class="text-center">{{$row->phone}}</td><td class="text-center">{{$row->person_received_inheritance}}</td><td class="text-center">{{$row->receive_inheritance_date}}</td><td class="text-center">{{$row->total_amount_inheritance}}</td><td class="text-center">{{$row->amount_you_need_now}}</td><td class="text-center">{{$row->would_you_like_to_refer}}</td><td class="text-center">{{$row->form_status}}</td>
                                    <td>{{formatDate($row->created_at)}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('inheritancefundingform/edit/'.$row->id)}}" type="button" class="btn btn-default">
                                                Edit 
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{url('inheritancefundingform/delete/'.$row->id)}}" type="button" class="btn btn-default">
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
                        <th class="text-center">Address</th>
                        <th class="text-center">City</th>
                        <th class="text-center">State Name</th>
                        <th class="text-center">ZIP Code</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Person Received Inheritance</th>
                        <th class="text-center">Receive Inheritance Date</th>
                        <th class="text-center">Total Amount Inheritance</th>
                        <th class="text-center">Amount You Need Now</th>
                        <th class="text-center">Would You Like To Refer</th>
                        <th class="text-center">Form Status</th>
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
        