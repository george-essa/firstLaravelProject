@extends('layouts.app')
@section('content')
    <h1>{{$title}} </h1>
    <p>This is index page</p>
    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
    <a href="{{ route('register') }}" class="btn btn-success">sigun up</a>
@endsection