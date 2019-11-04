 <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>


                    <form action="./search.php" method="post">
                    <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                </form>
                    <!-- /.input-group -->
                </div>
                <!-- <--login--> 
                <div class="well">
                    <h4>login</h4>


                    <form action="includes/login.php" method="post">
                    <div class="input-group">
                        <input name="username" type="text" placeholder="username" class="form-control">
                    </div>
                    <div class="input-group">
                        <input name="password" type="text" placeholder="password" class="form-control">
                    </div>
<div>
                        <span class="input-group-btn">
                            <button name="login" value="submit" class="btn btn-primary" type="submit">
                                <span class="glyphicon glyphicon-search">submit</span>
                        </button>
                        </span>
                    </div>
                </form>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                                <?php
                                   $query="SELECT * FROM categories";
                    $select_categories_query=mysqli_query($connection,$query);
                    while($row=mysqli_fetch_array($select_categories_query)){
                      $cat_title=$row['cat_title'];
                      echo "<li><a href=''>{$cat_title}</a></li>";
                               }
                               ?>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                       
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <?php include"widgets.php"; ?> 

            </div>