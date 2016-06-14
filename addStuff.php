<?php
$id=$_GET['id'];
if (isset($_POST ['weight'])) {
    $weight = $_POST ['weight'];
    $height = $_POST ['height'];
    $bloodType = $_POST ['bloodType'];
   
    
    require_once 'DATABASE-CONFIG.php';
    $link = mysqli_connect('localhost', 'root', '', 'health-record');
    if (mysqli_connect_errno())
        die("Fail to connect to DB server: " . mysqli_connect_error());

    echo $weight;
    echo $height;
    echo $bloodType;
    
        $query = "INSERT INTO brief_desc (weight,height,blood_type,user_id) VALUES('" . $weight . "','" . $height . "','" . $bloodType . "','" . $id . "')";
        $res = mysqli_query($link, $query);
        $query2 = "UPDATE user SET state=1";
        $res2 = mysqli_query($link, $query2);
        mysqli_close($link);
        header("Location: MyHealthRecord.php");
       
        
    }
    
    else if (isset($_POST ['nationality'])) {
    $nationality = $_POST ['nationality'];
    $sex = $_POST ['sex'];
    $dateofBirth = $_POST ['dateofBirth'];
    $mobile = $_POST ['mobile'];
   
    
    require_once 'DATABASE-CONFIG.php';
    $link = mysqli_connect('localhost', 'root', '', 'health-record');
    if (mysqli_connect_errno())
        die("Fail to connect to DB server: " . mysqli_connect_error());

    echo $weight;
    echo $height;
    echo $bloodType;
    
        $query = "INSERT INTO more_det (nationality,sex,date_of_birth,mobile_phone,user_id) VALUES('" . $nationality . "','" . $sex . "','" . $dateofBirth . "','" . $mobile . "','" . $id . "')";
        $res = mysqli_query($link, $query);
        $query2 = "UPDATE user SET state=2";
        $res2 = mysqli_query($link, $query2);
        mysqli_close($link);
        header("Location: MyHealthRecord.php");
       
        
    }



?>


