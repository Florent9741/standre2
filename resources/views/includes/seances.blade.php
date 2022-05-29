<div class="flex flex-col items-center justify-center space-x-4">
    <h1 class="text-xl font-medium text-gray-800">Liste des séances</h1>
    <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
    </button>
    <div class="flex flex-col flex-shrink-0 w-full mt-4 bg-gray-200 border border-gray-300">
        <div
            class="flex items-center justify-between flex-shrink-0 h-10 px-2 bg-white border-b border-gray-300">
            <span class="block text-sm font-medium text-black">today</span>
            <button class="flex items-center justify-center w-6 h-6">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </button>
        </div>
        <div class="flex flex-col px-2 pb-2 overflow-auto">
            <div class="p-6 mt-2 text-black bg-white border border-gray-300 cursor-pointer">Item</div>
            <div class="p-6 mt-2 text-black bg-white border border-gray-300 cursor-pointer">Item</div>
            <div class="p-6 mt-2 text-black bg-white border border-gray-300 cursor-pointer">Item</div>
            <div class="p-6 mt-2 text-black bg-white border border-gray-300 cursor-pointer">Item</div>
            <div class="p-6 mt-2 text-black bg-white border border-gray-300 cursor-pointer">Item</div>
        </div>
        <button type="submit"
        class="flex items-center justify-center px-6 py-3 mx-4 my-3 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-700 rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50">
        Réserver
    </button>
    </div>

</div>