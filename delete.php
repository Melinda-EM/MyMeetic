<?php

class UserAccount {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=database_name', 'melinda', '874ckm4m84.');
    }

    public function deleteAccount($user_id) {
        try {
            $stmt = $this->db->prepare("DELETE FROM users WHERE id = :user_id");
            $stmt->bindParam(':user_id', $user_id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}