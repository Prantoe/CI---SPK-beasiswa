<header class="main-header">
  <!-- Logo -->
  <a href="<?= base_url("dashboard") ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>S</b>PK</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Beasiswa</b>TOPSIS</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="<?= base_url("dashboard") ?>">
            <img src="<?= base_url("assets/profile.jpg") ?>" class="user-image" alt="User Image">
            <span class="hidden-xs">Sign Out</span>
          </a>
        </li>

        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?= base_url("assets/profile.jpg") ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Pranto Suwarno</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>

      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        
      </li>

      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Sistem</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?= base_url("dashboard/kriteria") ?>"><i class="fa fa-circle-o"></i> kriteria</a></li>
          <li><a href="<?= base_url("dashboard/bahan-produk") ?>"><i class="fa fa-circle-o"></i> alternatif</a></li>
          <li><a href="<?= base_url("dashboard/barang") ?>"><i class="fa fa-circle-o"></i> nilai matriks</a></li>
          <li><a href="<?= base_url("dashboard/bahan-produk") ?>"><i class="fa fa-circle-o"></i> hasis topsis</a></li>
        </ul>
      </li>



    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
