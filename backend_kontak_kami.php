<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['kontak_kami'])){

    // ambil data dari formulir
    $user_id = $_POST['user_id'];
    $judul = $_POST['judul'];
    $pesan = $_POST['pesan'];

    // buat query
    $sql = "INSERT INTO contact (user_id, judul, pesan) VALUE (:user_id, :judul, :pesan)";
    $query = $db->prepare($sql);
    $query->execute(['user_id' => $user_id, 'judul' => $judul, 'pesan' => $pesan]);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>