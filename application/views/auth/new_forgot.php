<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-3">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <?= $this->session->flashdata('message'); ?>
                                    <div class="container">
                                        <form class="user" method="post" action="<?= base_url('auth/newreset'); ?>">
                                            <h1 class="h4 text-gray-900 mb-2">Change Your Password</h1>
                                            <p class="mb-4"><?= $this->session->userdata('reset_email'); ?></p>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="form-group">
                                        <div class="input-container">
                                            <i class="fa fa-key icon pl-3 pt-3"></i>
                                            <input class="input-field" type="password" placeholder="Input new Passowrd" name="password" id="password">
                                        </div>
                                    </div>
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="container">
                                    <div class="form-group">
                                        <div class="input-container">
                                            <i class="fa fa-key icon pl-3 pt-3"></i>
                                            <input class="input-field" type="password" placeholder="Repeat Your Password" name="password1" id="password1">
                                        </div>
                                    </div>
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    <div class="container">
                                        <button type="submit " class="btn btn-primary btn-user btn-block">
                                            Reset Password
                                            </a>
                                    </div>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>