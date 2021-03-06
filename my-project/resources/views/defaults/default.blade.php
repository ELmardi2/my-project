<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> @yield('title', '|', 'Hekaity')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/app.css')}}" />
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/bootstrap.css')}}" />
</head>
<body>
    <div class="bg-info text-white p-4 mb-3">
        <a href="{{route('articles.index')}}" class=" btn btn-secondary">Articles</a>
        <a href="{{route('articles.create')}}" class=" btn btn-secondary">Create An Article</a>
        <a href="{{route('histories.index')}}" class=" btn btn-secondary">Histories</a>
        <a href="{{route('histories.create')}}" class=" btn btn-secondary">Create A History</a>
    </div>
   <div class="container mt-5">
    


   @yield('content')

   

   @include('defaults._footer')
   </div>
</body>
</html>