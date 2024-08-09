<section class="sidebar">
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>
    <!-- /.search form -->

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">

        <?php
        $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT `user_menu`.`id`, `menu`
                FROM `user_menu` JOIN `user_access_menu`
                ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                WHERE `user_access_menu`.`role_id` = $role_id
                ORDER BY `user_access_menu`.`menu_id` ASC
                ";
        $menu = $this->db->query($queryMenu)->result_array();
        ?>
        <!-- Looping Menu -->
        <?php foreach ($menu as $m) : ?>
            <div class="sidebar-heading">
                <?php $m['menu']; ?>
            </div>

            <?php
            $menuId = $m['id'];
            $querySubMenu = "SELECT * FROM `user_sub_menu`
                                WHERE `menu_id` = $menuId
                                AND `is_active` =1
                                ";
            $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>

            <?php foreach ($subMenu as $sm) : ?>
                <li style="text: white;">
                    <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                        <i class="<?= $sm['icon']; ?>"></i>
                        <span><?= $sm['title']; ?></span>
                    </a>
                </li>

            <?php endforeach; ?>

        <?php endforeach; ?>
        <li><?php echo anchor('auth/logout', "<i class='fa fa-sign-out'></i> LOGOUT"); ?></li>

    </ul>
</section>
<!-- /.sidebar -->