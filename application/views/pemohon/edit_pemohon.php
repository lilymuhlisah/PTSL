<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Formulir Edit Data Pemohon</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel mt-2">
                    <div class="x_content">

                        <form class="" action="" method="post" novalidate style="font-size: 14px !important">
                            <span class="section">Data Pribadi Pemohon</span>

                            <input type="hidden" name="id_pemohon" value="<?= $pemohon['id_pemohon']; ?>">

                            <div class="field item form-group">
                                <label for="nama_lengkap" class="col-form-label col-md-3 col-sm-3  label-align">Nama Lengkap<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nama_lengkap" name="nama_lengkap" value="<?= $pemohon['nama_pemohon']; ?>">
                                    <small class="form-text text-danger"><?= form_error('nama_lengkap'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="nik" class="col-form-label col-md-3 col-sm-3  label-align">Nomor Induk Kependudukan (NIK)<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nik" name="nik" value="<?= $pemohon['NIK']; ?>">
                                    <small class="form-text text-danger"><?= form_error('nik'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="jenis_kelamin" class="col-form-label col-md-3 col-sm-3  label-align">Jenis Kelamin<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                        <?php foreach ($jenis_kelamin as $jk) : ?>
                                            <?php if ($jk == $pemohon['jenis_kelamin']) : ?>
                                                <option value="<?= $jk; ?>" selected><?= $jk; ?></option>
                                            <?php else : ?>
                                                <option value="<?= $jk; ?>"><?= $jk; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="tempat_lahir" class="col-form-label col-md-3 col-sm-3  label-align">Tempat Lahir<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="tempat_lahir" name="tempat_lahir" value="<?= $pemohon['tempat_lahir']; ?>">
                                    <small class="form-text text-danger"><?= form_error('tempat_lahir'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="tanggal_lahir" class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Lahir<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?= $pemohon['tanggal_lahir']; ?>">
                                    <small class="form-text text-danger"><?= form_error('tanggal_lahir'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="agama" class="col-form-label col-md-3 col-sm-3  label-align">Agama</label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="form-control" id="agama" name="agama">
                                        <?php foreach ($agama as $ag) : ?>
                                            <?php if ($ag == $pemohon['agama']) : ?>
                                                <option value="<?= $ag; ?>" selected><?= $ag; ?></option>
                                            <?php else : ?>
                                                <option value="<?= $ag; ?>"><?= $ag; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="pekerjaan" class="col-form-label col-md-3 col-sm-3  label-align">Pekerjaan</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="pekerjaan" name="pekerjaan" value="<?= $pemohon['pekerjaan']; ?>">
                                </div>
                            </div>

                            <span class="section mt-3">Data Domisili</span>

                            <div class="field item form-group">
                                <label for="kecamatan" class="col-form-label col-md-3 col-sm-3  label-align">Kecamatan<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="form-control" id="kecamatan" name="kecamatan">
                                        <option selected disabled value="">Pilih Kecamatan</option>
                                        <?php foreach ($kecamatan as $kc) : ?>
                                            <?php if ($kc['id_kecamatan'] == $pemohon['id_kecamatan']) : ?>
                                                <option value="<?= $kc['id_kecamatan']; ?>" selected><?= $kc['nama_kecamatan']; ?></option>
                                            <?php else : ?>
                                                <option value="<?= $kc['id_kecamatan']; ?>"><?= $kc['nama_kecamatan']; ?></option>
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
                                        <option selected value="<?= $pemohon['id_desa']; ?>" selected><?= $pemohon['nama_desa']; ?></option>
                                    </select>
                                    <small class="form-text text-danger"><?= form_error('desa'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="nama_dusun" class="col-form-label col-md-3 col-sm-3  label-align">Dusun<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nama_dusun" name="nama_dusun" value="<?= $pemohon['nama_dusun']; ?>">
                                    <small class="form-text text-danger"><?= form_error('nama_dusun'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="alamat" class="col-form-label col-md-3 col-sm-3  label-align">Alamat Domisili<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="alamat" name="alamat" value="<?= $pemohon['alamat']; ?>">
                                    <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                                </div>
                            </div>

                            <div class="ln_solid">
                                <div class="form-group mt-3">
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
                        <input type="hidden" name="id_pemohon" value="<?= $pemohon['id_pemohon']; ?>">
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $pemohon['nama_pemohon']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_lengkap'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" value="<?= $pemohon['NIK']; ?>">
                            <small class="form-text text-danger"><?= form_error('nik'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <?php foreach ($jenis_kelamin as $jk) : ?>
                                    <?php if ($jk == $pemohon['jenis_kelamin']) : ?>
                                        <option value="<?= $jk; ?>" selected><?= $jk; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $jk; ?>"><?= $jk; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $pemohon['tempat_lahir']; ?>">
                            <small class="form-text text-danger"><?= form_error('tempat_lahir'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $pemohon['tanggal_lahir']; ?>">
                            <small class="form-text text-danger"><?= form_error('tanggal_lahir'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <select class="form-control" id="kecamatan" name="kecamatan">
                                <?php foreach ($kecamatan as $kc) : ?>
                                    <?php if ($kc['id_kecamatan'] == $pemohon['id_kecamatan']) : ?>
                                        <option value="<?= $kc['id_kecamatan']; ?>" selected><?= $kc['nama_kecamatan']; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $kc['id_kecamatan']; ?>"><?= $kc['nama_kecamatan']; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('kecamatan'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="desa">Desa</label>
                            <select class="form-control" id="desa" name="desa">
                            <option selected value="<?= $pemohon['id_desa']; ?>" selected><?= $pemohon['nama_desa']; ?></option>
                            </select>
                            <small class="form-text text-danger"><?= form_error('desa'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="nama_dusun">Dusun</label>
                            <input type="text" class="form-control" id="nama_dusun" name="nama_dusun" value="<?= $pemohon['nama_dusun']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_dusun'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <select class="form-control" id="agama" name="agama">
                                <?php foreach ($agama as $ag) : ?>
                                    <?php if ($ag == $pemohon['agama']) : ?>
                                        <option value="<?= $ag; ?>" selected><?= $ag; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $ag; ?>"><?= $ag; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $pemohon['pekerjaan']; ?>">
                        </div>

                        <button type="submit" name="add" class="btn btn-primary mt-3">Kirim</button>
                    </form>
                </div>
            </div>
        </div>    
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
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