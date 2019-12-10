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

                      <form role="form" action="<?= base_url("dashboard/produk/tambah-kain") ?>" method="POST">
                        <div class="box-body">
                          <div class="col-xs-6">
                            <div class="form-group">
                              <label>Nama Kain</label>
                              <input type="text" class="form-control" name="nama_kain" required>
                            </div>
                            <div class="form-group">
                              <label>Warna Kain</label>
                              <input type="text" class="form-control" name="warna_kain" required>
                            </div>
                            <div class="form-group">
                              <label>Harga Kain</label>
                              <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="number" class="form-control" name="harga_kain" required>
                              </div>
                            </div>
                          </div>
                        </div> <!-- /box-body -->
                        <div class="box-footer">
                          <div class="col-xs-6">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                      </form>

                    </div> <!-- /tab-1 -->
                    <div class="tab-pane" id="tab_2">

                      <form role="form" action="<?= base_url("dashboard/produk/tambah-model") ?>" method="POST">
                        <div class="box-body">
                          <div class="col-xs-6">
                            <div class="form-group">
                              <label>Nama Model</label>
                              <input type="text" class="form-control" name="nama_model" required>
                            </div>
                            <div class="form-group">
                              <label>Harga Model</label>
                              <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="number" class="form-control" name="harga_model" required>
                              </div>
                            </div>
                          </div>
                        </div> <!-- /box-body -->
                        <div class="box-footer">
                          <div class="col-xs-6">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                      </form>

                    </div> <!-- /tab-2 -->
                    <div class="tab-pane" id="tab_3">
                    
                      <form role="form" action="<?= base_url("dashboard/produk/tambah-ukuran") ?>" method="POST">
                        <div class="box-body">
                          <div class="col-xs-6">
                            <div class="form-group">
                              <label>Kode Ukuran</label>
                              <input type="text" class="form-control" name="kode_ukuran" required>
                            </div>
                            <div class="form-group">
                              <label>Harga Ukuran</label>
                              <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="number" class="form-control" name="harga_ukuran" required>
                              </div>
                            </div>
                          </div>
                        </div> <!-- /box-body -->
                        <div class="box-footer">
                          <div class="col-xs-6">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                      </form>

                    </div> <!-- /tab-3 -->
                  </div>
              </div>

            </div>

            <!-- Show Alert -->
            <?php if($this->session->flashdata("success")): ?>
              <button class="success" id="messages"></button>
            <?php endif; ?>
            <?php if($this->session->flashdata("error")): ?>
              <button class="error" id="messages"></button>
            <?php endif; ?>

          </div>
        </section>

      </div>
      <?php $this->load->view("templates/footer") ?>
      <div class="control-sidebar-bg"></div>
    </div>
    <?php $this->load->view("templates/script") ?>
    <script>
      $(document).ready(function() {
        $("#messages").trigger('click');
      });
      $(".success").click(function(){
        $.bootstrapGrowl('<?= $this->session->flashdata("success") ?>',{
            type: 'success',
            delay: 2000,
        });
      });
      $(".error").click(function(){
        $.bootstrapGrowl('<?= $this->session->flashdata("error") ?>',{
            type: 'danger',
            delay: 2000,
        });
      });
    </script>
  </body>
</html>
