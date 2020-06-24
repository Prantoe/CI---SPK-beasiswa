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
            <small>Beasiswa</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Beasiswa</li>
          </ol>
        </section>

        <section class="content">
          <div class="row">

            <div class="col-xs-6">
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Data Beasiswa</h3>
                </div>
                <div class="box-body">
                  <table id="tableBeasiswa" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>#NO</th>
                        <th>Nama Beasiswa</th>
                        <th>Syarat</th>
                        <th>Periode</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach($beasiswa as $key => $row): ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $row["nm_beasiswa"] ?></td>
                                <td><?= $row["syarat"] ?></td>
                                <td><?= $row["periode"] ?></td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#beasiswaEdit<?= $row["kd_beasiswa"] ?>"><i class="fa fa-pencil"></i></a>
                                    <a href="<?= base_url("dashboard/deleteBeasiswa/").$row["kd_beasiswa"] ?>" class="btn btn-danger btn-xs" ><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                  </table>
                  <button class="btn btn-success" data-toggle="modal" data-target="#beasiswaAdd">Tambah Data Beasiswa</button> 
                </div>
              </div>
            </div>

            <div class="col-xs-6">
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Data Penerima</h3>
                </div>
                <div class="box-body">
                  <table id="tablePenerima" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>#NO</th>
                        <th>Nama Mahasiswa</th>
                        <th>Semester</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach($penerima as $row): ?>
                            <tr>
                                <td><?= $row["NIM"] ?></td>
                                <td><?= $row["nm_mhs"] ?></td>
                                <td><?= $row["semester"] ?></td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#penerimaEdit<?= $row["NIM"] ?>"><i class="fa fa-pencil"></i></a>
                                    <a href="<?= base_url("dashboard/deletePenerima/").$row["NIM"] ?>" class="btn btn-danger btn-xs" ><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                  </table>
                  <button class="btn btn-success" data-toggle="modal" data-target="#penerimaAdd">Tambah Data Penerima</button> 
                </div>
              </div>
            </div>

            <!-- Modal Tambah Beasiswa -->
            <div class="modal fade" id="beasiswaAdd" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Tambah Data Beasiswa</h4>
                    </div>
                    <form action="<?= base_url("dashboard/tambahBeasiswa") ?>" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nama Beasiswa</label>
                                <input type="text" name="nm_beasiswa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Syarat</label>
                                <input type="text" name="syarat" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Periode</label>
                                <input type="text" name="periode" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
            <!-- /Modal Tambah Beasiswa -->
            
            <!-- Modal Edit Beasiswa -->
            <?php foreach($beasiswa as $row): ?>
            <div class="modal fade" id="beasiswaEdit<?= $row["kd_beasiswa"] ?>" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Tambah Data Beasiswa</h4>
                    </div>
                    <form action="<?= base_url("dashboard/updateBeasiswa") ?>" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nama Beasiswa</label>
                                <input type="text" name="nm_beasiswa" class="form-control" value="<?= $row["nm_beasiswa"] ?>">
                                <input type="hidden" name="kd_beasiswa" value="<?= $row["kd_beasiswa"] ?>">
                            </div>
                            <div class="form-group">
                                <label>Syarat</label>
                                <input type="text" name="syarat" class="form-control" value="<?= $row["syarat"] ?>">
                            </div>
                            <div class="form-group">
                                <label>Periode</label>
                                <input type="text" name="periode" class="form-control" value="<?= $row["periode"] ?>">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
            <?php endforeach ?>
            <!-- /Modal Edit Beasiswa -->


            <!-- Modal Tambah Penerima -->
            <div class="modal fade" id="penerimaAdd" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Tambah Data Penerima</h4>
                    </div>
                    <form action="<?= base_url("dashboard/tambahPenerima") ?>" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>NIM</label>
                                <input type="text" name="NIM" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nama Mahasiswa</label>
                                <input type="text" name="nm_mhs" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Semester</label>
                                <input type="text" name="semester" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
            <!-- /Modal Tambah Penerima -->

            <!-- Modal Edit Penerima -->
            <?php foreach($penerima as $row): ?>
            <div class="modal fade" id="penerimaEdit<?= $row["NIM"] ?>" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Tambah Data Penerima</h4>
                    </div>
                    <form action="<?= base_url("dashboard/updatePenerima") ?>" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>NIM</label>
                                <input type="text" name="NIM" class="form-control" value="<?= $row["NIM"] ?>" disabled>
                                <input type="hidden" name="NIM" value="<?= $row["NIM"] ?>">
                            </div>
                            <div class="form-group">
                                <label>Nama Mahasiswa</label>
                                <input type="text" name="nm_mhs" class="form-control" value="<?= $row["nm_mhs"] ?>" disabled>
                                <input type="hidden" name="nm_mhs" value="<?= $row["nm_mhs"] ?>">
                            </div>
                            <div class="form-group">
                                <label>Semester</label>
                                <input type="text" name="semester" class="form-control" value="<?= $row["semester"] ?>">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
            <?php endforeach ?>
            <!-- /Modal Edit Penerima -->

          </div>
        </section>

      </div>
      <?php $this->load->view("templates/footer") ?>
      <div class="control-sidebar-bg"></div>
    </div>
    <?php $this->load->view("templates/script") ?>
    <script>
        $("#tableBeasiswa").DataTable();
        $("#tablePenerima").DataTable();
    </script>
  </body>
</html>