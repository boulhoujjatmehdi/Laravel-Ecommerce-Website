@extends('layouts.master')
@section('content')
<div class="container">
    <table class="table table-bordered">
        <thead class="thead thead-dark">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Subtotal</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach(Cart::content() as $row)

                <tr>
                    <td>
                        <p><strong>{{ $row->name }}</strong></p>
                        <p>{{ $row->options->has('size') ? $row->options->size : ''}}</p>
                    </td>
                    <td> <b class="pl-5 pr-5 pt-2 pb-2 bg-light" style="border-radius:10px;">{{ $row->qty }}</b> <a href="{{ route('addtocart', ['id' => $row->id ]) }}" class="btn btn-success btn-sm"><b>+</b></a> </td>
                    <td>Rs. {{$row->price }}</td>
                    <td>Rs. {{$row->total }}</td>
                    <td><a href="{{ route('remove', ['id' => $row->rowId ]) }}" class="btn btn-danger btn-sm">X</a>  </td>
                </tr>

            @endforeach

        </tbody>
        
        <tfoot>
            <tr>
                <td colspan="3">&nbsp;</td>
                <td>Subtotal</td>
                <td>{{ Cart::subtotal() }}</td>
            </tr>
            <tr>
                <td colspan="3">&nbsp;</td>
                <td>Tax</td>
                <td>{{ Cart::tax()}}</td>
            </tr>
            <tr>
                <td colspan="3">&nbsp;</td>
                <td>Total</td>
                <td>Rs. <strong>{{ Cart::total()}}</strong></td>
            </tr>
        </tfoot>
    </table>

    <a href="{{ route('checkout')}}" class="btn btn-success float-right">Proceed to checkout</a>
</div>
@endsection