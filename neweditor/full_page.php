<?php include("includes/header.php"); ?>
<?php
if(isset($_POST['saveDraft']))
{
  
      if(!empty($_POST['postContent'])) {
    $postContent=$_POST['postContent'];
  }else{
    $postContent="no content";
  }
    
// ----------------------------------------

 $query="INSERT INTO posts(Content)VALUES('$postContent')";
  $create_post_query=mysqli_query($connection,$query);
  if (!$create_post_query) {
        die('query FAILED . mysqli_error($connection)');
                             }
$query="SELECT Content FROM posts WHERE id=275";
$create_show_query=mysqli_query($connection,$query);
  if (!$create_show_query) {
        die('query FAILED . mysqli_error($connection)');
                             }
while ($row=mysqli_fetch_array($create_show_query)) {
          $content=$row['Content'];
}


   }
 echo $content;

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/froala_editor.css">
  <link rel="stylesheet" href="css/froala_style.css">
  <link rel="stylesheet" href="css/plugins/code_view.css">
  <link rel="stylesheet" href="css/plugins/colors.css">
  <link rel="stylesheet" href="css/plugins/emoticons.css">
  <link rel="stylesheet" href="css/plugins/image_manager.css">
  <link rel="stylesheet" href="css/plugins/image.css">
  <link rel="stylesheet" href="css/plugins/line_breaker.css">
  <link rel="stylesheet" href="css/plugins/table.css">
  <link rel="stylesheet" href="css/plugins/char_counter.css">
  <link rel="stylesheet" href="css/plugins/video.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

  <style>
    body {
      text-align: center;
    }

    div#editor {
      width: 81%;
      margin: auto;
      text-align: left;
    }
  </style>
</head>

<body>
  <form action="" method="post">
  <!-- <div id="editor">
    <div  contentEditable="true" data-text="Enter">
      <textarea id='edit' name="postContent"></textarea>
       </div>
  </div> -->
 <div id="editor">
    <div style="margin-top: 30px;">
      <textarea id='edit' name="postContent"></textarea>
    </div>
  </div>


</div>
</div>
</div>
<!-- <button type="button" class="btn btn-primary name="">update</button> -->
<input type="submit" class="btn btn-primary" name="saveDraft" value="update">
</form>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="js/froala_editor.min.js"></script>
  <script type="text/javascript" src="js/plugins/align.min.js"></script>
  <script type="text/javascript" src="js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="js/plugins/colors.min.js"></script>
  <script type="text/javascript" src="js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="js/plugins/emoticons.min.js"></script>
  <script type="text/javascript" src="js/plugins/font_size.min.js"></script>
  <script type="text/javascript" src="js/plugins/font_family.min.js"></script>
  <script type="text/javascript" src="js/plugins/image.min.js"></script>
  <script type="text/javascript" src="js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="js/plugins/line_breaker.min.js"></script>
  <script type="text/javascript" src="js/plugins/link.min.js"></script>
  <script type="text/javascript" src="js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="js/plugins/table.min.js"></script>
  <script type="text/javascript" src="js/plugins/video.min.js"></script>
  <script type="text/javascript" src="js/plugins/url.min.js"></script>
  <script type="text/javascript" src="js/plugins/entities.min.js"></script>
  <script type="text/javascript" src="js/plugins/char_counter.min.js"></script>
  <script type="text/javascript" src="js/plugins/inline_style.min.js"></script>
  <script type="text/javascript" src="js/plugins/save.min.js"></script>

  <script>
    (function () {
      new FroalaEditor("#edit", {
        fullPage: true
      })
    })()
  </script>
</body>

</html>