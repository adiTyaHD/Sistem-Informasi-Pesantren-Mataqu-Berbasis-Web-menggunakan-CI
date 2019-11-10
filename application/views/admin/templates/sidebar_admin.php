<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-white accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/index'); ?>">
        <div class="sidebar-brand-icon">
            <div class="logo-mataqu text-center">
                <img src="<?= base_url('assets/images/logo-baru-18.png'); ?>" alt="Image" class="img-fluid rounded"></div>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <?php
    $role_id = $this->session->userdata('role_id');
    $queryMenu =  "SELECT `user_menu`.`id`,`menu`
                    FROM `user_menu` JOIN `user_akses_menu` 
                    ON `user_menu`.`id` = `user_akses_menu`.`menu_id`
                WHERE `user_akses_menu`.`role_id` = $role_id
                ORDER BY `user_akses_menu`.`menu_id` ASC ";

    $menu = $this->db->query($queryMenu)->result_array();

    ?>

    <!--LOOPING MENU DUDEE -->
    <?php foreach ($menu as $m) : ?>

        <div class="sidebar-heading">
            <?= $m['menu']; ?>
        </div>

        <!-- QUERY SUBMENU UNTUK MENYESUAIKAN MENU-->
        <?php
        $menuId = $m['id'];
        $querySubMenu = "SELECT * 
                            FROM `user_sub_menu` JOIN `user_menu`
                            ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                            WHERE `user_sub_menu`.`menu_id` = $menuId
                            AND `user_sub_menu`.`is_active` = 1
   ";
        $SubMenu = $this->db->query($querySubMenu)->result_array();
        ?>


        <?php foreach ($SubMenu as $sm) : ?>
            <?php if ($title == $sm['title']) : ?>
                <li class="nav-item active">
                <?php else : ?>
                <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link pb-0 " href="<?= base_url($sm['url']); ?>">
                    <i class="<?= $sm['icon']; ?>"></i>
                    <span><?= $sm['title']; ?></span></a>

            </li>

        <?php endforeach; ?>
        <hr class="sidebar-divider mt-3">
    <?php endforeach; ?>



    <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#logoutModal" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>




    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sideb ar -->