<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-xl-12">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <?php if ($this->session->flashdata('message')) : ?>

            <?php endif; ?>

            <div class="overflow-x" style="overflow-x : scroll;">
                <table class=" table table-hover" id="table_id">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Nisn</th>
                            <th scope="col">nama-santri</th>
                            <th scope="col">email</th>
                            <th scope="col">jkel</th>
                            <th scope="col">birthdate</th>
                            <th scope="col">kategori</th>
                            <th scope="col">nama-wali</th>
                            <th scope="col">alamat</th>
                            <th scope="col">telp</th>
                            <th scope="col">Photo</th>
                            <th scope="col">lulusan</th>
                            <th scope="col">sederajat1</th>
                            <th scope="col">sederajat2</th>
                            <th scope="col">pondok_pesantren</th>
                            <th scope="col">jumlah juz</th>
                            <th scope="col">bukti</th>
                            <th scope="col">status</th>
                            <th scope="col"> Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pendaftar as $r) : ?>

                            <tr class="text-center">
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $r['nisn']; ?></td>
                                <td><?= $r['nama_santri']; ?></td>
                                <td><?= $r['email']; ?></td>
                                <td><?= $r['jkel']; ?></td>
                                <td><?= $r['birthdate']; ?></td>
                                <td><?= $r['kategori']; ?></td>
                                <td><?= $r['nama_wali']; ?></td>
                                <td><?= $r['alamat']; ?></td>
                                <td><?= $r['telp']; ?></td>
                                <td> <img src="<?= base_url() ?>upload/img/<?= $r['photo']; ?>" alt="" width="72px"></td>
                                <td><?= $r['lulusan']; ?></td>
                                <td><?= $r['sederajat1']; ?></td>
                                <td><?= $r['sederajat2']; ?></td>
                                <td><?= $r['pondok_pesantren']; ?></td>
                                <td><?= $r['jml_juz']; ?></td>
                                <td> <img src="<?= base_url() ?>upload/img/<?= $r['bukti']; ?>" alt="" width="80px"></td>

                                <td>
                                    <?php if ($r['is_approve'] == 0) : ?><i class="fas fa-spinner fa-spin ml-4"></i>
                                    <?php else :  1 ?> <i class="fas fa-check ml-4"></i>

                                    <?php endif; ?>
                                </td>



                                <td>
                                    <a href="<?= base_url('admin/approve/') . $r['id'] ?>" class="badge badge-success">Terima</a>
                                    <a href="<?= base_url('admin/decline/') . $r['id'] ?>" class="badge badge-danger tombol-hapus">Hapus</a>
                                </td>

                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->

</div>