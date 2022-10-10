<?php

    include "database_conn.php";
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql = "delete from `crud` where id =$id";
        $result = mysqli_query($conn,$sql);
        if($result){
            //echo "deleted Successfully";
            
            // go to table page after deletion record
            header("location:display.php");
        }else{
            echo die(mysqli_error($conn));
        }
    }
?>