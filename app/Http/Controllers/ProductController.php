<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Review;
use Auth;

class ProductController extends Controller
{
    public function getIndex()
    {
        $products = Product::all();
        return view('section.products', ['products' => $products]);
    }

    public function getProduct($id)
    {
        $product = Product::where('id','=',$id)->with('reviews.user')->first();             //Same as Post::find($id)  = sign in where clausecan also  be removed
        return view('section.product', ['product' => $product]);
    }

    public function postWriteReview(Request $request, $id)
    {
        $this->validate($request, [ 
            'review' => 'required|min:5',
        ]);

        $user = Auth::user();

        $review = new Review([
            'review' => $request->input('review'),
            'user_id' => Auth::id(),
            'product_id' => $id,
            'rating' => mt_rand(10, 50)/10
        ]);

        $review->save();
        $avg = Review::where('product_id','=',$id)->avg('rating');
        
        /* $product= Product::where('id','=',$id)->first();
        $product->rating = $avg;
        $product->save(); */

        Product::where('id','=',$id)->update(['rating' => $avg]);

        return redirect()->back()->with('info', 'Review Recorded. Thank You for the Review');
    }
}
