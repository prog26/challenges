<?php

session_start();



if(!isset($_SESSION['carte'])){
    $_SESSION['carte'] = [];
}
$products =["apple","samsung","realme"];

if($_SERVER['REQUEST_METHOD'] === 'POST' &&  isset($_POST['product'])){
    $product = $_POST['product'];
    if(!in_array($product,$_SESSION['carte'])){
        $_SESSION['carte'][] = $product;
        $_SESSION['message'] = "$product ajoute au panier  avec succes!";

    }else{
        $_SESSION['message'] = "$product est deja dans le panier !";
    }
         header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['clear_carte'])){
    $_SESSION['carte'] = [];
    $_SESSION['message'] = "Le panier a été vidé !";
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}
$carte_count =count($_SESSION['carte']);

$message = "";
if(isset($_SESSION['message'])){
    $message = $_SESSION['message'];
    unset($_SESSION['message']);//permet de supprimer  le message dans sessions
}



?>

<div style="text-align: center;">
     <h1 >MON PANIER</h1>

        <p>carte: <?php echo $carte_count; ?> item<?php echo $carte_count > 1 ? 's' : ''; ?></p>

        <?php if(!empty($message)) echo "<p style='color:green;'>$message</p>"; ?>

        <h2>Produits disponibles</h2>
        <ul>
        <?php foreach($products as $item): ?>
            <li>
                <?php echo $item; ?>
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="product" value="<?php echo $item; ?>">
                    <button type="submit">Add to carte</button>
                </form>
            </li>
        <?php endforeach; ?>
        </ul>

        
        <form method="POST">
            <button type="submit" name="clear_carte">Vider le panier</button>
        </form>

</div>
















