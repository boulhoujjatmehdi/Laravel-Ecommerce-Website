@extends('layouts.master')
@section('content')
    @include('partials.slider')
    <div class="container-fluid">
        <h3 class="description"> Recommended Movies for You </h3><br>
        <div class="row">
            <div class="col-md-3 col-6 mar">
                <img src="images/1.jpg" class="image" alt="Movie Poster">
                <div class="description">
                    <b>48 Hours</b>
                    <br> 2018
                </div>
            </div>
            <div class="col-md-3 col-6 mar">
                <img src="images/2.jpg" class="image" alt="Movie Poster">
                <div class="description">
                    <b>Black Panther</b>
                    <br> 2018
                </div>
            </div>
            <div class="col-md-3 col-6 mar">
                <img src="images/3.jpg" class="image" alt="Movie Poster">
                <div class="description">
                    <b> Game Night</b>
                    <br> 2018
                </div>
            </div>
            <div class="col-md-3 col-6 mar">
                <img src="images/4.jpg" class="image" alt="Movie Poster">
                <div class="description">
                    <b>Pacific Rim</b>
                    <br> 2018
                </div>
            </div>

            <div class="col-md-3 col-6 mar">
                <img src="images/6.jpg" class="image" alt="Movie Poster">
                <div class="description">
                    <b>Tomb Raider</b>
                    <br> 2018
                </div>
            </div>
        </div>
    </div>

@endsection
