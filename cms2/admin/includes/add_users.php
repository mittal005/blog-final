<?php
if(isset($_POST['create_users']))
{

  $user_username=$_POST['username'];
  $user_password=$_POST['password'];
  $user_firstname=$_POST['firstname'];
  $user_lastname=$_POST['lastname'];
  $user_email=$_POST['email'];
  $user_role=$_POST['user_role'];
       $query="INSERT INTO users(user_name,user_password,user_firstname,user_lastname,user_email,user_role)VALUES('".$user_username."','".$user_password."','".$user_firstname."','".$user_lastname."','".$user_email."','".$user_role."')";
  $create_user_query=mysqli_query($connection,$query);
  if (!$create_user_query) {
        die('query FAILED . mysqli_error($connection)');
                             }
 echo "user created:".""." <a href='users.php'>view users</a>";
} 
?>
 
<!-- <select name="user_role" id="">
	
		$query="SELECT * FROM users";
		$select_users=mysqli_query($connection,$query);
		if (!$select_users) {
        die('query FAILED . mysqli_error($connection)');
}                             
while ($row=mysqli_fetch($select_users)) {
	$user_id=$row['user_id'];
	$user_role=$row['user_role'];
	echo "<option value='$user_id'>{$user_role}</option>";
}

		</select> -->
 
<form action="" method="post" >
	

	<div class="form-group">
		<label>username</label>
		<input  type="text" class="form-control" name="username">
	</div>
	<div class="form-group">
		<label>password</label>
		<input  type="text" class="form-control" name="password">
	</div>
	
	<div class="form-group">
		<label>firstname</label>
		<input  type="text" class="form-control" name="firstname">
	</div>
	<div class="form-group">
		<label>lastname</label>
		<input type="text" class="form-control" name="lastname">
	</div>
	<div class="form-group">
		<label>email</label>
		<input  type="text"  name="email">
	</div>
	<div class="form-group">
		<select name="user_role">
			<option value="subscriber">select option</option>
			<option value="admin">admin</option>
			<option value="subscriber">subscriber</option>
		</select>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="create_users" value="publish_users">
	</div>



</form>
