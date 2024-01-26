@extends('layouts.app')

@section('title', "Stonk's Pizza")

@section('content')
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @foreach($products->chunk(4) as $productChunk)
        <div class="row" style="margin-bottom: 50px; margin-top: 50px;">
            @foreach($productChunk as $product)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $product->imagePath }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p class="card-text">{{ $product->description }}</p> 
                            <form action="{{ route('add.to.cart', $product->id) }}" method="GET">
                            <div class="pull-right price" style="font-weight: Bold; margin-bottom: 10px;">
                                {{-- Add a combo box for selecting pizza size --}}
                                <select name="size" id="size">
                                    <option value="small">Small - €{{ $product->getPriceBySize('small') }}</option>
                                    <option value="medium">Medium - €{{$product->getPriceBySize('medium') }}</option>
                                    <option value="large">Large - €{{ $product->getPriceBySize('large') }}</option>
                                </select>
                            </div>
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Toevoegen Aan Winkelmand</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection
