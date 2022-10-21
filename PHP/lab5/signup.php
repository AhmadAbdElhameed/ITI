<?php

$user = 0;
$success = 0;
$not_matched = 0;

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    include 'database_conn.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if user already exist

    $sql = "select * from `user` where username = '$username'";
    $result = mysqli_query($con,$sql);

    if($result){
        $num = mysqli_num_rows($result);
        if($num > 0){
            // echo "User already exist";
            $user = 1;
        }else{
            if($password === $confirm_password){
                $sql = "insert into `user` (username,password)
                VALUES('$username','$password')";
                $result = mysqli_query($con,$sql);
    
                if($result){
                    // echo "Sign Up Successfully";
                    $success = 1;
                    header('location:login.php');
                }
            }
            else{
                //echo "Password didn't match";
                $not_matched = 1;
            }

        }
    }
}


?>



<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css">
        <title>Sign Up</title>
    </head>
    <body>

        <?php
        if($user){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Ohh Sorry!</strong> User Alreay exist.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        ?>
        <?php
        if($not_matched){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error! </strong>Password didn\'t matched, please try again.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        ?>

        <?php
        if($success){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>It\'s done</strong> Sign Up Successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        ?>
        <h1 class="text-center mt-5">Sign Up</h1>
        <div class="container mt-5">
            <form action="signup.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Type your name" name="username" autocomplete="off">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Type your password" name="password" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Re-Type your password" name="confirm_password" autocomplete="off">
                </div>
                <!-- <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
            </form>
        </div>
    </body>
</html>