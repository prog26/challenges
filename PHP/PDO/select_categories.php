<?php

require "db.php";

/* --------- GET CATEGORIES --------- */

$sql = "SELECT * FROM categories";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$categories = $stmt->fetchAll();

?>

<form method="GET">

<select name="cat">

<?php foreach ($categories as $cat) { ?>

<option value="<?= $cat['id'] ?>">
<?= $cat['name'] ?>
</option>

<?php } ?>

</select>

<button type="submit">Show</button>

</form>


<?php

/* --------- SHOW BOOKS --------- */

if (isset($_GET['cat'])) {

    $catId = $_GET['cat'];

    $sql = "SELECT * FROM books WHERE category_id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        'id' => $catId
    ]);

    echo "<h3>Books :</h3>";
    echo "<ul>";

    while ($row = $stmt->fetch()) {

        echo "<li>" . $row['title'] . "</li>";

    }

    echo "</ul>";

}

?>