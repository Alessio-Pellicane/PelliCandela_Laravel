<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PelliCandela - Page d'accueil</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    @include('partials/header')

    <main>
        <p>Bienvenue sur la page d'accueil de PelliCandela</p>

        @if (isset($nbClients) && $nbClients > 0)
        <p>Il y a actuellement {{ $nbClients }} clients</p>
        @endif

        @if (isset($nbCommandes) && $nbCommandes > 0)
        <p>Il y a actuellement {{ $nbCommandes }} commandes</p>
        @endif
    </main>

    @include("partials/footer")
</body>

</html>