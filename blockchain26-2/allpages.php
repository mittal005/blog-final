<?php session_start(); ?>
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
            <div class="col-md-12">
              <div class="row">
          <div class="col-md-12">
         <a href="#"> All (<span></span>) </a> |  <a href="#"> Published </a> (<span></span>)  | <a href="#">  Draft </a>(<span></span>)

        </div>
</div>
      
<div class="row dash_row" id="filter">

   <div class="col-md-2">
    <select class="form-control">
      <option>All Author</option>
    </select>
  </div>
  <div class="col-md-2">
     <button type="button" class="btn btn-primary">Apply</button>
      
  </div>
  <div class="col-md-2">
    <select class="form-control">
      <option>All Dates</option>
    </select>
  </div>
  <div class="col-md-2 col-offset-md-4">
     <button type="button" class="btn btn-primary">Apply</button>
      
  </div>
  
</div>
</div>
</div>
        <div class="row dash_row">
    		<div class="col-md-12 outer-w3-agile">
              <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th><input type="checkbox" id="checkall" /></th>
                   <th>Title</th>
                    <th>Author</th>
                     <th>Comment</th>
                     <th>Date</th>
                     <th>Edit</th>
                      <th>Quick Edit</th>
                      
                       <th>Delete</th>
                   </thead>
    <tbody>
    
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td class="author_td"><label></label></td>
    <td><label></label></td>
    <td class="page_control"><label></label></td>
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
   <label>Title</label>
   <input type="text" class="form-control" required>
   <label>slug</label>
   <input type="text" class="form-control" required>
    <label>Date</label>
           <input data-date-format="dd/mm/yyyy" id="datepicker" class="form-control">
       <label>Status</label>
       <select class="form-control">
      <option>Draft</option>
    </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  Are you sure want delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Delete</button>
      </div>
    </div>
  </div>
</div>
  <!-- Custom scripts for all pages-->
 <script type="text/javascript">
    $('#datepicker').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
    });
    $('#datepicker').datepicker("setDate", new Date());
</script> 

</body>

</html>