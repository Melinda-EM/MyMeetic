<?php

session_start();

class Login {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=meetic', 'melinda', '874ckm4m84.');
    }

    public function checkLogin($email, $password) {
        try {
            $stmt = $this->db->prepare("SELECT email, password FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!$user) {
                return false;
            }
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user'] = $user['email'];
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $login = new Login();
    if ($login->checkLogin($email, $password)) {
        header('location:compte.php');
    } else {
        header('location:connexion.php');
    }
}
