@extends('admin.layouts.app')

@section('title') Categories @endsection

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Categories</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a href="{{ route('admin.category.create') }}" class="btn btn-sm btn-outline-secondary">Create</a>
        </div>
    </div>
</div>

<div class="container">
@if (count($categories) === 0)
    <h3>No categories</h3>
@else
    <table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">Slug</th>
        <th scope="col">Title</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
@foreach($categories as $category)
        <tr>
        <td>{{ $category->slug }}</td>
        <td>{{ $category->title }}</td>
        <td>
            <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                        <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-secondary">Delete</button>
                        </form>
                    </div>
                </div>
            </td>
        </tr>
@endforeach
        </tbody>
    </table>
@endif
</div>

@endsection
