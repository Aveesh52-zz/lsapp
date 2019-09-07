@extends('layouts.app')

@section('content')

@if(count($posts)>0))

@foreach($posts as $post)
<div class="well">
<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
<p> written in {{$post->created_at}} by {{$post->user->name}}</p>
</div>
@endforeach
{{$posts->links()}}

@else
<p>dfdfdfdfd</p>
@endif

@endsection()