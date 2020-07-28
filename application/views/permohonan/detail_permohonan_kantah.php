<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Rincian Permohonan</h3>
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

                                <div class="col-sm-3">
                                    <?php if ($this->session->userdata('id_role') == 1) : ?>
                                        <a href="<?= base_url(); ?>kantah_kab_malang/verifikasi_berkas/<?= $pemohon['id_pemohon']; ?>/<?= $permohonan['id_permohonan']; ?>" class="btn btn-primary btn-sm" style="float: right;">Verifikasi Berkas Permohonan</a>
                                    <?php elseif ($this->session->userdata('id_role') == 3) : ?>
                                        <a href="<?= base_url(); ?>admin/verifikasi_berkas/<?= $pemohon['id_pemohon']; ?>/<?= $permohonan['id_permohonan']; ?>" class="btn btn-primary btn-sm" style="float: right;">Verifikasi Berkas Permohonan</a>
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


                            <span class="section mt-3">Berkas Persyaratan</span>

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

                                <div class="col-form-label cold-md-1 col-sm-1">
                                    <label>Status</label>
                                </div>
                                <?php if ($dokumen_ktp['nama_dokumenktp'] == null) : ?>
                                    <div class="col-form-label col-md-3 col-sm-3">
                                        <strong> - </strong>
                                    </div>
                                <?php else : ?>
                                    <div class="col-form-label col-md-3 col-sm-3">
                                        <?php if ($dokumen_ktp['id_statusktp'] == 1) : ?>
                                            <strong style="color:red"> <?= $status_ktp['status_dokumen'] ?> </strong>
                                        <?php elseif ($dokumen_ktp['id_statusktp'] == 2) : ?>
                                            <strong style="color:seagreen"> <?= $status_ktp['status_dokumen'] ?> </strong>
                                        <?php elseif ($dokumen_ktp['id_statusktp'] == 3) : ?>
                                            <strong style="color:goldenrod"> <?= $status_ktp['status_dokumen'] ?> </strong>
                                        <?php elseif ($dokumen_ktp['id_statusktp'] == 4) : ?>
                                            <strong style="color:red"> <?= $status_ktp['status_dokumen'] ?> </strong>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
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
                                        <!-- <img src="<?= base_url() . '/berkas/Kartu_Keluarga_KK/' . $dokumen_kk['nama_dokumenkk']; ?>" width="100"><br> -->
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

                                <div class="col-form-label cold-md-1 col-sm-1">
                                    <label>Status</label>
                                </div>
                                <?php if ($dokumen_kk['nama_dokumenkk'] == null) : ?>
                                    <div class="col-form-label col-md-3 col-sm-3">
                                        <strong> - </strong>
                                    </div>
                                <?php else : ?>
                                    <div class="col-form-label col-md-3 col-sm-3">
                                        <?php if ($dokumen_kk['id_statuskk'] == 1) : ?>
                                            <strong style="color:red"> <?= $status_kk['status_dokumen'] ?> </strong>
                                        <?php elseif ($dokumen_kk['id_statuskk'] == 2) : ?>
                                            <strong style="color:seagreen"> <?= $status_kk['status_dokumen'] ?> </strong>
                                        <?php elseif ($dokumen_kk['id_statuskk'] == 3) : ?>
                                            <strong style="color:goldenrod"> <?= $status_kk['status_dokumen'] ?> </strong>
                                        <?php elseif ($dokumen_kk['id_statuskk'] == 4) : ?>
                                            <strong style="color:red"> <?= $status_kk['status_dokumen'] ?> </strong>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
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

                                <div class="col-form-label cold-md-1 col-sm-1">
                                    <label>Status</label>
                                </div>
                                <?php if ($bphtb['nama_bphtb'] == null) : ?>
                                    <div class="col-form-label col-md-3 col-sm-3">
                                        <strong> - </strong>
                                    </div>
                                <?php else : ?>
                                    <div class="col-form-label col-md-3 col-sm-3">
                                        <?php if ($bphtb['id_statusbphtb'] == 1) : ?>
                                            <strong style="color:red"> <?= $status_bphtb['status_dokumen'] ?> </strong>
                                        <?php elseif ($bphtb['id_statusbphtb'] == 2) : ?>
                                            <strong style="color:seagreen"> <?= $status_bphtb['status_dokumen'] ?> </strong>
                                        <?php elseif ($bphtb['id_statusbphtb'] == 3) : ?>
                                            <strong style="color:goldenrod"> <?= $status_bphtb['status_dokumen'] ?> </strong>
                                        <?php elseif ($bphtb['id_statusbphtb'] == 4) : ?>
                                            <strong style="color:red"> <?= $status_bphtb['status_dokumen'] ?> </strong>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
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

                                <div class="col-form-label cold-md-1 col-sm-1">
                                    <label>Status</label>
                                </div>
                                <?php if ($dokumen_batas['nama_dokumenbatas'] == null) : ?>
                                    <div class="col-form-label col-md-3 col-sm-3">
                                        <strong> - </strong>
                                    </div>
                                <?php else : ?>
                                    <div class="col-form-label col-md-3 col-sm-3">
                                        <?php if ($dokumen_batas['id_statusdokbatas'] == 1) : ?>
                                            <strong style="color:red"> <?= $status_dokbatas['status_dokumen'] ?> </strong>
                                        <?php elseif ($dokumen_batas['id_statusdokbatas'] == 2) : ?>
                                            <strong style="color:seagreen"> <?= $status_dokbatas['status_dokumen'] ?> </strong>
                                        <?php elseif ($dokumen_batas['id_statusdokbatas'] == 3) : ?>
                                            <strong style="color:goldenrod"> <?= $status_dokbatas['status_dokumen'] ?> </strong>
                                        <?php elseif ($dokumen_batas['id_statusdokbatas'] == 4) : ?>
                                            <strong style="color:red"> <?= $status_dokbatas['status_dokumen'] ?> </strong>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
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

                                <div class="col-form-label cold-md-1 col-sm-1">
                                    <label>Status</label>
                                </div>
                                <?php if ($dokumen_tambahan['nama_doktambahan'] == null) : ?>
                                    <div class="col-form-label col-md-3 col-sm-3">
                                        <strong> - </strong>
                                    </div>
                                <?php else : ?>
                                    <div class="col-form-label col-md-3 col-sm-3">
                                        <?php if ($dokumen_tambahan['id_statusdoktambahan'] == 1) : ?>
                                            <strong style="color:red"> <?= $status_doktambahan['status_dokumen'] ?> </strong>
                                        <?php elseif ($dokumen_tambahan['id_statusdoktambahan'] == 2) : ?>
                                            <strong style="color:seagreen"> <?= $status_doktambahan['status_dokumen'] ?> </strong>
                                        <?php elseif ($dokumen_tambahan['id_statusdoktambahan'] == 3) : ?>
                                            <strong style="color:goldenrod"> <?= $status_doktambahan['status_dokumen'] ?> </strong>
                                        <?php elseif ($dokumen_tambahan['id_statusdoktambahan'] == 4) : ?>
                                            <strong style="color:red"> <?= $status_doktambahan['status_dokumen'] ?> </strong>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="col-sm-12">
                                <div class="card mt-3">
                                    <div class="card-header">
                                        <strong style="color: darkslategrey !important">Catatan: </strong>
                                    </div>
                                    <div class="card-body">
                                        <p style="color:darkslategrey !important"><?= $permohonan['keterangan'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="field item form-group mt-5" style="float: right !important">
                                <?php if ($this->session->userdata('id_role') == 1) : ?>
                                    <a href="<?= base_url(); ?>kantah_kab_malang/print_BuktiVerifikasi/<?= $pemohon['id_pemohon']; ?>/<?= $permohonan['id_permohonan']; ?>" class="btn btn-dark" style="float: right;"> <i class="fa fa-file-pdf-o"></i> Print Bukti Verifikasi</a>
                                <?php elseif ($this->session->userdata('id_role') == 3) : ?>
                                    <a href="<?= base_url(); ?>admin/print_BuktiVerifikasi/<?= $pemohon['id_pemohon']; ?>/<?= $permohonan['id_permohonan']; ?>" class="btn btn-dark" style="float: right;"> <i class="fa fa-file-pdf-o"></i> Print Bukti Verifikasi</a>
                                <?php endif; ?>
                            </div>


                        </form>
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


<!-- <div class="container">
    <div class="row mt-3">
        <div class="col md-12">

            <div class="card">
                <div class="card-header text-center"><h5>Rincian Permohonan</h5></div>
                
                <div class="card-body">
                
                <h5 class="card-title font-weight-bolder mb-4">Data Pemohon</h5>

                    <form>
                        <div class="form-group row">
                            <label class="col-sm-2">Nama Lengkap</label>
                            <div class="col-sm-4">
                                <strong><?= $pemohon['nama_pemohon'] ?></strong>
                            </div>
                            <div class="col-sm-6">
                                <a href="<?= base_url(); ?>Kantah_kab_malang/verifikasi_berkas/<?= $pemohon['id_pemohon']; ?>/<?= $permohonan['id_permohonan']; ?>" class="btn btn-primary btn-sm" style="float: right;">Verifikasi Berkas Permohonan</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2">NIK</label>
                            <div class="col-sm-8">
                                <strong><?= $pemohon['NIK'] ?></strong>
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
                    
                    <h5 class="card-title font-weight-bolder mb-4">Permohonan</h5>
                    
                    <div class="form-group row">
                        <label class="col-sm-2">Status Permohonan</label>
                        <div class="col-sm-8">
                        <?php if ($status['id_status'] == 1) : ?>
                            <h5><span class="badge badge-danger font-weight-normal"><?= $status['status'] ?></span></h5>
                        <?php elseif ($status['id_status'] == 2) : ?>
                            <h5><span class="badge badge-secondary font-weight-normal"><?= $status['status'] ?></span></h5>
                        <?php elseif ($status['id_status'] == 3) : ?>
                            <h5><span class="badge badge-success font-weight-normal"><?= $status['status'] ?></span></h5>
                        <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2">NIB</label>
                        <div class="col-sm-8"><?= $permohonan['NIB'] ?></div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-2">Kluster</label>
                        <div class="col-sm-8"><?= $permohonan['kluster'] ?></div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-2">Nomor Berkas</label>
                        <div class="col-sm-8"><?= $permohonan['no_berkas'] ?></div>
                    </div>
        
                    <div class="form-group row">
                        <label class="col-sm-2">PBT</label>
                        <div class="col-sm-8"><?= $permohonan['pbt'] ?></div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2">Dokumen KTP</label>
                        <div class="col-sm-8">
                            <img src="<?= base_url() . '/berkas/KTP/' . $dokumen_ktp['nama_dokumenktp']; ?>" width="200"><br>
                            <a href="<?= base_url() . '/berkas/KTP/' . $dokumen_ktp['nama_dokumenktp']; ?>" data-target="#dokumen" data-toggle="modal">Lihat dokumen</a>
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
                    </div>
            
                    <div class="form-group row">
                        <label class="col-sm-2">Dokumen Kartu Keluarga</label>
                        <div class="col-sm-8">
                            <img src="<?= base_url() . '/berkas/Kartu_Keluarga_KK/' . $dokumen_kk['nama_dokumenkk']; ?>" width="200"><br>
                            <a href="<?= base_url() . '/berkas/Kartu_Keluarga_KK/' . $dokumen_kk['nama_dokumenkk']; ?>" data-target="#dokumen" data-toggle="modal">Lihat dokumen</a>
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
                    </div>
            
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

$(document).ready(function () {
    $('#dokumen').on('show.bs.modal', function (e) {
        var img = $(e.relatedTarget).attr('href'); // get image
        $('#showimg').attr('src' , img); //load image in modal
    });
});

</script> -->