<?php
# Memulakan fungsi SESSION
session_start();

# Memanggil fail header.php dan fail fungsi.php
include('header.php');
include ('fungsi.php');
?>


<!-- Memaparkan pautan (hyperlink) -->
<!DOCTYPE html>
<html>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-container">

<div class="w3-panel w3-card w3-sand">
  <div class="w3-container w3-sand">
    <p>
    <ul class="w3-ul w3-card-4" style="width:50%">
      <li><b>Sila Pilih</b></li>
      <li> <a href='peserta-signup-borang.php'>Daftar Peserta Baharu</a> <br> </li>
      <li> <a href='peserta-login-borang.php'>Login Peserta</a> <br> </li>
      <li> <a href='hakim-login-borang.php'>Login Hakim</a>  <br> <li>
    </ul>
    </p>
</div>

</body>
</html>

<div class=" w3-panel w3-sand w3-card-4">
    <!-- Memaparkan Syarat-Syarat Pertandingan. Ubahsuai syarat pertandingan ini -->
<p>Syarat Pertandingan</p>

    <li> Seorang peserta hanya boleh menghantar 1 penyertaan sahaja.</li>
    <li>Terdapat 2 kategori iaitu sekolah dan individu.</li>
    <li>Bagi kategori individu, pemenang akan mendapat tempat 1 hingga 5. </li>
    <li>Semua penyertaan akan mendapat sijil penyertaan.</li>
    <li>Bagi kategori sekolah, tiada had untuk pelajar menghantar penyertaan.</li>
    <li>Pemenang akan dikira dari jumlah mata terkumpul. </li>
    <li>Keputusan hanya akan dipaparkan setelah semua peserta telah dinilai.</li>
    <hr>
</div>


    
    <!-- Memaparkan keputusan individu -->
    Keputusan Individu 
    <?PHP
    # Memanggil fungsi semak() dari fail fungsi.php
    $k=semak();

    # Semakan Nilai yang dipulangkan
    if($k=="Semua peserta telah dinilai.")
    {
        # jika nilai dipulangkan Semua peserta telah dinilai.
        # panggi fungsi keputusan individu dari fail fungsi.php
        # dan papar keputusan 5 individu terbaik.
        # Bilangan pemenang anda boleh ubah di fail fungsi.php
        keputusan_individu();
    }
    else
    {
        # paparan jika proses penilaian masih belum tamat
        echo "<br>Proses Penilaian masih dibuat";
    }

    ?>

    <hr>
    <!-- Memaparkan keputusan Keseluruhan Sekolah -->
    Keputusan Sekolah 
    <?PHP
    # Memanggil fungsi semak() dari fail fungsi.php
    $k=semak();
    if($k=="Semua peserta telah dinilai.")

    {
        # jika nilai dipulangkan Semua peserta telah dinilai.
        # panggi fungsi keputusan sekolah dari fail fungsi
        # dan paparkan keputusan keseluruhan sekolah
        keputusan_sekolah();
    }
    else
    {
        # paparan jika proses penilaian masih belum tamat
        echo "<br>Proses Penilaian masih dibuat";
    }
    ?>

    <?php include ('footer.php'); ?>