@vite(['resources/css/app.css', 'resources/js/app.js'])

<div
    class="relative overflow-hidden bg-cover bg-green-400 bg-no-repeat "
    style="
      background-position: 50%;
        
      height: 115px;
    ">
    <div
      class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed "
      style="background-color: rgba(0, 0, 0, 0.75)">
      <div class="flex h-full items-center justify-center">
        <div class="px-6 text-center text-white md:px-12">
       
          <h3 class="mb-8 text-4xl text-white py-10 ">Liste des fixes</h3>
          
        </div>
      </div>
    </div>
  </div>


  
<section class="mt-6 px-12 text-black bg-white rounded-lg body-font">
    <div class="container px-5 py-10 mx-auto ">
        <div class="flex flex-col w-full mb-20 text-center ">
            

            <table class="object-center whitespace-no-wrap bg-gray-100 table-auto">
            <div class="flex space-x-2">
            <form class="mt-5" method="post" action="{{ route('ascendent2') }}"
                    enctype="multipart/form-data">
                    @csrf
                   

                        <button type="submit"
                                class=" w-[10%] bg-black flex items-center justify-center h-10 px-6 py-3 mt-4 space-x-2 text-sm text-white rounded-md ">
                                A-Z
                            </button>

                  
                </form>
                <form class="mt-5" method="post" action="{{ route('desc2') }}"
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
                        <th class="px-5 py-3 border-2 ">Nom</th>
                 
                        <th class="px-5 py-3 border-2 ">N° Interne</th>
                        <th class="px-5 py-3 border-2 ">N° Externe</th>
                        <th class="px-5 py-3 border-2 ">Gp Interc</th>
                        <th class="px-5 py-3 border-2 ">Gp Diffusion</th>
              
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nums as $nums)
                        <tr class="tborder">
                            <td class="px-4 py-3 border-2 ">{{ $nums->Nom }}
                                    </td>

                                    <td class="px-4 py-3 border-2 ">{{ $nums->ninterne }}
                                    </td>

                                    <td class="px-4 py-3 border-2 ">{{ $nums->nexterne }}
                                   </td>
                                   
                                   <td class="px-4 py-3 border-2 ">{{ $nums->gpinterc }}
                                   </td>
                                   
                                   <td class="px-4 py-3 border-2 ">{{ $nums->gpdiff }}
                                   </td>
                          
                          
                           
                          
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</section>