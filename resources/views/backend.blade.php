@extends('layouts.app')

@section('main')
    <section class="text-black body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col w-full mb-20 text-center">
                <h1 class="pb-12 mb-2 text-3xl font-medium sm:text-4xl title-font">Liste des Films</h1>

                <table class="object-center whitespace-no-wrap table-auto">
                    @include('includes.form')
                    <thead>
                        <tr
                            class="px-4 py-3 text-sm font-medium tracking-wider text-white rounded-b title-font bg-slate-600">
                            <th class="px-5 py-3 border-2 ">Titre</th>
                            <th class="px-5 py-3 border-2 ">Image</th>
                            <th class="px-5 py-3 border-2 ">Resumé</th>
                            <th class="px-5 py-3 border-2 ">Durée</th>
                            <th class="px-5 py-3 border-2 ">Catégorie</th>
                            <th class="px-5 py-3 border-2 ">A l'affiche</th>
                            <th class="px-5 py-3 border-2 ">Modifier</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($films as $film)
                            <tr class="tborder">
                                <td class="px-4 py-3 border-2 "><a
                                        href="/film/{{ $film['id'] }}">{{ $film['titre'] }}</a></td>
                                <td class="px-4 py-3 border-2"><img class="w-80"
                                        src="{{ Storage::url($film->image) }}"> </td>
                                <td class="px-4 py-3 border-2 "><a class="resume">{{ $film['resume'] }}</a></td>
                                <td class="px-4 py-3 border-2"><a>{{ $film['duree'] }}</a></td>
                                <td class="px-4 py-3 border-2"><a>{{ $film->categories->genre }}</a></td>
                                <td class="px-4 py-3 border-2"><a>{{ $film['affiche'] }}</a></td>
                                <td class="px-4 py-3 border-2"> @include('includes.update')<i
                                        class="p-3 fa-solid fa-trash-can"></i></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
