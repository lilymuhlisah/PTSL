    <div>
        <!-- <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a> -->
        <div class="login_wrapper" style="margin-top: 0% !important">
            <div id="register" class="animate form login_form">
                <section class="login_content" style="text-shadow:unset !important">
                    <form method="post" action="<?= base_url('Login/registration'); ?>">
                        <h1>Registrasi</h1>
                        <div>
                            <input type="text" style="margin: 0% !important" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" value="<?= set_value('nama_lengkap'); ?>" />
                            <?= form_error('nama_lengkap', '<small class="form-text text-danger text-left" style="padding-left: 3% !important">', '</small>'); ?>
                            <div style="margin-bottom: 3%"></div>
                        </div>
                        <div>
                            <select class="form-control" style="margin: 0% !important" id="instansi" name="instansi" value="<?= set_value('instansi'); ?>">
                                <option selected disabled value="">Pilih Instansi</option>
                                <?php foreach ($u_instansi as $ins) : ?>
                                    <option value="<?= $ins['id_instansi']; ?>"><?= $ins['instansi']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('instansi', '<small class="form-text text-danger text-left" style="padding-left: 3% !important">', '</small>'); ?>
                            <div style="margin-bottom: 3%"></div>
                        </div>
                        <div>
                            <select class="form-control" style="margin-bottom: 0% !important" id="jabatan" name="jabatan" value="<?= set_value('jabatan'); ?>">
                                <option selected disabled value="">Pilih Jabatan</option>
                                <?php foreach ($jabatan as $jb) : ?>
                                    <option value="<?= $jb; ?>"><?= $jb; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('jabatan', '<small class="form-text text-danger text-left" style="padding-left: 3% !important">', '</small>'); ?>
                            <div style="margin-bottom: 3%"></div>
                        </div>
                        <div>
                            <input type="text" class="form-control" style="margin-bottom: 0% !important" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>" />
                            <?= form_error('email', '<small class="form-text text-danger text-left" style="padding-left: 3% !important">', '</small>'); ?>
                            <div style="margin-bottom: 3%"></div>
                        </div>
                        <div>
                            <input type="text" class="form-control" style="margin-bottom: 0% !important" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>" />
                            <?= form_error('username', '<small class="form-text text-danger text-left" style="padding-left: 3% !important">', '</small>'); ?>
                            <div style="margin-bottom: 3%"></div>
                        </div>
                        <div>
                            <input type="password" class="form-control" style="margin-bottom: 0% !important" id="password1" name="password1" placeholder="Kata Sandi" />
                            <?= form_error('password1', '<small class="form-text text-danger text-left" style="padding-left: 3% !important">', '</small>'); ?>
                            <div style="margin-bottom: 3%"></div>
                        </div>
                        <div>
                            <input type="password" class="form-control" style="margin-bottom: 0% !important" id="password2" name="password2" placeholder="Konfirmasi Kata Sandi" />
                        </div>
                        <div>
                            <button type="submit" class="btn btn-sm btn-info submit" style="margin:5%">Kirim</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="<?= base_url(); ?>Login" class="to_register"> Log in </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h2><img src="<?= base_url('asset/'); ?>/images/bpn.png" style="max-height: 45px; max-width: 45px; margin-right: 10px"></img>Kantor Pertanahan Kabupaten Malang</h2>
                                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
    </div>
    </body>

    </html>