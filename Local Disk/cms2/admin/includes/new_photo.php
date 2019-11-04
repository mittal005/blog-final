<?php include"c:xampp/htdocs/cms2/includes/db1.php"; ?>
<?php
if(isset($_POST['create_post']))
{
$post_image=$_FILES['post_image']['name'];
$post_image_temp=$_FILES['post_image']['tmp_name'];
move_uploaded_file($post_image_temp,"c:xampp/htdocs/cms2/images/$post_image");

$query="INSERT INTO photo(picture)VALUES('$post_image')";
$create_post_query=mysqli_query($connection,$query);
if (!$create_post_query) {
die('query FAILED . mysqli_error($connection)');
                             }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>FILL APPLICATION</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
		<label>post_image</label>
		<input  type="file"  name="post_image">
	</div>
<div class="form-group">
<input type="submit" class="btn btn-primary" name="create_post" value="publish_post">
</div>


</form>

	</body>
</html>