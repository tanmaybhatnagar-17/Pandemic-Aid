<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="../assets/img/logo pandemic.png" alt="">
        <span>Pandemic Aid</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#">Dashboard</a></li>
          <li class="dropdown"><a class="nav-link scrollto" href="#">Hospital Bed</a>
                <ul>
                  <li><a href="manage-bed.php">Manange Hospital Bed</a></li>
                  <li><a href="manage-request.php">Manage Bed Requests</a></li>                 
                </ul>
        </li> 
        <li class="dropdown"><a class="nav-link scrollto" href="#">Account</a>
                <ul>
                  <li><a href="selfaw.php">My Profile</a></li>
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