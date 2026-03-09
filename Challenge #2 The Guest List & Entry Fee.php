<?php
$age= 19;
if ($age< 12){
    echo " le prix est : 20 DH"."<br>";
    echo "Special: Children's Menu included!!😉";
}elseif($age>= 12 && $age<= 18){
    echo "le prix est : 40 DH";
}elseif($age>=19 && $age<60){
    echo"le prix est : 60 DH";
}else{
    echo"le prix est :30 DH";
}



?>