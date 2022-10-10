
<?php
    include 'database_conn.php';
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
        

        $sql = "insert into `crud`(name,email,gender,email_status) VALUES
        ('$name','$email','$gender','$email_status')";

        $result = mysqli_query($conn,$sql);

        if($result){
            //echo "Data Inserted Successfully";

            // Move to display php file to show the inserted record
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
    
        <title>CRUD Operations</title>
    </head>
    <body>
        <div class="container my-5">
            <form method="post"> 
                <div class="form-group">
                    <label for="name" class="form-label">Name :</label>
                    <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete = "off">
                </div>

                <div class="form-group">
                    <label for="name" class="form-label">Email :</label>
                    <input type="text" class="form-control" placeholder="Enter Your Email" name="email" autocomplete = "off">
                </div>

                <p>Gender :</p>
                <div class="form-group">
                    <input class="gender" type="radio" name="gender" id="gender-label" value = "Male" checked>
                    <label class="gender-label" for="gender-label">
                        Male
                    </label>
                </div>

                <div class="form-group">
                    <input class="gender" type="radio" name="gender" id="gender-label" value = "Female" >
                    <label class="gender-label" for="gender-label">
                        Female
                    </label>
                </div>

                <div class="form-group">
                    <input type="checkbox" class="email-status" id="email-status" name="email-status">
                    <label class="email-status" for="email-status">Receive Email From Us</label>
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>

            </form>
        </div>
    </body>
</html>