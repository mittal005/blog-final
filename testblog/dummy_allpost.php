<!-- -------------------------------sorting------------------ -->
<?php
if (isset($_POST['selectByCategory'])) {
   $selectByAuthor=$_POST['selectByAuthor'];  
   $selectByCategory=$_POST['selectByCategory'];
   $selectByFormat=$_POST['selectByFormat'];
  
   $query="SELECT * FROM posts
WHERE username={$selectByAuthor} AND categoryName={$selectByCategory} AND Format={$selectByFormat}";
  $update_query=mysqli_query($connection,$query);
  if (!$update_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }  
}






?>
<a href="allpost.php?show=sort&&">



  <tr>
          <td><?php  echo 'dselectByAuthor  '?></td>
  <td><?php  echo  'dselectByCategory'     ?></td>
  <td><?php  echo    'dselectByFormat'       ?></td>
</tr>
</tbody>


<tr>
 <!--  <td><?php  //echo $selectByAuthor;  ?></td>
  <td><?php  //echo  $selectByCategory;     ?></td>
  <td><?php  //echo    $selectByFormat;       ?></td> -->
  <td><?php  echo 'selectByAuthor  '?></td>
  <td><?php  echo  'selectByCategory'     ?></td>
  <td><?php  echo    'selectByFormat'       ?></td>


</tr>
AND categoryName={$selectByCategory} 
username={$selectByAuthor} AND Format={$selectByFormat}


AND categoryName='{$selectByCategory}' AND Format='{$selectByFormat}'