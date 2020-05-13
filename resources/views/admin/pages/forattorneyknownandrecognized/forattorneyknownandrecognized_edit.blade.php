
@extends("admin.layout.master")
@section("title","Edit For Attorney Known and Recognized")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>For Attorney Known and Recognized</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Update For Attorney Known and Recognized</li>
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
            <h3 class="card-title">Edit / Modify For Attorney Known and Recognized</h3>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('forattorneyknownandrecognized/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->title)){
                            ?>
                            value="{{$dataRow->title}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Title" id="title" name="title">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="detail">Detail</label>
                        <textarea class="form-control textarea" rows="3"  placeholder="Enter Detail" id="detail" name="detail"><?php 
                                if(isset($dataRow->detail)){
                                    
                                    echo $dataRow->detail;
                                    
                                }
                                ?></textarea>
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="primary_background_color">Primary Background Color</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->primary_background_color)){
                            ?>
                            value="{{$dataRow->primary_background_color}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Primary Background" id="primary_background_color" name="primary_background_color">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="secondary_background_color">Secondary Background Color</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->secondary_background_color)){
                            ?>
                            value="{{$dataRow->secondary_background_color}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Secondary Background Color" id="secondary_background_color" name="secondary_background_color">
                      </div>
                    </div>
                </div>
                
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Choose Video Background Image</label>
                                    <!-- <label for="customFile">Choose Video Background Image</label> -->
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="video_background_image" name="video_background_image">
                                      <input type="hidden" value="{{$dataRow->video_background_image}}" name="ex_video_background_image" />
                                      <label class="custom-file-label" for="customFile">Choose Video Background Image</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @if(isset($dataRow->video_background_image))
                                    @if(!empty($dataRow->video_background_image))
                                        <img class="img-thumbnail" src="{{url('upload/forattorneyknownandrecognized/'.$dataRow->video_background_image)}}" width="150">
                                    @endif
                                @endif
                            </div>
                        </div>
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="youtube_link">Youtube Link</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->youtube_link)){
                            ?>
                            value="{{$dataRow->youtube_link}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Youtube Link" id="youtube_link" name="youtube_link">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="video_by">Video By</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->video_by)){
                            ?>
                            value="{{$dataRow->video_by}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Video By" id="video_by" name="video_by">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="video_location">Video Location</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->video_location)){
                            ?>
                            value="{{$dataRow->video_location}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Video Location" id="video_location" name="video_location">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="video_short_detail">Video Short Detail</label>
                        <textarea class="form-control textarea" rows="3"  placeholder="Enter Video Short Detail" id="video_short_detail" name="video_short_detail"><?php 
                                if(isset($dataRow->video_short_detail)){
                                    
                                    echo $dataRow->video_short_detail;
                                    
                                }
                                ?></textarea>
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
                                <?php 
                                if($dataRow->module_status=="Active"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="module_status_0" name="module_status" value="Active">
                          <label class="form-check-label">Active</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->module_status=="Inactive"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="module_status_1" name="module_status" value="Inactive">
                          <label class="form-check-label">Inactive</label>
                        </div>
                
                    </div>
                </div>
            </div>
                   
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> 
                Update
              </button>
              <a class="btn btn-danger" href="{{url('forattorneyknownandrecognized/edit/'.$dataRow->id)}}">
                <i class="far fa-times-circle"></i> 
                Reset
              </a>
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

@section('css')
    <link rel="stylesheet" href="{{url('admin/plugins/summernote/summernote-bs4.css')}}">
@endsection
@section("js")

    <script src="{{url('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script>
    $(document).ready(function(){
        bsCustomFileInput.init();
    });
    </script>


    <script src="{{url('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
      $(function () {
        // Summernote
        $('.textarea').summernote({
          height: 250,
          toolbar: [
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['insert', ['link', 'hr']],
                    ['view', ['fullscreen', 'codeview']],
                  ],
        });

        $('.textareadescription').summernote({
          height: 100,
          toolbar: [
                    
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['view', ['fullscreen', 'codeview']],
                  ],
        });
      });
    </script>

@endsection
        