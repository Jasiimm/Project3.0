@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center h-screen">
        <div class="w-60 h-96 bg-gray-800 p-3 flex flex-col gap-1 rounded-br-3xl">
            <img src="{{ asset('images/chicken.png') }}" class="mx-3 h-32 object-cover" alt="Description">
            <div class="flex flex-col gap-8 mt-4">
                <div class="flex flex-row justify-between">
                    <div class="flex flex-col">
                        <span class="text-xl text-gray-50 font-bold">Pizza Chicken</span>
                        <p class="text-xs text-gray-400">Chicken, Bell Peppers, Tomato, Cheese</p>
                    </div>
                    <span class="font-bold text-red-600">$22.99</span>
                </div>
                <button class="hover:bg-sky-700 text-gray-50 bg-sky-800 py-2 rounded-br-xl">Add to cart</button>
            </div>
        </div>

        <!-- Repeat the above card structure for other items -->

        <!-- Card 2 -->
        <div class="w-60 h-96 bg-gray-800 p-3 flex flex-col gap-1 rounded-br-3xl mx-4">
            <img src="{{ asset('images/chicken.png') }}" class="mx-3 h-32 object-cover" alt="Description">
            <div class="flex flex-col gap-8 mt-4">
                <div class="flex flex-row justify-between">
                    <div class="flex flex-col">
                        <span class="text-xl text-gray-50 font-bold">Pizza Chicken</span>
                        <p class="text-xs text-gray-400">Chicken, Bell Peppers, Tomato, Cheese</p>
                    </div>
                    <span class="font-bold text-red-600">$22.99</span>
                </div>
                <button class="hover:bg-sky-700 text-gray-50 bg-sky-800 py-2 rounded-br-xl">Add to cart</button>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="w-60 h-96 bg-gray-800 p-3 flex flex-col gap-1 rounded-br-3xl mx-4">
            <img src="{{ asset('images/chicken.png') }}" class="mx-3 h-32 object-cover" alt="Description">
            <div class="flex flex-col gap-8 mt-4">
                <div class="flex flex-row justify-between">
                    <div class="flex flex-col">
                        <span class="text-xl text-gray-50 font-bold">Pizza Chicken</span>
                        <p class="text-xs text-gray-400">Chicken, Bell Peppers, Tomato, Cheese</p>
                    </div>
                    <span class="font-bold text-red-600">$22.99</span>
                </div>
                <button class="hover:bg-sky-700 text-gray-50 bg-sky-800 py-2 rounded-br-xl">Add to cart</button>
            </div>
        </div>
    </div>
@endsection

