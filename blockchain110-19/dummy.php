 <select class="form-control mar_top_20" name="category" >

    <option>No Category</option>
    <?php
                           //$connection=mysqli_connect('localhost','root','','admin');
                           $select_query="SELECT DISTINCT parentcategory FROM category";
                           $select_all_categories_query=mysqli_query($connection, $select_query);
                if (!$select_all_categories_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
                            while($row=mysqli_fetch_array($select_all_categories_query)){
                              $parentcategory=$row['parentcategory'];   
                    ?>
                                        <option <?php if($parentcategory==$categoryType) echo 'selected="selected"'; ?>> <?php echo $parentcategory;    ?></option>
                                     <?php
                                      }
  ?>
  </select>