<!DOCTYPE html>

<html>
    <head>
        <style>
            .error{
                color:red;
            }
        </style>
    </head>
    <body>
        <?php
            // define variables
            $nameErr = $emailErr = $genderErr = "";
            $name = $email = $gender = $comment = $group =  "";
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if(empty($_POST['name'])){
                    $nameErr = "Please Enter A valid name";

                }else{
                    $name = test_input($_POST['name']);
                    if(!preg_match("/^([a-zA-Z])$/",$name)){
                        $nameErr = "Only letters and white spaces allowed";
                }
            }
        }

        if(empty($_POST['email'])){
            $emailErr = "Please Enter A valid email";

        }else{
            $email = test_input($_POST['email']);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $emailErr = "This Email is incorrect";
        }
    }

    if(empty($_POST['gender'])){
        $genderErr = "Please Select a gender";
    }else{
        $gender = test_input($_POST['gender']);

    }

    if(empty($_POST['group'])){
        $group = "NA";
    }else{
        $group = test_input($_POST['gender']);

    }

    if(empty($_POST['comment'])){
        $comment = "";
    }else{
        $comment = test_input($_POST['comment']);

    }

    if(empty($_POST['courses'])){
        $courses = "";
    }else{
        $courses = test_input($_POST['courses']);

    }

    Check if form is submitted successfully



    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

        ?>

<h1>Registeration Form Using PHP and HTML</h1>
<span style="color:red;">*</span><span style="font-style:italic;font-weight: bold;">   Required Field</span>  <br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    
<label for="name">Name:</label>
    <input type="text" id="name" name="name"><span style="color:red;">   *</span>
    <span class="error"><?php echo $nameErr;?></span><br>
    
    <label for="email">Email:</label>
    <input type="text" id="email" name="email"><span style="color:red;">   *</span>
    <span class="error"><?php echo $emailErr;?></span><br>
    
    <label for="group">Group:</label>
    <input type="text" id="group" name="group"><br>
    
    <label for="comment">Message:</label>
    <textarea name="comment" id="" cols="30" rows="10"></textarea><br>
    
    <label for="gender">Gender:</label>
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female <span style="color:red;">   *</span>
    <span class="error"><?php echo $genderErr;?></span><br>

    <label for="courses">Select Courses:</label>
    <select name="courses[]" id="courses" multiple size = 4 multiple class="chosen-select">
        <option value = "html">HTML</option>
        <option value = "js">JS</option>
        <option value = "php">PHP</option>
        <option value = "linux">LINUX</option>
        <option value = "css">CSS</option>
        <option value = "node">NodeJs</option>
    </select><br>
    <label for="agree"> Agree</label>
    <input type="checkbox" id="agree" name="agree" value="agree" require><span style="color:red;">   *</span><br>

    <input type = "submit" name = "submit" value = Submit>
</form>


<?php
    echo "<h2> Your Inputs : </h2>";
    echo "<br>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $group;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $courses;

?>

    </body>




</html>