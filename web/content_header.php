<header class="main-header">
  <!-- Logo -->
  <div class="logo">
    <span class="logo-mini"><img src="../assets/foto/telkom.jpg" class="img-circle" alt="Logo" height="50" width="50"></span>
    <span class="logo-lg"><b>Kampus Ku</b></span>
  </div>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="index.php" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="../assets/foto/<?php echo "".$_SESSION["Foto"]."" ?>" class="user-image" alt="Foto">
          <span class="hidden-xs" style="text-transform:capitalize;"><?php echo "".$_SESSION["Username"]."" ?></span></a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="../assets/foto/<?php echo "".$_SESSION["Foto"]."" ?>" class="img-circle" alt="Foto">
                        <!--<h3><p>Akademik</p></h3>-->
              <p style="text-transform:capitalize;">Hi <?php echo "".$_SESSION["Username"]."" ?>, </p>
              <p>Welcome To Kampus Ku</p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <div class="pull-right">
                <a href="../logout.php" class="btn btn-primary">Sign out <i class="fa fa-sign-out"></i></a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
