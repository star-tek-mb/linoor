@extends('admin.layouts.app')

@section('title') Create portfolio @endsection

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create portfolio</h1>
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

    <form method="POST" enctype="multipart/form-data" action="{{ route('admin.portfolio.store') }}">
    @csrf
    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" placeholder="enter-a-slug">
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter a title">
    </div>
    <div class="form-group">
        <label for="title">Client</label>
        <input type="text" class="form-control" id="client" name="client" placeholder="Enter a client">
    </div>
    <label for="category">Choose a category:</label>
    <select name="category_id" id="category_id" class="custom-select">
        <option value="" selected>No category</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->title }}</option>
        @endforeach
    </select>
    <label>Dates</label>
    <div class="input-group input-daterange">
        <input type="text" class="form-control" name="begin">
        <div class="input-group-append">
            <span class="input-group-text">to</span>
        </div>
        <input type="text" class="form-control" name="end">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="10" placeholder="Enter a description"></textarea>
    </div>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="cover" name="cover">
        <label class="custom-file-label" for="cover">Upload cover image</label>
    </div>
    <br><br>
    <div class="alert alert-warning" role="alert">
        Save portfolio before uploading photos.
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <br><br>
    </form>
    <script>
        CKEDITOR.replace('description');
        $('.input-daterange').datepicker({
            viewMode: "months", 
            minViewMode: "months"
        });
    </script>
</div>
@endsection
