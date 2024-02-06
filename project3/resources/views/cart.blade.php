@extends('layouts.app')

@section('title', 'Shopping Cart')

@section('content')
<h2>Winkelmandje</h2>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

@if(count($cart) > 0)
<table class="table">
    <thead>
        <tr>
            <th>Product</th>
            <th>Hoeveelheid</th>
            <th>Prijs</th>
            <th>Totaal</th>
            <th>Actie</th>
        </tr>
    </thead>
    <tbody>
        @php
        $totalPrice = 0;
        @endphp

        @foreach($cart as $id => $item)
        @php
        $subtotal = $item['quantity'] * $item['price'];
        $totalPrice += $subtotal;
        @endphp

        <tr>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['quantity'] }}</td>
            <td>
                @if(isset($item['size']))
                €{{ number_format($item['price'], 2) }} ({{ ucfirst($item['size']) }})
                @else
                €{{ number_format($item['price'], 2) }}
                @endif
            </td>
            <td>€{{ number_format($subtotal, 2) }}</td>

            <td>
                <a href="{{ route('remove.from.cart', $id) }}" class="btn btn-danger">Verwijder</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="total-price">
    <strong>Totaal Prijs:</strong> €{{ number_format($totalPrice, 2) }}
</div>

<form action="{{ route('status') }}" method="post">
    @csrf
    <button type="submit" class="btn btn-success">Bestel nu!</button>
</form>

@else
<p>Je winkelmandje is leeg,</p>
@endif
@endsection