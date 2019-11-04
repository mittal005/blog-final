<?php session_start(); ?>
<?php
if (isset($_POST['save_category'])) {
    echo $name=$_POST['name'];
    echo $slug=$_POST['slug'];
     $parent_category=$_POST['parent_category'];
    $description=$_POST['description'];
         
    
     $connection=mysqli_connect('localhost','root','','admin');
     if($connection){
      ?>
   <h3 style="color: white"><?php echo $connection;  ?></h3>
      <?php
     }
       
     $que="INSERT INTO category(name,slug,parentcategory,description)VALUES('$name','$slug','$parent_category','$description')";
          $insert_category=mysqli_query($connection,$que);
         if (! $insert_category) {
        die('query FAILED . mysqli_error($connection)');
                             }

                  
              $select_query="SELECT * FROM category WHERE name='{$name}' ORDER BY id DESC LIMIT 1";
                $select_all_categories_query=mysqli_query($connection, $select_query);
                if (!$select_all_categories_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
                    while($row=mysqli_fetch_array($select_all_categories_query)){
                      $name=$row['name'];
                      $slug=$row['slug'];
                      $description=$row['description'];
                     
       
       }               
}
          ?>

<!DOCTYPE html>

<html lang="en">

<head>
<?php include("includes/header.php"); ?>

  </head>

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
                           $connection=mysqli_connect('localhost','root','','admin');
                           $select_query="SELECT name FROM category";
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
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td><?php if(isset($name)){echo $name;}  ?></td>
    <td><?php if(isset($slug)){echo $slug;}  ?></td>
    <td><?php if(isset($description)){echo $description;}   ?></td>
    <td>+923335586757</td>
    <td class="page_control"><a href="Edit Category.php"><span class="fa fa-pencil">
    </span></button></td></a>
    <td class="page_control"><span class="fa fa-trash"></span></button></td>
    </tr>   
    </tbody>        
</table>
         
            </div>          
        </div>
  </div>
</div>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">        
        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
      </div>
  </body>
</html>


<!-- -------------------------------------session----------------------------------------- -->
// $_SESSION['signed_out']=false;
//  $logged_out_query="UPDATE login SET  signed_in='{$_SESSION['signed_out']}'  WHERE  username='{$username}'";
//       $logged_out_query_con=mysqli_query($connection, $logged_out_query);
//   if (!$logged_out_query_con) {
//         die('query FAILED . mysqli_error($connection)');
//                              }