@extends('layouts.app')

@section('content')
  <div class="row justify-content-center">
  @if(count($Posts)>0)
    @foreach($Posts as $Post)
    <div class="col-md-8 mb-2">
      <div class="card">
        <a href="/posts/{{$Post->id}}"><div class="card-header">{{$Post->title}}</div></a>
        <div class="card-body">
          {{$Post->body}}
        </div>
        <div class="card-footer">
          <small>Created at: {{$Post->created_at}}</small>
        </div>
      </div>
    </div>
    @endforeach
  @else
    <p>No Posts Found</p>
  @endif
  </div>
@endsection
