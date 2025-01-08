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

    public function getAllData($limit, $offset) {
        $query = "SELECT * FROM user_data ORDER BY id ASC LIMIT ? OFFSET ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ii", $limit, $offset);
        $stmt->execute();
        return $stmt->get_result();
    }
    
    public function getTotalRecords() {
        $sql = "SELECT COUNT(*) AS total FROM user_data";
        $result = $this->db->query($sql);
        return $result->fetch_assoc()['total'];
    }

    public function getRecordById($id) {
        $sql = "SELECT * FROM user_data WHERE id = $id";
        return $this->db->query($sql)->fetch_assoc();
    }

    public function updateRecord($id, $data) {
        $name = $this->db->real_escape_string($data['name']);
        $email = $this->db->real_escape_string($data['email']);
        $website = $this->db->real_escape_string($data['website']);
        $comment = $this->db->real_escape_string($data['comment']);
        $gender = $this->db->real_escape_string($data['gender']);

        $sql = "UPDATE user_data SET 
                name='$name', email='$email', website='$website', comment='$comment', gender='$gender' 
                WHERE id=$id";

        return $this->db->query($sql);
    }

    public function deleteRecord($id) {
        $sql = "DELETE FROM user_data WHERE id=$id";
        return $this->db->query($sql);
    }
}
