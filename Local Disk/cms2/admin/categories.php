<?php include "includes/header.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->
       <?php include "includes/navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            WELCOME TO ADMIN
                            <small>AUTHOR</small>
                        </h1>
                        <div class="col-xs-6">
                          <?php
                          if (isset($_POST['submit'])) {
                              $cat_title=$_POST['cat_title'];
                              if (empty($cat_title)) {
                                  echo "this field should not be empty";
                              }else
                              {
                                $query="INSERT INTO categories(cat_title) VALUES('$cat_title')";
                                 $search_category_query=mysqli_query($connection,$query);
    if (!$search_category_query) {
        die('query FAILED . mysqli_error($connection)');
                             }
                             
                         }
                     
                                                        }
                          ?>

                            <form action="" method="post">
                                <div class="form-group">
                                <label>add category</label>
                                <input type="text" name="cat_title" class="form-control">
                                </div>
                                <div class="form-group">
                                <input type="submit" name="submit" value="add category" class="btn btn-primary">
                                </div>
                            </form>
                            <?php if (isset($_GET['edit'])) {
                                $cat_id= $_GET['edit'];
                             include "update_category.php";
                             }
                              ?>
                        </div>
                            <div class="col-xs-6">
                                 <table class="table table-bordered table-hover">
                                                           <thead>
                                                               <tr>
                                                               <th>Id</th>
                                                               <th>category title</th>
                                                               </tr>
                                                           </thead>
                                                         $  <tbody>
                                                           <?php
                                                           $query="SELECT * FROM categories";
                                      $select_categories=mysqli_query($connection,$query);
   while ($row=mysqli_fetch_array($select_categories)) {
    $cat_id=$row['cat_id'];
    $cat_title=$row['cat_title'];
    echo "<tr>";
    echo "<td>{$cat_id}</td>";
    echo "<td>{$cat_title}</td>";
     echo "<td><a href='categories.php?delete={$cat_id}'>delete</a></td>";
     echo "<td><a href='categories.php?edit={$cat_id}'>edit</a></td>";
    echo "</tr>"; 
 }
                                                                                                                      
                                                            ?>
                                                             <?php
                         if (isset($_GET['delete'])) {
                           $the_cat_id=$_GET['delete'];
                           $query="DELETE FROM categories WHERE cat_id={$the_cat_id}";
                           $delete_query=mysqli_query($connection,$query);
                           header("Location:categories.php");

                         }
                         ?>
                                                           
                                                           
                                                           </tbody>
                                                       </table>
                        </div>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include "includes/footer.php"; ?>