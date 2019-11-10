<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Pondok Pesantren Takhfiz Quran MataQu</h1>
                                    <img src="<?= base_url('assets/images/index.png'); ?>" width="100px" alt="" class="img-thumbnail mb-3">



                                </div>

                                <?= $this->session->flashdata('message'); ?>
                                <div class="container">
                                    <form class="user" method="post" action="<?= base_url('auth/index'); ?>">


                                        <div class="form-group">

                                            <div class="input-container">
                                                <i class="fa fa-envelope icon pl-3 pt-3"></i>
                                                <input class="input-field" type="text" placeholder="Email" name="email" value="<?= set_value('email'); ?>">
                                            </div>
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-container">
                                                <i class="fa fa-key icon pl-3 pt-3"></i>
                                                <input type="password" class="input-field" type="text" placeholder="Password" name="password">
                                            </div>
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block button-login">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/forgot'); ?>">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<center class="foot">
    <span style="font-size:14pt;color:white;">Copyright &copy; Pesantren Al-Quran Mah'ad Mataqu 2019</span>
</center>