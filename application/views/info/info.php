<style>
    .paypal {
        background-color: #003087;
    }

    .gutter {
        display: flex;
        flex-flow: row wrap;

    }

    .element {
        margin: auto;
        padding: 0.938em;
        box-sizing: border-box;
        margin-top: 35pt;

    }

    h1 {
        color: #fff;
        margin: 0;
        padding: 0;
        font-size: 1.3rem;
        line-height: 1.1em;
        font-weight: 700;
    }

    .small {
        font-size: 0.95rem;
        font-weight: 400;
    }

    p {
        font-size: 0.95rem;
        font-weight: 400;
        margin: 1.7rem 0 0 0;
        padding: 0;
        line-height: 1.4rem;
    }

    .amount {
        margin: 2rem 0 0 0;
        font-size: 1.8rem;
        font-weight: 700;
        text-align: right;
    }

    /* ---- Definition Card ---- */
    .lx-card {
        width: 21.87em;
        height: 13.125em;
        border-radius: 0.938em;
        box-shadow: 0.2em 0.2em 0.938em rgba(0, 0, 0, 0.3);
        background-image: url("https://www.lexoffice.de/next/olb4-sources/bank_card_overlay.svg");
        background-repeat: none;
        background-size: cover;
        overflow: hidden;
    }
</style>



<div class="slide-one-item home-slider owl-carousel">

    <div class="site-blocks-cover inner-page" style="background-image : url(<?= base_url('assets/') ?>images/program1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
                <h1 class="display-6"> Tahun Ajaran 2019/2020 </h1>
                <h1 class="display-5">PENDAFTARAN SANTRI AL-QURAN</h1>
                <p class="display-6" style="font-size :13pt;"> <b>Pendaftaran Gelombang II</b> dibuka dari <b>1 Februari - 31 Maret 2019</b> jadwal masuk <b>Juni 2019</b> dan terbuka untuk putra dan putri.Total kuota penerimaan <b>100 orang santri</b>. </p>
                <a href="<?= base_url('daftar/santrireguler') ?>" class="btn-sm btn-success">INFORMASI PENDAFTARAN</a>
            </div>
        </div>
    </div>
    <div class="site-blocks-cover inner-page" style="background-image : url(<?= base_url('assets/') ?>images/dauroh1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
                <h1 class="display-6"> Tahun Ajaran 2019/2020 </h1>
                <h1 class="display-5">PENDAFTARAN SANTRI DAUROH AL-QURAN</h1>
                <p class="display-6" style="font-size :13pt;"> <b>Pendaftaran Gelombang II</b> dibuka dari <b>Selambat-lambatnya 20 juli 2019</b> terbuka untuk putra dan putri.Total kuota penerimaan <b>90 orang santri</b>. </p>
                <a href="<?= base_url('daftar/santridauroh') ?>" class="btn-sm btn-success">INFORMASI PENDAFTARAN</a>
            </div>
        </div>
    </div>
    <div class="site-blocks-cover inner-page" style="background-image : url(<?= base_url('assets/') ?>images/kaderisasi1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
                <h1 class="display-6"> Tahun Ajaran 2019/2020 </h1>
                <h1 class="display-5">PENDAFTARAN KADERISASI</h1>
                <p class="display-6" style="font-size :13pt;">Program yang mengusung konsep <b>beasiswa</b> penuh bersyarat ini kami buka untuk <b>tahun ajaran 2019/2020</b> <b>50 orang santri</b>. </p>
                <a href="<?= base_url('home/santrikaderisasi') ?>" class="btn-sm btn-success">INFORMASI PENDAFTARAN</a>
            </div>
        </div>
    </div>
    <div class="site-blocks-cover inner-page" style="background-image : url(<?= base_url('assets/') ?>images/takhosus1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
                <h1 class="display-6"> Tahun Ajaran 2019/2020 </h1>
                <h1 class="display-5">PENDAFTARAN SANTRI TAKHOSUS</h1>
                <p class="display-6" style="font-size :13pt;"> <b>Pendaftaran Gelombang III</b> dibuka dari <b>1 April - 30 April 2019</b> jadwal masuk <b>Juni 2019</b> dan terbuka untuk putra dan putri.Total kuota penerimaan <b>60 orang santri</b>. </p>
                <a href="<?= base_url('daftar/takhosus') ?>" class="btn-sm btn-success">INFORMASI PENDAFTARAN</a>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="site-section-heading text-center" style="color:#58B19F;font-weight:bold;font-size:20pt;">Pencapaian Hafalan Santri</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 block-13 nav-direction-white">
                <div class="nonloop-block-13 owl-carousel">
                    <?php foreach ($penghafal as $p) { ?>
                        <div class="media-image">
                            <img src="<?= base_url('upload/img/' . $p['gambar']); ?>" alt="Image" class="img-fluid" height="400">
                            <div class="media-image-body" style="box-shadow: 0px 4px 7px 4px rgba(213,222,215,8);">
                                <h2 style="color:#33d9b2; font-size:14pt;"><?= $p['judul']; ?></h2>
                                <p>lembaga pendidikan Islam yang bertujuan mencetak penghafal Al Quran berakhlak Qurani.</p>
                                <p><a href="<?= base_url('home/detail/') . $p['id']; ?>" class="btn1 text-white px-4"><span class="caption">Selengkapnya</span></a></p>
                            </div>
                        </div>

                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section border-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="site-section-heading text-center" id="rekening"> INFO REKENING </h2>
                <h6 class="text-center mt-4" style="font-size:16pt;color:#182C61;"> <b>Nomor Rekening Bank Resmi Pesantren Tahfizh Al Quran MataQu</b> </h6>

                <div class="gutter">

                    <div class="element lx-card paypal">
                        <span class="small"><img src="<?= base_url('assets/images/bni.jpg'); ?>" width="100px;" alt=""></span>

                        <p class="text-white">YAYASAN KAMPUNG QURAN MATAQU<br />2000-161-010</p>
                        <p class="amount text-white">50.778,00 IDR</p>
                    </div>

                </div>


                <div class="col-md-12">
                    <h2 class="site-section-heading text-center mt-5" id="donasi"> WAKAF & DONASI </h2>
                </div>
                <div class="site-section">
                    <div class="container">
                        <div class="row">
                            <?php foreach ($wakaf as $wakaf) : ?>
                                <div class="col-md-4 mb-5 mb-lg-0">
                                    <div class="media-with-text mb-5" id="hvrberita">
                                        <div class="mb-4">
                                            <a href="<?= base_url('home/detail/') . $wakaf['id']; ?>">
                                                <img src=" <?= base_url('upload/img/') ?><?= $wakaf['gambar']; ?>" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <h2 class="h5 mb-2"><a href="<?= base_url('home/detail/') . $wakaf['id']; ?>"><?= $wakaf['judul']; ?></a></h2>

                                        <p class="card-text"><i class="far fa-calendar"></i>&nbsp;<small class="text-muted"><?= date('d,F Y', $wakaf['date_created']); ?></small>&nbsp;&bullet;&nbsp;<i class="fas fa-user-tie">&nbsp;</i>Admin Mataqu</p>


                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>