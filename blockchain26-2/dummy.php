 <?php
                           $connection=mysqli_connect('localhost','root','','admin');
                           $select_query="SELECT name FROM category";
                           $select_all_categories_query=mysqli_query($connection, $select_query);
                if (!$select_all_categories_query) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
  }
  // ------------
                            $row=mysqli_fetch_array($select_all_categories_query);
                             // $unique_name= array_unique($row);
                            $student_one = array("Maths"=>95, "Physics"=>90,   
                  "Chemistry"=>96, "English"=>93,   
                  "Computer"=>98);  
                              echo count($row);
                              foreach(array_unique($row) as $rows){
                                 ?>
                           
                   
                                        <h3> <?php echo $rows;  ?></h3>
                                       
                                        <!-- <option> <?php //echo array_unique($select_all_categories_query['name']);    ?></option> -->

                                    <?php
                                    }
                                    ?>    
