<?php include("includes/init.php"); ?>
<?php

$connection=mysqli_connect('localhost','root','','admin');
              $query="SELECT * FROM posts";
$select_allposts=mysqli_query($connection,$query);

if($select_allposts){
     $total_posts = mysqli_num_rows($select_allposts); 
     
          }  

$publish_query="SELECT Status FROM posts WHERE Status='Publish'";
$select_publish_query=mysqli_query($connection,$publish_query);
if($select_publish_query){
     $publish_posts = mysqli_num_rows($select_publish_query); 
               }  

$draft_query="SELECT Status FROM posts WHERE Status='Draft'";
$select_draft_query=mysqli_query($connection,$draft_query);
if($select_draft_query){
     $draft_posts = mysqli_num_rows($select_draft_query); 
               }  




?>



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
            <div class="col-md-12">
              <div class="row">
          <div class="col-md-12">
         <a href="allpost.php?show=all"> All (<span><?php echo $total_posts;    ?></span>) </a> |  <a href="allpost.php?show=published"> Published </a> (<span><?php echo $publish_posts;   ?></span>)  | <a href="allpost.php?show=draft">  Draft </a>(<span><?php echo $draft_posts; ?></span>)

        </div>
</div>
      
<div class="row dash_row" id="filter">

   <div class="col-md-2">
    <select class="form-control">
      <option>All Author</option>
    </select>
  </div>
  <div class="col-md-2">
    <select class="form-control">
      <option>All Category</option>
    </select>
  </div>
  <div class="col-md-2">
    <select class="form-control">
      <option>Format</option>
    </select>
  </div>
  <div class="col-md-2">
     <button type="button" class="btn btn-primary">Apply</button>
      
  </div>
  <div class="col-md-2">
    <select class="form-control">
      <option>All Dates</option>
    </select>
  </div>
  <div class="col-md-2 ">
     <button type="button" class="btn btn-primary">Apply</button>
      
  </div>
  
</div>
</div>
</div>
        <div class="row dash_row">
    		<div class="col-md-12 outer-w3-agile">
              <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th><input type="checkbox" id="checkall" /></th>
                   <th>Title</th>
                    <th>Author</th>
                     <th>Categories</th>
                     <th>Tags</th>
                     <th>Comment</th>
                     <th>Date</th>
                     <th>Edit</th>
                    <th>Delete</th>
                   </thead>
    <tbody>

      <?php if(isset($_GET['show'])){
        $show=$_GET['show'];
      }
      else{
  $show='';
}

switch ($show) {
             case 'published';
               include "published_posts.php"; 
               break;
              case 'draft':
              include "draft_posts.php"; 
               break;
               case 'all':
              include "allposts.php"; 
               break;
              default:
              include "allposts.php";
               break;
           }   
?>
    <td>
      
<?php  

 if(isset($_GET['edit'])){
       echo $edit=$_GET['edit'];
      }else{
        echo "nothing";
      }


      ?>


    </td>
    </tbody>
        
</table>


                
            </div>

            		</div>
              </div>
    	</div>
 
   

   
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  Are you sure want delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Delete</button>
      </div>
    </div>
  </div>
</div>
  <!-- Custom scripts for all pages-->
 <script type="text/javascript">
    $('#datepicker').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
    });
    $('#datepicker').datepicker("setDate", new Date());
</script> 

</body>

</html>