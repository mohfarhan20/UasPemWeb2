<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<title>Register</title>
<style>
    body {
        background-color: #CAF0F8;
    }
    a{
        text-decoration: none;
    }

    .container .header {
        margin-top: 10px;
        text-align: center;
        /* warna 1 */
        color: #023E8A;
    }

    .container .box {

        width: 650px;
        height: 500px;
        margin: auto;
        background: #407BA7;
        border-radius: 50px;
    }

    .container .box h2 {
        padding-top: 10px;
        text-align: center;
        color: #FFFFFF;
    }

    .container .box form {
        padding: 30px;
    }

    .container .box form label {
        color: #FFFFFF;
    }

    /* .container .box form button {
            position: relative;
            bottom: 20%;
            left: 40%;
            
        } */
    .container h5 {
        margin-top: 10px;
        text-align: center;
    }
</style>

<body>

    <div class="container">
        <div class="header">
            <h1><?= lang('Auth.register') ?></h1>
        </div>

        <div class="box shadow">
            <h2>Fill the form registration below</h2>
            <?= view('Myth\Auth\Views\_message_block') ?>
            <form action="<?= route_to('register') ?>" method="POST">
                <?= csrf_field() ?>
                <div class="mb-3 ">
                    <label for="email" class="form-label"><?= lang('Auth.email') ?></label>
                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?> me-2 pe-5 ps-5" name="email" id="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                </div>
                <div class="mb-3 ">
                    <label for="username" class="form-label"><?= lang('Auth.username') ?></label>
                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?> me-2 pe-5 ps-5" name="username" id="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                </div>
                <div class=" mb-3 ">
                    <label for=" password" class="form-label"><?= lang('Auth.password') ?></label>
                    <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?> me-2 pe-5 ps-5" name="password" id="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                </div>
                <div class=" mb-3 ">
                    <label for=" pass_confirm" class="form-label"><?= lang('Auth.repeatPassword') ?></label>
                    <input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?> me-2 pe-5 ps-5" name="pass_confirm" id="password" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-success center"><?= lang('Auth.register') ?></button>
            </form>
        </div>

        <p class="text-muted text-center mt-3 mb-0"><?= lang('Auth.alreadyRegistered') ?> <a href="<?= route_to('login') ?>" class="text-primary ml-1"><?= lang('Auth.signIn') ?></a></p>

    </div>

</body>

<?= $this->endSection(); ?>