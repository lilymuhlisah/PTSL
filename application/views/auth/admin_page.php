<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Selamat Datang,
                    <small><?= $u_login['nama_lengkap'] ?></small>
                </h3>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <?php if ($this->session->flashdata('flash_add')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p style="font-family:-apple-system, BlinkMacSystemFont, sans-serif; font-size:110%;">Data Pengguna <strong>berhasil </strong><?= $this->session->flashdata('flash_add'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button></p>
        </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('flash_delete')) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <p style="font-family:-apple-system, BlinkMacSystemFont, sans-serif; font-size:110%;">Data Pengguna <strong>berhasil </strong><?= $this->session->flashdata('flash_delete'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button></p>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-md-12 col-sm-12 mt-3">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Daftar Pengguna</h2>

                    <div class="nav navbar-right panel_toolbox">
                        <div class="title_right">
                            <div class="col-md-12 col-sm-12 mt-2">
                                <a href="<?= base_url(); ?>admin/add_userkantah" role="button" style="float: right; height: 15%; width: 100%; color:darkcyan; font-size:14px"><i class="fa fa-plus"></i><strong> Tambah Data Pengguna</strong></a>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">

                                <table class="table table-striped table-bordered" style="width:100%; font-size:14px">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pengguna</th>
                                            <th>NIP</th>
                                            <th>Jabatan</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>

                                    <?php $i = 1;
                                    foreach ($u_pengguna as $user) : ?>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><?= $i++; ?></th>
                                                <td><?= $user['nama_lengkap']; ?></td>
                                                <td><?= $user['nip']; ?></td>
                                                <td><?= $user['jabatan']; ?></td>
                                                <td><?= $user['username']; ?></td>
                                                <td><?= $user['email']; ?></td>
                                                <td><a href="<?= base_url(); ?>admin/detail_userkantah/<?= $user['id_pengguna']; ?>" class="btn btn-info btn-sm">Lihat Detail</a></td>

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
<script src="<?= base_url('asset/'); ?>js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url('asset/'); ?>js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('asset/'); ?>js/fastclick.js"></script>
<!-- NProgress -->
<script src="<?= base_url('asset/'); ?>js/nprogress.js"></script>
<!-- iCheck -->
<script src="<?= base_url('asset/'); ?>js/icheck.min.js"></script>
<!-- Datatables -->
<script src="<?= base_url('asset/'); ?>js/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('asset/'); ?>js/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url('asset/'); ?>js/datatables/dataTables.buttons.min.js"></script>
<script src="<?= base_url('asset/'); ?>js/datatables/buttons.bootstrap.min.js"></script>
<script src="<?= base_url('asset/'); ?>js/datatables/buttons.flash.min.js"></script>
<script src="<?= base_url('asset/'); ?>js/datatables/buttons.html5.min.js"></script>
<script src="<?= base_url('asset/'); ?>js/datatables/buttons.print.min.js"></script>
<script src="<?= base_url('asset/'); ?>js/datatables/dataTables.fixedHeader.min.js"></script>
<script src="<?= base_url('asset/'); ?>js/datatables/dataTables.keyTable.min.js"></script>
<script src="<?= base_url('asset/'); ?>js/datatables/dataTables.responsive.min.js"></script>
<script src="<?= base_url('asset/'); ?>js/datatables/responsive.bootstrap.js"></script>
<script src="<?= base_url('asset/'); ?>js/datatables/dataTables.scroller.min.js"></script>
<script src="<?= base_url('asset/'); ?>js/datatables/jszip.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?= base_url('asset/'); ?>js/custom.min.js"></script>

</body>

</html>