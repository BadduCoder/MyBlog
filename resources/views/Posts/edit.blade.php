@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">

        <h1 class="dispaly-3">Create Post</h1>
        {!! Form::open(['action' => ['PostController@update',$Post->id],'method' => 'POST']) !!}
            <div class="form-group">
              {{Form::label('title','Title')}}
              {{Form::text('title',$Post->title,['class'=>'form-control','placeholder'=>'Title'])}}
            </div>
            <div class="form-group">
              {{Form::label('body','Body')}}
              {{Form::textarea('body',$Post->body,['class'=>'form-control','placeholder'=>'Write Here...'])}}
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Update Post',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}

      </div>
    </div>
  </div>
@endsection
