<?php include("includes/header.php"); ?>
<?php
if(isset($_GET['edit']))
{
$edit_id=$_GET['edit'];
   
$select_query="SELECT * FROM pages WHERE id=$edit_id";
$select_edit_query=mysqli_query($connection,$select_query);
           
                if (!$select_edit_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
  
while($row=mysqli_fetch_array($select_edit_query)) {
  $fid=$row['fid'];
  $Title=$row['Title'];
  $Content=$row['Content'];
  $seo_title=$row['seo_title'];
  $description=$row['description'];
  $url=$row['url'];
  $seo_schema=$row['seo_schema'];
  $Status=$row['Status'];
  $Visibility=$row['Visibility'];
  $publihedOn=$row['publihedOn'];
  $image=$row['image'];
    
  }
  //var_dump($selectCategory);
$select_query1="SELECT * FROM category WHERE id=$fid";
$select_edit_query1=mysqli_query($connection,$select_query1);
           
                if (!$select_edit_query1) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
  
while($row=mysqli_fetch_array($select_edit_query1)) {
$selectCategory=$row['selectCategory'];
  $categoryName=$row['categoryName'];
  $categoryType=$row['parentcategory'];

}


}
// ------------------------------------------------------------
if (isset($_POST['update'])) {
   $addTitle=$_POST['addTitle'];
   $postContent=$_POST['postContent'];
   $seo_title=$_POST['seo_title'];
   $description=$_POST['description'];
   $url=$_POST['url'];
   $schema=$_POST['schema'];
   $statusdropdown=$_POST['statusdropdown'];
   date_default_timezone_set("Asia/Kolkata");
     $current_time= date("Y-m-d");
     if (isset($_FILES['post_image']['name']) && ($_FILES['post_image']['name'] != "")) {
      $update_image=$_FILES['post_image']['name'];
   $update_image_temp=$_FILES['post_image']['tmp_name'];
   //unlink("gallery/$post_image");
   move_uploaded_file($update_image_temp,"gallery/$update_image");
     }else{
      $update_image=$image;
     }
     
   
     if(!empty($_POST['visible'])){ 
   $visible=$_POST['visible'];
 }else{
        $visible="";
      }
   $date=$_POST['date'];
 //   if(!empty($_POST['x'])) {
 //   $x=$_POST['x'];
 // }else{
 //        $x="";
 //      }
      if(!empty($_POST['select_category'])) {
            //echo $selectCategory=$_POST['select_category'];
          $selectCategory=implode(',', $_POST['select_category']);
  }
  // else{
  //       $selectCategory="empty";
  //     }
   $category_name=$_POST['category_name'];
   $category_type=$_POST['category_type'];

   //  if ($category_name != 'uncategorized') {
   //  $c = $selectCategory.",".$category_name; 
   // }else{
   //  $c = $selectCategory;
   // }


if ($statusdropdown == 'Draft') {
   $query="UPDATE pages SET Title='$addTitle',Content='$postContent',seo_title='$seo_title',description='$description',url='$url',seo_schema='$schema',draftTime='$current_time',Status='$statusdropdown', Visibility='$visible',publihedOn='$date',selectCategory='$selectCategory',categoryName='$category_name',categoryType='$category_type',image='$update_image' WHERE id={$edit_id}";
  $update_query=mysqli_query($connection,$query);
  
    if (!$update_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
        }


if ($statusdropdown == 'Publish') {

 $query="UPDATE pages SET Title='$addTitle',Content='$postContent',seo_title='$seo_title',description='$description',url='$url',seo_schema='$schema',publishTime='$current_time',Status='$statusdropdown', Visibility='$visible',publihedOn='$date',selectCategory='$selectCategory',categoryName='$category_name',categoryType='$category_type',image='$update_image' WHERE id={$edit_id}";
  $update_query=mysqli_query($connection,$query);
  
    if (!$update_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
        }

$fid_insert_query="UPDATE category SET selectCategory='$selectCategory',categoryName='$category_name',parentcategory='$category_type' WHERE id={$fid}";
$fid_insert_query1=mysqli_query($connection,$fid_insert_query);
  
    if (!$fid_insert_query1) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }else{
  //header("Location:allpost.php");
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
     <h3 class="text-center">Edit Pages</h3>
  <hr>
    <form class="" action='' method="post" enctype="multipart/form-data">
<input type="text" class="form-control" name="addTitle"  placeholder="Add Title" value="<?php echo $Title;   ?>">
      <br>
      <!-- <span class="add_media" id="media" readonly="true" >Add Media</span> -->
      <!--  <div id="editor">
    
    <div  contentEditable="true" data-text="Enter">
      <textarea id='edit' name="postContent"><?php //echo $Content; ?></textarea>
       </div>
  </div> -->
<div id="editor">
<div style="margin-top: 30px;">
  <textarea id='edit' name="postContent"><?php echo $Content; ?></textarea>
  </div>
  </div>

</div>
</div>
</div><div class="row dash_row">
  <div class="col-md-12">
    <div class="outer-w3-agile">
      <h6>Featured image</h6>
       <span>Add your Featured image:&nbsp;</span> <input type="file" name="post_image"><!-- <span><?php //echo $image;   ?></span> -->
       <table class="table table-bordered">   
                <?php  
               echo'
               <img src="gallery/'.$image.'" height="200" width="325" class="img-thumnail">';  
                ?>  
                </table> 

       <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
     <br>
     (or)
     <br>
      <a href="#"  data-title="fimage" data-toggle="modal" data-target="#fimage"><i class="fa fa-plus"></i>&nbsp;Choose form media library</a>
     
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
<div class="popup" onclick="myFunction()"><i class="fa fa-question-circle pad"></i>Title
  <span class="popuptext" id="myPopup"><h6>Title:</h6>
A custom title that shows up in the title tag for this page</span>
</div><input type="text" class="pad form-control" name="seo_title" value="<?php echo $seo_title;   ?>"><br>
<span class="label_border pad">10</span><span>Characeter. Most search engines use a maximum of 60 characters for the Title.</span><br><br>
<div class="popup" onclick="myFunction1()"><i class="fa fa-question-circle pad"></i>Description
  <span class="popuptext" id="myPopup1"><h6>Description:</h6>
The META description for this page. This will override any autogenerated descriptions.</span>
</div>
<textarea class="form-control pad" name="description"><?php echo $description;   ?></textarea><br>
<span class="label_border pad">100</span><span>Characeter. Most search engines use a maximum of 160 characters for the description.</span><br>
<br>
<div class="popup" onclick="myFunction2()"><i class="fa fa-question-circle pad"></i>Custom Canonical URL:
  <span class="popuptext" id="myPopup2"><h6>Custom Canonical URL:</h6>
Override the canonical URLs for this post.</span>
</div>
<input type="text" class="pad form-control" name="url" value="<?php echo $url;   ?>">
<br>
<i class="fa fa-question-circle pad"></i>Schema
<input type="text" class="pad form-control" name="schema" value="<?php echo  $seo_schema;   ?>">




      </div>
       </div>
          </div>
        </div>


         </div>
  </div>
  </div>


          </div>

         <div class="col-md-4 ">
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
       <!-- <div class="row">
      <div class="col-md-6"> <button class="btn btn-primary">Preview</button></div><div class="col-md-6"
        ><button class="btn btn-primary" id="btn1" name="saveDraft">Save Draft</button></div></div> -->
       <br>
       <i class="fa fa-key"></i>&nbsp;<span class="mar_right_20">Status:</span><label id="status" class="mar_right_20"></label><a href="#" onclick="status('answer1');return false;">Edit</a>
       <br>
       <div id="edit_pub">
       <form class="mar_top_20">
       <select class="form-control" name="statusdropdown"  onchange="jsFunction(this.value);">
          <option value="Draft" <?php if($Status=="Draft") echo 'selected="selected"'; ?>>Draft</option>
          <option value="Publish" <?php if($Status=="Publish") echo 'selected="selected"'; ?>>Publish</option>
        </select>
       <!--  <button class="btn btn-primary mar_top_20">OK</button>
       <button class="btn btn-primary mar_top_20">Cancel</button> -->
      </div>
       <!-- </form> -->
       <i class="fa fa-eye"></i>&nbsp;<span class="mar_right_20">Visibility:</span><label id="result" class="mar_right_20"></label><a href="#" onclick="vdis()">Edit</a>
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
          <i class="fa fa-calendar">&nbsp;<span class="mar_right_20">Published On:</span></i>
          <label id="result" class="mar_right_20"></label> <a href="#" onclick="showStuff('answer3'); return false;">Edit </a>
     <span id="answer3" style="display: none;">
         <input type="date" name="date" value="<?php echo $publihedOn; ?>"></span>  
       </div>
</div>  
     </div>
     <br>
     <input type="submit" class="btn btn-primary col-md-3" name="update" value="Update">
    <!--  <button  class="btn btn-primary col-md-3">Update</button>  -->  
            </div>
          </div>
              </div>
            </div>


<!-- ----------------------------------

 -->
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
                           $select_query="SELECT DISTINCT categoryName FROM category";
                           $select_all_categories_query=mysqli_query($connection, $select_query);
                if (!$select_all_categories_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
                            while($row=mysqli_fetch_array($select_all_categories_query)){
                             //echo 1;
                              $name=$row['categoryName'];                              
                              //var_dump($name);
$str_arr = explode (",",$selectCategory); 
//print_r($str_arr);

//foreach($str_arr as $value){
  //if ($value == $name) {
    
 
                                              ?>
      <input type="checkbox" name="select_category[]" value="<?php echo $name; ?>" <?php echo (in_array($name,$str_arr)) ? "checked" : "" ; ?>/  class="mar_top_20"> <?php echo $name;    ?><br>
                                     
                        
                                <?php

                                    
                                     //}

                                    }
                                        ?>
                                       <!--  -->
                             
     
  </div>
 
</div>

<br>
<a href="#" onclick="category()" class="mar_top_20"><i class="fa fa-plus"></i>Add new Category</a>

      </div>
       </div>
          </div>
        </div>

<div id="ncategory" class=" mar_top_20">
  <input type="text" class="form-control mar_top_20"  name="category_name" value="<?php echo $categoryName;   ?>">
  <select class="form-control mar_top_20" name="category_type">
    <option>Parent Category</option>
    <?php
    
                           
                          $select_query="SELECT DISTINCT categoryName FROM category";
                           $select_all_categories_query=mysqli_query($connection, $select_query);
                if (!$select_all_categories_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
                            while($row=mysqli_fetch_array($select_all_categories_query)){
                              $name=$row['categoryName'];
                       
                    ?>
  <option <?php if($name==$categoryType) echo 'selected="selected"'; ?>> <?php echo $name;    ?></option>
                                       
                                     <?php
                                      }
                                        ?>
    
  
   
  
  </select>
  <!-- <button class="btn btn-primary button-top" name="add_new_category">Add new</button> -->
</form>
</div>


  </div>
</div>
<!-- ----------------------------------modal---------------------------------------- -->
<div class="modal fade bd-example-modal-lg" id="fimage" tabindex="-1" role="dialog" aria-labelledby="fimageTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="fimageTitle">Media library</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 <div class="row">
  <div class="col-md-4 col-offset-md-8">
  </div>
</div>
        </div>
    </form>
<div class="media_library" id="media_lib">

<div class="dz-message">
  <div class="row">
  <?php

$query="SELECT * FROM posts";
$select_images=mysqli_query($connection,$query);
if (!$select_images) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }  
while($row=mysqli_fetch_array($select_images)) {
  $id=$row['id'];
  $image=$row['image'];

  ?>
  <?php
   echo '<div class="col-md-1 imagebox">
    <img src="gallery/'.$image.'" width="100%">
    </div>';
 
  ?>

<a href="sample_content.php?edit=<?php echo $id;  ?>">Edit</a>
<?php
}
?>
</div>

</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href='list.php' target="_blank"><button type="button" class="btn btn-primary">Show image</button></a>
      </div>
    </div>
  </div>
</div>

 <script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
  function myFunction1() {
  var popup = document.getElementById("myPopup1");
  popup.classList.toggle("show");
}
function myFunction2() {
  var popup = document.getElementById("myPopup2");
  popup.classList.toggle("show");
  }
</script>
 <script> 
var maxAmount =160;
function textCounter(textField, showCountField) {
    if (textField.value.length > maxAmount) {
        textField.value = textField.value.substring(0,maxAmount);
  } else { 
        showCountField.value = maxAmount - textField.value.length;
  }
}
</script>
<script> 
var maxAmount1 =60;
function textCounter1(textField, showCountField) {
    if (textField.value.length > maxAmount1 ) {
        textField.value = textField.value.substring(0,maxAmount1);
  } else { 
        showCountField.value = maxAmount1- textField.value.length;
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

<script>
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
  function myFunction1() {
  var popup = document.getElementById("myPopup1");
  popup.classList.toggle("show");
}
function myFunction2() {
  var popup = document.getElementById("myPopup2");
  popup.classList.toggle("show");
  }
</script>

<script> 
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
  <!-- <script>
    (function () {
      new FroalaEditor("#edit", {
         initOnClick: true
    
      })
    })()
  </script> -->
   <script>
    (function () {
      new FroalaEditor("#edit", {
        fullPage: true
      })
    })()
  </script>
   
</body>

</html>
