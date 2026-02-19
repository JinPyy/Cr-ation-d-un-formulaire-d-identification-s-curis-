<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
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

        .buttons {
            display: flex;
            justify-content: space-around;
            margin-top: 10px;
        }

        button {
            padding: 10px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        .msg {
            color: blue;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="card">
        <img src="{{ asset('logo.png') }}" alt="Logo" style="width: 100px;">
        <form action="/login-process" method="POST">
            @csrf
            <input type="text" name="identifiant" placeholder="Identifiant">
            <input type="password" name="password" placeholder="Mot de passe">

            <div class="buttons">
                <button type="reset" style="background: gray">Reset</button>
                <button type="submit" name="action" value="ok" style="background: orangered;">Ok</button>
                <a href="/register"
                    style="background: violet; padding: 10px; border-radius: 5px; color: white; text-decoration: none; font-size: 13px;">
                    Ajout compte
                </a>
            </div>
        </form>



        @if(session('message'))
            <p class="msg">{{ session('message') }}</p>
        @endif
    </div>
</body>

</html>