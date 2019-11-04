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

	<div class="offset-md-0 col-md-8 col-offset-md-2 outer-w3-agile ">
     <h4 class="text-center">Add Post</h4>
  <hr>
    <form class="" action='' method="post" >
      <input type="text" class="title_input" placeholder="ADD TITLE" onClick="dis()">
      <label><h5>Sub Content</h5></label>
      <textarea onclick="dis()"></textarea>
 <div id="editor">
    
    <div id='edit' style="margin-top: 10px;">
       </div>
  </div>


 </form>
    			</div>


  <div class="row ">
    <div class="col-md-12 dash_row">
      <div class="row">
        <div class="col-md-20 outer-w3-agile">
          <div id="accordion">
          <div class="card">
<div class="card-header" id="glanceone">
      <h5 class="mb-0">
        <a role="button" data-toggle="collapse" data-target="#glance" aria-expanded="true" aria-controls="glace">
         Publish
        </a>
      </h5>
    </div>
    <br>
      <div class="offset-md-0 col-md-6  text-left">                       
                      <button type="button" class="btn btn-primary">Save Draft</button>  
                    </div>
                      <div class="offset-md-6 col-md-6 text-right">                    
                      <button type="button" class="btn btn-primary">Preview</button>
                    </div>
     <div id="glance" class="collapse show" aria-labelledby="glanceone" data-parent="#accordion">
       <div class="card-body">
        <div class="row mar_bottom_20">
          <div class="col-md-6">
          <i class="fa fa-key">Status:</i><a href="mit">Edit</a>
          <div class="offset-md-0 col-md-6 ">
<select name="mit">
  <option value="Published">Published</option>
  <option value="Draft">Draft</option>
  <option value="Pending Review">Pending Review</option>
</select>
</div>
</div>
  </div>
        </div>
        <br>
            <div class="row">
<div class="col-md-6">
          <i class="fa fa-eye">Visibility:</i>
          <span></span><a href="#">Edit</a>  
      <form>
  <input type="radio" name="Visibility" value="public" checked>public<br>
  <input type="radio" name="Visibility" value="private">private<br>  
</form> 

        </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-">
          <i class="fa fa-calendar">Published On:</i>  
  <input type="date">
        </div>
        </div>
</div>
</div>
</div>

</form>
		   
</div>
    </div>
  </div>
    	</div>

      <div class="row dash_row">
        <div class="col-md-30 outer-w3-agile">
          <div id="accordion2">
            <div class="card">

<div class="card-header" id="activityone">
      <h6 class="mb-6">
        <a role="button" data-toggle="collapse" data-target="#activity" aria-expanded="true" aria-controls="activity">Page Attribute</a>
      </h6>
    </div>
 <div id="activity" class="collapse show" aria-labelledby="activityone" data-parent="#accordion2">    
      <div class="card-body"><p>Parent:</p>
  <select name="page Attribute"class="col-md-9">
  <option value="no parent">(no parent)</option>
  <option value="sample page">Sample Page</option>
</select>
   </div>
     <div>
      <p>Order:</p>
      <input type="text"id="order"class="col-md-9">
     </div>
       </div>
            </div>
            <script>
    (function () {
      new FroalaEditor("#edit", {
        zIndex: 10
      })
    })()
  </script>
  <script>
    function dis()
    {
  document.getElementById('editor').style.display='block';
}
    </script>
</body>
</html>
