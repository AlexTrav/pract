<?php
session_start();
require "vendor/autoload.php";
$db = new Photos\DB();
$data = $db->get_all_photos();
if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];

}
else {
    $user_id = false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>photos</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="media.css">
</head>
<body>
<?php include "header.php" ?>
<h1>Галерея</h1>
<div id="grid">
    <?php foreach ($data as $photo): ?>
    <?= (new Photos\Photo($photo["id"], $photo["image"], $photo["text"]))->get_html() ?>
    <?php endforeach; ?>
</div>

<?php include "add_form.php"; ?>


<script src="script.js"></script>
</body>
</html>