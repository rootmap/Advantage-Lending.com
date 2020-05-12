
@extends("admin.layout.master")
@section("title","How We Help")
@section("content")
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>How We Help</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('howwehelp/create')}}">Create New </a></li>
                  <li class="breadcrumb-item active">How We Help Data</li>
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
                  <h3 class="card-title">How We Help Data</h3>

                    <div class="card-tools">
                      <ul class="pagination pagination-sm float-right">
                        <li class="page-item">
                            <a class="page-link bg-primary" href="{{url('howwehelp/create')}}"> 
                                Add New 
                                <i class="fas fa-plus"></i> 
                            </a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" target="_blank" href="{{url('howwehelp/export/pdf')}}">
                            <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                          </a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" target="_blank" href="{{url('howwehelp/export/excel')}}">
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
                            <th class="text-center">Section Title</th>
                            <th class="text-center">Section Detail</th>
                            <th class="text-center">Section One Icon</th>
                            <th class="text-center">Section One Content</th>
                            <th class="text-center">Section Two Icon</th>
                            <th class="text-center">Section Two Content</th>
                            <th class="text-center">Section Three Icon</th>
                            <th class="text-center">Section Three Content</th>
                            <th class="text-center">Section Four Icon</th>
                            <th class="text-center">Section Four Content</th>
                            <th class="text-center">Section Image</th>
                            <th class="text-center">Module Status</th>
                            <th class="text-center">Created At</th>
                            <th class="text-center">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if(count($dataRow))
                            @foreach($dataRow as $row)  
                                <tr>
                                    <td class="text-center">{{$row->id}}</td><td class="text-center">{{$row->section_title}}</td><td class="text-center">{{$row->section_detail}}</td><td class="text-center">{{$row->section_one_icon}}</td><td class="text-center">{{$row->section_one_content}}</td><td class="text-center">{{$row->section_two_icon}}</td><td class="text-center">{{$row->section_two_content}}</td><td class="text-center">{{$row->section_three_icon}}</td><td class="text-center">{{$row->section_three_content}}</td><td class="text-center">{{$row->section_four_icon}}</td><td class="text-center">{{$row->section_four_content}}</td><td class="text-center">{{$row->section_image}}</td><td class="text-center">{{$row->module_status}}</td>
                                    <td>{{formatDate($row->created_at)}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('howwehelp/edit/'.$row->id)}}" type="button" class="btn btn-default">
                                                Edit 
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{url('howwehelp/delete/'.$row->id)}}" type="button" class="btn btn-default">
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
                        <th class="text-center">Section Title</th>
                        <th class="text-center">Section Detail</th>
                        <th class="text-center">Section One Icon</th>
                        <th class="text-center">Section One Content</th>
                        <th class="text-center">Section Two Icon</th>
                        <th class="text-center">Section Two Content</th>
                        <th class="text-center">Section Three Icon</th>
                        <th class="text-center">Section Three Content</th>
                        <th class="text-center">Section Four Icon</th>
                        <th class="text-center">Section Four Content</th>
                        <th class="text-center">Section Image</th>
                        <th class="text-center">Module Status</th>
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
        