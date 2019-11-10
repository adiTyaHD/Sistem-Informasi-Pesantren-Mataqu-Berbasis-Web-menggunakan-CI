<!-- begin the page of content-->
<div class="container-fluid">
    <form action="<?= base_url('admin/changepass/'); ?>" method="post">

        <h3 class="h3 mb-4 text-gray-800"><?= $title; ?></h3>

        <div class="row">
            <div class="col-lg">
                <div class="p-3">
                    <?= $this->session->flashdata('message'); ?>

                    <div class="form-group">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="old_password">Password Lama</label>
                            <input type="password" name="old_password" class="form-control" id="old_password" placeholder="Masukkan password lama">
                        </div>
                        <?= form_error('old_password', '<small class="text-danger pl-3">', '</small>'); ?>

                    </div>
                    <div class="form-group">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="password_new">Password Baru</label>
                            <input type="password" name="password_new" class="form-control" id="password_new" placeholder="Masukkan password baru">
                        </div>
                        <?= form_error('password_new', '<small class="text-danger pl-3">', '</small>'); ?>

                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="password_new1">Ulangi Password Baru</label>
                            <input type="password" name="password_new1" class="form-control" id="password_new1" placeholder="Masukkan password baru">
                        </div>
                        <?= form_error('password_new1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <button type="submit" class=" btn btn-success float-right">Change Password</a>
                                <button type="reset" class="btn btn-danger float-right mr-2 mb-5">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> 