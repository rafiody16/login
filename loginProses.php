<?php 

include "Koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
$result = mysqli_query($connection, $query);
$cek  = mysqli_num_rows($result);

if ($cek) {
    echo "Anda berhasil login. silahkan menuju "; ?>
    <a href="homeAdmin.php">Halaman Home</a>
<?php
} else {
    echo "Anda gagal login. silahkan ";?>
    <a href="loginForm.php">Login Kembali</a>
<?php
    echo mysqli_error($connection);
}

?>
