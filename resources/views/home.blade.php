@extends('layouts.layout')

@section('style')
<style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap');

        body {
            background-color: #f0f0f0;
            color: #333;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .btn-neon {
            border: 2px solid;
            border-radius: 15px;
            padding: 10px 20px;
            text-align: center;
            text-transform: uppercase;
            font-size: 20px;
            font-family: 'Dancing Script', cursive;
            position: relative;
            overflow: hidden;
            transition: 0.5s;
            cursor: pointer;
            color: #fff;
            margin: 10px;
            background-color: transparent;
        }
        .btn-neon:before, .btn-neon:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #ff006e, #8338ec, #3a86ff, #ffbe0b, #fb5607, #ff006e);
            background-size: 400%;
            z-index: -1;
            transition: 0.5s;
        }
        .btn-neon:before {
            filter: blur(5px);
        }
        .btn-neon:after {
            filter: blur(10px);
        }
        .btn-neon:hover:before, .btn-neon:hover:after {
            background-position: 200%;
            transition: all 0.5s;
        }
        .btn-neon:hover {
            transform: scale(1.1);
        }
        .btn-neon i {
            margin-right: 10px;
        }
        .btn-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex: 1;
        }
    </style>
@endsection

@section('main')
<div class="btn-container">
    <button class="btn-neon" onclick="window.location.href='{{ route('pic.add') }}'">
        <i class="fas fa-plus"></i> Add Photo
    </button>
    <button class="btn-neon" onclick="window.location.href='{{ route('pics.view') }}'">
        <i class="fas fa-images"></i> View Photos
    </button>
</div>
@endsection


