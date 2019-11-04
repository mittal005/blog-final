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
        <div class="row dash_row">
    		<div class="offset-md-2 col-md-8 col-offset-md-2 outer-w3-agile">
                        
<h5 class="text-center">Add New User</h5>
<hr>
              <form>

              <label>User Name</label>
              <input type="text" class="form-control" required>
<label>E-Mail</label>
              <input type="email" class="form-control" required>
<label>First Name</label>
              <input type="text" class="form-control" required>
<label>Last Name</label>
              <input type="text" class="form-control" required>

<label>Password</label>
              <input type="Password" class="form-control" required>

              <label>Re-type Password</label>
              <input type="Password" class="form-control" required>
              <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <span class="form-check-label">Send the new user an email about their account</span>
  </div>

  <label >Role</label>
    <select class="form-control" >
      <option>Administrator</option>
    </select>
    <button type="button" class="btn btn-primary button-top">Add New User</button>

              </form>




            		</div>
              </div>
    	</div>

       
 

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>



</body>

</html>
