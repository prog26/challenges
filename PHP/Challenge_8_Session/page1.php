<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){


    $_SESSION['username'] = $_POST['username'];

    header("Location: page2.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page1</title>
</head>
<body>
   <h1>Modern apps</h1>
        <form method="POST">

            <label for="">Username :</label><br>
            <input type="text" name="username" placeholder="Enter your name"><br><br>
            <button type="submit">Next</button>
        
            
        </form>
    
</body>
</html>