<?php include("includes/header.php"); ?>
<?php
if(isset($_POST['saveDraft']))
{
  
    $username=$_SESSION['username'];

    $addTitle=$_POST['addTitle'];
    $postContent=$_POST['postContent'];
     $statusdropdown=$_POST['statusdropdown'];
      $visible=$_POST['visible1'];
    $x=$_POST['x'];
    date_default_timezone_set("Asia/Kolkata");
     $current_time = date("F j, Y, g:i a");
     $category_name=$_POST['category_name'];
     $category_type=$_POST['category_type'];


  $connection=mysqli_connect('localhost','root','','admin110');
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

if(isset($_POST['add_new_category']))
{
  
  $category_name=$_POST['category_name'];
     $category_type=$_POST['category_type'];
  $connection=mysqli_connect('localhost','root','','admin110');


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
    <form class="" action='' method="post" >
      <input type="text" class="form-control" name="addTitle"  placeholder="Add Title" >
      <br>
      <span class="add_media" id="media" readonly="true">Add Media</span>
       <div id="editor">
    
    <div  contentEditable="true" data-text="Enter">
      <textarea id='edit' name="postContent"></textarea>
       </div>
  </div>


</div>
</div>
</div>
<div class="row dash_row">
  <div class="col-md-12">
    <div class="outer-w3-agile">
      <h6>Featured image</h6>
      <a href="#"  data-title="fimage" data-toggle="modal" data-target="#fimage"><i class="fa fa-plus"></i>Add Featured image</a>
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

<i class="fa fa-question-circle pad"></i>Title <input type="text" class="pad form-control"><br>
<span class="label_border pad">10</span><span>Characeter. Most search engines use a maximum of 60 characters for the Title.</span><br><br>
<i class="fa fa-question-circle pad"></i>Description
<textarea class="form-control pad"></textarea><br>
<span class="label_border pad">100</span><span>Characeter. Most search engines use a maximum of 160 characters for the description.</span><br>
<br>
<i class="fa fa-question-circle pad"></i>Custom Canonical URL
<input type="text" class="pad form-control">

<i class="fa fa-question-circle pad"></i>Schema
<input type="text" class="pad form-control">




      </div>
       </div>
          </div>
        </div>


         </div>
  </div>
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
        ><button class="btn btn-primary" id="btn1" name="saveDraft">Save Draft</button></div></div>
       <br>
       <i class="fa fa-key"></i><span class="mar_right_20">Status:</span><label id="status" class="mar_right_20"></label><a href="#" onclick="dis()">Edit</a>
       <br>
       <div id="edit_pub">
       <div class="mar_top_20">
       <select class="form-control" name="statusdropdown"  onchange="jsFunction(this.value);">
          <option value="Draft">Draft</option>
          <option value="Publish">Publish</option>
        </select>
       <button class="btn btn-primary mar_top_20">Cancel</button>
      </div>
       </div>
       <i class="fa fa-eye"></i><span class="mar_right_20">Visibility:</span><label id="result" class="mar_right_20"></label><a href="#" onclick="vdis()">Edit</a>
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
<br><br>
       <button class="btn btn-primary mar_top_20">Update</button>         
   </div>
     </div>
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
                           $connection=mysqli_connect('localhost','root','','admin110');
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
                           $connection=mysqli_connect('localhost','root','','admin110');
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
 </div>	
</div>
</div>



<div class="modal fade bd-example-modal-lg" id="fimage" tabindex="-1" role="dialog" aria-labelledby="fimageTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="fimageTitle">Add Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<div class="row">
  <div class="col-md-4 col-offset-md-8">
    <a href="#" class="pad">Upload image</a> <a href="#" class="pad">Media library</a>
  </div>
</div>
<form id="imageDropzone" action="getImage.php" enctype="multipart/form-data" class="dropzone">
        <div class="dz-message">
        <div class="icon"><span class="fa fa-cloud fa-3x"></span></div>
        <h3>Drag and Drop Images here and click to upload image</h3>
        </div>

    </form>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Delete</button>
      </div>s
    </div>
  </div>
</div>



<!-- <script> 
        function displayRadioValue() { 
            var ele = document.getElementsByName('visible1'); 
              
            for(i = 0; i < ele.length; i++) { 
                if(ele[i].checked) 
                document.getElementById("result").innerHTML
                        = ele[i].value; 
                        document.getElementById('visi').style.display="none";
            } 
        } 
    </script>  -->
      

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
