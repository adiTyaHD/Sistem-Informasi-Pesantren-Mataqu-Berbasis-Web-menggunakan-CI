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
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newjadwalmodal">Add Jadwal Baru</a>

            <table class=" table table-hover" id="table_id">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jam</th>
                        <th scope="col">Senin</th>
                        <th scope="col">Selasa</th>
                        <th scope="col">Rabu</th>
                        <th scope="col">Kamis</th>
                        <th scope="col">Jum'at</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>

                    <?php foreach ($jadwal as $j) : ?>

                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $j['jam']; ?></td>
                            <td><?= $j['senin']; ?></td>
                            <td><?= $j['selasa']; ?></td>
                            <td><?= $j['rabu']; ?></td>
                            <td><?= $j['kamis']; ?></td>
                            <td><?= $j['jumat']; ?></td>

                            <td>
                                <a href="<?= base_url() ?>admin/editjadwal/<?= $j['id_jadwal'] ?>" class="badge badge-primary">Edit</a>
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
<div class="modal fade" id="newjadwalmodal" tabindex="-1" role="dialog" aria-labelledby="newjadwalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newjadwalmodalLabel">Add new Schedule</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/jadwal') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="jam">Jam</label>
                        <input type="text" class="form-control" id="jam" name="jam" placeholder="Masukan Jam" value="">
                        <?= form_error('jam', '<small class="text-danger">', '</small>') ?>

                    </div>

                    <div class="form-group">
                        <label for="Senin">Jadwal Senin</label>
                        <input type="text" class="form-control" id="senin" name="senin" placeholder="Masukan Jadwal" value="">
                        <?= form_error('senin', '<small class="text-danger">', '</small>') ?>

                    </div>
                    <div class="form-group">
                        <label for="Selasa">Jadwal Selasa</label>
                        <input type="text" class="form-control" id="selasa" name="selasa" placeholder="Masukan Jadwal" value="">
                        <?= form_error('selasa', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="Rabu">Jadwal Rabu</label>
                        <input type="text" class="form-control" id="rabu" name="rabu" placeholder="Masukan Jadwal" value="">
                        <?= form_error('rabu', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="Kamis">Jadwal Kamis</label>
                        <input type="text" class="form-control" id="kamis" name="kamis" placeholder="Masukan Jadwal" value="">
                        <?= form_error('kamis', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="jumat">Jadwal Jumat</label>
                        <input type="text" class="form-control" id="jumat" name="jumat" placeholder="Masukan Jadwal" value="">
                        <?= form_error('jumat', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="kategori" id="kategori">pilih jadwal</label>
                        <select class="custom-select" id="kategori" name="kategori">
                            <option selected> Masukan Jadwal disantri ? </option>
                            <option value="1">Santri Reguler</option>
                            <option value="2">Santri Dauroh</option>
                        </select>
                    </div>
                    <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class=" modal-footer">
                        <button type=" button " class=" btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Jadwal</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>


<!-- End of Main Content -->