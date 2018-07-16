@extends('layouts.master') @section('content')

<div class="container">
    <div class="card border-primary">
        <div class="row" style="margin:10px 0;">
            <div class="col-md-3">
                <img src="{{ URL::to('images/2.jpg') }}" class="image" alt="Movie Poster">
            </div>
            <div class="col-md-4" style="margin: auto 0">
                <h5>Men's Denim Jeans</h5>
                <h5>4.5 Stars</h5>
                <h5>Rs 3000</h5>
            </div>
            <div class="col-md-5">
                <h5>Recommended Similar Products</h5>

            </div>
        </div>

        <div>

        </div>
        <hr> @if(Session::has('info'))
        <div class="alert alert-success text-center" style="margin:20px;">
            {{ Session::get('info') }}
        </div>
        @endif
        <div class="row">
            
            <div class="col-md-6" id="review1">
                @guest
                    <div class="card-body bg-light">
                        <h5 style="display:inline-block">Please Log In to Write a Review</h5>&nbsp; &nbsp;
                        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                    </div>
                

                @else
                    <form action="{{ route('write', ['id' => 1 ]) }}" method="post">
                        @include('partials.errors')
                        <div class="form-group">
                            <label for="reviewbox">
                                <h5>Your Review</h5>
                            </label>
                            <textarea type="text" class="form-control" id="reviewbox" aria-describedby="reviewlHelp" placeholder="Write a Review" style="min-height:100px"
                                name="review" required></textarea>
                            <small id="reviewHelp" class="form-text text-muted">Tell us how you feel about the product.</small>
                        </div>
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-primary">Submit
                            </button/>
                    </form>
                @endguest
                <hr>
                <p>The product rating is generated based on the review you provide</p>
            </div>

            <div class="col-md-6" id="review">
                <h5>Previous Reviews</h5>
                <div class="card bg-light mycard">
                    <div class="card-body">
                        <h5 class="card-title">Pukar &nbsp; &nbsp;
                            <span class="badge badge-success">4.6</span>
                        </h5>
                        <p class="card-text">This is the best denim I have ever brought. Recommend it for everyone.</p>
                    </div>
                </div>

                <div class="card bg-light mycard">
                    <div class="card-body">
                        <h5 class="card-title">Dependra &nbsp; &nbsp;
                            <span class="badge badge-success">4.5</span>
                        </h5>
                        <p class="card-text">Comfortable and lightweight. I love it.</p>
                    </div>
                </div>

                <div class="card bg-light mycard">
                    <div class="card-body">
                        <h5 class="card-title">Rajesh &nbsp; &nbsp;
                            <span class="badge badge-danger">2.3</span>
                        </h5>
                        <p class="card-text">I dont like the colour. Price is too expensive.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection
