<?php
session_start();
include_once 'database.php';
if(isset($_POST['submit']))
{
    $email= $_POST['email'];
    $result= mysqli_query($conn,"SELECT * FROM newuser where email='" . $_POST['email'] . "'");
    $row = mysqli_fetch_assoc($result);
	$fetch_email=$row['email'];
	$email=$row['email'];
	$password=$row['password'];
	if($email==$fetch_email) {
				$to = $email;
                $subject = "Password";
                $txt = "Your password is : $password.";
                $headers = "From:santhiyamittal555@gmail.com" . "\r\n" .
                "CC:santhiyamittal55@gmail.com";
                mail($to,$subject,$txt,$headers);
			}
				else{
					echo 'invalid email';
				}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<h1>Forgot Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>user id:</td><td><input type='text' name='email'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
</body>
</html>