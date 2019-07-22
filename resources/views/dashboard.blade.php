@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Your Posts</h3>
                    @if(count($posts) > 0)
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Controls</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <th scope="row">{{$post->title}}</th>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>
                                    {!! Form::open([ 'action' => ['PostsController@destroy', $post->id], 'method' =>'POST','class' => 'd-inline']) !!}
                                    {{ Form::hidden('_method' , 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!! Form::close() !!}
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <p>You have no posts yes</p>
                    @endif
                    <a class="btn btn-primary" href="/posts/create">Create Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
