 <?php
// ------------------------pagination-----------------------------
 $per_page=5;
if(isset($_GET['page'])) {

          
            $page = $_GET['page'];

            } else {


                $page = "";
            }


            if($page == "" || $page == 1) {

                $page_1 = 0;

            } else {

                $page_1 = ($page * $per_page) - $per_page;

            }

          //$connection=mysqli_connect('localhost','root','','admin');
          $post_query_count="SELECT * FROM posts WHERE username='{$selectByAuthor}'";
          $find_count=mysqli_query($connection,$post_query_count);
          if (!$find_count) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
          $count=mysqli_num_rows($find_count); 
          $count=ceil($count/$per_page);

// --------------------------

?>
 <?php
 
$select_by_author_query="SELECT * FROM posts  WHERE  username='{$selectByAuthor}' LIMIT $page_1,$per_page";
  $show_by_author_query=mysqli_query($connection,$select_by_author_query);
  if (!$show_by_author_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  } 
  
  while($row=mysqli_fetch_array($show_by_author_query)) {
  $id=$row['id'];
  $title=$row['Title'];
  $username=$row['username'];
  $selectCategory=$row['selectCategory'];
  $onlyDate=$row['onlyDate'];
  // $categoryName=$row['categoryName'];
  // $draftTime=$row['draftTime'];
  // $publishTime=$row['publishTime'];
  ?>
      
  <tr>
    <td><!-- <input type="checkbox" class="checkthis" /> --></td>
    <td class="author_td"><label><?php echo $title;  ?></label></td>
    <td><label><?php echo $username;  ?></label></td>
    <td class="page_control"><label><?php echo $selectCategory;  ?></label></td>

   <!--  <td><label></label></td>
    <td><label></label></td> -->
   
    <td><label><?php echo $onlyDate; ?></label></td>



    <td><label><a class="nav-link " href="#" id="actionmenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-ellipsis-v font-24"></i>
        </a>

<!-- <a href="#edit<?php //echo $row['userid']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>  -->


        <div class="dropdown-menu dropdown-menu-right" id="actionmenulist" aria-labelledby="actionmenu">
          <a class="dropdown-item" href="editpost.php?edit=<?php echo $id;   ?>">Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil pad_left_40"></i
            ></a>
  <a class="dropdown-item quickEditPost" data-title="Edit" data-id="<?php echo $id;  ?>" >Quick Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-magic pad"></i></a>
  <!-- <button class="quickEditPost" >edit</button> -->
     <a class="dropdown-item deletePost" data-title="Delete" data-id="<?php echo $id;  ?>">Trash&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-trash padd"></i
            ></a>
             </div>
</label>
</td>
    </tr>
</tbody>
<?php
}
?>

</tbody>
        
</table>
<ul class="pagination">

  <?php
   for($i =1; $i <= $count; $i++) {


        if($i == $page) {

             echo "<li class='page-item'><a class='page-link active_pagination' href='allpost.php?pagination=selelctByauthor&&page={$i}'>{$i}</a></li>";


        }  else {

            echo "<li class='page-item''><a class='page-link' href='allpost.php?pagination=selelctByauthor&&page={$i}'>{$i}</a></li>";


        }

         
        }



  ?>
    
 
  </ul>

 