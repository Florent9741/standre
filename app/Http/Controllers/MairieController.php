<?php

namespace App\Http\Controllers;
use App\Models\Nums2s;
use App\Models\Nums;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Throwable;

class MairieController extends Controller
{

    public function index(){
        return view('welcome');
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
   
        return view('backend', [
            'nums' => $nums,
            'nums2s' => $nums2s,
            
        ]);
    }


    public function crud()
    {
        $nums = Nums::All();  
        
        return view('backend', [
            'nums' => $nums,
               
        ]);
    }

    
    public function crud2()
    {
        $nums2s = Nums2s::All();
       
   
        return view('backend2', [
            'nums2s' => $nums2s,
            
        ]);
    }

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
       
        return redirect()->route('backend')->with('success', 'Numéro ajouté');
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
       
        return redirect()->route('backend')->with('modifié', 'Numéro modifié');

    }


    public function delete($id)
    {
        $nums = Nums::where('id', '=', $id);
        $nums->delete();
        return redirect()->route('backend')->with('deleted', 'Numéro supprimé');
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
       
        return redirect()->route('backend')->with('success', 'Numéro ajouté');
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
       
        return redirect()->route('backend')->with('modifié', 'Numéro modifié');

    }


    public function deletenums2($id)
    {
        $nums2s = Nums2s::where('id', '=', $id);
        $nums2s->delete();
        return redirect()->route('backend')->with('deleted', 'Numéro supprimé');
    }

//---------------------------------------------------------------------------------------------------------------------//

}
