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
  <div class="row ">
    <div class="col-md-5 dash_row">
      <div class="row">
        <div class="offset-md-2 col-md-6 outer-w3-agile dash_row">
          <div id="accordion3">
          <div class="card">
<div class="card-header" id="glanceone">
      <h4 class="mb-0">
        <a role="button" data-toggle="collapse" data-target="#" aria-expanded="true" aria-controls="">
         publish
        </a>
      </h4>
    </div>
     <div id="glance" class="collapse show" aria-labelledby="" data-parent="#accordion3">
       <div class="card-body">
        <div class="row mar_bottom_20">
          <div class="col-md-2">
          <i class="fa fa-key"></i>
          <span></span><a href="#">Status</a>
        </div>

<div class="col-md-2">
          <i class="fa fa-eye"></i>
          <span></span><a href="#">Visibility</a>
        
        </div>
        </div>


        <div class="row">
          <div class="col-md-2">
          <i class="fa fa-calendar"></i>
          <span></span><a href="#">Publish</a>      
        </div>
        </div> 
</div>

  </div>

  <!-- Custom scripts for all pages-->
  
<script>
  function dis()
  {
  if(document.getElementById('y').style.display=='block')
  {
document.getElementById('y').style.display=='none';
  }
  else
  {

    document.getElementById('y').style.display=='block';
  }
}
</script>
<script>
    $(document).ready(function(){
     $('.content').richText();
  });
    CKEDITOR.inline( 'y');

</script>   
</body>

</html>
