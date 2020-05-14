
@extends("admin.layout.master")
@section("title","Edit Attorneys form")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Attorneys form</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('attorneysform/list')}}">Datatable </a></li>
              <li class="breadcrumb-item"><a href="{{url('attorneysform/create')}}">Create New </a></li>
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
            <h3 class="card-title">Edit / Modify Attorneys form</h3>
            <div class="card-tools">
              <ul class="pagination pagination-sm float-right">
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('attorneysform/create')}}"> 
                        Create 
                        <i class="fas fa-plus"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('attorneysform/list')}}"> 
                        Data 
                        <i class="fas fa-table"></i>
                    </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('attorneysform/export/pdf')}}">
                    <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('attorneysform/export/excel')}}">
                    <i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"title="Excel"></i>
                  </a>
                </li>
              </ul>
            </div>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('attorneysform/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->first_name)){
                            ?>
                            value="{{$dataRow->first_name}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter First Name" id="first_name" name="first_name">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->last_name)){
                            ?>
                            value="{{$dataRow->last_name}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Last Name" id="last_name" name="last_name">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->phone)){
                            ?>
                            value="{{$dataRow->phone}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Phone" id="phone" name="phone">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->email)){
                            ?>
                            value="{{$dataRow->email}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Email" id="email" name="email">
                      </div>
                    </div>
                </div>
                
        <div class="row">
            <div class="col-sm-12">
              <!-- checkbox -->
              <div class="form-group">
              <label>Select option</label>
        
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  
                                <?php 
                                if($dataRow->contact_me_by=="Email"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="contact_me_by_0" name="contact_me_by" value="Email">
                          <label class="form-check-label">Email</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  
                                <?php 
                                if($dataRow->contact_me_by=="Phone"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="contact_me_by_1" name="contact_me_by" value="Phone">
                          <label class="form-check-label">Phone</label>
                        </div>
                
                    </div>
                </div>
            </div>
            
        <div class="row">
            <div class="col-sm-12">
              <!-- checkbox -->
              <div class="form-group">
              <label>Select option</label>
        
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  
                                <?php 
                                if($dataRow->best_time=="AM"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="best_time_0" name="best_time" value="AM">
                          <label class="form-check-label">AM</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  
                                <?php 
                                if($dataRow->best_time=="PM"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="best_time_1" name="best_time" value="PM">
                          <label class="form-check-label">PM</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  
                                <?php 
                                if($dataRow->best_time=="Specific day/time"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="best_time_2" name="best_time" value="Specific day/time">
                          <label class="form-check-label">Specific day/time</label>
                        </div>
                
                    </div>
                </div>
            </div>
            
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" rows="3"  placeholder="Enter Message" id="message" name="message"><?php 
                                if(isset($dataRow->message)){
                                    
                                    echo $dataRow->message;
                                    
                                }
                                ?></textarea>
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
              <a class="btn btn-danger" href="{{url('attorneysform/edit/'.$dataRow->id)}}">
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