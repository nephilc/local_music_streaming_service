<?php 
class user{
private $connection;//put album requests here

public function __construct($connection)
{
    $this-> connection = $connection;

}
public function login($username, $password)
{
    $query = mysqli_query($this->connection, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($query) == 1) {
        return true;
    }
    return false;

}
public function register($username, $password)
{
    $query = mysqli_query($this->connection, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($query) == 1) {
        return true;
    }
    return false;

}


}

?>