@extends('layouts.app')

@section('content')
  <div class="row justify-content-center">
    <div class="col-md-8">
      <a href="/posts" class="btn btn-info">Back</a>
      <h1 class="display-3">
        {{$Post->title}}
      </h1>
      <hr>
      <h3 class="dispaly-5">
        {{$Post->body}}
      </h3>
      <br>
      <small>Written by: {{$Post->author}}</small><br>
      <small>Created at: {{$Post->created_at}}</small>

      @if(!Auth::guest())
          @if(Auth::user()->id == $Post->user_id)
            <hr><br>
            <a href="/posts/{{$Post->id}}/edit/" class="btn btn-warning">Edit</a>
            {!! Form::open(['action' => ['PostController@destroy',$Post->id],'method' => 'POST']) !!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
            {!! Form::close() !!}
          @endif
      @endif
    </div>
  </div>

@endsection
