<?php
include("./config/db_connection.php");

class Logics
{
    private $con;

    public function __construct()
    {
        $db = new DB_connection();
        $this->con = $db->getConnection();
    }


    public function register($username, $email, $password)
    {
        $insert_query = "INSERT INTO users(name, email, password) VALUES('$username', '$email', '$password')";
        $result = $this->con->prepare($insert_query);
        $result->execute();
        header("location: login.php");
    }


    public function login($email, $password)
    {
        $select_query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = $this->con->query($select_query);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            header("location: dashboard.php");
            exit;
        } else {
            return "Invalid email or password!";
        }
    }


    public function getUser($id)
    {
        $select_query = "SELECT * FROM users WHERE id = $id";
        $result = $this->con->query($select_query);
        return $result->fetch_assoc();
    }

    //  public function forgetPassword($password){

    //     $update_query = "UPDATE users SET  password = '$password' WHERE id = $id";
    //     $result = $this->con->prepare($update_query);
    //     $execute = $result->execute();

    // }


}
?>