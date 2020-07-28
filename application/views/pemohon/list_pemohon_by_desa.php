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

                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">

                                <table class="table table-striped table-bordered" style="width:100%; font-size:14px;">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Lengkap</th>
                                            <th scope="col">NIK</th>
                                            <th scope="col">Tempat Lahir</th>
                                            <th scope="col">Tanggal Lahir</th>
                                            <th scope="col">Desa</th>
                                            <th scope="col">Dusun</th>
                                            <th scope="col">Keterangan</th>
                                        </tr>
                                    </thead>

                                    <?php
                                    $i = 1;
                                    foreach ($pemohon as $pmh) : ?>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><?= $i++; ?></th>
                                                <td><?= $pmh['nama_pemohon']; ?></td>
                                                <td><?= $pmh['NIK']; ?></td>
                                                <td><?= $pmh['tempat_lahir']; ?></td>
                                                <td><?= $pmh['tanggal_lahir']; ?></td>
                                                <td><?= $pmh['nama_desa']; ?></td>
                                                <td><?= $pmh['nama_dusun']; ?></td>
                                                <?php if ($this->session->userdata('id_role') == 1) : ?>
                                                    <td><a href="<?= base_url(); ?>kantah_kab_malang/detail_pemohonForKantah/<?= $pmh['id_pemohon']; ?>" class="btn btn-info btn-sm">Lihat Detail</a></td>
                                                <?php elseif ($this->session->userdata('id_role') == 3) : ?>
                                                    <td><a href="<?= base_url(); ?>admin/detail_pemohonForKantah/<?= $pmh['id_pemohon']; ?>" class="btn btn-info btn-sm">Lihat Detail</a></td>
                                                <?php endif; ?>

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


<!-- <div class="container">

    <div class="row mt-3">
        <div class="col-md-12">
            <h3>Daftar Pemohon</h3>

             <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Desa</th>
                        <th scope="col">Dusun</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                
                <?php
                $i = 1;
                foreach ($pemohon as $pmh) : ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $pmh['nama_pemohon']; ?></td>
                        <td><?= $pmh['NIK']; ?></td>
                        <td><?= $pmh['tempat_lahir']; ?></td>
                        <td><?= $pmh['tanggal_lahir']; ?></td>
                        <td><?= $pmh['nama_desa']; ?></td>
                        <td><?= $pmh['nama_dusun']; ?></td>
                        <td><a href="<?= base_url(); ?>Kantah_kab_malang/detail_pemohonForKantah/<?= $pmh['id_pemohon']; ?>" class="btn btn-info btn-sm">Lihat Permohonan</a></td>
                    <?php endforeach; ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div> -->