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
    
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td > <img scr=""><label></label></td>
    <td><label></label></td>
    <td ><label></label></td>
    <td><label></label></td>
    <td></td>
    <td class="page_control"><button class="table_btn btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#quickedit" ><span class="fa fa-pencil"></span></button></td>
    <td class="page_control"><button class="table_btn btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash"></span></button></td>
    </tr>
    

    
    </tbody>
        
</table>


                
            </div>

            		</div>
              </div>
    	</div>

   

   


</body>

</html>