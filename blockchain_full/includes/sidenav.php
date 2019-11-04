<ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fa fa-tachometer"></i>
          <span>Dashboard</span>
        </a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-thumb-tack"></i>
          <span>Post</span>
        </a>
        <div class="dropdown-menu" id="pages" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="allpost.php">All post</a>
          <a class="dropdown-item" href="addpost.php">Add new</a>
         <a class="dropdown-item" href="newcategory.php">Categories</a>
         <a class="dropdown-item" href="Tags.php">Tags</a>
         
          </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fa fa-file"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" id="pages" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="allpages.php">All Pages</a>
          <a class="dropdown-item" href="addpage.php">Add new</a>
          </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="comment.php">
          <i class="fa fa-comments"></i>
          <span>Commets</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user"></i>
          <span>Users</span>
        </a>
        <div class="dropdown-menu" id="pages" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="alluser.php">All users</a>
          <a class="dropdown-item" href="neewuser.php">Add new</a>
         <a class="dropdown-item" href="profile.php">Your Profile</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
        <a id="user1" class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
         <label></label>
          <a class="dropdown-item" href="Profileview.php">View Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="home.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>
