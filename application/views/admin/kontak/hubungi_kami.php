<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="table-responsive" style="max-height:350px;">
        <table id="myTable" class="table table-stripped" cellspacing="0" width="100%">
            <thead class="table-fixed">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
                        <?php if ($this->session->flashdata('message')) : ?>


                        <?php endif; ?>


                        <table class=" table table-hover" id="table_id">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">No.Hp</th>
                                    <th scope="col">Pesan</th>
                                    <th scope="col">status</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($hubungi_kami as $hub_kami) : ?>

                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $hub_kami['nama_lengkap']; ?></td>
                                        <td><?= $hub_kami['email']; ?></td>
                                        <td><?= $hub_kami['phone']; ?></td>
                                        <td><?= $hub_kami['saran']; ?></td>
                                        <td> <?php if ($hub_kami['is_read'] == 0) : ?><i class="fas fa-spinner fa-spin ml-4"></i>
                                            <?php else :  1 ?> <i class="fas fa-check ml-4"></i>

                                            <?php endif; ?></td>

                                        <td>
                                            <a href="<?= base_url() ?>admin/lihatpesan/<?= $hub_kami['id_saran'] ?>" class="badge badge-primary">Lihat</a>
                                            <a href="<?= base_url() ?>admin/hapuspesan/<?= $hub_kami['id_saran'] ?>" class="badge badge-danger tombol-hapus">Delete</a>
                                        </td>

                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <!-- <p class="mt-2 mb-0 text-dark"><?= $counthubkami; ?> total data.</p> -->

                    </div>
                </div>
    </div>

    <!-- End of Main Content -->

    <!-- Modal -->