<?php
session_start();
require "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'");

$row = mysqli_fetch_assoc($result);

if (password_verify ($password, $row['password'])){
    $_SESSION['login'] = true;
    $_SESSION['nama'] = $row['username'];
    $_SESSION['foto'] = 'Bendera.png';
    $_SESSION['hakakses'] = 'admin';
     header("location: index.php");
} else {
    echo "
            <script>
                alert('kata sandi salah harap masukkan sandi lagi');
                document.location.href='loginadmin.php';
            </script>
    ";
}

?>