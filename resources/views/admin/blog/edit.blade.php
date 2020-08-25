@extends('admin.layouts.app')

@section('title') Edit blog @endsection

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit blog</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a href="{{ URL::previous() }}" class="btn btn-sm btn-outline-secondary">Back</a>
        </div>
    </div>
</div>

<div class="container">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" enctype="multipart/form-data" action="{{ route('admin.blog.update', $blog->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" placeholder="enter-a-slug" value="{{ old('slug', $blog->slug) }}">
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter a title" value="{{ old('title', $blog->title) }}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="10" placeholder="Enter a description">{{ old('description', $blog->description) }}</textarea>
    </div>
    <div class="input-group">
        <input type="file" class="custom-file-input" id="cover" name="cover">
        <label class="custom-file-label" for="customFile">
            <span class="input-group-addon">
                <img class="file-thumb" src="/storage/upload/blog{{ $blog->id }}/cover.jpg">
            </span>
            Choose cover image
        </label>
    </div>
    <br><br>
    <button type="submit" class="btn btn-primary">Save</button>
    <br><br>
    </form>
    <script>
        CKEDITOR.replace('description', {
            filebrowserUploadUrl: "{{ route('admin.blog.upload', ['id' => $blog->id,'_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
        $('.input-daterange').datepicker({
            viewMode: "months", 
            minViewMode: "months"
        });
    </script>
</div>

@endsection
