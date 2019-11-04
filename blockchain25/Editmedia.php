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
 	 <div class="col-md-12">
 	<div class="row">
 	<div class="col-md-12 outer-w3-agile">
  <h4> Edit Image<button class="btn btn-primary offset-md-1">Add New</button></h4>
  </div>
</div>
</div>
<div class="row dash_row">
 	<div class="col-md-8">
     <div class="col-md-12 outer-w3-agile">
  <button class="btn btn-primary offset-md-1">Edit Image</button>
</div>
<div class="row dash_row">
<div class="col-md-12 outer-w3-agile">
    <form class="" action='' method="post" ><h6>Caption</h6></form>
      <input type="text" class="form-control" placeholder="" >
      <br>
       <form class="" action='' method="post" ><h6>Alternative Text</h6></form>
      <input type="text" class="form-control" placeholder="" >
      <br>
       <div id="editor">
       <h6>Description</h6>
    <div id='edit' style="margin-top: 30px;" contentEditable="true" data-text="Enter">
       </div>
  </div>
</div>
</div>
</div>

<div class="col-md-4">
	<div class="row ">
        		<div class="col-md-12 outer-w3-agile">
          <div id="accordion">
          <div class="card">
<div class="card-header" id="glanceone">
      <h5>
        <a role="button" data-toggle="collapse" data-target="#glance" aria-expanded="true" aria-controls="glace">
          Save
        </a>
      </h5>
    </div>
</div>
 <div id="glance" class="collapse show" aria-labelledby="glanceone" data-parent="#accordion">
       <div class="card-body">
        <div class="row">
          <div class="col-md-9">
          <i class="fa fa-calendar"></i><span class="mar_right_20"><h6>Uploaded On:</h6></span><br>
    <h6>File Url:</h6>
    <div>
      <input type="text" class="form-control" >
  </div>
      <h6>File Name:</h6>
      <h6>File Type:</h6>
      <h6>File Size:</h6>
      <h6>Dimensions:</h6>
      <a href="#">Delete Permanently</a>
  </div>
</div>
     <button class="btn btn-primary offset-md-8 col-md-3">Update</button>
  </div>
       </div>
   </div>
</div>
          </div>
  </div>  

</div>
</div>
  <script>
    (function () {
      new FroalaEditor("#edit", {
         initOnClick: true
      })
    })()
  </script>
</body>
</html>