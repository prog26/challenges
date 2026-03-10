<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <a href="?sort=asc">TRIER A==>Z</a> <br>
    <a href="?sort=desc">TRIER Z==>A</a> <br>

    
</body>
</html>

<?php

$products =["PC","Smartphone","Tablet","Camera","Headphones"];

if(isset($_GET['sort'])){
    if($_GET['sort'] == 'asc'){
        sort($products);
    }

    if($_GET['sort'] == 'desc'){
        rsort($products);
    }
    
}
foreach($products as $p){
    echo $p ."<br>";
}
?>