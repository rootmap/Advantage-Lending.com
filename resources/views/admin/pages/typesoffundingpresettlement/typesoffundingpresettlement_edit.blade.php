
@extends("admin.layout.master")
@section("title","Edit Types Of Funding Pre Settlement")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Types Of Funding Pre Settlement</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Update Types Of Funding Pre Settlement</li>
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
            <h3 class="card-title">Edit / Modify Types Of Funding Pre Settlement</h3>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('typesoffundingpresettlement/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
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
                        <textarea class="form-control" rows="3"  placeholder="Enter Detail" id="detail" name="detail"><?php 
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
                                    <label>Choose Image / SVG One</label>
                                    <!-- <label for="customFile">Choose Image / SVG One</label> -->
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="icon_image_one" name="icon_image_one">
                                      <input type="hidden" value="{{$dataRow->icon_image_one}}" name="ex_icon_image_one" />
                                      <label class="custom-file-label" for="customFile">Choose Image / SVG One</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @if(isset($dataRow->icon_image_one))
                                    @if(!empty($dataRow->icon_image_one))
                                        <img class="img-thumbnail" src="{{url('upload/typesoffundingpresettlement/'.$dataRow->icon_image_one)}}" width="150">
                                    @endif
                                @endif
                            </div>
                        </div>
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="icon_one_heading">Icon One Heading</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->icon_one_heading)){
                            ?>
                            value="{{$dataRow->icon_one_heading}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Icon One Heading" id="icon_one_heading" name="icon_one_heading">
                      </div>
                    </div>
                </div>
                
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Choose Image / SVG Two</label>
                                    <!-- <label for="customFile">Choose Image / SVG Two</label> -->
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="icon_image_two" name="icon_image_two">
                                      <input type="hidden" value="{{$dataRow->icon_image_two}}" name="ex_icon_image_two" />
                                      <label class="custom-file-label" for="customFile">Choose Image / SVG Two</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @if(isset($dataRow->icon_image_two))
                                    @if(!empty($dataRow->icon_image_two))
                                        <img class="img-thumbnail" src="{{url('upload/typesoffundingpresettlement/'.$dataRow->icon_image_two)}}" width="150">
                                    @endif
                                @endif
                            </div>
                        </div>
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="icon_two_heading">Icon Two Heading</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->icon_two_heading)){
                            ?>
                            value="{{$dataRow->icon_two_heading}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Icon Two Heading" id="icon_two_heading" name="icon_two_heading">
                      </div>
                    </div>
                </div>
                
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Choose Image / SVG Three</label>
                                    <!-- <label for="customFile">Choose Image / SVG Three</label> -->
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="icon_image_three" name="icon_image_three">
                                      <input type="hidden" value="{{$dataRow->icon_image_three}}" name="ex_icon_image_three" />
                                      <label class="custom-file-label" for="customFile">Choose Image / SVG Three</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @if(isset($dataRow->icon_image_three))
                                    @if(!empty($dataRow->icon_image_three))
                                        <img class="img-thumbnail" src="{{url('upload/typesoffundingpresettlement/'.$dataRow->icon_image_three)}}" width="150">
                                    @endif
                                @endif
                            </div>
                        </div>
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="icon_three_heading">Icon Three Heading</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->icon_three_heading)){
                            ?>
                            value="{{$dataRow->icon_three_heading}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Icon Three Heading" id="icon_three_heading" name="icon_three_heading">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="button_text">Button Text</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->button_text)){
                            ?>
                            value="{{$dataRow->button_text}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Button Text" id="button_text" name="button_text">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="button_url">Button URL</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->button_url)){
                            ?>
                            value="{{$dataRow->button_url}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Button URL" id="button_url" name="button_url">
                      </div>
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
              <a class="btn btn-danger" href="{{url('typesoffundingpresettlement/edit/'.$dataRow->id)}}">
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
@section("js")

    <script src="{{url('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script>
    $(document).ready(function(){
        bsCustomFileInput.init();
    });
    </script>

@endsection
        