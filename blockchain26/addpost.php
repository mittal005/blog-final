<?php session_start(); ?>
<?php
if(isset($_POST['saveDraft']))
{
  
    $username=$_SESSION['username'];

    $addTitle=$_POST['addTitle'];
    $postContent=$_POST['postContent'];
     $statusdropdown=$_POST['statusdropdown'];
      $visible=$_POST['visible'];
    $x=$_POST['x'];
    date_default_timezone_set("Asia/Kolkata");
     $current_time = date("F j, Y, g:i a");
     $category_name=$_POST['category_name'];
     $category_type=$_POST['category_type'];


  $connection=mysqli_connect('localhost','root','','admin');
  if ($statusdropdown == 'Draft') {
 $query="INSERT INTO posts(username,Title,Content,Status,Visibility,Format,draftTime,categoryName,categoryType)VALUES('$username','$addTitle','$postContent','$statusdropdown','$visible','$x','$current_time','$category_name','$category_type')";
  $create_post_query=mysqli_query($connection,$query);
  if (!$create_post_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
}
if ($statusdropdown == 'Publish') {
 $query="INSERT INTO posts(username,Title,Content,Status,Visibility,Format,publishTime,categoryName,categoryType)VALUES('$username','$addTitle','$postContent','$statusdropdown','$visible','$x','$current_time','$category_name','$category_type')";
  $create_post_query=mysqli_query($connection,$query);
  if (!$create_post_query) {
        die('query FAILED . mysqli_error($connection)');
                             }
}
}

//   $query="INSERT INTO posts(username,Title,Content)VALUES('$username','$addTitle','$postContent')";
//   $create_post_query=mysqli_query($connection,$query);
//   if (!$create_post_query) {
//         die('query FAILED . mysqli_error($connection)');
//                              }
// }
// --------------------------------------------------------------------------------------
if(isset($_POST['add_new_category']))
{
  
  $category_name=$_POST['category_name'];
     $category_type=$_POST['category_type'];
  $connection=mysqli_connect('localhost','root','','admin');


 $query="INSERT INTO category(name,parentcategory)VALUES('$category_name','$category_type')";
  $create_post_query=mysqli_query($connection,$query);
   if (!$create_post_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
  
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
<div class="row dash_row">

	<div class="col-md-8 ">
    <div class="outer-w3-agile">
     <h4 class="text-center">Add Post</h4>
  <hr>
    <form class="" action='' method="post" >
      <input type="text" class="form-control" name="addTitle" placeholder="Add Title" >
      <br>
      <span class="add_media" id="media" readonly="true">Add Media</span>
       <div id="editor">
    
    <div  style="margin-top: 30px;" contentEditable="true" data-text="Enter">
      <textarea id='edit' name="postContent"></textarea>
       </div>
  </div>
    <div style="margin-top: 30px">
   <input type="submit" name="submit" class="btn btn-primary" value="submit">
    </div>

 <!-- </form> -->
</div>
    			</div>


          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12 outer-w3-agile">
<div id="publish">
            <div class="card">
        <div class="card-header" id="activityone">
      <h5 class="mb-0">
        <a role="button" data-toggle="collapse" data-target="#activity" aria-expanded="true" aria-controls="activity">
       Publish
        </a>
      </h5>
    </div>


     <div id="activity" class="collapse show" aria-labelledby="activityone" data-parent="publish">
       <div class="card-body">
<div class="row">
       <div class="col-md-6"> <button class="btn btn-primary">Preview</button></div><div class="col-md-6"
        >
        <!-- <input type="submit" name="saveDraft" id="btn1" class="btn btn-primary" value="Save Draft" > -->
        <button class="btn btn-primary" id="btn1" name="saveDraft">Save Draft</button>

      </div></div>
       <br>
      <!--  <form action="" method="post"> -->
       <i class="fa fa-key"></i><span class="mar_right_20">Status:</span><label id="status" class="mar_right_20"></label><a href="#" onclick="dis()">Edit</a>
       <br>
       <div id="edit_pub">
       <!-- <form class="mar_top_20"> -->
       <select class="form-control" name="statusdropdown"  onchange="jsFunction(this.value);">
          <option value="Draft">Draft</option>
          <option value="Publish">Publish</option>
        </select>
       <button class="btn btn-primary mar_top_20">Cancel</button>
      </div>
      <!--  </form> -->
       <i class="fa fa-eye"></i><span class="mar_right_20">Visibility:</span><label id="result" class="mar_right_20"></label><a href="#" onclick="vdis()">Edit</a>
       <div id="visi">
     <!--   <form> -->
        <input type="radio" name="visible" value="Public" class="mar_top_20">Public<br>
    <input type="radio" name="visible" value="Private">Private
    <br> 
    <button type="button" class="btn btn-primary mar_top_20" onclick="displayRadioValue()"> 
        Submit 
    </button>
     <button type="button" class="btn btn-primary mar_top_20 float-right" > 
        Cancel
    </button>
       <!-- </form> -->
</div>
<br><br>
    <input type="submit" class="btn btn-primary mar_top_20" value="Update" name="update">
       <!-- <button class="btn btn-primary mar_top_20">Update</button>    -->      
   </div>
     </div>
            </div>
          </div>
              </div>
            </div>




<div class="row dash_row outer-w3-agile">
  <div class="col-md-12">




<div id="format">
          <div class="card">
<div class="card-header" id="glanceone">
      <h5 class="mb-0">
        <a role="button" data-toggle="collapse" data-target="#glance" aria-expanded="true" aria-controls="glace">
         Format
        </a>
      </h5>
    </div>
     <div id="glance" class="collapse show" aria-labelledby="glanceone" data-parent="#format">
       <div class="card-body">
        <input type="radio" value="Standard" name="x"><i class="fa fa-thumb-tack"></i>Standard<br>

        <input type="radio" value="Picture" name="x"><i class="fa fa-picture-o"></i>Picture<br>
        <input type="radio" value="Video" name="x"><i class="fa fa-video-camera"></i>Video<br>


<input type="radio" value="Quote" name="x"><i class="fa fa-quote-left"></i>Quote<br>

<input type="radio" value="Link" name="x"><i class="fa fa-link"></i>Link<br>

<input type="radio" value="Gallery" name="x"><i class="fa fa-file-image-o"></i>Gallery<br>

      </div>
       </div>
     <!-- </div> -->
  <!--  </div>
 </div>
</div> -->
<!-- </form> -->

          </div>
        </div>





  </div>
</div>




<div class="row dash_row outer-w3-agile">
  <div class="col-md-12">




<div id="category">
          <div class="card">
<div class="card-header" id="categoryone">
      <h5 class="mb-0">
        <a role="button" data-toggle="collapse" data-target="#cat" aria-expanded="true" aria-controls="cat">
         Category
        </a>
      </h5>
    </div>
     <div id="cat" class="collapse show" aria-labelledby="categoryone" data-parent="#category">
       <div class="card-body">
        

<div class = "tabinator">
  
  <input type = "radio" id = "tab1" name = "tabs" checked>
  <label for = "tab1">All category</label>
  <input type = "radio" id = "tab2" name = "tabs">
  <label for = "tab2">Most used</label>

  
  <div id = "content1">
    <?php
                           $connection=mysqli_connect('localhost','root','','admin');
                           $select_query="SELECT name FROM category ORDER BY id DESC LIMIT 5";
                           $select_all_categories_query=mysqli_query($connection, $select_query);
                if (!$select_all_categories_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
                            while($row=mysqli_fetch_array($select_all_categories_query)){
                              $name=$row['name'];
                           //    foreach($names as $name){
                           // echo $unique_name;    
                           //   $unique_name= array_unique($name);

  
                             //echo $unique_name= array_unique($name);
                    ?>
                    <input type="checkbox" class="mar_top_20"> <?php echo $name;    ?><br>
                                        <!-- <option> <?php //echo $name;    ?></option> -->
                                       
                                        <!-- <option> <?php //echo array_unique($select_all_categories_query['name']);    ?></option> -->

                                        <?php
                                      }
                                        ?>
    <!-- <input type="checkbox" class="mar_top_20">Uncategorized<br>
    <input type="checkbox" class="mar_top_20">Uncategorized
  -->
  </div>
  <!-- <div id = "content2">
   <input type="checkbox" class="mar_top_20">Uncategorized<br>
    <input type="checkbox" class="mar_top_20">Uncategorized
 
  </div> -->
  
</div>

<br>
<a href="#" onclick="category()" class="mar_top_20"><i class="fa fa-plus"></i>Add new Category</a>

      </div>
       </div>
          </div>
        </div>

<div id="ncategory" class=" mar_top_20">
  <input type="text" class="form-control mar_top_20" name="category_name">
  <select class="form-control mar_top_20" name="category_type">
    <option>Parent Category</option>
     <?php
                           $connection=mysqli_connect('localhost','root','','admin');
                           $select_query="SELECT name FROM category";
                           $select_all_categories_query=mysqli_query($connection, $select_query);
                if (!$select_all_categories_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
                            while($row=mysqli_fetch_array($select_all_categories_query)){
                              $name=$row['name'];
                           //    foreach($names as $name){
                           // echo $unique_name;    
                           //   $unique_name= array_unique($name);

  
                             //echo $unique_name= array_unique($name);
                    ?>
                                        <option> <?php echo $name;    ?></option>
                                       
                                        <!-- <option> <?php //echo array_unique($select_all_categories_query['name']);    ?></option> -->

                                        <?php
                                      }
                                        ?>
    
  
  </select>

  <button class="btn btn-primary button-top" name="add_new_category">Add new</button>

  </form>
</div>


  </div>
</div>




<div class="row dash_row mar_bottom_20 outer-w3-agile">
  <div class="col-md-12">



    <div id="tag">
          <div class="card">
<div class="card-header" id="tagone">
      <h5 class="mb-0">
        <a role="button" data-toggle="collapse" data-target="#tags" aria-expanded="true" aria-controls="tags">
         Tags
        </a>
      </h5>
    </div>
     <div id="tags" class="collapse show" aria-labelledby="tagone" data-parent="#tag">
       <div class="card-body">
        

<form>
  <input type="text" class="form-control">
  <span>Seperate tags with commas</span><br>
  <button class="btn btn-primary button-top">Add</button>

</form>


      </div>
       </div>
          </div>
        </div>

  </div>
</div>











 </div>	
</div>
</div>
<script> 
        function displayRadioValue() { 
            var ele = document.getElementsByName('gender'); 
              
            for(i = 0; i < ele.length; i++) { 
                if(ele[i].checked) 
                document.getElementById("result").innerHTML
                        = ele[i].value; 
                        document.getElementById('visi').style.display="none";
            } 
        } 
    </script> 
      

  <!-- Custom scripts for all pages-->
  <script>
function jsFunction(value)
{

    document.getElementById('status').innerHTML = value;
    document.getElementById('btn1').style.display="block";
document.getElementById('btn1').innerHTML=value;

}
 



</script>
  <script>
    function category()
    {
      document.getElementById('ncategory').style.display="block";
    }
    function dis()
    {

  document.getElementById('edit_pub').style.display='block';
    }
    function vdis()
    {
      document.getElementById('visi').style.display="block";
    }
  </script>

  <script>
    (function () {
      new FroalaEditor("#edit", {
         initOnClick: true
    
      })
    })()
  </script>
   <script>
    (function () {
      new FroalaEditor("#media", {
        toolbarInline: true,
        toolbarVisibleWithoutSelection: true,
        toolbarButtons: [ ['insertImage', 'insertLink', 'insertFile', 'insertVideo', 'undo', 'redo'] ],
        toolbarButtonsXS: null,
        toolbarButtonsSM: null,
        toolbarButtonsMD: null
      })
    })()
  </script>

</body>

</html>
