<?php

include "database_conn.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Crud Operations</title>
    <style>
        .text-light{
            text-decoration: underline;
        }
        .text-light:hover {
            text-decoration: none;
        }
        /**style="text-decoration: none;" */
    </style>
</head>
<body>

    <div class="conatiner">
        <button class='btn btn-primary'><a href="register.php" class="text-light" >Add User</a></button>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Email Status</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php

                $sql = "select * from `crud`";
                $result = mysqli_query($conn,$sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $id= $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $gender = $row['gender'];
                        $email_status = $row['email_status'];
                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$gender.'</td>
                        <td>'.$email_status.'</td>
                        <td>
                        <button class="btn btn-success"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                        <button class="btn btn-warning"><a href="view.php?viewid='.$id.'" class="text-light">View</a></button>
                        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                        </td>
                    </tr>';
                    }

                }
            ?>

        </tbody>
    </table>
</body>
</html>