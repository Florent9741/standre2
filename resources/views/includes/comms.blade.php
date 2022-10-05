@section('content')
                    <h1 class="mb-4 text-3xl font-medium text-gray-900 title-font sm:text-4xl">
                        Rédiger un mémo
                    </h1>

                    <div class="relative px-2 mb-4 md:px-0 lg:px-0 ">
{{-- form bouton enregistrer  --}}
@Auth
                        <form  action="{{ route('store', ['id_film']) }}" method="post">
                            @csrf

                            <textarea id="message" name="contenu" cols="50" rows="15"
                                class="w-full h-64 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none resize-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"


                >


                            </textarea>

                                <div class="flex justify-center">
                                <button  type="submit"
                                    class="mt-2 inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">

                                    Enregistrer
                                </button>

                            </div>

                        </form>
                    </div>




                </div>
                {{-- NOS MEMOS  --}}
                <h1 class=" text-center mb-4 text-3xl font-medium text-gray-900 title-font sm:text-4xl">
                    Mémos
                </h1>
                <div class="border w-auto m-2 mr-4 text-left">
                    @foreach ($memos as $memo)
                        @if ($memo->id_film == $id && $memo->user_id == Auth::user()->id)
                            <div class="flex flex-row justify-between border-t border-gray-200 sm:my-5 md:mx-4  lg::ml-0 ">

                                {{ $memo->created_at->format('d/m/Y') }}

                                <div class="flex flex-col w-full justify-evenly items-center m-2">
                                    <div class="flex flex-row w-full  justify-between items-center bg-slate-50 border-slate-400 border rounded-lg  p-2 ">
                                        {{ $memo->contenu }}

                                        <div class=" px-4 flex flex-col items-center">
                                           
                                        </div>
                                    </div>
                                    {{-- <div class="text-slate-500 m-2 flex flex-end">
                                        {{ $memo->created_at->format('d/m/Y') }}
                                      </div> --}}


                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>



            </div>

            {{-- Mes memos --}}

        @endauth
    </div>
    </div>



    {{-- LES MEMOS PUBLICS --}}

    <div class="flex flex-col w-full px-2 mt-5">
        <div class="flex items-center justify-between pb-1 mb-2 border-b">
            <span class="text-base font-semibold text-gray-700 uppercase ">Les mémos des autres
                utilisateurs</span>

        </div>
    </div>
        @foreach ($memos->where('id_film', '=', $id) as $memo)
            {{-- Memo user1 --}}

            <div class="flex px-2 py-3 border-b cursor-pointer hover:shadow-md ">
<div class="flex flex-row w-full">
                <img class='object-cover w-10 h-10 rounded-lg' alt='User avatar'
                    src='https://photoclubdethuir.fr/wp-content/uploads/2019/01/avatar_gris-8.png'>



<div class="flex flex-col pl-2 space-evenly align-center w-auto ">
                    <span class="pt-1 text-sm font-semibold text-red-500 capitalize">

                        <?php
                        $user = App\Models\User::find($memo->user_id);
                        echo $user->name;
                        ?>
                    </span>

                    <span class="text-xs font-medium text-gray-500 uppercase ">
                        {{ $memo->contenu }}
                    </span>
                  </div>
                   </div>
                    @if (null !== Auth::user())
                        @if (Auth::user()->id == $memo->user_id)
                            <div class=" px-4 flex flex-col items-center">
                               
                            </div>
                        @endif
                    @endif

            </div>
    </div>

@endforeach
@endsection