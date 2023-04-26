<div x-data="{ modelOpen: false }">
    <button @click="modelOpen =!modelOpen"
        class="flex items-center justify-center px-6 py-3 my-3 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-700 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50">
        <span>Ajouter Un Numéro</span>
    </button>

    <div x-cloak x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title"
        role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
            <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"></div>

            <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                <div class="flex items-center justify-center space-x-4">
                    <h1 class="text-4xl font-medium text-gray-800">Ajouter un nouveau numéro</h1>

                    <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                    </button>
                </div>

                <form class="mt-5" method="post" action="{{ route('ajouter') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div>
                        <div class="flex pb-2">
                            <div class="w-2/3">
                            <label for="Nom"
                                class="block text-sm text-gray-700 capitalize dark:text-gray-600">Nom</label>
                            <input type="text" name="Nom" placeholder="Nom"
                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40"
                                required>
                            </div>
                            
                        </div>


                        <div>
                            <label for="ninterne"
                                class="block text-sm text-gray-700 capitalize dark:text-gray-600">N° Interne</label>
                            <input type="text" name="ninterne" placeholder="ninterne"
                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40"
                                required>
                        </div>

                        <div class="mt-4">
                        <label for="nexterne"
                                class="block text-sm text-gray-700 capitalize dark:text-gray-600">N° Externe</label>
                            <input type="text" name="nexterne" placeholder="nexterne"
                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40"
                                required>
                        </div>

                        <div class="mt-4">
                        <label for="gpinterc"
                                class="block text-sm text-gray-700 capitalize dark:text-gray-600">Gp Interc</label>
                            <input type="text" name="gpinterc" placeholder="gpinterc"
                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40"
                                required>
                        </div>

                        <div class="mt-4">
                        <label for="gpdiff"
                                class="block text-sm text-gray-700 capitalize dark:text-gray-600">Gp Diffusion</label>
                            <input type="text" name="gpdiff" placeholder="gpdiff"
                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40"
                                required>
                        </div>

                        <button type="submit"
                                class="flex items-center justify-center h-10 px-6 py-3 mt-4 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-700 rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50">
                                Valider
                            </button>

                  
                </form>
            </div>
        </div>
    </div>
</div>
