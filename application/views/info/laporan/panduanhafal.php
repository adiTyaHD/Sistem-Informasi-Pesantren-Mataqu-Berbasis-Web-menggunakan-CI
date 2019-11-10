<div class="container pt-5 mt-5">
    <?php if (empty($berita)) : ?>
        <div class="alert alert-danger" role="alert">
            <center>
                <strong class="text-center"> Maaf berita / artikel yang anda cari tidak ditemukan </strong>
            </center>
        </div>

        <h1 class="text-center" style="color:#535c68;font-family:Verdana, Geneva, Tahoma, sans-serif;"> Maaf, telah terjadi kesalahan </h1>
        <h3 class="text-center mt-5 mb-5"><i class="fas fa-times fa-8x"></i> </h3>
        <p class="text-center mb-5" style="color:#535c68;font-size:14pt;font-family:Verdana, Geneva, Tahoma, sans-serif;"> The file is'nt uploaded by admin or has been deleted by admin please hit the button below to contact admin </p>
        <center>
            <a href="<?= base_url('home/laporanhafalan') ?>" class="btn-lg btn-success"><i class="fas fa-backward"></i>&nbsp; kembali</a>
            <a href="<?= base_url('home/contact') ?>" class="btn-lg btn-info"><i class="fas fa-user"></i>&nbsp; Contact Admin</a>
        </center>

    <?php endif; ?>
</div>

<div class="container mb-5 pt-3">
    <?= $this->session->flashdata('message'); ?>
    <div class="row mb-5">

        <?php foreach ($berita as $b) : ?>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                <div class="media-with-text mb-5">
                    <div class="mb-4">
                        <a href="<?= base_url('home/detail/') . $b['id']; ?>">
                            <img src="<?= base_url() ?>upload/img/<?= $b['gambar'] ?>" alt="" class=" img-fluid" height="450px">
                        </a>
                    </div>
                    <h2 class="h5 mb-2" id="hvrberita"><a href="<?= base_url('home/detail/') . $b['id']; ?>""><?= $b['judul']; ?></a></h2>
                        <p class=" card-text " id=" dateberita"><i class="far fa-calendar"></i>&nbsp;<small class="text-muted"> <?= date('d,F Y', $b['date_created']); ?></small>
                            &nbsp;&bullet;&nbsp;<i class="fas fa-user-tie">&nbsp;</i> Admin Mataqu</p>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <?= $this->pagination->create_links(); ?>

</div>