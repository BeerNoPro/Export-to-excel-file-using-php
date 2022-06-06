<?php

    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'data_ongbata');

    class DatabaseConnection
    {
        public function __construct()
        {
            $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

            if ($conn->connect_error)
            {
                die ("<h1>Database connection failed</h1>");
            }

            return $this->conn = $conn;
        }
    }

?>