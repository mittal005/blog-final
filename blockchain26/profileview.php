<?php session_start(); ?>
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
              <input type="text" class="form-control" readonly="true">
<label>First Name</label>
              <input type="text" class="form-control" readonly="true">
<label>Last Name</label>
              <input type="text" class="form-control" readonly="true">

<label>Nick Name</label>
              <input type="text" class="form-control" readonly="true">

              
  
    <h6 class="text-center"> Contact Info</h6>
    <hr>
    <label>E-Mail</label>
              <input type="email" class="form-control" readonly="true">

      <h6 class="text-center">About Youself</h6>
    <hr>
    <label>Biographical Info</label>
<textarea class="form-control" readonly="true"></textarea>
<label>Profile Picture</label>

<img src="">

              </form>




            		</div>
              </div>
    	</div>

       
 

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>



</body>

</html>
