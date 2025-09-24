<header>
    <h1>PelliCandela</h1>
    <nav>
        <ul>
            <li><a href=" {{url('/')}} " class="{{ request()->is('/') ? 'selected' : ' ' }}">Accueil</a></li>
            <li><a href=" {{url('clients')}} " class="{{ request()->is('clients') ? 'selected' : ' ' }}">Clients</a></li>
            <li><a href=" {{url('produits')}} " class="{{ request()->is('produits') ? 'selected' : ' ' }}">Produits</a></li>
            <li><a href=" {{url('commandes')}} " class="{{ request()->is('commandes') ? 'selected' : ' ' }}">Commandes</a></li>
        </ul>
    </nav>
</header>