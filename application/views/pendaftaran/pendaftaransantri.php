<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ml-auto ">
                <h2 class="site-section-heading mb-5 text-center"><b>Pendaftaran</b> Pesantren Tahfidz Al Quran, Ma'had MataQu </h2>
                <div class="logo-mataqu text-center mb-5">
                    <img src="<?= base_url('assets/'); ?>images/logo-retina.png" data-aos="fade-down" alt="Image" class="img-fluid rounded"></div>
                <ol style="color:#2c3e50; font-size:13pt;list-style-type:square;text-align:justify;">


                    <p style=" font-size:14pt;color:color:#2c3e50;">Berikut adalah <b>Formulir Pendaftaran Online</b> yang diselenggarakan <b>Ma'had Tahfidz MataQu</b>, isi dengan sesuai data diri calon santri : </p>
                    <li style="color:#2c3e50;margin-bottom:10px;">Silahkan lengkapi semua formulir pendaftaran <b> identitas diri</b>, <b> data pendidikan </b>,dan<b> upload bukti pembayaran</b> Kemudian Admin akan menghubungi via Email apabila semua berkas telah diverifikasi.</li>
                    <span style="font-size:10pt;color:#2c3e50;" class="informasi">(*) Sebelum anda melakukan pendaftaran diharapkan melakukan <b> pembayaran</b> melalui rekening yang sudah <a href="<?= base_url('home/info'); ?>"> DISEDIAKAN</a> kemudian anda upload <b>bukti pembayaran,</b>apabila anda sudah melakukan pembayaran ke rekening takhfiz quran mataqu. <br>
                    </span>
                    <span style="font-size:10pt;color:#2c3e50;" class="informasi">(*) untuk biaya transfer silahkan lihat biaya pada halaman <a href="<?= base_url('home/info'); ?>">INFORMASI
                        </a></span>
                    <li style="color:#2c3e50;margin-bottom:12px;font-size:10pt" class="informasi"> <b><a href="<?= base_url('document/offline'); ?>">UNDUH FORMULIR</a></b> Berikut untuk pendaftaran Offline Calon santri </li>

                </ol>
            </div>
        </div>

        <div class=" row">
            <div class="col-lg-12 ">
                <h2 class="site-section-heading mb-5 text-center"> FORM PENDAFTARAN </h2>
                <?= $this->session->flashdata('message'); ?>
                <ol style="color:#2c3e50; font-size:13pt;list-style-type:square;">
                    <li>
                        <p style="font-size:16pt;color:black;"> IDENTITAS CALON SANTRI </p>
                    </li>
                </ol>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-6">
                <?= form_open_multipart('daftar/pendaftaran') ?>
                <div class="form-group">
                    <label for="nisn" id="labeldaftar"><b> MASUKAN NISN</b>(*)</label>
                    <input type="text" class="form-control" id="nisn" name="nisn" placeholder="masukan NISN ...." value="<?= set_value('nisn'); ?>">
                    <?= form_error('nisn', '<small class="text-danger pl-3">', '</small>'); ?>

                </div>

                <div class=" form-group">
                    <label for="nama" id="labeldaftar"><b> NAMA</b>(*)</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan nama santri ...." value=" <?= set_value('nama'); ?>">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>

                </div>
                <div class="form-group">
                    <label for="email" id="labeldaftar"><b> EMAIL</b>(*)</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email santri ...." value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

                </div>
                <label for="jeniskel" id="labeldaftar">(*)<b> JENIS - KELAMIN </b> : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jkel" id="jkel" value="ikhwan">
                    <label class="form-check-label" for="inlineRadio1">ikhwan</label>

                </div>
                <div class="form-check form-check-inline ml-3">
                    <input class="form-check-input" type="radio" name="jkel" id="jkel" value="akhwat">
                    <label class="form-check-label" for="inlineRadio2">akhwat</label>

                </div>
                <?= form_error('jkel', '<small class="text-danger pl-3">', '</small>'); ?>

                <div class="form-group">
                    <div class="input-container">
                        <label for="birthdate" id="labeldaftar"><b> TAHUN LAHIR : </b>(*)</label>
                        <i class="fas fa-calendar-alt icon pl-3 pt-3"></i>&nbsp;
                        <input placeholder="Click disini" class="textbox-n" type="text" onfocus="(this.type='date')" name="birthdate" id="birthdate">
                    </div>
                    <?= form_error('birthdate', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="nama-wali" id="labeldaftar"><b> NAMA WALI SANTRI </b>(*)</label>
                    <input type="text" class="form-control" id="nama-wali" name="nama-wali" placeholder="nama-wali" value="<?= set_value('nama-wali'); ?>">
                    <?= form_error('nama-wali', '<small class="text-danger pl-3">', '</small>'); ?>

                </div>
                <div class="form-group">
                    <label for="alamat" id="labeldaftar"><b> TEMPAT TINGGAL</b>(*)</label>
                    <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="3" value="<?= set_value('alamat'); ?>"></textarea>
                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>

                </div>
                <div class="form-group">
                    <label for="telp" id="labeldaftar"><b> TELEPHONE</b>(*)</label>
                    <input type="text" class="form-control" id="telp" name="telp" placeholder="masukan telp ...." value="<?= set_value('telp'); ?>">
                    <?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>

                </div>
                <div class="form-group">
                    <label for="photo" id="labeldaftar"><b> UPLOAD FOTO</b>(*)</label>
                    <input type="file" class="form-control-file" id="photo" name="photo"> </div>
                <div class="form-group">
                    <label for="kategori_santri" id="labeldaftar"><b> KATEGORI SANTRI</b>(*)</label>
                    <select class="custom-select" id="kategori_santri" name="kategori_santri">
                        <option selected> ingin mendaftar santri apa ?</option>
                        <option value="Santri Reguler" id="bayar">Santri Reguler</option>
                        <option value="Santri Dauroh" id="bayar">Santri Dauroh</option>
                        <option value="Santri Takhosus" id="bayar">Santri Takhosus</option>
                        <option value="jalur kaderisasi" id="kaderisasi">Santri Kaderisasi</option>
                    </select>
                </div>
                <?= form_error('kategori_santri', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="col-lg-12 mt-5 ">

            <ol style="color:#2c3e50; font-size:13pt;list-style-type:square;">
                <li>
                    <p style="font-size:16pt;color:black;"> DATA PENDIDIKAN SANTRI </p>
                </li>
            </ol>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="lulus" id="labeldaftar"><b> LULUSAN SEKOLAH </b>(*)</label>
                    <input type="text" class="form-control" id="lulus" name="lulus" placeholder="lulusan sekolah mana ...." value="<?= set_value('lulus'); ?>">
                    <?= form_error('lulus', '<small class="text-danger pl-3">', '</small>'); ?>

                </div>
                <div class="form-group">
                    <label for="sederajat1" id="labeldaftar"><b> IBTIDANIYAH / SEDERAJAT </b></label>
                    <input type="text" class="form-control" id="sederajat1" name="sederajat1" placeholder="lulusan sekolah mana ...." value="<?= set_value('sederajat1'); ?>">
                    <?= form_error('sederajat1', '<small class="text-danger pl-3">', '</small>'); ?>

                </div>
                <div class="form-group">
                    <label for="sederajat2" id="labeldaftar"><b> TSANAWIYAH / SEDERAJAT </b></label>
                    <input type="text" class="form-control" id="sederajat2" name="sederajat2" placeholder="lulusan sekolah mana ...." value="<?= set_value('sederajat2'); ?>">
                    <?= form_error('sederajat2', '<small class="text-danger pl-3">', '</small>'); ?>

                </div>
                <div class="form-group">
                    <label for="pesantren" id="labeldaftar"><b> PONDOK PESANTREN </b></label>
                    <input type="text" class="form-control" id="pesantren" name="pesantren" placeholder="lulusan pesantren mana...." value="<?= set_value('pesantren'); ?>">
                    <?= form_error('pesantren', '<small class="text-danger pl-3">', '</small>'); ?>

                </div>
                <div class="form-group">
                    <label for="juz" id="labeldaftar"><b> JUMLAH JUZ YANG DIHAFAL </b>(*)</label>
                    <input type="text" class="form-control" id="juz" name="juz" placeholder="jumlah hafalan juz ... " value="<?= set_value('juz'); ?>">
                    <?= form_error('juz', '<small class="text-danger pl-3">', '</small>'); ?>
                    <span style="font-size:10pt;color:#2c3e50;">(*) Isi data dengan benar jangan kosong <br>
                    </span>
                </div>
                <div class="g-recaptcha" name="g-recaptcha" data-sitekey="6LfMEqoUAAAAAAWXRszCKn1SRiSnT3ictTzK1QEw"></div>

            </div>

        </div>

        <div class="col-lg-12 mt-5 " id="bukti" style="display : block">

            <ol style="color:#2c3e50; font-size:13pt;list-style-type:square;">
                <li>
                    <p style="font-size:16pt;color:black;"> UPLOAD BUKTI PEMBAYARAN </p>
                </li>
            </ol>
        </div>
        <div id="upload-bukti" style="display : block">

            <div class="row justify-content-center mt-5 ">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="photo" id="labeldaftar"><b> UPLOAD BUKTI PEMBAYARAN </b></label>

                        <div class=" custom-file">
                            <input type="file" class="custom-file-input" id="bukti" name="bukti">
                            <label class="custom-file-label" for="photo">Choose file</label>
                        </div>
                        <span style="font-size:10pt;color:#2c3e50;">(*) Proses verivikasi pembayaran kurang lebih 1 x 24 jam <br>
                        </span>
                        <span style="font-size:10pt;color:#2c3e50;">(*) apabila pendaftaran sudah terverivikasi maka calon santri akan mendapatkan kartu pendaftaran.
                        </span>
                    </div>


                    <button type="submit" class="btn btn-success mt-5 float-right">Daftar</button>
                    <button type="reset" class="btn btn-danger mt-5 mr-2 float-right">Reset</button>
                </div>
                </form>
            </div>
        </div>
        <div class="col-lg-12 mt-5 " id="upload-rapot" style="display : none">

            <ol style="color:#2c3e50; font-size:13pt;list-style-type:square;">
                <li>
                    <p style="font-size:16pt;color:black;"> UPLOAD NILAI RAPOT </p>
                </li>
            </ol>
        </div>
        <div id="rapot" style="display : none">
            <div class="row justify-content-center mt-5 ">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="photo" id="labeldaftar"><b> UPLOAD NILAI </b></label>

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="photo" name="photo">
                            <label class="custom-file-label" for="photo">Choose file</label>
                        </div>
                        <span style="font-size:10pt;color:#2c3e50;">(*) file harus berupa ZIP,RAR,TAR <br>
                        </span>
                        <span style="font-size:10pt;color:#2c3e50;">(*) Proses verivikasi file seleksi tergantung banyaknya santri yang mendaftar <br>
                        </span>
                        <span style="font-size:10pt;color:#2c3e50;">(*) apabila pendaftaran sudah terverivikasi maka calon santri akan mendapatkan kartu pendaftaran.
                        </span>
                    </div>

                    <button type="submit" class="btn btn-success mt-5 float-right">Daftar</button>
                    <button type="reset" class="btn btn-danger mt-5 mr-2 float-right">Reset</button>
                </div>

                </form>
            </div>
        </div>
    </div>

</div>

<script src="<?= base_url('assets/') ?>js/jquery-3.3.1.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>


<script>
    $('#kaderisasi').on('click', function() {
        console.log('ok');
        document.getElementById('bukti').style.display = "none";
        document.getElementById('upload-bukti').style.display = "none";
        document.getElementById('rapot').style.display = "block";
        document.getElementById('upload-rapot').style.display = "block";

    })

    $('#bayar').on('click', function() {
        console.log('ok');
        document.getElementById('bukti').style.display = "block";
        document.getElementById('upload-bukti').style.display = "block";
        document.getElementById('rapot').style.display = "none";
        document.getElementById('upload-rapot').style.display = "none";

    })
</script>