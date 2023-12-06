<?php
include 'koneksi.php';
// Ambil nip dari parameter GET
if (isset($_GET['nip'])) {
    $nip = $_GET['nip'];

    // Lakukan penghapusan data
    $delete_query = $conn->query("DELETE FROM karyawan WHERE nip='$nip'");
    
    if ($delete_query) {
        header("Location: karyawan.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "NIP tidak ditemukan.";
}

// Tutup koneksi setelah selesai
$conn->close();

?>
