
@extends("admin.layout.master")
@section("title","Edit Slider")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Slider</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Update Slider</li>
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
            <h3 class="card-title">Edit / Modify Slider</h3>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('slider/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="heading_one">Heading One</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->heading_one)){
                            ?>
                            value="{{$dataRow->heading_one}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Heading One" id="heading_one" name="heading_one">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="heading_two">Heading Two</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->heading_two)){
                            ?>
                            value="{{$dataRow->heading_two}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Heading Two" id="heading_two" name="heading_two">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="animated_text">Animated Text</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->animated_text)){
                            ?>
                            value="{{$dataRow->animated_text}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Animated Text" id="animated_text" name="animated_text">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="heading_three">Heading Three</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->heading_three)){
                            ?>
                            value="{{$dataRow->heading_three}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Heading Three" id="heading_three" name="heading_three">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="heading_four">Heading Four</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->heading_four)){
                            ?>
                            value="{{$dataRow->heading_four}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Heading Four" id="heading_four" name="heading_four">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="slider_button_text">Slider Button Text</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->slider_button_text)){
                            ?>
                            value="{{$dataRow->slider_button_text}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Slider Button Text" id="slider_button_text" name="slider_button_text">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="slider_button_url">Slider Button URL</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->slider_button_url)){
                            ?>
                            value="{{$dataRow->slider_button_url}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Slider Button URL" id="slider_button_url" name="slider_button_url">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="slider_color_scheme">Slider Color Scheme</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->slider_color_scheme)){
                            ?>
                            value="{{$dataRow->slider_color_scheme}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Slider Color Scheme" id="slider_color_scheme" name="slider_color_scheme">
                      </div>
                    </div>
                </div>
                
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Choose Slider Background Image</label>
                                    <!-- <label for="customFile">Choose Slider Background Image</label> -->
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="slider_background_image" name="slider_background_image">
                                      <input type="hidden" value="{{$dataRow->slider_background_image}}" name="ex_slider_background_image" />
                                      <label class="custom-file-label" for="customFile">Choose Slider Background Image</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @if(isset($dataRow->slider_background_image))
                                    @if(!empty($dataRow->slider_background_image))
                                        <img class="img-thumbnail" src="{{url('upload/slider/'.$dataRow->slider_background_image)}}" width="150">
                                    @endif
                                @endif
                            </div>
                        </div>
        <div class="row">
            <div class="col-sm-12">
              <!-- radio -->
              <div class="form-group">
              <label>Choose Slider Status</label>
        
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
              <a class="btn btn-danger" href="{{url('slider/edit/'.$dataRow->id)}}">
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
        