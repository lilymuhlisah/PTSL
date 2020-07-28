<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Rincian Data Pengguna</h3>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel mt-2">
                <div class="x_content">
                    <!-- <span class="section">Data Pribadi Pemohon</span> -->

                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Nama Lengkap</label>
                        <div class="col-form-label col-md-6 col-sm-6">
                            <strong><?= $u_pengguna['nama_lengkap'] ?></strong>
                        </div>
                        <div class="col-sm-3">
                            <a href="<?= base_url(); ?>admin/delete_user/<?= $u_pengguna['id_pengguna']; ?>" class="btn btn-danger btn-sm" style="float: right; margin-right:5%;" onclick="return confirm('Apakah Anda yakin ingin menghapus data?');"><i class="fa fa-trash"></i> Hapus </a>
                            <a href="<?= base_url(); ?>admin/edit_userdesa/<?= $u_pengguna['id_pengguna']; ?>" class="btn btn-success btn-sm" style="float: right; margin-right:5%;"><i class="fa fa-pencil-square-o"></i> Edit </a>
                        </div>
                    </div>

                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Jabatan</label>
                        <div class="col-form-label col-md-6 col-sm-6">
                            <strong><?= $u_pengguna['jabatan']; ?></strong>
                        </div>
                    </div>

                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Kecamatan</label>
                        <div class="col-form-label col-md-6 col-sm-6">
                            <strong><?= $u_pengguna['nama_kecamatan'] ?></strong>
                        </div>
                    </div>

                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Desa</label>
                        <div class="col-form-label col-md-6 col-sm-6">
                            <strong><?= $u_pengguna['nama_desa'] ?></strong>
                        </div>
                    </div>


                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Email</label>
                        <div class="col-form-label col-md-6 col-sm-6">
                            <strong><?= $u_pengguna['email']; ?></strong>
                        </div>
                    </div>

                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Username</label>
                        <div class="col-form-label col-md-6 col-sm-6">
                            <strong><?= $u_pengguna['username']; ?></strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /page content -->

<!-- jQuery -->
<script src="<?= base_url('asset/'); ?>js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url('asset/'); ?>/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('asset/'); ?>js/fastclick.js"></script>
<!-- NProgress -->
<script src="<?= base_url('asset/'); ?>js/nprogress.js"></script>
<!-- bootstrap-progressbar -->
<script src="<?= base_url('asset/'); ?>js/form-detail/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url('asset/'); ?>js/form-detail/icheck.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?= base_url('asset/'); ?>js/form-detail/moment.min.js"></script>
<script src="<?= base_url('asset/'); ?>js/form-detail/daterangepicker.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="<?= base_url('asset/'); ?>js/form-detail/bootstrap-wysiwyg.min.js"></script>
<script src="<?= base_url('asset/'); ?>js/form-detail/jquery.hotkeys.js"></script>
<script src="<?= base_url('asset/'); ?>js/form-detail/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="<?= base_url('asset/'); ?>js/form-detail/jquery.tagsinput.js"></script>
<!-- Switchery -->
<script src="<?= base_url('asset/'); ?>js/form-detail/switchery.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url('asset/'); ?>js/form-detail/select2.full.min.js"></script>
<!-- Parsley -->
<script src="<?= base_url('asset/'); ?>js/form-detail/parsley.min.js"></script>
<!-- Autosize -->
<script src="<?= base_url('asset/'); ?>js/form-detail/autosize.min.js"></script>
<!-- jQuery autocomplete -->
<script src="<?= base_url('asset/'); ?>js/form-detail/jquery.autocomplete.min.js"></script>
<!-- starrr -->
<script src="<?= base_url('asset/'); ?>js/form-detail/starrr.js"></script>
<!-- Custom Theme Scripts -->
<script src="<?= base_url('asset/'); ?>/js/custom.min.js"></script>

</body>

</html>