<div class="site-section">
    <div class="row mb-5">

        <?php
        ?>
        <div class="col-md-12 mb-5 mb-lg-0">
            <div class="media-with-text mb-5">
                <div class="mb-4">
                    <a href="#">
                        <img src="<?= base_url() ?>upload/img/<?= $detailwakaf->gambar; ?>" alt="" class=" img-fluid" width="1200px;">
                    </a>
                </div>
                <div class="container">
                    <h2 class="h4 mb-2 text-center detailjudul"><?= $detailwakaf->judul ?></h2>
                    <p class="card-text ml-4" id="dateberita"><i class="far fa-calendar"></i>&nbsp;<small class="text-muted"> <?= date('d,F Y', $detailwakaf->date_created); ?></small>
                        &nbsp;&bullet;&nbsp;<i class="fas fa-user-tie">&nbsp;</i> Admin Mataqu</p>
                    <p id="isiberita"><?= $detailwakaf->berita ?></p>
                </div>
            </div>
            <?php
            ?>

        </div>

    </div>
</div>