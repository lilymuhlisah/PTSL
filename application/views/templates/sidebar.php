<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="" class="site_title">
                        <img src="<?= base_url('asset/'); ?>/images/bpn.png" style="height: 100%;"> <span>PTSL</span>
                    </a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="<?= base_url('asset/'); ?>/images/img.png" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Selamat Datang,</span>
                        <h2><?= $u_login['nama_lengkap']; ?></h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>MENU</h3>
                        <ul class="nav side-menu">

                            <?php
                            $id_role = $this->session->userdata('id_role');

                            $queryMenu = "SELECT * FROM `u_menu`
                                            JOIN `u_access_menu` ON `u_menu`.`id_menu` = `u_access_menu`.`id_menu`
                                            WHERE `u_access_menu`.`id_role` = $id_role
                                            ORDER BY `u_access_menu`.`id_menu` ASC";

                            $menu = $this->db->query($queryMenu)->result_array();
                            ?>

                            <!--LOOPING MENU -->
                            <?php foreach ($menu as $mn) : ?>
                                <li><a><i class="<?= $mn['icon']; ?>"></i> <?= $mn['menu']; ?> <span class="fa fa-chevron-down"></span></a>

                                    <!-- SUB MENU -->
                                    <?php
                                    $id_menu = $mn['id_menu'];

                                    $querySubMenu = "SELECT * FROM `u_sub_menu`
                                                    WHERE `u_sub_menu`.`id_menu` = $id_menu
                                                    AND `u_sub_menu`.`is_active` = 1";

                                    $subMenu = $this->db->query($querySubMenu)->result_array();
                                    ?>


                                    <ul class="nav child_menu">
                                        <?php foreach ($subMenu as $smn) : ?>
                                            <li><a href="<?= base_url($smn['url']); ?>"><?= $smn['submenu']; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>

                                </li>
                            <?php endforeach; ?>

                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

            </div>
        </div>