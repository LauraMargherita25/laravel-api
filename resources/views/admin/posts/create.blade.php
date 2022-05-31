@extends('layouts.admin')

@section('pageTitle', 'Create a new post')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ route('admin.posts.store') }}" method="post" enctype='multipart/form-data'>
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">{{ __('Title') }}</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    </div>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="slug" class="form-label">{{ __('Slug') }}</label>
                        <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}">
                    </div>
                    <input type="button" value="Generate slug" id="btn-slugger">
                    @error('slug')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="post_img" class="form-label">Multiple files input example</label>
                        <input class="form-control" type="file" id="post_img" name="post_img" accept="image/*" multiple>
                    </div>
                    @error('post_img')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="content" class="form-label">{{ __('Content') }}</label>
                        <textarea class="form-control" id="content" rows="10" name="content">{{ old('content') }}</textarea>
                    </div>
                    @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    
                    <select class="form-select" aria-label="Default select example" name="category_id" id="category_id">
                        <option value="">Select a category</option>

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                @if ($category->id == old('category_id')) selected @endif>
                                    {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>

@endsection