
@extends("admin.layout.master")
@section("title","Create New Team Member")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Team Member</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('teammember/list')}}">Team Member Data</a></li>
              <li class="breadcrumb-item active">Create New Team Member</li>
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
            <h3 class="card-title">Create New Team Member</h3>
            <div class="card-tools">
              <ul class="pagination pagination-sm float-right">
                <li class="page-item"><a class="page-link bg-primary" href="{{url('teammember/list')}}"> Data <i class="fas fa-table"></i></a></li>
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
          <form action="{{url('teammember')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="member_name">Member Name</label>
                        <input type="text" class="form-control" placeholder="Enter Member Name" id="member_name" name="member_name">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="member_designation">Member Designation</label>
                        <input type="text" class="form-control" placeholder="Enter Member Designation" id="member_designation" name="member_designation">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="member_responsible">Member Responsible</label>
                        <input type="text" class="form-control" placeholder="Enter Member Responsible For?" id="member_responsible" name="member_responsible">
                      </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->

                      <table class="table table-bordered">
                          <thead>
                              <tr>
                                  <th>SL</th>
                                  <th>Relevant Experience</th>
                                  <th></th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr class="crud-item" id="tr1">
                                <td>1</td>
                                <td><input type="text" class="form-control" placeholder="Enter Relevant Experience" id="relevant_experience" name="relevant_experience[]"></td>
                                <td>
                                  <button type="button" onclick="deleteRow('tr1')" data-id="tr1" class="btn btn-danger">&times;</button>
                                </td>
                              </tr>
                          </tbody>
                          <tfoot>
                              <tr>
                                <td colspan="3">
                                  <a class="btn btn-success" href="javascript:addmore();"><i class="fas fa-plus"></i> More Relevant Experience Row</a>
                                </td>
                              </tr>
                          </tfoot>
                      </table>

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input donay -->

                      <table class="table table-bordered">
                          <thead>
                              <tr>
                                  <th>SL</th>
                                  <th>Education</th>
                                  <th></th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr class="crud-education-item" id="tr1">
                                <td>1</td>
                                <td>
                                  <input type="text" class="form-control" placeholder="Enter Education" id="education" name="education[]">
                                </td>
                                <td>
                                  <button type="button" onclick="deleteRowEducation('tr1')" data-id="tr1" class="btn btn-danger">&times;</button>
                                </td>
                              </tr>
                          </tbody>
                          <tfoot>
                              <tr>
                                <td colspan="3">
                                  <a class="btn btn-success" href="javascript:addmoreEducation();"><i class="fas fa-plus"></i> More Education Row</a>
                                </td>
                              </tr>
                          </tfoot>
                      </table>

                    </div>
                </div>
                
                
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Choose Member Image</label>
                                    <!-- <label for="customFile">Choose Member Image</label> -->

                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="member_image" name="member_image">
                                      <label class="custom-file-label" for="customFile">Choose Member Image</label>
                                    </div>
                                </div>
                            </div>
                        </div>
        <div class="row">
            <div class="col-sm-12">
              <!-- radio -->
              <div class="form-group">
              <label>Choose Member Status</label>
        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" 
                          id="module_status_0" name="module_status" value="Active">
                          <label class="form-check-label">Active</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio" 
                          id="module_status_1" name="module_status" value="Inactive">
                          <label class="form-check-label">Inactive</label>
                        </div>
                
                    </div>
                </div>
            </div>
                   
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
              <a class="btn btn-danger" href="{{url('teammember/create')}}"><i class="far fa-times-circle"></i> Reset</a>
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

    <script>
    function refreshSerial(){
        var r=1;
        $.each($(".crud-item"),function(key,row){
            $(this).attr("id","tr"+r);
            $(this).find("td:first").html(r);
            $(this).find("td:eq(2)").find("button:eq(1)").attr("onclick","deleteRow('tr"+r+"')");
            r++;
        });
    }

    function refreshSerialEducation(){
        var r=1;
        $.each($(".crud-education-item"),function(key,row){
            $(this).attr("id","tr"+r);
            $(this).find("td:first").html(r);
            $(this).find("td:eq(2)").find("button:eq(1)").attr("onclick","deleteRowEducation('tr"+r+"')");
            r++;
        });
    }

    function deleteRow(place){
        var item=$(".crud-item").length;
        if(item>1)
        {
            //var itemID=$(place).parent().parent().attr("id");
            $("#"+place).remove()
        }
        refreshSerial(); 
    }
    
    function deleteRowEducation(place){
        var item=$(".crud-education-item").length;
        if(item>1)
        {
            //var itemID=$(place).parent().parent().attr("id");
            $("#"+place).remove()
        }
        refreshSerialEducation(); 
    }


    function addmore(){
            $("tr[class^='crud-item']:last").after($("tr[class^='crud-item']:last").clone());
            refreshSerial(); 
    }

    function addmoreEducation(){
            $("tr[class^='crud-education-item']:last").after($("tr[class^='crud-education-item']:last").clone());
            refreshSerialEducation(); 
    }
    </script>

@endsection
        