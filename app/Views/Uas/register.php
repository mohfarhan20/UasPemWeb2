<?php
session_start();

if (isset($_SESSION["login"])) {
    echo "
        <script>
            alert('Anda sudah login!');
            document.location.href = 'index.php';
        </script>";
}

require 'functions.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('user baru berhasil ditambahkan');
                </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login AND Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/Account-setting-or-edit-profile.css">
    <link rel="stylesheet" href="assets/css/Login-with-overlay-image.css">
    <link rel="stylesheet" href="assets/css/Profile-with-data-and-skills.css">
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

            <form action="" method="POST">
                <div class="mb-3 ">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control me-2 pe-5 ps-5" name="nama" id="nama"
                        placeholder="input here">
                </div>
                <div class="mb-3 ">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control me-2 pe-5 ps-5" name="username" id="username"
                        placeholder="input here">
                </div>
                <div class="mb-3 ">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control me-2 pe-5 ps-5" name="password" id="password"
                        placeholder="input here">
                </div>
                <div class="mb-3 ">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control me-2 pe-5 ps-5" name="email" id="email"
                        placeholder="input here">
                </div>
                <button type="submit" name="register" class="btn btn-success center">Submit</button>
            </form>
        </div>

        <p class="text-muted text-center mt-3 mb-0">Already hava an account?<a href="login.php"
                class="text-primary ml-1">Login</a></p>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>