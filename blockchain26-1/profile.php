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
              <input type="text" class="form-control" required>
<label>First Name</label>
              <input type="text" class="form-control" required>
<label>Last Name</label>
              <input type="text" class="form-control" required>

<label>Nick Name</label>
              <input type="text" class="form-control" required>

              
  <label >Display Name Publicly as</label>
    <select class="form-control" >
      <option>Administrator</option>
    </select>
    <h6 class="text-center"> Contact Info</h6>
    <hr>
    <label>E-Mail</label>
              <input type="email" class="form-control" required>

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

<button type="button" class="btn btn-primary button-top">Update Your Profile</button>

              </form>




            		</div>
              </div>
    	</div>

       
 

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>



</body>

</html>
