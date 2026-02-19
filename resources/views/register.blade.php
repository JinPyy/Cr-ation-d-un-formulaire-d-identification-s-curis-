<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Créer un compte</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }

        .card {
            border: 1px solid black;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            text-align: center;
        }

        input {
            width: 90%;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid black;
        }


        button {
            padding: 10px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>Nouveau Compte</h2>

        <form action="/create-account" method="POST">
            @csrf
            <label>Identifiant :</label>
            <input type="text" name="identifiant" required>

            <label>Mot de passe :</label>
            <input type="password" name="password" required>

            <label>Clé sécurisée</label>
            <input type="text" name="clef" placeholder="Entrez la clé pour valider" required>

            <button type="submit">Valider la création</button>
        </form>

        @if(session('error'))
            <p class="error">{{ session('error') }}</p>
        @endif

        @if($errors->any())
            @foreach($errors->all() as $error)
                <p class="error">{{ $error }}</p>
            @endforeach
        @endif
        <p><a href="/">Retour à la connexion</a></p>
    </div>
</body>

</html>