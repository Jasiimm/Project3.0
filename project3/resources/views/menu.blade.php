@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
    
        
        <div class="grid grid-cols-3 gap-4">
            <!-- Pizza 1 -->
            <div class="bg-white rounded-lg shadow p-4">
                <img src="{{ asset('images/PizzaM.png') }}" alt="Pizza 1" class="w-full mb-2">
                <h2 class="text-xl font-bold">Pizza 1</h2>
                <p class="text-gray-600">Description of Pizza 1</p>
                <p class="text-gray-800 font-bold mt-2">$10.99</p>
            </div>
            
            <!-- Pizza 2 -->
            <div class="bg-white rounded-lg shadow p-4">
                <img src="{{ asset('images/chicken.png') }}" alt="Pizza 2" class="w-full mb-2">
                <h2 class="text-xl font-bold">Pizza 2</h2>
                <p class="text-gray-600">Description of Pizza 2</p>
                <p class="text-gray-800 font-bold mt-2">$12.99</p>
            </div>
            
            <!-- Pizza 3 -->
            <div class="bg-white rounded-lg shadow p-4">
                <img src="{{ asset('images/pizzap.png') }}" alt="Pizza 3" class="w-full mb-2">
                <h2 class="text-xl font-bold">Pizza 3</h2>
                <p class="text-gray-600">Description of Pizza 3</p>
                <p class="text-gray-800 font-bold mt-2">$14.99</p>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
    @endsection
