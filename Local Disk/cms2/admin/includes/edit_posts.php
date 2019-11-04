 <?php
 if (isset($_GET['p_id'])) {
     $p_id=$_GET['p_id'];
                         
$query="SELECT * FROM posts";
$edit_posts=mysqli_query($connection,$query);
while($row=mysqli_fetch_array($edit_posts)) {
  $post_id=$row['post_id'];
   $post_category_id=$row['post_category_id'];
  $post_title=$row['post_title'];
  $post_author=$row['post_author'];
  $post_date=$row['post_date'];
  $post_image=$row['post_image'];
  $post_content=$row['post_content'];
  $post_tags=$row['post_tags'];
  $post_comment_count=$row['post_comment_count'];
  $post_status=$row['post_status'];
}
if(isset($_POST['update_post'])) {
	$post_title=$_POST['post_title'];
	$post_author=$_POST['post_author'];
	$post_date=$_POST['post_date'];
	$post_content=$_POST['post_content'];
	$post_tags=$_POST['post_tags'];
	$post_comment_count=$_POST['post_comment_count'];
	$post_status=$_POST['post_status'];
	$query="UPDATE posts SET post_title='$post_title',post_author='$post_author',post_date='$post_date',post_content='$post_content',post_tags='$post_tags',post_comment_count='$post_comment_count',post_status='$post_status' WHERE post_id={$post_id}";
	$update_query=mysqli_query($connection,$query);
	 if (!$update_query) {
        die('query FAILED . mysqli_error($connection)');
                             }
}
}
?>








<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<select name="" id="">
			<?php
			$query="SELECT * FROM categories";
			$select_query=mysqli_query($connection,$query);
			 if (!$select_query) {
        die('query FAILED . mysqli_error($connection)');
                             }
  while($row=mysqli_fetch_array($select_query)) {
  $cat_id=$row['cat_id'];
  $cat_title=$row['cat_title'];
  echo "<option value=''>{$cat_title}</option>";
}
  ?>

		</select>
	</div>
	<div class="form-group">
		<label>post_title</label>
		<input value="<?php echo $post_title; ?>" type="text" class="form-control" name="post_title">
	</div>

	<div class="form-group">
		<label>post_author</label>
		<input value="<?php echo $post_author; ?>" type="text" class="form-control" name="post_author">
	</div>
	<div class="form-group">
		<label>post_date</label>
		<input value="<?php echo $post_date; ?>" type="text" class="form-control" name="post_date">
	</div>
	<div class="form-group">
		<label>post_image</label>
		<input  type="file"  name="post_image">
	</div>
	<div class="form-group">
		<label>post_content</label>
		<input value="<?php echo $post_content; ?>" type="text" class="form-control" name="post_content">
	</div>
	<div class="form-group">
		<label>post_tags</label>
		<input value="<?php echo $post_tags; ?>" type="text" class="form-control" name="post_tags">
	</div>
	<div class="form-group">
		<label>post_comment_count</label>
		<input type="text" value="<?php echo $post_comment_count; ?>" class="form-control" name="post_comment_count">
	</div>
	<div class="form-group">
		<label>post_status</label>
		<input  type="text" value="<?php echo $post_status; ?>" class="form-control" name="post_status">
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="update_post" value="update_post">
	</div>



</form>
