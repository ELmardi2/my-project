@extends('defaults.default')

<!--title of page -->
@section('title', 'articles')
 
<!--/what is  goining to show in this page as content-->
@section('content') <!--start content section -->
<h1>All Articles Here !!!!!</h1>
@foreach ($articles as $article ) <!--start foreach -->
  <div class="card mt-4">
      <div class="card-body">
          <h3>
              <a href="{{route('articles.show', $article->id)}}">
                <!--title of the article -->
                  {{$article->title}}
              </a>
              <!--edit articles -->
            <a  href="{{route('articles.edit', $article->id)}}" class="btn btn-secondary">Edit !</a>
            <form action="{{route('articles.destroy', $article->id)}}" method="POST" onsubmit="return confirm('Are You Sure that you want delete this article !?')" class="d-inline-block" action="{{route('articles.destroy', $article->id)}}" method="POST">
               <!--protect my form csrf -->
                @csrf
                @method('DELETE') 
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </h3>
      </div>
      </div>  
@endforeach <!--endforeach -->

<!--the rest of the articles -->
{{$articles->links()}}

@endsection <!--end content section -->