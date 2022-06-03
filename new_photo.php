<?php
if (isset($_POST["image"], $_POST["text"])) {
    require "vendor/autoload.php";
    $db = new \Photos\DB();
    session_start();
    $user_id = $_SESSION["user_id"];
        $db->new_photo($user_id,$_POST["image"], $_POST["text"]);
        if ($user_id) {
            session_start();
            $_SESSION ["user_id"] = $user_id;
        header("Location: user.php"); }
        else {
            header("Location: user.php?error=login");
        }
}
