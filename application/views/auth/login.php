<div>
    <!-- <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a> -->

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content" style="text-shadow:unset !important">
                <form method="post" action="<?= base_url('Login'); ?>">
                    <h1>Login</h1>

                    <?= $this->session->flashdata('message') ?>

                    <div>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>" />
                        <?= form_error('username', '<small class="form-text text-danger text-left" style="padding-left: 3% !important">', '</small>'); ?>
                    </div>
                    <div>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="" />
                        <?= form_error('password', '<small class="form-text text-danger text-left" style="padding-left: 3% !important">', '</small>'); ?>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-sm btn-success submit"><i class="fa fa-sign-in"></i> Masuk </button>
                        <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <!-- <p class="change_link">New to site?
                            <a href="<?= base_url(); ?>Login/registration/" class="to_register"> Create Account </a>
                        </p> -->

                        <br />

                        <div>
                            <h2><img src="<?= base_url('asset/') . 'images/bpn.png' ?>" style="max-height: 45px; max-width: 45px; margin-right: 10px"></img>Kantor Pertanahan Kabupaten Malang</h2>
                            <p>Copyright ©2020 Sistem Informasi PTSL.<br> All Rights Reserved.</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>

</html>