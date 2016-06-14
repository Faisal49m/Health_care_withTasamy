<?php

if (isset($_POST ['name'])) {
    $nameo = $_POST ['name'];
    $email = $_POST ['email'];
    $pwd = hash('sha256',$_POST['password']);
    
    require_once 'DATABASE-CONFIG.php';
    $link = mysqli_connect('localhost', 'root', '', 'health-record');
    if (mysqli_connect_errno())
        die("Fail to connect to DB server: " . mysqli_connect_error());

    $query = "SELECT * FROM user WHERE email='" . $email . "'";

    $rows = @mysqli_query($link, $query);
    $rowCount = $rows->num_rows;

    if ($rowCount > 0) {
        echo 'This email is already registered, go and <a href="#login-modal" data-toggle="modal" >sign in here</a>';
        mysqli_close($link);
    } else {
        $query = "INSERT INTO user(name,email,password,state) VALUES('" . $nameo . "','" . $email . "','" . $pwd . "',0)";
        $res = mysqli_query($link, $query);
        mysqli_close($link);
       
        echo 'Congrats you have become just become a user, now go on and <a href="#login-modal" data-toggle="modal" >sign in here</a>';
    }
} 


?>


