<?php
//Challenge 01: The Linear Counter (While Loop)
//Task: Use a while loop to print the numbers 1 through 10. 
// Each number must be followed by a HTML line break <br>.
echo "------------Challenge 01: The Linear Counter (While Loop)-----------------"."<br>";
$i =1;
while($i<=10){
    echo $i ."<br>";
    $i++;
}
//Challenge 02: Reverse Countdown
//Task: Use a loop to print the numbers 10 down to 1. 
// Each number must be followed by a HTML line break.
echo "------------Challenge 02: Reverse Countdown-----------------" ."<br>";
$j =10;
while($j>=1){
    echo $j ."<br>";
    $j--;
}
echo "<br>";
echo "<br>";
//Challenge 03: Even Number Detector
//Task: Loop through the numbers 1 to 20 and print only the even numbers.
echo "------------Challenge 03: Even Number Detector-----------------" ."<br>";

echo "<br>";
$x= 0;
while($x <= 10){
    echo $x *2 ."<br>";
    $x++;
}
echo "<br>";
echo "<br>";
//Challenge 04: Even Number Counter
//Task: Loop through the numbers 1 to 50 and count how many numbers are even.
//Total even numbers: 25
echo "------------Challenge 04: Even Number Counter-----------------" ."<br>";
echo "<br>";
$compte=0;
$First_number =1;
$last_number = 50;
for($i=$First_number; $i<=$last_number;$i++){
    if($i % 2 == 0){
        $compte++;
    }
}
echo "Total even numbers: ". $compte."<br>";
echo "<br>";
echo "<br>";
//Challenge 05: Star Printer
// Objective: Understand how loops generate repeated patterns.
// Task: Print 10 stars on the same line using a loop.
// **********
echo "------------Challenge 05: Star Printer-----------------" ."<br>";
echo "<br>";
for($i= 0;$i<11;$i++){
    echo "*";
}
echo "<br>";
echo "<br>";
//Challenge 06: Growing Triangle (Nested Loops)
// Objective: Introduce nested loops.
// Task: Print the following pattern:
// *
// **
// ***
// ****
// *****
echo "------------Challenge 06: Growing Triangle (Nested Loops)-----------------" ."<br>";
for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}

?>