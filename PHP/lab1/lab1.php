

<?php
// Show your phpinfo on browser.

// phpinfo();

// Use constant to display your website name which mustn’t change across your pages.
echo "<h3>Website Name</h3>"."<br>";
define('website_name', 'PHP Lab 1');
echo "Website Name"."<br>";
echo website_name."<br>";

/// Show your server name, address, port,filename and path of the currently executing script.
echo "<h3>Server Details</h3>"."<br>";
echo "Server Name"."<br>";
echo $_SERVER["SERVER_NAME"]."<br>";
echo "Address"."<br>"; 
echo $_SERVER["SERVER_ADDR"]."<br>";
echo "Filename"."<br>"; 
echo $_SERVER["SCRIPT_FILENAME"]."<br>";
echo "Path"."<br>"; 
echo $_SERVER["PATH"]."<br>";
echo "<br><br><br><br>";


//  Display the output of for,while,do while and foreach fn code from demo file  
echo "<h3>Loops</h3>"."<br>";

//for loop
echo "For Loop"."<br>";
$a = 0;
$b = 0;

for( $i = 0; $i<5; $i++ ) {
    $a += 10;
    $b += 5;
}

echo $a."<br>";
echo $b."<br>";


//while loop
echo "While Loop"."<br>";
$i = 0;
$num = 50;

while( $i < 10) {
    $num--;
    $i++;
}
echo $i."<br>";
echo $num."<br>";

//do...while
echo "Do While Loop"."<br>";

$i = 0;
$num = 0;
do {
    $i++;
}
while( $i < 10 );
echo $i."<br>";

//foreach
echo "Foreach Loop"."<br>";
$arr = array( 1, 2, 3, 4, 5);
foreach( $arr as $value ) {
    echo "Value is $value.<br />";
}

/*
-   Your brother is 10 years old, If you know that :
    age less than 5 --> Print Msg --> Stay at home,
    age equal 5 --> Print Msg --> Go to Kindergarden,
    age between 6 & 12 --> Print Msg --> Go to grade :XXX
    (Use switch case).
*/
echo "<h3>Switch Case</h3>"."<br>";
$age = 10;

switch($age){
    case $age < 5:
        echo "Stay at Home";
        break;
    case $age == 5 :
        echo "Kindergarden";
        break;
    case $age > 5 && $age < 13 :
        echo "Go to grade : 4";
        break;
    default: echo "Age Must be between 1 to 12";
    }

// OUTPUT  == "Go to grade : 4"
?>