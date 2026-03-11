<?php
session_start();

$username = $_SESSION['username'];
$language = $_SESSION['language'];

echo "Hello $username, you love $language!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page3</title>
</head>
<body>
    
</body>
</html>
