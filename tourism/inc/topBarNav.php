<!--  NAVBAR  -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
  <div class="container-fluid">

    <!-- logo -------------------------------------------------------------->
    <a class="navbar-brand d-flex align-items-center" href="#page-top">
      <img src="../assets/images/logo1.png"
           alt="Tourism11 logo"
           class="logo-img me-2"
           style="width: 100px; height: 50px;">
    </a>

    <!-- mobile toggle button ---------------------------------------------->
    <button class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation">
      Menu <i class="fas fa-bars ms-1"></i>
    </button>

    <!--  links ------------------------------------------------------------>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">

        <li class="nav-item">
          <a class="nav-link" href="<?php echo $page != 'home' ? './' : '' ?>">Home</a>
        </li>

        <!-- DROPDOWN : DESTINATIONS ------------------------------------- -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"
             href="#destination"
             id="navbarDropdownDestination"
             role="button"
             data-toggle="dropdown"
             aria-haspopup="true"
             aria-expanded="false">
            Destinations
          </a>

          <div class="dropdown-menu p-3" aria-labelledby="navbarDropdownDestination">

            <!-- Europe section -->
            <div class="dropdown-section mb-2">
              <span class="dropdown-title font-weight-bold d-block mb-1">Europe</span>
              <a class="dropdown-item" href="./?page=destination&country=France">France</a>
              <a class="dropdown-item" href="./?page=destination&country=Italy">Italy</a>
              <a class="dropdown-item" href="./?page=destination&country=Spain">Spain</a>
            </div>

            <div class="dropdown-divider"></div>

            <!-- Asia section -->
            <div class="dropdown-section mt-2">
              <span class="dropdown-title font-weight-bold d-block mb-1">Asia</span>
              <a class="dropdown-item" href="country.php?place=Assam">Assam</a>
              <a class="dropdown-item" href="country.php?country=Thailand">Thailand</a>
              <a class="dropdown-item" href="country.php?country=Malaysia">Malaysia</a>
            </div>

          </div>
        </li>
        <!-- END   DROPDOWN ------------------------------------------------ -->

        <li class="nav-item">
          <a class="nav-link" href="./?page=packages">Packages</a>
        </li>

        <li class="nav-item">
          <a class="nav-link"
             href="<?php echo $page != 'home' ? './' : '' ?>#about">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link"
             href="<?php echo $page != 'home' ? './' : '' ?>#contact">Contact</a>
        </li>

        <?php if (isset($_SESSION['userdata'])): ?>
          <li class="nav-item">
            <a class="nav-link" href="./?page=my_account">
              <i class="fa fa-user"></i> Hi,&nbsp;<?php echo $_settings->userdata('firstname'); ?>!
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <i class="fa fa-sign-out-alt"></i>
            </a>
          </li>
        <?php else: ?>
          <!-- <li class="nav-item">
            <a class="nav-link" href="login.php" id="login_btn">Login</a>
          </li> -->
        <?php endif; ?>

      </ul>
    </div>
  </div>
</nav>

<!--  DROPDOWN / NAVBAR JS & LOGIN MODAL TRIGGER ------------------------->
<script>
  $(function () {

    // Login button (kept from your original code)
    $('#login_btn').click(function () {
      uni_modal("", "login.php", "large");
    });

    // make navbar shrink on mobile collapse open/close
    $('#navbarResponsive').on('show.bs.collapse', function () {
      $('#mainNav').addClass('navbar-shrink');
    });
    $('#navbarResponsive').on('hidden.bs.collapse', function () {
      if ($(window).scrollTop() === 0) {
        $('#mainNav').removeClass('navbar-shrink');
      }
    });

  });
</script>