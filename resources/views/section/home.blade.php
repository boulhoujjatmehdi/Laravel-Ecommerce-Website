@extends('layouts.master')

    @section('content')
    <div class="container" style="margin-top:50px;">
    <div style="margin-top:100px;"></div>
        <div class="card border-success">
            <div class="card-header  text-center text-white bg-success">
                <h3>About NEPMART</h3>
            </div>
            <div class="card-body text-success">
                <h5 class="card-title">NEPMART | AI Based Content Rating System</h5>
                <p class="card-text">NEPMART is an AI based product rating systerm thar gives ratings to the products based on user reviews
                    of the products. This system uses Sentiment Analysis to classify a review into a good or bad review
                    and generates rating based on how good or bad the review is.</p>
                <a href="#" class="btn btn-primary">Know More</a>
                <a href="{{ route('section.products') }}" class="btn btn-warning">See Demo</a>
            </div>
        </div>
    </div>
    
    @endsection
