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
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newgambarmodal">Add new gambar</a>

            <table class=" table table-hover" id="table_id">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Caption</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>

                    <?php foreach ($galeri as $g) : ?>

                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $g['caption']; ?></td>
                            <td><img src="<?= base_url() ?>upload/img/<?= $g['gambar']; ?>" alt="" width="72px"> </td>
                            <td><?= $g['kategori']; ?></td>

                            <td>
                                <a href="<?= base_url() ?>admin/editgambar/<?= $g['id'] ?>" class="badge badge-primary">Edit</a>
                                <a href="<?= base_url() ?>admin/deletegambar/<?= $g['id'] ?>" class="badge badge-danger tombol-hapus">Delete</a>

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
<div class="modal fade" id="newgambarmodal" tabindex="-1" role="dialog" aria-labelledby="newgambarmodalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newgambarmodalLabel">Add new gambar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('admin/tambahgambar') ?>

            <div class="modal-body">
                <div class="form-group">
                    <label for="title">Caption</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title Name" value="">
                    <?= form_error('title', '<small class="text-danger">', '</small>') ?>

                </div>
                <div class="form-group ">
                    <label for="title">Gambar</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                    <?= form_error('image', '<small class="text-danger">', '</small>') ?>

                </div>
                <div class=" form-group">
                    <select class="form-control" id="image_category" name="image_category">
                        <option value=""> select kategori gambar </option>
                        <option value="1">Gambar kegiatan</option>
                        <option value="2">Gambar Dauroh</option>
                        <option value="3">Gambar Santri Al-quran</option>
                        <option value="4">Gambar Santri Takhosus</option>
                        <option value="5">Gambar Interior Camp Borneo</option>
                        <option value="6">Gambar Eksterior Camp Borneo</option>
                        <option value="7">Gambar Interior Villa Kembar</option>
                        <option value="8">Gambar Eksterior Villa Kembar</option>
                        <option value="9">Gambar Interior Asrama Putra</option>
                        <option value="10">Gambar Eksterior Asrama Putra</option>
                        <option value="11">Gambar Interior Asrama Putri</option>
                        <option value="12">Gambar Eksterior Asrama Putri</option>
                        <option value="13">Gambar Dokumen</option>
                        <option value="14">Gambar Brosur</option>
                        <option value="15">Gambar Brosur Reguler</option>
                        <option value="16">Gambar Brosur Takhosus</option>






                    </select>
                    <?= form_error('kategori_gambar', '<small class="text-danger">', '</small>') ?>

                </div>
                <div class=" modal-footer">
                    <button type=" button " class=" btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add gambar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


<!-- End of Main Content -->