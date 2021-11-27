<?php
$conn = mysqli_connect("localhost", "root", "", "uts");

function registrasi($data)
{
    global $conn;

    $nama = strtolower(stripslashes($data["nama"]));
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $email = strtolower(stripslashes($data["email"]));


    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    //cek username
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar!')
                </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password', '$nama', '$email'
    , '', '', '', '', '', '', 'NULL')");

    return mysqli_affected_rows($conn);
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    
    $data = mysqli_fetch_assoc($result);

    return $data;
}

function login($data)
{
    global $conn;
    $username = $data["username"];
    $password = $data["password"];

    //cek username
    $query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_num_rows($query) === 1) {
        //cek password
        $row = mysqli_fetch_assoc($query);
        if (password_verify($password, $row["password"])) {
            return 1;
        } else {
            return 0;
        }
    } else {
        return 0;
    }
}

// function update($nama, $email, $phone, $address, $github, $twitter, $instagram, $facebook)
// {
//     global $conn;
//     $stmt = $conn->prepare("UPDATE user SET nama =?, email =?, phone =?, address =?,
//                                     github =?, twitter =?, instagram =?, facebook =? WHERE id=?") or die($conn->mysqli->error);

//     $id = $_GET['id'];

//     // Set our params
//     // BK: No need to use escaping when using parameters, in fact, you must not, 
//     // because you'll get literal '\' characters in your content. */
//     $nama = isset($_POST['nama']) ? $conn->mysqli->real_escape_string($_POST['nama']) : '';
//     $email = isset($_POST['email']) ? $conn->mysqli->real_escape_string($_POST['email']) : '';
//     $phone = isset($_POST['phone']) ? $conn->mysqli->real_escape_string($_POST['phone']) : '';
//     $address = isset($_POST['address']) ? $conn->mysqli->real_escape_string($_POST['address']) : '';
//     $github = isset($_POST['github']) ? $conn->mysqli->real_escape_string($_POST['github']) : '';
//     $twitter = isset($_POST['twitter']) ? $conn->mysqli->real_escape_string($_POST['twitter']) : '';
//     $instagram = isset($_POST['instagram']) ? $conn->mysqli->real_escape_string($_POST['instagram']) : '';
//     $facebook = isset($_POST['facebook']) ? $conn->mysqli->real_escape_string($_POST['facebook']) : '';

//     // Bind our params
//     // BK: variables must be bound in the same order as the params in your SQL.
//     // Some people prefer PDO because it supports named parameter.
//     $stmt->bind_param(
//         'ssssssssi',
//         $nama,
//         $email,
//         $phone,
//         $address,
//         $github,
//         $twitter,
//         $instagram,
//         $facebook,
//         $id
//     ) or die($stmt->error);


//     /* Execute the prepared Statement */
//     $status = $stmt->execute() or die($stmt->error);

//     if ($status === false) {
//         trigger_error($stmt->error, E_USER_ERROR);
//     }
//     printf("%d Row inserted.\n", $stmt->affected_rows);
// }



function edit($data, $username)
{
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $phone = htmlspecialchars($data["phone"]);
    $address = htmlspecialchars($data["address"]);
    $github = htmlspecialchars($data["github"]);
    $twitter = htmlspecialchars($data["twitter"]);
    $instagram = htmlspecialchars($data["instagram"]);
    $facebook = htmlspecialchars($data["facebook"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if( $_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    }
    else {
        $gambar = upload();
    }


    $query = "UPDATE user SET
                nama = '$nama',
                email = '$email',
                phone = '$phone',
                address = '$address',
                github = '$github',
                twitter = '$twitter',
                instagram = '$instagram',
                facebook = '$facebook', 
                gambar = '$gambar'
                WHERE username = '$username'
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload() {
    $fileName = $_FILES['gambar']['name'];
    $fileSize = $_FILES['gambar']['size'];
    $errorFile = $_FILES['gambar']['error'];
    $tempName = $_FILES['gambar']['tmp_name'];
    $validFileExtension = ['png', 'jpg', 'jpeg'];
    $fileExtension = explode('.', $fileName);
    $fileExtension = strtolower($fileExtension[count($fileExtension) - 1]);

    if ($errorFile === 4) { // jika tidak ada file yang diupload
        echo "
            <script>
                alert('Pilih gambar terlebih dahulu!');
            </script>";
        return false;
    }

    if (!in_array($fileExtension, $validFileExtension)) {
        echo "
            <script>
                alert('Ekstensi gambar salah!');
            </script>";
        return false;
    }

    if ($fileSize > 2121440) {
        echo "
            <script>
                alert('Ukuran gambar terlalu besar!');
            </script>";
        return false;
    }

    $newFileName = uniqid() . '.' . $fileExtension;
    move_uploaded_file($tempName, 'img/' . $newFileName);

    return $newFileName;
}