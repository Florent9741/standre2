<div class="detail">
    <div class="w-2/5 m-5 mb-9">
        <h1 class="text-center text-3xl m-4"> Synopsis</h1>
        <p class="my-4">{{ $filma['resume'] }}</p>

        <div class="ligne">
            <p class="w-1/2 my-4 "> réaliser par : </p>
            <p class="w-1/2 text-right my-4">{{ $filma['realisateur'] }}</p>
        </div>
        <div class="ligne ">
            <p class="w-1/2 my-4"> genre : </p>
            <p class="w-1/2 text-right my-4">{{ $filma->categories->genre }}</p>
        </div>
        <div class="ligne">
            <p class="w-1/2 my-4"> durée : </p>
            <p class="w-1/2 text-right my-4">{{ $filma['duree'] }}</p>
        </div>
        <div class="ligne">
            <p class="w-1/2 my-4"> date : </p>
            <p class="w-1/2 text-right my-4">{{ $filma['date'] }}</p>
        </div>
    </div>

    <button
        class="relative group my-4 overflow-hidden px-6 h-12 rounded-full flex space-x-2 items-center bg-gradient-to-r from-slate-500 to-purple-800 hover:to-lime-800">
        <a class="relative text-sm text-white" href="/{{ $filma->id }}">RETOUR </a>
        <div class="flex items-center -space-x-3 translate-x-3">
            <div
                class="w-2.5 h-[1.6px] rounded bg-white origin-left scale-x-0 transition duration-300 group-hover:scale-x-100">
            </div>
            <svg xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 stroke-white -translate-x-2 transition duration-300 group-hover:translate-x-0"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </div>
    </button>

</div>
