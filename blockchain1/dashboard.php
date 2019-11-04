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
      
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
       
        <div class="input-group-append">
          
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav">
      
      
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
        <a class="nav-link" href="dashboard.php">
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
  <div class="row ">
    <div class="col-md-5 dash_row">
      <div class="row">
        <div class="col-md-12 outer-w3-agile">
          <div id="accordion">
          <div class="card">
<div class="card-header" id="glanceone">
      <h5 class="mb-0">
        <a role="button" data-toggle="collapse" data-target="#glance" aria-expanded="true" aria-controls="glace">
         At a Glance
        </a>
      </h5>
    </div>
     <div id="glance" class="collapse show" aria-labelledby="glanceone" data-parent="#accordion">
       <div class="card-body">
        <div class="row mar_bottom_20">
          <div class="col-md-6">
          <i class="fa fa-thumb-tack"></i>
          <span></span><a href="#">Post</a>
        </div>

<div class="col-md-6">
          <i class="fa fa-file"></i>
          <span></span><a href="#">Pages</a>
        
        </div>
        </div>


        <div class="row">
          <div class="col-md-6 col-">
          <i class="fa fa-comments"></i>
          <span></span><a href="#">Comments</a>      
        </div>
        </div>


      </div>
       </div>
          </div>
        </div>
        </div>
      </div>



      <div class="row dash_row">
        <div class="col-md-12 outer-w3-agile">
          <div id="accordion2">
            <div class="card">

<div class="card-header" id="activityone">
      <h5 class="mb-0">
        <a role="button" data-toggle="collapse" data-target="#activity" aria-expanded="true" aria-controls="activity">
       Activity
        </a>
      </h5>
    </div>


     <div id="activity" class="collapse show" aria-labelledby="activityone" data-parent="#accordion2">
      <h6>Recently Published</h6>
      <div class="card-body">

        <label>hai</label> <span><a href="#"> hello </a></span>
      
   </div>
     </div>




            </div>
          </div>
        </div>
      </div>
    </div>


<div class="offset-md-1 col-md-6 outer-w3-agile dash_row">

<div id="accordion3">

<div class="card">

<div class="card-header" id="draftone">
      <h5 class="mb-0">
        <a role="button" data-toggle="collapse" data-target="#draft" aria-expanded="true" aria-controls="draft">
       Quick Draft
        </a>
      </h5>
    </div>

<div id="draft" class="collapse show" aria-labelledby="draftone" data-parent="#accordion3">
       <div class="card-body">

<form>
  <label>Title</label>
  <input class="form-control" type="text" placeholder="Title">

  <label>Content</label>
  <textarea class="form-control" size="10" type="text" placeholder="Content"></textarea> 

  <button class="btn btn-primary">Save Draft</button>

</form>
<hr>
<h6>Your recent draft</h6>

<div id="recentdraft">
 <span><a href="#"> hello </a></span>  <label>hai</label>
 <br>
 <p></p>
      
</div>

      </div>
    </div>


</div>

</div>




</div>












  </div>
 </div>

  
    
  
 
  

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.js"></script>



</body>

</html>
