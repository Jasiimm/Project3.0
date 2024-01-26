@extends('layouts.app')

@section('title', 'Order Status')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Order Status</h2>

                <p class="card-text">Order Bestelnummer: {{ $order->id }}</p>

                <p class="card-text">Status: <span id="orderStatus">{{ $order->status }}</span></p>

                <button class="btn btn-danger" onclick="cancelOrder()">Cancel Order</button>
            </div>
        </div>
    </div>

    <script>
        setTimeout(function () {
            updateOrderStatus('Bestelling wordt voorbereid');
        }, 5000); 

        setTimeout(function () {
            updateOrderStatus('In de oven');
        }, 10000); 

        setTimeout(function () {
            updateOrderStatus('Bestelling is onderweg');
        }, 15000); 


        setTimeout(function () {
            updateOrderStatus('Bestelling is bezorgd');
        }, 55000); 
        function cancelOrder() {
            window.location.href = "{{ route('products.index') }}";
        }

        function updateOrderStatus(newStatus) {
            document.getElementById('orderStatus').innerText = newStatus;
        }
    </script>
@endsection
