
@extends("admin.layout.master")
@section("title","Edit Team Member")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Team Member</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('teammember/list')}}">Datatable </a></li>
              <li class="breadcrumb-item"><a href="{{url('teammember/create')}}">Create New </a></li>
              <li class="breadcrumb-item active">Edit / Modify</li>
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
            <h3 class="card-title">Edit / Modify Team Member</h3>
            <div class="card-tools">
              <ul class="pagination pagination-sm float-right">
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('teammember/create')}}"> 
                        Create 
                        <i class="fas fa-plus"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('teammember/list')}}"> 
                        Data 
                        <i class="fas fa-table"></i>
                    </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('teammember/export/pdf')}}">
                    <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('teammember/export/excel')}}">
                    <i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"title="Excel"></i>
                  </a>
                </li>
              </ul>
            </div>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('teammember/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="member_name">Member Name</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->member_name)){
                            ?>
                            value="{{$dataRow->member_name}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Member Name" id="member_name" name="member_name">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="member_designation">Member Designation</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->member_designation)){
                            ?>
                            value="{{$dataRow->member_designation}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Member Designation" id="member_designation" name="member_designation">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="member_responsible">Member Responsible</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->member_responsible)){
                            ?>
                            value="{{$dataRow->member_responsible}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Member Responsible For?" id="member_responsible" name="member_responsible">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="relevant_experience">Relevant Experience</label>
                        <textarea class="form-control" rows="3"  placeholder="Enter Relevant Experience" id="relevant_experience" name="relevant_experience"><?php 
                                if(isset($dataRow->relevant_experience)){
                                    
                                    echo $dataRow->relevant_experience;
                                    
                                }
                                ?></textarea>
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="education">Education</label>
                        <textarea class="form-control" rows="3"  placeholder="Enter Relevant Experience" id="education" name="education"><?php 
                                if(isset($dataRow->education)){
                                    
                                    echo $dataRow->education;
                                    
                                }
                                ?></textarea>
                      </div>
                    </div>
                </div>
                
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Choose Member Image</label>
                                    <!-- <label for="customFile">Choose Member Image</label> -->
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="member_image" name="member_image">
                                      <input type="hidden" value="{{$dataRow->member_image}}" name="ex_member_image" />
                                      <label class="custom-file-label" for="customFile">Choose Member Image</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @if(isset($dataRow->member_image))
                                    @if(!empty($dataRow->member_image))
                                        <img class="img-thumbnail" src="{{url('upload/teammember/'.$dataRow->member_image)}}" width="150">
                                    @endif
                                @endif
                            </div>
                        </div>
        <div class="row">
            <div class="col-sm-12">
              <!-- radio -->
              <div class="form-group">
              <label>Choose Member Status</label>
        
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
              <a class="btn btn-danger" href="{{url('teammember/edit/'.$dataRow->id)}}">
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
        