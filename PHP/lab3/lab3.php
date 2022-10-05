
<html>
<head>
<style>
textarea {
    resize: none;
}
</style>
</head>
<body>

<?php
    $name = $group = $email = $comment = $gender = $courses = "";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = test_input($_POST['name']);
        $group = test_input($_POST['group']);
        $email = test_input($_POST['email']);
        $comment = test_input($_POST['comment']);
        $gender = test_input($_POST['gender']);
        $courses = test_input($_POST['courses']);
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
    <input type="text" id="name" name="name"><span style="color:red;">   *</span><br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email"><span style="color:red;">   *</span><br>
    <label for="group">Group:</label>
    <input type="text" id="group" name="group"><br>
    <label for="comment">Message:</label>
    <textarea name="comment" id="" cols="30" rows="10"></textarea><br>
    <label for="gender">Gender:</label>
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female <span style="color:red;">   *</span><br>

    <label for="courses">Select Courses:</label>
    <select name="courses" id="courses" multiple size = 4 multiple class="chosen-select">
        <option value = "html">HTML</option>
        <option value = "js">JS</option>
        <option value = "php">PHP</option>
        <option value = "linux">LINUX</option>
        <option value = "css">CSS</option>
        <option value = "node">NodeJs</option>
    </select><br>
    <label for="agree"> Agree</label>
    <input type="checkbox" id="agree" name="agree" value="agree"><span style="color:red;">   *</span><br>

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


