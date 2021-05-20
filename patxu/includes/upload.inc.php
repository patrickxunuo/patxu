<?php
if (isset($_POST["upload"])) {

    $name = $_POST["name"];
    $place = $_POST["place"];
    $description = $_POST["description"];
    $dir = "images/" . $_FILES["uploadfile"]["name"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    uploadImage($conn, $name, $place, $description, $dir);
} else {
    header("location: ../home.php");
    exit();
}
