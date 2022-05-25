 <div class="flex items-center justify-between h-16 px-2 mx-auto">
    <div class="flex items-center space-x-4">
      <img class="mt-10 h-[100px] w-auto pt-1 rounded-md" src="{{ Storage::url('./img/logo.png')}}">

      <form class="hidden mb-0 lg:flex">
        @csrf
        <div class="relative ">
          <input class="h-10 px-10 text-sm placeholder-gray-400 border-gray-600 rounded-lg mt-14 focus:z-10 textin" placeholder="Rechercher un film..." type="text"/>
          <button class="absolute inset-y-0 right-0 p-2 mr-px text-gray-600 rounded-r-lg" type="submit"></button>
        </div>
      </form>
    </div>

    <div class="flex justify-end flex-1 w-0 lg:hidden">
      <a class="text-sm px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-red-700 rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50" href="" >Login</a>
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
      <a class="flex items-center justify-center px-6 py-3 my-3 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-700 rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50" href="" >Login</a>
    </div>
  </div>

  <div class="border-t border-gray-100 lg:hidden">
    <nav
      class="flex items-center justify-center p-4 pt-6 mt-6 overflow-x-auto text-sm font-medium"
    >
      <a class="flex-shrink-0 pl-4 text-gray-900" href="/">A l'affiche</a>
      <a class="flex-shrink-0 pl-4 text-gray-900" href="">Blog</a>
      <a class="flex-shrink-0 pl-4 text-gray-900" href="">Projects</a>
      <a class="flex-shrink-0 pl-4 text-gray-900" href="/backend">Backend</a>
    </nav>
  </div>


 
