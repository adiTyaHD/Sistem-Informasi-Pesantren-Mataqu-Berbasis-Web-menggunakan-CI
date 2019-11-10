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
                                        <form class="user" method="post" action="<?= base_url('auth/forgot'); ?>">
                                            <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                            <p class="mb-4"> Just enter your email address below and we'll send you a link to reset your password!</p>
                                    </div>
                                    <div class="container">
                                        <div class="form-group">
                                            <div class="input-container">
                                                <i class="fa fa-envelope icon pl-3 pt-3"></i>
                                                <input class="input-field" type="text" placeholder="Email" name="email" value="<?= set_value('email'); ?>">
                                            </div>
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>
                                    </div>
                                    <div class="container">
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Reset Password
                                            </a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/index') ?>">Back to Login!</a>
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