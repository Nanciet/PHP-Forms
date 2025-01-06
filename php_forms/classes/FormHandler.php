<?php
require_once "Database.php";

class FormHandler {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->conn;
    }

    public function saveFormData($data) {
        $name = $this->db->real_escape_string($data['name']);
        $email = $this->db->real_escape_string($data['email']);
        $website = $this->db->real_escape_string($data['website']);
        $comment = $this->db->real_escape_string($data['comment']);
        $gender = $this->db->real_escape_string($data['gender']);

        $sql = "INSERT INTO user_data (name, email, website, comment, gender) 
                VALUES ('$name', '$email', '$website', '$comment', '$gender')";

        return $this->db->query($sql);
    }

    public function getAllData() {
        $sql = "SELECT * FROM user_data";
        return $this->db->query($sql);
    }
}
