@extends('admin.layouts.app')

@section('title') Edit portfolio @endsection

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit portfolio</h1>
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

    <form method="POST" enctype="multipart/form-data" action="{{ route('admin.portfolio.update', $portfolio->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" placeholder="enter-a-slug" value="{{ old('slug', $portfolio->slug) }}">
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter a title" value="{{ old('title', $portfolio->title) }}">
    </div>
    <div class="form-group">
        <label for="title">Client</label>
        <input type="text" class="form-control" id="client" name="client" placeholder="Enter a client" value="{{ old('client', $portfolio->client) }}">
    </div>
    <label for="category">Choose a category:</label>
    <select name="category_id" id="category_id" class="custom-select">
        <option value="" selected>No category</option>
        @foreach($categories as $category)
            <option @if ($category->id == old('category_id', $portfolio->category_id)) selected @endif value="{{ $category->id }}">{{ $category->title }}</option>
        @endforeach
    </select>
    <label>Dates</label>
    <div class="input-group input-daterange">
        <input type="text" class="form-control" name="begin" value="{{ old('begin', date('m/d/yy', $portfolio->begin)) }}">
        <div class="input-group-append">
            <span class="input-group-text">to</span>
        </div>
        <input type="text" class="form-control" name="end" value="{{ old('end', date('m/d/yy', $portfolio->end)) }}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="10" placeholder="Enter a description">{{ old('description', $portfolio->description) }}</textarea>
    </div>
    <div class="input-group">
        <input type="file" class="custom-file-input" id="cover" name="cover">
        <label class="custom-file-label" for="customFile">
            <span class="input-group-addon">
                <img class="file-thumb" src="/storage/upload/portfolio{{ $portfolio->id }}/cover.jpg">
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
            filebrowserUploadUrl: "{{ route('admin.portfolio.upload', ['id' => $portfolio->id,'_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
        $('.input-daterange').datepicker({
            viewMode: "months", 
            minViewMode: "months"
        });
    </script>
</div>

@endsection
