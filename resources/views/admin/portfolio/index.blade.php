@extends('admin.layouts.app')

@section('title') Portfolios @endsection

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Portfolios</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a href="{{ route('admin.portfolio.create') }}" class="btn btn-sm btn-outline-secondary">Create</a>
        </div>
    </div>
</div>

<div class="container">
@foreach($portfolios as $portfolio)
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h3>{{ $portfolio->title }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            <a target="_blank" href="{{ route('site.portfolio.show', $portfolio->slug) }}" class="btn btn-sm btn-outline-secondary">View</a>
                <a href="{{ route('admin.portfolio.edit', $portfolio->id) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                <form action="{{ route('admin.portfolio.destroy', $portfolio->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-secondary">Delete</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <img src="/storage/upload/portfolio{{ $portfolio->id }}/cover.jpg" class="img-fluid">
        </div>
        <div class="col-9">
            <p><b>Заказчик:</b> {{ $portfolio->client }}</p>
            <p><b>Дата разработки:</b> {{ date("F Y", $portfolio->begin) }} - {{ date("F Y", $portfolio->end) }}</p>
            <p><b>Описание:</b></p>
            <p>{{ strip_tags($portfolio->description) }}</p>
        </div>
    </div>
@endforeach

@if (count($portfolios) === 0)
<h3>No portfolios</h3>
@else
<br><br><br>
<div class="row justify-content-center">
    {{ $portfolios->links() }}
</div>
@endif
</div>

@endsection
