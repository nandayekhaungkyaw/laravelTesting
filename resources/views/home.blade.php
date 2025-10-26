@extends('app')

@section('content')
<div class="container mx-auto px-4 flex flex-col gap-4">

   <h1 class=" text-3xl font-bold text-center">MCB-5 Home Page
   </h1>

   <div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach($curries as $curry)
        <div class="border rounded-lg p-4">
            <img src="{{ $curry->image }}" alt="{{ $curry->name }}" class="w-full h-48 object-cover mb-4 rounded">
            <h2 class="text-xl font-semibold mb-2">{{ $curry->name }}</h2>
            <p class="text-gray-600 mb-2">{{ $curry->description }}</p>
            <p class="text-blue-600 font-bold">${{ $curry->price }}</p>
        </div>
        @endforeach
   </div>
</div>
@endsection
