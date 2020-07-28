<head>
  <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

  <link href="<?= base_url('asset/'); ?>css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('asset/'); ?>css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('asset/'); ?>css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('asset/'); ?>css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('asset/'); ?>css/scroller.bootstrap.min.css" rel="stylesheet">
</head>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Selamat Datang, <small><?= $u_login['nama_lengkap']; ?></small></h3>
      </div>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 mt-3">
      <div class="x_panel">
        <div class="x_title">
          <h2>Daftar Pemohon</h2>

          <div class="nav navbar-right panel_toolbox">
            <div class="title_right">
              <div class="col-md-12 col-sm-12 mt-2">
                <a href="<?= base_url(); ?>Panitiadesa/add_pemohon" role="button" style="float: right; height: 15%; width: 100%; color:darkcyan; font-size:14px"><i class="fa fa-plus"></i><strong> Tambah Data Pemohon</strong></a>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>
        </div>

        <div class="x_content">
          <div class="row">
            <div class="col-sm-12">
              <div class="card-box table-responsive">
                <!-- <p class="text-muted font-13 m-b-30">
                      DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                    </p> -->

                <?php if ($this->session->flashdata('flash_add')) : ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p style="font-family:-apple-system, BlinkMacSystemFont, sans-serif; font-size:110%;">Data Pemohon <strong>berhasil </strong><?= $this->session->flashdata('flash_add'); ?>.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button></p>
                  </div>
                <?php endif; ?>

                <?php if ($this->session->flashdata('flash_delete')) : ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <p style="font-family:-apple-system, BlinkMacSystemFont, sans-serif; font-size:110%;">Data Pemohon <strong>berhasil </strong><?= $this->session->flashdata('flash_delete'); ?>.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button></p>
                  </div>
                <?php endif; ?>


                <table class="table table-striped table-bordered" style="width:100%; font-size:14px">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Lengkap</th>
                      <th>NIK</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Jenis Kelamin</th>
                      <th>Dusun</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>

                  <?php $i = 1;
                  foreach ($pemohon as $pmh) : ?>
                    <tbody>
                      <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $pmh['nama_pemohon']; ?></td>
                        <td><?= $pmh['NIK']; ?></td>
                        <td><?= $pmh['tempat_lahir']; ?></td>
                        <td><?= $pmh['tanggal_lahir']; ?></td>
                        <td><?= $pmh['jenis_kelamin']; ?></td>
                        <!--<td><?= $pmh['nama_desa']; ?></td>-->
                        <td><?= $pmh['nama_dusun']; ?></td>
                        <td><a href="<?= base_url(); ?>Panitiadesa/detail_pemohon/<?= $pmh['id_pemohon']; ?>" class="btn btn-info btn-sm">Lihat Detail</a></td>

                      <?php endforeach; ?>
                      </tr>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /page content -->
</div>
</div>

<!-- jQuery -->
<script src="asset/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="asset/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="asset/js/fastclick.js"></script>
<!-- NProgress -->
<script src="asset/js/nprogress.js"></script>
<!-- iCheck -->
<script src="asset/js/icheck.min.js"></script>
<!-- Datatables -->
<script src="asset/js/datatables/jquery.dataTables.min.js"></script>
<script src="asset/js/datatables/dataTables.bootstrap.min.js"></script>
<script src="asset/js/datatables/dataTables.buttons.min.js"></script>
<script src="asset/js/datatables/buttons.bootstrap.min.js"></script>
<script src="asset/js/datatables/buttons.flash.min.js"></script>
<script src="asset/js/datatables/buttons.html5.min.js"></script>
<script src="asset/js/datatables/buttons.print.min.js"></script>
<script src="asset/js/datatables/dataTables.fixedHeader.min.js"></script>
<script src="asset/js/datatables/dataTables.keyTable.min.js"></script>
<script src="asset/js/datatables/dataTables.responsive.min.js"></script>
<script src="asset/js/datatables/responsive.bootstrap.js"></script>
<script src="asset/js/datatables/dataTables.scroller.min.js"></script>
<script src="asset/js/datatables/jszip.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="asset/js/custom.min.js"></script>

</body>

</html>