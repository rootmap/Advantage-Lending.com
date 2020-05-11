
@extends("admin.layout.master")
@section("title","Create New Site Setting")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Site Setting</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Create New Site Setting</li>
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
            <h3 class="card-title">Create New Site Setting</h3>            
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('sitesetting')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="site_name">Site Name</label>
                        <input type="text" class="form-control" placeholder="Enter Site Name" id="site_name" name="site_name">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="site_title">Site Title</label>
                        <input type="text" class="form-control" placeholder="Enter Site Title" id="site_title" name="site_title">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Choose Top Logo</label>
                            <!-- <label for="customFile">Choose Top Logo</label> -->

                            <div class="custom-file">
                              <input type="file" class="custom-file-input"  id="top_logo" name="top_logo">
                              <label class="custom-file-label" for="customFile">Choose Top Logo</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Choose Bottom Logo</label>
                            <!-- <label for="customFile">Choose Bottom Logo</label> -->

                            <div class="custom-file">
                              <input type="file" class="custom-file-input"  id="bottom_logo" name="bottom_logo">
                              <label class="custom-file-label" for="customFile">Choose Bottom Logo</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="contact_number">Contact Number</label>
                        <input type="text" class="form-control" placeholder="Enter Contact Number" id="contact_number" name="contact_number">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Enter Email" id="email" name="email">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="top_toll_free_call_message">Top Toll Free Call Message</label>
                        <input type="text" class="form-control" placeholder="Enter Top Toll Free Call Message" id="top_toll_free_call_message" name="top_toll_free_call_message">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="top_apply_button_text">Top Apply Button Text</label>
                        <input type="text" class="form-control" placeholder="Enter Top Apply Button Text" id="top_apply_button_text" name="top_apply_button_text">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="bottom_copyright_text">Bottom Copyright Text</label>
                        <input type="text" class="form-control" placeholder="Enter Bottom Copyright Text" id="bottom_copyright_text" name="bottom_copyright_text">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="bottom_right_reserved_text">Bottom Right Reserved Text</label>
                        <input type="text" class="form-control" placeholder="Enter Bottom Right Reserved Text" id="bottom_right_reserved_text" name="bottom_right_reserved_text">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="facebook_page_link">Facebook Page Link</label>
                        <input type="text" class="form-control" placeholder="Enter Facebook Page Link" id="facebook_page_link" name="facebook_page_link">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="twitter_page_link">Twitter Page Link</label>
                        <input type="text" class="form-control" placeholder="Enter Twitter Page Link" id="twitter_page_link" name="twitter_page_link">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="linkedin_page_link">LinkedIn Page Link</label>
                        <input type="text" class="form-control" placeholder="Enter LinkedIn Page Link" id="linkedin_page_link" name="linkedin_page_link">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="youtube_page_link">Youtube Page Link</label>
                        <input type="text" class="form-control" placeholder="Enter Youtube Page Link" id="youtube_page_link" name="youtube_page_link">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="google_plus_page_link">Google Plus Page Link</label>
                        <input type="text" class="form-control" placeholder="Enter Google Plus Page Link" id="google_plus_page_link" name="google_plus_page_link">
                      </div>
                    </div>

            <div class="col-sm-6">
              <!-- radio -->
              <div class="form-group">
              <label>Choose Site Status</label>
        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" 
                          id="module_status_0" name="module_status" value="Active">
                          <label class="form-check-label">Active</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio" 
                          id="module_status_1" name="module_status" value="Down Site">
                          <label class="form-check-label">Down Site</label>
                        </div>
                
                    </div>
                </div>
            </div>
                   
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
              <a class="btn btn-danger" href="{{url('sitesetting/create')}}"><i class="far fa-times-circle"></i> Reset</a>
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
        