
@extends("admin.layout.master")
@section("title","Edit For Broker Page Setting")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>For Broker Page Setting</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Update For Broker Page Setting</li>
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
            <h3 class="card-title">Edit / Modify For Broker Page Setting</h3>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('forbrokerpagesetting/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
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
                                        <img class="img-thumbnail" src="{{url('upload/forbrokerpagesetting/'.$dataRow->background_image)}}" width="150">
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
                        <label for="page_title">Page Title</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->page_title)){
                            ?>
                            value="{{$dataRow->page_title}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Page Title" id="page_title" name="page_title">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="page_detail">Page Detail</label>
                        <textarea class="form-control textarea" rows="3"  placeholder="Enter Page Detail" id="page_detail" name="page_detail"><?php 
                                if(isset($dataRow->page_detail)){
                                    
                                    echo $dataRow->page_detail;
                                    
                                }
                                ?></textarea>
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="form_title">Form Title</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->form_title)){
                            ?>
                            value="{{$dataRow->form_title}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Form Title" id="form_title" name="form_title">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="form_detail">Form Detail</label>
                        <textarea class="form-control formtextarea" rows="3"  placeholder="Enter Form Detail" id="form_detail" name="form_detail"><?php 
                                if(isset($dataRow->form_detail)){
                                    
                                    echo $dataRow->form_detail;
                                    
                                }
                                ?></textarea>
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
              <a class="btn btn-danger" href="{{url('forbrokerpagesetting/edit/'.$dataRow->id)}}">
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
          height: 550,
          toolbar: [
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['insert', ['link', 'hr']],
                    ['view', ['fullscreen', 'codeview']],
                  ],
        });

        $('.formtextarea').summernote({
          height: 250,
          toolbar: [
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['insert', ['link', 'hr']],
                    ['view', ['fullscreen', 'codeview']],
                  ],
        });
      });
    </script>

@endsection
        
        