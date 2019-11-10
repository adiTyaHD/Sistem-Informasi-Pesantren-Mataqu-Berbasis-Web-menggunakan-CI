<div class="slide-one-item home-slider owl-carousel">

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
    <div class="site-blocks-cover inner-page" style="background-image: url(<?= base_url('assets/') ?>images/putra.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
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
                <h2 class="site-section-heading mb-5 text-center">Camp Bornoe</h2>
                <p style="color:#353b48;font-size:16pt;"> Assalamu'alaikum Wr. Wb. Sahabat Quran</p>
                <p style="color:#353b48;font-size:16pt;"> Berikut beberapa dokumentasi dari <b>Camp Borneo</b> Megamendung yang digunakan sebagai tempat <b>Dauroh Al Quran 40 Hari Ma'had MataQu</b> bagi para peserta akhwat :</p>
                <center>
                    <div class="video-thumb-grid">
                        <a href="https://www.youtube.com/watch?v=REsf5-RjUN0" data-youtube-id="REsf5-RjUN0" class="video-thumb js-trigger-video-modal">
                            <img class="video-banner-img" src="<?= base_url() ?>assets/images/rutecampborneo.png" alt="" width="750" />
                        </a>
                    </div>
                    <!-- <iframe width="50%" height="400" src="https://www.youtube.com/embed/REsf5-RjUN0" frameborder="2" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                </center>
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
                    <p style="color:#353b48;font-size:16pt;"> Demikianlah dokumentasi dari <b>Camp Borneo Megamendung: Tempat Dauroh Al Quran Ma'had MataQu Bagi Peserta Akhwat.</b> Untuk info lebih lanjut dapat menghubungi : <a href="https://api.whatsapp.com/6287780220777?text=I'm%20Assalamualaikum%20in%20Bisa%20Minta%20Foto%20terbaru%20Campborneo">0877-8022-0777 </a> Jazakumullohu Khoir. Wassalamu'alaikum Wr. Wb.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 text-center">
        <div class="site-block-27 mb-3">
            <ul>
                <li><a href="<?= base_url('home/profile'); ?>">&lt;</a></li>
                <li><a href="<?= base_url('home/profile'); ?>">1</a></li>
                <li class="active"><span>2</span></li>
                <li><a href="<?= base_url('home/villakembar'); ?>">3</a></li>
                <li><a href="<?= base_url('home/santriputri'); ?>">4</a></li>
                <li><a href="<?= base_url('home/santriputra'); ?>">5</a></li>
                <li><a href="<?= base_url('home/villakembar'); ?>">&gt;</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- modal -->

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
<!-- MODAL VIDEO -->

<section class="video-modal">

    <!-- Modal Content Wrapper -->
    <div id="video-modal-content" class="video-modal-content">

        <!-- iframe -->
        <iframe id="youtube" width="100%" height="100%" frameborder="0" allow="autoplay" allowfullscreen src=></iframe>

        <a href="#" class="close-video-modal">
            <!-- X close video icon -->
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve" width="24" height="24">

                <g id="icon-x-close">
                    <path fill="#ffffff" d="M30.3448276,31.4576271 C29.9059965,31.4572473 29.4852797,31.2855701 29.1751724,30.980339 L0.485517241,2.77694915 C-0.122171278,2.13584324 -0.104240278,1.13679247 0.52607603,0.517159487 C1.15639234,-0.102473494 2.17266813,-0.120100579 2.82482759,0.477288136 L31.5144828,28.680678 C31.9872448,29.1460053 32.1285698,29.8453523 31.8726333,30.4529866 C31.6166968,31.0606209 31.0138299,31.4570487 30.3448276,31.4576271 Z" id="Shape"></path>
                    <path fill="#ffffff" d="M1.65517241,31.4576271 C0.986170142,31.4570487 0.383303157,31.0606209 0.127366673,30.4529866 C-0.12856981,29.8453523 0.0127551942,29.1460053 0.485517241,28.680678 L29.1751724,0.477288136 C29.8273319,-0.120100579 30.8436077,-0.102473494 31.473924,0.517159487 C32.1042403,1.13679247 32.1221713,2.13584324 31.5144828,2.77694915 L2.82482759,30.980339 C2.51472031,31.2855701 2.09400353,31.4572473 1.65517241,31.4576271 Z" id="Shape"></path>
                </g>

            </svg>
        </a>

    </div><!-- end modal content wrapper -->
    <!-- clickable overlay element -->
    <div class="overlay"></div>
</section>