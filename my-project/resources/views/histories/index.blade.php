@extends('defaults.default')

@section('title', 'all-histories')

@section('content') <!--Start section content-->
        <h2 class="text-center"> All Histories Are Here</h2>
        @foreach ($histories as $history) <!--Start foreach-->
        <div class="card mt-3">
            <div class="card-body ">
                <h3 class="card-title">
                    <a href="{{url('histories.show', $history->id)}}">
                        {{$history->title}}
                    </a>
                </h3>
            </div>
        </div>
        @endforeach <!--End foreach-->
@stop <!--End content section