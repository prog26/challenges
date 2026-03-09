<?php



//Challenge 01: The Personalized Greeting (Parameters).
//Task: Write a function greetUser that accepts one parameter: $name.
//  The function should output: "Hello, [name]! Ready to code?"
echo("---------------------------------- -Challenge 01:-------------------------------")."<br>";
 function greetUser($name){
    print_r("Hello, [".$name."]! Ready to code?");
 }
 $resultat = greetUser("amin");
 print_r($resultat);
 echo"<br>";
echo("------------------------------------Challenge 02:-------------------------------")."<br>";
 //Challenge 02: The Calculation Engine (Return Values)
 
function calculateArea( $width,  $height){
    return   $width *   $height;
}
 $totalArea = calculateArea(10 ,30);

 echo"The total area is ". $totalArea  ." square units.";

  echo"<br>";
echo("------------------------------------Challenge 03:---------------------------------")."<br>";
//Challenge 03: The Logic Gatekeeper (Boolean Return)
//Task: Write a function isAdult that takes an $age as a parameter.
function isAdult ($age){
    if ($age>= 18){
        echo "Access Granted"."<br>";
        return TRUE;
        

    }else{
        return FALSE;
        echo "Access Denied."."<br>";
    }
}
$age = isAdult(19);
echo $age;
echo "<br>";
echo("---------------------------------- -Challenge 04:-------------------------------")."<br>";
//Challenge 04: The "Safe" Multiplier (Logic Guarding)
function multiplyNumbers($a, $b){
    if (is_numeric($a)&& is_numeric($b)){
        return $a * $b;

    }else {
        echo "Error: Invalid Input."."<br>";
    }
}
echo multiplyNumbers(5,10);
echo "<br>";
echo multiplyNumbers(5,"apple");
echo "<br>";

echo("---------------------------------- -Challenge 05:-------------------------------")."<br>";

//hallenge 05: The Text Flipper (Algorithmic Synthesis)
//Task: Write a function manualReverse($text)
//  that takes a string and returns it backwards. 
function manualReverse($text){
    $reverse ="";
    for ($i = strlen($text)-1 ;$i>=0 ;$i--){
        $reverse .= $text[$i];
    }
    return $reverse;
}
$text = manualReverse("Hassan");
echo $text ;

?>