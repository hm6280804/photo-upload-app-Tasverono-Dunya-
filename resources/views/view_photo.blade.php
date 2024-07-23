@extends('layouts.layout')



@section('main')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <h2>Photos</h2>
        @if ($photos->isEmpty())
            <h2 class="alert alert-danger">
                <i class="fas fa-exclamation-circle me-2"></i>
                    No photos to show
            </h2>
        @else
        <div class="row">
            @foreach ($photos as $photo)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('uploads/' . $photo->filename) }}" class="card-img-top" alt="{{ $photo->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $photo->title }}</h5>
                            <a href="{{ route('pic.show', $photo->id) }}" class="btn btn-primary">Full View</a>
                            <form action="{{ route('pic.delete', $photo->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @endif
    </div>
@endsection