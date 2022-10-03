<?php

/****************** */
/// Question 1
/***********************/
//PHP Functions with Parameters
echo "Question 1". PHP_EOL;
header('Content-type: text/plain');
echo "Ahmad \nMohammed \nAbdelhameed".PHP_EOL;
echo "w3school.com\r\nThe best programming blog\n";

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
	
/****************** */
/// Question 2
/***********************/
echo "Question 2". PHP_EOL;
$review = "The food was good and staff also";
echo $review.PHP_EOL;

echo PHP_EOL;
echo "Function str_word_count : to return how many words in the text".PHP_EOL;
echo "Print How many words : ",str_word_count($review).PHP_EOL;

echo PHP_EOL;
echo "Function strrev : to return your text reversed".PHP_EOL;
echo strrev($review).PHP_EOL;

echo PHP_EOL;
echo "Function substr : to return part of your text".PHP_EOL;
echo substr($review, -10).PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

/****************** */
/// Question 3
/***********************/

echo "Question 3". PHP_EOL;
$numbers = [12,45,10,25];
echo '<pre>';
print_r($numbers);
echo '</pre>';
echo PHP_EOL;
echo PHP_EOL;
echo "sum(numbers) = " . array_sum($numbers) . "\n";
echo "Average(numbers) = " . array_sum($numbers)/count($numbers) . "\n";

rsort($numbers);
print_r($numbers). "\n";


echo PHP_EOL;
echo PHP_EOL;

/****************** */
/// Question 4
/***********************/
echo "Question 4". PHP_EOL;
$associative_array = array("Sara"=>31,
                        "John"=>41,
                        "Walaa"=>39,
                        "Ramy"=>40);


// a) ascending order sort by value                        
asort($associative_array);
echo "ascending order sort by value\n\n";
foreach ($associative_array as $key => $value) {
    echo "Key: $key; Value: $value\n";
}

echo PHP_EOL;
// b) ascending order sort by Key
echo "ascending order sort by Key\n\n";
ksort($associative_array);
foreach ($associative_array as $key => $value) {
    echo "Key: $key; Value: $value\n";
}

echo PHP_EOL;
// c) descending order sorting by Value
arsort($associative_array);
echo "descending order sort by value\n\n";
foreach ($associative_array as $key => $value) {
    echo "Key: $key; Value: $value\n";
}

echo PHP_EOL;
// d) descending order sorting by Key  
echo "descending order sort by Key\n\n";
krsort($associative_array);
foreach ($associative_array as $key => $value) {
    echo "Key: $key; Value: $value\n";
}

?>