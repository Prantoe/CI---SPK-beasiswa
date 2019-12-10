<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view("templates/head") ?>
    <title>Dashboard</title>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php $this->load->view("templates/sidebar") ?>

      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            Dashboard
            <small>Kelola Data Barang</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Kelola Data Barang</li>
          </ol>
        </section>

        <section class="content">
          <div class="row">

            <div class="col-xs-12">

              <div class="nav-tabs-custom">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Kain</a></li>
                    <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Model</a></li>
                    <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Ukuran</a></li>
                    <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                      
                    </div>
                    <div class="tab-pane" id="tab_2">
                    
                    </div>
                    <div class="tab-pane" id="tab_3">
                    
                    </div>
                  </div>
              </div>

            </div>

          </div>
        </section>

      </div>
      <?php $this->load->view("templates/footer") ?>
      <div class="control-sidebar-bg"></div>
    </div>
    <?php $this->load->view("templates/script") ?>
  </body>
</html>
