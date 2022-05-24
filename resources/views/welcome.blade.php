@extends('layouts.app')

@section('main')
<section class="text-gray-600 body-font">
    <div class="container px-5 py-16 mx-auto">
        <div class="flex flex-col">
            <div class="h-1 overflow-hidden bg-gray-200 rounded">
                <div class="w-24 h-full bg-red-700"></div>
            </div>
            <div class="flex flex-col flex-wrap py-6 mb-12 sm:flex-row">
                <h1 class="mb-2 text-2xl font-medium text-gray-900 sm:w-2/5 title-font sm:mb-0"> SORTIE DE LA SEMAINE</h1>

            </div>
        </div>
        <div class="flex flex-wrap -mx-4 -mt-4 -mb-10 sm:-m-4">
            @foreach( $filma as $film )
            <div class="p-4 mb-6 border border-gray-400 rounded-lg md:w-1/3 sm:mb-0">

                <div class="object-contain overflow-hidden h-96">

                    <img alt="content" class="object-contain object-center w-full h-full" src="{{ Storage::url($film->image) }}">
                </div>
                <h2 class="mt-5 text-xl font-medium text-gray-900 title-font">{{$film->titre}}</h2>
                <p class="mt-2 text-base leading-relaxed resume">{{$film->resume}}</p>
                <a class="inline-flex items-center mt-3 text-indigo-500">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>

            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

@section('content')
@include('includes.content')
@endsection
