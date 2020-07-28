<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Formulir Edit Permohonan</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel mt-2">
                    <div class="x_content" style="padding-left: 20px">
                        <form class="" action="" method="post" novalidate style="font-size: 14px !important" enctype="multipart/form-data" accept-charset="utf-8">

                            <span class="section mt-2">Data Permohonan</span>

                            <input type="hidden" name="id_permohonan" value="<?= $permohonan['id_permohonan']; ?>">

                            <div class="field item form-group">
                                <label for="nib" class="col-form-label col-md-3 col-sm-3  label-align">Nomor Induk Bidang (NIB)<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nib" name="nib" value="<?= $permohonan['NIB'] ?>">
                                    <small class="form-text text-danger"><?= form_error('nib'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="no_berkas" class="col-form-label col-md-3 col-sm-3  label-align">Nomor Berkas<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="no_berkas" name="no_berkas" value="<?= $permohonan['no_berkas'] ?>">
                                    <small class="form-text text-danger"><?= form_error('no_berkas'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="kluster" class="col-form-label col-md-3 col-sm-3  label-align">Kluster<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="kluster" name="kluster" value="<?= $permohonan['kluster'] ?>">
                                    <small class="form-text text-danger"><?= form_error('kluster'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="pbt" class="col-form-label col-md-3 col-sm-3  label-align">PBT<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="pbt" name="pbt" value="<?= $permohonan['pbt'] ?>">
                                    <small class="form-text text-danger"><?= form_error('pbt'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="penggunaan_tanah" class="col-form-label col-md-3 col-sm-3  label-align">Penggunaan Tanah<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="penggunaan_tanah" name="penggunaan_tanah" value="<?= $permohonan['penggunaan_tanah'] ?>">
                                    <small class="form-text text-danger"><?= form_error('penggunaan_tanah'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="no_hak_milik" class="col-form-label col-md-3 col-sm-3  label-align">Nomor Hak Milik<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="no_hak_milik" name="no_hak_milik" value="<?= $permohonan['no_hak_milik'] ?>">
                                    <small class="form-text text-danger"><?= form_error('no_hak_milik'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="no_seri_blanko" class="col-form-label col-md-3 col-sm-3  label-align">Nomor Seri Blanko<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="no_seri_blanko" name="no_seri_blanko" value="<?= $permohonan['no_seri_blanko'] ?>">
                                    <small class="form-text text-danger"><?= form_error('no_seri_blanko'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="kegiatan" class="col-form-label col-md-3 col-sm-3  label-align">Kegiatan<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="form-control" id="kegiatan" name="kegiatan">
                                        <?php if ($kegiatan == $permohonan['nama_kegiatan']) : ?>
                                            <option value="<?= $permohonan['nama_kegiatan'] ?>" selected><?= $permohonan['nama_kegiatan'] ?></option>
                                        <?php else : ?>
                                            <option value="1">Pendaftaran Tanah Pertama Kali Konversi/Pengakuan/Penegasan Hak</option>
                                            <option value="2">Pendaftaran Tanah Pertama Kali Pemberian Hak</option>
                                            <option value="3">Lainnya</option>
                                        <?php endif; ?>
                                    </select>
                                    <small class="form-text text-danger"><?= form_error('kegiatan'); ?></small>
                                </div>
                            </div>

                            <span class="section mt-3">SPPT/Pajak</span>

                            <div class="field item form-group">
                                <label for="no_sppt" class="col-form-label col-md-3 col-sm-3  label-align">Nomor SPPT<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="no_sppt" name="no_sppt" value="<?= $permohonan['no_sppt'] ?>">
                                    <small class="form-text text-danger"><?= form_error('no_sppt'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="nama_wajib_pajak" class="col-form-label col-md-3 col-sm-3  label-align">Nama Wajib Pajak<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nama_wajib_pajak" name="nama_wajib_pajak" value="<?= $permohonan['nama_wajib_pajak'] ?>">
                                    <small class="form-text text-danger"><?= form_error('nama_wajib_pajak'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="luas_tanah" class="col-form-label col-md-3 col-sm-3  label-align">Luas Tanah pada SPPT<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="luas_tanah" name="luas_tanah" value="<?= $permohonan['luas_tanah'] ?>">
                                    <small class="form-text text-danger"><?= form_error('luas_tanah'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="njop" class="col-form-label col-md-3 col-sm-3  label-align">NJOP Tanah per m2 (Rp)<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="njop" name="njop" value="<?= $permohonan['njop'] ?>">
                                    <small class="form-text text-danger"><?= form_error('njop'); ?></small>
                                </div>
                            </div>


                            <span class="section mt-3">Letak Tanah</span>

                            <input type="hidden" name="id_letaktanah" value="<?= $permohonan['id_letaktanah']; ?>">

                            <div class="field item form-group">
                                <label for="kecamatan" class="col-form-label col-md-3 col-sm-3  label-align">Kecamatan<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="form-control" id="kecamatan" name="kecamatan" value="<?= $permohonan['nama_kecamatan'] ?>">
                                        <option selected disabled value="">Pilih Kecamatan</option>
                                        <?php foreach ($kecamatan as $kc) : ?>
                                            <?php if ($kc['id_kecamatan'] == $letak_tanah['id_kecamatan']) : ?>
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
                                        <option selected value="<?= $letak_tanah['id_desa']; ?>" selected><?= $letak_tanah['nama_desa']; ?></option>
                                    </select>
                                    <small class="form-text text-danger"><?= form_error('desa'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="dusun" class="col-form-label col-md-3 col-sm-3  label-align">Dusun<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="dusun" name="dusun" value="<?= $permohonan['dusun']; ?>">
                                    <small class="form-text text-danger"><?= form_error('dusun'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="rt" class="col-form-label col-md-3 col-sm-3  label-align">RT<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="rt" name="rt" value="<?= $permohonan['rt']; ?>">
                                    <small class="form-text text-danger"><?= form_error('rt'); ?></small>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="rw" class="col-form-label col-md-3 col-sm-3  label-align">RW<span style="color:red">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="rw" name="rw" value="<?= $permohonan['rw']; ?>">
                                    <small class="form-text text-danger"><?= form_error('rw'); ?></small>
                                </div>
                            </div>


                            <span class="section mt-3">Alas Hak/Letter C</span>

                            <input type="hidden" name="id_letterc" value="<?= $permohonan['id_letterc']; ?>">

                            <div class="field item form-group">
                                <label for="nama_letterc" class="col-form-label col-md-3 col-sm-3  label-align">Nama Letter C</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nama_letterc" name="nama_letterc" value="<?= $permohonan['nama_letterc']; ?>">
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="no_letterc" class="col-form-label col-md-3 col-sm-3  label-align">Nomor</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="no_letterc" name="no_letterc" value="<?= $permohonan['no_letterc']; ?>">
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="persil" class="col-form-label col-md-3 col-sm-3  label-align">Persil</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="persil" name="persil" value="<?= $permohonan['persil']; ?>">
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="kelas" class="col-form-label col-md-3 col-sm-3  label-align">Kelas</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="kelas" name="kelas" value="<?= $permohonan['kelas']; ?>">
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="luas_letterc" class="col-form-label col-md-3 col-sm-3  label-align">Luas</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="luas_letterc" name="luas_letterc" value="<?= $permohonan['luas_letterc']; ?>">
                                </div>
                            </div>


                            <span class="section mt-3">DI. 300</span>

                            <input type="hidden" name="id_di300" value="<?= $permohonan['id_di300']; ?>">

                            <div class="field item form-group">
                                <label for="tanggal_di300" class="col-form-label col-md-3 col-sm-3  label-align">Tanggal</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="date" id="tanggal_di300" name="tanggal_di300" value="<?= $permohonan['tanggal_di300']; ?>">
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="nomor_di300" class="col-form-label col-md-3 col-sm-3  label-align">Nomor</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nomor_di300" name="nomor_di300" value="<?= $permohonan['nomor_di300']; ?>">
                                </div>
                            </div>


                            <span class="section mt-3">DI. 302</span>

                            <input type="hidden" name="id_di302" value="<?= $permohonan['id_di302']; ?>">

                            <div class="field item form-group">
                                <label for="tanggal_di302" class="col-form-label col-md-3 col-sm-3  label-align">Tanggal</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="date" id="tanggal_di302" name="tanggal_di302" value="<?= $permohonan['tanggal_di302']; ?>">
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="nomor_di302" class="col-form-label col-md-3 col-sm-3  label-align">Nomor</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nomor_di302" name="nomor_di302" value="<?= $permohonan['nomor_di302']; ?>">
                                </div>
                            </div>


                            <span class="section mt-3">DI. 305</span>

                            <input type="hidden" name="id_di305" value="<?= $permohonan['id_di305']; ?>">

                            <div class="field item form-group">
                                <label for="nomor_di305" class="col-form-label col-md-3 col-sm-3  label-align">Nomor</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nomor_di305" name="nomor_di305" value="<?= $permohonan['nomor_di305']; ?>">
                                </div>
                            </div>


                            <span class="section mt-3">DI. 201</span>

                            <input type="hidden" name="id_di201" value="<?= $permohonan['id_di201']; ?>">

                            <div class="field item form-group">
                                <label for="tanggal_di201" class="col-form-label col-md-3 col-sm-3  label-align">Tanggal</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="date" id="tanggal_di201" name="tanggal_di201" value="<?= $permohonan['tanggal_di201']; ?>">
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="nomor_di201" class="col-form-label col-md-3 col-sm-3  label-align">Nomor</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nomor_di201" name="nomor_di201" value="<?= $permohonan['nomor_di201']; ?>">
                                </div>
                            </div>


                            <span class="section mt-3">DI. 202</span>

                            <input type="hidden" name="id_di202" value="<?= $permohonan['id_di202']; ?>">

                            <div class="field item form-group">
                                <label for="tanggal_di202" class="col-form-label col-md-3 col-sm-3  label-align">Tanggal</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="date" id="tanggal_di202" name="tanggal_di202" value="<?= $permohonan['tanggal_di202']; ?>">
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="nomor_di202" class="col-form-label col-md-3 col-sm-3  label-align">Nomor</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nomor_di202" name="nomor_di202" value="<?= $permohonan['nomor_di202']; ?>">
                                </div>
                            </div>


                            <span class="section mt-3">Nomor Surat Ukur (SU)</span>

                            <input type="hidden" name="id_su" value="<?= $permohonan['id_su']; ?>">

                            <div class="field item form-group">
                                <label for="tanggal_su" class="col-form-label col-md-3 col-sm-3  label-align">Tanggal</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="date" id="tanggal_su" name="tanggal_su" value="<?= $permohonan['tanggal_su']; ?>">
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="nomor_su" class="col-form-label col-md-3 col-sm-3  label-align">Nomor</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nomor_su" name="nomor_su" value="<?= $permohonan['nomor_su']; ?>">
                                </div>
                            </div>


                            <span class="section mt-3">DI. 307</span>

                            <input type="hidden" name="id_di307" value="<?= $permohonan['id_di307']; ?>">

                            <div class="field item form-group">
                                <label for="tanggal_di307" class="col-form-label col-md-3 col-sm-3  label-align">Tanggal</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="date" id="tanggal_di307" name="tanggal_di307" value="<?= $permohonan['tanggal_di307']; ?>">
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="nomor_di307" class="col-form-label col-md-3 col-sm-3  label-align">Nomor</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nomor_di307" name="nomor_di307" value="<?= $permohonan['nomor_di307']; ?>">
                                </div>
                            </div>


                            <span class="section mt-3">DI. 208</span>

                            <input type="hidden" name="id_di208" value="<?= $permohonan['id_di208']; ?>">

                            <div class="field item form-group">
                                <label for="tanggal_di208" class="col-form-label col-md-3 col-sm-3  label-align">Tanggal</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="date" id="tanggal_di208" name="tanggal_di208" value="<?= $permohonan['tanggal_di208']; ?>">
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label for="nomor_di208" class="col-form-label col-md-3 col-sm-3  label-align">Nomor</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nomor_di208" name="nomor_di208" value="<?= $permohonan['nomor_di208']; ?>">
                                </div>
                            </div>


                            <span class="section mt-3">Upload Berkas Persyaratan</span>

                            <!-- <input type="hidden" name="id_dokumenktp" value="<?= $permohonan['id_dokumenktp']; ?>"> -->

                            <div class="field item form-group">
                                <label for="ktp" class="col-form-label col-md-3 col-sm-3  label-align">Kartu Tanda Penduduk (KTP)</label>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <?php if ($dokumen_ktp['nama_dokumenktp'] == null) : ?>
                                        <img src="<?= base_url('asset/'); ?>/images/no_img.jpeg" width="100">
                                    <?php else : ?>
                                        <img src="<?= base_url() . '/berkas/KTP/' . $dokumen_ktp['nama_dokumenktp']; ?>" data-target="#dokumen" data-toggle="modal" width="100">
                                        <div class="modal" tabindex="-1" id="dokumen" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 50%;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Kartu Tanda Penduduk (KTP)</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="<?= base_url() . '/berkas/KTP/' . $dokumen_ktp['nama_dokumenktp']; ?>" alt="" id="showimg">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <input type="file" name="id_dokumenktp">
                                </div>
                            </div>


                            <!-- <input type="hidden" name="id_dokumenkk" value="<?= $permohonan['id_dokumenkk']; ?>"> -->

                            <div class="field item form-group">
                                <label for="kk" class="col-form-label col-md-3 col-sm-3  label-align">Kartu Keluarga (KK)</label>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <?php if ($dokumen_kk['nama_dokumenkk'] == null) : ?>
                                        <img src="<?= base_url('asset/'); ?>/images/no_img.jpeg" width="100">
                                    <?php else : ?>
                                        <img src="<?= base_url() . '/berkas/Kartu_Keluarga_KK/' . $dokumen_kk['nama_dokumenkk']; ?>" data-target="#dokumen" data-toggle="modal" width="100">
                                        <div class="modal" tabindex="-1" id="dokumen" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Kartu Keluarga (KK)</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="<?= base_url() . '/berkas/Kartu_Keluarga_KK/' . $dokumen_kk['nama_dokumenkk']; ?>" alt="" id="showimg">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <input type="file" name="id_dokumenkk">
                                </div>
                            </div>


                            <!-- <input type="hidden" name="id_bphtb" value="<?= $permohonan['id_bphtb']; ?>"> -->

                            <div class="field item form-group">
                                <label for="bphtb" class="col-form-label col-md-3 col-sm-3  label-align">Surat Pemberitahuan Pajak Terhutang Pajak Bumi dan Bangunan (SPPT PBB)</label>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <?php if ($bphtb['nama_bphtb'] == null) : ?>
                                        <img src="<?= base_url('asset/'); ?>/images/no_img.jpeg" width="100">
                                    <?php else : ?>
                                        <img src="<?= base_url() . '/berkas/BPHTB/' . $bphtb['nama_bphtb']; ?>" data-target="#dokumen" data-toggle="modal" width="100">
                                        <div class="modal" tabindex="-1" id="dokumen" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Surat Pemberitahuan Pajak Terhutang Pajak Bumi dan Bangunan (SPPT PBB)</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="<?= base_url() . '/berkas/BPHTB/' . $bphtb['nama_bphtb']; ?>" alt="" id="showimg">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <input type="file" name="id_bphtb">
                                </div>
                            </div>


                            <!-- <input type="hidden" name="id_dokumenbatas" value="<?= $permohonan['id_dokumenbatas']; ?>"> -->

                            <div class="field item form-group">
                                <label for="dokbatas" class="col-form-label col-md-3 col-sm-3  label-align">Bukti Batas Tanah</label>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <?php if ($dokumen_batas['nama_dokumenbatas'] == null) : ?>
                                        <img src="<?= base_url('asset/'); ?>/images/no_img.jpeg" width="100">
                                    <?php else : ?>
                                        <img src="<?= base_url() . '/berkas/Bukti batas tanah/' . $dokumen_batas['nama_dokumenbatas']; ?>" data-target="#dokumen" data-toggle="modal" width="100">
                                        <div class="modal" tabindex="-1" id="dokumen" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Bukti Batas Tanah</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="<?= base_url() . '/berkas/Bukti batas tanah/' . $dokumen_batas['nama_dokumenbatas']; ?>" alt="" id="showimg">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <input type="file" name="id_dokumenbatas" value="<?= $permohonan['nama_dokumenbatas']; ?>">
                                </div>
                            </div>

                            <!-- <input type="hidden" name="id_doktambahan" value="<?= $permohonan['id_doktambahan']; ?>"> -->

                            <div class="field item form-group">
                                <label for="doktambahan" class="col-form-label col-md-3 col-sm-3  label-align">Dokumen Tambahan</label>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <?php if ($dokumen_tambahan['nama_doktambahan'] == null) : ?>
                                        <img src="<?= base_url('asset/'); ?>/images/no_img.jpeg" width="100">
                                    <?php else : ?>
                                        <img src="<?= base_url() . '/berkas/Berkas tambahan/' . $dokumen_tambahan['nama_doktambahan']; ?>" data-target="#dokumen" data-toggle="modal" width="100">
                                        <div class="modal" tabindex="-1" id="dokumen" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Dokumen Tambahan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="<?= base_url() . '/berkas/Berkas tambahan/' . $dokumen_tambahan['nama_doktambahan']; ?>" alt="" id="showimg">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <input type="file" name="id_doktambahan" value="<?= $permohonan['nama_doktambahan']; ?>">
                                </div>
                            </div>

                            <div class="ln_solid">
                                <div class="form-group">
                                    <div class="col-md-12" style="justify-content:center; display:flex;">
                                        <button type='submit' name="submit" class="btn btn-success mt-4"><i class="fa fa-save"></i> Simpan </button>
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

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#dokumen').on('show.bs.modal', function(e) {
            var img = $(e.relatedTarget).attr('href'); // get image
            $('#showimg').attr('src', img); //load image in modal
        });
    });
</script>