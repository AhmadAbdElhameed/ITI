<?php
// Php dashboard demo
// echo phpinfo();

//******************************/  
//Multi line print
# First Example
$variable=50;
print <<<END
This uses the "here document" syntax to output
multiple lines with $variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon no extra whitespace!
END;

# Second Example
print "********This spans
multiple lines. The newlines will be
output as well";

//******************************/  
//variables

$y=1;
$X=15;
$x=4;
$text='koko';

echo "<span style='color:red;font=''>The value of variable
x=:</span>".$x;
echo "<br>";
echo "The value of variable y=:$y";

ECHO "<br>Capital letters<br>";
eChO "Mixed leters<br>";
echo "small letters<br>";
echo("That's all!");

echo $x,$y."<br>";
//print $x,$y;

var_dump($text);
//******************************/  
//whitespace insensitive
$four = 2 + 2; // single spaces
$four    =  2  + 2 ; // spaces and tabs
$four =
2+
2; // multiple lines

//******************************/  

// Object Demo

class Car {
    function Car() {
      $this->model = "VW";
    }
  }
  
  // create an object
  $a = new Car();
  
  // show object properties
  
  echo "<br>".$a->model."<br>";
  var_dump($a);
//******************************/  
  //Constant
define("MINSIZE", 50);
define("MAXSIZE", 500);
define('PI',3.14);

echo MINSIZE."<br>";
echo constant("MINSIZE")."<br>"; // same thing as the previous line

//can't reassign MAXSIZE=100;
$c=MAXSIZE;
echo $c;

//PHP built-in constants
echo PHP_INT_MAX .'<br>'; //max int in php

//******************************/ 
//Super global variables 
print( $_SERVER [SERVER_PORT]);
//******************************/  
//Conditional operator
$z=9;
$variable = (5 < $z) ? 'less' :'greater'; 
echo "<br>".$variable;
//******************************/  
//for loop
$a = 0;
$b = 0;

for( $i = 0; $i<5; $i++ ) {
   $a += 10;
   $b += 5;
}

//At the end of the loop a = ?? and b = ??
// a=50 , b=25
  
//******************************/
//while loop
$i = 0;
$num = 50;

while( $i < 10) {
   $num--;
   $i++;
}
//Loop stopped at i = ?? and num = ??
// i =10 , num =40

//******************************/
//do...while
$i = 0;
         $num = 0;
         
         do {
            $i++;
         }
         
         while( $i < 10 );
//Loop stopped at i = ?? // i=10
//******************************/
//foreach
$arr = array( 1, 2, 3, 4, 5);
         
foreach( $arr as $value ) {
   echo "Value is $value <br />";
}
/* Output ?? */
//******************************/
//break
$i = 0;
         
         while( $i < 10) {
            $i++;
            if( $i == 3 )break;
         }

//Loop stopped at i = ?? //i=3

//******************************/
//continue
$array = array( 1, 2, 3, 4, 5);
   echo  $array[2]; 

foreach( $array as $value ) {
   if( $value == 3 )continue;
   echo "Value is $value <br />";
}
// Output ?? 1,2,4,5
//******************************/

?>
