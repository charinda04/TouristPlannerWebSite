@extends('user/index')

@section('content')

<div class="card-body">

    <div class="container-fluid">
       
        <a href="{{url('/user/rentplace')}}" class="btn btn-info">Add Property</a>
    </div>
      
      <br>
    <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
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
          <td></td>
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
          <tr><th rowspan="1" colspan="1">Title</th><th rowspan="1" colspan="1">Description</th><th rowspan="1" colspan="1">Tags</th><th rowspan="1" colspan="1">Created at</th><th rowspan="1" colspan="1"></th></th></tr>
        </tfoot>
      </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
    </div>


@endsection