@extends('layouts.app')

@section('content')
<h1>Create post</h1>
{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
    	<!-- label and real text  -->
    	{{Form::label('title', 'Title')}}
    	<!-- name, value + attribute in array -->
    	{{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Title'])}}
  	</br>
    	<!-- label and real text  -->
    	{{Form::label('body', 'Body')}}
    	<!-- name, value + attribute in array -->
    	{{Form::textarea('body','',['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body text'])}}
    </br>
    	{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
@endsection