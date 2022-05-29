<div class="relative w-full mt-4 bg-center bg-cover rounded-lg page"
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9)), url({{ Storage::url($filma->image) }})">
    <div class="px-10 text-center lg:flex md:flex sm:block">
        <div
            class="flex flex-col py-12 mt-10 space-y-4 text-center md:w-full sm:w-full lg:text-left md:text-center sm:text-center">

            <h3 class="text-4xl font-semibold text-white lg:text-5xl ">{{ $filma->titre }}</h3>

            <p class="text-lg text-white"> Genre: @foreach ($filma->categories as $categorie)
                    {{ $categorie->genre }} &zwnj;
                @endforeach
            </p>

            <div class="flex flex-row w-full mx-auto space-x-4 justify-center lg:justify-start">
                @include('includes.bandeAnnonce')
                @include('includes.filmSeance')
            </div>

            <p class="text-white ">Sortie le : {{ $filma['date'] }}</p>
            <p class="text-white ">Durée: {{ $filma['duree'] }}</p>
            <p class="text-white ">De: {{ $filma['realisateur'] }}</p>
            <p class="text-lg  lg:w-3/4 text-white resumes ">{{ $filma['resume'] }}</p>
            @include('includes.synopsis')
            <a href="/"><i class="fa-solid fa-circle-arrow-left text-white mt-2 fa-2x hover:text-red-500"></i></a>
        </div>
        <div class="flex flex-row w-full justify-center lg:justify-end lg:mr-12">
            <img class="w-[380px] h-[560px] p-8 mt-8" src="{{ Storage::url($filma->image) }}" alt="">
        </div>
    </div>
</div>
