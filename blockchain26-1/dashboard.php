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

<div class="row dash_row outer-w3-agile">
 <div class="col-md-12 text-centr">
  <h5> Welcome to Dashboard</h5>
  </div>
</div>

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

  <button class="btn btn-primary button-top">Save Draft</button>

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

</body>

</html>
