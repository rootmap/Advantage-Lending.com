
@extends("admin.layout.master")
@section("title","Create New Need An Attorney")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Need An Attorney</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('needanattorney/list')}}">Need An Attorney Data</a></li>
              <li class="breadcrumb-item active">Create New Need An Attorney</li>
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
<section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-8 offset-2">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Create New Need An Attorney</h3>
            <div class="card-tools">
              <ul class="pagination pagination-sm float-right">
                <li class="page-item"><a class="page-link bg-primary" href="{{url('needanattorney/list')}}"> Data <i class="fas fa-table"></i></a></li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('needanattorney/export/pdf')}}">
                    <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('needanattorney/export/excel')}}">
                    <i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"title="Excel"></i>
                  </a>
                </li>
              </ul>
            </div>            
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('needanattorney')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" placeholder="Enter First Name" id="first_name" name="first_name">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" placeholder="Enter Last Name" id="last_name" name="last_name">
                      </div>
                    </div>
                </div>
                
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>What kind of case do you have?</label>
                                  <select class="form-control select2" style="width: 100%;"  id="case_type" name="case_type">
                                        <option value="">Please Select</option>
                                        @if(isset($dataRow_CaseType))    
                                            @if(count($dataRow_CaseType)>0)
                                                @foreach($dataRow_CaseType as $CaseType)
                                                    <option value="{{$CaseType->id}}">{{$CaseType->name}}</option>
                                                    
                                                @endforeach
                                            @endif
                                        @endif 
                                        
                                  </select>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>What state is your case in?</label>
                                  <select class="form-control select2" style="width: 100%;"  id="state_case" name="state_case">
                                        <option value="">Please Select</option>
                                        @if(isset($dataRow_USAState))    
                                            @if(count($dataRow_USAState)>0)
                                                @foreach($dataRow_USAState as $USAState)
                                                    <option value="{{$USAState->id}}">{{$USAState->name}}</option>
                                                    
                                                @endforeach
                                            @endif
                                        @endif 
                                        
                                  </select>
                                </div>
                            </div>
                        </div>
                    
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" placeholder="Enter Phone" id="phone" name="phone">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Enter Email Address" id="email" name="email">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" rows="3"  placeholder="Enter Message" id="message" name="message"></textarea>
                      </div>
                    </div>
                </div>
                
        <div class="row">
            <div class="col-sm-12">
              <!-- radio -->
              <div class="form-group">
              <label>Choose Request Status</label>
        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" 
                          id="request_status_0" name="request_status" value="Submitted">
                          <label class="form-check-label">Submitted</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio" 
                          id="request_status_1" name="request_status" value="Reviewed">
                          <label class="form-check-label">Reviewed</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio" 
                          id="request_status_2" name="request_status" value="Agreed">
                          <label class="form-check-label">Agreed</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio" 
                          id="request_status_3" name="request_status" value="Rejected">
                          <label class="form-check-label">Rejected</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio" 
                          id="request_status_4" name="request_status" value="Refer To Another">
                          <label class="form-check-label">Refer To Another</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio" 
                          id="request_status_5" name="request_status" value="Close">
                          <label class="form-check-label">Close</label>
                        </div>
                
                    </div>
                </div>
            </div>
                   
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
              <a class="btn btn-danger" href="{{url('needanattorney/create')}}"><i class="far fa-times-circle"></i> Reset</a>
            </div>
          </form>
        </div>
        <!-- /.card -->

      </div>
      <!--/.col (left) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
@endsection
@section("css")
    
    <link rel="stylesheet" href="{{url('admin/plugins/select2/css/select2.min.css')}}">
    
@endsection
        
@section("js")

    <script src="{{url('admin/plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
    $(document).ready(function(){
        $(".select2").select2();
    });
    </script>

@endsection
        