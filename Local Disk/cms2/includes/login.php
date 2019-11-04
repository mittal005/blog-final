<?php include"db.php"; ?>
<?php session_start(); ?>

<?php
if (isset($_POST['login'])) {
	 $username=$_POST['username'];
	 $password=$_POST['password'];
	 $query="SELECT * FROM users WHERE user_name='{$username}'";
	 $login_query=mysqli_query($connection,$query);
	if (!$login_query) {
        die('query FAILED . mysqli_error($connection)');
    }
        while ($row=mysqli_fetch_array($login_query)) {
        	      $db_id=$row['user_id'];
                $db_username=$row['user_name'];
                $db_password=$row['user_password'];
                $db_user_role=$row['user_role'];
                       }
                             if ($username==$db_username&&$password==$db_password) {
                             	$_SESSION['username']=$db_username;
                             	$_SESSION['user_role']=$db_user_role;
                             	header("Location:../admin");
                             }

	else if($username==$db_username&&$password==$db_password) {
                             	header("Location:../index.php");
                             }
else{
	header("Location:../index.php");
}
}
?>