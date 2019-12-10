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
            <small>Bahan Produk</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Bahan Produk</li>
          </ol>
        </section>

        <section class="content">
          <div class="row">

            <div class="col-xs-12">
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Data Kain</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <table id="tableKain" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>#NO</th>
                        <th>Nama Kain</th>
                        <th>Warna</th>
                        <th>Harga</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($dataKain as $key => $row): ?>
                        <tr>
                          <td><?= $key + 1 ?></td>
                          <td><?= $row['nm_kain'] ?></td>
                          <td><?= $row['warna_kain'] ?></td>
                          <td><?= $row['harga_kain'] ?></td>
                          <td>
                            <a href="" class="btn btn-info btn-xs">Edit</a>
                            <a href="" class="btn btn-danger btn-xs">Delete</a>
                          </td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="col-xs-6">
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Model Kain</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <table id="tableModel" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>#NO</th>
                        <th>Nama Model</th>
                        <th>Harga</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach($dataModel as $key => $row): ?>
                          <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $row["nm_model"] ?></td>
                            <td><?= $row["harga_model"] ?></td>
                            <td>
                              <a href="" class="btn btn-info btn-xs">Edit</a>
                              <a href="" class="btn btn-danger btn-xs">Delete</a>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="col-xs-6">
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Ukuran Tersedia</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <table id="tableUkuran" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>#NO</th>
                        <th>Ukuran</th>
                        <th>Harga</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($dataUkuran as $key => $row): ?>
                        <tr>
                          <td><?= $key + 1 ?></td>
                          <td><?= $row["kd_ukuran"] ?></td>
                          <td><?= $row["harga_ukuran"] ?></td>
                          <td>
                            <a href="" class="btn btn-info btn-xs">Edit</a>
                            <a href="" class="btn btn-danger btn-xs">Delete</a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
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
    <script type="text/javascript">
      $("#tableKain").DataTable();
      $("#tableModel").DataTable();
      $("#tableUkuran").DataTable();
    </script>
  </body>
</html>
