<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetWorld Centre - LogMasuk</title>
    <link rel="stylesheet" href="css/logadmin.css">
</head>
<body>
    <!-- header-->
    <section class="header">
        <div class="container">
            <div class="logo">
                <img src="images/logo.jpg" alt="PetWorld Logo" class="img-responsive">
            </div>
            <div class="pet">
            Sistem Pentadbir
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

      <!-- navbar-->
      <section class="nav">
        <div class="container">
            <div class="navigation text-right">
                <ul>
                    <li>
                        <a href="daftaradmin.php">Pendaftaran</a>
                    </li>
                    <li>
                        <a href="logadmin.php">Log Masuk</a>
                    </li>
                </ul>
            </div>
        </div>

         <!-- log masuk -->
         <section class="log">
         <?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['nama_pengguna'])){
        // removes backslashes
	$nama_pengguna = stripslashes($_REQUEST['nama_pengguna']);
        //escapes special characters in a string
	$nama_pengguna = mysqli_real_escape_string($con,$nama_pengguna);
	$kata_laluan = stripslashes($_REQUEST['kata_laluan']);
	$kata_laluan = mysqli_real_escape_string($con,$kata_laluan);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `daftar_pentadbir` WHERE nama_pengguna='$nama_pengguna'
and kata_laluan='".md5($kata_laluan)."'";
	$result = mysqli_query($con,$query) or die(mysqli_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['nama_pengguna'] = $nama_pengguna;
            
	    header("Location: profiladmin.php");
         }else{
	echo "<div class='form'>
<h3>Nama Pengguna/Kata Laluan Tidak Tepat.</h3>
<br/>Klik di sini untuk <a href='logadmin.php'>Log Masuk</a></div>";
	}
    }else{
?>
<h2>LOG MASUK (PENTADBIR)</h2>
<div class="form">
<form action="" method="post" name="login">
<input type="text" name="nama_pengguna" placeholder="Nama Pengguna" required />
<input type="password" name="kata_laluan" placeholder="Kata Laluan" required />
<input name="submit" type="submit" value="Log Masuk" />

</form>
<br><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Belum Mendaftar? <a href='daftaradmin.php'>Daftar Di Sini</a></p>
</div>
<?php } ?>
        </section>

        <!-- footer -->
    <Section class="footer">
        <div class="container">
            <p class="footertxt">Hak Cipta Terpelihara. Direka oleh <a href="#">Amelia Zakaria</a>.</p>
        </div>
    </Section>
</body>
</html>