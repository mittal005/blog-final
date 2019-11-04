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
<div class="row dash_row">

  <div class="col-md-8 ">
    <div class="outer-w3-agile">
     <h4 class="text-center">Add Pages</h4>
  <hr>
    <form class="" action='' method="post" >
      <input type="text" class="form-control" placeholder="Add Title" >
      <br>
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
       <i class="fa fa-key"></i><span class="mar_right_20">Status:</span><label id="status" class="mar_right_20"></label><a href="#" onclick="status('answer1');return false;"">Edit</a>
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
       </form>
       <i class="fa fa-eye"></i><span class="mar_right_20">Visibility:</span><label id="result" class="mar_right_20"></label> <a href="#" onclick="showStuff('answer2'); return false;">Edit</a>
       <form>
     <span id="answer2" style="display: none;">
        <input type="radio" name="visible" value="Public" class="mar_top_20">Public<br>
        <input type="radio" name="visible" value="Private">Private</span>
       </form>
          <i class="fa fa-calendar"></i><span class="mar_right_20">Published On:</span>
          <label id="result" class="mar_right_20"></label> <a href="#" onclick="showStuff('answer3'); return false;">Edit </a>
     <span id="answer3" style="display: none;">
         <input type="date"></span>  
</div>  
     </div>
     <br>
     <button class="btn btn-primary col-md-3">Update</button>   
            </div>
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
         Page Attributes 
        </a>
      </h5>
    </div>
     <div id="tags" class="collapse show" aria-labelledby="tagone" data-parent="#tag">
       <div class="card-body">
        <div id="activity" class="collapse show" aria-labelledby="activityone" data-parent="#accordion2">    
      <div>
<p>Parent:</p>
  <select name="statusdropdown"class="form-control">
  <option value="no parent">(no parent)</option>
  <option value="sample page">Sample Page</option>
</select>
   </div>
     

<form>
  <p>Order:</p>
  <input type="text" class="form-control">
  <span>Need help? Use the Help tab above the screen title.</span><br>
</form>
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
