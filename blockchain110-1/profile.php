<?php include("includes/header.php"); ?>
<?php
if(isset($_GET['edit'])) {
   $the_user_id=$_GET['edit'];
  $connection=mysqli_connect('localhost','root','','admin4');
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
   $NickName=$_POST['NickName'];
   $Biographicalinfo=$_POST['Biographicalinfo'];
   $lastname=$_POST['lastname'];
   $email=$_POST['email'];
   $user_role=$_POST['user_role'];
   $post_image=$_FILES['post_image']['name'];
   $post_image_temp=$_FILES['post_image']['tmp_name'];
   move_uploaded_file($post_image_temp,"images/$post_image");

   $query="UPDATE newuser SET username='$username',password='$password',firstname='$firstname',lastname='$lastname',email='$email',role='$user_role',NickName='$NickName',Biographicalinfo='$Biographicalinfo',ProfilePicture='$post_image' WHERE id={$the_user_id}";
  $update_query=mysqli_query($connection,$query);
   if (!$update_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }                  
        }
}

if (isset($_POST['update_users'])) {
   $username=$_POST['username'];
   $password=$_POST['password'];
   $firstname=$_POST['firstname'];
   $NickName=$_POST['NickName'];
   $Biographicalinfo=$_POST['Biographicalinfo'];
   $lastname=$_POST['lastname'];
   $email=$_POST['email'];
   $user_role=$_POST['user_role'];
   $post_image=$_FILES['post_image']['name'];
   $post_image_temp=$_FILES['post_image']['tmp_name'];
   move_uploaded_file($post_image_temp,"images/$post_image");

  
   $que="INSERT INTO newuser(username,password,firstname,lastname,email,role,NickName,Biographicalinfo,ProfilePicture)VALUES('$username','$password','$firstname','$lastname','$email','$user_role','$NickName','$Biographicalinfo','$post_image')";
  $insert_query=mysqli_query($connection,$que);
   if (!$insert_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }                  
        }


?>

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
              <form action="" method="post" enctype="multipart/form-data">

              <label>User Name</label>
              <input type="text" class="form-control" name="username" value="<?php if(isset($user_username)){echo $user_username;} ?>" required>
<label>First Name</label>
              <input type="text" class="form-control" name="firstname" value="<?php if(isset($user_firstname)){echo $user_firstname;} ?>" required>
<label>Last Name</label>
              <input type="text" class="form-control" name="lastname" value="<?php if(isset( $user_lastname)){echo $user_lastname;} ?>" required>

<label>Nick Name</label>
              <input type="text" name="NickName" class="form-control" required>

              
  <label >Display Name Publicly as</label>
    <select class="form-control" name="user_role">
      <option>Administrator</option>
    </select>
    <h6 class="text-center"> Contact Info</h6>
    <hr>
    <label>E-Mail</label>
              <input type="email" class="form-control" name="email" value="<?php if(isset($user_email)){echo  $user_email;} ?>" required>

      <h6 class="text-center">About Youself</h6>
    <hr>
    <label>Biographical Info</label>
<textarea class="form-control" name="Biographicalinfo" required></textarea>
<label>Profile Picture</label>

 <div class="custom-file">
  <input type="file" class="custom-file-input" name="post_image" id="exampleInputFile">
  <label class="custom-file-label" for="exampleInputFile"  data-browse="choose your image">Choose your image</label>
</div>
<h6 class="text-center">Account Management</h6>
<hr>
<label>New Password</label>
<input type="passord" class="form-control" name="password">
<label>Re-type Password</label>
<input type="passord" class="form-control">
<input type="submit" name="update_users" class="btn btn-primary" value="Update Your Profile">
<!-- <button type="button" class="btn btn-primary" name="update_users">Update Your Profile</button> -->

              </form>




                </div>
              </div>
      </div>

       
 

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>



</body>

</html>

