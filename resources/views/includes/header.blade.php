 <div class="flex items-center justify-between h-16 px-6 mx-auto">
    <div class="flex items-center space-x-4">
      <img class="mt-10" src="{{ Storage::url('./img/logo.png')}}">

      <form class="hidden mb-0 lg:flex">
        @csrf
        <div class="relative ">
          <input class="h-10 px-10 text-sm placeholder-gray-400 border-gray-600 rounded-lg mt-14 focus:z-10 textin" placeholder="Rechercher un film..." type="text"/>
          <button class="absolute inset-y-0 right-0 p-2 mr-px text-gray-600 rounded-r-lg" type="submit"></button>
        </div>
      </form>
    </div>

    <div class="flex justify-end flex-1 w-0 lg:hidden">
      <button class="p-2 text-gray-500 bg-gray-100 rounded-full" type="button">
      </button>
    </div>

    <nav
      class="items-center justify-center hidden mt-12 space-x-8 text-sm font-medium lg:flex lg:flex-1 lg:w-0"
    >
      <a class="text-gray-900" href="/">A l'affiche</a>
      <a class="text-gray-900" href="">Blog</a>
      <a class="text-gray-900" href="">Projects</a>
      <a class="text-gray-900" href="/backend">Backend</a>
    </nav>

    <div class="items-center hidden mt-12 space-x-4 lg:flex">
      <a class="px-5 py-2 text-sm font-medium text-white bg-red-700 rounded-lg" href="" >Login</a>
    </div>
  </div>

  <div class="border-t border-gray-100 lg:hidden">
    <nav
      class="flex items-center justify-center p-4 overflow-x-auto text-sm font-medium"
    >
      <a class="flex-shrink-0 pl-4 text-gray-900" href="/">About</a>
      <a class="flex-shrink-0 pl-4 text-gray-900" href="">Blog</a>
      <a class="flex-shrink-0 pl-4 text-gray-900" href="">Projects</a>
      <a class="flex-shrink-0 pl-4 text-gray-900" href="/backend">Backend</a>
    </nav>
  </div>


 
