@extends("layouts.app")
@section('main')
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
       
          <h3 class="mb-8 text-4xl text-white py-10 ">Documentation téléphonie fixe</h3>
          
        </div>
      </div>
    </div>
  </div>
  <div
    class="relative overflow-hidden bg-cover bg-blue-400 bg-no-repeat "
    style="
      background-position: 50%;
        
      height: 120px;
    ">
    <div
      class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed "
      style="background-color: rgba(0, 0, 0, 0.75)">
      <div class="flex h-full items-center justify-center">
        <div class="px-6 text-center text-white md:px-12">
      
          <h3 class="mb-8 text-3xl text-white py-10 ">Selectionner votre téléphone</h3>
          
        </div>
      </div>
    </div>
  </div>
  <div
    class="relative overflow-hidden bg-cover bg-blue-400 bg-no-repeat "
    style="
      background-position: 50%;
        
      height: 650px;
    ">
    <div
      class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed "
      style="background-color: rgba(0, 0, 0, 0.75)">

        
        <div class="antialiased max-w-2xl mx-auto my-12 bg-gray-300 px-8">
    
  
    <div class="relative block md:flex items-center">
    
      <div class="w-full md:w-1/2 relative z-0 px-8 md:px-0 md:py-16">
        <img class=" py-1 w-full pt-1 rounded-md" src="{{ Storage::url('./img/8028.png') }}" alt="">
        <a class="block flex items-center justify-center bg-gray-200 hover:bg-gray-300 p-8 text-md font-semibold text-gray-800 uppercase mt-16"
         href="{{ route('alcatel1')}}">
          <span>Alcatel 8028</span>
          <span class="font-medium text-gray-700 ml-2">➔</span>
        </a>
      
    
  </div>
  <div class="w-full md:w-1/2 relative z-0 px-8 md:px-0 md:py-16">
        <img class=" py-1 w-full pt-1 rounded-md" src="{{ Storage::url('./img/8008.png') }}" alt="">
        <a class="block flex items-center justify-center bg-gray-200 hover:bg-gray-300 p-8 text-md font-semibold text-gray-800 uppercase mt-16"
         href="{{ route('alcatel2')}}">
          <span>Alcatel 8008</span>
          <span class="font-medium text-gray-700 ml-2">➔</span>
        </a>
      
    
  </div>
          
      
    </div>
  </div>


  @endsection