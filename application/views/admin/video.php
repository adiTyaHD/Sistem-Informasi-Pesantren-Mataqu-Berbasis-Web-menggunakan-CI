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
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newvideomodal">Add new videos</a>

            <table class=" table table-hover" id="table_id">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Video</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Video</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>

                    <?php foreach ($video as $v) : ?>

                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $v['name_id']; ?></td>
                            <td><img src="<?= base_url() ?>upload/img/<?= $v['gambar']; ?>" alt="" width="72px"> </td>
                            <td class="text-center"><?= $v['kategori']; ?></td>
                            <td><?= $v['url']; ?></td>

                            <td>
                                <a href="<?= base_url() ?>admin/editvideo/<?= $v['id'] ?>" class="badge badge-primary">Edit</a>
                                <a href=" <?= base_url() ?>admin/hapusvideo/<?= $v['id'] ?>" class="badge badge-danger tombol-hapus">Delete</a>
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
<div class="modal fade" id="newvideomodal" tabindex="-1" role="dialog" aria-labelledby="newvideomodalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newvideomodalLabel">Add new video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('admin/tambahvideo') ?>

            <div class="modal-body">
                <div class="form-group">
                    <label for="title">Nama</label>
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

                <div class="form-group">
                    <label for="URL">URL</label>
                    <input type="text" class="form-control" id="URL" name="URL" placeholder="URL video" value="">
                    <?= form_error('URL', '<small class="text-danger">', '</small>') ?>
                </div>
                <div class=" form-group ">
                    <select class="form-control" id="vid_kategori" name="vid_kategori">
                        <option value=""> select kategori video </option>
                        <option value="1">Video kegiatan</option>
                        <option value="2">Video Program Santri Dauroh</option>
                        <option value="3">Video Program Santri Al-quran</option>
                        <option value="4">Video Program Santri Takhosus</option>

                    </select>
                    <?= form_error('vid_kategori', '<small class="text-danger">', '</small>') ?>
                    <div class=" modal-footer">
                        <button type=" button " class=" btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Video</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- End of Main Content -->