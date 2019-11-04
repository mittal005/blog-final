<head>
<?php include("includes/header.php"); ?>
  </head>

<body id="page-top">

 <?php include("includes/topnav.php"); ?>

  <div id="wrapper">

    <!-- Sidebar -->
    
<?php include("includes/sidenav.php"); ?>



    	<div class="container-fluid">
    		<div class="col-md-9 outer-w3-agile">
       <td>Hobby</td>
       <tr>
    <?php
        $id= 1; // your input id value
        $result = mysql_query("SELECT  FROM simple WHERE id = $id"); 
        while($row = mysql_fetch_array($result))
       {
        $hobby=explode(",",$row['hobby']);

    ?>    
    <td><input type="checkbox"  name="hobby[]"  value="Cricket"  size="17"   <?php if(in_array("Cricket",$hobby)) echo 'checked="checked"'; ?> >Cricket
         <input type="checkbox" name="hobby[]"  value="Music" size="17" <?php if(in_array("Music",$hobby)) echo 'checked="checked"'; ?> >Music
         <input type="checkbox" name="hobby[]"  value="Reading"   size="17" <?php if(in_array("Reading",$hobby))  echo 'checked="checked"'; ?> >Reading
         <input type="checkbox" name="hobby[]"  value="Study" size="17" <?php if(in_array("Study",$hobby))  echo 'checked="checked"'; ?> >Study</td>
       <?php
       }
       ?>
</tr>                 

            		</div>
    	</div>

       </div>
 

</body>

</html>
