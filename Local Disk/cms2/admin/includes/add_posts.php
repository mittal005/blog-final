<?php
if(isset($_POST['create_post']))
{
  $post_category_id=$_POST['post_category_id'];
  $post_title=$_POST['post_title'];
  $post_author=$_POST['post_author'];
  $post_date=date('d-m-y');
  $post_image=$_FILES['post_image']['name'];
  $post_image_temp=$_FILES['post_image']['tmp_name'];
  $post_content=$_POST['post_content'];
  $post_tags=$_POST['post_tags'];
  $post_comment_count=$_POST['post_comment_count'];
  $post_status=$_POST['post_status'];
  move_uploaded_file($post_image_temp,"../images/$post_image");

  $query="INSERT INTO posts(post_category_id,post_title,post_author,post_date,post_image,post_content,post_tags,post_comment_count,post_status)VALUES('$post_category_id','$post_title','$post_author',now(),'$post_image','$post_content','$post_tags','$post_comment_count','$post_status')";
  $create_post_query=mysqli_query($connection,$query);

}
?>



<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label>post_category_id</label>
		<input  type="text" class="form-control" name="post_category_id">
	</div>
	<div class="form-group">
		<label>post_title</label>
		<input  type="text" class="form-control" name="post_title">
	</div>

	<div class="form-group">
		<label>post_author</label>
		<input  type="text" class="form-control" name="post_author">
	</div>
	<div class="form-group">
		<label>post_date</label>
		<input type="text" class="form-control" name="post_date">
	</div>
	<div class="form-group">
		<label>post_image</label>
		<input  type="file"  name="post_image">
	</div>
	<div class="form-group">
		<label>post_content</label>
		<input type="text" class="form-control" name="post_content">
	</div>
	<div class="form-group">
		<label>post_tags</label>
		<input type="text" class="form-control" name="post_tags">
	</div>
	<div class="form-group">
		<label>post_comment_count</label>
		<input type="text" class="form-control" name="post_comment_count">
	</div>
	<div class="form-group">
		<label>post_status</label>
		<input  type="text" class="form-control" name="post_status">
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="create_post" value="publish_post">
	</div>



</form>
