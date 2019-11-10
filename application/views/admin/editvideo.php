    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


        <div class="row">
            <div class="col-lg-6">
                <?= form_error('#', '<div class="alert alert-danger" role = "alert">', '</div>'); ?>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
                <?php if ($this->session->flashdata('message')) : ?>
                <?php endif; ?>

                <?= form_open_multipart('admin/editvideo/' . $editvideo['id']); ?>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Nama ID Video</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title Name" value="<?= $editvideo['name_id']; ?>">
                        <?= form_error('title', '<small class="text-danger">', '</small>') ?>
                    </div>

                    <div class="form-group ">
                        <div class="row mt-5 mb-5">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <img width="130px" src="<?= base_url('upload/img/') . $editvideo['gambar']; ?>" alt="">

                                    </div>
                                    <div class="col-sm-8 ml-5">
                                        <label for="image">Masukan Gambar baru</label>

                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                            <label class="custom-file-label" for="image">Pilih Gambar</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="URL">URL</label>
                        <input type="text" class="form-control" id="URL" name="URL" placeholder="URL video" value="<?= $editvideo['url']; ?>">
                        <?= form_error('URL', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class=" form-group">
                        <label for="vid_kategori">Masukan Kateogri Gambar</label>
                        <select class="form-control" id="vid_kategori" name="vid_kategori">
                            <option value=""> <?= $editvideo['kategori']; ?> </option>
                            <option value="1">Video kegiatan</option>
                            <option value="2">Video Program Santri Dauroh</option>
                            <option value="3">Video Program Santri Al-quran</option>
                            <option value="4">Video Program Santri Takhosus</option>
                        </select>
                        <?= form_error('vid_kategori', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="modal-footer">
                        <a href="<?= base_url('admin/tambahvideo'); ?>"><button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button></a>
                        <button type="submit" class="btn btn-primary">Update Video</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>