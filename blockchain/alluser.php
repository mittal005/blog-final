
<?php include("includes/header.php"); ?>
<?php 
 // -----------------------------
if (isset($_POST['delete_post'])) {
   $id=$_POST['deleteID'];  
  
   $query="DELETE FROM newuser WHERE id={$id}";
  $delete_query=mysqli_query($connection,$query);
  if (!$delete_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }  
}
?>
<body id="page-top">

 <?php include("includes/topnav.php"); ?>

  <div id="wrapper">

    <!-- Sidebar -->
    
<?php include("includes/sidenav.php"); ?>




      <div class="container-fluid">
        
        <div class="row dash_row">
        <div class="col-md-12 outer-w3-agile">
          <h5 class="text-center">All Users</h5>
              <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                
                   <thead>
                   
                   <th><input type="checkbox" id="checkall" /></th>
                   <th>username</th>
                    <th>Name</th>
                     <th>E-Mail</th>
                     <th>Role</th>
                     <th>Post</th>
                     
                      <th>Quick Edit</th>
                      
                       
                   </thead>
    <tbody>
    <?php
         
              //$connection=mysqli_connect('localhost','root','','admin');
              $query="SELECT * FROM newuser";
$select_newuser=mysqli_query($connection,$query);
while($row=mysqli_fetch_array($select_newuser)) {
  $id=$row['id'];
  $username=$row['username'];
  $email=$row['email'];
  $firstname=$row['firstname'];
   $lastname=$row['lastname'];
    $role=$row['role'];
    $Biographicalinfo=$row['Biographicalinfo'];
  


            ?>       

    
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td ><label><?php echo $username;  ?></label></td>
    <td><label><?php echo $firstname;  ?></label></td>
    <td ><label><?php echo $email;  ?></label></td>
    <td><label><?php echo $role;  ?></label></td>
    <td><label><?php echo $Biographicalinfo;  ?></label></td>
    <td><a class="nav-link " href="#" id="actionmenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-ellipsis-v font-24"></i>
        </a>


      <div class="dropdown-menu dropdown-menu-right" id="actionmenulist" aria-labelledby="actionmenu">
          <a class="dropdown-item" href="edituser.php?edit=<?php echo $id;   ?>">Edit<i class="fa fa-pencil pad_left_40"></i
            ></a>
          <a class="dropdown-item" data-title="Edit" data-toggle="modal" data-target="#quickedit">Quick Edit<i class="fa fa-magic pad"></i
            ></a>
           <a class="dropdown-item deletePost" data-title="Delete" data-id="<?php echo $id;  ?>">Trash<i class="fa fa-trash padd"></i
            ></a>
        </div>
</td>
    </tr>
    
    </tbody>
    <?php

     }

    ?>
        
</table>


                
            </div>

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
<!-- -----------delete query--------- -->
<script type="text/javascript">
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

</body>

</html>