 <?php
 if (isset($_POST['update_post'])) {
   $id=$_POST['bookId'];  
   $title=$_POST['ftitle'];
   $fname=$_POST['fname'];
   $fdate=$_POST['fdate'];
   //$password=$_POST['fdate'];
   $select_query="SELECT Status FROM posts WHERE id=$id";
$select_allposts=mysqli_query($connection,$select_query);
while($row=mysqli_fetch_array($select_allposts)) {
  $Status=$row['Status'];
  }
  if ($Status=="Publish") {
   $query="UPDATE posts SET Title='$title',username='$fname',publishTime='$fdate' WHERE id={$id}";
  $update_query=mysqli_query($connection,$query);
  if (!$update_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }  
  }
  if ($Status=="Draft") {
   $query="UPDATE posts SET Title='$title',username='$fname', draftTime='$fdate' WHERE id={$id}";
  $update_query=mysqli_query($connection,$query);
  if (!$update_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }  
  }
   
}
// -----------------------------
if (isset($_POST['delete_post'])) {
   $id=$_POST['deleteID'];  
  
   $query="DELETE FROM posts WHERE id={$id}";
  $delete_query=mysqli_query($connection,$query);
  if (!$delete_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }  
}
// -----------------------------------------------------
 $search= $_POST['search'];  
         
              //$connection=mysqli_connect('localhost','root','','admin');
    $query="SELECT * FROM posts WHERE Title LIKE '%$search%'";
$select_newuser=mysqli_query($connection,$query);
while($row=mysqli_fetch_array($select_newuser)) {
  $fid=$row['fid'];
  $id=$row['id'];
  $title=$row['Title'];
  $username=$row['username'];
  $onlyDate=$row['onlyDate'];

   $select_by_category_query1="SELECT selectCategory FROM category  WHERE id='{$fid}'";
   $show_by_category_query1=mysqli_query($connection,$select_by_category_query1);
    while($row=mysqli_fetch_array($show_by_category_query1)) {
     $selectCategory=$row['selectCategory'];  
   
            ?>


<tr>
    <td><!-- <input type="checkbox" class="checkthis" /> --></td>
    <td class="author_td"><label><?php echo $title;  ?></label></td>
    <td><label><?php echo $username;  ?></label></td>
    <td class="page_control"><label><?php echo $selectCategory;  ?></label></td>

    <!-- <td><label></label></td>
    <td><label></label></td> -->
   
    <td><label><?php echo $onlyDate; ?></label></td>



    <td><label><a class="nav-link " href="#" id="actionmenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-ellipsis-v font-24"></i>
        </a>

<!-- <a href="#edit<?php //echo $row['userid']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>  -->


 <div class="dropdown-menu dropdown-menu-right" id="actionmenulist" aria-labelledby="actionmenu">
          <a class="dropdown-item" href="editpages.php?edit=<?php echo $id;   ?>">Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil pad_left_40"></i></a>
  <a class="dropdown-item quickEditPost" data-title="Edit" data-id="<?php echo $id;  ?>" >Quick Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-magic pad"></i></a>
  <!-- <button class="quickEditPost" >edit</button> -->
    <a class="dropdown-item deletePost" data-title="Delete" data-id="<?php echo $id;  ?>">Trash&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-trash padd"></i
            ></a>
             </div>
</label>
</td>
    </tr>
    <?php
  }

}

    ?>
    </tbody>
        
</table>

<!-- ---------quickedit modal------------- -->
<div class="modal fade" id="quickeditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">  
      <h5 class="modal-title" id="exampleModalLongTitle">Edit your post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
      <div class="modal-body">
        <input type="hidden" name="bookId" id="bookId" value=""/>
   <label>Title</label>
   <input type="text" class="form-control" name="ftitle" id="title" required>
    <label>Category:</label>
    <div class="container5">
 <?php
                      $select_query="SELECT DISTINCT categoryName FROM category";
                           $select_all_categories_query=mysqli_query($connection, $select_query);
                if (!$select_all_categories_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
                            while($row=mysqli_fetch_array($select_all_categories_query)){
                              $name=$row['categoryName'];
$str_arr = explode (",",$selectCategory); 
      ?>
      <input type="checkbox" name="select_category[]" value="<?php echo $selectCategory; ?>" <?php echo (in_array($name,$str_arr)) ?"checked":""; ?>/  class="mar_top_20"> <?php echo $name;    ?><br>            
                                <?php     
                                    }
                                        ?>
  </div>
   <label>Slug</label>
   <input type="text" class="form-control" name="fname" id="content"> 
    <label>Date</label>
           <input type="Date" id="datepicker" name="fdate" class="form-control">
       <!-- <label>Status</label> -->
      <!--  <select class="form-control" id="status">
      <option>Draft</option>
      <option>Publish</option>
    </select> -->

    
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <input type="submit" name="update_post" class="btn btn-primary">
       <!--  <button type="button" class="btn btn-primary" name="update_post">Save changes</button> -->
      </div>
    </form>
    </div>
  </div>
</div>
 
<!-- ---------delete modal---- -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
      <div class="modal-body">
        
        <input type="hidden" id="deleteID" name="deleteID">
  Are you sure want delete?

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  data-dismiss="modal">Cancel</button>
       
      <input type="submit" class="btn btn-primary" name="delete_post" value="Delete">
        <!-- <a href=""><button type="button" class="btn btn-primary">Delete</button></a> -->
      </div>
      </form>
       
      </div>
    </div>
  </div>
</div>
<!-- -------------------- -->
<script type="text/javascript">
  $(document).ready(function(){

  $(".quickEditPost").click(function(){
  $("#quickeditmodal").modal('show');
  var myBookId = $(this).data('id');
  $(".modal-body #bookId").val( myBookId );
   $tr=$(this).closest('tr');
   var data = $tr.children("td").map(function(){
          return $(this).text();

   }).get();
    console.log(data);
    //$("#update_id").val(data[0]);
$("#title").val(data[1]);
    $("#content").val(data[1]);
    $("#category").val(data[3]);
    $("#datepicker").val(data[4]);
     });
});

// -----------------------------------------------
  $(document).ready(function(){

  $(".deletePost").click(function(){
  $("#delete").modal('show');
     var deleteId = $(this).data('id');
     $(".modal-body #deleteID").val(deleteId);
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
});
</script>
  
