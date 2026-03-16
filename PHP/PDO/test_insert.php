<?php

require "db.php";

$title = "Clean Code";
$author = "Robert Martin";
$price = 90;

$sql = "INSERT INTO books (title, author, price) 
        VALUES (:title, :author, :price)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'title' => $title,
    'author' => $author,
    'price' => $price
]);

$id = $pdo->lastInsertId();

echo "Success! Book added with ID: " . $id;

?>