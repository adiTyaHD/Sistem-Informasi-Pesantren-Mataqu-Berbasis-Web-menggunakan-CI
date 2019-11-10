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

            <form action="<?= base_url('menu/updatemenuu/'); ?><?= $menu['id'] ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Ubah Menu </label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Menu Name" value="<?= $menu['menu'] ?>">
                        <?= form_error('title', '<small class="text-danger">', '</small>') ?>

                    </div>
                    <div class="modal-footer">
                        <a href="<?= base_url('menu/index'); ?>" class="btn btn-secondary">Close</a>
                        <button type="submit" class="btn btn-primary">Update menu</button>

                    </div>
            </form>
        </div>
    </div>


    <!-- /.container-fluid -->

</div>
</div>
</div>
<!-- End of Main Content -->