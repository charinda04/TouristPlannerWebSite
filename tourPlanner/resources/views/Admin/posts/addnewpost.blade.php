
@extends('Admin/index')

@section('content')

<div class="box-body">
    <div class="container">
    <form role="form" method="POST" action="{{url('/admin/addnewpost')}}" enctype="multipart/form-data">
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
    
    <div class="row">
            <div class="col-md-10">
                <div class="form-group">
                    <label>Image 1</label>
                    <input id="image1" type="file" class="form-control" name="image1" required>
                </div>
            </div>
        </div>

        {{--  <div class="row">
                <div class="col-md-10">
                    <div class="form-group">
                        <label>Image 2</label>
                        <input id="image2" type="file" class="form-control" name="image2" required>
                    </div>
                </div>
            </div>  --}}


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