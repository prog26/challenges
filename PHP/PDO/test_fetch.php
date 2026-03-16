<?php

require "db.php";

$minPrice = 50;

$sql = "SELECT * FROM books WHERE price > :price";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'price' => $minPrice
]);

echo "<ul>";

while ($row = $stmt->fetch()) {

    echo "<li>" . $row['title'] . "</li>";

}

echo "</ul>";