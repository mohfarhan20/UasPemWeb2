<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>
<style>
    body {
        background-color: #CAF0F8;
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
</head>

<body>

    <div class="container">
        <div class="header">
            <h1>Register</h1>
        </div>

        <div class="box shadow">
            <h2>Fill the form registration below</h2>

            <form action="/uas/login" method="">
                <?= csrf_field(); ?>
                <div class="mb-3 ">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control me-2 pe-5 ps-5" name="nama" id="nama" placeholder="input here">
                </div>
                <div class="mb-3 ">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control me-2 pe-5 ps-5" name="username" id="username" placeholder="input here">
                </div>
                <div class="mb-3 ">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control me-2 pe-5 ps-5" name="password" id="password" placeholder="input here">
                </div>
                <div class="mb-3 ">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control me-2 pe-5 ps-5" name="email" id="email" placeholder="input here">
                </div>
                <button type="submit" name="register" class="btn btn-success center">Submit</button>
            </form>
        </div>

        <p class="text-muted text-center mt-3 mb-0">Already hava an account?<a href="/uas/login" class="text-primary ml-1">Login</a></p>

    </div>
    <?= $this->endSection(); ?>