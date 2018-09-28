
@extends('Admin/index')

@section('content')

<div class="box-body">
    <div class="container">
            @foreach($places as $place)
    <form role="form" method="POST" action="{{url('/admin/editpost/'.sprintf("%s",$place->id ))}}">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-md-10">
            <div class="form-group">
                <label>Title</label>
                <input id="title" type="text" class="form-control" name="title" value="{{ $place->title }}" required>
            </div>
        </div>
        
    </div>

    <div class="row">
            <div class="col-md-10">
                <div class="form-group">
                    <label>Latitude</label>
                    <input id="latitude" type="text" class="form-control" name="latitude" value="{{ $place->latitude }}" required>
                </div>
            </div>
            
        </div>

        <div class="row">
                <div class="col-md-10">
                    <div class="form-group">
                        <label>Longitude</label>
                        <input id="longitude" type="text" class="form-control" name="longitude" value="{{ $place->longitude }}" required>
                    </div>
                </div>
                
            </div>
 
    <div class="row">
        <div class="col-md-10">
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" rows="3" placeholder="Enter Here" autocomplete="off" value="" required>{{ $place->description }}</textarea>
            </div>
        </div>
        
    </div>
    <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Current image</label>
                    <img class="img-fluid rounded" src="{{ asset('locations/'.sprintf("%s",$place->photo1 )) }}" alt="">  
                </div>
            </div>
        </div>

<div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Image 1</label>
                <input id="image1" type="file" class="form-control" name="image1" >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="form-group">
                <label>Tags</label>
                <textarea name="tags" class="form-control" rows="3" placeholder="Enter Here" value="" autocomplete="off">{{ $place->tags }}</textarea>
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
    @endforeach
    </div>

</div><!-- /.box-body -->

  @endsection