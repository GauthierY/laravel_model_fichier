<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receipe;

class ReceipeController extends Controller
{
    // affiche les recettes
    public function index() {
        $receipes = Receipe::all();
        return view('index',compact('receipes') );
    }
    // affiche le formulaire
    public function toto() {
        return view('formulaire');
    }

    // Enregistre les données du formulaire dans la base de données
    public function titi(Request $request) {
    $request->validate(
      ['image' => 'required|mimes:png,jpg,jpeg,gif']
    );
  
    $newReceipe = new Receipe;
    $imageName = time() . '.' . $request->image->extension();  
    $request->image->move(public_path('images'), $imageName);
  
    $newReceipe->name = $request->name;
    $newReceipe->description = $request->description;
    $newReceipe->category = $request->category;
    $newReceipe->image = '/images/' . $imageName;
    $newReceipe->save(); // la methode save est une methode de l'ORM ELOQUENT equivalent à INSERT INTO... 
  
    return redirect()->route('riri')
                     ->with('success','Recette ajouté avec succcès.');
  }
 
}
