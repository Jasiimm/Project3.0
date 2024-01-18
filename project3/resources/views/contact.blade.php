@extends('layouts.app')

@section('content')
    <div class="bg-gray-100 min-h-screen py-8">
        <div class="container mx-auto">
            <div class="bg-white rounded-md shadow-md p-8 max-w-md mx-auto">
                <h1 class="text-3xl font-bold mb-6 text-gray-800">Contact</h1>
                <p class="text-gray-600 mb-4">This is the contact page.</p>
                <div class="mb-4">
                    <p class="text-gray-600">email: <a class="text-blue-600" href="mailto:werk@stonkspizza.com">werk@stonkspizza.com</a></p>
                </div>
                <div class="mb-4">
                    <p class="text-gray-600">phone number: <a class="text-blue-600" href="tel:0657772506">0657772506</a></p>
                </div>
                <div class="mb-4">
                    <p class="text-gray-600">address: 1234TB Stonks Street, Stonksville, Stonkland</p>
                </div>
            </div>
        </div>
    </div>
@endsection