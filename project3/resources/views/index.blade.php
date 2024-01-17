@extends('layouts.app')

@section('content')
    <div>
        <p class="text-lg"></p>

        <div class="flex items-center justify-center h-screen">
            <div class="w-60 h-96  bg-gray-800 p-3 flex flex-col gap-1 rounded-br-3xl mx-4">
            <img src="{{ asset('images/PizzaM.png') }}"  class="mx-3 h-32" alt="Description">
                <div class="flex flex-col gap-4">
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col">
                            <span class="text-xl text-gray-50 font-bold">Pizza Margherita</span>
                            <p class="text-xs text-gray-400">Tomato, Cheese</p>
                        </div>
                        <span class="font-bold  text-red-600">$20.99</span>
                    </div>
                    <button class="hover:bg-sky-700 text-gray-50 bg-sky-800 py-2 rounded-br-xl">Add to cart</button>
                </div>
            </div>
            <div class="w-60 h-96  bg-gray-800 p-3 flex flex-col gap-1 rounded-br-3xl mx-4">
            <img src="{{ asset('images/chicken.png') }}"  class="mx-3 h-32" alt="Description">
                <div class="flex flex-col gap-8">
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col">
                            <span class="text-xl text-gray-50 font-bold">Pizza Chicken</span>
                            <p class="text-xs text-gray-400">Chicken, Bell Peppers, Tomato, Cheese</p>
                        </div>
                        <span class="font-bold  text-red-600">$22.99</span>
                    </div>
                    <button class="hover:bg-sky-700 text-gray-50 bg-sky-800 py-2 rounded-br-xl">Add to cart</button>
                </div>
            </div>
            <div class="w-60 h-96  bg-gray-800 p-3 flex flex-col gap-1 rounded-br-3xl mx-4">
            <img src="{{ asset('images/pizzap.png') }}" class="mx-3 h-32" alt="Description">

                <div class="flex flex-col gap-3">
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col">
                            <span class="text-xl text-gray-50 font-bold">Pizza Pepperoni</span>
                            <p class="text-xs text-gray-400">Pepperoni, Tomato, Cheese</p>
                        </div>
                        <span class="font-bold  text-red-600">$22.99</span>
                    </div>
                    <button class="hover:bg-sky-700 text-gray-50 bg-sky-800 py-2 rounded-br-xl">Add to cart</button>
                </div>
            </div>
            <div class="w-60 h-96  bg-gray-800 p-3 flex flex-col gap-1 rounded-br-3xl mx-4">
                <img src="{{ asset('images/pizzah.png') }}"  class="mx-3 h-32" alt="Description">
                <div class="flex flex-col gap-3">
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col">
                            <span class="text-xl text-gray-50 font-bold">Pizza ham</span>
                            <p class="text-xs text-gray-400">Ham, Tomato, Cheese, Olive</p>
                        </div>
                        <span class="font-bold  text-red-600">$25.99</span>
                    </div>
                    <button class="hover:bg-sky-700 text-gray-50 bg-sky-800 py-2 rounded-br-xl">Add to cart</button>
                </div>
            </div>
        </div>
@endsection
