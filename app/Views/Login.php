<?= $this->extend('layout/template'); ?>
<?= $this->Section('content'); ?>
<style>
    .container {
        margin-top: 20px;
    }
</style>

</head>

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
                                        <h3 class="h4 font-weight-bold text-theme">Login</h3>
                                    </div>

                                    <h6 class="h5 mb-0">Welcome back!</h6>
                                    <p class="text-muted mt-2 mb-5">Enter your Username and password to access admin
                                        panel.</p>

                                    <form action="/" method="">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" name="username" id="username">
                                        </div>
                                        <div class="form-group mb-5">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password" id="password">
                                        </div>
                                        <button type="submit" name="login" class="btn btn-theme">Login</button>
                                        <a href="#" class="forgot-link float-right text-primary">Forgot password?</a>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-6 d-none d-lg-inline-block">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?= base_url(); ?>/assets/img/gambarLogin.jpg" class="d-block w-100" alt="...">
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

                <p class="text-muted text-center mt-3 mb-0">Don't have an account? <a href="/uas/register" class="text-primary ml-1">register</a></p>

                <!-- end row -->

            </div>
            <!-- end col -->
        </div>
        <!-- Row -->
    </div><!-- End: Login with overlay image -->
    <?= $this->endSection(); ?>