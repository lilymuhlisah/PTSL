<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Verifikasi Berkas Permohonan</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel mt-2">
                    <div class="x_content">

                        <span class="section">Data Pribadi Pemohon</span>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Nama Lengkap</label>
                            <div class="col-form-label col-md-6 col-sm-6">
                                <strong><?= $pemohon['nama_pemohon'] ?></strong>
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
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Pekerjaan</label>
                            <?php if ($pemohon['pekerjaan'] == null) : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong>-</strong>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $pemohon['pekerjaan'] ?></strong>
                                </div>
                            <?php endif; ?>
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


                        <!--data permohonan-->
                        <span class="section mt-4">Data Permohonan</span>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Status Permohonan</label>
                            <div class="col-form-label col-md-6 col-sm-6">
                                <?php if ($status['id_status'] == 1) : ?>
                                    <h5><span class="badge badge-danger font-weight-normal"><?= $status['status'] ?></span></h5>
                                <?php elseif ($status['id_status'] == 2) : ?>
                                    <h5><span class="badge badge-warning font-weight-normal"><?= $status['status'] ?></span></h5>
                                <?php elseif ($status['id_status'] == 3) : ?>
                                    <h5><span class="badge badge-success font-weight-normal"><?= $status['status'] ?></span></h5>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class=" field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Nomor Induk Bidang (NIB)</label>
                            <div class="col-form-label col-md-6 col-sm-6">
                                <strong><?= $permohonan['NIB'] ?></strong>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Nomor Berkas</label>
                            <div class="col-form-label col-md-6 col-sm-6">
                                <strong><?= $permohonan['no_berkas'] ?></strong>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Kluster</label>
                            <div class="col-form-label col-md-6 col-sm-6">
                                <strong><?= $permohonan['kluster'] ?></strong>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">PBT</label>
                            <div class="col-form-label col-md-6 col-sm-6">
                                <strong><?= $permohonan['pbt'] ?></strong>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Penggunaan Tanah</label>
                            <div class="col-form-label col-md-6 col-sm-6">
                                <strong><?= $permohonan['penggunaan_tanah'] ?></strong>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Nomor Hak Milik</label>
                            <div class="col-form-label col-md-6 col-sm-6">
                                <strong><?= $permohonan['no_hak_milik'] ?></strong>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Nomor Seri Blanko</label>
                            <div class="col-form-label col-md-6 col-sm-6">
                                <strong><?= $permohonan['no_seri_blanko'] ?></strong>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Kegiatan</label>
                            <div class="col-form-label col-md-6 col-sm-6">
                                <strong><?= $kegiatan['nama_kegiatan'] ?></strong>
                            </div>
                        </div>


                        <span class="section mt-3">SPPT/Pajak</span>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Nomor SPPT</label>
                            <div class="col-form-label col-md-6 col-sm-6">
                                <strong><?= $permohonan['no_sppt'] ?></strong>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Nama Wajib Pajak</label>
                            <div class="col-form-label col-md-6 col-sm-6">
                                <strong><?= $permohonan['nama_wajib_pajak'] ?></strong>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Luas Tanah pada SPPT</label>
                            <div class="col-form-label col-md-6 col-sm-6">
                                <strong><?= $permohonan['luas_tanah'] ?></strong>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">NJOP Tanah per m2 (Rp)</label>
                            <div class="col-form-label col-md-6 col-sm-6">
                                <strong><?= $permohonan['njop'] ?></strong>
                            </div>
                        </div>


                        <span class="section mt-3">Letak Tanah</span>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Kecamatan</label>
                            <div class="col-form-label col-md-6 col-sm-6">
                                <strong><?= $letak_tanah['nama_kecamatan'] ?></strong>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Desa</label>
                            <div class="col-form-label col-md-6 col-sm-6">
                                <strong><?= $letak_tanah['nama_desa'] ?></strong>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Dusun</label>
                            <div class="col-form-label col-md-6 col-sm-6">
                                <strong><?= $permohonan['dusun'] ?></strong>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">RT</label>
                            <div class="col-form-label col-md-6 col-sm-6">
                                <strong><?= $permohonan['rt'] ?></strong>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">RW</label>
                            <div class="col-form-label col-md-6 col-sm-6">
                                <strong><?= $permohonan['rw'] ?></strong>
                            </div>
                        </div>


                        <span class="section mt-3">Alas Hak/Letter C</span>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Nama Letter C</label>
                            <?php if ($permohonan['nama_letterc'] == null) : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong>-</strong>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $permohonan['nama_letterc'] ?></strong>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Nomor Letter C</label>
                            <?php if ($permohonan['no_letterc'] == null) : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong>-</strong>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $permohonan['no_letterc'] ?></strong>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Persil</label>
                            <?php if ($permohonan['persil'] == null) : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong>-</strong>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $permohonan['persil'] ?></strong>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Kelas</label>
                            <?php if ($permohonan['kelas'] == null) : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong>-</strong>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $permohonan['kelas'] ?></strong>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Luas Letter C</label>
                            <?php if ($permohonan['luas_letterc'] == null) : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong>-</strong>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $permohonan['luas_letterc'] ?></strong>
                                </div>
                            <?php endif; ?>
                        </div>


                        <span class="section mt-3">DI. 300</span>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Tanggal</label>
                            <?php if ($permohonan['tanggal_di300'] == 0000 - 00 - 00) : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong>-</strong>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $permohonan['tanggal_di300'] ?></strong>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Nomor</label>
                            <?php if ($permohonan['nomor_di300'] == null) : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong>-</strong>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $permohonan['nomor_di300'] ?></strong>
                                </div>
                            <?php endif; ?>
                        </div>


                        <span class="section mt-3">DI. 302</span>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Tanggal</label>
                            <?php if ($permohonan['tanggal_di302'] == 0000 - 00 - 00) : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong>-</strong>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $permohonan['tanggal_di302'] ?></strong>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Nomor</label>
                            <?php if ($permohonan['nomor_di302'] == null) : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong>-</strong>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $permohonan['nomor_di302'] ?></strong>
                                </div>
                            <?php endif; ?>
                        </div>


                        <span class="section mt-3">DI. 305</span>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Nomor</label>
                            <?php if ($permohonan['nomor_di305'] == null) : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong>-</strong>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $permohonan['nomor_di305'] ?></strong>
                                </div>
                            <?php endif; ?>
                        </div>


                        <span class="section mt-3">DI. 201</span>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Tanggal</label>
                            <?php if ($permohonan['tanggal_di201'] == 0000 - 00 - 00) : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong>-</strong>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $permohonan['tanggal_di201'] ?></strong>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Nomor</label>
                            <?php if ($permohonan['nomor_di201'] == null) : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong>-</strong>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $permohonan['nomor_di201'] ?></strong>
                                </div>
                            <?php endif; ?>
                        </div>


                        <span class="section mt-3">DI. 202</span>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Tanggal</label>
                            <?php if ($permohonan['tanggal_di202'] == 0000 - 00 - 00) : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong>-</strong>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $permohonan['tanggal_di202'] ?></strong>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Nomor</label>
                            <?php if ($permohonan['nomor_di202'] == null) : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong>-</strong>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $permohonan['nomor_di202'] ?></strong>
                                </div>
                            <?php endif; ?>
                        </div>


                        <span class="section mt-3">Nomor Surat Ukur (SU)</span>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Tanggal</label>
                            <?php if ($permohonan['tanggal_su'] == 0000 - 00 - 00) : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong>-</strong>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $permohonan['tanggal_su'] ?></strong>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Nomor</label>
                            <?php if ($permohonan['nomor_su'] == null) : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong>-</strong>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $permohonan['nomor_su'] ?></strong>
                                </div>
                            <?php endif; ?>
                        </div>


                        <span class="section mt-3">DI. 307</span>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Tanggal</label>
                            <?php if ($permohonan['tanggal_di307'] == 0000 - 00 - 00) : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong>-</strong>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $permohonan['tanggal_di307'] ?></strong>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Nomor</label>
                            <?php if ($permohonan['nomor_di300'] == null) : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong>-</strong>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $permohonan['nomor_di307'] ?></strong>
                                </div>
                            <?php endif; ?>
                        </div>


                        <span class="section mt-3">DI. 208</span>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Tanggal</label>
                            <?php if ($permohonan['tanggal_di208'] == 0000 - 00 - 00) : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong>-</strong>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $permohonan['tanggal_di208'] ?></strong>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Nomor</label>
                            <?php if ($permohonan['nomor_di208'] == null) : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong>-</strong>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-6 col-sm-6">
                                    <strong><?= $permohonan['nomor_di208'] ?></strong>
                                </div>
                            <?php endif; ?>
                        </div>


                        <span class="section mt-4">Berkas Permohonan</span>


                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Kartu Tanda Penduduk (KTP)</label>
                            <?php if ($dokumen_ktp['nama_dokumenktp'] == null) : ?>
                                <div class="col-form-label col-md-3 col-sm-3" style="color:white;">
                                    <a class="btn btn-sm btn-secondary" style="background-color: #b2b7bb; border-color: #b2b7bb !important" disabled><i class="fa fa-eye-slash"></i> Lihat </a><br>
                                    <span style="color: red; font-size:11px">*berkas belum dilampirkan</span>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-3 col-sm-3">
                                    <!-- <img src="<?= base_url() . '/berkas/KTP/' . $dokumen_ktp['nama_dokumenktp']; ?>" width="100"><br> -->
                                    <a href="<?= base_url() . '/berkas/KTP/' . $dokumen_ktp['nama_dokumenktp']; ?>" data-target="#dokumen" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> Lihat </a>
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
                                </div>
                            <?php endif; ?>

                            <form class="" action="" method="post" novalidate style="font-size: 14px !important">
                                <div>
                                    <div class="col-sm-3"><label class="col-form-label" style="margin-left: 20px !important">Status</label></div>
                                    <input type="hidden" name="id_dokumenktp" value="<?= $dokumen_ktp['id_dokumenktp']; ?>">
                                    <div class="col-sm-6">
                                        <select class="form-control col-form-label mt-1" id="status_dokumen" name="status_dokumenktp" style="width: fit-content">
                                            <option selected disabled value="">Pilih Tindakan</option>
                                            <?php foreach ($status_dokumen as $sd) : ?>
                                                <?php if ($sd['id_statusdokumen'] == $dokumen_ktp['id_statusktp']) : ?>
                                                    <option value="<?= $sd['id_statusdokumen']; ?>" selected><?= $sd['status_dokumen']; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $sd['id_statusdokumen']; ?>"><?= $sd['status_dokumen']; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Kartu Keluarga (KK)</label>
                            <?php if ($dokumen_kk['nama_dokumenkk'] == null) : ?>
                                <div class="col-form-label col-md-3 col-sm-3" style="color:white;">
                                    <a class="btn btn-sm btn-secondary" style="background-color: #b2b7bb; border-color: #b2b7bb !important" disabled><i class="fa fa-eye-slash"></i> Lihat </a><br>
                                    <span style="color: red; font-size:11px">*berkas belum dilampirkan</span>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-3 col-sm-3">
                                    <a href="<?= base_url() . '/berkas/Kartu_Keluarga_KK/' . $dokumen_kk['nama_dokumenkk']; ?>" data-target="#dokumen" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> Lihat </a>
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
                                </div>
                            <?php endif; ?>

                            <div>
                                <div class="col-sm-3"><label class="col-form-label" style="margin-left: 20px !important">Status</label></div>
                                <input type="hidden" name="id_dokumenkk" value="<?= $dokumen_kk['id_dokumenkk']; ?>">
                                <div class="col-sm-6">
                                    <select class="form-control col-form-label mt-1" id="status_dokumen" name="status_dokumenkk" style="width: fit-content">
                                        <option selected disabled value="">Pilih Tindakan</option>
                                        <?php foreach ($status_dokumen as $sd) : ?>
                                            <?php if ($sd['id_statusdokumen'] == $dokumen_kk['id_statuskk']) : ?>
                                                <option value="<?= $sd['id_statusdokumen']; ?>" selected><?= $sd['status_dokumen']; ?></option>
                                            <?php else : ?>
                                                <option value="<?= $sd['id_statusdokumen']; ?>"><?= $sd['status_dokumen']; ?></option>
                                                <!-- <option value="1">Belum Disetujui</option>
                                                        <option value="2">Disetujui</option>
                                                        <option value="3">Revisi (Lihat catatan)</option>
                                                        <option value="4">Upload Ulang Dokumen</option> -->
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Surat Pemberitahuan Pajak Terhutang Pajak Bumi dan Bangunan (SPPT PBB)</label>
                            <?php if ($bphtb['nama_bphtb'] == null) : ?>
                                <div class="col-form-label col-md-3 col-sm-3" style="color:white;">
                                    <a class="btn btn-sm btn-secondary" style="background-color: #b2b7bb; border-color: #b2b7bb !important" disabled><i class="fa fa-eye-slash"></i> Lihat </a><br>
                                    <span style="color: red; font-size:11px">*berkas belum dilampirkan</span>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-3 col-sm-3">
                                    <a href="<?= base_url() . '/berkas/BPHTB/' . $bphtb['nama_bphtb']; ?>" data-target="#dokumen" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> Lihat </a>
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
                                </div>
                            <?php endif; ?>

                            <div>
                                <div class="col-sm-3"><label class="col-form-label" style="margin-left: 20px !important">Status</label></div>
                                <input type="hidden" name="id_bphtb" value="<?= $bphtb['id_bphtb']; ?>">
                                <div class="col-sm-6">
                                    <select class="form-control col-form-label mt-1" id="status_dokumen" name="status_dokumenbphtb" style="width: fit-content">
                                        <option selected disabled value="">Pilih Tindakan</option>
                                        <?php foreach ($status_dokumen as $sd) : ?>
                                            <?php if ($sd['id_statusdokumen'] == $bphtb['id_statusbphtb']) : ?>
                                                <option value="<?= $sd['id_statusdokumen']; ?>" selected><?= $sd['status_dokumen']; ?></option>
                                            <?php else : ?>
                                                <option value="<?= $sd['id_statusdokumen']; ?>"><?= $sd['status_dokumen']; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Bukti Batas Tanah</label>
                            <?php if ($dokumen_batas['nama_dokumenbatas'] == null) : ?>
                                <div class="col-form-label col-md-3 col-sm-3" style="color:white;">
                                    <a class="btn btn-sm btn-secondary" style="background-color: #b2b7bb; border-color: #b2b7bb !important" disabled><i class="fa fa-eye-slash"></i> Lihat </a><br>
                                    <span style="color: red; font-size:11px">*berkas belum dilampirkan</span>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-3 col-sm-3">
                                    <a href="<?= base_url() . '/berkas/Bukti batas tanah/' . $dokumen_batas['nama_dokumenbatas']; ?>" data-target="#dokumen" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> Lihat </a>
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
                                </div>
                            <?php endif; ?>

                            <div>
                                <div class="col-sm-3"><label class="col-form-label" style="margin-left: 20px !important">Status</label></div>
                                <input type="hidden" name="id_dokumenbatas" value="<?= $dokumen_batas['id_dokumenbatas']; ?>">
                                <div class="col-sm-6">
                                    <select class="form-control col-form-label mt-1" id="status_dokumen" name="status_dokumenbatas" style="width: fit-content">
                                        <option selected disabled value="">Pilih Tindakan</option>
                                        <?php foreach ($status_dokumen as $sd) : ?>
                                            <?php if ($sd['id_statusdokumen'] == $dokumen_batas['id_statusdokbatas']) : ?>
                                                <option value="<?= $sd['id_statusdokumen']; ?>" selected><?= $sd['status_dokumen']; ?></option>
                                            <?php else : ?>
                                                <option value="<?= $sd['id_statusdokumen']; ?>"><?= $sd['status_dokumen']; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3" style="margin-left: 20px !important">Dokumen Tambahan</label>
                            <?php if ($dokumen_tambahan['nama_doktambahan'] == null) : ?>
                                <div class="col-form-label col-md-3 col-sm-3" style="color:white;">
                                    <a class="btn btn-sm btn-secondary" style="background-color: #b2b7bb; border-color: #b2b7bb !important" disabled><i class="fa fa-eye-slash"></i> Lihat </a><br>
                                    <span style="color: red; font-size:11px">*berkas belum dilampirkan</span>
                                </div>
                            <?php else : ?>
                                <div class="col-form-label col-md-3 col-sm-3">
                                    <a href="<?= base_url() . '/berkas/Berkas tambahan/' . $dokumen_tambahan['nama_doktambahan']; ?>" data-target="#dokumen" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> Lihat </a>
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
                                </div>
                            <?php endif; ?>

                            <div>
                                <div class="col-sm-3"><label class="col-form-label" style="margin-left: 20px !important">Status</label></div>
                                <input type="hidden" name="id_doktambahan" value="<?= $dokumen_tambahan['id_doktambahan']; ?>">
                                <div class="col-sm-6">
                                    <select class="form-control col-form-label mt-1" id="status_dokumen" name="status_dokumentambahan" style="width: fit-content">
                                        <option selected disabled value="">Pilih Tindakan</option>
                                        <?php foreach ($status_dokumen as $sd) : ?>
                                            <?php if ($sd['id_statusdokumen'] == $dokumen_tambahan['id_statusdoktambahan']) : ?>
                                                <option value="<?= $sd['id_statusdokumen']; ?>" selected><?= $sd['status_dokumen']; ?></option>
                                            <?php else : ?>
                                                <option value="<?= $sd['id_statusdokumen']; ?>"><?= $sd['status_dokumen']; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="field item form-group" style="margin-left: 20px !important">
                            <label for="keterangan" class="col-form-label col-md-3 col-sm-3"><strong>Catatan:</strong></label>

                        </div>
                        <div class="field item form-group" style="margin-left: 20px !important">
                            <div class="col-md-11 col-sm-11">
                                <input type="hidden" name="id_permohonan" value="<?= $permohonan['id_permohonan']; ?>">
                                <input class="form-control" type="text" id="keterangan" name="keterangan" value="<?= $permohonan['keterangan']; ?>">
                            </div>
                        </div>


                        <div class="ln_solid">
                            <div class="form-group">
                                <div class="col-md-6 offset-md-3">
                                    <button type='submit' id="submit" name="submit" class="btn btn-success mt-3" style="margin-left:125%">Verifikasi</button>
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

</body>

</html>