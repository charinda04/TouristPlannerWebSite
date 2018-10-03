@extends('user/index')

@section('content')

<div class="card-body">

  <div class="container-fluid">
   
    <a href="{{url('/user/rentplace')}}" class="btn btn-info">Add Property</a>
  </div>
  
  <br>
  <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
    <div class="row"><div class="col-sm-12">
      <table id="pending_table" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
        <thead>
          <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Title: activate to sort column descending" style="width: 280px;">
              Title
            </th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 355px;">
              Description
            </th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Tags: activate to sort column ascending" style="width: 316px;">
              Type
            </th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Tags: activate to sort column ascending" style="width: 316px;">
              Status
            </th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 200px;">
              Created at
            </th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 270px;">
              
            </th>
          </tr>
        </thead>
        <tbody>
          
          @foreach($properties as $property)
          <tr role="row" class="odd">
            <td class="sorting_1">{{ $property->title }}</td>
            <td class="demo2" >{{ $property->summery }}</td>
            <td>{{ $property->type }}</td>
            <td>
              @if((($property->admin_permission) == 0) || (($property->status) == 0) )
              <div class="alert alert-danger alert-dismissible">
                <h5> Unpublished!</h5>
              </div>
              @else

              <div class="alert alert-info alert-dismissible">
               
                <h5></i> Published!</h5>
              </div>
              @endif
            </td>
            <td>{{ $property->created_at }}</td>
            <td >
              <form action="{{ url('user/deleteproperty/'.sprintf("%s",$property->id ))}}" method="post">
                {{ csrf_field() }}
                <a href="{{ url('user/viewproperty/'.sprintf("%s",$property->id ))}}" class="btn btn-info">View</a>  <a href="{{ url('user/editproperty/'.sprintf("%s",$property->id ))}}" class="btn btn-info">Edit</a> 
                <button type="submit" class="btn btn-info" >Delete</button>
              </form>
              
            </td>    
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr><th rowspan="1" colspan="1">Title</th><th rowspan="1" colspan="1">Description</th><th rowspan="1" colspan="1">Tags</th><th rowspan="1" colspan="1">Status</th><th rowspan="1" colspan="1">Created at</th><th rowspan="1" colspan="1"></th></th></tr>
        </tfoot>
      </table></div></div></div>
    </div>








    <script>

      $(document).ready(function () {
        $('#pending_table').DataTable( {
          dom: 'Bfrtip',
          buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
          ]
        } );
        $('#completed_table').DataTable( {
          dom: 'Bfrtip',
          buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
          ]
        } );
      });
      
      
      //  $('#pending_table').DataTable( {
      //    buttons: [
      //        'copy', 'excel', 'pdf'
      //    ]
    //  } );
    
    $(document).ready(function () {
      
      var table = $('#pending_table').DataTable();
      
      new $.fn.dataTable.Buttons( table, {
        buttons: [
        'copy', 'excel', 'pdf'
        ]
      } );
      
      table.buttons().container()
      .appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );
      
      
    });
    
    
    
    
    
    
    
  </script>

  @endsection