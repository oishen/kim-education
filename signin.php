<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "kim";
    $email_or_phone = $_POST["email&phone"];
    $password = $_POST["password"];
    $conn = mysqli_connect($server, $user, $pass, $db);
    $sql = "INSERT INTO `signup` (`email_or_phone`, `password`) VALUES ('$email_or_phone', '$password')";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $email = $_POST["email&phone"];
        $password = $_POST["password"];
  
        // Check if the email is already registered
        $sql = "SELECT * FROM signup WHERE email_or_phone='$email' & password='$password'";
        $result = mysqli_query($conn, $sql);
  
        if (mysqli_num_rows($result) > 0) {
            // The email is has registered
            // Hash the password
            //$password = password_hash($password, PASSWORD_DEFAULT);
            echo(include 'index.html');
            mysqli_query($conn, $sql);

        } else {
            // The email is not register
            echo("Email is not registered yet!!!");
            
        }
    }

?>