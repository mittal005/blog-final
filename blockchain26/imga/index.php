<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<header>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PHP Upload File With Progressbar</title>
		
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<style type="text/css">
			.images{
				width:60px;
				height:60px;
				cursor:pointer;
				margin:10px;
			}
			.images:hover{
				-webkit-transform: scale(1.2);
				-moz-transform: scale(1.2);
				-o-transform: scale(1.2);
				transform: scale(1.2);
				transition: all 0.3s;
				-webkit-transition: all 0.3s;
			}
		</style>
	</header>
	<body>
		<div class="container">			
			<div class="page-header">
				<h1>Upload Multiple Files <small>Upload multiple file with progress bar demo</small> </h1>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<form method="post" enctype="multipart/form-data" name="formUploadFile" id="uploadForm" action="upload.php">
						<div class="form-group">
							<label for="exampleInputFile">Select files to upload:</label>
							<input type="file" id="exampleInputFile" name="files[]" multiple="multiple">
							<p class="help-block"><span class="label label-info">Note:</span> Please, Select the only images (.jpg, .jpeg, .png, .gif) to upload with the size of 100KB only.</p>
						</div>			
						<button type="submit" class="btn btn-primary" name="btnSubmit" >Start Upload</button>
						<!-- <a href="" class="btn btn-info" name="uploaded_files">Show Uploaded Files</a> -->
					</form>
					<form action="" method="post">
					<!-- <a href="" class="btn btn-info" name="uploaded_files">Show Uploaded Files</a> -->
	<input type="submit" name="uploaded_files" value="Show Uploaded Files" class="btn btn-info">				
				</form>
					<br/>
					<label for="Progressbar">Progress:</label>
					<div class="progress" id="Progressbar">
						<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%" id="divProgressBar">
							<span class="sr-only">45% Complete</span>
						</div>						
					</div>
					<div id="status">
					</div>
					<div>
<?php 
if(isset($_POST["uploaded_files"])){		
						$conn = mysqli_connect("localhost","root","","admin");

 

						
						$query = "SELECT *FROM image";
						
						$result = mysqli_query($conn, $query);
						
						if(mysqli_num_rows($result) > 0)
						{
							while($row = mysqli_fetch_assoc($result))
							{
								$url = $row["FilePath"]."/".$row["FileName"];
					?>
		<a href="<?php echo $url; ?>"><image src="<?php echo $url; ?>" class="images" /></a>
			<label><?php echo $row["FileName"];    ?></label> <a href="">edit</a>
   

					<?php
							}
						}
						else
						{
					?>
						<p>There are no images uploaded to display.</p>
					<?php
						}
					 }
					?>	

            <!-- <img src="" ><label>filename</label><a>edit</a> -->    

		

         </div>
				</div>
			</div>
<!-- ---------------------------------------------------------------------------------------------- -->


		</div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jQuery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		
		<script src="js/jQuery.Form.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){			
				
				var divProgressBar=$("#divProgressBar");
				var status=$("#status");
				
				$("#uploadForm").ajaxForm({
					
					dataType:"json",
					
					beforeSend:function(){
						divProgressBar.css({});
						divProgressBar.width(0);
					},
					
					uploadProgress:function(event, position, total, percentComplete){
						var pVel=percentComplete+"%";
						divProgressBar.width(pVel);
					},
					
					complete:function(data){
						status.html(data.responseText);
					}
				});
			});
		</script>
	</body>
</html>