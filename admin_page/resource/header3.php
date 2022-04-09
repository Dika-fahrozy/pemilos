<?php
session_start();
if(!isset($_SESSION['username'])){
  echo "<script>alert('Anda Belum Log-In, Silahkan Log-In terlebih dahulu');document.location='../../login.php'</script>";
} else {

?>
<header class="main-header">
        <!-- Logo -->
        <a href="../../index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><img src="../../dist/img/padi-ico.png" width="40px" height="40px"></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Pemilihan</b>OSIS</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
              
              <!-- Tasks: style can be found in dropdown.less -->
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../../dist/img/avatar5.png" class="user-image" alt="User Image">
                  <span class="hidden-xs">ADMIN</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header" style="background: url('../../dist/img/perpus.png'); background-size: cover;">
                    <img src="../../dist/img/avatar5.png" class="img-circle" alt="User Image">
                    <p>
                      <font color="#fff"><b>ADMIN<br>IT-Support</b></font>
                    </p>
                  </li>
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="../../koneksi/logout.php" onclick="return confirm('Anda Yakin Mau Keluar???')" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
</header>
<?php } ?>