<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // public function create(Request $request){

    //     $request->validate([
    //         'titre' => 'required|string|max:255',
    //         'description' => 'required|string',
    //         'photoUrl' => 'nullable|url',
    //         'categorie' => 'required|string',
    //     ]);

    //     Post::create([
    //         'title' => $request->titre,
    //         'description' => $request->description,
    //         'photo' => $request->photoUrl,
    //         'category' => $request->categorie,
    //     ]);

    //     return redirect('/create');
    // }

    public function store(Request $request)
{
    // Validation des données
    $request->validate([
        'titre' => 'required|string|max:255',
        'description' => 'required|string',
        'photoUrl' => 'nullable|url',
        'categorie' => 'required|string',
    ]);

    // Création du post avec les données validées
    Post::create([
        'title' => $request->titre,           // Assure-toi que 'title' correspond à la colonne dans la base
        'description' => $request->description,
        'photo' => $request->photoUrl,        // PhotoUrl devient 'photo' si c'est le nom de la colonne dans la base
        'category' => $request->categorie,    // Assure-toi que 'category' correspond à la colonne dans la base
    ]);

    // Redirection après la création
    return redirect('/')->with('success', 'Article ajouté avec succès.');
}

}
