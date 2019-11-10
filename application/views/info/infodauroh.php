<div class="site-blocks-cover inner-page" style="background-image : url(<?= base_url('assets/') ?>images/santridauroh1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade">
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">

            <div class="col-lg ml-auto ">
                <h2 class="site-section-heading mb-5 text-center"><b>INFO PENDAFTARAN</b></h2>
                <div class="logo-mataqu text-center mb-5">
                    <img src="<?= base_url('assets/'); ?>images/logo-retina.png" data-aos="fade-down" alt="Image" class="img-fluid rounded"></div>

            </div>

        </div>
        <div class="row">
            <div class="col-lg ml-auto ">
                <h2 class="site-section-heading mb-5 text-center">Santri Dauroh : Takhfiz Quran Mataqu</h2>
                <p style="color:#353b48;font-size:16pt;"> <b>Assalamu'alaikum Wr. Wb.</b> Sahabat Quran</p>
                <p style="color:#353b48;font-size:16pt;"> <b>Pesantren Tahfidz Al Quran</b>, Ma'had MataQu, kembali membuka kesempatan bagi <b>muslim dan muslimah</b> yang ingin <b>menghafal Al Quran</b> dan memahami artinya <b>dengan cepat.</b> Kegiatan yang dinamakan <b>"Dauroh Al Quran 40 Hari Hafal 30 Juz"</b> ini alhamdulillah telah berlangsung sebanyak 29 angkatan sejak tahun 2015. Dan berikut informasi pendaftaran dauroh untuk angkatan tahun ini yang bertepatan di bulan Syawal dan musim liburan sekolah. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg">
                <h5 class="penjelasan"> Lokasi Dauroh Al-Quran </h5>
                <p style="color:#2c3e50; font-size:13pt;text-align:justify;"> <b>Muslim/Ikhwan</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Villa Kembar, Megamendung, Puncak, Bogor, Jawa Barat, Indonesia, 16770<p>
                        <p style="color:#2c3e50; font-size:13pt;text-align:justify;"> <b>Muslimah/Akhwat</b> &nbsp;: Camp Borneo, Megamendung, Puncak, Bogor, Jawa Barat, Indonesia, 16770<p>
                                <h5 class="penjelasan mt-5"> &nbsp;&nbsp;Biaya Santri Dauroh Al-Quran ? </h5>
                                <p><button class="btn2 text-white mt-3" type="button" data-toggle="collapse" data-target="#lihatselengkapnya" aria-expanded="false" aria-controls="collapseExample text-white" style="font-weight:bold;"><i class="fas fa-caret-right"></i>&nbsp;Penjelasan lengkap</button></p>
            </div>
            <div class="collapse" id="lihatselengkapnya">
                <div class="card card-body mb-5">
                    <ol style="color:#2c3e50; font-size:13pt;list-style-type:square;">
                        <p style="color:#2c3e50; font-size:13pt;"><b>Biaya Dauroh</b></p>

                        <li> <b>1 Hari</b> : Rp. 225.000 (dua ratus dua puluh lima ribu rupiah)</li>
                        <li><b>7 Hari </b> : Rp. 1.500.000 (satu juta lima ratus ribu rupiah)</li>
                        <li><b> 10 Hari </b>: Rp. 1.750.000 (satu juta tujuh ratus lima puluh ribu rupiah)</li>
                        <li><b>14 Hari </b> : Rp. 2.500.000 (dua juta lima ratus ribu rupiah)</li>
                        <li><b> 21 Hari</b>: Rp. Rp. 3.500.000 (tiga juta lima ratus ribu rupiah)</li>
                        <li><b>28 Hari</b>: Rp. 4.000.000 (empat juta rupiah)</li>
                        <li> <b> 30 Hari</b>: Rp. 4.500.000 (empat juta lima ratus ribu rupiah)</li>
                        <li> <b>40 Hari </b>: Rp. 5.000.000 (lima juta rupiah)<br>
                            <span style="font-size:8pt;">(*) Biaya dauroh dihitung selama<b> periode aktif dauroh.</b> Kedatangan peserta diluar waktu yang ditentukan akan dikenakan biaya tambahan <b>mulai dari Rp. 100.000 (seratus ribu rupiah) per hari.</b> Biaya yang telah ditransfer tidak dapat dikembalikan (no refund) tetapi bisa digantikan ke periode dauroh berikutnya.
                                <br>(*)Dapatkan diskon langsung hingga <b>Rp. 500.000 (lima ratus ribu rupiah)</b> bagi calon peserta yang melunasi biaya dauroh lebih awal!
                            </span></li>

                    </ol>
                </div>
            </div>
        </div>
        <div class="col-lg ml-auto ">
            <h2 class="site-section-heading mb-5 text-center"><b>GALERI KEGIATAN DAUROH</b></h2>
            <div class="row">
                <?php foreach ($galeri as $k) : ?>
                    <div class="col-md-4">
                        <div class="container">
                            <div class="tiles">
                                <div class="tile-item">
                                    <a href="#" data-toggle="modal" data-target="#gambar<?= $k['id']; ?>">
                                        <img src=" <?= base_url() ?>upload/img/<?= $k['gambar']; ?>" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-lg ml-auto mt-5">
            <h2 class="site-section-heading mb-5 text-center"><b>BROSURE</b></h2>
            <div class="row">
                <?php foreach ($brosure as $d) : ?>
                    <div class="col-md-6">
                        <div class="container">
                            <div class="tiles">
                                <div class="tile-item">
                                    <a href="#" data-toggle="modal" data-target="#gambar<?= $d['id']; ?>">
                                        <img src=" <?= base_url() ?>upload/img/<?= $d['gambar']; ?>" alt="">
                                        <div class="tile-title">
                                            <span><?= $d['caption']; ?></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php foreach ($galeri as $k) : ?>

    <div class="modal fade" id="gambar<?= $k['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img class="img-fluid" src="<?= base_url() ?>upload/img/<?= $k['gambar'] ?>">
                    <p style="font-size:16pt;color:black;text-align:center;"> <?= $k['caption']; ?></p>
                </div>
            </div>
        </div>

    </div>
<?php endforeach; ?>

<?php foreach ($brosure as $d) : ?>

    <div class="modal fade" id="gambar<?= $d['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img class="img-fluid" src="<?= base_url() ?>upload/img/<?= $d['gambar'] ?>">
                    <p style="font-size:16pt;color:black;text-align:center;"> <?= $d['caption']; ?></p>
                </div>
            </div>
        </div>

    </div>
<?php endforeach; ?>