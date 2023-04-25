

<section class="mt-6 text-black bg-gray-200 rounded-lg body-font">
    <div class="container px-5 py-10 mx-auto ">
        <div class="flex flex-col w-full mb-20 text-center ">
            <h1 class="pb-4 mb-2 text-3xl font-medium sm:text-4xl title-font">Liste des mobiles</h1>

            <table class="object-center whitespace-no-wrap bg-gray-100 table-auto">
                @include('includes.ajouter2')
                @if (session('success'))
                    <div class="alert alert-success">
                        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">      
                            @include('includes.success')
                            </div>
                        </div>
                    </div>
                    @elseif (session('deleted2'))
                    <div class="alert alert-deleted">
                        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">      
                            @include('includes.deleted2')
                            </div>
                        </div>
                    </div>
                @endif
                
                <thead>
                    <tr
                        class="px-4 py-3 text-sm font-medium tracking-wider text-white rounded-b title-font bg-slate-600">
                        <th class="px-5 py-3 border-2 ">Nom</th>
                 
                        <th class="px-5 py-3 border-2 ">N° Interne</th>
                        <th class="px-5 py-3 border-2 ">N° Externe</th>
                        <th class="px-5 py-3 border-2 ">Gp Interc</th>
                        <th class="px-5 py-3 border-2 ">Gp Diffusion</th>
              
                        <th class="px-5 py-3 border-2 ">Modifier</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nums2s as $nums2s)
                        <tr class="tborder">
                            <td class="px-4 py-3 border-2 ">{{ $nums2s->Nom }}
                                    </td>

                                    <td class="px-4 py-3 border-2 ">{{ $nums2s->ninterne }}
                                    </td>

                                    <td class="px-4 py-3 border-2 ">{{ $nums2s->nexterne }}
                                   </td>
                                   
                                   <td class="px-4 py-3 border-2 ">{{ $nums2s->gpinterc }}
                                   </td>
                                   
                                   <td class="px-4 py-3 border-2 ">{{ $nums2s->gpdiff }}
                                   </td>
                          
                          
                           
                            <td class="px-4 py-3 border-2">@include('includes.update2')
                                @include('includes.delete2')
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</section>