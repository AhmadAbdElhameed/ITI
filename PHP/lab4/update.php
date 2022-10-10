
<?php
    include 'database_conn.php';
    $id = $_GET['updateid'];
    $sql = "Select * from `crud` where id = $id";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
    $gender = $row['gender'];
    $email_status = $row['email_status'];

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'] ;
        $gender = $_POST['gender'];
        // check if user want to recieve emails or not
        if(isset($_POST['email-status'])){
            $email_status = "Yes";
        }else{
            $email_status = "No";
        }
        

        $sql = "update `crud` set id = $id,name = '$name',email = '$email' ,gender = '$gender',email_status = '$email_status' WHERE id = $id";

        $result = mysqli_query($conn,$sql);

        if($result){
            //echo "Data Updated Successfully";

            // Move to display php file to show the updated record
            header("location:display.php");
        }else{
            echo die(mysqli_error($conn));
        }
    }


?>

<html>
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
        <title>Crud Operations</title>
    </head>
    <body>
        <div class="container my-5">
            <form method="post"> 
                <div class="form-group">
                    <label for="name" class="form-label">Name :</label>
                    <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete = "off" value = <?php echo $name;?>>
                </div>

                <div class="form-group">
                    <label for="name" class="form-label">Email :</label>
                    <input type="text" class="form-control" placeholder="Enter Your Email" name="email" autocomplete = "off" value = <?php echo $email;?>>
                </div>

                <p>Gender :</p>
                <div class="form-group">
                    <input class="gender" type="radio" name="gender" id="gender-label" <?=$row['gender']=="Male" ? "checked" : ""?> value = "Male" checked>
                    <label class="gender-label" for="gender-label">
                        Male
                    </label>
                </div>

                <div class="form-group">
                    <input class="gender" type="radio" name="gender" id="gender-label" <?=$row['gender']=="Female" ? "checked" : ""?> value = "Female" >
                    <label class="gender-label" for="gender-label">
                        Female
                    </label>
                </div>

                <div class="form-group">
                    <input type="checkbox" class="email-status" id="email-status" name="email-status" <?=$row['email_status']=="Yes" ? "checked" : ""?>>
                    <label class="email-status" for="email-status">Receive Email From Us</label>
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Update</button>

            </form>
        </div>
    </body>
</html>