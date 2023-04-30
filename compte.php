<?php

include_once('db.php');
include_once('connect.php');
include_once('logout.php');

$user_email = $_SESSION['user'];
$sql = "SELECT * FROM users WHERE email = '$user_email'";
$test = $db->prepare($sql);
$test->execute();
$result = $test->fetch(PDO::FETCH_ASSOC);

if (!isset($user_email)) {
    header("Location: connexion.php");
    exit;
}

if (isset($_POST['logout_user'])) {
    $logout = new Logout();
    $logout->logout_user();
}
?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="game.css" rel="stylesheet">
    <title>Mon compte</title>
</head>

<body>
    <header>
        <div class="logo">
            <h1>Game Of Life</h1>
            <img src="img/manette.png">
        </div>
        <p>La quête ultime de ta vie commence ici</p>
    </header>
    <main>
        <!--Afficher le mail de la personne connectée et son genre -->
        <div>
            <p>Identité du joueur</p>
            <p>Nom et Prénom : <?= $result['lastname'] .' '. $result['firstname'];?></p>
            <p>Date de naissance et âge :
                <?php
                $birthdate = $result['birth'];
                $today = date("Y-m-d");
                $substract = strtotime($today) - strtotime($birthdate);
                $age = floor($substract / (365*60*60*24));
                round($age, PHP_ROUND_HALF_DOWN);
                echo $birthdate . ' (' . $age . ' ans)';
                ?>
            </p>
            <p>Genre : <?= $result['gender'];?></p>
            <p>Mail : <?= $result['email'];?></p>
            <p>Loisir(s) : <?= $result['hobbies'];?></p>
            <form method='post'>
                <input type="submit" name="logout_user" value="Quitter la partie" />
            </form>
     </div>
    </main>
    <footer>

    </footer>
</body>

</html>