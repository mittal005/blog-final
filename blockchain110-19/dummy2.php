<?php include("includes/header.php"); ?>
<?php
if(isset($_POST['saveDraft']))
{
  
    $username=$_SESSION['username'];
    $user_id=$_SESSION['user_id'];
    $addTitle=$_POST['addTitle'];
    $postContent=$_POST['postContent'];
     $statusdropdown=$_POST['statusdropdown'];
        $visible=$_POST['visible1'];
     date_default_timezone_set("Asia/Kolkata");
     $current_time = date("F j, Y, g:i a");
      $date=$_POST['date'];
     $category_name=$_POST['category_name'];
     $category_type=$_POST['category_type'];
      $seo_title=$_POST['seo_title'];
    $description=$_POST['description'];
     $url=$_POST['url'];
     $schema=$_POST['schema'];
     // ------------------------------------------
     if(isset($_FILES) & !empty($_FILES)){
  $post_image=$_FILES['post_image']['name'];
  $type = $_FILES['post_image']['type'];
   $post_image_temp=$_FILES['post_image']['tmp_name'];
   $extension = substr($post_image, strpos($post_image, '.') + 1);
   if(isset($post_image) && !empty($post_image)){
      if(($extension == "jpg" || $extension == "jpeg" || $extension == "png")){
if ($statusdropdown == 'Draft') {
 $query="INSERT INTO pages(username,user_id,Title,Content,Status,Visibility,publihedOn,draftTime,categoryName,categoryType,seo_title,description, url,seo_schema,image)VALUES('$username','$user_id','$addTitle','$postContent','$statusdropdown','$visible','$date','$current_time','$category_name','$category_type','$seo_title','$description','$url','$schema','$post_image')";
  $create_post_query=mysqli_query($connection,$query);
  if (!$create_post_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
}
// ----------------------------------------
if ($statusdropdown == 'Publish') {
 $query="INSERT INTO pages(username,user_id,Title,Content,Status,Visibility,publihedOn,publishTime,categoryName,categoryType,seo_title,description, url,seo_schema,image)VALUES('$username','$user_id','$addTitle','$postContent','$statusdropdown','$visible','$date','$current_time','$category_name','$category_type','$seo_title','$description','$url','$schema','$post_image')";
  $create_post_query=mysqli_query($connection,$query);
  if (!$create_post_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
}

// ------------------------------------------------------
$query_image="INSERT INTO mediaLibrary(username,image)VALUES('$username','$post_image')";
$create_image_query=mysqli_query($connection,$query_image);
  if (!$create_image_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }

         if(move_uploaded_file($post_image_temp,"gallery/$post_image")){
          $smsg = "Uploaded Successfully";

        }else{
          $fmsg = "Failed to Upload File";
        }
      }else{
        $fmsg = "File size should be only in jpeg and png file";
      }
    }else{
      $fmsg = "Please Select a File";
    }
   ;

}
  //$connection=mysqli_connect('localhost','root','','admin');


}
// ------------------------------------------------------------
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

<body id="page-top">

 <?php include("includes/topnav.php"); ?>

  <div id="wrapper">

    <!-- Sidebar -->
    
<?php include("includes/sidenav.php"); ?>
      <div class="container-fluid">
<div class="row dash_row">

  <div class="col-md-8 ">
    <div class="row">
      <div class="col-md-12">
    <div class="outer-w3-agile">
     <h4 class="text-center">Add Pages</h4>
  <hr>
    <form class="" action='' method="post" enctype="multipart/form-data">
      <input type="text" class="form-control" name="addTitle"  placeholder="Add Title" >
      <br>
     <!--  <span class="add_media" id="media" readonly="true">Add Media</span> -->
       <div id="editor">
    
    <div  contentEditable="true" data-text="Enter">
      <textarea id='edit' name="postContent"></textarea>
       </div>
  </div>


</div>
</div>
</div><div class="row dash_row">
  <div class="col-md-12">
    <div class="outer-w3-agile">
      <h6>Featured image</h6>
       <span>Add your Featured image:</span> <input type="file" name="post_image">
       <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
     <br>
     (or)
     <br>
      <a href="#"  data-title="fimage" data-toggle="modal" data-target="#fimage"><i class="fa fa-plus"></i>Choose form media library</a>
     
    </div>
  </div>
  </div>

<div class="row dash_row">
  <div class="col-md-12">
    <div class="outer-w3-agile">
     



<div id="seo">
          <div class="card">
<div class="card-header" id="seoone">
      <h5 class="mb-0">
        <a role="button" data-toggle="collapse" data-target="#seos" aria-expanded="true" aria-controls="seos">
        All in One SEO Pack
        </a>
      </h5>
    </div>
     <div id="seos" class="collapse show" aria-labelledby="seoone" data-parent="#seo">
       <div class="card-body">
        



  <div class="snipp">
  <i class="fa fa-question-circle pad"></i>Preview 
  <br>
  <a href="#" class="pad">hello</a>   |  <a href="#" class="pad">hai</a>
  <br>
  <a href="#"></a>
</div>

<div class="sapUiLayoutAbsPos" data-sap-ui="__container33" id="__container33"><i class="fa fa-question-circle pad">Description</i>
   </div>
<div class="sapUiLayoutAbsPos" data-sap-ui="__container34" id="__container34">
    <span class="hoverTooltip" title="" data-sap-ui="HOVER_tf1" id="HOVER_tf1">This is a hover tooltip to explain stuff.</span>
</div>
<input type="text" class="pad form-control" name="seo_title"><br>
<span class="label_border pad">10</span><span>Characeter. Most search engines use a maximum of 60 characters for the Title.</span><br><br>
<i class="fa fa-question-circle pad"></i>Description
<textarea class="form-control pad" name="description"></textarea><br>
<span class="label_border pad">100</span><span>Characeter. Most search engines use a maximum of 160 characters for the description.</span><br>
<br>
<i class="fa fa-question-circle pad"></i>Custom Canonical URL
<input type="text" class="pad form-control" name="url">

<i class="fa fa-question-circle pad"></i>Schema
<input type="text" class="pad form-control" name="schema">




      </div>
       </div>
          </div>
        </div>


         </div>
  </div>
  </div>


          </div>

         <div class="col-md-4 ">
            <div class="row dash_row">
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
        ><button class="btn btn-primary" id="btn1" name="saveDraft">Save Draft</button></div></div>
       <br>
       <i class="fa fa-key"></i><span class="mar_right_20">Status:</span><label id="status" class="mar_right_20"></label><a href="#" onclick="status('answer1');return false;">Edit</a>
       <br>
       <div id="edit_pub">
       <form class="mar_top_20">
       <select class="form-control" name="statusdropdown"  onchange="jsFunction(this.value);">
          <option value="Draft">Draft</option>
          <option value="Publish">Publish</option>
        </select>
        <button class="btn btn-primary mar_top_20">OK</button>
       <button class="btn btn-primary mar_top_20">Cancel</button>
      </div>
       <!-- </form> -->
      <i class="fa fa-eye"></i><span class="mar_right_20">Visibility:</span><label id="result" class="mar_right_20"></label><a href="#" onclick="Visibility()">Edit</a>
       <div id="visi">
      
        <input type="radio" name="visible1" value="Public" class="mar_top_20">Public<br>
    <input type="radio" name="visible1" value="Private">Private
    <br> 
    <button type="button" class="btn btn-primary mar_top_20" onclick="displayRadioValue()"> 
        Submit 
    </button>
     <button type="button" class="btn btn-primary mar_top_20 float-right" > 
        Cancel
    </button>
       

</div>
       <!-- </form> -->
       <div>
          <i class="fa fa-calendar"></i><span class="mar_right_20">Published On:</span>
          <label id="result" class="mar_right_20"></label> <a href="#" onclick="showStuff('answer3'); return false;">Edit </a>
     <span id="answer3" style="display: none;">
         <input type="date" name="date"></span>  
       </div>
</div>  
     </div>
     <br>
     <button class="btn btn-primary col-md-3">Update</button>   
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
                           //$connection=mysqli_connect('localhost','root','','admin');
                           $select_query="SELECT name FROM category ORDER BY id DESC LIMIT 5";
                           $select_all_categories_query=mysqli_query($connection, $select_query);
                if (!$select_all_categories_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
                            while($row=mysqli_fetch_array($select_all_categories_query)){
                              $name=$row['name'];
                                              ?>
                    <input type="checkbox" class="mar_top_20"> <?php echo $name;    ?><br>
                                        
                                        <?php
                                      }
                                        ?>
     
  </div>
 
</div>

<br>
<a href="#" onclick="category()" class="mar_top_20"><i class="fa fa-plus"></i>Add new Category</a>

      </div>
       </div>
          </div>
        </div>

<div id="ncategory" class=" mar_top_20">
  <input type="text" class="form-control mar_top_20"  name="category_name">
  <select class="form-control mar_top_20" name="category_type">
    <option>Parent Category</option>
    <?php
                           //$connection=mysqli_connect('localhost','root','','admin');
                           $select_query="SELECT name FROM category";
                           $select_all_categories_query=mysqli_query($connection, $select_query);
                if (!$select_all_categories_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
                            while($row=mysqli_fetch_array($select_all_categories_query)){
                              $name=$row['name'];
                         
                    ?>
                                        <option> <?php echo $name;    ?></option>
                                       
                                     <?php
                                      }
                                        ?>
    
  
   
  
  </select>
  <button class="btn btn-primary button-top" name="add_new_category">Add new</button>
</form>
</div>


  </div>
</div>



 --><script> 
        function displayRadioValue() { 
            var ele = document.getElementsByName('visible1'); 
              
            for(i = 0; i < ele.length; i++) { 
                if(ele[i].checked) 
                document.getElementById("result").innerHTML
                        = ele[i].value; 
                        document.getElementById('visi').style.display="none";
            } 
        } 
    </script> 
    <script src="dropzone/dist/dropzone.js" type="text/javascript"></script>
<script type="text/javascript">
  Dropzone.autoDiscover = false;
  var dropzone1 = new Dropzone('#imageDropzone', {
          maxFiles:5,
          forceFallbacks:true,
          autoDiscover:false,
          createImageThumbnails:false,
          init:function(){
              this.on("success",function (file,response){
                  alert(response);
              });
          }
     });
 </script> 
      
 <script type="text/javascript">
function showStuff(id) {
    document.getElementById(id).style.display = 'block';
}
</script>
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
    function status()
    {

  document.getElementById('edit_pub').style.display='block';
    }
    function Visibility()
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
   
</body>

</html>
