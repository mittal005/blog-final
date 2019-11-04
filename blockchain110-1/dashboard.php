<?php include("includes/header.php"); ?>
<?php

              $query="SELECT * FROM posts";
$select_allposts=mysqli_query($connection,$query);

if($select_allposts){
     $total_posts = mysqli_num_rows($select_allposts); 
     
          }  





?>

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
          <span><?php  echo  $total_posts;       ?></span><a href="#">Post</a>
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

<form action="" method="post">
  <label>Title</label>
  <input class="form-control" type="text" name="title" placeholder="Title">

  <label>Content</label>
  <textarea class="form-control" size="10" type="text" name="content" placeholder="Content"></textarea> 

  <button class="btn btn-primary button-top" name="save_draft">Save Draft</button>

</form>
<?php
if (isset($_POST['save_draft'])) {
    $title=$_POST['title'];
    $content=$_POST['content'];
         
    if (!empty($title)&& !empty($content)) {
     $connection=mysqli_connect('localhost','root','','admin4');
         $title=mysqli_real_escape_string($connection,$title);
$content=mysqli_real_escape_string($connection,$content);


     $que="INSERT INTO quickdraft(title,content)VALUES('$title','$content')";
          $insert_draft=mysqli_query($connection,$que);
         if (! $insert_draft) {
        die('query FAILED . mysqli_error($connection)');
                             }

               // $message="";    
                             $select_query="SELECT * FROM quickdraft WHERE title='{$title}' ORDER BY id DESC LIMIT 1";
                $select_all_categories_query=mysqli_query($connection, $select_query);
                if (!$select_all_categories_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
                    while($row=mysqli_fetch_array($select_all_categories_query)){
                      $show_title=$row['title'];
                      $show_time=$row['time'];
                      $show_time=substr($show_time,0,-7)."<br>";
                      // trim($show_time,"Hed!");
                      // substr("Hello world",0,-2)

          ?>


<hr>
<h6>Your recent draft</h6>

<div id="recentdraft">
 <span><a href="#"> <?php echo  $show_title;   ?> </a></span>  <label><?php echo  $show_time;   ?></label>
 <br>
 <p></p>
      
</div>
<?php

 }
       
    }


}

?>
      </div>
    </div>


</div>

</div>

</div>

  </div>
 </div>

</body>

</html>
