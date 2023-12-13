<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['masuk_user'])){

    // ambil data dari formulir
    $email = $_POST['email'];
    $password = $_POST['password'];

    // buat query
    $sql = "SELECT id from user WHERE email = :email and password = :password";
    $query = $db->prepare($sql);
    $query->execute(['email' => $email, 'password' => $password]);
    $user = $query->fetch(PDO::FETCH_ASSOC);
    $user_id = $user['id'];

    // apakah query simpan berhasil?
    if($user_id) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header("Location: index.php?user_id=$user_id");
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header("Location: pages/login.php?status=gagal");
    }

} else {
    die("Akses dilarang...");
}

?>