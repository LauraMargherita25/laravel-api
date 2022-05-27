@extends('layouts.admin')

@section('PageTitle', 'Admin - Dashboard')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a class="btn btn-primary" href="{{ route('admin.posts.create') }}">Create a post</a>
                    <a class="btn btn-primary" href="{{ route('admin.posts.index') }}">All post</a>
                </div>
            </div>
            
        </div>
    </div> --}}

    <div class="row">
        
        <x-navbar color="light" /> 

        <div class="col-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a class="btn btn-primary" href="{{ route('admin.posts.create') }}">Create a post</a>
                    <a class="btn btn-primary" href="{{ route('admin.posts.index') }}">All post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
