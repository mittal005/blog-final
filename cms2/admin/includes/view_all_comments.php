 <table class="table table-bordered table-hover" >
                          <thead>
                            <tr>
                              <td>id</td>
                              <td>post_id</td>
                              <td>author</td>
                              <td>comment</td>
                              <td>email</td>
                              <td>status</td>
                              <td>in response to</td>
                              <td>date</td>
                              <td>approve</td>
                              <td>unapprove</td>
                              <td>delete</td>
                            </tr>
                          </thead>
                          
                          <tbody>
                          <?php
                        $query="SELECT * FROM comments";
$select_comments=mysqli_query($connection,$query);
while($row=mysqli_fetch_array($select_comments)) {
  $comment_id=$row['comment_id'];
  $comment_post_id=$row['comment_post_id'];
  $comment_author=$row['comment_author'];
   $comment_email=$row['comment_email'];
    $comment_content=$row['comment_content'];
  $comment_status=$row['comment_status'];
   $comment_date=$row['comment_date'];

  echo "<tr>";
  echo "<td>$comment_id</td>";
  echo "<td>$comment_post_id</td>";
  echo "<td>$comment_author</td>";
  echo "<td> $comment_email</td>";
    echo "<td>$comment_content</td>";
  echo "<td>$comment_status</td>";
   echo "<td>some title</td>";
  echo "<td>$comment_date</td>";
     echo "<td><a href='add_post.php?edit&p_id='>approve</a></td>";
     echo "<td><a href='add_post.php?edit&p_id='>unapprove</a></td>";
      echo "<td><a href='add_post.php?edit&p_id='>delete</a></td>";
       echo "<tr>";
  
}

                        ?>
                        
                          </tbody>
                       
                          </table>
                       <!--  <?php
                        if (isset($_GET['delete'])) {
                          $the_post_id=$_GET['delete'];
                        $query="DELETE  FROM posts WHERE post_id={$the_post_id}";
                        $delete_query=mysqli_query($connection,$query);
                        header("Location:posts.php");
                      }
                        ?>
                         -->