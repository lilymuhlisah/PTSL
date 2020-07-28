<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Formulir Tambah Data Pengguna</h3>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel mt-2">
                <div class="x_content">
                    <form class="" action="" method="post" novalidate style="font-size: 14px !important">
                        <!-- <span class="section">Data Pribadi Pemohon</span> -->

                        <div class="field item form-group">
                            <label for="nama_lengkap" class="col-form-label col-md-3 col-sm-3  label-align">Nama Lengkap<span style="color:red">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" id="nama_lengkap" name="nama_lengkap" value="<?= set_value('nama_lengkap'); ?>">
                                <?= form_error('nama_lengkap', '<small class="form-text text-danger text-left">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label for="kecamatan" class="col-form-label col-md-3 col-sm-3  label-align">Kecamatan<span style="color:red">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" id="kecamatan" name="kecamatan" value="<?= set_value('kecamatan'); ?>">
                                    <option selected disabled value="">Pilih Kecamatan</option>
                                    <?php foreach ($kecamatan as $kc) : ?>
                                        <option value="<?= $kc['id_kecamatan']; ?>"><?= $kc['nama_kecamatan']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('kecamatan', '<small class="form-text text-danger text-left">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label for="desa" class="col-form-label col-md-3 col-sm-3  label-align">Desa<span style="color:red">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" id="desa" name="desa" value="<?= set_value('desa'); ?>">
                                    <option selected disabled value="">Pilih Desa</option>
                                </select>
                                <?= form_error('desa', '<small class="form-text text-danger text-left">', '</small>'); ?>
                            </div>
                        </div>

                        <div class=" field item form-group">
                            <label for="jabatan" class="col-form-label col-md-3 col-sm-3  label-align">Jabatan<span style="color:red">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" id="jabatan" name="jabatan" value="<?= set_value('jabatan'); ?>">
                                <?= form_error('jabatan', '<small class="form-text text-danger text-left">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label for="email" class="col-form-label col-md-3 col-sm-3  label-align">Email<span style="color:red">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" id="email" name="email" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="form-text text-danger text-left">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label for="username" class="col-form-label col-md-3 col-sm-3  label-align">Username<span style="color:red">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" id="username" name="username" value="<?= set_value('username'); ?>">
                                <?= form_error('username', '<small class="form-text text-danger text-left">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label for="password" class="col-form-label col-md-3 col-sm-3  label-align">Kata Sandi</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="password" id="password1" name="password1">
                                <?= form_error('password1', '<small class="form-text text-danger text-left">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label for="password" class="col-form-label col-md-3 col-sm-3  label-align">Konfirmasi Kata Sandi</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="password" id="password2" name="password2">
                            </div>
                        </div>

                        <div class="ln_solid">
                            <div class="form-group">
                                <div class="col-md-12" style="justify-content:center; display:flex;">
                                    <button type='submit' name="add" class="btn btn-success mt-3"><i class="fa fa-send-o"></i> Kirim </button>
                                </div>
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
<script src="<?= base_url('asset/'); ?>js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('asset/'); ?>js/fastclick.js"></script>
<!-- NProgress -->
<script src="<?= base_url('asset/'); ?>js/nprogress.js"></script>
<!-- validator -->
<!-- <script src="../vendors/validator/validator.js"></script> -->

<!-- Custom Theme Scripts -->
<script src="<?= base_url('asset/'); ?>js/custom.min.js"></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#kecamatan').change(function() {
            var id = $(this).val();
            $.ajax({
                url: "<?php echo base_url(); ?>Admin/getDesa/" + id,
                method: "GET",
                //data : {id: id},
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<option value=' + data[i].id_desa + '>' + data[i].nama_desa + '</option>';
                    }
                    $('#desa').html(html);

                }
            });
        });
    });
</script>