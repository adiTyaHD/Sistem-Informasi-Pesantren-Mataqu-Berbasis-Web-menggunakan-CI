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

            <form action="<?= base_url('admin/editjadwal/' . $editjadwal['id_jadwal']); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="jam">Jam</label>
                        <input type="text" class="form-control" id="jam" name="jam" placeholder="Masukan Jam" value="<?= $editjadwal['jam']; ?>">
                        <?= form_error('jam', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="Senin">Jadwal Senin</label>
                        <input type="text" class="form-control" id="senin" name="senin" placeholder="Masukan Jadwal" value="<?= $editjadwal['senin']; ?>">
                        <?= form_error('senin', '<small class="text-danger">', '</small>') ?>

                    </div>
                    <div class="form-group">
                        <label for="Selasa">Jadwal Selasa</label>
                        <input type="text" class="form-control" id="selasa" name="selasa" placeholder="Masukan Jadwal" value="<?= $editjadwal['selasa']; ?>">
                        <?= form_error('selasa', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="Rabu">Jadwal Rabu</label>
                        <input type="text" class="form-control" id="rabu" name="rabu" placeholder="Masukan Jadwal" value="<?= $editjadwal['rabu']; ?>">
                        <?= form_error('rabu', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="Kamis">Jadwal Kamis</label>
                        <input type="text" class="form-control" id="kamis" name="kamis" placeholder="Masukan Jadwal" value="<?= $editjadwal['kamis']; ?>">
                        <?= form_error('kamis', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="jumat">Jadwal Jumat</label>
                        <input type="text" class="form-control" id="jumat" name="jumat" placeholder="Masukan Jadwal" value="<?= $editjadwal['jumat']; ?>">
                        <?= form_error('jumat', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="kategori" id="kategori">pilih jadwal</label>
                        <select class="custom-select" id="kategori" name="kategori">
                            <option selected><?= $editjadwal['kategori']; ?></option>
                            <option value="1">Santri Reguler</option>
                            <option value="2">Santri Dauroh</option>
                        </select>
                    </div>
                    <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="modal-footer">
                        <a href="<?= base_url('admin/jadwal'); ?>"><button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button></a>
                        <button type="submit" class="btn btn-primary">Update Jadwal</button>

                    </div>
            </form>
        </div>
    </div>


    <!-- /.container-fluid -->

</div>
</div>
</div>
<!-- End of Main Content -->