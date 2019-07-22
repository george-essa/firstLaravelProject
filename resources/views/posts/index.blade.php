@extends('layouts.app')
@section('content')
    <h1>posts</h1>
    @if(isset($posts))
        @foreach ($posts as $post)
            <div class="card card-width mb-3 d-block text-center" style="width: 18rem;">
               <div class="row">
                   <div class="col-md-4 col-12">
                        <img style="max-width:100%; height: 200px;" src="/storage/cover_images/{{$post->cover_image}}">
                   </div>
                   <div class="col-md-8 col-12">
                       <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                       <p class="list-group-item">created at {{$post->created_at}} by {{$post->user->name}}</p>
                   </div>
               </div>
            </div>

        @endforeach
        {{$posts->links()}}
    @else
        <p>There is no posts here</p>
    @endif
@endsection