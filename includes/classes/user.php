<?php 
class user{
private $connection;//put album requests here
private $errorArray;
public function __construct($connection)
{
    $this-> connection = $connection;

}
public function login($username, $password)
{
    $query = mysqli_query($this->connection, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($query) == 1) {
        //use ibject method all the way
        return true;
    }
    return false;

}
private function verifyUsername($un){
    //do a query here where you check if the usernme is taken or not.
}
private function verifyPassword($pw1, $pw2){
    if($pw1 == $pw2 ) return true;
    return false;
}
private function verifyEmail($em1, $em2){
    if($em1 == $em2 ) return true;
    return false;
}

public function register($un, $pw1, $pw2, $em1, $em2, $bd)
{
    if(/*$this->verifyEmail($em1, $em2) && $this->verifyPassword($pw1, $pw2)*/true){
    $query = mysqli_query($this->connection, "INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_time`, `birth_day`, `country`) VALUES (NULL, '$un', '$em1', '$pw1', current_timestamp(), '$bd', NULL);");

    return true;
    }else{
        return false;
    }
}

}

?>