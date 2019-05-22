@extends('layouts.app')

@section('content')
<h1>Posts</h1>
		@if(count($posts) > 0)
       	<ul class="list-group">
       		@foreach($posts as $post)
       			<li class="list-group-item"><h3><a href="posts/{{$post->id}}">{{$post->title}}</h3></a>
       			<small>Created at {{$post->created_at}}</small>
       			<small class='float-right'>Edited at {{$post->updated_at}}</small></li>
       		@endforeach
       		<!-- pagination -->
       		{{$posts->links()}}
       	</ul>
       	@else
       	<p> Il n'y a pas de post </p>
       	@endif
@endsection