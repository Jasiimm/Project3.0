@extends('layouts.app')

@section('title', "Stonk's Pizza")

@section('content')
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @foreach($products->chunk(4) as $productChunk)
        <div class="row" style="margin-top: 50px;">
            @foreach($productChunk as $product)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $product->imagePath }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <div class="pull-right price" style="font-weight: Bold; margin-bottom: 10px;">€{{ $product->price }}</div>
                            <form action="{{ route('add.to.cart', $product->id) }}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection
