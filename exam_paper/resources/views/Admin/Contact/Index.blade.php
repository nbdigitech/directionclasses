@extends('Admin.layouts.Master')

@section('css')
<style type="text/css">
  #Category-error{
    margin-top: 40px;
  }
</style>
@endsection

@section('MainSection')
<div class="content">
 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                 <div class="card-header card-header-primary card-header-icon" style="margin-top: -15px;">
                  <div style="background-color: #E93F7A; padding: 10px; padding-left: 16px; padding-top:16px; border-radius: 3px;" style="width: 100%;">
                    <h4>View Contact</h4>
                  </div>
                  
                </div>
                <div class="card-body">
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                  </div>
                  <div class="material-datatables">
                    <table id="datatables" class="table table-no-bordered" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th style="font-weight: bold;">#</th>
                          <th style="font-weight: bold;">Name</th>
                          <th style="font-weight: bold;">Email</th>
                          <th style="font-weight: bold;">Contact</th>
                          <th style="font-weight: bold;">Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Contact</th>
                          <th>Action</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        @php $i = 1; @endphp
                      @foreach($data as $row)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$row->Name}}</td>
                          <td>{{$row->Email}}</td>
                          <td>{{$row->Phone}}</td>
                          <td>
                            <button type="button" class="btn btn-success" style="background-color:#E93F7A; ">View</button>
                          </td>
                        </tr>
                      @endforeach

                       
                        
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- end content-->
              </div>
              <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
          </div>
          <!-- end row -->
        </div>
      </div>
</div>
@endsection

@section('js')
   <script>
    $(document).ready(function() {
      $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search records",
        }
      });

      var table = $('#datatable').DataTable();

      // Edit record
      table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');
        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
      });

      // Delete a record
      table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
      });

      //Like record
      table.on('click', '.like', function() {
        alert('You clicked on Like button');
      });
    });
  </script>

@endsection