<?php
if(isset($_GET['edit_use'])) {
	echo $the_user_id=$_GET['edit_use'];
	$query="SELECT * FROM users WHERE user_id=$the_user_id";
$select_users=mysqli_query($connection,$query);
while ($row=mysqli_fetch_array($select_users)) {
  $user_id=$row['user_id'];
  $user_name=$row['user_name'];
  $user_password=$row['user_password'];
  $user_firstname=$row['user_firstname'];
  $user_lastname=$row['user_lastname'];
  $user_email=$row['user_email'];
  $user_image=$row['user_image'];
  $user_role=$row['user_role'];
  
}

if (isset($_POST['update_users'])) {
	 $username=$_POST['username'];
	 $password=$_POST['password'];
	 $firstname=$_POST['firstname'];
	 $lastname=$_POST['lastname'];
	 $email=$_POST['email'];
	 $user_role=$_POST['user_role'];
	 $query="UPDATE users SET user_name='$username',user_password='$password',user_firstname='$firstname',user_lastname='$lastname',user_email='$email',user_role='$user_role' WHERE user_id={$user_id}";
	$update_query=mysqli_query($connection,$query);
	 if (!$update_query) {
        die('query FAILED . mysqli_error($connection)');
   }                     
        }
}
?>






<form action="" method="post" >
		<div class="form-group">
		<label>username</label>
		<input  type="text" value="<?php echo $user_name; ?>" class="form-control" name="username">
	</div>
	<div class="form-group">
		<label>password</label>
		<input  type="text" value="<?php echo $user_password; ?>" class="form-control" name="password">
	</div>
	
	<div class="form-group">
		<label>firstname</label>
		<input  type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="firstname">
	</div>
	<div class="form-group">
		<label>lastname</label>
		<input type="text" value="<?php echo $user_lastname;?>" class="form-control" name="lastname">
	</div>
	<div class="form-group">
		<label>email</label>
		<input  type="text" value="<?php echo $user_email; ?>" name="email">
	</div>
	<div class="form-group">
		<select name="user_role">
			<option value="sub"><?php echo $user_role; ?> </option>
			<option value="admin">admin</option>
			<option value="subscriber">subscriber</option>
		</select>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="edit_users" value="edit_users">
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="update_users" value="update_users">
	</div>



</form>
