<?php
class Database {
    private $host = "localhost";
    private $dbname = "meetic";
    private $username = "melinda";
    private $password = "874ckm4m84.";
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
    }

    public function insertData($firstname, $lastname, $date, $gender, $city, $email, $passwrd, $hobbies, $game) {
        try {
            $hashed_password = password_hash($passwrd, PASSWORD_DEFAULT);
            $stmt = $this->pdo->prepare("INSERT INTO users (firstname, lastname, birth, gender, city, email, password, hobbies, game)
            VALUES (:firstname, :lastname, :birth, :gender, :city, :email, :password, :hobbies, :game)");
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':birth', $date);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':city', $city);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashed_password);
            $stmt->bindParam(':hobbies', $hobbies);
            $stmt->bindParam(':game', $game);

            $stmt->execute();
            header("Location: connexion.php");
            exit();
        } catch(PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    public function __destruct() {
        $this->pdo = null;
    }
}

$database = new Database();

// Récupération des données du formulaire
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$date = $_POST['birth'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$email = $_POST['email'];
$passwrd = $_POST['password'];
$hobbies = $_POST['hobbies'];
$game = $_POST['game'];

$birth_timestamp = strtotime($date);
$current_timestamp = strtotime("now");

$age = ($current_timestamp - $birth_timestamp) / (60 * 60 * 24 * 365);

    if ($age < 18) {
        echo "Vous devez avoir au moins 18 ans pour vous inscrire.";
         // Redirection vers la page d'inscription avec une erreur
        header("Location: inscription.php?error=age");
    exit();
    } else {
            $database->insertData($firstname, $lastname, $date, $gender, $city, $email, $passwrd, $hobbies, $game);
    }