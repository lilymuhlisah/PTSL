<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Formulir Tambah Data Pemohon</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel mt-2">
                    <div class="x_content">
                        <form class="" action="" method="post" novalidate style="font-size: 14px !important">
                            <span class="section">Data Pribadi Pemohon</span>

                            <div class="field item form-group">
                                <label for="nama_lengkap" class="col-form-label col-md-3 col-sm-3  label-align">Nama Lengkap<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nama_lengkap" name="nama_lengkap">
                                    <small class="form-text text-danger"><?= form_error('nama_lengkap'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="nik" class="col-form-label col-md-3 col-sm-3  label-align">Nomor Induk Kependudukan (NIK)<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nik" name="nik">
                                    <small class="form-text text-danger"><?= form_error('nik'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="jenis_kelamin" class="col-form-label col-md-3 col-sm-3  label-align">Jenis Kelamin<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                        <option selected disabled value="">Pilih Jenis Kelamin</option>
                                        <?php foreach ($jenis_kelamin as $jk) : ?>
                                            <option value="<?= $jk; ?>"><?= $jk; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="tempat_lahir" class="col-form-label col-md-3 col-sm-3  label-align">Tempat Lahir<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="tempat_lahir" name="tempat_lahir">
                                    <small class="form-text text-danger"><?= form_error('tempat_lahir'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="tanggal_lahir" class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Lahir<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="date" id="tanggal_lahir" name="tanggal_lahir">
                                    <small class="form-text text-danger"><?= form_error('tanggal_lahir'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="agama" class="col-form-label col-md-3 col-sm-3  label-align">Agama</label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="form-control" id="agama" name="agama">
                                        <option selected disabled value="">Pilih Agama</option>
                                        <?php foreach ($agama as $ag) : ?>
                                            <option value="<?= $ag; ?>"><?= $ag; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="pekerjaan" class="col-form-label col-md-3 col-sm-3  label-align">Pekerjaan</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="pekerjaan" name="pekerjaan">
                                </div>
                            </div>

                            <span class="section mt-3">Data Domisili</span>

                            <div class="field item form-group">
                                <label for="kecamatan" class="col-form-label col-md-3 col-sm-3  label-align">Kecamatan<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="form-control" id="kecamatan" name="kecamatan">
                                        <option selected disabled value="">Pilih Kecamatan</option>
                                        <?php foreach ($kecamatan as $kc) : ?>
                                            <!--untuk set nilai kecamatan sesuai dengan pilihan sendiri-->
                                            <!-- <option value="<?= $kc['id_kecamatan']; ?>"><?= $kc['nama_kecamatan']; ?></option> -->

                                            <!--untuk set nilai kecamatannya jadi default sesuai sm panitia desa yg login-->
                                            <?php if ($kc['id_kecamatan'] == $u_login['id_kecamatan']) : ?>
                                                <option value="<?= $kc['id_kecamatan']; ?>" selected><?= $kc['nama_kecamatan']; ?></option>
                                            <?php endif; ?>

                                        <?php endforeach; ?>
                                    </select>
                                    <small class="form-text text-danger"><?= form_error('kecamatan'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="desa" class="col-form-label col-md-3 col-sm-3  label-align">Desa<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="form-control" id="desa" name="desa">
                                        <!--untuk set nilai kecamatan sesuai dengan pilihan sendiri-->
                                        <!-- <option selected disabled value="">Pilih Desa</option> -->

                                        <!--untuk set nilai kecamatannya jadi default sesuai sm panitia desa yg login-->
                                        <option selected value="<?= $u_login['id_desa']; ?> selected"><?= $u_login['nama_desa']; ?></option>
                                    </select>
                                    <small class="form-text text-danger"><?= form_error('desa'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="nama_dusun" class="col-form-label col-md-3 col-sm-3  label-align">Dusun<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nama_dusun" name="nama_dusun">
                                    <small class="form-text text-danger"><?= form_error('nama_dusun'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="alamat" class="col-form-label col-md-3 col-sm-3  label-align">Alamat Domisili<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="alamat" name="alamat">
                                    <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                                </div>
                            </div>

                            <div class="ln_solid">
                                <div class="form-group">
                                    <div class="col-md-12" style="justify-content:center; display:flex;">
                                        <button type='submit' name="add" class="btn btn-success mt-3"><i class="fa fa-save"></i> Simpan </button>
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

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="<?= base_url('asset/'); ?>js/form-input/multifield.js"></script>
        <script src="<?= base_url('asset/'); ?>js/form-input/validator.js"></script> -->

<!-- <script>
        // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
        var validator = new FormValidator({
            "events": ['blur', 'input', 'change']
        }, document.forms[0]);
        // on form "submit" event
        document.forms[0].onsubmit = function(e) {
            var submit = true,
                validatorResult = validator.checkAll(this);
            console.log(validatorResult);
            return !!validatorResult.valid;
        };
        // on form "reset" event
        document.forms[0].onreset = function(e) {
            validator.reset();
        };
        // stuff related ONLY for this demo page:
        $('.toggleValidationTooltips').change(function() {
            validator.settings.alerts = !this.checked;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);
    </script> -->

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
                url: "<?php echo base_url(); ?>Panitiadesa/getDesa/" + id,
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





<!-- <div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                Formulir Tambah Data Pemohon
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                            <small class="form-text text-danger"><?= form_error('nama_lengkap'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik">
                            <small class="form-text text-danger"><?= form_error('nik'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option selected disabled value="">Pilih Jenis Kelamin</option>
                                <?php foreach ($jenis_kelamin as $jk) : ?>
                                    <option value="<?= $jk; ?>"><?= $jk; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                            <small class="form-text text-danger"><?= form_error('tempat_lahir'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                            <small class="form-text text-danger"><?= form_error('tanggal_lahir'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <select class="form-control" id="kecamatan" name="kecamatan">
                            <option selected disabled value="">Pilih Kecamatan</option>
                                <?php foreach ($kecamatan as $kc) : ?>
                                    <option value="<?= $kc['id_kecamatan']; ?>"><?= $kc['nama_kecamatan']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('kecamatan'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="desa">Desa</label>
                            <select class="form-control" id="desa" name="desa">
                            <option selected disabled value="">Pilih Desa</option>
                            </select>
                            <small class="form-text text-danger"><?= form_error('desa'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="nama_dusun">Dusun</label>
                            <input type="text" class="form-control" id="nama_dusun" name="nama_dusun">
                            <small class="form-text text-danger"><?= form_error('nama_dusun'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <select class="form-control" id="agama" name="agama">
                                <option selected disabled value="">Pilih Agama</option>
                                <?php foreach ($agama as $ag) : ?>
                                    <option value="<?= $ag; ?>"><?= $ag; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
                        </div>

                        <button type="submit" name="add" class="btn btn-primary mt-3">Kirim</button>
                        
                    </form>
                </div>
            </div>
        </div>    
    </div>
    
</div> -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#kecamatan').change(function(){
            var id=$(this).val();
            $.ajax({
                url : "<?php echo base_url(); ?>Panitiadesa/getDesa/"+id,
                method : "GET",
                //data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].id_desa+'>'+data[i].nama_desa+'</option>';
                    }
                    $('#desa').html(html);
                     
                }
            });
        });
    });
</script>

</body>
</html> -->