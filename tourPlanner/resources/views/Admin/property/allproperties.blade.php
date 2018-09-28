@extends('Admin/index')

@section('content')

<div class="card-body">




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
                            @if(($property->admin_permission) == 0)
                                <a href="{{ url('admin/propertyauthenticate/'.sprintf("%s",$property->id ))}}" class="btn btn-info">Authenticate</a>
                            
                            @else
                                <a href="{{ url('admin/propertyunauthenticate/'.sprintf("%s",$property->id ))}}" class="btn btn-info">Unathenticate</a>
                            
                            @endif

                            <a href="{{ url('admin/propertydelete/'.sprintf("%s",$property->id ))}}" class="btn btn-info">delete</a>

                            
                      {{-- <form action="{{ url('user/deleteproperty/'.sprintf("%s",$property->id ))}}" method="post">
                          {{ csrf_field() }}
                          <button type="submit" class="btn btn-info" >Delete</button>
                        </form> --}}
                      
                     </td>    
                  </tr>
                @endforeach
                </tbody>
                  <tfoot>
                    <tr><th rowspan="1" colspan="1">Title</th><th rowspan="1" colspan="1">Description</th><th rowspan="1" colspan="1">Tags</th><th rowspan="1" colspan="1">Status</th><th rowspan="1" colspan="1">Created at</th><th rowspan="1" colspan="1"></th></th></tr>
                  </tfoot>
                </table></div></div>
                <div class="row"><div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                        
                    </div></div></div></div>
              



    </div>

 

    @endsection