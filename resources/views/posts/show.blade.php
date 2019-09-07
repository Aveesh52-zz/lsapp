@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-danger">Back</a>
<div class="well">
<h3>{{$post->title}}</></h3>
<p></p>{{$post->body}}</p>

<p> written in {{$post->created_at}} by {{$post->user->name}}</p>
@if(!Auth::guest())
@if(auth()->user()->id == $post->user_id)
<a href="/posts/{{$post->id}}/edit" class="btn btn-danger">Edit</a>



{!! Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'POST','class'=>'pull-right']) !!}
 
{{Form::hidden('_method','DELETE')}}
        {{Form::submit('delete','',['class'=>'btn btn-primary'])}}


{!! Form::close() !!}
@endif
@endif
</div>


@endsection