<!-- Dashboard Counts Section-->
<section class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4"><i class="fa fa-user"></i> <?= $title ?></h3>
                    </div>
                    <div class="card-body">
                        <?php if ($this->session->flashdata('success')): ?>
                            <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
                        <?php elseif ($this->session->flashdata('error')): ?>
                            <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
                        <?php endif; ?>

                        <form method="POST" action="<?= base_url('user/profile_save') ?>">
                            <div class="col-md-12 p-2">
                                <div class="row ">
                                    <div class="col-md-3">Name</div>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control" value="<?= $user_details['name'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 p-2">
                                <div class="row">
                                    <div class="col-md-3">Email</div>
                                    <div class="col-md-9">
                                        <input type="email" name="email" class="form-control" value="<?= $user_details['email'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 p-2">
                                <div class="row">
                                    <div class="col-md-3">Mobile</div>
                                    <div class="col-md-9">
                                        <input type="text" name="mobile" class="form-control" value="<?= $user_details['mobile'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 p-2">
                                <div class="row">
                                    <div class="col-md-3">Username</div>
                                    <div class="col-md-9">
                                        <input type="text" name="username" class="form-control" value="<?= $user_details['username'] ?>" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 p-2">
                                <div class="row">
                                    <div class="col-md-3">User Type</div>
                                    <div class="col-md-9"><span class="user-type" data-value="<?= $user_details['type'] ?>"></span></div>
                                </div>
                            </div>

                            <hr>
                            <div class="col-md-12 p-2">
                                <div class="form-group">
                                    <a href="<?= base_url('user/profile') ?>" class="btn btn-secondary">Batal</a>
                                    <button type="submit" class="btn btn-success">Update Profile</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
