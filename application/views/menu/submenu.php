<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <?php if ($this->session->flashdata('message')) : ?>


            <?php endif; ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newsubMenuModal">Add new subMenu</a>

            <table class=" table table-hover" id="table_id">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Url</th>
                        <th scope="col">Icon</th>
                        <th scope="col" class="text-center">Active</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>

                    <?php foreach ($subMenu as $sm) : ?>

                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $sm['title']; ?></td>
                            <td><?= $sm['menu']; ?></td>
                            <td><?= $sm['url']; ?></td>
                            <td><?= $sm['icon']; ?></td>
                            <td class="text-center"><?= $sm['is_active']; ?></td>

                            <td>
                                <a href="<?= base_url() ?>menu/updateMenu/<?= $sm['id'] ?>" class="badge badge-primary">Edit</a>
                                <a href="<?= base_url() ?>menu/deleteMenu/<?= $sm['id'] ?>" class="badge badge-danger tombol-hapus">Delete</a>
                            </td>

                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>


    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="newsubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newsubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newsubMenuModalLabel">Add new submenu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/submenu'); ?>" method="post">

                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title Name" value="">
                        <?= form_error('title', '<small class="text-danger">', '</small>') ?>

                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="text" class="form-control" id="url" name="url" placeholder="Url Name">
                        <?= form_error('url', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class=" form-group">
                        <select class="form-control" id="menu_id" name="menu_id">
                            <option value=""> select menu </option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>">
                                    <?= $m['menu']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <span>Icon : </span>
                        <input type="text" class="form-control" id="menu" name="icon" placeholder="Icon Name">
                        <?= form_error('icon', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                            <label class="form-check-label" for="is_active">
                                Active?
                            </label>
                        </div>
                    </div>
                    <div class=" modal-footer">
                        <button type=" button " class=" btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add submenu</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>