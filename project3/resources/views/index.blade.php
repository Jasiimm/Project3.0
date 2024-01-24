@extends('layouts.app')

@section('content')
<div class="row">
    @foreach($stonk as $stonk)
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
                <img src="{{ asset('images') }}/{{ $stonk->image }}" class="card-img-top"/>
                <div class="card-body">
                    <h4 class="card-title">{{ $stonk->name }}</h4>
                    <p>{{ $stonk->description }}</p>
                    <p class="card-text"><strong>Price: </strong> ${{ $stonk->price }}</p>
                    <p class="btn-holder">
                        <a href="{{ route('addBook.to.cart', $stonk->id) }}" class="btn btn-outline-danger">Add to cart</a>
                    </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
