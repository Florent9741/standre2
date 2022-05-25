
<section class="py-6 lg:mt-12 sm:mt-4 md:mt-6 mx-auto w-full bg-gray-200 rounded-lg">
	<h1 class="text-3xl flex justify-around">Sorties de la semaine</h1>

	<div class="flex items-center justify-center">
		<div class="grid gap-8 mt-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
			@foreach( $filma as $film )
			<div class="w-full max-w-xs text-center">
				<a href="#" class=""><img class="object-cover object-center w-full h-96 mx-auto rounded-lg affiche" src="{{ Storage::url($film->image) }}" alt="avatar"/></a>

				<div class="mt-2 flex flex-col items-center justify-center">
					<h3 class="text-lg font-medium text-black">{{$film->titre}}</h3>
					<span class="">
					@include('includes.seances')
				</span>
				</div>
			</div>
			@endforeach

		</div>
	</div>
</section>