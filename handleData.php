<?php

    class userController
    {
        public function __construct()
        {
            $db = new DatabaseConnection();
            $this->conn = $db->conn;
        }

        public function index()
        {
            $query = "SELECT id, username, email, date FROM ftree_v1_4_users LIMIT 10";
            $result = $this->conn->query($query);
            if ($result->num_rows > 0) {
                return $result; 
            } else {
                return false;
            }
        }
    }

?>