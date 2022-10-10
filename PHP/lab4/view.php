<?php

    include "database_conn.php";

    $id = $_GET['viewid'];
    $sql = "Select * from `crud` where id = $id";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
    $gender = $row['gender'];
    $email_status = $row['email_status'];
    if($email_status == "Yes"){
        $status = "You will Receive e-mails from us";
    }else{
        $status = "You will not Receive e-mails";
    }

    echo "<h1>View Record</h1>";
    echo "<hr>";
    echo "<h2>Name</h2>";
    echo $name;
    echo "<br>";
    echo "<h2>Email</h2>";
    echo $email;
    echo "<br>";
    echo "<h2>Gender</h2>";
    echo $gender;
    echo "<br>";
    echo "<br>";
    echo $status;


?>