<?php

//Inialize session
session_start();

//Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['User_name'])) 
{
   header('Location: addpost.php');
   exit();
}


//Connect my database.
include "db.php";

//This gets all the other information from the form
$agent_sessionId = $_SESSION['agent_id'];
$Property_Type=$_POST['Property_Type'];
$Property_Category=$_POST['Property_Category'];
$Property_Description=$_POST['Property_Description'];
$Address=$_POST['Address'];
$Street=$_POST['Street'];
$Town=$_POST['Town'];
$State=$_POST['State'];
$Country=$_POST['Country'];
$Date = date("Y-m-d");
$Property_Price=$_POST['Property_Price'];
$Number_Of_Rooms=$_POST['Number_Of_Rooms'];
$Number_Of_Bathrooms=$_POST['Number_Of_Bathrooms'];
//get the file name
$picture = $_FILES['file']['name'];



//check the type of the image.
$imageinfo = getimagesize($_FILES["file"]["tmp_name"]);

if ($imageinfo ['mime'] != 'image/gif' && $imageinfo ['mime'] != 'image/jpeg'
&& $imageinfo ['mime'] != 'image/pjpeg' && $imageinfo ['mime'] != 'image/jpg'
&& $imageinfo ['mime'] != 'image/png')
{
echo "sry Image not supported";
exit;
}

/*
script to echo out the name of the file,its type, size
and name of the temporary copy of the place where the file
is stored in the server.*/

if ($_FILES["file"]["error"] > 0)
{
echo "Return Code: " . $_FILES["file"]["error"] . "
";
}
else
{
echo "Upload: " . $_FILES["file"]["name"] . "";
echo "Type: " . $_FILES["file"]["type"] . "";
echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb";
echo "Temp file: " . $_FILES["file"]["tmp_name"] . "";


if (file_exists("Images/properties/" . $_FILES["file"]["name"]))
{
echo $_FILES["file"]["name"] . " already exists. ";
}
else
{
move_uploaded_file($_FILES["file"]["tmp_name"],"Images/properties/" . $_FILES["file"]["name"]);

mysql_query("INSERT INTO Property_Details VALUES('','$agent_sessionId','$Property_Type','$Property_Category','$Property_Description','$Address','$Street',
            '$Town','$State','$Country','$Date','$Property_Price','$Number_Of_Rooms','$Number_Of_Bathrooms','$picture')") 
            or die(        mysql_error());


}
}


?>