<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <title>My blog</title>
    </head>
    <body>
    	@include('inc.nav')
    	<div class="container">
            @include('inc.messages')
       	@yield('content')
   		</div>

        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    </body>
</html>
