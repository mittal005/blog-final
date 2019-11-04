<?php include("includes/init.php"); ?>
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
                      
                       <th>View</th>
                   </thead>
    <tbody>
    <?php
             
              $connection=mysqli_connect('localhost','root','','admin4');
              $query="SELECT * FROM newuser";
$select_newuser=mysqli_query($connection,$query);
while($row=mysqli_fetch_array($select_newuser)) {
  $id=$row['id'];
  $username=$row['username'];
  $email=$row['email'];
  $firstname=$row['firstname'];
   $lastname=$row['lastname'];
    $role=$row['role'];
  


            ?>       

    
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td ><label><?php echo $username;  ?></label></td>
    <td><label><?php echo $email;  ?></label></td>
    <td ><label><?php echo $firstname;  ?></label></td>
    <td><label><?php echo $lastname;  ?></label></td>
    <td><label><?php echo $role;  ?></label></td>
    <td class="page_control"><a href='<?php echo "profile.php?edit={$id}" ?>'><button class="table_btn btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#quickedit" ><span class="fa fa-pencil"></span></button></a></td>
    <td class="page_control"><button class="table_btn btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash"></span></button></td>
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

   

   


</body>

</html>