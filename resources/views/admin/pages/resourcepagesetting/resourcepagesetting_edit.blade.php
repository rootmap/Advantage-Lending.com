
@extends("admin.layout.master")
@section("title","Edit Resource Page Setting")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Resource Page Setting</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Update Resource Page Setting</li>
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
            <h3 class="card-title">Edit / Modify Resource Page Setting</h3>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('resourcepagesetting/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
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
                        <textarea class="form-control textarea" rows="3"  placeholder="Enter Details" id="detail" name="detail"><?php 
                                if(isset($dataRow->detail)){
                                    
                                    echo $dataRow->detail;
                                    
                                }
                                ?></textarea>
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
                                        <img class="img-thumbnail" src="{{url('upload/resourcepagesetting/'.$dataRow->background_image)}}" width="150">
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
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>Choose Default Item Limit</label>
                                  <select class="form-control select2" style="width: 100%;"  id="default_show_item" name="default_show_item">
                                    
        <option value="">Please select</option>
            <option 
                    <?php 
                    if($dataRow->default_show_item=="5"){
                        ?>
                        selected="selected" 
                        <?php 
                    }
                    ?> 
            value="5">5</option>
            <option 
                    <?php 
                    if($dataRow->default_show_item=="10"){
                        ?>
                        selected="selected" 
                        <?php 
                    }
                    ?> 
            value="10">10</option>
            <option 
                    <?php 
                    if($dataRow->default_show_item=="15"){
                        ?>
                        selected="selected" 
                        <?php 
                    }
                    ?> 
            value="15">15</option>
            <option 
                    <?php 
                    if($dataRow->default_show_item=="20"){
                        ?>
                        selected="selected" 
                        <?php 
                    }
                    ?> 
            value="20">20</option>
            <option 
                    <?php 
                    if($dataRow->default_show_item=="25"){
                        ?>
                        selected="selected" 
                        <?php 
                    }
                    ?> 
            value="25">25</option>
            <option 
                    <?php 
                    if($dataRow->default_show_item=="50"){
                        ?>
                        selected="selected" 
                        <?php 
                    }
                    ?> 
            value="50">50</option>
            <option 
                    <?php 
                    if($dataRow->default_show_item=="100"){
                        ?>
                        selected="selected" 
                        <?php 
                    }
                    ?> 
            value="100">100</option>
            <option 
                    <?php 
                    if($dataRow->default_show_item=="500"){
                        ?>
                        selected="selected" 
                        <?php 
                    }
                    ?> 
            value="500">500</option>
            <option 
                    <?php 
                    if($dataRow->default_show_item=="1000"){
                        ?>
                        selected="selected" 
                        <?php 
                    }
                    ?> 
            value="1000">1000</option>
                                  </select>
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
              <a class="btn btn-danger" href="{{url('resourcepagesetting/edit/'.$dataRow->id)}}">
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
    <link rel="stylesheet" href="{{url('admin/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('admin/plugins/summernote/summernote-bs4.css')}}">
@endsection
@section("js")

    <script src="{{url('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script>
    $(document).ready(function(){
        bsCustomFileInput.init();
    });
    </script>

     <script src="{{url('admin/plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
    $(document).ready(function(){
        $(".select2").select2();
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
        