<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Formulir Tambah Permohonan</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel mt-2">
                    <div class="x_content" style="padding-left: 20px">
                        <form class="" action="" method="post" style="font-size: 14px !important" enctype="multipart/form-data" accept-charset="utf-8">
                            <!-- <span class="section">Data Pribadi Pemohon</span> -->

                            <span class="section mt-2">Data Permohonan</span>

                            <div class="field item form-group">
                                <label for="nib" class="col-form-label col-md-3 col-sm-3  label-align">Nomor Induk Bidang (NIB)<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" required type="text" id="nib" name="nib" value="<?= set_value('nib'); ?>">
                                    <small class="form-text text-danger"><?= form_error('nib'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="no_berkas" class="col-form-label col-md-3 col-sm-3  label-align">Nomor Berkas<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" required type="text" id="no_berkas" name="no_berkas" value="<?= set_value('no_berkas'); ?>">
                                    <small class="form-text text-danger"><?= form_error('no_berkas'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="kluster" class="col-form-label col-md-3 col-sm-3  label-align">Kluster<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="kluster" name="kluster" value="<?= set_value('kluster'); ?>">
                                    <small class="form-text text-danger"><?= form_error('kluster'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="pbt" class="col-form-label col-md-3 col-sm-3  label-align">PBT<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="pbt" name="pbt" value="<?= set_value('pbt'); ?>">
                                    <small class="form-text text-danger"><?= form_error('pbt'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="penggunaan_tanah" class="col-form-label col-md-3 col-sm-3  label-align">Penggunaan Tanah<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="penggunaan_tanah" name="penggunaan_tanah" value="<?= set_value('penggunaan_tanah'); ?>">
                                    <small class="form-text text-danger"><?= form_error('penggunaan_tanah'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="no_hak_milik" class="col-form-label col-md-3 col-sm-3  label-align">Nomor Hak Milik<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="no_hak_milik" name="no_hak_milik" value="<?= set_value('no_hak_milik'); ?>">
                                    <small class="form-text text-danger"><?= form_error('no_hak_milik'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="no_seri_blanko" class="col-form-label col-md-3 col-sm-3  label-align">Nomor Seri Blanko<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="no_seri_blanko" name="no_seri_blanko" value="<?= set_value('no_seri_blanko'); ?>">
                                    <small class="form-text text-danger"><?= form_error('no_seri_blanko'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="kegiatan" class="col-form-label col-md-3 col-sm-3  label-align">Kegiatan<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="form-control" id="kegiatan" name="kegiatan" value="<?= set_value('kegiatan'); ?>">
                                        <!-- <option selected disabled value="">Pilih Kegiatan</option>
                                                <?php foreach ($kegiatan as $kg) : ?>
                                                    <option value="<?= $kg['id_kegiatan']; ?>"><?= $kg['nama_kegiatan']; ?></option>
                                                <?php endforeach; ?> -->
                                        <option selected disabled value="">Pilih Kegiatan</option>
                                        <option value="1">Pendaftaran Tanah Pertama Kali Konversi/Pengakuan/Penegasan Hak </option>
                                        <option value="2">Pendaftaran Tanah Pertama Kali Pemberian Hak </option>
                                        <option value="3">Lainnya </option>
                                    </select>
                                    <small class="form-text text-danger"><?= form_error('kegiatan'); ?></small>
                                </div>
                            </div>

                            <span class="section mt-3">SPPT/Pajak</span>

                            <div class="field item form-group">
                                <label for="no_sppt" class="col-form-label col-md-3 col-sm-3  label-align">Nomor SPPT<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="no_sppt" name="no_sppt" value="<?= set_value('no_sppt'); ?>">
                                    <small class="form-text text-danger"><?= form_error('no_sppt'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="nama_wajib_pajak" class="col-form-label col-md-3 col-sm-3  label-align">Nama Wajib Pajak<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nama_wajib_pajak" name="nama_wajib_pajak" value="<?= set_value('nama_wajib_pajak'); ?>">
                                    <small class="form-text text-danger"><?= form_error('nama_wajib_pajak'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="luas_tanah" class="col-form-label col-md-3 col-sm-3  label-align">Luas Tanah pada SPPT<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="luas_tanah" name="luas_tanah" value="<?= set_value('luas_tanah'); ?>">
                                    <small class="form-text text-danger"><?= form_error('luas_tanah'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="njop" class="col-form-label col-md-3 col-sm-3  label-align">NJOP Tanah per m2 (Rp)<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="njop" name="njop" value="<?= set_value('njop'); ?>">
                                    <small class="form-text text-danger"><?= form_error('njop'); ?></small>
                                </div>
                            </div>


                            <span class="section mt-3">Letak Tanah</span>

                            <div class="field item form-group">
                                <label for="kecamatan" class="col-form-label col-md-3 col-sm-3  label-align">Kecamatan<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="form-control" id="kecamatan" name="kecamatan" value="<?= set_value('kecamatan'); ?>">
                                        <option selected disabled value="">Pilih Kecamatan</option>
                                        <?php foreach ($kecamatan as $kc) : ?>
                                            <option value="<?= $kc['id_kecamatan']; ?>"><?= $kc['nama_kecamatan']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="form-text text-danger"><?= form_error('kecamatan'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="desa" class="col-form-label col-md-3 col-sm-3  label-align">Desa<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="form-control" id="desa" name="desa" value="<?= set_value('desa'); ?>">
                                        <option selected disabled value="">Pilih Desa</option>
                                    </select>
                                    <small class="form-text text-danger"><?= form_error('desa'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="dusun" class="col-form-label col-md-3 col-sm-3  label-align">Dusun<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="dusun" name="dusun" value="<?= set_value('dusun'); ?>">
                                    <small class="form-text text-danger"><?= form_error('dusun'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="rt" class="col-form-label col-md-3 col-sm-3  label-align">RT<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="rt" name="rt" value="<?= set_value('rt'); ?>">
                                    <small class="form-text text-danger"><?= form_error('rt'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="rw" class="col-form-label col-md-3 col-sm-3  label-align">RW<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="rw" name="rw" value="<?= set_value('rw'); ?>">
                                    <small class="form-text text-danger"><?= form_error('rw'); ?></small>
                                </div>
                            </div>


                            <span class="section mt-3">Alas Hak/Letter C</span>

                            <div class="field item form-group">
                                <label for="nama_letterc" class="col-form-label col-md-3 col-sm-3  label-align">Nama Letter C</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nama_letterc" name="nama_letterc" value="<?= set_value('nama_letterc'); ?>">
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="no_letterc" class="col-form-label col-md-3 col-sm-3  label-align">Nomor</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="no_letterc" name="no_letterc" value="<?= set_value('no_letterc'); ?>">
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="persil" class="col-form-label col-md-3 col-sm-3  label-align">Persil</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="persil" name="persil" value="<?= set_value('persil'); ?>">
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="kelas" class="col-form-label col-md-3 col-sm-3  label-align">Kelas</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="kelas" name="kelas" value="<?= set_value('kelas'); ?>">
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="luas_letterc" class="col-form-label col-md-3 col-sm-3  label-align">Luas</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="luas_letterc" name="luas_letterc" value="<?= set_value('luas_letterc'); ?>">
                                </div>
                            </div>


                            <span class="section mt-3">DI. 300</span>

                            <div class="field item form-group">
                                <label for="tanggal_di300" class="col-form-label col-md-3 col-sm-3  label-align">Tanggal</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="date" id="tanggal_di300" name="tanggal_di300" value="<?= set_value('tanggal_di300'); ?>">
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="nomor_di300" class="col-form-label col-md-3 col-sm-3  label-align">Nomor</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nomor_di300" name="nomor_di300" value="<?= set_value('nomor_di300'); ?>">
                                </div>
                            </div>


                            <span class="section mt-3">DI. 302</span>

                            <div class="field item form-group">
                                <label for="tanggal_di302" class="col-form-label col-md-3 col-sm-3  label-align">Tanggal</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="date" id="tanggal_di302" name="tanggal_di302" value="<?= set_value('tanggal_di302'); ?>">
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="nomor_di302" class="col-form-label col-md-3 col-sm-3  label-align">Nomor</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nomor_di302" name="nomor_di302" value="<?= set_value('nomor_di302'); ?>">
                                </div>
                            </div>


                            <span class="section mt-3">DI. 305</span>

                            <div class="field item form-group">
                                <label for="nomor_di305" class="col-form-label col-md-3 col-sm-3  label-align">Nomor</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nomor_di305" name="nomor_di305" value="<?= set_value('nomor_di305'); ?>">
                                </div>
                            </div>


                            <span class="section mt-3">DI. 201</span>

                            <div class="field item form-group">
                                <label for="tanggal_di201" class="col-form-label col-md-3 col-sm-3  label-align">Tanggal</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="date" id="tanggal_di201" name="tanggal_di201" value="<?= set_value('tanggal_di201'); ?>">
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="nomor_di201" class="col-form-label col-md-3 col-sm-3  label-align">Nomor</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nomor_di201" name="nomor_di201" value="<?= set_value('nomor_di201'); ?>">
                                </div>
                            </div>


                            <span class="section mt-3">DI. 202</span>

                            <div class="field item form-group">
                                <label for="tanggal_di202" class="col-form-label col-md-3 col-sm-3  label-align">Tanggal</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="date" id="tanggal_di202" name="tanggal_di202" value="<?= set_value('tanggal_di202'); ?>">
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="nomor_di202" class="col-form-label col-md-3 col-sm-3  label-align">Nomor</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nomor_di202" name="nomor_di202" value="<?= set_value('nomor_di202'); ?>">
                                </div>
                            </div>


                            <span class="section mt-3">Nomor Surat Ukur (SU)</span>

                            <div class="field item form-group">
                                <label for="tanggal_su" class="col-form-label col-md-3 col-sm-3  label-align">Tanggal</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="date" id="tanggal_su" name="tanggal_su" value="<?= set_value('tanggal_su'); ?>">
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="nomor_su" class="col-form-label col-md-3 col-sm-3  label-align">Nomor</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nomor_su" name="nomor_su" value="<?= set_value('nomor_su'); ?>">
                                </div>
                            </div>


                            <span class="section mt-3">DI. 307</span>

                            <div class="field item form-group">
                                <label for="tanggal_di307" class="col-form-label col-md-3 col-sm-3  label-align">Tanggal</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="date" id="tanggal_di307" name="tanggal_di307" value="<?= set_value('tanggal_di307'); ?>">
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="nomor_di307" class="col-form-label col-md-3 col-sm-3  label-align">Nomor</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nomor_di307" name="nomor_di307" value="<?= set_value('nomor_di307'); ?>">
                                </div>
                            </div>


                            <span class="section mt-3">DI. 208</span>

                            <div class="field item form-group">
                                <label for="tanggal_di208" class="col-form-label col-md-3 col-sm-3  label-align">Tanggal</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="date" id="tanggal_di208" name="tanggal_di208" value="<?= set_value('tanggal_di208'); ?>">
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="nomor_di208" class="col-form-label col-md-3 col-sm-3  label-align">Nomor</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nomor_di208" name="nomor_di208" value="<?= set_value('nomor_di208'); ?>">
                                </div>
                            </div>


                            <span class="section mt-3">Upload Berkas Persyaratan</span>

                            <div class="field item form-group">
                                <label for="ktp" class="col-form-label col-md-3 col-sm-3  label-align">Kartu Tanda Penduduk (KTP)</label>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <input type="file" name="id_dokumenktp" value="<?= set_value('id_dokumenktp'); ?>">
                                </div>
                            </div>

                            <div class="field item form-group mt-4">
                                <label for="kk" class="col-form-label col-md-3 col-sm-3  label-align">Kartu Keluarga (KK)</label>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <input type="file" name="id_dokumenkk" value="<?= set_value('id_dokumenkk'); ?>">
                                </div>
                            </div>

                            <div class="field item form-group mt-4">
                                <label for="bphtb" class="col-form-label col-md-3 col-sm-3  label-align">Surat Pemberitahuan Pajak Terhutang Pajak Bumi dan Bangunan (SPPT PBB)</label>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <input type="file" name="id_bphtb" value="<?= set_value('id_bphtb'); ?>">
                                </div>
                            </div>

                            <div class="field item form-group mt-4">
                                <label for="dokbatas" class="col-form-label col-md-3 col-sm-3  label-align">Bukti Batas Tanah</label>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <input type="file" name="id_dokumenbatas" value="<?= set_value('id_dokumenbatas'); ?>">
                                </div>
                            </div>

                            <div class="field item form-group mt-4">
                                <label for="doktambahan" class="col-form-label col-md-3 col-sm-3  label-align">Dokumen Tambahan</label>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <input type="file" name="id_doktambahan" value="<?= set_value('id_doktambahan'); ?>">
                                </div>
                            </div>

                            <div class="ln_solid">
                                <div class="form-group">
                                    <div class="col-md-12" style="justify-content:center; display:flex;">
                                        <button type='submit' name="add" class="btn btn-success mt-4"><i class="fa fa-save"></i> Simpan </button>
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
    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    Formulir Permohonan
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                        <div class="form-group row">
                            <label for="nib" class="col-sm-3 col-form-label">NIB</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nib" name="nib">
                            </div>
                            <small class="form-text text-danger"><?= form_error('nib'); ?></small>
                        </div>
                        
                       <div class="form-group row">
                             <label for="no_berkas" class="col-sm-3 col-form-label">Nomor Berkas</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="no_berkas" name="no_berkas">
                            </div>
                            <small class="form-text text-danger"><?= form_error('no_berkas'); ?></small>
                        </div>

                       <div class="form-group row">
                             <label for="kluster" class="col-sm-3 col-form-label">Kluster</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="kluster" name="kluster">
                            </div>
                        </div>

                       <div class="form-group row">
                             <label for="pbt" class="col-sm-3 col-form-label">PBT</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="pbt" name="pbt">
                            </div>
                        </div>

                       <div class="form-group row">
                             <label for="penggunaan_tanah" class="col-sm-3 col-form-label">Penggunaan Tanah</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="penggunaan_tanah" name="penggunaan_tanah">
                            </div>
                        </div>

                       <div class="form-group row">
                             <label for="no_hak_milik" class="col-sm-3 col-form-label">Nomor Hak Milik</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="no_hak_milik" name="no_hak_milik">
                            </div>
                        </div>

                       <div class="form-group row">
                            <label for="no_seri_blanko" class="col-sm-3 col-form-label">Nomor Seri Blanko</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="no_seri_blanko" name="no_seri_blanko">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="kegiatan" class="col-sm-3 col-form-label">Kegiatan</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="kegiatan" name="kegiatan">
                                    <option selected disabled value="">PILIH KEGIATAN</option>
                                    <?php foreach ($kegiatan as $kg) : ?>
                                        <option value="<?= $kg; ?>"><?= $kg; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <h5 class="card-title font-weight-bolder mt-5">SPPT / Pajak</h5>
                            
                        <div class="form-group row mt-3">
                           <label for="no_sppt" class="col-sm-3 col-form-label">Nomor SPPT</label>
                           <div class="col-sm-9">
                               <input type="text" class="form-control" id="no_sppt" name="no_sppt">
                           </div>
                        </div>

                        <div class="form-group row">
                           <label for="nama_wajib_pajak" class="col-sm-3 col-form-label">Nama Wajib Pajak</label>
                           <div class="col-sm-9">
                               <input type="text" class="form-control" id="nama_wajib_pajak" name="nama_wajib_pajak">
                           </div>
                        </div>

                        <div class="form-group row">
                           <label for="luas_tanah" class="col-sm-3 col-form-label">Luas Tanah pada SPPT</label>
                           <div class="col-sm-9">
                               <input type="text" class="form-control" id="luas_tanah" name="luas_tanah">
                           </div>
                        </div>

                        <div class="form-group row">
                           <label for="njop" class="col-sm-3 col-form-label">NJOP Tanah Per m2 (Rp)</label>
                           <div class="col-sm-9">
                               <input type="text" class="form-control" id="njop" name="njop">
                           </div>
                        </div>

                        <h5 class="card-title font-weight-bolder mt-5">Letak Tanah</h5>

                        <div class="form-group row mt-3">
                           <label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
                           <div class="col-sm-9">
                               <input type="text" class="form-control" id="kecamatan" name="kecamatan">
                           </div>
                        </div>

                        <div class="form-group row">
                           <label for="desa" class="col-sm-3 col-form-label">Desa</label>
                           <div class="col-sm-9">
                               <input type="text" class="form-control" id="desa" name="desa">
                           </div>
                        </div>

                        <div class="form-group row">
                           <label for="dusun" class="col-sm-3 col-form-label">Dusun</label>
                           <div class="col-sm-9">
                               <input type="text" class="form-control" id="dusun" name="dusun">
                           </div>
                        </div>

                        <div class="form-group row">
                           <label for="rt" class="col-sm-3 col-form-label">RT</label>
                           <div class="col-sm-4">
                               <input type="text" class="form-control" id="rt" name="rt">
                           </div>

                           <label for="rw" class="col-sm-1 col-form-label">RW</label>
                           <div class="col-sm-4">
                               <input type="text" class="form-control" id="rw" name="rw">
                           </div>
                        </div>

                        <h5 class="card-title font-weight-bolder mt-5">Alas Hak / Letter C</h5>

                        <div class="form-group row mt-3">
                           <label for="nama_letterc" class="col-sm-3 col-form-label">Nama Letter C</label>
                           <div class="col-sm-9">
                               <input type="text" class="form-control" id="nama_letterc" name="nama_letterc">
                           </div>
                        </div>

                        <div class="form-group row">
                           <label for="no_letterc" class="col-sm-3 col-form-label">Nomor Letter C</label>
                           <div class="col-sm-9">
                               <input type="text" class="form-control" id="no_letterc" name="no_letterc">
                           </div>
                        </div>

                        <div class="form-group row">
                           <label for="persil" class="col-sm-3 col-form-label">Persil</label>
                           <div class="col-sm-4">
                               <input type="text" class="form-control" id="persil" name="persil">
                           </div>

                           <label for="kelas" class="col-sm-1 col-form-label">Kelas</label>
                           <div class="col-sm-4">
                               <input type="text" class="form-control" id="kelas" name="kelas">
                           </div>
                        </div>

                        <div class="form-group row">
                           <label for="luas" class="col-sm-3 col-form-label">Luas</label>
                           <div class="col-sm-9">
                               <input type="text" class="form-control" id="luas" name="luas">
                           </div>
                        </div>

                        <h5 class="card-title font-weight-bolder mt-5">DI. 300</h5>

                        <div class="form-group row">
                           <label for="tgl_di300" class="col-sm-3 col-form-label">Tanggal</label>
                           <div class="col-sm-4">
                               <input type="date" class="form-control" id="tgl_di300" name="tgl_di300">
                           </div>

                           <label for="nomor_di300" class="col-form-label ml-3">Nomor</label>
                           <div class="col-sm-4">
                               <input type="text" class="form-control" id="nomor_di300" name="nomor_di300">
                           </div>
                        </div>

                        <h5 class="card-title font-weight-bolder mt-5">DI. 302</h5>

                        <div class="form-group row">
                           <label for="tgl_di302" class="col-sm-3 col-form-label">Tanggal</label>
                           <div class="col-sm-4">
                               <input type="date" class="form-control" id="tgl_di302" name="tgl_di302">
                           </div>

                           <label for="nomor_di302" class="col-form-label ml-3">Nomor</label>
                           <div class="col-sm-4">
                               <input type="text" class="form-control" id="nomor_di302" name="nomor_di302">
                           </div>
                        </div>

                        <h5 class="card-title font-weight-bolder mt-5">DI. 305</h5>

                        <div class="form-group row mt-3">
                           <label for="nomor_di305" class="col-sm-3 col-form-label">Nomor</label>
                           <div class="col-sm-9">
                               <input type="text" class="form-control" id="nomor_di305" name="nomor_di305">
                           </div>
                        </div>
                        
                        <h5 class="card-title font-weight-bolder mt-5">DI. 201</h5>

                        <div class="form-group row">
                           <label for="tgl_di201" class="col-sm-3 col-form-label">Tanggal</label>
                           <div class="col-sm-4">
                               <input type="date" class="form-control" id="tgl_di201" name="tgl_di201">
                           </div>

                           <label for="nomor_di201" class="col-form-label ml-3">Nomor</label>
                           <div class="col-sm-4">
                               <input type="text" class="form-control" id="nomor_di201" name="nomor_di201">
                           </div>
                        </div>

                        <h5 class="card-title font-weight-bolder mt-5">DI. 202</h5>

                        <div class="form-group row">
                           <label for="tgl_di202" class="col-sm-3 col-form-label">Tanggal</label>
                           <div class="col-sm-4">
                               <input type="date" class="form-control" id="tgl_di202" name="tgl_di202">
                           </div>

                           <label for="nomor_di202" class="col-form-label ml-3">Nomor</label>
                           <div class="col-sm-4">
                               <input type="text" class="form-control" id="nomor_di202" name="nomor_di202">
                           </div>
                        </div>

                        <h5 class="card-title font-weight-bolder mt-5">Nomor Surat Ukur</h5>

                        <div class="form-group row">
                           <label for="tgl_su" class="col-sm-3 col-form-label">Tanggal</label>
                           <div class="col-sm-4">
                               <input type="date" class="form-control" id="tgl_su" name="tgl_su">
                           </div>

                           <label for="nomor_su" class="col-form-label ml-3">Nomor</label>
                           <div class="col-sm-4">
                               <input type="text" class="form-control" id="nomor_su" name="nomor_su">
                           </div>
                        </div>
                        
                        <h5 class="card-title font-weight-bolder mt-5">DI. 307</h5>

                        <div class="form-group row">
                           <label for="tgl_di307" class="col-sm-3 col-form-label">Tanggal</label>
                           <div class="col-sm-4">
                               <input type="date" class="form-control" id="tgl_di307" name="tgl_di307">
                           </div>

                           <label for="nomor_di307" class="col-form-label ml-3">Nomor</label>
                           <div class="col-sm-4">
                               <input type="text" class="form-control" id="nomor_di307" name="nomor_di307">
                           </div>
                        </div>

                        <h5 class="card-title font-weight-bolder mt-5">DI. 208</h5>

                        <div class="form-group row">
                           <label for="tgl_di208" class="col-sm-3 col-form-label">Tanggal</label>
                           <div class="col-sm-4">
                               <input type="date" class="form-control" id="tgl_di208" name="tgl_di208">
                           </div>

                           <label for="nomor_di208" class="col-form-label ml-3">Nomor</label>
                           <div class="col-sm-4">
                               <input type="text" class="form-control" id="nomor_di208" name="nomor_di208">
                           </div>
                        </div>

                        <div class="form-group row">
                           <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                           <div class="col-sm-9">
                               <input type="text" class="form-control" id="keterangan" name="keterangan">
                           </div>
                        </div>

                        <div class="form-group row">
                            <label for="ktp" class="col-sm-3 col-form-label">Upload KTP</label>
                            <div class="col-sm-9">
                                
                                <input type="file" name="id_dokumenktp" />
                            </div>                        
                        </div>

                        <div class="form-group row">
                            <label for="kk" class="col-sm-3 col-form-label">Upload Kartu Keluarga</label>
                            <div class="col-sm-9">
                                
                                <input type="file" name="id_dokumenkk" />
                            </div>                        
                        </div>

                        <button type="submit" name="add" class="btn btn-primary mt-3">Kirim</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div> -->