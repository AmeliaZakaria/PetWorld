<?php
    include "db.php";
    include "main.php";
    include "auth.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempahan</title>

    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <script>
        $(function () {

            $("#tarikh_tempahan").datepicker({
                dateFormat : "yy-mm-dd",
                minDate : '+1d',
                maxDate : '+2w'

            })
            
        });
    </script>
</head>

<body>
    <!-- Membuat Tempahan -->
<section class="content">

<?php require('db.php');
if (isset($_REQUEST['nama_haiwan'])){

	$nama_haiwan = stripslashes($_REQUEST['nama_haiwan']);
	$nama_haiwan = mysqli_real_escape_string($con,$nama_haiwan); 
    $Jenis_perkhidmatan = stripslashes($_REQUEST['Jenis_perkhidmatan']);
	$Jenis_perkhidmatan = mysqli_real_escape_string($con,$Jenis_perkhidmatan);
    $masa_tempahan = stripslashes($_REQUEST['masa_tempahan']);
	$masa_tempahan = mysqli_real_escape_string($con,$masa_tempahan);
    $tarikh_tempahan = stripslashes($_REQUEST['tarikh_tempahan']);
	$tarikh_tempahan = mysqli_real_escape_string($con,$tarikh_tempahan);
    $idPelanggan = stripslashes($_REQUEST['idPelanggan']);
	$idPelanggan = mysqli_real_escape_string($con,$idPelanggan);
    $nama_penuh = stripslashes($_REQUEST['nama_penuh']);
	$nama_penuh = mysqli_real_escape_string($con,$nama_penuh);
    $alamat_emel = stripslashes($_REQUEST['alamat_emel']);
	$alamat_emel = mysqli_real_escape_string($con,$alamat_emel);
        $query = "INSERT into `tempahan` ( nama_haiwan, Jenis_perkhidmatan, masa_tempahan, tarikh_tempahan, idPelanggan, nama_penuh, alamat_emel)
VALUES ('$nama_haiwan', '$Jenis_perkhidmatan', '$masa_tempahan', '$tarikh_tempahan', '$idPelanggan', '$nama_penuh', '$alamat_emel')";
        $result = mysqli_query($con,$query);
        if($result){
            echo '<script>alert("PENEMPAHAN BERJAYA! TEKAN OK UNTUK MELIHAT PENGESAHAN TEMPAHAN. ")</script>';
            echo '<script>window.location.href= "sejarah.php";</script>';
        }
    }else{
?>
<div class="wrapper">
    <h2 style="text-align: center; color: #3c40c6; margin-top: 80px; ">Membuat Tempahan Baharu</h2>
    <form name="tempah" action="" method="post"><br>

    <?php
    $nama_pengguna = $_SESSION["nama_pengguna"];
    $records = mysqli_query($con,"select * from daftar_pelanggan where nama_pengguna = '$nama_pengguna'"); // fetch data from database
while($row = mysqli_fetch_array($records)){
?>
            <input name="idPelanggan" type="hidden" value="<?php echo $row['idPelanggan'];?>" />
            <input name="nama_penuh" type="hidden" value="<?php echo $row['nama_penuh'];?>" />
            <input name="alamat_emel" type="hidden" value="<?php echo $row['alamat_emel'];?>" />
<?php } ?>
Nama Haiwan : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nama_haiwan" placeholder="Nama Haiwan" required /> <br><br>
Jenis Perkhidmatan: <select name="Jenis_perkhidmatan" style=" width:200pt; height:28pt;" >
<?php
    
            $query = "SELECT * FROM urusperkhidmatan";
            $result = mysqli_query($con, $query);
            while ($row = mysqli_fetch_array($result)) {
            ?>    
<option value="<?php echo  $row['Jenis_perkhidmatan'] ;?>" ><?php echo  $row['Jenis_perkhidmatan'] ;?></option>
    required 
    <?php } ?>
  </select><br><br>
Masa Tempahan :&nbsp;&nbsp;&nbsp;&nbsp;
<select name="masa_tempahan" style=" width:200pt; height:28pt;">
                <option value="10.30 am">10.30 am</option>
                <option value="11.30 am">11.30 am</option>
                <option value="12.30 pm">12.30 pm</option>
                <option value="2.30 pm"> 2.30 pm</option>
                <option value="3.30 pm"> 3.30 pm</option>
                <option value="4.30 pm"> 4.30 pm</option>
                <option value="5.30 pm"> 5.30 pm</option>
                required
</select> <Br>
Tarikh Tempahan : &nbsp; <input type="text" name="tarikh_tempahan" id="tarikh_tempahan" placeholder="yyyy-mm-dd" autocomplete="off" required>
<p style="color:blue">**Tempahan hanya boleh dilakukan untuk keesokan hari sehingga 2 minggu dari Tarikh Semasa. Terima kasih.</p>
<input type="submit" name="submit" value="Tempah" />
</form>
    <div style="text-align: center; font-size: x-large;">
<br>
</div>
</div>
<?php } ?>
</section>

<section class="pet1" style=" float: right; margin-top: -33%; width: 22%; display: static;">
<img  src="images/pet2.jpg" alt="">
</section>

<section class="pet2" style=" float: left; margin-top: -33%; width: 22%; display: static;">
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