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
			<li class="active"><a href="user.php"><i class="fa fa-user-circle-o"></i><span>Administrator</span></a></li>
          </ul>
        </section>
      </aside>

      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            User
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user-circle-o"></i> User</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "dt_user.php";
						?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
		
    </div>

    </div>
	<?php
		include "bundle_script.php";
	?>
  </body>
</html>