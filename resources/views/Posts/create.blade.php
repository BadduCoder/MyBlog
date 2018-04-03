@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">

        <h1 class="dispaly-3">Create Post</h1>
        {!! Form::open(['action' => 'PostController@store','method' => 'POST']) !!}
            <div class="form-group">
              {{Form::label('title','Title')}}
              {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
            </div>
            <div class="form-group">
              {{Form::label('body','Body')}}
              {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Write Here...'])}}
            </div>
            {{Form::submit('Create Post',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}

      </div>
    </div>
  </div>
@endsection
