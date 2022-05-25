
<section>
    <div class="w-full p-5 mx-auto mt-6 bg-gray-200 rounded-lg">
        <h1 class="flex justify-around pb-6 text-3xl text-black">Sorties de la semaine</h1>
        <div class="grid grid-cols-1 gap-10 lg:grid-cols-4 sm:grid-cols-2">
            @foreach ($filma as $film)
			<div>
                <a href="/" class="relative flex items-end justify-start w-full overflow-hidden text-left bg-center bg-cover rounded-lg affiche h-96 dark:bg-gray-500"
                    style="background-image: url({{ Storage::url($film->image) }});">
			</a>
				<div class="relative top-0 left-0 right-0 flex items-center mx-5 mt-3">
					<div class="flex flex-col justify-start text-center dark:text-gray-100">
						<span class="">
							@include('includes.seances')
						</span>
					</div>
					<h2 class="z-10 p-5">
                        <span rel="noopener noreferrer" href="#"
                            class="font-medium text-black text-md">{{ $film->titre }}</span>
                    </h2>
				</div>
			</div>
            @endforeach
        </div>
    </div>
</section>

