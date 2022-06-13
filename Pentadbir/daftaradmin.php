<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetWorld Centre - Daftar</title>
    <link rel="stylesheet" href="css/daftaradmin.css">
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
    </section>

        <!-- register -->
        <section class="reg">
        <?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['nama_penuh'])){
        // removes backslashes
	$nama_penuh = stripslashes($_REQUEST['nama_penuh']);
	$nama_penuh = mysqli_real_escape_string($con,$nama_penuh); 
	$alamat_emel = stripslashes($_REQUEST['alamat_emel']);
	$alamat_emel = mysqli_real_escape_string($con,$alamat_emel);
    $nombor_telefon = stripslashes($_REQUEST['nombor_telefon']);
	$nombor_telefon = mysqli_real_escape_string($con,$nombor_telefon);
    $nama_pengguna = stripslashes($_REQUEST['nama_pengguna']);
	$nama_pengguna = mysqli_real_escape_string($con,$nama_pengguna);
	$kata_laluan = stripslashes($_REQUEST['kata_laluan']);
	$kata_laluan = mysqli_real_escape_string($con,$kata_laluan);
        $query = "INSERT into `daftar_pentadbir` (nama_penuh, alamat_emel, nombor_telefon, nama_pengguna, kata_laluan)
VALUES ('$nama_penuh', '$alamat_emel', '$nombor_telefon', '$nama_pengguna', '".md5($kata_laluan)."' )";
        $result = mysqli_query($con,$query);
        if($result){
            echo '<script>alert("PENDAFTARAN BERJAYA! ANDA DIBENARKAN UNTUK LOG MASUK. ")</script>';
            echo '<script>window.location.href= "logadmin.php";</script>';
        }
    }else{
?>

<h2>PENDAFTARAN PENTADBIR</h2>
    <div class="form">
<form name="registration" action="" method="post">
<input type="text" name="nama_penuh" placeholder="Nama Penuh" required />
<input type="email" name="alamat_emel" placeholder="Alamat Emel" required />
<input type="number" name="nombor_telefon" placeholder="Nombor Telefon" required />
<input type="text" name="nama_pengguna" placeholder="Nama Pengguna" required />
<input type="password" name="kata_laluan" placeholder="Kata Laluan" required />
<input type="submit" name="submit" value="Daftar" />
</form>
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