<grid class="flex flex-col p-10 mt-12 text-gray-800 bg-gray-100 rounded-lg ">
	<h1 class="text-3xl">Actuellement à l'affiche</h1>
	<div class="grid w-full grid-cols-1 pt-6 mt-6 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 gap-x-6 gap-y-12">
        @foreach( $filma as $film )
		<div class="">
			<a href="#" class="block rounded-lg h-[378px] affiche overflow-hidden">
				<img alt="content" class="object-contain object-center w-full h-full" src="{{ Storage::url($film->image) }}">
			</a>
			<div class="flex justify-center mt-3">
				<div>
					<span class="font-medium">{{$film->titre}}</span>
					<a class="flex justify-center" href="#">
						@include('includes.seances')
					</a>
				</div>
			</div>
		</div>
        @endforeach
	</div>
</grid>