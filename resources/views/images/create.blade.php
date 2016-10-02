@extends('layout.master')
@section('content')
{!! Form::open(['url' => '/images/store', 'method'=>'POST', 'files'=>'true']) !!}
  <div class="form-group">
      {!! Form::label('Title', 'Title:') !!}
      {!! Form::text('title',null,['class'=>'form-control']) !!}
  </div>

  <label for="userfile">Image File</label>
  <input type="file" name="userfile">


  {!! Form::submit('Create Information', ['class' => 'btn btn-primary form-control']) !!}

{!! Form::close() !!}
@stop
