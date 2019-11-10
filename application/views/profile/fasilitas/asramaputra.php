<div class="slide-one-item home-slider owl-carousel">

    <div class="site-blocks-cover inner-page" style="background-image: url(<?= base_url('assets/') ?>images/putra.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
                <h1></h1>
                <span class="caption d-block text-white"></span>
            </div>
        </div>
    </div>
    <div class="site-blocks-cover inner-page" style="background-image: url(<?= base_url('assets/') ?>images/borneo.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
                <h1></h1>
                <span class="caption d-block text-white"></span>
            </div>
        </div>
    </div>
    <div class="site-blocks-cover inner-page" style="background-image: url(<?= base_url('assets/') ?>images/santriwati.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
                <h1></h1>
                <span class="caption d-block text-white"></span>
            </div>
        </div>
    </div>
    <div class="site-blocks-cover inner-page" style="background-image: url(<?= base_url('assets/') ?>images/villakembar.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
                <h1></h1>
                <span class="caption d-block text-white"></span>
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg ml-auto ">
                <h2 class="mb-5 text-center"><b>Fasilitas :</b> Pesantren Tahfidz Al Quran, Ma'had MataQu </h2>
                <div class="logo-mataqu text-center mb-5">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg ml-auto ">
                <h2 class="site-section-heading mb-5 text-center"> Asrama bagi santri Putra</h2>
                <p style="color:#353b48;font-size:16pt;"> Assalamu'alaikum Wr. Wb. Ayah/Bunda</p>
                <p style="color:#353b48;font-size:16pt;"> Berikut beberapa dokumentasi dari <b>Asrama Putra</b> Megamendung yang digunakan sebagai tempat <b>menuntut ilmu di pondok pesantren : </b></p>
                <p style="color:#353b48;font-size:14pt;">Per Desember 2018, total ada <b>lima asrama</b> dengan kapasitas rata-rata per asrama mencapai <b>± 20 santriwan.</b> Pembagian asrama dilakukan berdasarkan <b>usia</b>, dan kemampuan <b>membaca Al Quran</b> serta <b>tingkat hafalan</b> dari masing-masing santri.</p>
                <ul style="color:#353b48;font-size:14pt;"> Nama Nama Asrama tersebut adalah :
                    <li> Umar 1 </li>
                    <li> Umar 2 </li>
                    <li> Umar 3 </li>
                    <li> Umar 4 </li>
                    <li> Umar 5 </li>
                </ul>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-6 mt-3 mb-5">
                        <div class="container mb-3">
                            <div class="card-header bg-white text-center" data-aos="fade-up-left" style="font-size:14pt;color:black;opacity:0.6;box-shadow: 0px 4px 7px 4px rgba(213,222,215,8);"><b>Eksterior</b></div>
                            <div class="card-body bg-white" data-aos="fade-up-left" style="box-shadow: 0px 4px 7px 4px rgba(213,222,215,8);">
                                <div class="row">
                                    <?php foreach ($eksterior as $e) : ?>
                                        <div class="col-md-6">
                                            <div class="tiles">
                                                <div class="tile-item">
                                                    <a href="#" data-toggle="modal" data-target="#Eksterior<?= $e['id']; ?>">
                                                        <img src=" <?= base_url() ?>upload/img/<?= $e['gambar']; ?>" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-3 mb-5">
                        <div class="container mb-3">
                            <div class="card-header bg-white text-center" data-aos="fade-up-right" style="font-size:14pt;color:black;opacity:0.6;box-shadow: 0px 4px 7px 4px rgba(213,222,215,8);"><b>Interior</b></div>
                            <div class="card-body bg-white" data-aos="fade-up-right" style="box-shadow: 0px 4px 7px 4px rgba(213,222,215,8);">
                                <div class="row">
                                    <?php foreach ($interior as $i) : ?>
                                        <div class="col-md-6">
                                            <div class="tiles">
                                                <div class="tile-item">
                                                    <a href="#" data-toggle="modal" data-target="#Interior<?= $i['id']; ?>">
                                                        <img src=" <?= base_url() ?>upload/img/<?= $i['gambar']; ?>" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <p style="color:#353b48;font-size:16pt;"> Demikianlah dokumentasi dari <b> Asrama Putra Megamendung: Ma'had MataQu Bagi.</b> Untuk info lebih lanjut dapat menghubungi : <a href="https://api.whatsapp.com/6287780220777?text=I'm%20Assalamualaikum%20in%20Bisa%20Minta%20Foto%20terbaru%20Asrama%20Putra">0877-8022-0777 </a> Jazakumullohu Khoir. Wassalamu'alaikum Wr. Wb.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 text-center">
        <div class="site-block-27 mb-3">
            <ul>
                <li><a href="<?= base_url('home/santriputri'); ?>">&lt;</a></li>
                <li><a href="<?= base_url('home/profile'); ?>">1</a></li>
                <li><a href="<?= base_url('home/campborneo'); ?>">2</a></li>
                <li><a href="<?= base_url('home/villakembar'); ?>">3</a></li>
                <li><a href="<?= base_url('home/santriputri'); ?>">4</a></li>
                <li class="active"><span>5</span></li>
            </ul>
        </div>
    </div>
</div>

<?php foreach ($eksterior as $e) : ?>

    <div class="modal fade" id="Eksterior<?= $e['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">
                <div class="modal-body">
                    <img class="img-fluid" src="<?= base_url() ?>upload/img/<?= $e['gambar'] ?>">
                    <p style="font-size:16pt;color:black;text-align:center;"> <?= $e['caption']; ?></p>
                </div>
            </div>
        </div>

    </div>
<?php endforeach; ?>

<?php foreach ($interior as $i) : ?>

    <div class="modal fade" id="Interior<?= $i['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">
                <div class="modal-body">
                    <img class="img-fluid" src="<?= base_url() ?>upload/img/<?= $i['gambar'] ?>">
                    <p style="font-size:16pt;color:black;text-align:center;"> <?= $i['caption']; ?></p>
                </div>
            </div>
        </div>

    </div>
<?php endforeach; ?>