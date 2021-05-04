<!DOCTYPE html>
<html>
  <head>
    <title>Formulir Peserta Didik</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style media="screen">
      .warning {color: #FF0000;}
    </style>
  </head>
  <body>
    <!-- koneksi ke database -->
    <?php
      $host = "localhost";
      $user = "root";
      $password = "";
      $database = "pemweb8";

      $koneksi= mysqli_connect($host, $user, $password, $database);
    ?>

    <!-- deklarasi variabel -->
    <?php

      $jenisPendaftaran="";
      $error_jenisPendaftaran=""; //error
      $tglMasukSekolah="";
      $error_tglMasukSekolah=""; //error
      $NIS="";
      $error_NIS=""; //error
      $nomorPesertaUjian="";
      $error_nomorPesertaUjian=""; //error
      $paud="";
      $tk="";
      $seriSKHUN="";
      $error_seriSKHUN=""; //error
      $seriIjazah="";
      $error_seriIjazah=""; //error
      $hobi="";
      $error_hobi="";
      $citaCita="";
      $error_citaCita="";

      $namaLengkap="";
      $error_namaLengkap =""; //error
      $jenisKelamin="";
      $error_jenisKelamin=""; //error
      $nisn="";
      $error_nisn=""; //error
      $nik="";
      $error_nik=""; //error
      $tglLahir="";
      $error_tglLahir=""; //error
      $tempatLahir="";
      $error_tempatLahir=""; //error
      $agama="";
      $error_agama=""; //error
      $kebutuhanKhusus="";
      $error_kebutuhanKhusus=""; //error
      $alamatJalan="";
      $rt="";
      $rw="";
      $dusun="";
      $kelurahan="";
      $kecamatan="";
      $kodePos="";
      $error_kodePos=""; //error
      $tempatTinggal="";
      $transportasi="";
      $noHP="";
      $error_noHP=""; //error
      $noTelp="";
      $error_noTelp=""; //error
      $email="";
      $error_email=""; //error
      $penerimaKPS="";
      $noKPS="";
      $error_noKPS=""; //error
      $wargaNegara="";
      $error_wargaNegara=""; //error
    ?>

    <?php
      // pemroses data
      if($_SERVER["REQUEST_METHOD"] == "POST"){

      if(empty($_POST["jenisPendaftaran"])){ //Jenis Pendaftaran
        $error_jenisPendaftaran = "Data tidak boleh kosong";
      }
      else{
        $jenisPendaftaran = ($_POST["jenisPendaftaran"]);
      }

      if(empty($_POST["tglMasukSekolah"])){ //Tanggal masuk sekolah
        $error_tglMasukSekolah = "Data tidak boleh kosong";
      }
      else{
        $tglMasukSekolah = cek_input($_POST["tglMasukSekolah"]);
        if(!is_numeric($tglMasukSekolah)){
          $error_tglMasukSekolah = "Hanya boleh angka";
        }
      }

      if(empty($_POST["NIS"])){ //NIS
        $error_NIS = "Data tidak boleh kosong";
      }
      else{
        $NIS = cek_input($_POST["NIS"]);
        if(!is_numeric($NIS)){
          $error_NIS = "Hanya boleh angka";
        }
      }

      if(empty($_POST["nomorPesertaUjian"])){ //nomor peserta ujian
        $error_nomorPesertaUjian = "Data tidak boleh kosong";
      }
      else{
        $nomorPesertaUjian = cek_input($_POST["nomorPesertaUjian"]);
        if(!is_numeric($nomorPesertaUjian)){
          $error_NIS = "Hanya boleh angka";
        }
      }

      if(!empty($_POST["paud"])){ //paud
        $paud = ($_POST["paud"]);
      }

      if(!empty($_POST["tk"])){ //tk
        $tk = ($_POST["tk"]);
      }

      if(empty($_POST["seriSKHUN"])){ //seri SKHUN
        $error_seriSKHUN = "Data tidak boleh kosong";
      }
      else{
        $seriSKHUN = cek_input($_POST["seriSKHUN"]);
        if(!is_numeric($seriSKHUN)){
          $error_seriSKHUN = "Hanya boleh angka";
        }
      }

      if(empty($_POST["seriIjazah"])){ //seri ijazah
        $error_seriIjazah = "Data tidak boleh kosong";
      }
      else{
        $seriIjazah = cek_input($_POST["seriIjazah"]);
        if(!is_numeric($seriIjazah)){
          $error_seriIjazah = "Hanya boleh angka";
        }
      }

      if(empty($_POST["hobi"])){ //hobi
        $error_hobi = "Data tidak boleh kosong";
      }
      else{
        $hobi = ($_POST["hobi"]);
      }

      if(empty($_POST["citaCita"])){ //cita Cita
        $error_citaCita = "Data tidak boleh kosong";
      }
      else{
        $citaCita = ($_POST["citaCita"]);
      }

      if(empty($_POST["namaLengkap"])){ //nama lengkap
        $error_namaLengkap = "Data tidak boleh kosong";
      }
      else{
        $namaLengkap = cek_input($_POST["namaLengkap"]);
      }

      if(empty($_POST["jenisKelamin"])){ //jenis Kelamin
        $error_jenisKelamin = "Data tidak boleh kosong";
      }
      else{
        $jenisKelamin = cek_input($_POST["jenisKelamin"]);
      }

      if(empty($_POST["nisn"])){ //nisn
        $error_nisn = "Data tidak boleh kosong";
      }
      else{
        $nisn = cek_input($_POST["nisn"]);
        if(!is_numeric($nisn)){
          $error_nisn = "Hanya boleh angka";
        }
      }

      if(empty($_POST["nik"])){ //nik
        $error_nik = "Data tidak boleh kosong";
      }
      else{
        $nik = cek_input($_POST["nik"]);
        if(!is_numeric($nik)){
          $error_nik = "Hanya boleh angka";
        }
      }

      if(empty($_POST["tglLahir"])){ //tgl lahir
        $error_tglLahir = "Data tidak boleh kosong";
      }
      else{
        $tglLahir = cek_input($_POST["tglLahir"]);
        if(!is_numeric($tglLahir)){
          $error_tglLahir = "Hanya boleh angka";
        }
      }

      if(empty($_POST["agama"])){ //agama
        $error_agama = "Data tidak boleh kosong";
      }
      else{
        $agama = cek_input($_POST["agama"]);
      }

      if(empty($_POST["kebutuhanKhusus"])){ //kebutuhan Khusus
        $error_kebutuhanKhusus = "Data tidak boleh kosong";
      }
      else{
        $kebutuhanKhusus = cek_input($_POST["kebutuhanKhusus"]);
      }

      if(!empty($_POST["alamatJalan"])){ //alamat jalan
        $alamatJalan = ($_POST["alamatJalan"]);
      }

      if(!empty($_POST["rt"])){ //rt
        $rt = ($_POST["rt"]);
      }

      if(!empty($_POST["rw"])){ //rw
        $rw = ($_POST["rw"]);
      }

      if(!empty($_POST["dusun"])){ //dusun
        $dusun = ($_POST["dusun"]);
      }

      if(!empty($_POST["kelurahan"])){ //kelurahan
        $kelurahan = ($_POST["kelurahan"]);
      }

      if(!empty($_POST["kecamatan"])){ //kecamatan
        $kecamatan = ($_POST["kecamatan"]);
      }

      if(!empty($_POST["kodePos"])){ //kode pos
        $kodePos = ($_POST["kodePos"]);
        if(!is_numeric($kodePos)){
          $error_kodePos = "Hanya boleh angka";
        }
      }

      if(!empty($_POST["tempatTinggal"])){ //tempat Tinggal
        $tempatTinggal = ($_POST["tempatTinggal"]);
      }

      if(!empty($_POST["transportasi"])){ //transportasi
        $transportasi = ($_POST["transportasi"]);
      }

      if(empty($_POST["noHP"])){ //no HP
        $error_noHP = "Data tidak boleh kosong";
      }
      else{
        $noHP = cek_input($_POST["noHP"]);
        if(!is_numeric($noHP)){
          $error_noHP = "Hanya boleh angka";
        }
      }

      if(!empty($_POST["noTelp"])){ //no telp
        $noTelp = ($_POST["noTelp"]);
        if(!is_numeric($noTelp)){
          $error_noTelp = "Hanya boleh angka";
        }
      }

      if(empty($_POST["email"])){ //email
        $error_email = "Data tidak boleh kosong";
      }
      else{
        $email = cek_input($_POST["email"]);
      }

      if(!empty($_POST["penerimaKPS"])){ //penerima KPS
        $penerimaKPS = ($_POST["penerimaKPS"]);
      }

      if(!empty($_POST["noKPS"])){ //no KPS
        $noKPS = ($_POST["noKPS"]);
      }

      if(!empty($_POST["noKPS"])){ //no KPS
        $noKPS = ($_POST["noKPS"]);
      }

      if(empty($_POST["wargaNegara"])){ //warga Negara
        $error_wargaNegara = "Data tidak boleh kosong";
      }
      else{
        $wargaNegara = ($_POST["wargaNegara"]);
      }

      //kirim ke database
        if($error_NIS=="" && $error_namaLengkap=="" && $error_nomorPesertaUjian==""){
          $query = "INSERT INTO formulir SET jenisPendaftaran='$jenisPendaftaran', tglMasukSekolah='$tglMasukSekolah', NIS='$NIS', nomorPesertaUjian='$nomorPesertaUjian', paud='$paud', tk='$tk', seriSKHUN='$seriSKHUN', seriIjazah='$seriIjazah', hobi='$hobi', citaCita='$citaCita', namaLengkap='$namaLengkap', jenisKelamin='$jenisKelamin', nisn='$nisn', nik='$nik', tglLahir='$tglLahir', tempatLahir='$tempatLahir', agama='$agama', kebutuhanKhusus='$kebutuhanKhusus', alamatJalan='$alamatJalan', rt='$rt', rw='$rw', dusun='$dusun', kelurahan='$kelurahan', kecamatan='$kecamatan', kodePos='$kodePos', tempatTinggal='$tempatTinggal', transportasi='$transportasi', noHP='$noHP', noTelp='$noTelp', email='$email', penerimaKPS='$penerimaKPS', noKPS='$noKPS', wargaNegara='$wargaNegara' ";

          mysqli_connect($koneksi, $query);
          header("location:tampil.php");
      }

      }


      // function cek inputan
    function cek_input($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>

    <!-- Pengisian Data -->
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            Formulir Peserta Didik
          </div>
          <div class="card-body">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

              <!-- Jenis Pendaftaran -->
              <div class="form-group row">
                <label for="jenisPendaftaran" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
                <div class="col-sm-10">
                  <select class="jenisPendaftaran" name="jenisPendaftaran">
                    <option value="Siswa Baru">Siswa Baru</option>
                    <option value="Pindahan">Pindahan</option>
                  </select>
                </div>
              </div>

              <!-- tglMasukSekolah -->
              <div class="form-group row">
                <label for="tglMasukSekolah" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
                <div class="col-sm-10">
                  <input type="text" name="tglMasukSekolah" class="form-control <?php echo ($error_tglMasukSekolah !="" ? "is-invalid" : ""); ?>" id="tglMasukSekolah" placeholder="tglMasukSekolah" value="<?php echo $tglMasukSekolah; ?>"><span class="warning"><?php echo $error_tglMasukSekolah; ?></span>
                </div>
              </div>

              <!-- NIS -->
              <div class="form-group row">
                <label for="NIS" class="col-sm-2 col-form-label">NIS</label>
                <div class="col-sm-10">
                  <input type="text" name="NIS" class="form-control <?php echo ($error_NIS !="" ? "is-invalid" : ""); ?>" id="NIS" placeholder="NIS" value="<?php echo $NIS; ?>"><span class="warning"><?php echo $error_NIS; ?></span>
                </div>
              </div>

              <!-- Nomor peserta ujian -->
              <div class="form-group row">
                <label for="nomorPesertaUjian" class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
                <div class="col-sm-10">
                  <input type="text" name="nomorPesertaUjian" class="form-control <?php echo ($error_nomorPesertaUjian !="" ? "is-invalid" : ""); ?>" id="nomorPesertaUjian" placeholder="nomorPesertaUjian" value="<?php echo $nomorPesertaUjian; ?>"><span class="warning"><?php echo $error_nomorPesertaUjian; ?></span>
                </div>
              </div>

              <!-- paud -->
              <div class="form-group row">
                <label for="paud" class="col-sm-2 col-form-label">Pernah PAUD</label>
                <div class="col-sm-10">
                  <input type="radio" name="paud" value="YA" id="paud">YA
                  <input type="radio" name="paud" value="TIDAK" id="paud">TIDAK
                </div>
              </div>

              <!-- tk -->
              <div class="form-group row">
                <label for="tk" class="col-sm-2 col-form-label">Pernah TK</label>
                <div class="col-sm-10">
                  <input type="radio" name="tk" value="YA" id="tk">YA
                  <input type="radio" name="tk" value="TIDAK" id="tk">TIDAK
                </div>
              </div>

              <!-- Nomor seri SKHUN -->
              <div class="form-group row">
                <label for="seriSKHUN" class="col-sm-2 col-form-label">Nomor seri SKHUN</label>
                <div class="col-sm-10">
                  <input type="text" name="seriSKHUN" class="form-control <?php echo ($error_seriSKHUN !="" ? "is-invalid" : ""); ?>" id="seriSKHUN" placeholder="seriSKHUN" value="<?php echo $seriSKHUN; ?>"><span class="warning"><?php echo $error_seriSKHUN; ?></span>
                </div>
              </div>

              <!-- Nomor seri Ijazah -->
              <div class="form-group row">
                <label for="seriIjazah" class="col-sm-2 col-form-label">Nomor seri Ijazah</label>
                <div class="col-sm-10">
                  <input type="text" name="seriIjazah" class="form-control <?php echo ($error_seriIjazah !="" ? "is-invalid" : ""); ?>" id="seriIjazah" placeholder="seriIjazah" value="<?php echo $seriIjazah; ?>"><span class="warning"><?php echo $error_seriIjazah; ?></span>
                </div>
              </div>

              <!-- hobi -->
              <div class="form-group row">
                <label for="hobi" class="col-sm-2 col-form-label">Hobi</label>
                <div class="col-sm-10">
                  <select class="hobi" name="hobi">
                    <option value="Olah Raga">Olah Raga</option>
                    <option value="Kesenian">Kesenian</option>
                    <option value="Membaca">Membaca</option>
                    <option value="Menulis">Menulis</option>
                    <option value="Travelin">Travelin</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
                </div>
              </div>

              <!-- cita - cita -->
              <div class="form-group row">
                <label for="citaCita" class="col-sm-2 col-form-label">Cita-cita</label>
                <div class="col-sm-10">
                  <select class="citaCita" name="citaCita">
                    <option value="PNS">PNS</option>
                    <option value="TNI/POLRI">TNI/POLRI</option>
                    <option value="Guru/Dosen">Guru/Dosen</option>
                    <option value="Dokter">Dokter</option>
                    <option value="Politikus">Politikus</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="Seni/Lukis/Artis/Sejenis">Seni/Lukis/Artis/Sejenis</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
                </div>
              </div>

              <!-- Nama Lengkap -->
              <div class="form-group row">
                <label for="namaLengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                  <input type="text" name="namaLengkap" class="form-control <?php echo ($error_namaLengkap !="" ? "is-invalid" : ""); ?>" id="namaLengkap" placeholder="namaLengkap" value="<?php echo $namaLengkap; ?>"><span class="warning"><?php echo $error_namaLengkap; ?></span>
                </div>
              </div>

              <!-- Jenis Kelamin -->
              <div class="form-group row">
                <label for="jenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                  <input type="radio" name="jenisKelamin" value="Laki-laki" id="jenisKelamin">Laki-laki
                  <input type="radio" name="jenisKelamin" value="Perempuan" id="jenisKelamin">Perempuan
                </div>
              </div>

              <!-- NISN -->
              <div class="form-group row">
                <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                <div class="col-sm-10">
                  <input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="nisn" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn; ?></span>
                </div>
              </div>

              <!-- NIK -->
              <div class="form-group row">
                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                  <input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder="nik" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik; ?></span>
                </div>
              </div>

              <!-- Tanggal Lahir -->
              <div class="form-group row">
                <label for="tglLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                  <input type="text" name="tglLahir" class="form-control <?php echo ($error_tglLahir !="" ? "is-invalid" : ""); ?>" id="tglLahir" placeholder="tglLahir" value="<?php echo $tglLahir; ?>"><span class="warning"><?php echo $error_tglLahir; ?></span>
                </div>
              </div>

              <!-- Tempat Lahir -->
              <div class="form-group row">
                <label for="tempatLahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                  <input type="text" name="tempatLahir" class="form-control <?php echo ($error_tempatLahir !="" ? "is-invalid" : ""); ?>" id="tempatLahir" placeholder="tempatLahir" value="<?php echo $tempatLahir; ?>"><span class="warning"><?php echo $error_tempatLahir; ?></span>
                </div>
              </div>

              <!-- agama -->
              <div class="form-group row">
                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-10">
                  <select class="agama" name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen/Protestan">Kristen/Protestan</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Khong Hu Cu">Khong Hu Cu</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
                </div>
              </div>

              <!-- Berkebutuhan Khusus -->
              <div class="form-group row">
                <label for="kebutuhanKhusus" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
                <div class="col-sm-10">
                  <select class="kebutuhanKhusus" name="kebutuhanKhusus">
                    <option value="Tidak">Tidak</option>
                    <option value="Netra">Netra</option>
                    <option value="Rungu">Rungu</option>
                    <option value="Gradhita Ringan">Gradhita Ringan</option>
                    <option value="Gradhita Sedang">Gradhita Sedang</option>
                    <option value="Daksa Ringan">Daksa Ringan</option>
                    <option value="Daksa Sedang">Daksa Sedang</option>
                    <option value="Laras">Laras</option>
                    <option value="Wicara">Wicara</option>
                    <option value="Tuna Ganda">Tuna Ganda</option>
                    <option value="Hiper Aktif">Hiper Aktif</option>
                    <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                    <option value="Bakat Istimewa">Bakat Istimewa</option>
                    <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                    <option value="Narkoba">Narkoba</option>
                    <option value="Indigo">Indigo</option>
                    <option value="Down Sindrome">Down Sindrome</option>
                    <option value="Autis">Autis</option>
                  </select>
                </div>
              </div>

              <!-- Alamat Jalan -->
              <div class="form-group row">
                <label for="alamatJalan" class="col-sm-2 col-form-label">Alamat Jalan</label>
                <div class="col-sm-10">
                  <input type="text" name="alamatJalan" id="alamatJalan" placeholder="alamatJalan" value="<?php echo $alamatJalan; ?>">
                </div>
              </div>

              <!-- RT -->
              <div class="form-group row">
                <label for="rt" class="col-sm-2 col-form-label">RT</label>
                <div class="col-sm-10">
                  <input type="text" name="rt" id="rt" placeholder="rt" value="<?php echo $rt; ?>">
                </div>
              </div>

              <!-- RW -->
              <div class="form-group row">
                <label for="rw" class="col-sm-2 col-form-label">RW</label>
                <div class="col-sm-10">
                  <input type="text" name="rw" id="rw" placeholder="rw" value="<?php echo $rw; ?>">
                </div>
              </div>

              <!-- Dusun -->
              <div class="form-group row">
                <label for="dusun" class="col-sm-2 col-form-label">Dusun</label>
                <div class="col-sm-10">
                  <input type="text" name="dusun" id="dusun" placeholder="dusun" value="<?php echo $dusun; ?>">
                </div>
              </div>

              <!-- Kelurahan -->
              <div class="form-group row">
                <label for="kelurahan" class="col-sm-2 col-form-label">Kelurahan</label>
                <div class="col-sm-10">
                  <input type="text" name="kelurahan" id="kelurahan" placeholder="kelurahan" value="<?php echo $kelurahan; ?>">
                </div>
              </div>

              <!-- kecamatan -->
              <div class="form-group row">
                <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                <div class="col-sm-10">
                  <input type="text" name="kecamatan" id="kecamatan" placeholder="kecamatan" value="<?php echo $kecamatan; ?>">
                </div>
              </div>

              <!-- KODE Pos -->
              <div class="form-group row">
                <label for="kodePos" class="col-sm-2 col-form-label">Kode POS</label>
                <div class="col-sm-10">
                  <input type="text" name="kodePos" id="kodePos" placeholder="kodePos" value="<?php echo $kodePos; ?>"><span class="warning"><?php echo $error_kodePos; ?></span>
                </div>
              </div>

              <!-- tempat tinggal -->
              <div class="form-group row">
                <label for="tempatTinggal" class="col-sm-2 col-form-label">Tempat Tinggal</label>
                <div class="col-sm-10">
                  <select class="tempatTinggal" name="tempatTinggal">
                    <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                    <option value="Wali">Wali</option>
                    <option value="Kos">Kos</option>
                    <option value="Asrama">Asrama</option>
                    <option value="Panti Asuhan">Panti Asuhan</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
                </div>
              </div>

              <!-- transportasi -->
              <div class="form-group row">
                <label for="transportasi" class="col-sm-2 col-form-label">Transportasi</label>
                <div class="col-sm-10">
                  <select class="transportasi" name="transportasi">
                    <option value="Jalan Kaki">Jalan Kaki</option>
                    <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                    <option value="Kendaraan Umum/Angkot/Pete-pete">Kendaraan Umum/Angkot/Pete-pete</option>
                    <option value="Jemputan Sekolah">Jemputan Sekolah</option>
                    <option value="Kereta Api">Kereta Api</option>
                    <option value="Ojek">Ojek</option>
                    <option value="Andong/Bendi/Sado/Dokar/Delman/Becak">Andong/Bendi/Sado/Dokar/Delman/Becak</option>
                    <option value="Perahu Penyebrangan/Rakit/Getek">Perahu Penyebrangan/Rakit/Getek</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
                </div>
              </div>

              <!-- nomor HP -->
              <div class="form-group row">
                <label for="noHP" class="col-sm-2 col-form-label">Nomor HP</label>
                <div class="col-sm-10">
                  <input type="text" name="noHP" id="noHP" placeholder="noHP" value="<?php echo $noHP; ?>"><span class="warning"><?php echo $error_noHP; ?></span>
                </div>
              </div>

              <!-- nomor Telepon -->
              <div class="form-group row">
                <label for="noTelp" class="col-sm-2 col-form-label">Nomor Telepon</label>
                <div class="col-sm-10">
                  <input type="text" name="noTelp" id="noTelp" placeholder="noTelp" value="<?php echo $noTelp; ?>"><span class="warning"><?php echo $error_noTelp; ?></span>
                </div>
              </div>

              <!-- Email -->
              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email Pribadi</label>
                <div class="col-sm-10">
                  <input type="text" name="email" class="form-control <?php echo ($error_email !="" ? "is-invalid" : ""); ?>" id="email" placeholder="email" value="<?php echo $email; ?>"><span class="warning"><?php echo $error_email; ?></span>
                </div>
              </div>

              <!-- Penerima KPS -->
              <div class="form-group row">
                <label for="penerimaKPS" class="col-sm-2 col-form-label">Penerima KPS</label>
                <div class="col-sm-10">
                  <input type="radio" name="penerimaKPS" value="YA" id="penerimaKPS">YA
                  <input type="radio" name="penerimaKPS" value="TIDAK" id="penerimaKPS">TIDAK
                </div>
              </div>

              <!-- No KPS -->
              <div class="form-group row">
                <label for="noKPS" class="col-sm-2 col-form-label">No. KPS</label>
                <div class="col-sm-10">
                  <input type="text" name="noKPS" id="noKPS" placeholder="noKPS" value="<?php echo $noKPS; ?>"><span class="warning"><?php echo $error_noKPS; ?></span>
                </div>
              </div>

              <!-- Kewarganegaraan -->
              <div class="form-group row">
                <label for="wargaNegara" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                <div class="col-sm-10">
                  <input type="radio" name="wargaNegara" value="Indonesia(WNI)" id="wargaNegara">Indonesia(WNI)
                  <input type="radio" name="wargaNegara" value="Asing(WNA)" id="wargaNegara">Asing(WNA)
                </div>
              </div>

              <!-- Submit -->
              <div class="form-group row">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Daftar</button>
                </div>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>

    <!-- menampilkan data -->
    <?php
      echo "<h2>Your Input:</h2>";
      echo "Jenis Pendaftaran = ".$jenisPendaftaran;
      echo "<br>";
      echo "Tanggal Masuk Sekolah = ".$tglMasukSekolah;
      echo "<br>";
      echo "NISN = ".$NIS;
      echo "<br>";
      echo "Nomor Peserta Ujian = ".$nomorPesertaUjian;
      echo "<br>";
      echo "Pernah PAUD = ".$paud;
      echo "<br>";
      echo "Pernah TK = ".$tk;
      echo "<br>";
      echo "No. Seri SKHUN = ".$seriSKHUN;
      echo "<br>";
      echo "No. Seri Ijazah = ".$seriIjazah;
      echo "<br>";
      echo "Hobi = ".$hobi;
      echo "<br>";
      echo "Cita-cita = ".$citaCita;
      echo "<br>";
      echo "Nama Lengkap = ".$namaLengkap;
      echo "<br>";
      echo "Jenis Kelamin = ".$jenisKelamin;
      echo "<br>";
      echo "NISN = ".$nisn;
      echo "<br>";
      echo "NIK = ".$nik;
      echo "<br>";
      echo "Tanggal Lahir = ".$tglLahir;
      echo "<br>";
      echo "Tempat Lahir = ".$tempatLahir;
      echo "<br>";
      echo "Agama = ".$agama;
      echo "<br>";
      echo "Berkebutuhan Khusus = ".$kebutuhanKhusus;
      echo "<br>";
      echo "Alamat Jalan = ".$alamatJalan;
      echo "<br>";
      echo "RT = ".$rt;
      echo "<br>";
      echo "RW = ".$rw;
      echo "<br>";
      echo "Dusun = ".$dusun;
      echo "<br>";
      echo "Kelurahan = ".$kelurahan;
      echo "<br>";
      echo "Kecamatan = ".$kecamatan;
      echo "<br>";
      echo "Kode POS = ".$kodePos;
      echo "<br>";
      echo "Tempat Tinggal = ".$tempatTinggal;
      echo "<br>";
      echo "Transportasi = ".$transportasi;
      echo "<br>";
      echo "No. HP = ".$noHP;
      echo "<br>";
      echo "No. Telepon = ".$noTelp;
      echo "<br>";
      echo "Email Pribadi = ".$email;
      echo "<br>";
      echo "Penerima KPS = ".$penerimaKPS;
      echo "<br>";
      echo "No. KPS = ".$noKPS;
      echo "<br>";
      echo "Kewarganegaraan = ".$wargaNegara;
    ?>


  </body>
</html>
