<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo pandemic.png" alt="">
        <span>Pandemic Aid</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php #hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php #about">About</a></li>
          <li><a class="nav-link scrollto" href="index.php #Symptoms">Symptopms</a></li>
          <li class="dropdown"><a class="nav-link scrollto" href=" index.php #services">Services</a>
                <ul>
                  <li><a href="consultancy.php">Doctor Consultancy</a></li>
                  <li><a href="hospitallist.php">Hospital bed Availability</a></li>
                  <li><a href="ngolist.php"> NGO</a></li>
                  <li><a href="selfaware.php">Self Awareness</a></li>
                  <li><a href="history.php">History</a></li>
                  <li><a href="https://www.pmcares.gov.in/en">COVID Relief India</a></li>                   
                </ul>
        </li>
        
          <?php  
                      if ( ( isset($_SESSION['login'] ) )) {  ?>
                     
                        <li><a class="nav-link scrollto" href="account.php">Notifications & Account</a></li>  
                      <?php   }?>
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