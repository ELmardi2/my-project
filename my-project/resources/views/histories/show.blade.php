@extends('defaults.default')

@section('title', 'show-history') <!--section page title -->

@section('content') <!--start content section -->
<div class="card">
    <div class="card-header">
        <h1>{{$history->title}}</h1>
    </div>
    <div class="card-body">
        <p>
            {{$history->details}}
        </p>
    </div>
    <div class="card-header">
        <h3>{{$history->added_by}}</h3>
    </div>
</div>
@stop <!--end content section -->