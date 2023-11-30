<?php include 'koneksi.php'; ?>
<!DOCTYPE html>

<html xmlns="" xml:lang="en" lang="en-AU">

<head>

  <title>Seleksi Karyawan Terbaik</title>

  <link rel="stylesheet" type="text/css" href="css/screen_yellow.css" media="screen, tv, projection" />

</head>

<body>

<!-- Main site container -->
<div id="siteBox">

  <!-- Main site header : holds the img, title and top tabbed menu -->
  

  <!-- Content begins -->
  <div id="content">

    <!-- Left side menu : side bar links/news/search/etc. -->
    <div id="contentLeft">

      <p>
        <span class="header">Data Karyawan</span>
      </p>

      <p>
        <a href="index.php" title="different colour scheme" class="menuItem">Home</a>
        <a href="input_karyawan.php" title="whole wack of art" class="menuItem">Input Karyawan</a>
        <a href="karyawan.php" title="design work" class="menuItem">Lihat Karyawan</a>
      </p>

      <p>
        <span class="header">SPK</span>
      </p>
      <p>
        <a href="kriteria_tambah.php" title="different colour scheme" class="menuItem">Inpt Nilai Kriteria</a>
        <a href="kriteria.php" title="different colour scheme" class="menuItem">Kriteria</a>
        <a href="hasil.php" title="different colour scheme" class="menuItem">Hasil</a>
      </p>

      <!-- Creates the rounded corner on the bottom of the left menu -->
      <div class="bottomCorner">
        <img src="images/corner_sub_br.gif" alt="bottom corner" class="vBottom"/>
      </div>

    </div>


    <!-- Right side main content -->
    <div id="contentRight">

      <p>
        <span class="header">Tabel Karyawan</span>
      </p>     
  <center>      

   <table border="1" width="50%">
   <thead>   
       <tr>
          <th>No</th>
          <th>NIP</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>Action</th>
       </tr>
  </thead>
       <tbody>
       <?php 


$nomor = 0;
$tampil = $conn->query("SELECT * FROM karyawan");
while ($data = $tampil->fetch_assoc()) {
?>
    <tr>
        <td><?php echo $nomor = $nomor + 1; ?></td>
        <td><?php echo $data['nip']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['jk']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td>
            <?php echo "<a href='edit_karyawan.php?nip=" . $data['nip'] . "'>Edit</a>"; ?>
            <?php echo "<a href='delete.php?nip=" . $data['nip'] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Delete</a>"; ?>
        </td>
    </tr>
<?php 
} 
$conn->close();
?>

 
       </tbody>
   </table>
 </center>
      <p>
        <span class="header"></span>        
      </p>
      <!-- Creates bottom left rounded corner -->
      <img src="images/corner_sub_bl.gif" alt="bottom corner" class="vBottom"/>

    </div>

  </div>

  <!-- Footer begins -->
  

</div>

</body>

</html>