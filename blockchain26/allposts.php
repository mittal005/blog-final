 <?php
             
              $connection=mysqli_connect('localhost','root','','admin');
              $query="SELECT * FROM posts";
$select_allposts=mysqli_query($connection,$query);
while($row=mysqli_fetch_array($select_allposts)) {
  $id=$row['id'];
  $title=$row['Title'];
  $username=$row['username'];
  $categoryName=$row['categoryName'];
  $draftTime=$row['draftTime'];
  $publishTime=$row['publishTime'];
              ?>       

    
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td class="author_td"><label><?php echo $title;  ?></label></td>
    <td><label><?php echo $username;  ?></label></td>
    <td class="page_control"><label><?php echo $categoryName;  ?></label></td>

    <td><label></label></td>
    <td><label></label></td>
   
    <td><?php if ($draftTime != "") {
                 echo    $draftTime; 
    }else{
         echo    $publishTime;
    }                        ?></td>
    <td class="page_control"><a href="allpost.php#quickedit?edit=<?php echo $id ?>"><button class="table_btn btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#quickedit" ><span class="fa fa-pencil"></span></button></a></td>
    <td class="page_control"><a href="includes/delete_post.php?delete=<?php echo $id ?>"><button class="table_btn btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash"></span></button></a></td>
    </tr>
    

<div class="modal fade" id="quickedit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         
        <h5 class="modal-title" id="exampleModalLongTitle">Edit your page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
      <div class="modal-body">
<!-- <input type="hidden" name="user_id" value="<?php //echo $user['user_id']; ?>"> -->

   <label>Title</label>
   <input type="text" class="form-control" value="<?php  echo $title;  ?>">
   <label>slug</label>
   <input type="text" class="form-control" value="<?php  echo $title;   ?>">
    <label>Date</label>
           <input data-date-format="dd/mm/yyyy" id="datepicker" class="form-control">
       <label>Status</label>
       <select class="form-control">
      <option>Draft</option>
      <option>Publish</option>
    </select>
      </div>
    </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

 <?php
}

    ?>
