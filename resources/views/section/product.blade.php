@extends('layouts.master')
@section('content')

<div class="container">
    <div class="card border-primary">
        <div class="row" style="margin:10px 0;">
            <div class="col-md-3">
                <img src="{{asset($product->image)}}" class="image" alt="Movie Poster">
            </div>
            <div class="col-md-4" style="margin: auto 0">
                <h5>{{ $product->name }}</h5>
                <h4><span class="badge badge-success">{{ $product->rating }}</span> Stars</h4>
                <h5>Rs. {{ $product->price }}</h5>
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
                <form action="{{ route('write', ['id' => $product->id ]) }}" method="post">
                    @include('partials.errors')
                    <div class="form-group">
                        <label for="reviewbox">
                            <h5>Your Review</h5>
                        </label>
                        <textarea type="text" class="form-control" id="reviewbox" aria-describedby="reviewlHelp"
                            placeholder="Write a Review" style="min-height:100px" name="review" required></textarea>
                        <small id="reviewHelp" class="form-text text-muted">Tell us how you feel about the product.</small>
                    </div>
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary" id="submit"> Submit </button>
                </form>
                @endguest
                <hr>
                <p>The product rating is generated based on the review you provide</p>
            </div>

            <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>

            <script>
                let reviewtext;
                $("#reviewbox").change(function () {
                    reviewtext = $('#reviewbox').val();
                });

                $("#submit").click(function (event) {
                    let message = {
                        review: reviewtext
                    }

                   /*  $.post("http://127.0.0.1:80/predict.py", JSON.stringify(message), function (response) {
                        var rating = response.prediction.positive.tofixed(1);
                        alert("Hello Rating");
                        //$("#rating").text(response.prediction.positive.tofixed(1));
                    }); */
                    alert("Making Request");
                    $.ajax({
                        type: "POST",
                        url: "http://127.0.0.1:80/predict",
                        data: JSON.stringify(message),
                        success: function (response) {
                            alert("Success");
                        },
                        error: function (data) {
                            alert("Fail");
                        },
                    });
                });

            </script>

            <div class="col-md-6" id="review">
                <h5>Previous Reviews</h5>
                @foreach ($product->reviews as $review)
                <div class="card bg-light mycard">
                    <div class="card-body">
                        <h5 class="card-title">{{ $review->user->name }} &nbsp; &nbsp;
                            <span class="badge badge-success">{{ $review->rating }}</span>
                        </h5>
                        <p class="card-text">{{ $review->review }}</p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>
</div>

@endsection
