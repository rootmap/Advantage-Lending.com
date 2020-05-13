
@extends("admin.layout.master")
@section("title","Edit About Milestones")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>About Milestones</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Update About Milestones</li>
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
            <h3 class="card-title">Edit / Modify About Milestones</h3>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('aboutmilestones/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Choose Image One</label>
                                    <!-- <label for="customFile">Choose Image One</label> -->
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="image_one" name="image_one">
                                      <input type="hidden" value="{{$dataRow->image_one}}" name="ex_image_one" />
                                      <label class="custom-file-label" for="customFile">Choose Image One</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @if(isset($dataRow->image_one))
                                    @if(!empty($dataRow->image_one))
                                        <img class="img-thumbnail" src="{{url('upload/aboutmilestones/'.$dataRow->image_one)}}" width="150">
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Choose Image Two</label>
                                    <!-- <label for="customFile">Choose Image Two</label> -->
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="image_two" name="image_two">
                                      <input type="hidden" value="{{$dataRow->image_two}}" name="ex_image_two" />
                                      <label class="custom-file-label" for="customFile">Choose Image Two</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @if(isset($dataRow->image_two))
                                    @if(!empty($dataRow->image_two))
                                        <img class="img-thumbnail" src="{{url('upload/aboutmilestones/'.$dataRow->image_two)}}" width="150">
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Choose Image Three</label>
                                    <!-- <label for="customFile">Choose Image Three</label> -->
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="image_three" name="image_three">
                                      <input type="hidden" value="{{$dataRow->image_three}}" name="ex_image_three" />
                                      <label class="custom-file-label" for="customFile">Choose Image Three</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @if(isset($dataRow->image_three))
                                    @if(!empty($dataRow->image_three))
                                        <img class="img-thumbnail" src="{{url('upload/aboutmilestones/'.$dataRow->image_three)}}" width="150">
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Choose Image Four</label>
                                    <!-- <label for="customFile">Choose Image Four</label> -->
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="image_four" name="image_four">
                                      <input type="hidden" value="{{$dataRow->image_four}}" name="ex_image_four" />
                                      <label class="custom-file-label" for="customFile">Choose Image Four</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @if(isset($dataRow->image_four))
                                    @if(!empty($dataRow->image_four))
                                        <img class="img-thumbnail" src="{{url('upload/aboutmilestones/'.$dataRow->image_four)}}" width="150">
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Choose Image Five</label>
                                    <!-- <label for="customFile">Choose Image Five</label> -->
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="image_five" name="image_five">
                                      <input type="hidden" value="{{$dataRow->image_five}}" name="ex_image_five" />
                                      <label class="custom-file-label" for="customFile">Choose Image Five</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @if(isset($dataRow->image_five))
                                    @if(!empty($dataRow->image_five))
                                        <img class="img-thumbnail" src="{{url('upload/aboutmilestones/'.$dataRow->image_five)}}" width="150">
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Choose Image Six</label>
                                    <!-- <label for="customFile">Choose Image Six</label> -->
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="image_six" name="image_six">
                                      <input type="hidden" value="{{$dataRow->image_six}}" name="ex_image_six" />
                                      <label class="custom-file-label" for="customFile">Choose Image Six</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @if(isset($dataRow->image_six))
                                    @if(!empty($dataRow->image_six))
                                        <img class="img-thumbnail" src="{{url('upload/aboutmilestones/'.$dataRow->image_six)}}" width="150">
                                    @endif
                                @endif
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
              <a class="btn btn-danger" href="{{url('aboutmilestones/edit/'.$dataRow->id)}}">
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
        