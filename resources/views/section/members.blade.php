@extends('layouts.master')

@section('content')
<div style="margin-top:100px;"></div>
    <div class="container">
    <div class="card text-center border-success">
        <div class="card-header bg-success text-white">
            <h2>Our Team</h2> 
        </div>
        <img class="card-img-top" src="images/3.png" alt="Card image cap">
        <div class="card-body text-danger">
            <h5 class="card-title">The Team</h5>
            <p class="card-text">We are a group of tech enthuziasts trying to build something amazing through the use of our knowledge and technology.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div style="margin-top:50px;"></div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="images/pukar.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Pukar</h4>
                    <p class="card-text">Pukar is a Web Designer and Developer with an intrest in Machine Learning and Data Science</p>
                    <a href="#" class="btn btn-primary">Connect</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="images/raj.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Rajesh</h4>
                    <p class="card-text">Rajesh is a Python programmer with vast knowledge in Machine Learning and Data Science</p>
                    <a href="#" class="btn btn-primary">Connect</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="images/deep.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Dependra</h4>
                    <p class="card-text">Dependra is a Sun Certified Java Programmer and Android Developer. He is also known as Dost</p>
                    <a href="#" class="btn btn-primary">Connect</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
