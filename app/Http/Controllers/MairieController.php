<?php

namespace App\Http\Controllers;
use App\Models\Nums2s;
use App\Models\Nums;
use App\Models\Gpinter;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Throwable;

class MairieController extends Controller
{

    public function toto(){
        return view('includes.toto');
    }
    public function alcatel1(){
        return view('includes.alcatel1');
    }

    public function alcatel2(){
        return view('includes.alcatel2');
    }

    public function doctel(){
        return view('includes.doctel');
    }

    public function arrivant(){
        return view('includes.arrivant');
    }
  
    public function index(){
        return view('welcome',);
    }

    public function lien(){
        return view('includes.lien');
    }

    public function lienwit(){
        return view('includes.lienwit');
    }


    public function dashboard()
    {
        $nums = Nums::All();
        $nums2s = Nums2s::All();
        $gpinters = Gpinter::All();
   
        return view('dashboard', [
            'nums' => $nums,
            'nums2s' => $nums2s,
            'gpinters' => $gpinters
            
        ]);
    }
//-------------------------------------Trieur dashboard-----------------------------------//
    public function ascendent3()
    {
        $nums = Nums::Orderby('Nom','asc')->get();
        $nums2s = Nums2s::Orderby('Nom','asc')->get();
       
   
        return view('dashboard', [
            'nums' => $nums,
            'nums2s' => $nums2s,
            
        ]);
    }
    public function desc3()
    {
        $nums = Nums::Orderby('Nom','desc')->get();
        $nums2s = Nums2s::Orderby('Nom','desc')->get();
       
   
        return view('dashboard', [
            'nums' => $nums,
            'nums2s' => $nums2s,
            
        ]);
    }
//----------------------------------------------------------------------------//
    public function crud()
    {
        $nums = Nums::All(); 
        
        return view('backend', [
            'nums' => $nums,
               
        ]);
    }

    
    public function crud2()
    {
        $nums2s = Nums2s::all();
       
   
        return view('backend2', [
            'nums2s' => $nums2s,
            
        ]);
    }

    public function crud3()
    {
        $gpinters = Gpinter::All();
       
   
        return view('backend3', [
            'gpinters' => $gpinters,
            
        ]);
    }

//----------------------- trieur pour le mobile--------------------//

    public function ascendent()
    {
        $nums2s = Nums2s::Orderby('Nom','asc')->get();
       
   
        return view('backend2', [
            'nums2s' => $nums2s,
            
        ]);
    }
    public function desc()
    {
        $nums2s = Nums2s::Orderby('Nom','desc')->get();
       
   
        return view('backend2', [
            'nums2s' => $nums2s,
            
        ]);
    }
//---------------------------------------------------------------------//


//-----------------------Trieur Fixe-----------------------------------//
    public function ascendent2()
    {
        $nums = Nums::Orderby('Nom','asc')->get();
       
   
        return view('backend', [
            'nums' => $nums,
            
        ]);
    }
    public function desc2()
    {
        $nums = Nums::Orderby('Nom','desc')->get();
       
   
        return view('backend', [
            'nums' => $nums,
            
        ]);
    }
    //-----------------------------------------------------------------------------------//

    //-----------------------Trieur Gp interception-----------------------------------//
    public function ascendent4()
    {
        $gpinters = Gpinter::Orderby('numero','asc')->get();
       
   
        return view('backend3', [
            'gpinters' => $gpinters,
            
        ]);
    }
    public function desc4()
    {
        $gpinters = Gpinter::Orderby('numero','desc')->get();
       
   
        return view('backend3', [
            'gpinters' => $gpinters,
            
        ]);
    }
    //-----------------------------------------------------------------------------------//



    public function create(Request $request)
    {
//dd($request);
          //chemin + nom image
        $nums = new Nums();
        $nums->Nom = $request->Nom;
        $nums->ninterne = $request->ninterne;
        $nums->nexterne = $request->nexterne;
        $nums->gpinterc = $request->gpinterc;
        $nums->gpdiff = $request->gpdiff;
       
        $nums->save();
       
        return redirect()->route('dashboard')->with('success', 'Numéro ajouté');
    }



    public function update(Request $request, $id)
    {
        $nums = Nums::find($id);
        $nums->Nom = $request->Nom;
        $nums->ninterne = $request->ninterne;
        $nums->nexterne = $request->nexterne;
        $nums->gpinterc = $request->gpinterc;
        $nums->gpdiff = $request->gpdiff;
       
        $nums->save();
       
        return redirect()->route('dashboard')->with('modifié', 'Numéro modifié');

    }


    public function delete($id)
    {
        $nums = Nums::where('id', '=', $id);
        $nums->delete();
        return redirect()->route('dashboard')->with('deleted', 'Numéro supprimé');
    }

//---------------------------------- NUMS2-------------------------------------//
public function createnums2(Request $request)
    {
//dd($request);
          //chemin + nom image
        $nums2s = new Nums2s();
        $nums2s->Nom = $request->Nom;
        $nums2s->ninterne = $request->ninterne;
        $nums2s->nexterne = $request->nexterne;
        $nums2s->gpinterc = $request->gpinterc;
        $nums2s->gpdiff = $request->gpdiff;
       
        $nums2s->save();
       
        return redirect()->route('dashboard')->with('success', 'Numéro ajouté');
    }



    public function updatenums2(Request $request, $id)
    {
        $nums2s = Nums2s::find($id);
        $nums2s->Nom = $request->Nom;
        $nums2s->ninterne = $request->ninterne;
        $nums2s->nexterne = $request->nexterne;
        $nums2s->gpinterc = $request->gpinterc;
        $nums2s->gpdiff = $request->gpdiff;
       
        $nums2s->save();
       
        return redirect()->route('dashboard')->with('modifié', 'Numéro modifié');

    }


    public function deletenums2($id)
    {
        $nums2s = Nums2s::where('id', '=', $id);
        $nums2s->delete();
        return redirect()->route('dashboard')->with('deleted', 'Numéro supprimé');
    }

//---------------------------------------------------------------------------------------------------------------------//

public function creategpinter(Request $request)
    {
//dd($request);
          //chemin + nom image
        $gpinters = new Gpinter();
        
        $gpinters->numero = $request->numero;
        $gpinters->service = $request->service;
      
       
        $gpinters->save();
       
        return redirect()->route('dashboard')->with('success', 'Numéro ajouté');
    }



    public function updategpinter(Request $request, $id)
    {
        $gpinters = Gpinter::find($id);
        $gpinters->numero = $request->numero;
        $gpinters->service = $request->service;
       
        $gpinters->save();
       
        return redirect()->route('dashboard')->with('modifié', 'Numéro modifié');

    }


    public function deletegpinter($id)
    {
        $gpinters = Gpinter::where('id', '=', $id);
        $gpinters->delete();
        return redirect()->route('dashboard')->with('deleted', 'Numéro supprimé');
    }
}
