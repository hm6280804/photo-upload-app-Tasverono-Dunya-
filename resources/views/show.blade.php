@extends('layouts.layout')


@section('main')
    <div class="container mt-4 mb-4">
        <h2>{{ $photo->title }}</h2>
        <img src="{{ asset('uploads/' . $photo->filename) }}" class="img-fluid" alt="{{ $photo->title }}">
        <a href="{{ route('pics.view') }}" class="btn btn-secondary mt-3">Back to Photos</a>
    </div>
@endsection