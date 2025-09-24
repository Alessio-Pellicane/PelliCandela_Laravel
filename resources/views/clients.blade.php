<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PelliCandela - Clients</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @include('partials/header')

    <div class="create-client-form">
        <form action="{{ url('/clients') }}" method="post">
            @csrf
            <fieldset>
                <legend>Ajouter un nouveau client</legend>

                <div class="client-item-form">
                    <label for="nom_client">Nom</label>
                    <input type="text" name="nom_client" id="nom_client">
                </div>

                <div class="client-item-form">
                    <label for="prenom_client">Prénom</label>
                    <input type="text" name="prenom_client" id="prenom_client">
                </div>

                <div class="client-item-form">
                    <label for="ddn_client">Date de naissance</label>
                    <input type="date" name="ddn_client" id="ddn_client">
                </div>

                <div class="client-item-form">
                    <label for="email_client">Email</label>
                    <input type="mail" name="email_client" id="email_client">
                </div>

                <div class="client-item-form">
                    <label for="telephone_client">Téléphone</label>
                    <input type="text" name="telephone_client" id="telephone_client">
                </div>
                <input type="submit" value="Enregistrer le client">

                @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                            <li>Erreur :{{ $error }}</li>
                    @endforeach
                        </ul>
                @endif
            </fieldset>
        </form>
    </div>

   @if (session("success"))
    <p>Message success: {{  session("success") }}</p>
    @endif

    @if (session("error"))
    <p>Message d'erreur : {{  session("error") }}</p>
    @endif

    <div class="table-client">
        <table>
            <thead>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Date de naissance</th>
                <th>Email</th>
                <th>Téléphone</th>
            </thead>
            <tbody>
                @if ($clients)
                    @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->nom }}</td>
                        <td>{{ $client->prenom }}</td>
                        <td>{{ $client->date_naissance }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->telephone }}</td>
                        <td>
                            <form action="{{ url('clients/delete/'.$client->id) }}" method="post">
                                @csrf
                                <input type="submit" value="Supprimer">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    @include("partials/footer")
</body>

</html>