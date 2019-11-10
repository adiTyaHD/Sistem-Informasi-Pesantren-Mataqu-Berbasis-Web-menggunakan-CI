<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-6">

            <form action="<?= base_url('admin/lihatpesan/'); ?><?= $kontak['id_saran'] ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Nama</label>
                        <input type="text" class="form-control text-muted" id="title" name="title" placeholder="Nama lengkap" disabled value="<?= $kontak['nama_lengkap'] ?>">

                    </div>
                    <div class="form-group">
                        <label for="url">Email</label>
                        <input type="text" class="form-control text-muted" id="url" name="url" placeholder="Email Pengirim" disabled value="<?= $kontak['email'] ?>">
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="pesan">Saran</label>
                            <textarea name="pesan" id="pesan" cols="10" rows="5" class="form-control" readonly><?= $kontak['saran'] ?></textarea>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <a href="<?= base_url('admin/message'); ?>" class="btn btn-secondary">kembali</a>
                        <a href="<?= base_url() ?>admin/isread/<?= $kontak['id_saran'] ?>" class="btn btn-success">reply</a>

                    </div>
            </form>
        </div>
    </div>


    <!-- /.container-fluid -->

</div>
</div>
</div>
<!-- End of Main Content -->