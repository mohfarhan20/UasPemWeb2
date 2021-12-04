<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<title>Edit Profile</title>
<style>
    .container {
        margin-top: 50px;
    }
</style>

<body style="background-color: #CAF0F8;" class="loggedin">
    <section>
        <div></div>
    </section>
    <div>
        <!-- Start: Account setting or edit profile -->

        <div class="container">
            <form action="/user/update/<?= user()->id; ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= user()->id; ?>">
                <input type="hidden" name="gambarLama" value="<?= user()->gambar; ?>"">
                <div class=" row gutters">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <div class="account-settings">
                                <div class="user-profile">
                                    <div class="user-avatar">
                                        <img src="<?= base_url(); ?>/img/<?= user()->gambar; ?>" alt="<?= user()->nama; ?>">
                                    </div>
                                    <h5 class="user-name">@<?= user()->username; ?></h5>
                                    <h6 class="user-email"><?= user()->email; ?></h6>
                                </div>
                                <div class="about">
                                    <h5>About</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body shadow">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">Personal Details</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Full Name</label>
                                        <input type="text" name="nama" class="form-control" value="<?= old('nama') ? old('nama') : user()->nama; ?>">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="eMail">Email</label>
                                        <input type="email" name="email" class="form-control" value="<?= old('email') ? old('email') : user()->email; ?>">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" class="form-control" value="<?= old('phone') ? old('phone') : user()->phone; ?>">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" class="form-control" value="<?= old('address') ? old('address') : user()->address; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mt-3 mb-2 text-primary">Social Media</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="Street">Github</label>
                                        <input type="text" name="github" class="form-control" value="<?= old('github') ? old('github') : user()->github; ?>">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="ciTy">Twitter</label>
                                        <input type="text" name="twitter" class="form-control" value="<?= old('twitter') ? old('twitter') : user()->twitter; ?>">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="sTate">Instagram</label>
                                        <input type="text" name="instagram" class="form-control" value="<?= old('instagram') ? old('instagram') : user()->instagram; ?>">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="zIp">Facebook</label>
                                        <input type="text" name="facebook" class="form-control" value="<?= old('facebook') ? old('facebook') : user()->facebook; ?>">
                                    </div>
                                    <br>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="gambar" name="gambar">
                                    <label class="input-group-text" for="gambar">Upload</label>
                                </div>
                            </div>
                            <br>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right">
                                        <a href="/"><button type="button" id="cancel" name="cancel" class="btn btn-secondary">Cancel</button></a>
                                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>

    </div><!-- End: Account setting or edit profile -->
    </div>
</body>

<?= $this->endSection(); ?>
