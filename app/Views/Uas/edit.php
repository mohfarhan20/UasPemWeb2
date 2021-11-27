<?php
session_start();

if (!isset($_SESSION["login"])) {
    echo "
        <script>
            alert('Anda belum login! Silahkan login terlebih dahulu!');
            document.location.href = 'login.php';
        </script>";
}


require 'functions.php';
$username = $_SESSION['username'];
$user = query("SELECT * FROM user WHERE username = '$username'");

if (isset($_POST["submit"])) {
    if (edit($_POST, $username) > 0) {
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo " <script>
        alert('data gagal diubah');
        
    </script>
        ";

        mysqli_error($conn);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/Account-setting-or-edit-profile.css">
    <link rel="stylesheet" href="assets/css/Login-with-overlay-image.css">
    <link rel="stylesheet" href="assets/css/Profile-with-data-and-skills.css">
    <style>
        .container {
            margin-top: 50px;
        }
    </style>
</head>

<body style="background-color: #CAF0F8;" class="loggedin">
    <section>
        <div></div>
    </section>
    <div>
        <!-- Start: Account setting or edit profile -->
        <div class="container">
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="gambarLama" value="<?= $user['gambar'] ?>">
                <div class="row gutters">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                        <div class="card h-100 shadow">
                            <div class="card-body">
                                <div class="account-settings">
                                    <div class="user-profile">
                                        <!-- <div class="user-avatar">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                                        </div> -->
                                        <h5 class="user-name"> <?= $user["nama"]; ?> </h5>
                                        <h6 class="user-email"> <?= $user["email"]; ?> </h6>
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
                                            <input type="text" name="nama" class="form-control" id="fullName" value="<?= $user["nama"]; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="eMail">Email</label>
                                            <input type="email" name="email" class="form-control" id="eMail" value="<?= $user["email"]; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" name="phone" class="form-control" id="phone" value="<?= $user["phone"]; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" name="address" class="form-control" id="address" value="<?= $user["address"]; ?>">
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
                                            <input type="text" name="github" class="form-control" id="Street" value="<?= $user["github"]; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="ciTy">Twitter</label>
                                            <input type="text" name="twitter" class="form-control" id="ciTy" value="<?= $user["twitter"]; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="sTate">Instagram</label>
                                            <input type="text" name="instagram" class="form-control" id="sTate" value="<?= $user["instagram"]; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="zIp">Facebook</label>
                                            <input type="text" name="facebook" class="form-control" id="zIp" value="<?= $user["facebook"]; ?>">
                                        </div>
                                        <br>
                                    </div>
                                    <label for="Gambar">Gambar : </label>
                                    <input type="file" name="gambar" value="Gambar">
                                </div>
                                <br>
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="text-right">
                                            <a href="javascript:window.history.go(-1);"><button type="button" id="cancel" name="cancel" class="btn btn-secondary">Cancel</button></a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>