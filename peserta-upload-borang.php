<?php
# memulakan fungsi session
session_start();

# memanggil fail header, guard-hakim dan connection
include('header.php');
include('guard-hakim.php');
include('connection.php');
?>

<!-- Tajuk laman -->
<div class="w3-arial w3-sand">
<h3>Muat Naik Data Peserta (*.txt)</h3>

<!-- Borang untuk memuat naik fail -->
<form action='peserta-upload-proses.php' method='POST' enctype='multipart/form-data'>

<h3><b>Sila Pilih Fail txt yang ingin diupload</b></h3>
<input       type='file'     name='data_peserta'>
<button      type='submit'   name='btn-upload'>Muat Naik</button>

</form>

<?php include ('footer.php'); ?>