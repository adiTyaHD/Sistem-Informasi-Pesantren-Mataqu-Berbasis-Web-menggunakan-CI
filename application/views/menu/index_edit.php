<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-6">
            <?= form_error('menu', '<div class="alert alert-danger" role = "alert">', '</div>'); ?>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <?php if ($this->session->flashdata('message')) : ?>


            <?php endif; ?>

            <form action="<?= base_url('menu/menuUpdate/'); ?><?= $menu_edit['id'] ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title Name" value="<?= $menu_edit['title'] ?>">
                        <?= form_error('title', '<small class="text-danger">', '</small>') ?>

                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="text" class="form-control" id="url" name="url" placeholder="Url Name" value="<?= $menu_edit['url'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Menu ID">Menu ID</label>
                        <input type="text" class="form-control" id="Menu ID" name="menu_id" placeholder="Menu ID Name" value="<?= $menu_edit['menu_id'] ?>">
                    </div>
                    <div class="form-group">
                        <span>Icon : </span><i class="<?= $menu_edit['icon'] ?>"></i>
                        <input type="text" class="form-control" id="menu" name="icon" placeholder="Icon Name" value="<?= $menu_edit['icon'] ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update submenu</button>

                    </div>
            </form>
        </div>
    </div>


    <!-- /.container-fluid -->

</div>
</div>
</div>
<!-- End of Main Content -->