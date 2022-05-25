
<div class="w-full dark:bg-gray-500 mt-6 rounded-lg" style="background-image: url('{{ Storage::url('/img/cinema-banniere.jpg')}}'); background-position: center center; background-blend-mode: multiply; background-size: cover;">
	<div class="container flex flex-col flex-wrap content-center justify-center p-4 py-20 mx-auto md:p-10">
		<h1 class="text-5xl antialiased font-semibold leading-none text-center dark:text-gray-100">Abonnez-vous</h1>
		<p class="pt-2 pb-8 text-xl antialiased text-center dark:text-gray-100">Recevez la liste des sorties ciné</p>
		<div class="flex flex-row">
			<input type="text" placeholder="example@email.com" class="w-3/5 p-3 rounded-l-lg sm:w-2/3">
			<button type="button" class="w-2/5 p-3 font-semibold text-white rounded-r-lg sm:w-1/3 bg-red-700">Inscription</button>
		</div>
	</div>
</div>

<section>
            <div class="w-full p-5 mx-auto bg-gray-200 rounded-lg mt-6">
                <h1 class="flex justify-around pb-6 text-black text-3xl">Prochaines Sorties</h1>
                <div class="grid grid-cols-1 gap-10 lg:grid-cols-4 sm:grid-cols-2">
                    @foreach( $films as $film )
                    <div class="relative flex items-end justify-start w-full text-left bg-center bg-cover h-96 dark:bg-gray-500 overflow-hidden rounded-lg" style="background-image: url({{ Storage::url($film->image)}});">
                        <div class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b dark:via-transparent dark:from-gray-900 dark:to-gray-900"></div>
                        <div class="absolute top-0 left-0 right-0 flex items-center justify-between mx-5 mt-3">
                            <div class="flex flex-col justify-start text-center dark:text-gray-100">
                                <span class="text-3xl font-semibold leading-none tracking-wide">{{ date('d M', strtotime($film->date)) }}</span>
                            </div>
                        </div>
                        <h2 class="z-10 p-5">
                            <a rel="noopener noreferrer" href="#" class="font-medium text-md hover:underline dark:text-gray-100">{{$film->titre}}</a>
                        </h2>
                    </div>
                    @endforeach
                </div>
            </div>
</section
