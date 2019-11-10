<div class="coba py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="single-contact-information mb-100">
                    <div class="card" data-aos="fade-up" id="contact">
                        <div class="card-body">
                            <h5>Konseling</h5><br>
                            <div class="contact-content d-flex mt-1">
                                <p style="text-align:justify;">
                                    <span style="font-size : 12pt; color:white;"><i class="fas fa-phone text-dark"></i> <a href="https://api.whatsapp.com/send?phone=082285646484&text=Hi%20Assalamualaikum%20&" onMouseOver="this.style.color='#273c75'" onMouseOut="this.style.color='#353b48'" style="color:black;"> 0822-8568-6484 (ZAHRA)<br></span></a>
                                    <span style="font-size : 12pt; color:white;"><i class="fas fa-phone text-dark"></i> <a href="https://api.whatsapp.com/send?phone=081288624120&text=Hi%20Assalamualaikum%20&" onMouseOver="this.style.color='#273c75'" onMouseOut="this.style.color='#353b48'" style="color:black;"> 0812-8862-4120 (ENDAH)</span></a>
                                </p>
                            </div>
                            <!-- Single Contact Information -->
                            <div class="contact-content d-flex mt-1">


                                <p><i class="fas fa-envelope text-dark"> &nbsp;infokonseling@gmail.com</p></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="single-contact-information mb-100">
                    <div class="card" data-aos="fade-up" id="contact">
                        <div class="card-body">
                            <h5>Official Manager</h5><br>
                            <div class="contact-content d-flex mt-1">
                                <p style="text-align:justify;">
                                    <span style="font-size : 12pt; color:white;"><i class="fas fa-phone text-dark"></i> <a href="https://api.whatsapp.com/send?phone=081290393000&text=Hi%20Assalamualaikum%20&" onMouseOver="this.style.color='#273c75'" onMouseOut="this.style.color='#353b48'" style="color:black;"> 0812-9039-3000 (AMIRAH)<br></span></a>
                                    <span style="font-size : 12pt; color:white;"><i class="fas fa-phone text-dark"></i> <a href="https://api.whatsapp.com/send?phone=081289723896&text=Hi%20Assalamualaikum%20&" onMouseOver="this.style.color='#273c75'" onMouseOut="this.style.color='#353b48'" style="color:black;"> 0812-8972-3896 (IMAM)</span></a>
                                </p>
                            </div>
                            <!-- Single Contact Information -->
                            <div class="contact-content d-flex mt-1">
                                <p><i class="fas fa-envelope text-dark"> &nbsp;infomanager@gmail.com</p></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="single-contact-information mb-100">
                    <div class="card" data-aos="fade-up" id="contact">
                        <div class="card-body">
                            <h5>Personal Marketing</h5><br>
                            <div class="contact-content d-flex mt-1">
                                <p style="text-align:justify;">
                                    <span style="font-size : 12pt; color:white;"><i class="fas fa-phone text-dark"></i> <a href="https://api.whatsapp.com/send?phone=081246732454&text=Hi%20Assalamualaikum%20&&" onMouseOver="this.style.color='#273c75'" onMouseOut="this.style.color='#353b48'" style="color:black;"> 0812-4673-2454 (RATNA)<br></span></a>
                                    <span style="font-size : 12pt; color:white;"><i class="fas fa-phone text-dark"></i> <a href="https://api.whatsapp.com/send?phone=085219761482&text=Hi%20Assalamualaikum%20&" onMouseOver="this.style.color='#273c75'" onMouseOut="this.style.color='#353b48'" style="color:black;"> 0852-1976-1482 (DODI)</span></a>
                                </p>
                            </div>

                            <div class="contact-content d-flex mt-1">
                                <p><i class="fas fa-envelope text-dark"> &nbsp;infomarketing@gmail.com</p></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-8 mb-5">
            <form action="<?= base_url('home/contact'); ?>" method="post" class="p-5 mt-5 bg-white">

                <?= $this->session->flashdata('message'); ?>


                <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="fullname">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama anda">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>

                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="font-weight-bold" for="email">Email</label>
                        <input type="email" id="email" class="form-control" name="email" placeholder="Masukan email anda">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

                    </div>
                </div>


                <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="phone">Telepon</label>
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Sesuaikan nomer handphone anda">
                        <?= form_error('phone', '<small class="text-danger pl-3">', '</small>'); ?>

                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="font-weight-bold" for="pesan">Saran</label>
                        <textarea name="pesan" id="pesan" cols="30" rows="5" class="form-control" placeholder="Masukan saran anda"></textarea>
                        <?= form_error('pesan', '<small class="text-danger pl-3">', '</small>'); ?>

                    </div>
                </div>
                <div class="g-recaptcha" name="g-recaptcha" data-sitekey="6LfFCKMUAAAAAG84qWrswa9zpXRth9BBjZTXtJKh"></div>
                <div class="row form-group">
                    <div class="col-md-12 mt-5">
                        <button type="submit" class="btn btn-success text-white px-4 py-2">Kirim Saran</button>
                        <button type="reset" class="btn btn-danger text-white px-4 py-2">Hapus</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4 mt-5 pt-5">
            <div class="card">
                <div class="card-body">
                    <h3 class="h5 text-black mb-3">Info Alamat</h3>
                    <p class="mb-0 font-weight-bold">Alamat</p>
                    <span style="font-size : 16px; color:white;"><i class="fas fa-home text-dark"></i> <a href="https://goo.gl/maps/ZaZFWwQdYM33VAK4A" onMouseOver="this.style.color='#273c75'" onMouseOut="this.style.color='#353b48'" style="color:black;">Cipendawa, Megamendung, Puncak, Cipayung Girang, Megamendung, Bogor, Jawa Barat 16770 </span></a>
                    <a href="https://www.youtube.com/watch?v=S8W50dIqpO4" class="btn2 text-white &nbsp;">Rute Via video</a>



                    <p class="mb-0 font-weight-bold">Telepon</p>
                    <span style="font-size : 16px; color:white;"><i class="fas fa-phone text-dark"></i> <a href="https://api.whatsapp.com/send?phone=082285646484&text=Hi%20Assalamualaikum%20&" onMouseOver="this.style.color='#273c75'" onMouseOut="this.style.color='#353b48'" style="color:black;"> +6221 7587 6564</span></a>

                    <p class="mb-0 font-weight-bold">Email</p>
                    <span style="font-size : 16px; color:white;"><i class="fas fa-envelope text-dark"></i><a href="mailto:info@pesantrentahfidzmataqu.com" onMouseOver="this.style.color='#273c75'" onMouseOut="this.style.color='#353b48'" style="color:black;"> info@pesantrentahfidzmataqu.com</span></a><br>
                </div>
            </div>
        </div>
    </div>
</div>