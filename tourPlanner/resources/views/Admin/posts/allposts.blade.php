
@extends('Admin/index')

@section('content')

<div class="card-body">

  <div class="container-fluid">
   
    <a href="{{ url('admin/addnewpost') }}" class="btn btn-info">Add Location</a>
  </div>
  
  <br>
  <div id="table" class="dataTables_wrapper container-fluid dt-bootstrap4">
    <div class="row">
      <div class="row"><div class="col-sm-12">
        <table id="pending_table" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
          <thead>
            <tr role="row" >
              <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Title: activate to sort column descending" style="width: 280px;">
                Title
              </th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 355px;">
                Description
              </th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Tags: activate to sort column ascending" style="width: 316px;">
                Tags
              </th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 200px;">
                Created At
              </th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 270px;">
                
              </th>
            </tr>
          </thead>
          <tbody>

            
            @foreach($places as $place)
            <tr role="row" class="odd"  >
              <td class="sorting_1">{{ $place->title }}</td>
              <td style="height: 10" class="demo2">{{ $place->description }}</td>
              <td>{{ $place->tags }}</td>
              <td>{{ $place->created_at }}</td>
              <td >
                <form action="{{ url('admin/deletepost/'.sprintf("%s",$place->id ))}}" method="post">
                  {{ csrf_field() }}
                  <a href="{{ url('admin/viewpost/'.sprintf("%s",$place->id ))}}" class="btn btn-default">View</a>  <a href="{{ url('admin/editpost/'.sprintf("%s",$place->id ))}}" class="btn btn-default">Edit</a> 
                  <button type="submit" class="btn btn-default" >Delete</button>
                </form>
                
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr><th rowspan="1" colspan="1">Title</th><th rowspan="1" colspan="1">Description</th><th rowspan="1" colspan="1">Tags</th><th rowspan="1" colspan="1">Created At</th><th rowspan="1" colspan="1"></th></th></tr>
          </tfoot>
        </table></div></div>
        {{-- {{ $places->links() }} --}}
        <div class="row"><div class="col-sm-12 col-md-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
            
          </div>
        </div>
      </div>
    </div>
  </div>
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