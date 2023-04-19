<?php 
session_start();
?>
<header class="header bg-green js-header" style="background-color: #0000008f;">
  <div class="header__container px-30 sm:px-20">
    <div class="row justify-between items-center">

      <div class="col-auto">
        <div class="d-flex items-center">
          <a href="index.php" class="header-logo mr-20">
            <img src="img/general/logo1.png" alt="logo1.png" style="height: 40px; width:auto">
            <img src="img/general/logo1.png" alt="logo1.png" style="height: 40px; width:auto">
          </a>


          <div class="header-menu ">
            <div class="mobile-overlay"></div>

            <div class="header-menu__content">
              <div class="mobile-bg js-mobile-bg"></div>

              <div class="menu js-navList">
                <ul class="menu__nav text-white -is-active">

                  <li>
                    <a href="index.php">Home</a>
                  </li>
                  <li>
                    <a href="about.php">About</a>
                  </li>
                  <li>
                    <a href="contact.php">Contact</a>
                  </li>
                  <li>
                    <a href="terms.php">Terms & Conditions</a>
                  </li>


                </ul>
              </div>

              <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
              </div>
            </div>
          </div>

        </div>
      </div>


      <div class="col-auto">
        <div class="d-flex items-center">

          <div class="d-flex items-center ml-20 is-menu-opened-hide md:d-none">
            <?php if(isset($_SESSION['user_id'])) { ?>
             <a href="db-dashboard.php" class="button px-30 fw-400 text-14 border-white -outline-white h-50 text-white ml-20" >Dashboard</a>
             <?php } else { ?>
                <a href="login.php" class="button px-30 fw-400 text-14 -white bg-white h-50 text-dark-1">Login</a>
            <a href="signup.php" class="button px-30 fw-400 text-14 border-white -outline-white h-50 text-white ml-20">Register</a>
            <?php } ?>
             
          </div>

          <div class="d-none xl:d-flex x-gap-20 items-center pl-30 text-white" >
            <div><a href="login.php" class="d-flex items-center icon-user text-inherit text-22"></a></div>
            <div><button class="d-flex items-center icon-menu text-inherit text-20"></button></div>
          </div>
          
       
        </div>
      </div>

    </div>
  </div>
</header>