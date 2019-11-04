<?php include("includes/header.php"); ?>
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
<!-- ------------------------------sorting------------------ -->
<?php


?>
<!-- ---------------------------------------- -->
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
<!-- ---------------------------select by category---------------------- -->
 

   <div class="col-md-2">
    <form action="" method="post">

    <select class="form-control" name="selectByAuthor">

      <option>All Author</option>
       <?php
                           // $connection=mysqli_connect('localhost','root','','admin');
                           $select_query="SELECT DISTINCT username FROM posts";
                           $select_all_categories_query=mysqli_query($connection, $select_query);
                if (!$select_all_categories_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
                            while($row=mysqli_fetch_array($select_all_categories_query)){
                              $author=$row['username'];
                          
                    ?>
                                        <option> <?php echo $author;    ?></option>
                                       
                                        <?php
                                      }
                                        ?>
    </select>
  </div>
  <div class="col-md-2">
    <select class="form-control" name="selectByCategory">
      <option>All Category</option>
       <?php
                           // $connection=mysqli_connect('localhost','root','','admin');
                           $select_query="SELECT DISTINCT categoryName FROM posts";
                           $select_all_categories_query=mysqli_query($connection, $select_query);
                if (!$select_all_categories_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
                            while($row=mysqli_fetch_array($select_all_categories_query)){
                              $category=$row['categoryName'];
                          
                    ?>
                                        <option> <?php echo $category;    ?></option>
                                       
                                        <?php
                                      }
                                        ?>
    </select>
  </div>
  <div class="col-md-2">
    <select class="form-control" name="selectByFormat">
      <option>Format</option>
       <?php
                           // $connection=mysqli_connect('localhost','root','','admin');
                           $select_query="SELECT DISTINCT Format FROM posts";
                           $select_all_categories_query=mysqli_query($connection, $select_query);
                if (!$select_all_categories_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
                            while($row=mysqli_fetch_array($select_all_categories_query)){
                              $Format=$row['Format'];
                          
                    ?>
                                        <option> <?php echo $Format;    ?></option>
                                       
                                        <?php
                                      }
                                        ?>
    </select>
  </div>
  <div class="col-md-2">
   <input type="submit" name="selectByCategory" class="btn btn-primary" value="Apply">
     <!-- <button type="button" class="btn btn-primary" name="selectByCategory">Apply</button> -->
      </form>
  </div>

<!-- ------------------------------------------------------------------------ -->
  <div class="col-md-2">
    <form action="" method="post">
    <select class="form-control">
      <option>All Dates</option>
    </select>
  </div>
  <div class="col-md-2 ">
    <input type="submit" name="selectByDate" class="btn btn-primary" value="Apply">
     <!-- <button type="button" class="btn btn-primary" >Apply</button> -->
      </form>
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
                   
                   </thead>
    <tbody>

      <?php if(isset($_GET['show'])){
        $show=$_GET['show'];
      }
      else{
  $show='';
}
if (!isset($_POST['selectByCategory']) && !isset($_POST['selectByDate'])) {
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
               case 'sort':
              include "sort.php"; 
               break;

              default:
              include "allposts.php";
               break;
           }   
         }
         ?>
<!-- // ---------------------------selectByCategory---------------------------------- -->
<?php
if (isset($_POST['selectByCategory'])) {
  echo $selectByAuthor=$_POST['selectByAuthor'];  
   $selectByCategory=$_POST['selectByCategory'];
   $selectByFormat=$_POST['selectByFormat'];
  
   $query="SELECT * FROM posts  WHERE  username='{$selectByAuthor}'";
  $update_query=mysqli_query($connection,$query);
  if (!$update_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }  else{
    echo "string";
  }
  if (mysqli_fetch_array($update_query)) {
    echo "success";
  }else{
    echo "failed";
  }
  while($row=mysqli_fetch_array($update_query)) {
  $id=$row['id'];
  $title=$row['Title'];
  $username=$row['username'];
  $categoryName=$row['categoryName'];
  $draftTime=$row['draftTime'];
  $publishTime=$row['publishTime'];
  ?>
      
  <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td class="author_td"><label><?php echo $title;  ?></label></td>
    <td><label><?php echo $username;  ?></label></td>
    <td class="page_control"><label><?php echo $categoryName;  ?></label></td>

    <td><label></label></td>
    <td><label></label></td>
   
    <td><?php if ($draftTime != "") {
                 echo    $draftTime; 
    }else{
         echo    $publishTime;
    }                        ?></td>



    <td> <a class="nav-link " href="#" id="actionmenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-ellipsis-v font-24"></i>
        </a>

<!-- <a href="#edit<?php //echo $row['userid']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>  -->


        <div class="dropdown-menu dropdown-menu-right" id="actionmenulist" aria-labelledby="actionmenu">
          <a class="dropdown-item">Edit<i class="fa fa-pencil pad_left_40"></i
            ></a>
  <a class="dropdown-item quickEditPost" data-title="Edit" data-id="<?php echo $id;  ?>" >Quick Edit<i class="fa fa-magic pad"></i></a>
  <!-- <button class="quickEditPost" >edit</button> -->
    <a class="dropdown-item deletePost" data-title="Delete" data-id="<?php echo $id;  ?>">Trash<i class="fa fa-trash padd"></i
            ></a>
             </div>

</td>
    </tr>
</tbody>
<?php
}
}
?>
<!-- // --------------------------------selectbydate--------------------------------- -->
<?php
if (isset($_POST['selectByDate'])) {
?>
     <tr>
  <td><?php  echo 'dselectByAuthor' ?></td>
  <td><?php  echo  'dselectByCategory'     ?></td>
  <td><?php  echo    'dselectByFormat'       ?></td>
</tr>
</tbody>
<?php
}
      ?>
   
            </div>

                </div>
              </div>
      </div>
 <!-- --------------------------------------------- -->
   
<!-- ------------------------------------------------ -->
   
<!-- ----------------------------------------------------- -->



<!-- ------------------------------------------------------- -->
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