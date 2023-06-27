@extends('layouts.app')

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
       
          <h3 class="mb-8 text-4xl text-white py-10 ">Dashboard</h3>
          
        </div>
      </div>
    </div>
  </div>



@include('includes.crud')
@include('includes.crud2')
@include('includes.crud3')

 
 
 
 
@endsection
