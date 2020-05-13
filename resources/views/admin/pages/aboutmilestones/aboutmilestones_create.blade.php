
@extends("admin.layout.master")
@section("title","Create New About Milestones")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>About Milestones</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Create New About Milestones</li>
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
            <h3 class="card-title">Create New About Milestones</h3>            
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('aboutmilestones')}}" method="post" enctype="multipart/form-data">
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
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="detail">Detail</label>
                        <textarea class="form-control" rows="3"  placeholder="Enter Detail" id="detail" name="detail"></textarea>
                      </div>
                    </div>
                </div>
                
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Choose Image One</label>
                                    <!-- <label for="customFile">Choose Image One</label> -->

                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="image_one" name="image_one">
                                      <label class="custom-file-label" for="customFile">Choose Image One</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Choose Image Two</label>
                                    <!-- <label for="customFile">Choose Image Two</label> -->

                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="image_two" name="image_two">
                                      <label class="custom-file-label" for="customFile">Choose Image Two</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Choose Image Three</label>
                                    <!-- <label for="customFile">Choose Image Three</label> -->

                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="image_three" name="image_three">
                                      <label class="custom-file-label" for="customFile">Choose Image Three</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Choose Image Four</label>
                                    <!-- <label for="customFile">Choose Image Four</label> -->

                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="image_four" name="image_four">
                                      <label class="custom-file-label" for="customFile">Choose Image Four</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Choose Image Five</label>
                                    <!-- <label for="customFile">Choose Image Five</label> -->

                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="image_five" name="image_five">
                                      <label class="custom-file-label" for="customFile">Choose Image Five</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Choose Image Six</label>
                                    <!-- <label for="customFile">Choose Image Six</label> -->

                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="image_six" name="image_six">
                                      <label class="custom-file-label" for="customFile">Choose Image Six</label>
                                    </div>
                                </div>
                            </div>
                        </div>
        <div class="row">
            <div class="col-sm-12">
              <!-- radio -->
              <div class="form-group">
              <label>Choose Section Status</label>
        
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
              <a class="btn btn-danger" href="{{url('aboutmilestones/create')}}"><i class="far fa-times-circle"></i> Reset</a>
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
        