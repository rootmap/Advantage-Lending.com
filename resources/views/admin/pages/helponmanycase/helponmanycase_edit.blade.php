
@extends("admin.layout.master")
@section("title","Edit Help On Many Case")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Help On Many Case</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Update Help On Many Case</li>
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
            <h3 class="card-title">Edit / Modify Help On Many Case</h3>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('helponmanycase/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
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
                    <div class="col-sm-6">
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

                    <div class="col-sm-6">
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
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="case_block_forecolor">Case Block Forecolor</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->case_block_forecolor)){
                            ?>
                            value="{{$dataRow->case_block_forecolor}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Case Block Forecolor" id="case_block_forecolor" name="case_block_forecolor">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="case_block_bottom_forecolor">Case Block Bottom Forecolor</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->case_block_bottom_forecolor)){
                            ?>
                            value="{{$dataRow->case_block_bottom_forecolor}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Case Block Bottom Forecolor" id="case_block_bottom_forecolor" name="case_block_bottom_forecolor">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="case_block_bottom_text_color">Case Block Bottom Text Color</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->case_block_bottom_text_color)){
                            ?>
                            value="{{$dataRow->case_block_bottom_text_color}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Case Block Bottom Text Color" id="case_block_bottom_text_color" name="case_block_bottom_text_color">
                      </div>
                    </div>

            <div class="col-sm-6">
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
              <a class="btn btn-danger" href="{{url('helponmanycase/edit/'.$dataRow->id)}}">
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