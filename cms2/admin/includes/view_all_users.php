 <table class="table table-bordered table-hover" >
                          <thead>
                            <tr>
                              <td>id</td>
                              <td>username</td>
                              <td>firstname</td>
                              <td>lastname</td>
                              <td>email</td>
                              <td>role</td>
                               </tr>
                          </thead>
                          <tbody>
                          
                        
<?php
                        
$query="SELECT * FROM users";
$select_users=mysqli_query($connection,$query);
while ($row=mysqli_fetch_array($select_users)) {
  $user_id=$row['user_id'];
  $user_name=$row['user_name'];
  $user_password=$row['user_password'];
  $user_firstname=$row['user_firstname'];
  $user_lastname=$row['user_lastname'];
  $user_email=$row['user_email'];
  $user_image=$row['user_image'];
  $user_role=$row['user_role'];
  

  echo "<tr>";
  echo "<td> $user_id</td>";
  echo "<td>$user_name</td>";
  echo "<td>$user_firstname</td>";
  echo "<td>$user_lastname</td>";
  echo "<td>$user_email</td>";
      echo "<td>$user_role</td>";
     
    echo "<td><a href='users.php?change_to_admin={$user_id}'>admin</a></td>";
    echo "<td><a href='users.php?change_to_sub={$user_id}'>subscriber</a></td>";
    echo "<td><a href='users.php?source=edit_users&edit_use={$user_id}'>edit</a></td>";
    echo "<td><a href='users.php?delete={$user_id}'>delete</a></td>";
       echo "<tr>";
  
}

                        ?>
                                               
                          </tbody>
                        </table>
                      <?php 
                        if (isset($_GET['delete'])) {
                          $the_user_id=$_GET['delete'];
                        $query="DELETE  FROM users WHERE user_id={$the_user_id}";
                        $delete_query=mysqli_query($connection,$query);
                        header("Location:users.php");
                      }
                        ?>

          <?php
          if(isset($_GET['change_to_admin'])) {
           echo $the_user_id=$_GET['change_to_admin'];
            $query="UPDATE users SET user_role='best' WHERE user_id=$the_user_id";
            $admin_query=mysqli_query($connection,$query);
            if (!$admin_query) {
        die('query FAILED . mysqli_error($connection)');
                             }
                          header("Location:users.php");   
                           }
                             ?>

                             <?php
          if(isset($_GET['change_to_sub'])) {
             echo $the_user_id=$_GET['change_to_sub'];
            $query="UPDATE users SET user_role='good' WHERE user_id=$the_user_id";
            $sub_query=mysqli_query($connection,$query);
            if (!$sub_query) {
        die('query FAILED . mysqli_error($connection)');
                             }
                          header("Location:users.php");   
                           }
                             ?>












            