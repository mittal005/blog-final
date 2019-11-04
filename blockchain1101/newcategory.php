
<?php
              $connection=mysqli_connect('localhost','root','','admin');
if (isset($_POST['delete_post'])) {
   $id=$_POST['deleteID'];  
  
   $query="DELETE FROM category WHERE id={$id}";
  $delete_query=mysqli_query($connection,$query);
  if (!$delete_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }  
}
?>


<?php include("includes/header.php"); ?>

<body id="page-top">

 <?php include("includes/topnav.php"); ?>

  <div id="wrapper">

    <!-- Sidebar -->
    
<?php include("includes/sidenav.php"); ?>
 <div class="container-fluid">
              <div class="row dash_row outer-w3-agile">
                <div class="col-md-5 ">
                  <form action="" method="post">
                    <h5 class="text-center">Add New Category</h5>
                    <hr>
                    
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" id="firstName" placeholder="" value="" required=""> 
                    <br>  
                            <label>Slug</label>
                    <input type="text" class="form-control" name="slug"  placeholder="" value="" required="">
                    <br>
                    <label> Parent Category</label>
                    <select class="form-control" name="parent_category">
                      <br>
                                        <option>select category</option>
                                        <?php
                           // $connection=mysqli_connect('localhost','root','','admin');
                           $select_query="SELECT DISTINCT name FROM category";
                           $select_all_categories_query=mysqli_query($connection, $select_query);
                if (!$select_all_categories_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
                            while($row=mysqli_fetch_array($select_all_categories_query)){
                              $name=$row['name'];
                          
                    ?>
                                        <option> <?php echo $name;    ?></option>
                                       
                                        <?php
                                      }
                                        ?>
                                        
                                    </select>
                                    <br>
                   <label>Description</label>
                    <textarea class="form-control"  rows="5" required="" name="description"></textarea>
                    <div class="row">
                      <div class="offset-md-3 col-md-6 col-offset-md-3">
                        <br>
       <input type="submit" name="save_category" class="btn btn-primary" value="Add New Category">                 
                      <!-- <button type="button" class="btn btn-primary" name="save_category">Add New Category</button> -->
                    </div>
                    </div>
                    </form>
                  </div>
                  
                  <div class="col-md-7 ">
                    <div class="row">
                      <div class="col-md-4">
            <select class="form-control">
      <option>All Dates</option>

    </select>
  </div>
  <div class="col-md-4">
    <button type="button" class="button btn btn-primary">Apply</button>
     
   </div>
   <div class="col-md-4">
   </div>
   </div>
   <br>
        <div class="table-responsive">                
              <table id="mytable" class="table table-bordred table-striped">                  
                   <thead>                   
                   <th><input type="checkbox" id="checkall" /></th>
                   <th>Name</th>
                     <th>Slug</th>
                     <th>Description</th>
                    
                     <th>count</th>
                      <th>Edit</th>                      
                       <th>Delete</th>
                   </thead>
    <tbody>
    
     <!--  ------------------- -->
<?php
if (isset($_POST['save_category'])) {
    $name=$_POST['name'];
    $slug=$_POST['slug'];
     $parent_category=$_POST['parent_category'];
    $description=$_POST['description'];
         
    
     // $connection=mysqli_connect('localhost','root','','admin');
       
     $que="INSERT INTO category(name,slug,parentcategory,description)VALUES('$name','$slug','$parent_category','$description')";
          $insert_category=mysqli_query($connection,$que);
         if (! $insert_category) {
        die('query FAILED . mysqli_error($connection)');
                             }

                  
              $select_query="SELECT * FROM category";
                $select_all_categories_query=mysqli_query($connection, $select_query);
                if (!$select_all_categories_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
                    while($row=mysqli_fetch_array($select_all_categories_query)){
                      $name=$row['name'];
                      $slug=$row['slug'];
                      $description=$row['description'];
                     
      
          ?>



      <!-- -------- -->
      <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td><?php if(isset($name)){echo $name;}  ?></td>
    <td><?php if(isset($slug)){echo $slug;}  ?></td>
    <td><?php if(isset($description)){echo $description;}   ?></td>
    <td>+923335586757</td>
    <td class="page_control"><a href="editcategory.php?edit=<?php echo $id;   ?>"><span class="fa fa-pencil">
    </span></button></td></a>
    <td class="dropdown-item deletePost" data-title="Delete" data-id="<?php echo $id;  ?>"><span class="fa fa-trash"></span></button></td>
     </tr> 
    <?php
 
       }               
}
    ?>
     
    </tbody>        
</table>
         
            </div>          
        </div>
  </div>
</div>

<!----------------->
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
</div>s
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
      </div>
  </body>
</html>
