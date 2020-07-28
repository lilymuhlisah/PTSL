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
                    <h2>Daftar Permohonan</h2>

                    <div class="clearfix"></div>
                </div>

                <div class="row float-right">
                    <div class="col-md-12">
                        <?php if ($this->session->userdata('id_role') == 1) : ?>
                            <form action="<?= base_url('kantah_kab_malang'); ?>" method="get">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" placeholder="Masukkan kata kunci" name="keyword" autocomplete="off">
                                    <div class="input-group-append">
                                        <input class="btn btn-primary" type="submit" name="submit">
                                    </div>
                                </div>
                            </form>
                        <?php elseif ($this->session->userdata('id_role') == 3) : ?>
                            <form action="<?= base_url('admin'); ?>" method="get">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" placeholder="Masukkan kata kunci" name="keyword" autocomplete="off">
                                    <div class="input-group-append">
                                        <input class="btn btn-primary" type="submit" name="submit">
                                    </div>
                                </div>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">

                                <table class="table table-striped table-bordered" style="width:100%; font-size:14px">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pemohon</th>
                                            <th>NIK</th>
                                            <th>Nomor Berkas</th>
                                            <th>NIB</th>
                                            <!-- <th>Letak Tanah (Desa)</th> -->
                                            <th>Letak Tanah (Dusun)</th>
                                            <th>Status Permohonan</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>

                                    <?php foreach ($permohonan as $pmh) : ?>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><?= ++$start; ?></th>
                                                <td><?= $pmh['nama_pemohon']; ?></td>
                                                <td><?= $pmh['NIK']; ?></td>
                                                <td><?= $pmh['no_berkas']; ?></td>
                                                <td><?= $pmh['NIB']; ?></td>
                                                <!-- <td><?= $pmh['nama_desa']; ?></td> -->
                                                <td><?= $pmh['dusun']; ?></td>
                                                <?php if ($pmh['id_status'] == 1) : ?>
                                                    <td>
                                                        <h6><span class="badge badge-danger font-weight-normal"><?= $pmh['status']; ?></span></h6>
                                                    </td>
                                                <?php elseif ($pmh['id_status'] == 2) : ?>
                                                    <td>
                                                        <h6><span class="badge badge-warning font-weight-normal"><?= $pmh['status'] ?></span></h6>
                                                    </td>
                                                <?php elseif ($pmh['id_status'] == 3) : ?>
                                                    <td>
                                                        <h6><span class="badge badge-success font-weight-normal"><?= $pmh['status'] ?></span></h6>
                                                    </td>
                                                <?php endif; ?>

                                                <?php if ($this->session->userdata('id_role') == 1) : ?>
                                                    <td style="white-space: nowrap; padding-right: 20px;">
                                                        <a href="<?= base_url(); ?>kantah_kab_malang/verifikasi_berkas/<?= $pmh['id_pemohon']; ?>/<?= $pmh['id_permohonan']; ?>" class="btn btn-success btn-sm" style="float: left;">Verifikasi</a>
                                                        <a href="<?= base_url(); ?>kantah_kab_malang/detail_permohonanForKantah/<?= $pmh['id_pemohon']; ?>/<?= $pmh['id_permohonan']; ?>" class="btn btn-primary btn-sm">Detail</a>
                                                    </td>
                                                <?php elseif ($this->session->userdata('id_role') == 3) : ?>
                                                    <td style="white-space: nowrap; padding-right: 20px;">
                                                        <a href="<?= base_url(); ?>admin/verifikasi_berkas/<?= $pmh['id_pemohon']; ?>/<?= $pmh['id_permohonan']; ?>" class="btn btn-success btn-sm" style="float: right;">Verifikasi</a>
                                                        <a href="<?= base_url(); ?>admin/detail_permohonanForKantah/<?= $pmh['id_pemohon']; ?>/<?= $pmh['id_permohonan']; ?>" class="btn btn-primary btn-sm">Detail</a>
                                                    </td>
                                                <?php endif; ?>

                                            <?php endforeach; ?>
                                            </tr>
                                        </tbody>
                                </table>

                                <div class="mt-4">
                                    <?= $this->pagination->create_links(); ?>
                                </div>

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