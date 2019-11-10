<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-12">
            <?= form_error('menu', '<div class="alert alert-danger" role = "alert">', '</div>'); ?>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <?php if ($this->session->flashdata('message')) : ?>


            <?php endif; ?>
            <table class=" table table-hover" id="table_id">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">gambar</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Action</th>


                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kelola as $k) : ?>

                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $k['judul']; ?></td>
                            <td><?= $k['gambar']; ?></td>
                            <td><?= $k['kategori']; ?></td>

                            <td>

                                <a href="<?= base_url() ?>admin/updateberita/<?= $k['id'] ?>" class="badge badge-success">edit</a>
                                <a href="<?= base_url() ?>admin/deleteberita/<?= $k['id'] ?>" class="badge badge-danger tombol-hapus">delete</a>
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

</div>
</div>
</div>