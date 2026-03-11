<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $_SESSION['language'] = $_POST['language'];

    header("Location: page3.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page2</title>
</head>
<body>
        <form method="POST">

            <label>Favorite Programming Language :</label><br><br>
            <input type="text" name="language"><br><br>

            <button type="submit">Next</button>

        </form>
    
</body>
</html>

