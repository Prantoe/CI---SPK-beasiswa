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
            <small>Customers</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Customers</li>
          </ol>
        </section>

        <section class="content">
          <div class="row">
          
            <div class="col-xs-12">
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Data Customers</h3>
                </div>
                <div class="box-body">
                  <table id="tableCustomers" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>#NO</th>
                        <th>Nama Customers</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Kontak</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach($dataCustomers as $key => $row): ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $row["nm_cust"] ?></td>
                                <td><?= $row["jns_kel"] ?></td>
                                <td><?= $row["alamat"] ?></td>
                                <td><?= $row["kontak"] ?></td>
                                <td>
                                    <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#modalEdit<?= $row["id_cust"] ?>">Edit</button>
                                    <a href="<?= base_url("dashboard/delete-customer/").$row["id_cust"] ?>" class="btn btn-danger btn-xs">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <!-- Modal Edit -->
            <?php foreach($dataCustomers as $row): ?>
            <div class="modal fade" id="modalEdit<?= $row["id_cust"] ?>" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                            <h4 class="modal-title">Edit Data Customer</h4>
                        </div>
                        <form action="<?= base_url("dashboard/update-customer") ?>" method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nama Customer</label>
                                    <input type="text" name="nm_cust" class="form-control" value="<?= $row["nm_cust"] ?>">
                                    <input type="hidden" name="id_cust" value="<?= $row["id_cust"] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <input type="text" name="jns_kel" class="form-control" value="<?= $row["jns_kel"] ?>" disabled>
                                    <input type="hidden" name="jns_kel" value="<?= $row["jns_kel"] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" class="form-control" value="<?= $row["alamat"] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Kontak</label>
                                    <input type="text" name="kontak" class="form-control" value="<?= $row["kontak"] ?>">
                                </div> 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div> <!-- /.modal-content -->
                </div> <!-- /.modal-dialog -->
            </div>
            <?php endforeach; ?>

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
    <script type="text/javascript">
        $("#tableCustomers").DataTable();

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
