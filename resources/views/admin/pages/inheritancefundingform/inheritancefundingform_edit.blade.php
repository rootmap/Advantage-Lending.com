
@extends("admin.layout.master")
@section("title","Edit Inheritance Funding Form")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Inheritance Funding Form</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('inheritancefundingform/list')}}">Datatable </a></li>
              <li class="breadcrumb-item"><a href="{{url('inheritancefundingform/create')}}">Create New </a></li>
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
            <h3 class="card-title">Edit / Modify Inheritance Funding Form</h3>
            <div class="card-tools">
              <ul class="pagination pagination-sm float-right">
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('inheritancefundingform/create')}}"> 
                        Create 
                        <i class="fas fa-plus"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('inheritancefundingform/list')}}"> 
                        Data 
                        <i class="fas fa-table"></i>
                    </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('inheritancefundingform/export/pdf')}}">
                    <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('inheritancefundingform/export/excel')}}">
                    <i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"title="Excel"></i>
                  </a>
                </li>
              </ul>
            </div>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('inheritancefundingform/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
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
                        <label for="address">Address</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->address)){
                            ?>
                            value="{{$dataRow->address}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Address" id="address" name="address">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->city)){
                            ?>
                            value="{{$dataRow->city}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter City Name" id="city" name="city">
                      </div>
                    </div>
                </div>
                
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>Enter State</label>
                                  <select class="form-control select2" style="width: 100%;"  id="state" name="state">
                                    
                                        <option value="">Please Select</option>
                                        @if(count($dataRow_USAState)>0)
                                            @foreach($dataRow_USAState as $USAState)
                                                <option 
                                        @if(isset($dataRow->id))
                                            @if($dataRow->id==$USAState->id)
                                                selected="selected" 
                                            @endif
                                        @endif 
                                         value="{{$USAState->id}}">{{$USAState->name}}</option>
                                                
                                            @endforeach
                                        @endif
                                        
                                  </select>
                                </div>
                            </div>
                        </div>
                    
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="zip_code">ZIP Code</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->zip_code)){
                            ?>
                            value="{{$dataRow->zip_code}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter ZIP Code" id="zip_code" name="zip_code">
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
                        <label for="person_received_inheritance">Person Received Inheritance</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->person_received_inheritance)){
                            ?>
                            value="{{$dataRow->person_received_inheritance}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="What is the name of the person you received the inheritance from?" id="person_received_inheritance" name="person_received_inheritance">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="receive_inheritance_date">Receive Inheritance Date</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->receive_inheritance_date)){
                            ?>
                            value="{{$dataRow->receive_inheritance_date}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="When did you receive your inheritance?u received the inheritance from?" id="receive_inheritance_date" name="receive_inheritance_date">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="total_amount_inheritance">Total Amount Inheritance</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->total_amount_inheritance)){
                            ?>
                            value="{{$dataRow->total_amount_inheritance}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="What was the total amount of the inheritance?" id="total_amount_inheritance" name="total_amount_inheritance">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="amount_you_need_now">Amount You Need Now</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->amount_you_need_now)){
                            ?>
                            value="{{$dataRow->amount_you_need_now}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="How much do you need now?" id="amount_you_need_now" name="amount_you_need_now">
                      </div>
                    </div>
                </div>
                
        <div class="row">
            <div class="col-sm-12">
              <!-- checkbox -->
              <div class="form-group">
              <label>Would you like us to refer your application to a non-affiliated company ?</label>
        
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  
                                <?php 
                                if($dataRow->would_you_like_to_refer=="Yes"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="would_you_like_to_refer_0" name="would_you_like_to_refer" value="Yes">
                          <label class="form-check-label">Yes</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  
                                <?php 
                                if($dataRow->would_you_like_to_refer=="No"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="would_you_like_to_refer_1" name="would_you_like_to_refer" value="No">
                          <label class="form-check-label">No</label>
                        </div>
                
                    </div>
                </div>
            </div>
            
        <div class="row">
            <div class="col-sm-12">
              <!-- radio -->
              <div class="form-group">
              <label>Choose Inheritance Funding Form</label>
        
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->form_status=="Submitted"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="form_status_0" name="form_status" value="Submitted">
                          <label class="form-check-label">Submitted</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->form_status=="Reviewed"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="form_status_1" name="form_status" value="Reviewed">
                          <label class="form-check-label">Reviewed</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->form_status=="Agreed"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="form_status_2" name="form_status" value="Agreed">
                          <label class="form-check-label">Agreed</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->form_status=="Rejected"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="form_status_3" name="form_status" value="Rejected">
                          <label class="form-check-label">Rejected</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->form_status=="Refer To Another"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="form_status_4" name="form_status" value="Refer To Another">
                          <label class="form-check-label">Refer To Another</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->form_status=="Close"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="form_status_5" name="form_status" value="Close">
                          <label class="form-check-label">Close</label>
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
              <a class="btn btn-danger" href="{{url('inheritancefundingform/edit/'.$dataRow->id)}}">
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
@section("css")
    
    <link rel="stylesheet" href="{{url('admin/plugins/select2/css/select2.min.css')}}">
    
@endsection
        
@section("js")

    <script src="{{url('admin/plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
    $(document).ready(function(){
        $(".select2").select2();
    });
    </script>

@endsection
        