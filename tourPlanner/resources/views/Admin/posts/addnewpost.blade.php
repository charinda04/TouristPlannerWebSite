
@extends('Admin/index')

@section('content')

<div class="box-body">
    <div class="container">
    <form role="form" method="POST" action="{{url('/admin/addnewpost')}}">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-md-10">
            <div class="form-group">
                <label>Title</label>
                <input id="title" type="text" class="form-control" name="title" required>
            </div>
        </div>
        
    </div>
 
    <div class="row">
        <div class="col-md-10">
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" rows="3" placeholder="Enter Here" autocomplete="off"  required></textarea>
            </div>
        </div>
        
    </div>
    <button type="button" class="btn btn-default">Add Photo 1</button><button type="button" class="btn btn-default">Add Photo 2</button>
    <div class="row">
        <div class="col-md-10">
            <div class="form-group">
                <label>Tags</label>
                <textarea name="tags" class="form-control" rows="3" placeholder="Enter Here" autocomplete="off"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-default">Cancel</button>
        </div>
    </div>

    </form>
    </div>

</div><!-- /.box-body -->

  @endsection