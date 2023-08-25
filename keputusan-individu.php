<?php 
# memulakan fungsi session
session_start();

# Memanggil fail header, guard-hakim, connection dan fungsi
include('header.php');
include('guard-hakim.php');
include('connection.php');
include ('fungsi.php');
?>
 <div class="w3-arial w3-sand">

<h3>Keputusan Individu</h3>

<!-- Memanggil fail butang-saiz -->
<?php include('butang-saiz.php'); ?> 

<button onclick =
"window.print ()">
Print this page </button>

<!-- Header jadual keputusan -->
<table width='100%' border='1' id='saiz'> 
    <caption><?= $k=semak(); ?></caption>
    <tr> 
        <td> KEDUDUKAN </td>
        <td> NAMA </td> 
        <td> NO KP </td> 
        <td> Sekolah </td> 
        <td> NAMA HAKIM PENILAI </td> 
        <td> MATA </td> 
    </tr> 

<?php 
# arahan query untuk mencari senarai nama peserta 
$arahan_papar="SELECT* FROM peserta
LEFT JOIN sekolah
ON peserta.kod_sekolah = sekolah.kod_sekolah
LEFT JOIN hakim
ON peserta.nokp_hakim = hakim.nokp_hakim
order by peserta.mata DESC
"; 

# laksanakan arahan mencari data peserta 
$laksana = mysqli_query($condb,$arahan_papar); 
$bil=0;
# Mengambil data yang ditemui 
    while($m=mysqli_fetch_array($laksana)) 
    { 
        # memaparkan senarai nama dalam jadual 
        echo"<tr> 
        <td>".++$bil."</td>
        <td>".$m['nama_peserta']."</td> 
        <td>".$m['nokp_peserta']."</td> 
        <td>".$m['nama_sekolah']."</td>
        <td>".$m['nama_hakim']."</td>
        <td>".$m['mata']."</td>
        </tr>"; 
    }

?> 
</table>
<?php include ('footer.php'); ?>