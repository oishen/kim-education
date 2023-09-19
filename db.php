<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "register form";
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $conn = mysqli_connect($server, $user, $password, $db);
    $sql = "INSERT INTO `form1` (`name`, `password`) VALUES ('$name', '$password')";

    if($conn === FALSE){
        die("Connection failed:".$conn->mysqli_connect_error);
    }

    if($conn -> query($sql)===FALSE){
        echo "Connection failed:".$conn -> error;
    }
    else{
        echo include 'login.php';
    }
?>