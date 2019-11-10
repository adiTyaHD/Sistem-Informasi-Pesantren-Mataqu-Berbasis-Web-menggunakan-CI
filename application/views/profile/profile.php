<div class="site-blocks-cover inner-page" style="background-image: url(<?= base_url('assets/') ?>images/profile.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade">
            <h1></h1>
            <span class="caption d-block text-white"></span>
        </div>
    </div>
    <audio class="automusic" src="<?= base_url('assets/song/nasyid Aku Hafizh Quran.mp3');
                                    ?>" controls="true" loop="true" autoplay="true"></audio>
</div>


<div class="site-section">
    <div class="container">
        <div class="row">

            <div class="col-lg ml-auto ">
                <h2 class="site-section-heading mb-5 text-center"><b>Profile :</b> Pesantren Tahfidz Al Quran, Ma'had MataQu </h2>
                <div class="logo-mataqu text-center mb-5">
                    <img src="<?= base_url('assets/'); ?>images/logo-retina.png" data-aos="fade-down" alt="Image" class="img-fluid rounded"></div>
                <ol type="A" style="color:#2c3e50; font-size:13pt;">

                    <li><b>Pesantren Tahfidz Al Quran, Ma'had MataQu,</b> adalah lembaga pendidikan Islam yang berkonsentrasi di bidang <b>hafalan Al Quran</b>, dengan program utama, yaitu: <b>Dauroh Al Quran</b> dan <b>Santri Al Quran</b> serta <b>Program Kaderisasi.</b></li><br>
                    <li>Walaupun telah beroperasi <b>sejak tahun 2015</b> yang dimulai dengan pelaksanaan <b>Dauroh Al Quran Angkatan Pertama</b>, Ponpes MataQu diresmikan pada Januari 2016 yang ditandai dengan penerimaan <b>Santri Al Quran</b> untuk pertama kali.</li><br>
                    <li>Telah menghasilkan <b>ribuan alumni</b> baik dari program Dauroh Al Quran maupun Santri Al Quran dengan jumlah santri mondok mencapai ± 350 orang hingga angkatan 2018/2019.</li><br>
                    <li>Terdapat <b>13 asrama santri putra dan putri</b> yang terpisah serta beragam sarana prasana nan asri lainnya—seperti lapangan olahraga, mushola, taman buah, kolam renang, dsb.—khas Puncak, Bogor.</li><br>
                    <li>Tercatat secara legal di Kantor Kementerian Agama Kabupaten Bogor dengan <b>nomor statistik 510032011304</b> berdasarkan surat <b>Nomor 10 Tahun 2018</b></li><br>
                    <li>Dipimpin oleh, Al Ustadz As'ad Humam, Lc. Al Hafidz. Beliau adalah Pemegang Sanad Qiroat</b> Imam 'Ashim Riwayat Hafs dan Syu'bah (tahfidz dan tahsin), <b>Pemegang Sanad Matan</b> Al Jazariyyah dan Tuhfatul Athfal, serta <b>Pemegang Sanad</b> Hadits 'Arbain An Nawawiyyah.</li>
                </ol>
            </div>
        </div>
    </div>
    <h2 class="site-section-heading mb-5 text-center"> Visi & Misi</h2>
    <div class="row">
        <div class="col-sm-12">
            <div class="container">


            </div>
        </div>
        <div class="col-sm-6 mt-3 mb-5">
            <div class="container mb-3">
                <div class="card-header bg-white text-center" data-aos="fade-up-left" style="font-size:14pt;color:black;opacity:0.6;box-shadow: 0px 4px 7px 4px rgba(213,222,215,8);"><b>VISI</b></div>
                <div class="card-body bg-white" data-aos="fade-up-left" style="box-shadow: 0px 4px 7px 4px rgba(213,222,215,8);">
                    <ol type="A" style="color:#2c3e50; font-size:13pt;">
                        <li>
                            <h5 class="card-title" style="font-size:11pt;">Mencetak Generasi Qur'ani</h5>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mt-3 mb-5">
            <div class="container mb-3">
                <div class="card-header bg-white text-center" data-aos="fade-up-right" style="font-size:14pt;color:black;opacity:0.6;box-shadow: 0px 4px 7px 4px rgba(213,222,215,8);"><b>MISI</b></div>
                <div class="card-body bg-white" data-aos="fade-up-right" style="box-shadow: 0px 4px 7px 4px rgba(213,222,215,8);">
                    <ol type="A" style="color:#2c3e50; font-size:13pt;">
                        <li>
                            <h5 class="card-title" style="font-size:11pt;color:black;">Menjadi Pesantren Percontohan Nasional dan Internasional</h5>
                        </li>
                        <li>
                            <h5 class="card-title" style="font-size:11pt;color:black;">Mengembalikan Fitrah Generasi Muslim Untuk Kembali Kepada Al Quran</h5>
                        </li>
                        <li>
                            <h5 class="card-title" style="font-size:11pt;color:black;">Mencetak Para Pemuda Pejuang Islam Yang Hafidz Quran, Kuat Agama, Terampil Bahasa dan Unggul Dalam Kompetensi Di Bidangnya</h5>
                        </li>
                        <li>
                            <h5 class="card-title" style="font-size:11pt;color:black;">Merangkul Seluruh Golongan Untuk Bersatu Dalam Naungan Al Quran</h5>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <h2 class="site-section-heading mb-5 text-center"> Dokumentasi</h2>
    <div class="row">
        <?php foreach ($dokumen as $d) : ?>
            <div class="col-md-4">
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

<div class="row">
    <div class="col-md-12 text-center">
        <div class="site-block-27 mb-3">
            <ul>
                <li class="active"><span>1</span></li>
                <li><a href="<?= base_url('home/campborneo'); ?>">2</a></li>
                <li><a href="<?= base_url('home/villakembar'); ?>">3</a></li>
                <li><a href="<?= base_url('home/santriputri'); ?>">4</a></li>
                <li><a href="<?= base_url('home/santriputra'); ?>">5</a></li>
                <li><a href="<?= base_url('home/campborneo'); ?>">&gt;</a></li>
            </ul>
        </div>
    </div>
</div>


<!-- modal -->
<?php foreach ($dokumen as $d) : ?>

    <div class="modal fade" id="gambar<?= $d['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">
                <div class="modal-body">
                    <img class="img-fluid" src="<?= base_url() ?>upload/img/<?= $d['gambar'] ?>">
                    <p style="font-size:16pt;color:black;text-align:center;"> <?= $d['caption']; ?></p>
                </div>
            </div>
        </div>

    </div>
<?php endforeach; ?>