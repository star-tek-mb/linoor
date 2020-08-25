@extends('admin.layouts.app')

@section('title') Blogs @endsection

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Blogs</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a href="{{ route('admin.blog.create') }}" class="btn btn-sm btn-outline-secondary">Create</a>
        </div>
    </div>
</div>

<div class="container">
@foreach($blogs as $blog)
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h3>{{ $blog->title }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            <a target="_blank" href="{{ route('site.blog.show', $blog->slug) }}" class="btn btn-sm btn-outline-secondary">View</a>
                <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-secondary">Delete</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <img src="/storage/upload/blog{{ $blog->id }}/cover.jpg" class="img-fluid">
        </div>
        <div class="col-9">
            <p><b>Описание:</b></p>
            <p>{{ strip_tags($blog->description) }}</p>
        </div>
    </div>
@endforeach

@if (count($blogs) === 0)
<h3>No blogs</h3>
@else
<br><br><br>
<div class="row justify-content-center">
    {{ $blogs->links() }}
</div>
@endif
</div>

@endsection
