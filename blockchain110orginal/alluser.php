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
                     
                      <th>Action</th>
                      
                     
                   </thead>
    <tbody>
    
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td > <img scr=""><label></label></td>
    <td><label></label></td>
    <td ><label></label></td>
    <td><label></label></td>
    <td><label></label></td>
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
        
</table>


                
            </div>

            		</div>
              </div>
    	</div>

   

   


</body>

</html>