<?php
$login = 0;
$invalid = 0;

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    include 'database_conn.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from `user` where username = '$username' and password='$password'";
    $result = mysqli_query($con,$sql);

    if($result){
        $num = mysqli_num_rows($result);
        if($num > 0){
            //echo "Login Successfully";
            $login = 1;
            session_start();
            $_SESSION['username'] = $username;
            header('location:home.php');
        }else{
            //echo "Invalid Data";
            $invalid = 1;
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
        <title>Login</title>
    </head>
    <body>
    <?php
        if($invalid){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error </strong> Invalid Data!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        ?>

        <?php
        if($login){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success </strong> You are Successfully logined in.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        ?>
        <h1 class="text-center mt-5">Login</h1>
        <div class="container mt-5">
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Type your name" name="username" autocomplete="off">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Type your password" name="password" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            <div class="text-center mt-3">
                If you don't have account, click here to create account <a href="./signup.php">Sign Up</a>
            </div>
        </div>
    </body>
</html>