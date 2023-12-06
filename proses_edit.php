<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan semua data telah diisi dengan benar sebelum melakukan perubahan
    if (isset($_POST['nip']) && isset($_POST['nama']) && isset($_POST['jk']) && isset($_POST['alamat'])) {
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];

        // Lakukan proses update ke dalam database
        $query = "UPDATE karyawan SET nama='$nama', jk='$jk', alamat='$alamat' WHERE nip='$nip'";

        if ($conn->query($query) === TRUE) {
            // Jika update berhasil, kembali ke halaman karyawan.php
            header("Location: karyawan.php");
            exit();
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "Semua data harus diisi.";
    }
} else {
    echo "Metode permintaan tidak valid.";
}

$conn->close();
?>
