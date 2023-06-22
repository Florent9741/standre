

<section class="mt-6 px-12 text-black bg-gray-200 rounded-lg body-font">
    <div class="container px-5 py-10 mx-auto ">
        <div class="flex flex-col w-full mb-20 text-center ">
            <h1 class ="pb-4 mb-2 text-3xl font-medium sm:text-4xl title-font">Gp Interception</h1>

            <table class="object-center whitespace-no-wrap bg-gray-100 table-auto">
                <div class="flex space-x-2">
            <form class="mt-5" method="post" action="{{ route('ascendent4') }}"
                    enctype="multipart/form-data">
                    @csrf
                   

                        <button type="submit"
                                class=" w-[10%] bg-black flex items-center justify-center h-10 px-6 py-3 mt-4 space-x-2 text-sm text-white rounded-md ">
                                A-Z
                            </button>

                  
                </form>
                <form class="mt-5" method="post" action="{{ route('desc4') }}"
                    enctype="multipart/form-data">
                    @csrf
                   

                        <button type="submit"
                                class=" w-[10%] bg-black flex items-center justify-center h-10 px-6 py-3 mt-4 space-x-2 text-sm text-white rounded-md ">
                                Z-A
                            </button>

                  
                </form>
                </div>
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
                        class="px-4 py-3 text-sm font-medium tracking-wider text-white rounded-b title-font bg-black">
                       
                 
                        <th class="px-5 py-3 border-2 ">N° Interne</th>
                        <th class="px-5 py-3 border-2 ">N° Externe</th>
                        
              
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gpinters as $gpinters)
                        <tr class="tborder">
                            <td class="px-4 py-3 border-2 ">{{ $gpinters->numero }}
                                    </td>

                                    <td class="px-4 py-3 border-2 ">{{ $gpinters->service }}
                                    </td>
                           
                           
                        </tr>

                      
 

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</section>

