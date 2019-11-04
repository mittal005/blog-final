<?php
if(isset($_FILES["imges"]))
{
	
$name=$_FILES["imges"]["uname"];
echo $name;

$temp=$_FILES["imges"]["tmp_name"];
$photo="images/";


move_uploaded_file($temp,$photo.$name);
$connection=mysqli_connect('localhost','root','','image');
echo $temp;
$query="INSERT INTO photo(picture)VALUES('$name')";
$create_post_query=mysqli_query($connection,$query);

}

echo "hello";
?>
