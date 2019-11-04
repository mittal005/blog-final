<?php session_start(); ?>
<?php
if(isset($_GET['edit'])) {
   $the_user_id=$_GET['edit'];
  $connection=mysqli_connect('localhost','root','','admin');
  $query="SELECT * FROM newuser WHERE id=$the_user_id";
  
$select_users=mysqli_query($connection,$query);
if (!$select_users) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
}
while ($row=mysqli_fetch_array($select_users)) {
   $user_username=$row['username'];
   $user_firstname=$row['firstname'];
  $user_lastname=$row['lastname'];
  $user_email=$row['email'];
  // $user_firstname=$row['user_firstname'];
  // $user_lastname=$row['user_lastname'];
  // $user_email=$row['user_email'];
  // $user_image=$row['user_image'];
  // $user_role=$row['user_role'];
  
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





<!DOCTYPE html>
<html lang="en">

<head>
<?php include("includes/header.php"); ?>
  </head>

<body id="page-top">

 <?php include("includes/topnav.php"); ?>

  <div id="wrapper">

    <!-- Sidebar -->
    
<?php include("includes/sidenav.php"); ?>

      <div class="container-fluid">
        <div class="row dash_row mar_bottom_20">
        <div class="offset-md-2 col-md-8 col-offset-md-2 outer-w3-agile">
                        
<h5 class="text-center">Profile</h5>
<hr>
              <form>

              <label>User Name</label>
              <input type="text" class="form-control" value="<?php if(isset($user_username)){echo $user_username;} ?>" required>
<label>First Name</label>
              <input type="text" class="form-control" value="<?php if(isset($user_firstname)){echo $user_firstname;} ?>" required>
<label>Last Name</label>
              <input type="text" class="form-control" value="<?php if(isset( $user_lastname)){echo $user_lastname;} ?>" required>

<label>Nick Name</label>
              <input type="text" class="form-control" required>

              
  <label >Display Name Publicly as</label>
    <select class="form-control" >
      <option>Administrator</option>
    </select>
    <h6 class="text-center"> Contact Info</h6>
    <hr>
    <label>E-Mail</label>
              <input type="email" class="form-control" value="<?php if(isset($user_email)){echo  $user_email;} ?>" required>

      <h6 class="text-center">About Youself</h6>
    <hr>
    <label>Biographical Info</label>
<textarea class="form-control" required></textarea>
<label>Profile Picture</label>

 <div class="custom-file">
  <input type="file" class="custom-file-input" id="exampleInputFile">
  <label class="custom-file-label" for="exampleInputFile" data-browse="choose your image">Choose your image</label>
</div>
<h6 class="text-center">Account Management</h6>
<hr>
<label>New Password</label>
<input type="passord" class="form-control" required>
<label>Re-type Password</label>
<input type="passord" class="form-control" required>

<button type="button" class="btn btn-primary">Update Your Profile</button>

              </form>




                </div>
              </div>
      </div>

       
 

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>



</body>

</html>

