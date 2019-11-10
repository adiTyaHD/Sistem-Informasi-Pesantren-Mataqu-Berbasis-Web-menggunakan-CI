<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>

    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
                <?php if ($this->session->flashdata('message')) : ?>


                <?php endif; ?>
                <?= form_open_multipart('admin/updateberita/' . $editberita['id']) ?>
                <div class="form-group">
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="masukan judul" value="<?= $editberita['judul'] ?>">
                    <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>

                </div>
                <div class="row">
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-2">
                                <img width="130px" src="<?= base_url('upload/img/') . $editberita['gambar']; ?>" alt="">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                    <label class="custom-file-label" for="gambar">Pilih Gambar Content</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-12 ">
                        <label for="kategori"></label>
                        <select name="kategori" class="form-control" id="kategori">
                            <option value=""><?= $editberita['kategori'] ?></option>
                            <option value="1">mataqu news</option>
                            <option value="2">setoran hafalan</option>
                            <option value="3">panduan hafalan</option>
                            <option value="4">wakaf & donasi</option>
                        </select>
                    </div>
                    <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <textarea name="berita" id="berita" cols="30" rows="10"><?= $editberita['berita'] ?></textarea>
                    </div>

                </div>
                <?= form_error('berita', '<small class="text-danger pl-3">', '</small>'); ?>

            </div>

        </div>
        <div class="form-group row justify-content-end float-right">
            <div class="col-sm">
                <button type="submit" class="btn btn-primary mr-3 mt-3"> Update Berita </button>
            </div>
        </div>
        </form>

    </div>
</div>

</div>
</div>


<!-- /.container-fluid -->

</div>
</div>
<!-- End of Main Content -->