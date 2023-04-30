<?php

class Logout {
    public function logout_user() {
        session_unset();
        session_destroy();
        header("Location: connexion.php");
        echo("Vous avez été correctement déconnecté du site <br/><br/>");
    }
}
  
