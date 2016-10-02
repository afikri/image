@extends('layout.master')
@section('content')
<h1>Image Information</h1>
  <a href="{{url('/images/create')}}" class="btn btn-success">Create Information</a>
  <hr>

  <table class="table table-striped table-bordered table-hover">
    <thead>
       <tr class="bg-info">
        <th>ID</th>
        <th>Title</th>
        <th>Image</th>
		<th>Action</th>
       </tr>
    </thead>

    <tbody>
      @foreach($images as $image)
       <tr>
        <td>{{ $image->id }}</td>
        <td>{{ $image->title }}</td>
        <td>
			<img alt="image" height="80" width="80" src="{{asset($image->file)}}" />
		</td>
		<td>
			<a href="{{url('images/show',$image->id)}}" class="btn btn-primary">Detail</a></td>
       </tr>
       @endforeach
    </tbody>
  </table>
@stop
