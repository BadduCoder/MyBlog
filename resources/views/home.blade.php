@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">   
      <div class="col-md-2">
        <!--<div class="card">
          <div class="card-header">User Profile</div>

          <div class="card-body">
              @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
              @endif
            -->
              <a href="posts/create" class="form-control btn btn-success">+Add Post</a>

          <!--</div>
        </div>-->
      </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2 class="display-5">
                        Your Posts
                    </h2>
                    <table class="table table-striped">
                      <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                      </tr>
                        @if(count($posts) >0)
                        <tr>
                          @foreach($posts as $post)
                            <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                            <td>
                            {!! Form::open(['action' => ['PostController@destroy',$post->id],'method' => 'POST']) !!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
                            {!! Form::close() !!}
                            </td>
                          </tr>
                          @endforeach
                        </tr>
                        @else
                          No Posts
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
