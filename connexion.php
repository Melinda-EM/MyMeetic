<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="game.css" rel="stylesheet">
    <title>Connexion</title>
</head>

<body>
    <header>
        <div class="logo">
            <h1>Game Of Life</h1>
            <img src="img/manette..png">
        </div>
        <p>La quête ultime de ta vie commence ici</p>
    </header>
    <main>
        <p>Reprendre la partie où tu t'étais arrêté ?</p>
        <form method="POST" action="connect.php" autocomplete="off" onsubmit="return validateForm()"> 
            <fieldset>
                <legend>Se connecter</legend>
                <div id="email_form">
                    <label>Email : </label>
                    <input type="email" id="email" name="email" placeholder="monadresse@mail.com">
                </div>
                <div id="password_form">
                    <label>Mot de passe : </label>
                    <input type="password" id="password" name="password" placeholder="mot de passe">
                </div>
                <div id="submit_form">
                    <!-- <input type="submit" class="button" value="New Game"> -->
                    <button name="button" type="submit" value="Submit"><img src="img/coeur.png"></button>
                </div>
            </fieldset>
        </form>
        <div class="add">
            <p>Pas de partie ? Viens en créer une et démarrer l'aventure de ta vie !</p>
            <a href="inscription.php">Créer une partie</a>
        </div>
    </main>
    <footer>
        <div class="info">
            <p>Copyright &copy; 2023 GoL</p>
        </div>
    </footer>
    <script src="form.js"></script>
</body>

</html>