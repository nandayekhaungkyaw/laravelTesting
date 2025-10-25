
@extends('app')

@section('content')
 <div class="container mx-auto px-4">

    <div class="grid grid-cols-1 gap-3">
        @include('partials.menu_search')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

        @foreach($curries as $curry)
        <div class="border rounded-lg p-4">
@php
    $imageSrc = Str::startsWith($curry->image, ['http://', 'https://'])
        ? $curry->image
        : asset('images/' . $curry->image);
@endphp

<img src="{{ $imageSrc }}" alt="{{ $curry->name }}" class="w-full h-48 object-cover mb-4 rounded">

            <h2 class="text-xl font-semibold mb-2">{{ $curry->name }}</h2>
            <p class="text-gray-600 mb-2">{{ Str::limit($curry->description, 50) }}</p>
         <div class="flex justify-between items-center">
               <p class="text-blue-600 font-bold">${{ $curry->price }}</p>
               <a href="{{ route('menu.detail', $curry->id) }}" class=" text-red-400 underline font-bold italic  px-3 py-1 mt-2">
            See More
        </a>
         </div>


        </div>
        @endforeach


    </div>
     <div>
            {{ $curries->appends(request()->query())->links() }}
        </div>

 </div>
@endsection


