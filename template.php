<!DOCTYPE html>
<html>
    <head>
        <title>Kuiz Sejarah</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
        <style>
        .w3-lobster {
        font-family: "Lobster", serif;
        }
        </style>
    </head>
 </body>

<!-- tajuk-->
<div class="w3-container w3-black w3-center">
    <img src='header-img.jpg' class='w3-image'>
</div>



<!-- menu-->
<div class='w3-row w3-margin-top w3-margin-bottom' >

     <!-- container menu-->
    <div class= 'w3-container w3-quarter w3-khaki'>
        <div class=' w3-bar-block'>
           <div class= 'w3-bar-item w3-khaki w3-center'>MENU</div>
        <?PHP
# Menu Hakim
if(!empty($_SESSION['tahap']) and $_SESSION['tahap'] == "hakim")
{
    echo "
     <a class='w3-btn w3-block w3-pale-yellow' href='hakim-menu.php'>Menu Hakim</a>
     <a class='w3-btn w3-block w3-pale-yellow' href='senarai-peserta.php'>Senarai Peserta</a>
     <a class='w3-btn w3-block w3-pale-yellow' href='peserta-upload-borang.php'>Upload Data Peserta Baru</a>
     <a class='w3-btn w3-block w3-pale-yellow' href='senarai-hakim.php'>Senarai Hakim</a>
     <a class='w3-btn w3-block w3-pale-yellow' href='penilaian-peserta.php'>Penilaian Peserta</a>
     <a class='w3-btn w3-block w3-pale-yellow' href='keputusan-individu.php'>Keputusan Individu</a>
     <a class='w3-btn w3-block w3-pale-yellow' href='keputusan-sekolah.php'>Keputusan Sekolah</a>
     <a class='w3-btn w3-block w3-pale-yellow'href='logout.php'>Logout</a>
     ";
}
# Menu Peserta
else if(!empty($_SESSION['tahap']) and $_SESSION['tahap'] == "peserta")
{
   echo "
   <a class='w3-btn w3-block w3-pale-yellow' href='peserta-menu.php'>Menu Peserta</a>
   <a class='a class='w3-btn w3-block w3-pale-yellow' href='logout.php'>Logout</a>
   <hr> ";
} else {

    #menu Laman Utama
    echo "<a class='w3-btn w3-block w3-pale-yellow href='index.php'>Laman Utama</a>";
} 
?>

        </div>
        
    </div>





     <!-- container  isikandungan-->
     <div class='w3-container w3-threequarter '>


          <h1>Isi Kandungan</h1>
          
    </div>

</div>
 
<!-- footer-->
<div class="w3-container w3-khaki">
  <h5>Hakcipta Terpelihara © Mhd Ilham  2022</h5>
  <p>Pihak kami tidak bertanggungjawab diatas segala masalah yang dihadapi oleh pengguna sistem ini</p>
</div>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</Kuiz Sejarah>
</head>
<body>
    
</body>
</html>