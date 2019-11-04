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
      <input type="text" class="form-control" placeholder="Add Title" >
      <br>
      <span class="add_media" id="media" readonly="true">Add Media</span>
       <div id="editor">
    
    <div id='edit' style="margin-top: 30px;" contentEditable="true" data-text="Enter">
       </div>
  </div>


 </form>
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
        ><button class="btn btn-primary" id="btn1">Save Draft</button></div></div>
       <br>
       <i class="fa fa-key"></i><span class="mar_right_20">Status:</span><label id="status" class="mar_right_20"></label><a href="#" onclick="dis()">Edit</a>
       <br>
       <div id="edit_pub">
       <form class="mar_top_20">
       <select class="form-control" name="statusdropdown"  onchange="jsFunction(this.value);">
          <option value="Draft">Draft</option>
          <option value="Publish">Publish</option>
        </select>
       <button class="btn btn-primary mar_top_20">Cancel</button>
      </div>
       </form>
       <i class="fa fa-eye"></i><span class="mar_right_20">Visibility:</span><label id="result" class="mar_right_20"></label><a href="#" onclick="vdis()">Edit</a>
       <div id="visi">
       <form>
        <input type="radio" name="visible" value="Public" class="mar_top_20">Public<br>
    <input type="radio" name="visible" value="Private">Private
    <br> 
    <button type="button" class="btn btn-primary mar_top_20" onclick="displayRadioValue()"> 
        Submit 
    </button>
     <button type="button" class="btn btn-primary mar_top_20 float-right" > 
        Cancel
    </button>
       </form>
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
    <input type="checkbox" class="mar_top_20">Uncategorized<br>
    <input type="checkbox" class="mar_top_20">Uncategorized
 
  </div>
  <div id = "content2">
   <input type="checkbox" class="mar_top_20">Uncategorized<br>
    <input type="checkbox" class="mar_top_20">Uncategorized
 
  </div>
  
</div>

<br>
<a href="#" onclick="category()" class="mar_top_20"><i class="fa fa-plus"></i>Add new Category</a>

      </div>
       </div>
          </div>
        </div>

<div id="ncategory" class=" mar_top_20">
  <input type="text" class="form-control mar_top_20">
  <select class="form-control mar_top_20">
    <option>Parent Category</option>
    <option></option>
  
  </select>
  <button class="btn btn-primary button-top">Add new</button>
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
