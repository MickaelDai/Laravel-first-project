@extends('layouts.app')

@section('content')
<h1>{{$post->title}}</h1>
<a href="/posts" class="btn btn-primary btn-lg">Go back</a>
<div>
       {!!$post->body!!}
</div>
<hr>
<small>Created at {{$post->created_at}}</small></li>
<!-- <small>Modifié le {{$post->updated_at}}</small> -->
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

{!!Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'POST', 'class' => 'float-right'])!!}

{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete', ['class' => "btn btn-danger"])}}
{!!Form::close()!!}
@endsection