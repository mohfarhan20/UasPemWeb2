<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<title>Home</title>

<body style="background-color: #CAF0F8" class="loggedin">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container-fluid">
            <span class="navbar-brand mb-0">
                <h4>Profile</h4>
            </span>
            <span style="color:white"><a class="btn btn-danger " href="<?= base_url(); ?>/logout">logout</a></span>
        </div>
    </nav>

    <style>
        a {
            text-decoration: none;
        }
    </style>
    <!-- Start: Profile with data and skills -->
    <div class="container">
        <div class="main-body">
            <form action="" method="POST">
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <div class="user-avatar">
                                        <img src="<?= base_url(); ?>/img/<?= user()->gambar; ?>" alt="Admin" class="rounded-circle" width="110">
                                    </div>
                                    <div class="mt-3">
                                        <h4>@<?= user()->username; ?></h4>
                                        <p class="text-secondary mb-1"> Full Stack Developer</p>
                                        <p class="text-muted font-size-sm"> Indonesia</p>
                                        <button class="btn btn-primary"> Follow</button>
                                        <button class="btn btn-outline-primary"> Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2 shadow">
                            <ul class="list-group list-group-flush">
                                <?php if (user()->github) : ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline">
                                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                                </path>
                                            </svg>Github</h6>
                                        <a href="https://github.com/<?= user()->github; ?>" target="_blank">
                                            <span class="text-secondary">
                                                <?= user()->github; ?>
                                            </span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (user()->twitter) : ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info">
                                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                                </path>
                                            </svg>Twitter</h6>
                                        <a href="https://twitter.com/<?= user()->twitter; ?>" target="_blank">
                                            <span class="text-secondary">
                                                <?= user()->twitter; ?>
                                            </span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (user()->instagram) : ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger">
                                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                            </svg>Instagram</h6>
                                        <a href="https://instagram.com/<?= user()->instagram; ?>" target="_blank">
                                            <span class="text-secondary">
                                                <?= user()->instagram; ?>
                                            </span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (user()->facebook) : ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary">
                                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                </path>
                                            </svg>Facebook</h6>
                                        <a href="http://facebook.com/<?= user()->facebook; ?>" target="_blank">
                                            <span class="text-secondary">
                                                <?= user()->facebook; ?>
                                            </span>
                                        </a>
                                    </li><?php endif; ?>
                            </ul>
                        </div>
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3 shadow">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?= user()->nama; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?= user()->email; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?= user()->phone; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?= user()->address; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">

                                        <a class="btn btn-info " href="<?= base_url(); ?>/user/edit">Edit</a>

                                    </div>
                                </div>
                            </div>
                        </div>
            </form>

            <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Skill Set</h6>
                            <small>Web Design</small>
                            <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small>Front end</small>
                            <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small>Back end</small>
                            <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small>Analytical</small>
                            <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small>Programming Languages</small>
                            <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 64%" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-3">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Achievment</h6>
                            <ul>
                                <li>
                                    Runner up competitive programming Srifoton
                                </li>
                                <li>
                                    Champion of UI UX Competition Techphorio
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    </div>

    </div>
    </div><!-- End: Profile with data and skills -->
</body>

<?= $this->endSection(); ?>