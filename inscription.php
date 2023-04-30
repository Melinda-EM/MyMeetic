<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="game.css" rel="stylesheet">
    <title>Inscription</title>
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
        <p>Commence l'aventure dès maintenant pour trouver le/la gamer(euse) du jeu de ta vie</p>
        <form action="subscribe.php" method="post" autocomplete="off" onsubmit="return validateForm()">
            <fieldset>
                <legend>Inscription</legend>
                <div id="firstname_form">
                    <label>Prénom : </label>
                    <input type="text" id="firstname" name="firstname" placeholder="Entrer votre prénom" minlength="2">
                </div>
                <div id="name_form">
                    <label>Nom : </label>
                    <input type="text" id="lastname" name="lastname" placeholder="Entrer votre nom" minlength="2">
                </div>
                <div id="birth_form">
                    <label>Date de naissance : </label>
                    <input type="date" id="date" name="birth" value="yyyy-mm-dd">
                </div>
                <div id="gender_form">
                    <label>Genre : </label>
                    <input type="radio" value="homme" name="gender">
                    <span>Homme</span>
                    <input type="radio" value="femme" name="gender">
                    <span>Femme</span>
                    <input type="radio" value="autre" name="gender">
                    <span>Autre</span>
                    <input type="radio" value="androide" name="gender">
                    <span>Androïde</span>
                </div>
                <div id="city_form">
                    <label>Point de spawn : </label>
                    <input type="text" id="city" name="city" placeholder="Entrer votre ville">
                </div>
                <div id="email_form">
                    <label>Email : </label>
                    <input type="email" id="email" name="email" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" placeholder="monadresse@mail.com">
                </div>
                <div id="password_form">
                    <label>Mot de passe : </label>
                    <input type="password" id="password" name="password" placeholder="Créer un mot de passe">
                </div>
                <div id="hobbies_form">
                    <label>Hobbies : </label>
                    <br/>
                    <input type="checkbox" value="Bricolage" name="hobbies">
                    <span>Bricolage</span>
                    <input type="checkbox" value="Cinema" name="hobbies">
                    <span>Cinema</span>
                    <input type="checkbox" value="Couture" name="hobbies">
                    <span>Couture</span>
                    <br/>
                    <input type="checkbox" value="Cuisine" name="hobbies">
                    <span>Cuisine</span>
                    <input type="checkbox" value="Danse" name="hobbies">
                    <span>Danse</span>
                    <input type="checkbox" value="Dessin" name="hobbies">
                    <span>Dessin</span>
                    <input type="checkbox" value="Informatique" name="hobbies">
                    <span>Informatique</span>
                    <br/>
                    <input type="checkbox" value="Jardin" name="hobbies">
                    <span>Jardinage</span>
                    <input type="checkbox" value="Lecture" name="hobbies">
                    <span>Lecture</span>
                    <input type="checkbox" value="Musique" name="hobbies">
                    <span>Musique</span>
                    <br/>
                    <input type="checkbox" value="Photographie" name="hobbies">
                    <span>Photographie</span>
                    <input type="checkbox" value="Randonnée" name="hobbies">
                    <span>Randonnée</span>
                    <input type="checkbox" value="Theatre" name="hobbies">
                    <span>Théâtre</span>
                    <br/>
                    <input type="checkbox" value="Shopping" name="hobbies">
                    <span>Shopping</span>
                    <input type="checkbox" value="Sport" name="hobbies">
                    <span>Sport</span>
                </div>
                <div id="game_form">
                    <label>Type de jeu : </label>
                    <select name="game">
                        <option>--Choisir un type de jeu--</option>
                        <option>Action</option>
                        <option>Aventure</option>
                        <option>Beat 'em all</option>
                        <option>Combat</option>
                        <option>Jeux de rôle</option>
                        <option>Plateforme</option>
                        <option>Réflexion</option>
                        <option>Rythme</option>
                        <option>Simulation</option>
                        <option>Sport</option>
                        <option>Tir</option>
                    </select>
                </div>
                <div id="submit_form">
                    <!-- <input type="submit" class="button" value="New Game"> -->
                    <button name="button" type="submit" value="Submit"><img src="img/coeur.png"></button>
                </div>
            </fieldset>
        </form>
        <div class="add">
            <p>Reprendre la partie en cours ?</p>
            <a href="connexion.php">Charger la partie</a>
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