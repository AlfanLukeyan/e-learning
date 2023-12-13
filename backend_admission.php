<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['admission'])){

    // ambil data dari formulir
    $user_id = $_POST['user_id'];
    $course_id = $_POST['course_id'];
    $tanggal_daftar = date('Y-m-d H:i:s'); // get the current date and time

    // buat query
    $sql = "INSERT INTO admission (user_id, course_id, tanggal_daftar) VALUE (:user_id, :course_id, :tanggal_daftar)";
    $query = $db->prepare($sql);
    $query->execute(['user_id' => $user_id, 'course_id' => $course_id, 'tanggal_daftar' => $tanggal_daftar]);

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