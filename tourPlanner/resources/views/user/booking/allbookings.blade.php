@extends('user/index')

@section('content')

<div class="container">
<br>
  <div id="table" class="dataTables_wrapper container-fluid dt-bootstrap4">
    <div class="row">
      <div class="row"><div class="col-sm-12">
        <table id="pending_table" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
          <thead>
            <tr role="row" >
              <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Title: activate to sort column descending" style="width: 280px;">
                Email
              </th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 355px;">
                Contact No
              </th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Tags: activate to sort column ascending" style="width: 316px;">
                Booked Date
              </th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 200px;">
                Rent Amount
              </th>
              
            </tr>
          </thead>
          <tbody>
            
            
            @foreach($bookings as $booking)
            <tr role="row" class="odd"  >
              <td class="sorting_1">{{ $booking->email }}</td>
              <td style="height: 10" class="demo2">{{ $booking->contact_no }}</td>
              <td>{{ $booking->date }}</td>
              <td>{{ $booking->rent }}</td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr><th rowspan="1" colspan="1">Email</th><th rowspan="1" colspan="1">Contact No</th><th rowspan="1" colspan="1">Booked Date</th><th rowspan="1" colspan="1">Rent Amount</th></th></tr>
          </tfoot>
        </table></div></div>
        {{-- {{ $bookings->links() }} --}}
        <div class="row"><div class="col-sm-12 col-md-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
            
          </div>
        </div>
      </div>
    </div>
  </div>


</div>

<br>

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