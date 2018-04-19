@extends('defaults.default')

@section('title', 'show-article') <!--section page title -->

@section('content') <!--start content section -->
<div class="card">
    <div class="card-header">
        <h1>{{$article->title}}</h1>
    </div>
    <div class="card-body">
        <p>
            {{$article->details}}
        </p>
    </div>
</div>
@stop <!--end content section -->