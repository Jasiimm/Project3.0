@extends('layouts.app')

@section('title', 'Shopping Cart')

@section('content')
    <h2>Shopping Cart</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(count($cart) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $id => $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>€{{ $item['price'] }}</td>
                        <td>€{{ $item['quantity'] * $item['price'] }}</td>
                        <td>
                            <a href="{{ route('remove.from.cart', $id) }}" class="btn btn-danger">Remove</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <form action="{{ route('update.cart') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-primary">Update Cart</button>
        </form>

    @else
        <p>Your cart is empty.</p>
    @endif
@endsection
