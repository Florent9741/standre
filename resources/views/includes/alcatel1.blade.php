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
       
          <h3 class="mb-8 text-4xl text-white py-10 ">Alcatel 8008</h3>
          
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
      
          <h3 class="mb-8 text-3xl text-white py-10 ">Interception</h3>
          
        </div>
      </div>
    </div>
  </div>
  <div class='w-full max-w-md py-6 mx-auto bg-white rounded-3xl overflow-hidden'>
        <div class='max-w-md mx-auto'>
        <p class="m-2 py-10 text-center"> Quand un autre téléphone du service sonne, composer le « 32 »

Si un téléphone d’un autre bureau sonne, composer le « 31 » + le numéro du poste à intercepter</p>
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
      
          <h3 class="mb-8 text-3xl text-white py-10 ">Transfert et conférence</h3>
          
        </div>
      </div>
    </div>
  </div>
 <!-- component -->
<!-- This is an example component -->

<div class='w-full max-w-md py-6 mx-auto bg-white rounded-3xl overflow-hidden'>
        <div class='max-w-md mx-auto'>
          <img class='w-full h-[236px]' src="{{ Storage::url('./img/img1.png') }}">
           </div>
          
          
            <p class='text-[#7C7C80] font-[15px] mt-6'>Lors d’un appel en cours, choisir « Nouvel appel »
Composer le numéro du poste vers lequel transférer</p>


           
          </div>

  <div class='w-full max-w-md py-6 mx-auto bg-white rounded-3xl  overflow-hidden'>
        <div class='max-w-md mx-auto'>
          <img class='w-full h-[236px]' src="{{ Storage::url('./img/img2.png') }}">
           </div>
          
          
            <p class='text-[#7C7C80] font-[15px] mt-6'>Choisir « Transférer » pour transférer l’appel vers ce numéro, ou choisir « Conférence » pour faire une conférence à 3.</p>


           
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
      
          <h3 class="mb-8 text-3xl text-white py-10 ">Renvoi d'appel</h3>
          
        </div>
      </div>
    </div>
  </div>

  <div class='w-full max-w-md py-6 mx-auto bg-white rounded-3xl overflow-hidden'>
        <div class='max-w-md mx-auto'>
          <img class='w-full h-[236px]' src="{{ Storage::url('./img/img3.png') }}">
           </div>
          
          
            <p class='text-[#7C7C80] font-[15px] mt-6'>Avec la flèche droite, aller jusqu’à l’onglet renvoi «  »</p>


           
          </div>

          <div class='w-full max-w-md py-6 mx-auto bg-white rounded-3xl overflow-hidden'>
        <div class='max-w-md mx-auto'>
          <img class='w-full h-[236px]' src="{{ Storage::url('./img/img4.png') }}">
           </div>
          
          
            <p class='text-[#7C7C80] font-[15px] mt-6'>Cliquer sur « Immédiat »</p>


           
          </div>

          <div class='w-full max-w-md py-6 mx-auto bg-white rounded-3xl overflow-hidden'>
        <div class='max-w-md mx-auto'>
          <img class='w-full h-[236px]' src="{{ Storage::url('./img/img5.png') }}">
           </div>
          
          
            <p class='text-[#7C7C80] font-[15px] mt-6'>Cliquer sur « utilisateur »</p>


           
          </div>

          <div class='w-full max-w-md py-6 mx-auto bg-white rounded-3xl overflow-hidden'>
        <div class='max-w-md mx-auto'>
          <img class='w-full h-[236px]' src="{{ Storage::url('./img/img6.png') }}">
           </div>
          
          
            <p class='text-[#7C7C80] font-[15px] mt-6'>Entrer le numéro (si numéro externe,ajouter un 0) et valider.</p>


           
          </div>

          <div class='w-full max-w-md py-6 mx-auto bg-white rounded-3xl overflow-hidden'>
        <div class='max-w-md mx-auto'>
          <img class='w-full h-[236px]' src="{{ Storage::url('./img/img7.png') }}">
           </div>
          
          
            <p class='text-[#7C7C80] font-[15px] mt-6'>L’information « Programmation ok » confirme la validation

Pour annuler le renvoi, choisir « Désactiv »</p>


           
          </div>
  @endsection



