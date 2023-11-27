<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matelas;

class MatelasController extends Controller
{
    // afficher la liste des matelas
    public function index()
    {
        $matelas = Matelas::all();
        return view('matelas.index', compact('matelas'));
    }

    // afficher le formulaire de modification d'un matelas
    public function edit($id)
    {
        $matelas = Matelas::find($id);
        return view('matelas.edit', compact('matelas'));
    }

    // modif les informations d'un matelas
    public function update(Request $request, $id)
    {
        $matelas = Matelas::find($id);
        $matelas->update($request->all());
        return redirect('/')->with('success', 'Matelas mis à jour avec succès');
    }

    // afficher formulaire d'ajout matelas
    public function create()
    {
        return view('matelas.create');
    }

    // ajouter un matela
    public function store(Request $request)
    {
        Matelas::create($request->all());
        return redirect('/')->with('success', 'Matelas ajouté avec succès');
    }

    // supprimer un matelas
    public function destroy($id)
    {
        $matelas = Matelas::find($id);
        $matelas->delete();
        return redirect('/')->with('success', 'Matelas supprimé avec succès');
    }
}
