<?php
//Task: Create an array of 5 friends and the money they owe you.
//  Loop through them, add up the total, and highlight anyone who owes more than 100 DH.
$user =[
    ["nom" => "hassan",
    "money"=> 80
    ],

    ["nom" => "Amin",
    "money"=> 90
    ],

    ["nom" => "said",
    "money"=> 306
    ],

    ["nom" => "laila",
    "money"=> 120
    ],

    ["nom" => "ayman",
    "money"=> 330
    ],

];
$somme =0 ;
$gent=[];
foreach($user as $use){
    $somme += $use["money"];

    if($use["money"]>100){
        $gent[]= $use["nom"];
    }
   
}
 echo "la somme d argents est : " . $somme . " DH" . "<br>";
 
 echo "les gents ayant le montant plus de 100 DH  sont : " . implode(" , ",$gent);
?>