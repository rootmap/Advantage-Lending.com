
@extends("admin.layout.master")
@section("title","Create New For Attorney Page Setting")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>For Attorney Page Setting</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Create New For Attorney Page Setting</li>
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
            <h3 class="card-title">Create New For Attorney Page Setting</h3>            
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('forattorneypagesetting')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" placeholder="Enter Title" id="title" name="title">
                      </div>
                    </div>
                </div>
                
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Choose Background Image</label>
                                    <!-- <label for="customFile">Choose Background Image</label> -->

                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="background_image" name="background_image">
                                      <label class="custom-file-label" for="customFile">Choose Background Image</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="background_forecolor">Background Forecolor</label>
                        <input type="text" class="form-control" placeholder="Enter Background Forecolor" id="background_forecolor" name="background_forecolor">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="page_title">Page Title</label>
                        <input type="text" class="form-control" placeholder="Enter Page Title" id="page_title" name="page_title">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="page_detail">Page Detail</label>
                        <textarea class="form-control" rows="3"  placeholder="Enter Page Detail" id="page_detail" name="page_detail"></textarea>
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="page_products_services_title">Page Products Services Title</label>
                        <input type="text" class="form-control" placeholder="Enter Page Products Services Title" id="page_products_services_title" name="page_products_services_title">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="page_settlement_funding_title">Page Settlement Funding Title</label>
                        <input type="text" class="form-control" placeholder="Enter Page Settlement Funding Title" id="page_settlement_funding_title" name="page_settlement_funding_title">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="form_title">Form Title</label>
                        <input type="text" class="form-control" placeholder="Enter Form Title" id="form_title" name="form_title">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="form_detail">Form Detail</label>
                        <textarea class="form-control" rows="3"  placeholder="Enter Form Detail" id="form_detail" name="form_detail"></textarea>
                      </div>
                    </div>
                </div>
                
        <div class="row">
            <div class="col-sm-12">
              <!-- radio -->
              <div class="form-group">
              <label>Choose Page Status</label>
        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" 
                          id="module_status_0" name="module_status" value="Active">
                          <label class="form-check-label">Active</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio" 
                          id="module_status_1" name="module_status" value="Inactive">
                          <label class="form-check-label">Inactive</label>
                        </div>
                
                    </div>
                </div>
            </div>
                   
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
              <a class="btn btn-danger" href="{{url('forattorneypagesetting/create')}}"><i class="far fa-times-circle"></i> Reset</a>
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
@section("js")

    <script src="{{url('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script>
    $(document).ready(function(){
        bsCustomFileInput.init();
    });
    </script>

@endsection
        