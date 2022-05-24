<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -m-4">

            @foreach( $films as $film )
            <div class="w-full p-4 lg:w-1/4 md:w-1/2">
                <a class="relative block overflow-hidden rounded h-96">
                    <img alt="affiche film" class="block object-scale-down object-center w-full h-full" src="{{ Storage::url($film->image)}}">
                </a>
                <div class="mt-4">
                    <h2 class="text-lg font-medium text-gray-900 title-font">{{$film->titre}}</h2>
                    <h3 class="mb-1 text-xs tracking-widest text-gray-500 title-font">{{$film->categories->genre}}</h3>
                 
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>