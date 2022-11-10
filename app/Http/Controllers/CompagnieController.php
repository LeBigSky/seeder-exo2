<?php

namespace App\Http\Controllers;

use App\Models\Compagnie;
use Illuminate\Http\Request;

class CompagnieController extends Controller
{
    public function store (Request $request){
        $store= new Compagnie();
        $store->compagnie = $request->compagnie;
        $store->adresse = $request->adresse;
        $store->nom = $request->nom;
        $store->prenom = $request->prenom;
        $store->email = $request->email;
        $store->telephone = $request->telephone;
        $store->img = $request->img;
        $store->save();
        return redirect('/');
    }
    public function home (){
        $compagnies= Compagnie::all();
        return view('home', compact('compagnies'));
    }
    public function create (){
        $compagnies= Compagnie::all();
        return view('pages.create', compact('compagnies'));
    }
    public function show ($id){
        $compagnie= Compagnie::find($id);
        return view('pages.show', compact('compagnie'));
    }
    public function edit ($id){
        $compagnie= Compagnie::find($id);
        return view('pages.edit', compact('compagnie'));
    }
    public function delete ($id){
        $compagnie= Compagnie::find($id);
        $compagnie->delete();
        return redirect('/');
    }
    public function update (Request $request, $id){
        $update= Compagnie::find($id);
        $update->compagnie = $request->compagnie;
        $update->adresse = $request->adresse;
        $update->nom = $request->nom;
        $update->prenom = $request->prenom;
        $update->email = $request->email;
        $update->telephone = $request->telephone;
        $update->img = $request->img;
        $update->save();
        return redirect('/');
    }
}
