<!DOCTYPE html>
<html>
    <head>
        <title>Title of the document</title>
    </head>
    <body>
        <?php
            // define variables and set to empty values
            $nameErr = $emailErr = $genderErr = $websiteErr = "";
            $name = $email = $gender = $comment = $website = "";
            $errors = [];
        ?>
        <!--name.php to be called on form submission-->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table>
            <tr>
                <td>Name:</td>
                <td>
                    <input type="text" name="name" id="name" value="">
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>
                    <input type="text" name="email" id="email" value="">

                </td>
            </tr>
            <tr>
                <td>Group:</td>
                <td>
                    <input type="text" name="group" id="group" value="">

                </td>
            </tr>
            <tr>
                <td>Message:</td>
                <td>
                    <textarea name="comment" id="comment" cols="30" rows="10">Type your message ...</textarea>
                </td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
                </td>
            </tr>
            <tr>
                <td>SELECT COURSES</td>
                <td>
                    <select name='subject[]' multiple size=6>
                        <option value='php'>PHP</option>
                        <option value='js'>JAVA SCRIPT</option>
                        <option value='html'>HTML</option>
                        <option value='laravel'>LARAVEL</option>
                        <option value='nodejs'>NodeJs</option>
                        <option value='css'>CSS</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="agree">Agree ?</label></td>
                <td><input type="checkbox" name="agree" id="agree" value="Yes"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
        </form>
        <?php 
            $errors = [];
            $fields = ['name','email', 'group', 'subject', 'gender','comment'];
            $optionalFields = ['agree'];
            $values = [];

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($fields as $field) {
                    if (empty($_POST[$field]) && !in_array($field, $optionalFields)) {
                        $errors[] = $field;
                    } else {
                        $values[$field] = $_POST[$field];
                    }
                }
                if (empty($errors)) {
                    foreach ($fields as $field) {
                        if ($field === "subject") {
                            //printf("%s: %s<br />", $field, var_export($_POST[$field], TRUE));
                            printf($field);
                            echo "<br>";
                            foreach($_POST['subject'] as $selected){
                                
                                echo $selected."<br>";
                            }
                        } else {
                            printf("%s: %s<br />", $field, $_POST[$field]);
                        }
                    };
                    exit;
                }
            }

            // echo "<h1>Your Inputs: </h1>";
            // if(isset($_POST['submit'])){
            //     if(!empty($_POST['subject'])){
            //         foreach($_POST['subject'] as $selected){
            //             echo $selected."<br>";
            //         }
            //     }
            // }


            function test_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

        ?>
    </body>
</html>
