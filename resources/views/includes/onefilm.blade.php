<div class="w-full h-screen relative  page bg-cover bg-center "
    style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('img/1.jpg')">
    <div class="absolute flex justify-center items-center w-full h-full z-10 ">
        <div class="px-16  h-full flex items-center justify-start">

            <div class=" flex flex-col space-y-4 py-12 w-3/4 ">


                <h3 class="text-2xl font-semibold text-white ">{{ $filma['titre'] }}</h3>
                <p class="text-lg text-white"> Genre : {{ $filma->categories->genre }}</p>
                <div class="flex space-x-4 flex-row w-full">
                    <button
                        class=" px-3  items-center shadow-md rounded-lg bg-orange-400  space-x-2 py-2 justify-center flex w-auto ">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-white font-semibold">Bande-annonce</span>
                    </button>
                    <button
                        class=" px-3  items-center shadow-md rounded-lg bg-gray-500 bg-opacity-50  space-x-2 py-2 justify-center flex w-auto">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-white font-semibold">SEANCES</span>
                    </button>
                </div>

                <p class="text-lg text-white">Sortie le : {{ $filma['date'] }}/{{ $filma['duree'] }}/ De :
                    {{ $filma['realisateur'] }}</p>
                <p class="text-lg text-white resumes w-3/4 ">{{ $filma['resume'] }}</p>
                <a class=" text-slate-500 mt-3 cursor-pointer hover:text-indigo-500  "
                    href="synopsis/{{ $filma->id }}"> Synopsis et détail > </a>
            </div>
        </div>

        <img class=" px-16  h-1/2   w-1/2" src="img/1.jpg" alt="">


        <div class="absolute w-full h-40 bottom-0 bg-gradient-to-t from-black">

        </div>


    </div>
</div>


{{-- <!-- component -->
    <div>
        <div class="h-screen flex justify-center items-center bg-cover bg-center"
            style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://assets.nflxext.com/ffe/siteui/vlv3/c0a32732-b033-43b3-be2a-8fee037a6146/2fe6e3c0-5613-4625-a0c1-3d605effd10b/IN-en-20210607-popsignuptwoweeks-perspective_alpha_website_large.jpg')">


            <div class="space-y-5">
                <p class="text-white font-bold text-5xl flex flex-col items-center">
                    <span>Unlimited movies, TV <br /></span>
                    <span> shows and more. </span>
                </p>
                <p class="text-white font-semibold text-3xl flex flex-col items-center">Watch anywhere. Cancel anytime.
                </p>
                <p class="text-white text-lg flex flex-col items-center">Ready to watch? Enter your email to create or
                    restart your membership.</p>
                <div class="flex flex-row items-center justify-center">
                    <input type="text" placeholder="Email address"
                        class="p-4 focus:outline-none focus:ring-1 focus:ring-blue-300 w-3/4" />
                    <button class="p-4 text-l font-semibold bg-red-600 hover:bg-red-700 text-white">Get Started
                        ></button>
                </div>
            </div>
        </div>
        <hr />
        <div class="h-screen flex items-center justify-center bg-black p-5">
            <div class="space-y-5 p-5">
                <p class="text-white font-bold text-4xl">Enjoy on your TV.</p>
                <p class="text-white font-semiboldbold text-xl">Watch on smart TVs, PlayStation, Xbox, Chromecast, Apple
                    TV, Blu-ray players and more.</p>
            </div>
            <div>
                <img alt="TV" src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/tv.png" />
            </div>
        </div>
        <hr />
        <div class="h-screen flex items-center justify-center bg-black p-5">
            <div>
                <img alt="" class="our-story-card-img"
                    src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/mobile-0819.jpg"
                    data-uia="our-story-card-img" />
            </div>
            <div class="space-y-5">
                <p class="text-white font-bold text-4xl">Download your shows to watch offline.</p>
                <p class="text-white font-semiboldbold text-xl">Save your favourites easily and always have something to
                    watch.</p>
            </div>
        </div>
        <hr />
        <div class="h-screen flex items-center justify-center bg-black p-5">
            <div class="space-y-5 p-5">
                <p class="text-white font-bold text-4xl">Watch everywhere.</p>
                <p class="text-white font-semiboldbold text-xl">Stream unlimited movies and TV shows on your phone,
                    tablet, laptop, and TV.</p>
            </div>
            <div>
                <img alt="" class="our-story-card-img"
                    src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/device-pile-in.png"
                    data-uia="our-story-card-img" />
            </div>
        </div>
        <hr />
        <div class="h-screen flex items-center justify-center bg-black p-5">
            <div class="p-5">
                <img alt="" class="our-story-card-img"
                    src="https://occ-0-5556-3662.1.nflxso.net/dnm/api/v6/19OhWN2dO19C9txTON9tvTFtefw/AAAABVxdX2WnFSp49eXb1do0euaj-F8upNImjofE77XStKhf5kUHG94DPlTiGYqPeYNtiox-82NWEK0Ls3CnLe3WWClGdiJP.png?r=5cf"
                    data-uia="our-story-card-img" />
            </div>
            <div class="space-y-5">
                <p class="text-white font-bold text-4xl">Create profiles for children.</p>
                <p class="text-white font-semiboldbold text-xl">Send children on adventures with their favourite
                    characters in a space made just for them—free with your membership.</p>
            </div>
        </div>
        <hr />
        <div class="min-h-screen bg-black space-y-10">
            <p class="p-5 text-white font-bold text-5xl flex justify-center">Frequently Asked Questions</p>
            <div class="space-y-5 flex flex-col justify-center items-center">
                <div class="p-5 bg-[#303030] w-3/4">
                    <p class="text-3xl text-white">What is Netflix ?</p>
                </div>
                <div class="p-5 bg-[#303030] w-3/4">
                    <p class="text-3xl text-white">How much does Netflix cost ?</p>
                </div>
                <div class="p-5 bg-[#303030] w-3/4">
                    <p class="text-3xl text-white">Where can I watch ?</p>
                </div>
                <div class="p-5 bg-[#303030] w-3/4">
                    <p class="text-3xl text-white">Is Netflix good for kids ?</p>
                </div>
            </div>
        </div>
        <hr />
    </div> --}}
