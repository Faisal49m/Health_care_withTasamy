<?php

session_start();
require_once 'DATABASE-CONFIG.php';
$link = mysqli_connect('localhost', 'root', '', 'health-record');
if (mysqli_connect_errno())
    die("Fail to connect to DB server: " . mysqli_connect_error());



$email = $_POST['signinemail'];
$pwd = $_POST['signinpwd'];
$emailGood=mysqli_real_escape_string($link,$email);
$pwdGood=mysqli_real_escape_string($link,$pwd);

$pwdGood2 = hash('sha256',$pwdGood);


        $query = "SELECT * FROM user WHERE email ='" . $emailGood . "' AND password ='" . $pwdGood2 . "'";
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $row['name'];
            $state = $row['state'];
            if ($state==0)
                 header("Location: enterInfo.php");
            //mysqli_close($link);
            header("Location: MyHealthRecord.php");
           
        } else {
            mysqli_close($link);
            echo "Failed to login";
            echo "///////";
            echo $pwdGood2;
            //header("Location:index.php");
        }
    
?>

