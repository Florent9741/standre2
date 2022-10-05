<div class="box pt-6">
    <div class="box-wrapper">

        <div class=" bg-white rounded flex justify-left mx-auto mt-5 w-1/2 p-2 shadow-sm border border-black ">
          <button @click="getImages()" class="outline-none focus:outline-none"><svg class=" w-5 text-black-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></button>
          <form action="/url" method="post" enctype="multipart/form-data" class="w-full">
            @csrf
          <input type="search" name="url" id="" @keydown.enter="getImages()" placeholder="Entrez l’URL de votre video youtube ici.. " x-model="q" class="w-full pl-4 text-sm outline-none focus:outline-none bg-transparent">
          <input type="submit" class="sr-only" value="valider">

        </form>

        </div>