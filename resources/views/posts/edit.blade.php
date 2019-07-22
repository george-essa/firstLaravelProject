@extends('layouts.app')
@section('content')
    <h1>Create post</h1>
    {!! Form::open(['method' => 'POST','enctype' => 'multipart/form-data' , 'action' => ['PostsController@update',$post->id]]) !!}
    <div class="form-group">
        {{Form::label('title', 'Post Title')}}
        {{Form::text('title',$post->title,['class' => 'form-control' , 'id' => 'title', 'placeholder' => 'Post Tiltle'])}}
    </div>
    <div calss="form-control">
        {{Form::label('body','Post Body')}}
        {{Form::textarea('body',$post->body,['class' => 'form-control', 'id' => 'article-ckeditor', 'placeholder' => 'Post body foes here'])}}
    </div>
    {{Form::file('cover_image',['class' => 'd-block mt-1'])}}
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('update post',['class' => 'btn btn-primary mt-2'])}}
    {!! Form::close() !!}
@endsection