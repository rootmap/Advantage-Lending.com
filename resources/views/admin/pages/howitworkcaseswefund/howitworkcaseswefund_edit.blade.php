
@extends("admin.layout.master")
@section("title","Edit How It Work Cases We Fund")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>How It Work Cases We Fund</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Update How It Work Cases We Fund</li>
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
            <h3 class="card-title">Edit / Modify How It Work Cases We Fund</h3>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('howitworkcaseswefund/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
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
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="button_text">Button text</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->button_text)){
                            ?>
                            value="{{$dataRow->button_text}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Button text" id="button_text" name="button_text">
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
                                        <img class="img-thumbnail" src="{{url('upload/howitworkcaseswefund/'.$dataRow->section_image)}}" width="150">
                                    @endif
                                @endif
                            </div>
                        </div>
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="heading_two_title">Heading Two Title</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->heading_two_title)){
                            ?>
                            value="{{$dataRow->heading_two_title}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Heading Two Title" id="heading_two_title" name="heading_two_title">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="heading_options">Heading Options</label>
                        <textarea class="form-control" rows="3"  placeholder="Enter Heading Options Comma Separated" id="heading_options" name="heading_options"><?php 
                                if(isset($dataRow->heading_options)){
                                    
                                    echo $dataRow->heading_options;
                                    
                                }
                                ?></textarea>
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="link_text">Link Text</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->link_text)){
                            ?>
                            value="{{$dataRow->link_text}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Link Text" id="link_text" name="link_text">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="link_url">Link URL</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->link_url)){
                            ?>
                            value="{{$dataRow->link_url}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Link URL" id="link_url" name="link_url">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="section_background_forecolor">Section Background Forecolor</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->section_background_forecolor)){
                            ?>
                            value="{{$dataRow->section_background_forecolor}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Section Background Forecolor" id="section_background_forecolor" name="section_background_forecolor">
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
              <a class="btn btn-danger" href="{{url('howitworkcaseswefund/edit/'.$dataRow->id)}}">
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
        