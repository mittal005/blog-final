<?php
require_once ("db.php");

if (isset($_GET["userID"])) {
    $imageId = $_GET["userID"];
}

$sql = "DELETE FROM images_info WHERE userID='" . $imageId . "'";
mysqli_query($conn, $sql);

header("Location:index.php");
?>