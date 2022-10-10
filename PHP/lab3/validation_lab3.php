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
            $nameErr = $emailErr = $genderErr = $groupErr = $commentErr = "";
            $name = $email = $gender = $comment = $group = $courses = ""; 

            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if(empty($_POST['name'])){
                    $nameErr = "Please Enter A valid name";

                }else {            
                    $name = test_input($_POST["name"]);    
                    // check if name only contains letters and whitespace    
                    if (!preg_match("/^[a-zA-Z ]*$/",$name)){  
                        $nameErr= "Only alphabets and white space are allowed";            
                    }
                } 
            }
            // if ($_SERVER["REQUEST_METHOD"] == "POST") {    
            //     //String Validation    
            //     if (empty($_POST["name"])){            
            //         $nameErr = "Name is required";        
            //     } else {            
            //         $name = test_input($_POST["name"]);    
            //         // check if name only contains letters and whitespace    
            //         if (!preg_match("/^[a-zA-Z ]*$/",$name)){  
            //             $nameErr= "Only alphabets and white space are allowed";            
            //         }
            //     } 
            // }
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
                $groupErr = "";
            }else{
                $group = test_input($_POST['group']);

            }

            if(empty($_POST['comment'])){
                $commentErr = "";
            }else{
                $comment = test_input($_POST['comment']);

            }
            if(empty($_POST['courses'])){
                $courses = "";
            }else{
                $courses = $_POST['courses'];

            }

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
    <input type="text" id="name" name="name" value="<?php if(!empty($nameErr) || !empty($emailErr)) echo $name; ?>"><span style="color:red;">   *</span>
    <span class="error"><?php echo $nameErr;?></span><br>
     
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" value="<?php if(!empty($emailErr) || !empty($nameErr)) echo $email; ?>"><span style="color:red;">   *</span>
    <span class="error"><?php echo $emailErr;?></span><br>
    
    <label for="group">Group:</label>
    <input type="text" id="group" name="group" value="<?php if(!empty($emailErr) || !empty($nameErr)) echo $group; ?>"><br>
    
    <label for="comment">Message:</label>
    <textarea name="comment" id="" cols="30" rows="10" required ><?php if(isset($comment)){ echo $comment;} ?></textarea><br>
    
    <label for="gender">Gender:</label>
    <input type="radio" name="gender" value="male" class='check' <?php if(!empty($emailErr) || !empty($nameErr) && $_POST['gender'] == 'male') {echo 'checked="checked"';} ?>> Male
    <input type="radio" name="gender" value="female" class='check' <?php if(!empty($emailErr) || !empty($nameErr) && $_POST['gender'] == 'female' ) {echo 'checked="checked"';} ?>> Female <span style="color:red;">   *</span>
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
    <label for="agree">Agree</label>
    <input type="checkbox" id="agree" name="agree" value="agree" required ><span style="color:red;">   *</span><br>
    <input type = "submit" name = "submit" value = Submit>
</form>


<?php
    // echo "<h2> Your Inputs : </h2>";
    // echo "<br>";
    // echo $name;
    // echo "<br>";
    // echo $email;
    // echo "<br>";
    // echo $group;
    // echo "<br>";
    // echo $comment;
    // echo "<br>";
    // echo $gender;
    // echo "<br>";
    // foreach($_POST['courses'] as $selected){
    //     echo $selected."<br>";
    // }

    if(isset($_POST['submit']))    {

        if($nameErr == "" && $emailErr == "" && $genderErr == ""){

            echo "<h3 color = #FF0001> <b>You have sucessfully submitted the form.</b> </h3>";    
            echo "<h2>Your Input Fields are as below:</h2>";    
            echo "Name: " .$name;    
            echo "<br>";    
            echo "Email: " .$email;    
            echo "<br>";    
            echo "Group No: " .$group;    
            echo "<br>";    
            echo "Message : " .$comment;    
            echo "<br>";    
            echo "Gender: " .$gender;    
            echo "<br>";
            foreach($_POST['courses'] as $selected){
                echo $selected."<br>";
            }
        } else {    
            echo "<h3> <b>Carefully check the form fields before submitting it.</b> </h3>";    
        }

    } 


?>

    </body>




</html>