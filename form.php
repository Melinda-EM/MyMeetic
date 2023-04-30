<?php

$user = 'melinda';
$passwd = '874ckm4m84.';
$db = new PDO('mysql:host=localhost; dbname=meetic', $user, $passwd);

if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}

$firstname = $_REQUEST['firstname'];
$laststname = $_REQUEST['name'];
$date = $_REQUEST['birth'];
$gender = $_REQUEST['gender'];
$city = $_REQUEST['city'];
$email = $_REQUEST['email'];
$passwrd = $_REQUEST['password'];
$hobbies = $_REQUEST['hobbies'];
$game = $_REQUEST['game'];

if($name !='' || $email !=''){
$sql = $db->query("INSERT INTO users(firstname, lastname, birth, genre, city, email, password, hobbies, game) VALUES ('$firstname', '$lastname', '$date', '$gender', '$city', '$email', '$passwrd', '$hobbies', '$game')");
    echo "Les données ont été sauvegardées avec succès !";
} else {
    echo "ERROR: Sorry $sql." . mysql_error($conn);
}

mysql_close($conn);