<?php
# Memulakan fungsi session
session_start();

# Memanggil fail header, guard-hakim dan fungsi
include('header.php');
include('guard-hakim.php');
include('fungsi.php');

# Menyemak kewujudan data GET. Jika data GET empty, buka fail senarai-peserta
if(empty($_GET))
{
die("<script>window.location.href='senarai-peserta.php';</script>");
}

?>
<div class="w3-border w3-georgia w3-sand">
<h3>Kemaskini Peserta Baru</h3>

<form action='peserta-kemaskini-proses.php?nokp_lama=<?= $_GET['nokp'] ?>'
method='POST'>

Nama
<input  type='text' name='nama' value='<?= $_GET['nama'] ?>' required><br>

No KP
<input  type='text' name='nokp' value='<?= $_GET['nokp'] ?>' required><br>

Katalaluan
<input  type='password' name='katalaluan' value='<?= $_GET['katalaluan'] ?>'  required><br>

Sekolah
<select name='kod_sekolah' required>
<option value='<?= $_GET['kod_sekolah'] ?>'>
<?= $_GET['nama_sekolah'] ?>
</option>
<?= $list=senarai_sekolah(); ?>
</select> <br>

<input type='submit' value='Kemaskini'>
</form>
<?php include ('footer.php'); ?>