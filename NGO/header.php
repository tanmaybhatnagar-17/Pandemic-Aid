<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="../assets/img/logo pandemic.png" alt="">
        <span>Pandemic Aid</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a class="nav-link scrollto" href="#">NGO </a>
                <ul>
                  <li><a href="announcement.php">Announcement</a></li>
                  <li><a href="manage-announcement.php">Manage Announcement</a></li>                 
                </ul>
        </li> 
        <li class="dropdown"><a class="nav-link scrollto" href="#">Account</a>
                <ul>
                  <li><a href="#">My Profile</a></li>
                </ul>
        </li>                   
         
                    <?php
                      if ( ( isset($_SESSION['login'] ) )) {  ?>
                        <li><a class="getstarted scrollto" href="logout.php">Logout</a></li>  
                    <?php   } else {?>
                        <li><a class="getstarted scrollto" href="login.php">Login</a></li>
                      <?php }?> 
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>