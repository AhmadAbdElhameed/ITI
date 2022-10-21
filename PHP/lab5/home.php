
<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:login.php');
    }


?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- <style>
        .container{
            margin-
        }
    </style> -->
    </head>
    <body>
        <div class="container mt-5 text-center">
            <h1 class="text-warning">Welcome, <?php echo $_SESSION['username']?></h1>
            <img src="./iti.jpg" alt="" >
        </div>
        <div class="out mt-1 text-center">
            <a href="logout.php" class="btn btn-primary">Log out</a>
        </div>
    </body>
</html>