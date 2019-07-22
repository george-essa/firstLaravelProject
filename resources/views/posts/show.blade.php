@extends('layouts.app')
@section('content')
    <a href="/posts" class="btn btn-dark text-left mb-2">Back</a>
    <div class="card card-width mb-3 d-block text-center" style="width: 18rem;">
        <img style="max-width:100%; max-height: 500px" src="/storage/cover_images/{{$post->cover_image}}">
        <h2>{{$post->title}}</h2>
        <p class="list-group-item">{!!$post->body!!}</p>
        <p class="list-group-item">created at {{$post->created_at}} by {{$post->user->name}}</p>
    </div>
    @if(!Auth::guest() && Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-success mb-2">Edit</a>
        {!! Form::open([ 'action' => ['PostsController@destroy', $post->id], 'method' =>'POST']) !!}
            {{ Form::hidden('_method' , 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
    @endif
@endsection