 
 <?php include "includes/header.php"; ?>
 <?php 
if (isset($_SESSION['username'])) {
  $username= $_SESSION['username'];
  $query="SELECT * FROM users WHERE user_name='{$username}'";
  $select_all_users=mysqli_query($connection,$query);
  if (!$select_all_users) {
        die('query FAILED . mysqli_error($connection)');
                             }
}
while ($row=mysqli_fetch_array($select_all_users)) {
  $user_id=$row['user_id'];
  $user_name=$row['user_name'];
  $user_password=$row['user_password'];
  $user_firstname=$row['user_firstname'];
  $user_lastname=$row['user_lastname'];
  $user_email=$row['user_email'];
    $user_role=$row['user_role'];
  
}
?>
<?
if (isset($_POST['update_users'])) {
   $username1=$_POST['username'];
   $password=$_POST['password'];
   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $email=$_POST['email'];
   $user_role=$_POST['user_role'];
   $query="UPDATE users SET user_name='$username1',user_password='$password',user_firstname='$firstname',user_lastname='$lastname',user_email='$email',user_role='$user_role' WHERE user_name={$username}";
  $update_query=mysqli_query($connection,$query);
   if (!$update_query) {
        die('query FAILED . mysqli_error($connection)');
   }                     
        }




?>

    <div id="wrapper">

        <!-- Navigation -->
       <?php include "includes/navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            WELCOME TO ADMIN
                            <small>AUTHOR</small>
                        </h1>
                        


                        
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
 
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include "includes/footer.php"; ?>