<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

  <!-- Custom fonts for this template-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="css/style.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <link href="css/sb-admin.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fa fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
       
        <div class="input-group-append">
          
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      
      
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
         <label></label>
          <a class="dropdown-item" href="#">Edit My Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fa fa-tachometer"></i>
          <span>Dashboard</span>
        </a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-thumb-tack"></i>
          <span>Post</span>
        </a>
        <div class="dropdown-menu" id="pages" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">All post</a>
          <a class="dropdown-item" href="#">Add new</a>
         <a class="dropdown-item" href="#">Categories</a>
         <a class="dropdown-item" href="#">Tags</a>
         
          </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fa fa-file"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" id="pages" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">All Pages</a>
          <a class="dropdown-item" href="#">Add new</a>
          </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fa fa-comments"></i>
          <span>Commets</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user"></i>
          <span>Users</span>
        </a>
        <div class="dropdown-menu" id="pages" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">All users</a>
          <a class="dropdown-item" href="#">Add new</a>
         <a class="dropdown-item" href="#">Your Profile</a>
          </div>
    </ul>



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
    <button type="button" class="btn btn-primary">Add New User</button>

              </form>




            		</div>
              </div>
    	</div>

       
 

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>



</body>

</html>
