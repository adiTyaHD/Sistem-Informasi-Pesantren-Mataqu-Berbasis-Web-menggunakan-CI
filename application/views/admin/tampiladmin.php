<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- /.container-fluid -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 py-3 mb-5">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Artikel </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($berita) ?> </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 py-3 mb-5">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Calon Santri</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= count($countsantri) ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="far fa-id-card fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6 py-3 mb-5">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-2">Total Pesan Masuk</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= count($pesan) ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 mb-5 ">
            <div class="card-body">
                <div class="card flex-row align-items-center text-light align-items-stretch">
                    <div class="col-5 d-flex align-items-center bg-primary justify-content-center rounded-left">
                        <div class="text-uppercase mt-2" style="color:#2C3A47;font-size:16pt;" id="TampilTgl"></div>
                    </div>
                    <div class="col-6 bg-light text-muted rounded-right">
                        <div class="text-uppercase mt-2" id="TampilHari"></div>
                        <div class="h3 mt-0" id="TampilJam"></div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Pending Requests Card Example -->
</div>

<!-- Content Row -->
<div class="container mb-5">
    <div class="row">
        <div class="col-lg-12">
            <center>
                <img src="<?= base_url('assets/images/kampung-quran-puncak-cipendawa-2.jpg') ?>" width="700" alt="" style="box-shadow: 3px 4px 7px 5px rgba(213,222,215,2);">
            </center>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class="row ml-2">

    <!-- Content Column -->
    <div class="col-lg-6 mb-4">

        <table class="table">
            <thead>
                <tr class="table-header text-center">
                    <th scope="cell">No</th>
                    <th scope="cell">Nama</th>
                    <th scope="cell">Foto Santri</th>
                    <th scope="cell">Kategori</th>
                    <th scope="cell">Hafalan Juz</th>
                    <th scope="cell">Status</th>


                </tr>
            </thead>
            <tbody class="text-center" id="isi_table">
                <?php $i = 1; ?>

                <?php foreach ($santri as $s) : ?>

                    <tr>
                        <th scope="cell"><?= $i++; ?></th>
                        <td><?= $s['nama_santri']; ?></td>
                        <td><img src="<?= base_url() ?>upload/img/<?= $s['photo']; ?>" alt="" width="60px"> </td>
                        <td><?= $s['kategori']; ?></td>
                        <td><?= $s['jml_juz']; ?></td>
                        <td> <?php if ($s['is_approve'] == 0) : ?> WAITING
                            <?php else :  1 ?> DITERIMA

                            <?php endif; ?>
                        </td>

                    </tr>
                <?php endforeach; ?>

                </thead>
            </tbody>
        </table>
    </div>
    <div class="col-lg-6 mb-4">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pengembangan Website Pondok Pesantren Takhfiz Quran Mataqu </h6>
            </div>
            <div class="card-body">
                <p> Harus memberi Lv Akses user pada menu berita agar menu pada Super Admin tidak terlihat banyak banyak.</p>
                <p class="mb-0">Memberi Akses user Santri apabila telah mendaftar.</p>
            </div>
        </div>
    </div>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>

</div>
</div>

<script type="text/javascript">
    function showTime() {
        var date = new Date();
        var h = date.getHours(); // 0 - 23
        var m = date.getMinutes(); // 0 - 59
        var s = date.getSeconds(); // 0 - 59

        h = (h < 10) ? "0" + h : h;
        m = (m < 10) ? "0" + m : m;
        s = (s < 10) ? "0" + s : s;

        var time = h + " : " + m + "<small style='font-size:16px;'> WIB </small>";
        document.getElementById("TampilJam").innerHTML = time;

        setTimeout(showTime, 1000);

    }

    function showDate() {
        var d = new Date();
        var weekday = new Array(7);
        weekday[0] = "Minggu";
        weekday[1] = "Senin";
        weekday[2] = "Selasa";
        weekday[3] = "Rabu";
        weekday[4] = "Kamis";
        weekday[5] = "Jum'at";
        weekday[6] = "Sabtu";

        var n = "<small>" + weekday[d.getDay()] + "</small>";
        document.getElementById("TampilHari").innerHTML = n;
    }

    function showMonth() {
        var dmon = new Date();
        var month = new Array(11);
        month[0] = "Januari";
        month[1] = "Februari";
        month[2] = "Maret";
        month[3] = "April";
        month[4] = "Mei";
        month[5] = "Juni";
        month[6] = "Juli";
        month[7] = "Agustus";
        month[8] = "September";
        month[9] = "Oktober";
        month[10] = "November";
        month[11] = "Desember";
        var hari = dmon.getDate();

        var tgl = "<h3 class='text-center'>" + hari + "</h3> <small>" + month[dmon.getMonth()] + "</small>";
        document.getElementById("TampilTgl").innerHTML = tgl;
    }
    showMonth();
    showDate();
    showTime();
</script>