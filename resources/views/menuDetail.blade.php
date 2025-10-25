

@extends('app')
@section('content')


<div class="max-w-4xl mx-auto my-12 p-6 bg-white shadow-lg rounded-lg">
    <!-- Image -->
    <div class="flex justify-center mb-6">
        <img src="{{ $curry->image }}" alt="{{ $curry->name }}" class="w-full md:w-2/3 rounded-lg shadow-md">
    </div>

    <!-- Curry Name -->
    <h1 class="text-3xl font-bold text-gray-800 mb-4 text-center">{{ $curry->name }}</h1>

    <!-- Description -->
    <p class="text-gray-600 text-lg mb-6 leading-relaxed">{{ $curry->description }}</p>

    <!-- Price -->
    <p class="text-xl font-semibold text-green-600 mb-6">Price: ${{ $curry->price }}</p>

    <!-- Buttons -->
    <div class="flex justify-center gap-4">
        <a href="{{ route('menu') }}"
           class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-2 rounded transition duration-300">
            Back to Menu
        </a>

        
    </div>
</div>
@endsection
