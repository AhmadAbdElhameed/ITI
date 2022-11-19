<?php


namespace App;

class Factorial{
    // PHP code to get the factorial of a number
    // function to get factorial in iterative way
    public function factorial($number){
        $factorial = 1;
        if ($number === 0){
            return $factorial;
        }elseif ($number <0 || !is_int($number) || $number == false){
            return null;
        }else{
            for ($i = $number; $i > 0; $i--){
                $factorial = $factorial * $i;
                }
            return $factorial;
        }
    }

}


// Driver Code
// $number = 10;
// $fact = Factorial($number);
// echo "Factorial = $fact";

?>