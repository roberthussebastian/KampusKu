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
    <div>
      
      <header class="main-header">
        <!-- Logo -->
        <div class="logo">
          <span class="logo-mini"><img src="../assets/foto/telkom.jpg" class="img-circle" alt="Logo" height="50" width="50"></span>
          <span class="logo-lg"><b>Kampus Ku</b></span>
        </div>
        <!-- Header Navbar-->
        <nav class="navbar navbar-static-top" role="navigation">

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <!-- User Account-->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="../assets/foto/<?php echo "".$_SESSION["Foto"]."" ?>" class="user-image" alt="Foto">
                <span class="hidden-xs" style="text-transform:capitalize;"><?php echo "".$_SESSION["Username"]."" ?></span>
                </a>
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

        <aside class="main-sidebar">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
              <p></p>
            </div>
          </div>
          <ul class="sidebar-menu">
              <li><a href="jurusan.php"><i class="fa fa-home"></i><span>Back</span></a></li>
          </ul>
        </section>
      </aside>
    <!-- Modal Popup Dosen Edit -->
    <div id="ModalEditDosen" class="modal fade" tabindex="-1" role="dialog"></div>
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edit Jurusan</h4>
          </div>
          <div class="modal-body">
            <form action="jurusan_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
              <div class="form-group">
                <label>Kode Jurusan</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-university"></i>
                    </div>
                    <input name="Kode_Jurusan" type="text" class="form-control" placeholder="Kode Jurusan"/>
                  </div>
              </div>
              <div class="form-group">
                <label>Jurusan</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-university"></i>
                    </div>
                    <input name="Nama_Jurusan" type="text" class="form-control" placeholder="Jurusan"/>
                  </div>
              </div>
              <div class="form-group">
                <label>Jenjang</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-graduation-cap"></i>
                    </div>
                    <select name="Kode_Jenjang_Jrs" class="form-control">
                      <?php
                        
                        $queryjenjang = mysqli_query($konek, "SELECT * FROM jenjang");
                        if($queryjenjang == false){
                          die ("Terdapat Kesalahan : ". mysqli_error($konek));  
                        }
                        while($jenjang = mysqli_fetch_array($queryjenjang)){
                          echo "
                            <option value='$jenjang[Kode_Jenjang]'>$jenjang[Nama_Jenjang]</option>";
                        }
                      ?>
                    </select>
                  </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-success" type="submit">
                  Save
                </button>
                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                  Cancel
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    </div>

    </div>
  <?php
    include "bundle_script.php";
  ?>
  </body>
</html>
