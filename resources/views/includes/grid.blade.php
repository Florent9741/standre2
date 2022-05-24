<grid class="flex flex-col p-10 mt-12 text-gray-800 bg-gray-100 rounded-lg ">
	<h1 class="text-3xl">Actuellement à l'affiche</h1>
	<div class="grid w-full grid-cols-1 pt-6 mt-6 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 gap-x-6 gap-y-12">
        @foreach( $filma as $film )
		<div>
			<a href="#" class="block h-64 bg-black rounded-lg shadow-lg">
				<img alt="content" class="object-contain object-center w-full h-full" src="{{ Storage::url($film->image) }}">
			</a>
			<div class="flex items-center justify-between mt-3">
				<div>
					<a href="#" class="font-medium">{{$film->titre}}</a>
					<a class="flex items-center" href="#">
						<div class="ml-1 text-xs font-medium text-indigo-500 btn">Séances</div>
					</a>
				</div>
				
			</div>
		</div>
        @endforeach
	</div>
</grid>