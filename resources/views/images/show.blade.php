@extends('layout.master')
@section('content')
<h1>Image Information</h1>
<form class="form-horizontal">   
	<img src="{{asset($images->file) }}" height="150" />
	<div class="form-group">
		<label class="col-sm-2 control-label">Title</label>
       	<div class="col-sm-10">
        	<p class="form-control-static">{{$images->title }}</p
       	</div>
  	</div>
</form>
<a href="{{ url('/images') }}" class="btn btn-warning">Back</a>
@stop

      

