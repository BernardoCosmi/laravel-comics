@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{-- Jumbotron --}}
    <div class="container-fluid hero">
    </div>

    <div class="container">
        <div class="container my-3">
            <div class="comics-grid">
                @foreach($comics as $comic)
                    <div class="comic-wrapper">
                        <div class="custom-card">
                            <div class="comic-img-wrapper">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}" class="comic-img">
                            </div>
                            <div class="comic-info">
                                <h5>{{ $comic['series'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="load-more-btn-wrapper">
                <button class="custom-btn">Load More</button>
            </div>
        </div>
    </div>
    
    <style>
    
    .comics-grid {
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }
    
    .comic-wrapper {
        padding: 0 15px;
        flex: 0 0 auto;
        width: 16.666667%; /* Equivalent to 'col-md-6' for 6 columns */
    }
    
    .custom-card {
        display: flex;
        flex-direction: column;
        height: 100%;
        margin-bottom: 1.5rem;
    }
    
    .comic-img-wrapper {
        width: 100%;
        padding-top: 100%; /* Aspect ratio 1:1 */
        position: relative;
        overflow: hidden;
    }
    
    .comic-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;

        object-fit: cover;
    }
    
    .comic-info {
        padding: .5rem;
    }
    
    .comic-info h5, .comic-info p {
        margin: .5rem 0;
    }
    
    .load-more-btn-wrapper {
        display: flex;
        justify-content: center;
        margin-top: 1.5rem;
    }
    
    .custom-btn {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: .375rem .75rem;
        border-radius: .25rem;
        cursor: pointer;
    }
    
    .custom-btn:hover {
        background-color: #0056b3;
    }
    </style>

@endsection