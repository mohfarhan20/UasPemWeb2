<?php 

session_start();
$conn = mysqli_connect("localhost", "root", "", "uts");

if (mysqli_connect_errno()) {

    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (!isset($_POST['username'], $_POST['password'])) {

    exit('Please fill both the username and password fields!');
}

if ($stmt = $conn->prepare('SELECT id, password FROM user WHERE username = ?')) {

    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();

    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();

        if (password_verify($_POST['password'], $password)) {

            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;

            header('Location: index.php');
        } else {

            echo 'Incorrect username and/or password!';
        }
    } else {

        echo 'Incorrect username and/or password!';
    }

    $stmt->close();
}