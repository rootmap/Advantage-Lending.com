
@extends("admin.layout.master")
@section("title","Edit How We Help")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>How We Help</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Update How We Help</li>
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
            <h3 class="card-title">Edit / Modify How We Help</h3>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('howwehelp/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
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
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="section_detail">Section Detail</label>
                        <textarea class="form-control" rows="3"  placeholder="Enter Section Detail" id="section_detail" name="section_detail"><?php 
                                if(isset($dataRow->section_detail)){
                                    
                                    echo $dataRow->section_detail;
                                    
                                }
                                ?></textarea>
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="section_one_icon">Section One Icon | <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">Find Icon in Library</a> | Click Icon then it will show icon code like below</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->section_one_icon)){
                            ?>
                            value="{{$dataRow->section_one_icon}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Section One Icon" id="section_one_icon" name="section_one_icon">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="section_one_content">Section One Content</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->section_one_content)){
                            ?>
                            value="{{$dataRow->section_one_content}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Section One Content" id="section_one_content" name="section_one_content">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="section_two_icon">Section Two Icon  | <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">Find Icon in Library</a> | Click Icon then it will show icon code like below</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->section_two_icon)){
                            ?>
                            value="{{$dataRow->section_two_icon}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Section Two Icon" id="section_two_icon" name="section_two_icon">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="section_two_content">Section Two Content</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->section_two_content)){
                            ?>
                            value="{{$dataRow->section_two_content}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Section Two Content" id="section_two_content" name="section_two_content">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="section_three_icon">Section Three Icon  | <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">Find Icon in Library</a> | Click Icon then it will show icon code like below</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->section_three_icon)){
                            ?>
                            value="{{$dataRow->section_three_icon}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Section Three Icon" id="section_three_icon" name="section_three_icon">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="section_three_content">Section Three Content</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->section_three_content)){
                            ?>
                            value="{{$dataRow->section_three_content}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Section Three Content" id="section_three_content" name="section_three_content">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="section_four_icon">Section Four Icon  | <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">Find Icon in Library</a> | Click Icon then it will show icon code like below</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->section_four_icon)){
                            ?>
                            value="{{$dataRow->section_four_icon}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Section Four Icon" id="section_four_icon" name="section_four_icon">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="section_four_content">Section Four Content</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->section_four_content)){
                            ?>
                            value="{{$dataRow->section_four_content}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Section Four Content" id="section_four_content" name="section_four_content">
                      </div>
                    </div>
                </div>
                
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Choose Section Image</label>
                                    <!-- <label for="customFile">Choose Section Image</label> -->
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="section_image" name="section_image">
                                      <input type="hidden" value="{{$dataRow->section_image}}" name="ex_section_image" />
                                      <label class="custom-file-label" for="customFile">Choose Section Image</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @if(isset($dataRow->section_image))
                                    @if(!empty($dataRow->section_image))
                                        <img class="img-thumbnail" src="{{url('upload/howwehelp/'.$dataRow->section_image)}}" width="150">
                                    @endif
                                @endif
                            </div>
                        </div>
        <div class="row">
            <div class="col-sm-12">
              <!-- radio -->
              <div class="form-group">
              <label>Choose Module Status</label>
        
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
              <a class="btn btn-danger" href="{{url('howwehelp/edit/'.$dataRow->id)}}">
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
        