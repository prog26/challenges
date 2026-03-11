<?php

$name = "";
$error = "";
$success = "";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $email = $_POST['email'];

    if(strpos($email,"@gmail.com") === false){

        $error = "Email invalide";
       
        $name = $_POST['name'];

    }else{

        $success = "Formulaire envoye avec succes";

    
        $name = "";
    }

}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact Form</title>
</head>

<body>

<h1>Contact Form</h1>

<p style="color:red;"><?php echo $error; ?></p>
<p style="color:green;"><?php echo $success; ?></p>

<form method="POST">

<label>Nom :</label><br>
<input type="text" name="name" value="<?php echo $name; ?>"><br>

<label>Email :</label><br>
<input type="text" name="email"><br>

<label>Message :</label><br>
<textarea name="message"></textarea><br>

<button type="submit">Envoyer</button>

</form>

</body>
</html>
