<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importation de la classe étudiant
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    //Définition de la fonction qui retourne la vue sur la liste des étudiants
    public function Liste_etudiant()
    {
        $etudiants = Etudiant::paginate(4); 
        return view('etudiant.liste', compact('etudiants'));
    }

    //Définition de la fonction qui ajoute un nouveau étudiant
    public function ajouter_etudiant()
    {
        return view('etudiant.ajouter');
    }

    public function ajouter_etudiant_traitement(Request $request)
    {
        $request->validate([
            'Noms' => 'required',
            'Prenoms' => 'required',
            'Classe' => 'required',
        ]);

        // Extensation de l'objet etudiant
        $etudiant = new Etudiant();
        $etudiant->Noms =  $request->Noms;
        $etudiant->Prenoms =  $request->Prenoms;
        $etudiant->Classe =  $request->Classe;
        $etudiant->save();

        return redirect('/ajouter')->with('status', 'L\'étudiant a bien été ajouté avec succès.');

    }

    //Création de la fonction qui permet de modifier un étudiant dans la BD
    public function update_etudiant($id)
    {
        $etudiants = Etudiant::find($id);
        return view('etudiant.update', compact('etudiants'));
    }

    public function update_etudiant_traitement(Request $request)
    {
        $request->validate([
            'Noms' => 'required',
            'Prenoms' => 'required',
            'Classe' => 'required',
        ]);
        $etudiant = Etudiant::find($request->id);
        $etudiant->Noms =  $request->Noms;
        $etudiant->Prenoms =  $request->Prenoms;
        $etudiant->Classe =  $request->Classe;
        $etudiant->update();

        return redirect('/etudiant')->with('status', 'L\'étudiant a bien été modifié avec succès.');
    }

    //Création de la fonction qui supprime un étudiant dans la BD
    public function delete_etudiant($id) 
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();

        return redirect('/etudiant')->with('status', 'L\'étudiant a bien été supprimé avec succès.');
    }
}
