<?php
# memulakan fungsi session
session_start();

# memanggil fail header dan guard-hakim
include('header.php');
include('guard-hakim.php');
?>
<!-- tajuk antaramuka -->
<div class="w3-arial w3-sand">

<h3>Pendaftaran Hakim Baru</h3>

<!-- Borang pendaftaran hakim baru -->
<form action='hakim-daftar-proses.php' method='POST'>
Nama        <input  type='text'     name='nama'><br>
No KP        <input  type='text'     name='nokp'><br>
Katalaluan  <input  type='password' name='katalaluan'><br>
<input  type='submit'   value='Simpan'>
</form>

<?php include ('footer.php'); ?>