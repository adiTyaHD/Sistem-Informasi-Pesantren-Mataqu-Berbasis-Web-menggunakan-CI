<div class="site-blocks-cover inner-page" style="background-image : url(<?= base_url('assets/') ?>images/santritakhosus1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
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
                <h2 class="site-section-heading mb-5 text-center">Santri Takhosus : Takhfiz Quran Mataqu</h2>
                <p style="color:#353b48;font-size:16pt;"> <b>Assalamu'alaikum Wr. Wb.</b> Ayah/bunda</p>
                <p style="color:#353b48;font-size:16pt;"> Alhamdulillah wa syukrulillah, antusiasme atas program "<b>Santri Tahfidz Al Quran Hafal 30 Juz Mutqin dan Faham Terjemahnya"</b>, begitu besar sehingga di tahun ajaran 2018/2019 lebih dari 300 santri yang aktif belajar menghafal Al Quran di pondok. Kini, untuk tahun ajaran <b>2019/2020</b>, <a href="<?= base_url('home/index') ?>">Pesantren Tahfizh Al Quran MataQu</a>
                    ,kembali membuka pendaftaran santri baru <b>tahun ini</b> : </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg">
                <h5 class="penjelasan"> Program Akademi </h5>
                <ol style="color:#2c3e50; font-size:13pt;list-style-type:square;">
                    <li> <b> Bimbingan Belajar UN </b> kelas 9 dan 12</li>
                    <li> <b> Bimbingan SBMPTN </b></li>
                    <li> <b> Ekstrakulikuler : </b> Panah, Renang, Berkuda, Outbound, wisata ilmu, bakti sosial, dll.</li>
                    <li> <b> Bahasa Arab : </b> <i>Tafsir dan Hiwar</i></li>
                    <li> <b> Bahasa Inggris : </b> <i>Daily Conversation</i></li>
                </ol>

                <h5 class="penjelasan mt-5"> &nbsp;&nbsp;Biaya Santri Takhosus ? </h5>
                <p><button class="btn2 text-white mt-3" type="button" data-toggle="collapse" data-target="#lihatselengkapnya" aria-expanded="false" aria-controls="collapseExample text-white" style="font-weight:bold;"><i class="fas fa-caret-right"></i>&nbsp;Penjelasan lengkap</button></p>
            </div>
            <div class="collapse" id="lihatselengkapnya">
                <div class="card card-body mb-5">
                    <ol style="color:#2c3e50; font-size:13pt;list-style-type:square;">
                        <p style="color:#2c3e50; font-size:13pt;"><b>Biaya Santri Takhosus : Takhfiz Quran Mataqu</b></p>

                        <li> <b>Formulir Pendaftaran</b> : Rp. 300.000 (Tiga Ratus Ribu Rupiah) sebagai tanda calon santri masuk ke dalam daftar</li>
                        <li><b>Wakaf Pembangunan </b> : Rp. 14.000.000 (Empat Belas Juta Rupiah) bisa dicicil</li>
                        <li><b> Uang Bulanan (SPP) </b>: Rp. 1.200.000 (satu juta dua ratus ribu rupiah) yang dibayarkan paling lambat setiap tanggal 10 setiap bulannya.</li>
                        <li><b> Uang Laudry </b> : Rp.500.000 (lima ratus ribu rupiah)/semester</li>
                        <li><b> Uang Kegiatan</b>: Rp.500.000 (lima ratus ribu rupiah)/semester</li>
                        <li><b> Total </b> : Rp.16.500.000(Enam Belas Juta Lima Ratus Ribu Rupiah)</li>
                        <span style="font-size:10pt;">(*)Biaya-biaya lain pelengkap menyesuaikan termasuk diantaranya, biaya masa orientasi santri baru, biaya kitab, hingga biaya seragam
                        </span></li>

                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg ml-auto mt-3">
                <h5 class="penjelasan mb-5"> &nbsp;&nbsp;Deskirpsi Program santri Takhosus : </h5>
                <p style="color:#353b48; font-size:14pt;text-align:justify;">Merupakan program yang dirancang agar <b>remaja putra/putri lulusan SMA</b> dapat <b>menghafal Al Quran 30 juz</b> hingga <b>kokoh (mutqin).</b> Selain itu, santri juga bisa mendapatkan bimbingan persiapan SBMPTN ataupun persiapan mengambil <b>beasiswa diluar negeri.</b> Para santri akan mendapatkan beragam layanan serta kegiatan tambahan untuk mendukung pencapaian target hafalan.
                    <center class="mt-5 mb-5">
                        <div class="video-thumb-grid">
                            <!-- Daft Punk - Human After All -->
                            <?php foreach ($video as $v) : ?>
                                <a href="<?= $v['url']; ?>" data-youtube-id="<?= $v['name_id']; ?>" class="video-thumb js-trigger-video-modal">
                                    <img class="video-banner-img" src="<?= base_url() ?>upload/img/<?= $v['gambar']; ?>" alt="" width="600" />
                                </a>
                            <?php endforeach; ?>
                        </div>

                    </center>
                    <p>
                        <h5 class="penjelasan"> &nbsp;&nbsp;Jadwal pendaftaran serta persyaratan santri Takhosus </h5>

                        <button class="btn2 text-white mt-3" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" style="font-weight:bold;"><i class="fas fa-caret-right"></i>&nbsp;Jadwal Pendaftaran</button>
                        <button class="btn2 text-white mt-3" role="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2" style="font-weight:bold;"><i class="fas fa-caret-right"></i>&nbsp;Lihat Persyaratan</button>
                    </p>
                    <div class="row">
                        <div class="col-lg">
                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                                <div class="card card-body">
                                    <ol style="color:#2c3e50; font-size:13pt;list-style-type:square;">
                                        <p style="font-size:18pt;font-weight:bold;">Jadwal Pendaftaran </p>

                                        <li>Jadwal pendaftaran <b>santri baru</b> dibuka di bulan <b>Januari - Mei.</b> Diluar itu kami hanya menerima pendaftaran santri pindahan.
                                        </li><br>
                                    </ol>
                                    <ol style="color:#2c3e50; font-size:13pt;list-style-type:square;">
                                        <p style="font-size:18pt;font-weight:bold;">Jadwal masuk </p>

                                        <li>Tahun ajaran untuk <b>santri baru</b> dimulai di bulan <b>Juni.</b> Adapun untuk <b>santri pindahan</b> bisa <b>langsung masuk</b> setelah melunasi minimal formulir pendaftaran, wakaf pembangunan, dan SPP bulan pertama.
                                        </li><br>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample2">
                                <div class="card card-body" Usia Sekolah Menengah Atas )SMP) / SSekola>
                                    <ol style="color:#2c3e50; font-size:13pt;list-style-type:square;">
                                        <p style="font-size:18pt;font-weight:bold;">Persyaratan untuk para santri </p>
                                        <p> Calon santri yang ingin mengikuti program Takhosus, ini harus :
                                            <li> Usia 12-18 Tahun atau sudah lulus SMA (Sekolah Menengah Atas)
                                            </li> <br>
                                            <li> <b> Bermotivasi tinggi </b> menjadi penghafal Al-Quran
                                            </li> <br>
                                            <li> Siap Asrama minimal <b> 3(tiga) tahun </b>
                                            </li> <br>
                                            <li> Bersedia mematuhi peraturan selama mondok
                                            </li> <br>
                                        </p>

                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <p>
            <h5 class="penjelasan"> &nbsp;&nbsp;Sarana & Prasarana </h5>

            <button class="btn2 text-white mt-3" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3" style="font-weight:bold;"><i class="fas fa-caret-right"></i>&nbsp;Fasilitas Santri</button>
            <button class="btn2 text-white mt-3" role="button" data-toggle="collapse" data-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4" style="font-weight:bold;"><i class="fas fa-caret-right"></i>&nbsp;Lihat Fasilitas Wali Santri</button>
        </p>
        <div class="row">
            <div class="col-lg">
                <div class="collapse multi-collapse" id="multiCollapseExample3">
                    <div class="card card-body">
                        <ol style="color:#2c3e50; font-size:13pt;list-style-type:square;">

                            <li>Belajar 5 hari sepekan
                            </li><br>
                            <li>Makan 3 kali sehari
                            </li><br>
                            <li>Laundry 2 hari sekali
                            </li><br>
                            <li>Libur akhir pekan
                            </li><br>
                            <li>Libur pesantren (jadwal menyesuaikan)
                            </li><br>
                            <li>Ijazah resmi SMP atau SMA
                            </li><br>
                        </ol><a href=""></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample4">
                    <div class="card card-body">
                        <ol style="color:#2c3e50; font-size:13pt;list-style-type:square;">
                            <li>Bergabung di Grup Whatsapp Wali Santri
                            </li><br>
                            <li>Laporan berkala kegiatan santri, baik di grup Whatsapp, <a href="https://www.pesantrentahfidzmataqu.com/">Website</a>, <a href="                        https://www.facebook.com/pesantrenquranmataqu/">Facebook Fanpage</a>, <a href=" https://twitter.com/@pesantrenmataqu">Twitter</a>, dan <a href="https://plus.google.com/112489887039870481281">Google+</a>
                            </li><br>
                            <li>Menghadiri prosesi hafalan perdana 30 juz santri.
                            </li><br>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg ml-auto mt-5 ">
        <h2 class="site-section-heading mb-5 text-center"><b>GALERI KEGIATAN Santri Takhosus</b></h2>
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
</div>
<div class="row">
    <div class="col-lg ml-auto ">
        <h2 class="site-section-heading mb-5 text-center"><b>BROSURE</b></h2>
        <div class="row">
            <?php foreach ($brosure as $d) : ?>
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