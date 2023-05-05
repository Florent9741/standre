@vite(['resources/css/app.css', 'resources/js/app.js'])
<section class="mt-6 px-12 text-black bg-gray-200 rounded-lg body-font">
    <div class="container px-5 py-10 mx-auto ">
        <div class="flex flex-col w-full mb-20 text-center ">
            <h1 class="pb-4 mb-2 text-3xl font-medium sm:text-4xl title-font">Gp Interception</h1>

            <table class="object-center whitespace-no-wrap bg-gray-100 table-auto">
                @include('includes.ajouter3')
                @if (session('success'))
                    <div class="alert alert-success">
                        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">      
                            @include('includes.success')
                            </div>
                        </div>
                    </div>
                    @elseif (session('deleted'))
                    <div class="alert alert-deleted">
                        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">      
                            @include('includes.deleted')
                            </div>
                        </div>
                    </div>
                @endif
                
                <thead>
                    <tr
                        class="px-4 py-3 text-sm font-medium tracking-wider text-white rounded-b title-font bg-black">
                     
                 
                        <th class="px-5 py-3 border-2 ">Numéro </th>
                        <th class="px-5 py-3 border-2 ">Services</th>
                       
              
                        <th class="px-5 py-3 border-2 ">Modifier</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gpinters as $gpinters)
                        <tr class="tborder">
                           

                                    <td class="px-4 py-3 border-2 ">{{ $gpinters->numero }}
                                    </td>

                                    <td class="px-4 py-3 border-2 ">{{ $gpinters->service }}
                                   </td>
                                   
                                  
                          
                          
                           
                            <td class="px-4 py-3 border-2">@include('includes.update3')
                                @include('includes.delete3')
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</section>