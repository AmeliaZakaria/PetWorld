<?php
    include "main.php";
    include "auth.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haiwan Peliharaan</title>
</head>

<body>

<style>
    input{
        margin-left: 20%;
    }
</style>
 <!-- haiwannnnn -->
 <section class="content">
 <?php require('db.php');
if (isset($_REQUEST['jenis_haiwan'])){

    $jenis_haiwan = stripslashes($_REQUEST['jenis_haiwan']);
	$jenis_haiwan = mysqli_real_escape_string($con,$jenis_haiwan);
	$nama_haiwan = stripslashes($_REQUEST['nama_haiwan']);
	$nama_haiwan = mysqli_real_escape_string($con,$nama_haiwan); 
    $jantina_haiwan = stripslashes($_REQUEST['jantina_haiwan']);
	$jantina_haiwan = mysqli_real_escape_string($con,$jantina_haiwan);
    $baka_haiwan = stripslashes($_REQUEST['baka_haiwan']);
	$baka_haiwan = mysqli_real_escape_string($con,$baka_haiwan);
        $query = "INSERT into `haiwan` (jenis_haiwan, nama_haiwan, jantina_haiwan, baka_haiwan)
VALUES ('$jenis_haiwan', '$nama_haiwan', '$jantina_haiwan', '$baka_haiwan' )";
        $result = mysqli_query($con,$query);
        if($result){
            echo '<script>alert("PENAMBAHAN BERJAYA! KLIK OK UNTUK MEMBUAT TEMPAHAN. ")</script>';
            echo '<script>window.location.href= "tempah.php";</script>';

        }
    }else{
?>
 <div class="wrapper">
<h2 style="text-align: center; color: #3c40c6; margin-top: 80px; ">Haiwan Peliharaan Saya</h2>
<form name="mypet" action="" method="post">
Jenis Haiwan :  <input type="text" name="jenis_haiwan" placeholder="Jenis Haiwan" required /> <br> 
Nama Haiwan :<input type="text" name="nama_haiwan" placeholder="Nama Haiwan" required /> <br>
Jantina Haiwan:<input type="text" name="jantina_haiwan" placeholder="Jantina Haiwan" required /><br>
&nbsp;Baka Haiwan :   <input type="text" name="baka_haiwan" placeholder="Baka Haiwan" required /><br>
<input type="submit" name="submit" value="Tambah" />
</form>
</div>
<?php } ?>

<section class="pet1" style=" float: right; margin-top: -28%; width: 22%; display: static;">
<img  src="images/pet2.jpg" alt="">
</section>

<section class="pet2" style=" float: left; margin-top: -28%; width: 22%; display: static;">
<img  src="images/pet2.jpg" alt="">
</section>

</section> 


<!-- footer -->
<Section class="footer">
        <div class="container">
            <p class="footertxt">Hak Cipta Terpelihara. Direka oleh <a href="#">Amelia Zakaria</a>.</p>
        </div>
    </Section>

</body>
</html>