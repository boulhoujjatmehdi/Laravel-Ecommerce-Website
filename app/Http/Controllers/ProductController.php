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
        $product = Product::where('id','=',$id)->with('reviews')->with('users')->get();              //Same as Post::find($id)  = sign in where clausecan also  be removed
        return view('section.product', ['product' => $product]);
    }

    public function postWriteReview(Request $request, $id)
    {
        $this->validate($request, [ 
            'review' => 'required|min:5',
        ]);
        $user = Auth::user();
       /*  if(!$user)
        {
            return redirect()->back();
        } */
        $review = new Review([
            'review' => $request->input('review'),
            'user_id' => Auth::id(),
            'product_id' => $id,
            'rating' => 2.5
        ]);

        $review->save();
        return back()->with('info', 'Thank You for the Review');
    }
}
