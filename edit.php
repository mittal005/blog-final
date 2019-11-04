<?php
if(isset($_POST['submit'] )){
   $area1=$_POST['area1'];
   $connection=mysqli_connect('localhost','root','','mit');
   if($connection){
    echo "success";
   }
   $query="INSERT INTO texteditor(content)VALUES('$area1')";
   $insert_query=mysqli_query($connection,$query);
   if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

}


?>


<html>
<head>
</head>
<body class="yui-skin-sam">
<div id="sample">
  <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>
  <form action="" method="post">
  <h4>
    First Textarea
  </h4>

  <textarea name="area1" cols="40">
</textarea><br />
  <h4>
    Second Textarea
  </h4>
  <textarea name="area2" style="width: 100%;">
       Some Initial Content was in this textarea
</textarea><br />
  <h4>
    Third Textarea
  </h4>
  <textarea name="area3" style="width: 300px; height: 100px;">
       HTML content default in textarea
</textarea>
<input type="submit" name="submit" value="submit">
</form>
</div>
</body>
</html>