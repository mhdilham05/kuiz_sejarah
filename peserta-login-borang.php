<?php
# Memulakan fungsi session
session_start();

# memanggil fail header.php
include('header.php');
?>

<!-- Tajuk antaramuka log masuk peserta-->
<div class="w3-arial w3-sand">

<h3>Login Peserta</h3>

<!-- Borang daftar masuk (signup) peserta -->
<form action='peserta-login-proses.php' method='POST'>

No KP Peserta    <input type='text'     name='nokp'       ><br>
Katalaluan      <input type='password' name='katalaluan' ><br>  
<input type='submit'   value='Login'     >

</form>

<?php include ('footer.php'); ?>
