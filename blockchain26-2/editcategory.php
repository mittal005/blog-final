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
  <div class="row dash_row ">
                <div class="offset-md-3 col-md-6 col-offset-md-3 outer-w3-agile">
                  <form>
                    <h5 class="text-center">Edit Category</h5>
                    <hr>
                    
                    <label>Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required=""> 
                    <br>  
                            <label>Slug</label>
                    <input type="text" class="form-control"  placeholder="" value="" required="">
                    <br>
                    <label> Parent Category</label>
                    <select class="form-control">
                     
                                        <option>select category</option>
                                        <option>News</option>
                                    </select>
                                    <br>
                   <label>Description</label>
                    <textarea class="form-control"  rows="5" required=""></textarea>
                    <div class="row">
                      <div class="offset-md-4 col-md-4 col-offset-md-4 text-center">
                       
                      <button type="button" class="btn btn-primary">Upadte</button>
                    </div>
                    </div>
                  </div>
                  </form>
</div>
</div>
 </div>
  
</body>
</html>
