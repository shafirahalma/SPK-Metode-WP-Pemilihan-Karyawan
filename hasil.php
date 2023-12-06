<?php include 'koneksi.php'; ?>
<!DOCTYPE html>

<html xml:lang="en" lang="en-AU">

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
          <img src="images/corner_sub_br.gif" alt="bottom corner" class="vBottom" />
        </div>

      </div>

      <!-- Right side main content -->
      <div id="contentRight">

        <p>
          <span class="header">hasil</span>
        <h3 align="center">Pilih Bobot</h3>
        <form action="hasil.php" method="post">
          <table align="center">
            <tr>
              <td>C1. Absensi</td>
              <td>:</td>
              <td>
                <select name="bobot_c1">
                  <option value="0.1">Bobot 1 (10%)</option>
                  <option value="0.15">Bobot 2 (15%)</option>
                  <option value="0.2">Bobot 3 (20%)</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>C2. Atitut</td>
              <td>:</td>
              <td>
                <select name="bobot_c2">
                  <option value="0.1">Bobot 1 (10%)</option>
                  <option value="0.15">Bobot 2 (15%)</option>
                  <option value="0.2">Bobot 3 (20%)</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>C3. Loyaritas</td>
              <td>:</td>
              <td>
                <select name="bobot_c3">
                  <option value="0.1">Bobot 1 (10%)</option>
                  <option value="0.15">Bobot 2 (15%)</option>
                  <option value="0.2">Bobot 3 (20%)</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>C4. Disiplin</td>
              <td>:</td>
              <td>
                <select name="bobot_c4">
                  <option value="0.1">Bobot 1 (10%)</option>
                  <option value="0.15">Bobot 2 (15%)</option>
                  <option value="0.2">Bobot 3 (20%)</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>C5. Skill</td>
              <td>:</td>
              <td>
                <select name="bobot_c5">
                  <option value="0.1">Bobot 1 (10%)</option>
                  <option value="0.15">Bobot 2 (15%)</option>
                  <option value="0.2">Bobot 3 (20%)</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>C6. Skill</td>
              <td>:</td>
              <td>
                <select name="bobot_c6">
                  <option value="0.1">Bobot 1 (10%)</option>
                  <option value="0.15">Bobot 2 (15%)</option>
                  <option value="0.2">Bobot 3 (20%)</option>
                </select>
              </td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>
                <input type="submit" name="simpan" value="Hitung">
              </td>
            </tr>
          </table>
        </form>
        <h4 align="center">Bobot yang di Pilih :
          <?php
          if (isset($_POST['simpan'])) {
            $bobot_c1 = $_POST['bobot_c1'];
            $bobot_c2 = $_POST['bobot_c2'];
            $bobot_c3 = $_POST['bobot_c3'];
            $bobot_c4 = $_POST['bobot_c4'];
            $bobot_c5 = $_POST['bobot_c5'];
            $bobot_c6 = $_POST['bobot_c6'];

            echo "C1 (<font color=aqua>" . $bobot_c1 . "</font>) | C2 (<font color=aqua>" . $bobot_c2
              . "</font>) | C3 (<font color=aqua>" . $bobot_c3 . "</font>) | C4 (<font color=aqua>"
              . $bobot_c4 . "</font>) | C5 (<font color=aqua>" . $bobot_c5 . "</font>)" . "</font>) | C6 (<font color=aqua>" . $bobot_c6 . "</font>)";
          } ?>
        </h4>
        <br>
        <?php
        $c1 = $bobot_c1;
        $c2 = $bobot_c2;
        $c3 = $bobot_c3;
        $c4 = $bobot_c4;
        $c5 = $bobot_c5;
        $c6 = $bobot_c6;
        ?>


        <p>
          <span class="header"></span>
        <h3 align="center">Perhitungan Vektor</h3>
        <table border="1" cellspacing="0" cellspacing="0" width="80%" align="center">
          <thead>
            <tr>
              <th widht=40%>Nama</th>
              <th>C1. </th>
              <th>C2. </th>
              <th>C3. </th>
              <th>C4. </th>
              <th>C5. </th>
              <th>C6. </th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            <?php


            error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

            $query = $conn->query("SELECT * FROM kriteria");
            while ($data = $query->fetch_assoc()) {
            ?>
              <tr>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo pow($data['c1'], $c1); ?></td>
                <td><?php echo pow($data['c2'], $c2); ?></td>
                <td><?php echo pow($data['c3'], $c3); ?></td>
                <td><?php echo pow($data['c4'], $c4); ?></td>
                <td><?php echo pow($data['c5'], $c5); ?></td>
                <td><?php echo pow($data['c6'], $c6); ?></td>
                <td><?php echo pow($data['c1'], $c1) * pow($data['c2'], $c2) * pow($data['c3'], $c3)
                      * pow($data['c4'], $c4) * pow($data['c5'], $c5) * pow($data['c6'], $c6); ?></td>
              </tr>
            <?php
            }
            // Menutup koneksi setelah selesai
            $conn->close();
            ?>

          </tbody>
        </table>
        </p>

        <p class="header">
        <h3 align="center">Perangkingan</h3>
        <table border="1" cellpadding="0" cellspacing="0" width="80%" align="center">
          <thead>
            <tr>
              <th>No</th>
              <th width="40%">Nama</th>
              <th>Presentase</th>
            </tr>
          </thead>
          <tbody>
            <?php
            // Koneksi ke database menggunakan MySQLi
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "karyawan_wp";

            // Membuat koneksi
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Memeriksa koneksi
            if ($conn->connect_error) {
              die("Koneksi gagal: " . $conn->connect_error);
            }


            // Lakukan query untuk mendapatkan data
            // Hitung dan simpan nilai ranking ke tabel rangking
            $queryKriteria = $conn->query("SELECT * FROM kriteria");
            if ($queryKriteria) {
              // Inisialisasi array untuk menyimpan nilai total per data
              $totalPerDataArray = [];

              while ($data = $queryKriteria->fetch_assoc()) {
                // Hitung nilai total untuk setiap data
                $totalPerData = pow($data['c1'], $c1) * pow($data['c2'], $c2) * pow($data['c3'], $c3)
                  * pow($data['c4'], $c4) * pow($data['c5'], $c5) * pow($data['c6'], $c6);

                // Simpan nilai total per data ke dalam array
                $totalPerDataArray[$data['nama']] = $totalPerData;
              }

              // Hitung total keseluruhan dari semua nilai total per data
              $totalAllData = array_sum($totalPerDataArray);

              // Inisialisasi array untuk menyimpan nilai ranking
              $rankingArray = [];

              // Hitung nilai ranking untuk setiap data dan simpan ke dalam array
              foreach ($totalPerDataArray as $nama => $totalPerData) {
                $nilai_ranking = $totalPerData / $totalAllData;
                $rankingArray[$nama] = $nilai_ranking;
              }

              // Urutkan array nilai ranking berdasarkan nilai terbesar ke terkecil
              arsort($rankingArray);

              // Simpan nilai ranking ke dalam tabel rangking
              foreach ($rankingArray as $nama => $nilai_ranking) {
                $data1 = $nama;
                $data2 = $nilai_ranking;

                // Lakukan insert ke tabel rangking
                $insert_query = $conn->query("INSERT ignore INTO rangking (nama, nilai) VALUES ('$data1', '$data2')");

                if (!$insert_query) {
                  echo "Error in inserting data: " . $conn->error;
                }
              }
            } else {
              echo "Error in query: " . $conn->error;
            }

            // Ambil data ranking terurut berdasarkan nilai terbesar
            $queryRanking = $conn->query("SELECT * FROM rangking ORDER BY nilai DESC");
            if ($queryRanking) {
              $nomor = 0;

              while ($data = $queryRanking->fetch_assoc()) {
                $nomor++;

                // Tampilkan hasil perhitungan dalam tabel
                echo "<tr>
                <th>$nomor</th>
                <td>{$data['nama']}</td>
                <td>{$data['nilai']}</td>
              </tr>";
              }
            } else {
              echo "Error in query: " . $conn->error;
            }

            // Tutup koneksi setelah selesai
            $conn->close();
            ?>



          </tbody>
        </table>
        </p>
        <!-- Creates bottom left rounded corner -->
        <img src="images/corner_sub_bl.gif" alt="bottom corner" class="vBottom" />

      </div>

    </div>

    <!-- Footer begins -->


  </div>

</body>

</html>