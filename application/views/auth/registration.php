<style>
    [type="date"] {
        background: #fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png) 93% 50% no-repeat;
    }

    [type="date"]::-webkit-inner-spin-button {
        display: none;
    }

    [type="date"]::-webkit-calendar-picker-indicator {
        opacity: 0;
    }

    /* custom styles */

    label {
        display: block;
    }

    input {
        border: 3px solid dodgerblue;
        border-radius: 0px 20px 20px 0px;
        background-color: #fff;
        padding: 3px 5px;
        padding-top: 9px;
        padding-bottom: 2px;
        width: 190px;
    }
</style>
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('utama/registration'); ?>">
                            <div class="form-group">
                                <div class="input-container">
                                    <i class="fa fa-user icon pl-3 pt-3"></i>
                                    <input type="text" class="input-field" id="nama" name="nama" placeholder="Full Name" value="<?= set_value('nama'); ?>">
                                </div>
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <div class="input-container">
                                    <i class="fa fa-envelope icon pl-3 pt-3"></i>
                                    <input type="text" class="input-field" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                </div>
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <div class="input-container">
                                    <i class="fas fa-calendar-alt icon pl-3 pt-3"></i>
                                    <input placeholder="Tahun Lahir" class="textbox-n" type="text" onfocus="(this.type='date')" name="birthdate" id="birthdate">
                                </div>
                                <?= form_error('birthdate', '<small class="text-danger pl-3">', '</small>'); ?>
                                <div class="form-group">
                                    <div class="input-container">
                                        <i class="fas fa-university icon pl-3 pt-3"></i>
                                        <select class="form control input-field" id="jurusan" name="jurusan">
                                            <option value="" selected>Choose one ..</option>
                                            <option value="Teknik Informatika">Teknik Informatika </option>
                                            <option value="Multimedia">Multimedia </option>
                                            <option value="Teknik Elektronika Industri">Teknik Elektronika Industri </option>
                                            <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan </option>
                                            <option value="Administrasi Perhotelan">Administrasi Perhotelan</option>
                                        </select>
                                    </div>
                                    <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="input-field1" id="password1" name="password1" placeholder="Password">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="input-field1" id="password2" name="password2" placeholder="Repeat password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block button-register">
                                    Register Account
                                </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('utama/forgot'); ?>">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('utama/login') ?>">Already have an account? Login!</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 