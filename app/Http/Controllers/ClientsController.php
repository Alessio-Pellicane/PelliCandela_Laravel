<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view("clients", compact("clients"));
    }

    public function add_client(Request $request)
    {
        $validated = $request->validate([
            'nom_client' => 'required|string|max:50',
            'prenom_client' => 'required|string|max:50',
            'ddn_client' => 'required|date',
            'email_client' => 'nullable|string|max:100',
            'telephone_client' => 'nullable|string|max:50',
        ]);


        $client = Client::create([
            "nom" => $request->nom_client,
            "prenom" => $request->prenom_client,
            "date_naissance" => $request->ddn_client,
            "email" => $request->email_client,
            "telephone" => $request->telephone_client,
        ]);


        return redirect()->back()->with("success", "Une nouveau client à été ajouté");
    }


    public function delete_client($id)
    {
        $client = Client::find($id);

        if ($client) {
            $client->delete();
            return redirect()->back()->with("success", "Le client $id a été supprimé de la base de donnée.");
        }

        return redirect()->back()->with("error", "Aucun client supprimé.");
    }
}
