<?php
# Memulakan fungsi session
session_start();

#memanggil fail header.php fungsi.php
include('header.php');
include('fungsi.php');
?>

<!-- Tajuk antaramuka -->
<div class="w3-border w3-georgia w3-sand">

<h3>Pendaftaran Peserta Baru</h3>

<!-- Borang Pendaftaran Peserta baru --> 
<form action='peserta-signup-proses.php' method='POST'>

    Nama Peserta   <input type='text'      name='nama'        required><br>
    No KP Peserta   <input type='text'      name='nokp'        required><br>
    Katalaluan     <input type='password'  name='katalaluan'  required><br>
    Sekolah        <select                 name='kod_sekolah' required><br>

                        <option selected value disabled>Pilih</option>
                        <!-- Mengambil senarai sekolah dari fail fungsi.php -->
                        <?= $list=senarai_sekolah(); ?>

                    </select>

                    <input type='submit' value='Daftar'>

</form>
<?php include ('footer.php'); ?>