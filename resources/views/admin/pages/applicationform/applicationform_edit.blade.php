
@extends("admin.layout.master")
@section("title","Edit Application Form")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Application Form</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('applicationform/list')}}">Datatable </a></li>
              <li class="breadcrumb-item"><a href="{{url('applicationform/create')}}">Create New </a></li>
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
            <h3 class="card-title">Edit / Modify Application Form</h3>
            <div class="card-tools">
              <ul class="pagination pagination-sm float-right">
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('applicationform/create')}}"> 
                        Create 
                        <i class="fas fa-plus"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('applicationform/list')}}"> 
                        Data 
                        <i class="fas fa-table"></i>
                    </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('applicationform/export/pdf')}}">
                    <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('applicationform/export/excel')}}">
                    <i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"title="Excel"></i>
                  </a>
                </li>
              </ul>
            </div>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('applicationform/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
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
                        <label for="how_much_money_do_you_need">How much money do you need</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->how_much_money_do_you_need)){
                            ?>
                            value="{{$dataRow->how_much_money_do_you_need}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="How much money do you need?" id="how_much_money_do_you_need" name="how_much_money_do_you_need">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="what_was_the_date_of_your_accident">What was the date of your accident</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->what_was_the_date_of_your_accident)){
                            ?>
                            value="{{$dataRow->what_was_the_date_of_your_accident}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="What was the date of your accident?" id="what_was_the_date_of_your_accident" name="what_was_the_date_of_your_accident">
                      </div>
                    </div>
                </div>
                
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>What state is your case in?</label>
                                  <select class="form-control select2" style="width: 100%;"  id="state_case" name="state_case">
                                    
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
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>What kind of case do you have?</label>
                                  <select class="form-control select2" style="width: 100%;"  id="case_type" name="case_type">
                                    
                                        <option value="">Please Select</option>
                                        @if(count($dataRow_CaseType)>0)
                                            @foreach($dataRow_CaseType as $CaseType)
                                                <option 
                                        @if(isset($dataRow->id))
                                            @if($dataRow->id==$CaseType->id)
                                                selected="selected" 
                                            @endif
                                        @endif 
                                         value="{{$CaseType->id}}">{{$CaseType->name}}</option>
                                                
                                            @endforeach
                                        @endif
                                        
                                  </select>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>How did you hear about  advantage lending?</label>
                                  <select class="form-control select2" style="width: 100%;"  id="how_did_you_heard" name="how_did_you_heard">
                                    
                                        <option value="">Please Select</option>
                                        @if(count($dataRow_HearAbout)>0)
                                            @foreach($dataRow_HearAbout as $HearAbout)
                                                <option 
                                        @if(isset($dataRow->id))
                                            @if($dataRow->id==$HearAbout->id)
                                                selected="selected" 
                                            @endif
                                        @endif 
                                         value="{{$HearAbout->id}}">{{$HearAbout->name}}</option>
                                                
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
              <!-- checkbox -->
              <div class="form-group">
              <label>How should we contact you?</label>
        
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  
                                <?php 
                                if($dataRow->how_should_we_contact_you=="Email Me"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="how_should_we_contact_you_0" name="how_should_we_contact_you" value="Email Me">
                          <label class="form-check-label">Email Me</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  
                                <?php 
                                if($dataRow->how_should_we_contact_you=="SMS Me"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="how_should_we_contact_you_1" name="how_should_we_contact_you" value="SMS Me">
                          <label class="form-check-label">SMS Me</label>
                        </div>
                
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
                        
                        class="form-control" placeholder="Enter Street Address" id="street_address" name="street_address">
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
                        
                        class="form-control" placeholder="Enter  ZIP Code" id="zip_code" name="zip_code">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="attorney__first_name">Attorney  First Name</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->attorney__first_name)){
                            ?>
                            value="{{$dataRow->attorney__first_name}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter First Name" id="attorney__first_name" name="attorney__first_name">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="attorney__last_name">Attorney  Last Name</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->attorney__last_name)){
                            ?>
                            value="{{$dataRow->attorney__last_name}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Last Name" id="attorney__last_name" name="attorney__last_name">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="law_firm_name">Law Firm Name</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->law_firm_name)){
                            ?>
                            value="{{$dataRow->law_firm_name}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Law Firm Name" id="law_firm_name" name="law_firm_name">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="law_firm_phone">Law Firm Phone</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->law_firm_phone)){
                            ?>
                            value="{{$dataRow->law_firm_phone}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Law Firm Phone" id="law_firm_phone" name="law_firm_phone">
                      </div>
                    </div>
                </div>
                
        <div class="row">
            <div class="col-sm-12">
              <!-- radio -->
              <div class="form-group">
              <label>Choose Case Status</label>
        
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->case_status=="New"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="case_status_0" name="case_status" value="New">
                          <label class="form-check-label">New</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->case_status=="Reviewing"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="case_status_1" name="case_status" value="Reviewing">
                          <label class="form-check-label">Reviewing</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->case_status=="Reviewed"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="case_status_2" name="case_status" value="Reviewed">
                          <label class="form-check-label">Reviewed</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->case_status=="Rejected"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="case_status_3" name="case_status" value="Rejected">
                          <label class="form-check-label">Rejected</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->case_status=="Approve"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="case_status_4" name="case_status" value="Approve">
                          <label class="form-check-label">Approve</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->case_status=="Closed"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="case_status_5" name="case_status" value="Closed">
                          <label class="form-check-label">Closed</label>
                        </div>
                
                    </div>
                </div>
            </div>
            
        <div class="row">
            <div class="col-sm-12">
              <!-- radio -->
              <div class="form-group">
              <label>Choose Application Status</label>
        
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->application_status=="New"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="application_status_0" name="application_status" value="New">
                          <label class="form-check-label">New</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->application_status=="Verified"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="application_status_1" name="application_status" value="Verified">
                          <label class="form-check-label">Verified</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->application_status=="Not Verified"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="application_status_2" name="application_status" value="Not Verified">
                          <label class="form-check-label">Not Verified</label>
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
              <a class="btn btn-danger" href="{{url('applicationform/edit/'.$dataRow->id)}}">
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
        