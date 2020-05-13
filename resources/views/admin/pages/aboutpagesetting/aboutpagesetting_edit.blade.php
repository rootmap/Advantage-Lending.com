
@extends("admin.layout.master")
@section("title","Edit About Page Setting")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>About Page Setting</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Update About Page Setting</li>
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
            <h3 class="card-title">Edit / Modify About Page Setting</h3>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('aboutpagesetting/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="section_title">Section Title</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->section_title)){
                            ?>
                            value="{{$dataRow->section_title}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Section Title" id="section_title" name="section_title">
                      </div>
                    </div>
                </div>
                
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Choose Background Image</label>
                                    <!-- <label for="customFile">Choose Background Image</label> -->
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="background_image" name="background_image">
                                      <input type="hidden" value="{{$dataRow->background_image}}" name="ex_background_image" />
                                      <label class="custom-file-label" for="customFile">Choose Background Image</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @if(isset($dataRow->background_image))
                                    @if(!empty($dataRow->background_image))
                                        <img class="img-thumbnail" src="{{url('upload/aboutpagesetting/'.$dataRow->background_image)}}" width="150">
                                    @endif
                                @endif
                            </div>
                        </div>
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="background_forecolor">Background Forecolor</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->background_forecolor)){
                            ?>
                            value="{{$dataRow->background_forecolor}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Background Forecolor" id="background_forecolor" name="background_forecolor">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="page_heading_title">Page Heading Title</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->page_heading_title)){
                            ?>
                            value="{{$dataRow->page_heading_title}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Page Heading Title" id="page_heading_title" name="page_heading_title">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="page_sub_heading">Page Sub Heading</label>
                        <textarea class="form-control textarea" rows="3"  placeholder="Enter Page Sub Heading" id="page_sub_heading" name="page_sub_heading"><?php 
                                if(isset($dataRow->page_sub_heading)){
                                    
                                    echo $dataRow->page_sub_heading;
                                    
                                }
                                ?></textarea>
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="page_short_content">Page Short Content</label>
                        <textarea class="form-control textarea" rows="3"  placeholder="Enter Page Short Content" id="page_short_content" name="page_short_content"><?php 
                                if(isset($dataRow->page_short_content)){
                                    
                                    echo $dataRow->page_short_content;
                                    
                                }
                                ?></textarea>
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="page_options">Page Options</label>
                        <textarea class="form-control textarea" rows="3"  placeholder="Enter Page Options" id="page_options" name="page_options"><?php 
                                if(isset($dataRow->page_options)){
                                    
                                    echo $dataRow->page_options;
                                    
                                }
                                ?></textarea>
                      </div>
                    </div>
                </div>
                
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Choose Page Options Image</label>
                                    <!-- <label for="customFile">Choose Page Options Image</label> -->
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="page_options_image" name="page_options_image">
                                      <input type="hidden" value="{{$dataRow->page_options_image}}" name="ex_page_options_image" />
                                      <label class="custom-file-label" for="customFile">Choose Page Options Image</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @if(isset($dataRow->page_options_image))
                                    @if(!empty($dataRow->page_options_image))
                                        <img class="img-thumbnail" src="{{url('upload/aboutpagesetting/'.$dataRow->page_options_image)}}" width="150">
                                    @endif
                                @endif
                            </div>
                        </div>
        <div class="row">
            <div class="col-sm-12">
              <!-- radio -->
              <div class="form-group">
              <label>Choose Page Status</label>
        
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
              <a class="btn btn-danger" href="{{url('aboutpagesetting/edit/'.$dataRow->id)}}">
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
          height: 150,
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
        