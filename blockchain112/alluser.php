
<?php include("includes/header.php"); ?>
 

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
             
              $connection=mysqli_connect('localhost','root','','admin');
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
    <td><a class="nav-link " href="#" id="actionmenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-ellipsis-v font-24"></i>
        </a>


        <div class="dropdown-menu dropdown-menu-right" id="actionmenulist" aria-labelledby="actionmenu">
          <a class="dropdown-item">Edit<i class="fa fa-pencil pad_left_40"></i
            ></a>
          <a class="dropdown-item" data-title="Edit" data-toggle="modal" data-target="#quickedit">Quick Edit<i class="fa fa-magic pad"></i
            ></a>
           <a class="dropdown-item" data-title="Delete" data-toggle="modal" data-target="#delete">Trash<i class="fa fa-trash padd"></i
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

   

   


</body>

</html>