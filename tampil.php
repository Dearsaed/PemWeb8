<!DOCTYPE html>
<html>
  <head>
    <title>Tampil Data</title>
  </head>
  <body>
    <h2>List Formulir Pendaftaran</h2>
    <table border="1">
      <tr>
        <th>NO</th>
        <th>NIS</th>
        <th>NAMA</th>
        <th>NO PESERTA UJIAN</th>
      </tr>

      <?php
        //koneksi ke database
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "pemweb8";

        $koneksi= mysqli_connect($host, $user, $password, $database);

        $formulir = mysqli_query($koneksi, "SELECT * FROM formulir");
        $no = 1;
        // memanggil isi database
        foreach ($formulir as $row) {
          echo "<tr>
          <td>$no</td>
          <td>".$row['NIS']."</td>
          <td>".$row['namaLengkap']."</td>
          <td>".$row['nomorPesertaUjian']."</td>
          </tr>";
          $no++;
        }
      ?>
      <a href="formulirPesertaDidik.php">Kembali ke Formulir Pendaftaran</a>
    </table>
  </body>
</html>
