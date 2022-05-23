@extends('layouts.app')
@section('main')
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col">
      <div class="h-1 overflow-hidden bg-gray-200 rounded">
        <div class="w-24 h-full bg-indigo-500"></div>
      </div>
      <div class="flex flex-col flex-wrap py-6 mb-12 sm:flex-row">
        <h1 class="mb-2 text-2xl font-medium text-gray-900 sm:w-2/5 title-font sm:mb-0">SORTIES DE LA SEMAINE</h1>
      </div>
    </div>
    <div class="flex flex-wrap -mx-4 -mt-4 -mb-10 sm:-m-4">
      <div class="p-4 mb-6 md:w-1/3 sm:mb-0">
        <div class="h-64 overflow-hidden rounded-lg">
          <img alt="content" class="object-cover object-center w-full h-full" src="https://dummyimage.com/1203x503">
        </div>
        <h2 class="mt-5 text-xl font-medium text-gray-900 title-font">Shooting Stars</h2>
        <p class="mt-2 text-base leading-relaxed resume">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
        <a class="inline-flex items-center mt-3 text-indigo-500">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <div class="p-4 mb-6 md:w-1/3 sm:mb-0">
        <div class="h-64 overflow-hidden rounded-lg">
          <img alt="content" class="object-cover object-center w-full h-full" src="https://dummyimage.com/1204x504">
        </div>
        <h2 class="mt-5 text-xl font-medium text-gray-900 title-font">The Catalyzer</h2>
        <p class="mt-2 text-base leading-relaxed resume">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
        <a class="inline-flex items-center mt-3 text-indigo-500">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <div class="p-4 mb-6 md:w-1/3 sm:mb-0">
        <div class="h-64 overflow-hidden rounded-lg">
          <img alt="content" class="object-cover object-center w-full h-full" src="https://dummyimage.com/1205x505">
        </div>
        <h2 class="mt-5 text-xl font-medium text-gray-900 title-font">The 400 Blows</h2>
        <p class="mt-2 text-base leading-relaxed resume">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
        <a class="inline-flex items-center mt-3 text-indigo-500">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>
@endsection

@section('content')
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">

              @foreach ($films as $film)
                <div class="w-full p-4 lg:w-1/4 md:w-1/2">
                    <a class="relative block h-48 overflow-hidden rounded">
                        <img alt="ecommerce" class="block object-cover object-center w-full h-full"
                            src="{{ $film['image'] }}">
                    </a>
                    <div class="mt-4">
                        <h3 class="mb-1 text-xs tracking-widest text-gray-500 title-font">{{ $film['id_categorie'] }}</h3>
                        <h2 class="text-lg font-medium text-gray-900 title-font">{{ $film['titre'] }}</h2>
                    </div>
                </div>
               @endforeach
                
            </div>
        </div>
    </section>
@endsection
