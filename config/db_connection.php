<?php

class DB_connection{
    private $con;

    public function __construct()
    {
        $this->con = mysqli_connect("localhost", "root", "", "login-signup");

        if (!$this->con) {  
            die("Failed to connect DB");
        } else {
            echo "DB connected";
        }
    }

    public function getConnection()
    {
        return $this->con;
    }

}

?>
