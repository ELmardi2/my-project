@extends('defaults.default')

@section('title', 'show-history')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>{{$hitory->title}}</h1>
    </div>
    <div class="card-body">
        <p>
            {{$history->details}}
        </p>
        <span>
            {{$history->add_by}}
        </span>
    </div>
</div>
@stop