<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Rincian Data Pemohon</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel mt-2">
                    <div class="x_content">

                        <form style="font-size: 14px !important">
                            <span class="section">Data Pribadi Pemohon</span>

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Nama Lengkap</label>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $pemohon['nama_pemohon'] ?></strong>
                                </div>
                                <div class="col-sm-3">
                                    <a href="<?= base_url(); ?>Panitiadesa/delete_pemohon/<?= $pemohon['id_pemohon']; ?>" class="btn btn-danger btn-sm" style="float: right; margin-right:5%;" onclick="return confirm('Apakah Anda yakin ingin menghapus data?');"><i class="fa fa-trash"></i> Hapus </a>
                                    <a href="<?= base_url(); ?>Panitiadesa/edit_pemohon/<?= $pemohon['id_pemohon']; ?>" class="btn btn-success btn-sm" style="float: right; margin-right:5%;"><i class="fa fa-pencil-square-o"></i> Edit </a>
                                </div>
                            </div>

                            <div class=" field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Nomor Induk Kependudukan (NIK)</label>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $pemohon['NIK'] ?></strong>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Tempat, Tanggal Lahir (TTL)</label>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $pemohon['tempat_lahir'] . ', ' . $pemohon['tanggal_lahir'] ?></strong>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Jenis Kelamin</label>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $pemohon['jenis_kelamin'] ?></strong>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Agama</label>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $pemohon['agama'] ?></strong>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Pekerjaan</label>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $pemohon['pekerjaan'] ?></strong>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Kecamatan</label>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $pemohon['nama_kecamatan'] ?></strong>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Desa</label>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $pemohon['nama_desa'] ?></strong>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Dusun</label>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $pemohon['nama_dusun'] ?></strong>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Alamat Domisili</label>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $pemohon['alamat'] ?></strong>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><strong>Permohonan</strong></h2>
                        <ul class="nav navbar-right panel_toolbox" style="min-width: 45px !important">
                            <li><a href="<?= base_url(); ?>Panitiadesa/detail_pemohon/<?= $pemohon['id_pemohon']; ?>/add_permohonan" role="button" style="float: right; height: 15%; width: 100%; color:darkcyan"><i class="fa fa-plus"></i><strong> Tambah Permohonan</strong></a>
                            </li>
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <?php if ($permohonan == null) : ?>
                        <div class="x_content" style="margin-top: 0% !important">
                            <p class="mt-3" style="text-align:center; font-size: 14px; font-style:italic !important">Belum ada permohonan</p>
                        </div>
                    <?php else : ?>
                        <div class="x_content" style="margin-top: 0% !important">
                            <form class="form-label-left input_mask" style="font-size: 14px !important">
                                <?php foreach ($permohonan as $pmh) : ?>
                                    <div class="card mt-3" style="border-color:#9a9d9e8c">
                                        <div class="card-body row">
                                            <div class="col-sm-12">
                                                <p class="col-form-label card-text col-sm-2 text-black-50" style="margin-left: 20px !important">NIB</p>
                                                <p class="col-form-label card-text col-sm-6 text-black-50"><strong><?= $pmh['NIB'] ?></strong></p>
                                                <p class="col-form-label card-text text-black-50" style="float: right !important;">Tanggal input: <?= $pmh['tanggal'] ?></p>
                                            </div>

                                            <div class="col-sm-12">
                                                <p class="col-form-label card-text col-sm-2 text-black-50" style="margin-left: 20px !important">Nomor berkas</p>
                                                <p class="col-form-label card-text col-sm-6 text-black-50"><strong><?= $pmh['no_berkas'] ?></strong></p>
                                            </div>

                                            <div class="col-sm-12">
                                                <p class="col-form-label card-text col-sm-2 text-black-50" style="margin-left: 20px !important">Kluster</p>
                                                <p class="col-form-label card-text col-sm-6 text-black-50"><strong><?= $pmh['kluster'] ?></strong></p>
                                            </div>
                                            <div class="col-sm-12">
                                                <a href="<?= base_url(); ?>Panitiadesa/detail_permohonan/<?= $pemohon['id_pemohon']; ?>/<?= $pmh['id_permohonan']; ?>" class="btn btn-primary btn-sm" style="float: right;">Lihat detail permohonan</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                            </form>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            </form>
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



<!-- <div class="container">
    <div class="row mt-3">
        <div class="col md-12">

            <div class="card">
                <div class="card-header">
                    <h4>Rincian Data Pemohon</h4>
                </div>

                <div class="card-body">

                    <form>
                        <div class="form-group row">
                            <label class="col-sm-2">Nama Lengkap</label>
                            <div class="col-sm-8">
                                <strong><?= $pemohon['nama_pemohon'] ?></strong>
                            </div>
                            <div class="col-sm-2">
                                <a href="<?= base_url(); ?>Panitiadesa/delete_pemohon/<?= $pemohon['id_pemohon']; ?>" class="btn btn-danger btn-sm ml-2" style="float: right" onclick="return confirm('Apakah Anda yakin ingin menghapus data?');">Hapus</a>
                                <a href="<?= base_url(); ?>Panitiadesa/edit_pemohon/<?= $pemohon['id_pemohon']; ?>" class="btn btn-success btn-sm" style="float: right;">Edit</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2">NIK</label>
                            <div class="col-sm-8">
                                <strong><?= $pemohon['NIK'] ?></strong>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <strong><?= $pemohon['jenis_kelamin'] ?></strong>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2">Desa</label>
                            <div class="col-sm-8">
                                <strong><?= $pemohon['nama_desa'] ?></strong>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2">Dusun</label>
                            <div class="col-sm-8">
                                <strong><?= $pemohon['nama_dusun'] ?></strong>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2">Tempat lahir</label>
                            <div class="col-sm-8">
                                <strong><?= $pemohon['tempat_lahir'] ?></strong>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2">Tanggal lahir</label>
                            <div class="col-sm-8">
                                <strong><?= $pemohon['tanggal_lahir'] ?></strong>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2">Pekerjaan</label>
                            <div class="col-sm-8">
                                <strong><?= $pemohon['pekerjaan'] ?></strong>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2">Agama</label>
                            <div class="col-sm-8">
                                <strong><?= $pemohon['agama'] ?></strong>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>


            <div class="card mt-2">
                <div class="card-body">
                    <div class="row">
                        <h5 class="card-title col-sm-10">Permohonan</h5>
                        <div class="col-sm-2">
                            <a href="<?= base_url(); ?>Panitiadesa/detail_pemohon/<?= $pemohon['id_pemohon']; ?>/add_permohonan" class="btn btn-info btn-sm">Tambah Permohonan</a>
                        </div>
                    </div>
                    
                    <?php foreach ($permohonan as $pmh) : ?>
                    <div class="card mt-3">
                        <div class="card-body row">
                            <p class="card-text col-sm-2 text-black-50">NIB</p>
                            <p class="card-text col-sm-6 text-black-50"><?= $pmh['NIB'] ?></p>
                            <p class="card-text col-sm-4 text-black-50">Create date: <?= $pmh['tanggal'] ?></p>
                            
                            <p class="card-text col-sm-2 text-black-50">Nomor berkas</p>
                            <p class="card-text col-sm-10 text-black-50"><?= $pmh['no_berkas'] ?></p>
                                
                            <p class="card-text col-sm-2 text-black-50">Kluster</p>
                            <p class="card-text col-sm-10 text-black-50"><?= $pmh['kluster'] ?></p>

                           <a href="<?= base_url(); ?>Panitiadesa/detail_permohonan/<?= $pemohon['id_pemohon']; ?>/<?= $pmh['id_permohonan']; ?>" class="card-link">Lihat detail permohonan</a>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>

        </div>
    </div>
</div> -->