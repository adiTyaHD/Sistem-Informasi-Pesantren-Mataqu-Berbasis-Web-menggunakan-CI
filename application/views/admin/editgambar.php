<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-6">
            <?= form_error('#', '<div class="alert alert-danger" role = "alert">', '</div>'); ?>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <?php if ($this->session->flashdata('message')) : ?>
            <?php endif; ?>

            <?= form_open_multipart('admin/editgambar/' . $editgambar['id']); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="caption">Caption</label>
                    <input type="text" class="form-control" id="caption" name="caption" placeholder="Masukan Caption" value="<?= $editgambar['caption']; ?>">
                    <?= form_error('caption', '<small class="text-danger">', '</small>') ?>
                </div>

                <div class="row mt-5 mb-5">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-2">
                                <img width="130px" src="<?= base_url('upload/img/') . $editgambar['gambar']; ?>" alt="">

                            </div>
                            <div class="col-sm-8 ml-5">
                                <label for="image">Masukan Gambar baru</label>

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                    <label class="custom-file-label" for="image">Pilih Gambar Content</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class=" form-group">
                    <label for="image_category">Masukan Kateogri Gambar</label>
                    <select class="form-control" id="image_category" name="image_category">
                        <option value=""> <?= $editgambar['kategori']; ?> </option>
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
                    <?= form_error('image_category', '<small class="text-danger">', '</small>') ?>
                </div>
            </div>
            <div class="modal-footer">
                <a href="<?= base_url('admin/tambahgambar'); ?>"><button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button></a>
                <button type="submit" class="btn btn-primary">Update menu</button>
            </div>
            </form>

        </div>

    </div>
</div>

</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->