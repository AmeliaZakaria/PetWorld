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
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
        h2{
    color: #3c40c6;
    text-align: center;
    background-color: #f1d693;}
    </style>
</head>

<body style="background-color: #ffff9f;">

    <div class="wrapper">
    <h2 style="text-align: center; color: #3c40c6; margin-top: 80px; ">Profil Saya</h2>
    <div style='text-align: center;' >
    <img src="https://img.icons8.com/office/100/000000/test-account.png"/>
    </div>
</div>

<?php 
    $nama_pengguna = $_SESSION["nama_pengguna"];
    $records = mysqli_query($con,"select * from daftar_pentadbir where nama_pengguna = '$nama_pengguna'"); // fetch data from database
while($row = mysqli_fetch_array($records)){
?>
    <div style="text-align: center; font-size: x-large;"><b>Selamat Datang !</b><br><br>
      
    </div>
        <div style="text-align: justify; font-size: large; margin-left: 40%;">
        <table style=" border: solid navy; padding:15pt; border-radius:8pt;">
            <tr>
                <td > <b> Nama Penuh: </b> </td> 
                <td > <?php  echo $row['nama_penuh'];?> </td>
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
                <td > <br><?php  echo $row['nama_pengguna'];?> <br></td>
            </tr> <br>
        </table> 
        <?php }?>
        <!--EDIT PROFIL -->
        <a href="editadmin.php"><input name="edit" type="submit" value="Kemaskini" style="margin-left: 12%; padding:5pt;" /></a>

</div>
</div>
<br>

<section style=" float: right; margin-right:100px; margin-top: -100px; display: responsive;">
<img src="https://img.icons8.com/external-linector-lineal-color-linector/100/000000/external-play-with-pet-stay-home-activities-linector-lineal-color-linector-1.png"/>
<img src="https://img.icons8.com/external-linector-lineal-color-linector/100/000000/external-play-with-pet-stay-home-activities-linector-lineal-color-linector.png"/>
</section>

<section style=" float: left; margin-left:90px; margin-top: -100px; display: responsive;">
<img src="https://img.icons8.com/external-linector-lineal-color-linector/100/000000/external-play-with-pet-stay-home-activities-linector-lineal-color-linector-1.png"/>
<img src="https://img.icons8.com/external-linector-lineal-color-linector/100/000000/external-play-with-pet-stay-home-activities-linector-lineal-color-linector.png"/>
</section> 


 <!-- footer -->
 <br>
 <Section class="footer">
        <div class="container">
            <p class="footertxt">Hak Cipta Terpelihara. Direka oleh <a href="#">Amelia Zakaria</a>.</p>
        </div>
    </Section>

</body>
</html>