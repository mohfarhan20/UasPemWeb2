<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<title>Login</title>
<style>
    .container {
        margin-top: 20px;
    }

    a {
        text-decoration: none;
    }

    .no-gutters {
        display: flex;
    }
</style>

<body style="background-color: #CAF0F8;">
    <!-- Start: Login with overlay image -->
    <div id="main-wrapper" class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="card border-0 shadow">
                    <div class="card-body p-0">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="mb-5">
                                        <h3 class="h4 font-weight-bold text-theme"><?= lang('Auth.loginTitle') ?></h3>
                                    </div>

                                    <h6 class="h5 mb-0">Welcome back!</h6>
                                    <p class="text-muted mt-2 mb-5">Enter your <?= lang('Auth.emailOrUsername') ?> and password to access panel.</p>

                                    <?= view('Myth\Auth\Views\_message_block') ?>
                                    <form action="<?= route_to('login') ?>" method="POST">
                                        <?= csrf_field() ?>

                                        <div class="form-group">
                                            <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
                                            <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>

                                        <div class="form-group mt-3 mb-3">
                                            <label for="password"><?= lang('Auth.password') ?></label>
                                            <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.password') ?>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-theme"><?= lang('Auth.loginAction') ?></button>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-6 d-none d-lg-inline-block">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?= base_url(); ?>/img/gambarLogin.jpg" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>This beautiful theme yours!</h5>
                                                <p>don't have a good day have a great day</p>
                                                <p>-Movie Quotes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->

                <p class="text-muted text-center mt-3 mb-0"><a href="<?= route_to('register') ?>" class="text-primary ml-1"><?= lang('Auth.needAnAccount') ?></a></p>

                <!-- end row -->

            </div>
            <!-- end col -->
        </div>
        <!-- Row -->
    </div><!-- End: Login with overlay image -->
</body>

<?= $this->endSection(); ?>