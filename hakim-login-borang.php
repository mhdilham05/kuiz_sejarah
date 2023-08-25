<?php
# Memulakan fungsi session
session_start();

# memanggil fail header.php
include('header.php');
?>

<!-- Tajuk antaramuka log masuk hakim -->
<div class="w3-arial w3-sand">

<h3>Login Hakim</h3>

<!-- borang daftar masuk (log in/sign in) hakim-->
<form action='hakim-login-proses.php' method='POST'>

No KP Hakim      <input   type='text'       name='nokp'        ><br>
Katalaluan      <input   type='password'   name='katalaluan'  ><br>
<input   type='submit'     value='Login' >

</form>

<?php include ('footer.php'); ?>