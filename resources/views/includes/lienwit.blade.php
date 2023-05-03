@extends('layouts.app')
@section('main')

<!-- component -->
<!-- This is an example component -->
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
       
          <h3 class="mb-8 text-4xl text-white py-10 ">Liens Wit</h3>
          
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
      
          <h3 class="mb-8 text-3xl text-white py-10 ">Actifs</h3>
          
        </div>
      </div>
    </div>
  </div>



  <div class='flex items-center justify-center my-[120px] '>  
   

   <div class="mt-4 mb-6">
     <div class="mb-3 text-2xl text-blue-800 italic text-center ">Mairie</div>
     <div class="text-base text-neutral-600 text-center">Depuis la mairie : <a href="http://192.168.59.230" class="text-xl underline" >http://192.168.59.230</a></div>
     <div class="text-base text-neutral-600 py-2 text-center">Depuis l'extérieur : <a href="https://webmail.ville-saint-andre.fr:8058" class="text-xl underline" >https://webmail.ville-saint-andre.fr:8058</a></div>
   </div>

  
     
</div>
<div class='flex items-center justify-center my-[120px] '>  
   

    <div class="mt-4 mb-6">
      <div class="mb-3 text-2xl text-blue-800 italic text-center ">Desbordes</div>
      <div class="text-base text-neutral-600 text-center">Depuis la mairie : <a href="http://192.168.61.198" class="text-xl underline" >http://192.168.61.198</a></div>
      <div class="text-base text-neutral-600 py-2 text-center">Depuis l'extérieur : <a href="https://webmail.ville-saint-andre.fr:8056" class="text-xl underline" >https://webmail.ville-saint-andre.fr:8056</a></div>
    </div>

   
      
</div>

<div class='flex items-center justify-center my-[120px] '>  
   

    <div class="mt-4 mb-6">
      <div class="mb-3 text-2xl text-blue-800 italic text-center ">Curie</div>
      <div class="text-base text-neutral-600 text-center">Depuis la mairie : <a href="http://192.168.61.197" class="text-xl underline" >http://192.168.61.197</a></div>
      <div class="text-base text-neutral-600 py-2 text-center">Depuis l'extérieur : <a href="https://webmail.ville-saint-andre.fr:8057" class="text-xl underline" >https://webmail.ville-saint-andre.fr:8057</a></div>
    </div>

   
      
</div>

<div class='flex items-center justify-center my-[120px] '>  
   

    <div class="mt-4 mb-6">
      <div class="mb-3 text-2xl text-blue-800 italic text-center ">Fontaine</div>
     <a href="http://80.11.191.183:2000" class="text-xl underline" >http://80.11.191.183:2000</a>
      
    </div>

   
      
</div>

<div class='flex items-center justify-center my-[120px] '>  
   

    <div class="mt-4 mb-6">
      <div class="mb-3 text-2xl text-blue-800 italic text-center ">Restaurant 2</div>
      <div class="text-base text-neutral-600 text-center">Depuis la mairie : <a href="http://192.168.61.196" class="text-xl underline" >http://192.168.61.196</a></div>
      <div class="text-base text-neutral-600 py-2 text-center">Depuis l'extérieur : <a href="https://webmail.ville-saint-andre.fr:8052" class="text-xl underline" >https://webmail.ville-saint-andre.fr:8052</a></div>
    </div>

   
      
</div>

<div class='flex items-center justify-center my-[120px] '>  
   

    <div class="mt-4 mb-6">
      <div class="mb-3 text-2xl text-blue-800 italic text-center ">École de Musique</div>
      <div class="text-base text-neutral-600 text-center">Depuis la mairie : <a href="http://192.168.10.198" class="text-xl underline" >http://192.168.10.198</a></div>
      <div class="text-base text-neutral-600 py-2 text-center">Depuis l'extérieur : <a href="https://webmail.ville-saint-andre.fr:8055" class="text-xl underline" >https://webmail.ville-saint-andre.fr:8055</a></div>
    </div>

   
      
</div>

<div class='flex items-center justify-center my-[120px] '>  
   

    <div class="mt-4 mb-6">
      <div class="mb-3 text-2xl text-blue-800 italic text-center ">CCAS </div>
      <div class="text-base text-neutral-600 text-center">Depuis la mairie : <a href="http://192.168.40.250" class="text-xl underline" >http://192.168.40.250</a></div>
      <div class="text-base text-neutral-600 py-2 text-center">Depuis l'extérieur : <a href="https://webmail.ville-saint-andre.fr:8053" class="text-xl underline" >https://webmail.ville-saint-andre.fr:8053</a></div>
    </div>

   
      
</div>

<div class='flex items-center justify-center my-[120px] '>  
   

    <div class="mt-4 mb-6">
      <div class="mb-3 text-2xl text-blue-800 italic text-center ">Piscine </div>
      <div class="text-base text-neutral-600 text-center">Sur site : <a href="http://192.168.1.10" class="text-xl underline" >http://192.168.1.10</a></div>
      <div class="text-base text-neutral-600 py-2 text-center">Depuis la Mairie et Internet : <a href="http://80.15.59.159:2000" class="text-xl underline" >http://80.15.59.159:2000</a></div>
    </div>

   
      
</div>

<div class='flex items-center justify-center my-[120px] '>  
   

    <div class="mt-4 mb-6">
      <div class="mb-3 text-2xl text-blue-800 italic text-center ">Jeunesse</div>
      <div class="text-base text-neutral-600 text-center">Depuis la mairie : <a href="http://192.168.61.195" class="text-xl underline" >http://192.168.61.195</a></div>
      <div class="text-base text-neutral-600 py-2 text-center">Depuis l'extérieur : <a href="https://webmail.ville-saint-andre.fr:8051" class="text-xl underline" >https://webmail.ville-saint-andre.fr:8051</a></div>
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
      
          <h3 class="mb-8 text-3xl text-white py-10 ">A venir...</h3>
          
        </div>
      </div>
    </div>
  </div>
  <div class='flex items-center justify-center my-[120px] '>  
   

   <div class="mt-4 mb-6">
     <div class="mb-3 text-2xl text-blue-800 italic text-center ">Environnement </div>
     <p class="text-center text-blue-900 text-xs">
     (à rattacher à une des prises disponibles sur le switch du bureau de Rachid, 1er étage)
     </p>
     <div class="text-base text-neutral-600 text-center">Depuis la mairie : <a href="https://192.168.61.193" class="text-xl underline" >https://192.168.61.193</a></div>
     <div class="text-base text-neutral-600 py-2 text-center flex nowrap items-center">Depuis l'extérieur : <a href="https://webmail.ville-saint-andre.fr:8054" class="text-xl underline" >https://webmail.ville-saint-andre.fr:8054  </a> <p class="px-3 text-center text-xs text-red-500">(à configurer)</p></div>
   </div>

  
     
</div>

<div class='flex items-center justify-center my-[120px] '>  
   

   <div class="mt-4 mb-6">
     <div class="mb-3 text-2xl text-blue-800 italic text-center ">Ducrocq  </div>
     <p class="text-center text-blue-900 text-xs">
     (à rattacher au câble venant de la piscine)
     </p>
     <div class="text-base text-neutral-600 text-center">Sur site : <a href="http://192.168.1.249" class="text-xl underline" >http://192.168.1.249</a></div>
     <div class="text-base text-neutral-600 py-2 text-center flex nowrap items-center">Depuis la Mairie et Internet : <a href="https://80.15.59.159:2001" class="text-xl underline" >https://80.15.59.159:2001  </a> </div>
   </div>

  
     
</div>

<div class='flex items-center justify-center my-[120px] '>  
   

   <div class="mt-4 mb-6">
     <div class="mb-3 text-2xl text-blue-800 italic text-center ">Camus </div>
     <p class="text-center text-blue-900 text-xs">
     (à rattacher à la prise 8 du switch Allied Telesis 2eme étage, baie de la BCD)
     </p>
     <div class="text-base text-neutral-600 text-center">Depuis la mairie : <a href="https://192.168.61.194" class="text-xl underline" >https://192.168.61.194</a></div>
     <div class="text-base text-neutral-600 py-2 text-center flex nowrap items-center">Depuis l'extérieur : <a href="https://webmail.ville-saint-andre.fr:8050" class="text-xl underline" >https://webmail.ville-saint-andre.fr:8050  </a> <p class="px-3 text-center text-xs text-red-500">(à configurer)</p></div>
   </div>

  
     
</div>

<div class='flex items-center justify-center my-[120px] '>  
   

   <div class="mt-4 mb-6">
     <div class="mb-3 text-2xl text-blue-800 italic text-center ">SAW  </div>
     <p class="text-center text-blue-900 text-xs">
     (à rattacher à une des prises du routeur qui sera installée dans le bureau derrière le hall ou à l'étage, prochainement)
     </p>
     <div class="text-base text-neutral-600 text-center">Sur site : <a href="http://192.168.1.250" class="text-xl underline" >http://192.168.1.250</a></div>
     <div class="text-base text-neutral-600 py-2 text-center flex nowrap items-center">Depuis la Mairie et Internet : <a href="https://attente_ip_fixe_SAW:2000 " class="text-xl underline" >https://attente_ip_fixe_SAW:2000   </a> <p class="px-3 text-center text-xs text-red-500">(demande à faire à Orange)</p></div>
   </div>

  
     
</div>






@endsection
