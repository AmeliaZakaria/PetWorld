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
    <title>Profil</title>
</head>

<body>
    <!-- profil -->
<section class="content">
<div class="wrapper">
    <h2 style="text-align: center; color: #3c40c6; margin-top: 80px; ">Profil Saya</h2>
    <div style='text-align: center;' >
    <img src="https://img.icons8.com/office/100/000000/test-account.png"/>
    </div>

    <?php 
    $nama_pengguna = $_SESSION["nama_pengguna"];
    $records = mysqli_query($con,"select * from daftar_pelanggan where nama_pengguna = '$nama_pengguna'"); // fetch data from database
while($row = mysqli_fetch_array($records)){
?>
    <div style="text-align: center; font-size: x-large;"> <b>Selamat Datang !</b> <br><br>
        
    </div>

        <div style="text-align: justify; font-size: large; margin-left: 20%;">
        <table style=" border: solid navy; padding:10pt; border-radius:8pt;">
        <tr>
                <td > <br><b> ID Pelanggan: </b> </td> 
                <td > <br><?php  echo $row['idPelanggan'];?> </td>
            </tr>
        <tr>
                <td > <br><b> Nama Penuh: </b> </td> 
                <td > <br><?php  echo $row['nama_penuh'];?> </td>
            </tr>

            <tr>
                <td > <br><b> Alamat Emel: </b> </td> 
                <td > <br><?php  echo $row['alamat_emel'];?> </td>
            </tr>
        
            <tr>
                <td > <br><b> Nombor Telefon: </b> </td> 
                <td > <br><?php  echo $row['nombor_telefon'];?> </td>
            </tr>

            <tr>
                <td > <br><b> Nama Pengguna: </b></td> 
                <td > <br><?php  echo $row['nama_pengguna'];?></td>
            </tr> 
        </table>
        <?php }?>

        <!--EDIT PROFIL -->
        <a href="editcust.php"><input name="edit" type="submit" value="Kemaskini" style="margin-left: 28%; padding:5pt;"/></a>

</div>
</div>
<section style=" float: right; margin-right:100px; margin-top: -100px; display: responsive;">
<img src="https://img.icons8.com/external-linector-lineal-color-linector/100/000000/external-play-with-pet-stay-home-activities-linector-lineal-color-linector-1.png"/>
<img src="https://img.icons8.com/external-linector-lineal-color-linector/100/000000/external-play-with-pet-stay-home-activities-linector-lineal-color-linector.png"/>
</section>

<section style=" float: left; margin-left:80px; margin-top: -100px; display: responsive;">
<img src="https://img.icons8.com/external-linector-lineal-color-linector/100/000000/external-play-with-pet-stay-home-activities-linector-lineal-color-linector-1.png"/>
<img src="https://img.icons8.com/external-linector-lineal-color-linector/100/000000/external-play-with-pet-stay-home-activities-linector-lineal-color-linector.png"/>
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