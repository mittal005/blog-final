<?php
             
              $connection=mysqli_connect('localhost','root','','admin');
              $query="SELECT * FROM posts WHERE Status='Publish'";
$select_allposts=mysqli_query($connection,$query);
while($row=mysqli_fetch_array($select_allposts)) {
  $id=$row['id'];
  $title=$row['Title'];
  $username=$row['username'];
  $categoryName=$row['categoryName'];
  $draftTime=$row['draftTime'];
  $publishTime=$row['publishTime'];
              ?>       

    
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td class="author_td"><label><?php echo $title;  ?></label></td>
    <td><label><?php echo $username;  ?></label></td>
    <td class="page_control"><label><?php echo $categoryName;  ?></label></td>

    <td><label></label></td>
    <td><label></label></td>
   
    <td><?php if ($draftTime != "") {
                 echo    $draftTime; 
    }else{
         echo    $publishTime;
    }                        ?></td>
    <td class="page_control"><a href="#quickedit?edit={$id}"><button class="table_btn btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#quickedit" ><span class="fa fa-pencil"></span></button></a></td>
    <!-- <form action="" method="get"> -->
    <td class="page_control"><a href="includes/delete_published_posts.php?delete=<?php echo $id ?>"><button class="table_btn btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash"></span></button></a></td>
    <!-- </form> -->
    </tr>
    <?php

}

    ?>
