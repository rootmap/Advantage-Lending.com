
@extends("admin.layout.master")
@section("title","Edit Structured Settlement Application Form")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Structured Settlement Application Form</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('structuredsettlementapplicationform/list')}}">Datatable </a></li>
              <li class="breadcrumb-item"><a href="{{url('structuredsettlementapplicationform/create')}}">Create New </a></li>
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
            <h3 class="card-title">Edit / Modify Structured Settlement Application Form</h3>
            <div class="card-tools">
              <ul class="pagination pagination-sm float-right">
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('structuredsettlementapplicationform/create')}}"> 
                        Create 
                        <i class="fas fa-plus"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('structuredsettlementapplicationform/list')}}"> 
                        Data 
                        <i class="fas fa-table"></i>
                    </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('structuredsettlementapplicationform/export/pdf')}}">
                    <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('structuredsettlementapplicationform/export/excel')}}">
                    <i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"title="Excel"></i>
                  </a>
                </li>
              </ul>
            </div>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('structuredsettlementapplicationform/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
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
                        <label for="last_name">Last name</label>
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
              <!-- checkbox -->
              <div class="form-group">
              <label>Are you over the age of 18?</label>
        
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  
                                <?php 
                                if($dataRow->age_over_18=="Yes"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="age_over_18_0" name="age_over_18" value="Yes">
                          <label class="form-check-label">Yes</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  
                                <?php 
                                if($dataRow->age_over_18=="No"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="age_over_18_1" name="age_over_18" value="No">
                          <label class="form-check-label">No</label>
                        </div>
                
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
                        <label for="street_address">Street Address</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->street_address)){
                            ?>
                            value="{{$dataRow->street_address}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter City Name" id="street_address" name="street_address">
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
                        <label for="zip_code">ZIP CODE</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->zip_code)){
                            ?>
                            value="{{$dataRow->zip_code}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter ZIP CODE" id="zip_code" name="zip_code">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="when_did_your_case_settle">When did your case settle</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->when_did_your_case_settle)){
                            ?>
                            value="{{$dataRow->when_did_your_case_settle}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="When did your case settle?" id="when_did_your_case_settle" name="when_did_your_case_settle">
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
                        <label for="total_amount_of_the_award">Total Amount Of The Award</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->total_amount_of_the_award)){
                            ?>
                            value="{{$dataRow->total_amount_of_the_award}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="What was the total amount of the award?" id="total_amount_of_the_award" name="total_amount_of_the_award">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="how_much_receive_each_payment">How Much Receive Each Payment</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->how_much_receive_each_payment)){
                            ?>
                            value="{{$dataRow->how_much_receive_each_payment}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="How much do you receive in each payment?" id="how_much_receive_each_payment" name="how_much_receive_each_payment">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="how_much_do_you_need_now">How Much Do You Need Now</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->how_much_do_you_need_now)){
                            ?>
                            value="{{$dataRow->how_much_do_you_need_now}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="How much do you need now?" id="how_much_do_you_need_now" name="how_much_do_you_need_now">
                      </div>
                    </div>
                </div>
                
        <div class="row">
            <div class="col-sm-12">
              <!-- checkbox -->
              <div class="form-group">
              <label>Would You Like To Refer Your Application</label>
        
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  
                                <?php 
                                if($dataRow->refer_your_application=="Yes"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="refer_your_application_0" name="refer_your_application" value="Yes">
                          <label class="form-check-label">Yes</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  
                                <?php 
                                if($dataRow->refer_your_application=="No"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="refer_your_application_1" name="refer_your_application" value="No">
                          <label class="form-check-label">No</label>
                        </div>
                
                    </div>
                </div>
            </div>
            
        <div class="row">
            <div class="col-sm-12">
              <!-- radio -->
              <div class="form-group">
              <label>Choose Settlement Status</label>
        
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->settlement_status=="Submitted"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="settlement_status_0" name="settlement_status" value="Submitted">
                          <label class="form-check-label">Submitted</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->settlement_status=="Reviewed"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="settlement_status_1" name="settlement_status" value="Reviewed">
                          <label class="form-check-label">Reviewed</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->settlement_status=="Agreed"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="settlement_status_2" name="settlement_status" value="Agreed">
                          <label class="form-check-label">Agreed</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->settlement_status=="Rejected"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="settlement_status_3" name="settlement_status" value="Rejected">
                          <label class="form-check-label">Rejected</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->settlement_status=="Refer To Another"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="settlement_status_4" name="settlement_status" value="Refer To Another">
                          <label class="form-check-label">Refer To Another</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->settlement_status=="Close"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="settlement_status_5" name="settlement_status" value="Close">
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
              <a class="btn btn-danger" href="{{url('structuredsettlementapplicationform/edit/'.$dataRow->id)}}">
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
        