<?php

    $conn = new mysqli("localhost","root","","crud");

    if(!$conn){
        //echo "Connection Successfull";
        echo die(mysqli_error($conn));
    }

?>