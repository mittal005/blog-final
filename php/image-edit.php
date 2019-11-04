<?php
require_once ("db.php");
$imagePath = "";

if (! empty($_FILES)) {
    
    $imagePath = isset($_FILES["file"]["name"]) ? $_FILES["file"]["name"] : "Undefined";
    $targetPath = "uploads/";
    $imagePath = $targetPath . $imagePath;
    $tempFile = $_FILES['file']['tmp_name'];
    
    $targetFile = $targetPath . $_FILES['file']['name'];
    
    $selectQuery = "select userpic from tbl_users where userID='" . $_GET["userID"] . "'";
    
    $resultSelectQuery = mysqli_query($conn, $selectQuery);
    $image = mysqli_fetch_array($resultSelectQuery, MYSQLI_ASSOC);
    
    if (move_uploaded_file($tempFile, $targetFile)) {
        
        // -----For updating the folder we need to delete the old file -----------------
        if (! unlink($image[userpic])) {
            echo ("Error deleting $image");
        } else {
            echo ("Deleted $image");
        }
    } else {
        echo "false";
    }
}

if (! empty($_GET["action"]) && $_GET["action"] == "save") {
    $sql = "UPDATE tbl_users SET userpic ='" . $imagePath . "' WHERE userID ='" . $_GET["userID"] . "'";
    mysqli_query($conn, $sql);
    $message = "Record Modified Successfully";
}

$select_query = "SELECT * FROM tbl_users WHERE user_ID='" . $_GET["user_ID"] . "'";
$result = mysqli_query($conn, $select_query);
$row = mysqli_fetch_assoc($result);
?>
<html>

<head>
<title>Edit Image</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />

<link rel="stylesheet" type="text/css" href="dropzone/dropzone.css" />
<script type="text/javascript" src="dropzone/dropzone.js"></script>
</head>

<body>

    <div class="box-preview">
        <img src="<?php echo $row["userpic"]; ?>" />
        <div class="preview-footer"><?php echo $row["userpic"]; ?></div>
    </div>

    <form name="frmImage"
        action="image-edit.php?action=save&user_ID=<?php echo $_GET['user_ID']?>"
        class="dropzone"></form>
    <div class="btn-menu">
        <a href="index.php" class="link">Back to List</a>
    </div>
</body>
</html>