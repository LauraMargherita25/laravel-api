@extends('layouts.admin')

@section('pageTitle', $post->title)

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ $post->title }}</h1>
                <h5>{{ $post->category->name }}</h5>
                <b>{{ $post->user->name }}</b> - <b>{{ $post->user->email }}</b><br>
                <p>{{ $post->content }}</p>
            </div>
        </div>
    </div>

@endsection