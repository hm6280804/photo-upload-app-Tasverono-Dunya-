@extends('layouts.layout')
@section('style')
<style>
    body {
        background-color: #f0f0f0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .upload-form {
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .btn-upload {
        border-radius: 15px;
        padding: 10px 20px;
        text-align: center;
        text-transform: uppercase;
        font-size: 18px;
        font-family: 'Dancing Script', cursive;
        color: #fff;
        background-color: #6c757d;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .btn-upload:hover {
        transform: scale(1.1);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
</style>
@endsection

@section('main')


@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>   
@endif



@if (session('error'))
    <div class="lert alert-danger">
        {{ session('error') }}
    </div>
@endif
<div class="upload-form">
    <h2 class="mb-4">Upload Photo</h2>
    <form action="{{ route('pro-photo') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
            @error('title')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="file" class="form-label">Choose Photo</label>
            <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" value="{{ old('file') }}">
            @error('file')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div>
        <div class="d-flex align-items-center">
            <button type="submit" class="btn btn-upload me-2">Upload</button>
            <button type="button" class="btn btn-primary" onclick="window.history.back();">Back</button>
        </div>
    </form>
</div>
@endsection