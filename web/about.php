<?php

session_start();
include "../koneksi.php";
include "auth_user.php";
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>Kampus Ku</title>
	<!-- Library CSS -->
	<?php
		include "bundle_css.php";
	?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php
        include 'content_header.php';
       ?>
      <aside class="main-sidebar">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
              <p></p>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="header"><h4><b><center>Menu</center></b></h4></li>
            <li><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
  	        <li><a href="dosen.php"><i class="fa fa-user"></i><span>Dosen</span></a></li>
  	        <li><a href="mahasiswa.php"><i class="fa fa-users"></i><span>Mahasiswa</span></a></li>
  	        <li><a href="matakuliah.php"><i class="fa fa-book"></i><span>Matakuliah</span></a></li>
  	        <li><a href="jurusan.php"><i class="fa fa-university"></i><span>Jurusan</span></a></li>
  	        <li><a href="jenjang.php"><i class="fa fa-graduation-cap"></i><span>Jenjang</span></a></li>
					  <li><a href="user.php"><i class="fa fa-user-circle-o"></i><span>User</span></a></li>
          </ul>
        </section>
      </aside>

	<!-- Library Scripts -->
	<?php
		include "bundle_script.php";
	?>
  </body>
</html>
