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
    <td> <a class="nav-link " href="#" id="actionmenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-ellipsis-v font-24"></i>
        </a>


        <div class="dropdown-menu dropdown-menu-right" id="actionmenulist" aria-labelledby="actionmenu">
          <a class="dropdown-item">Edit<i class="fa fa-pencil pad_left_40"></i
            ></a>
          <a href="<?php echo $id; ?>" class="dropdown-item" data-title="Edit" data-toggle="modal" data-target="#quickedit">Quick Edit<i class="fa fa-magic pad"></i
            ></a>
           <a href="<?php echo "#delete?delete=$id";  ?>" class="dropdown-item" data-title="Delete" data-toggle="modal" data-target="#delete">Trash<i class="fa fa-trash padd"></i
            ></a>
             </div>

</td>
    </tr>
    <!-- ---------------------- -->
    <div class="modal fade" id="quickedit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         
        <h5 class="modal-title" id="exampleModalLongTitle">Edit your page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<input type="text" name="user_id" value="">

   <label>Title</label>
   <input type="text" class="form-control" required>
   <label>slug</label>
   <input type="text" class="form-control" required>
    <label>Date</label>
           <input data-date-format="dd/mm/yyyy" id="datepicker" class="form-control">
       <label>Status</label>
       <select class="form-control">
      <option>Draft</option>
      <option>Publish</option>
    </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
<!-- ------------- -->
    <?php


}

    ?>
<script type="text/javascript">
  $('#quickedit').on('show.bs.modal', function(e) {
    var userid = $(e.relatedTarget).data('userid');
    $(e.currentTarget).find('input[name="user_id"]').val(userid);
});
   

</script>