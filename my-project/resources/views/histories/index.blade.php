@extends('defaults.default')

@section('title', 'histories') <!--title of the page -->
 
<!-- what is  goining to show in this page as content-->

@section('content') <!--start content section -->
<h1>All histories Here !!!!!</h1>
@foreach ($histories as $history ) <!--start foreach -->
  <div class="card mt-4">
      <div class="card-body">
          <h3>
              <a href="{{route('histories.show', $history->id)}}">
                <!--title of the history -->
                  {{$history->title}}
              </a>
              <!--edit histories -->
            <a href="{{route('histories.edit', $history->id)}}" class="btn btn-secondary">Edit !</a>
            <form action="{{route('histories.destroy', $history->id)}}" method="POST"  onsubmit="return confirm('Are You Sure that you want delete this  history !?')" class="d-inline-block" action="{{route('histories.destroy', $history->id)}}" method="POST">  
                @csrf
                @method('DELETE') 
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </h3>
      </div>
      </div>  
@endforeach <!--endforeach -->

<!--the rest of the articles -->
{{$histories->links()}}

@endsection <!--end content section -->