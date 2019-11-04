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

	<div class="offset-md-2 col-md-8 col-offset-md-2 outer-w3-agile ">
     <h4 class="text-center">Add Pages</h4>
  <hr>
    <form class="" action='' method="post" >
      <input type="text" class="title_input" placeholder="ADD TITLE" onClick="dis()">
      <label><h5>Sub Content</h5></label>
 <textarea id ="y" class="form-control content" name="example" ></textarea>
<input type="submit"  value="Submit" class="btn btn-info mar_top_20" name="save_text" onclick="$('#php_post_text').val($('.content').val());">

 </form>
    			</div>
	
</div>

        
    		
    	</div>

      

  <!-- Custom scripts for all pages-->
  
<script>
  function dis()
  {
  if(document.getElementById('y').style.display=='block')
  {
document.getElementById('y').style.display=='none';
  }
  else
  {

    document.getElementById('y').style.display=='block';
  }
}
</script>
<script>
    $(document).ready(function(){
     $('.content').richText();
  });
    CKEDITOR.inline( 'y');

</script>   
</body>

</html>
