<?php
    include "db.php";
    include "main.php";

//tambah
    if (isset($_POST['submit'])){

        $Jenis_maklumat = mysqli_real_escape_string($con, $_POST['Jenis_maklumat']);
        $Butiran1 = mysqli_real_escape_string($con, $_POST['Butiran1']);
        $Butiran2 = mysqli_real_escape_string($con, $_POST['Butiran2']);
        $Butiran3 = mysqli_real_escape_string($con, $_POST['Butiran3']);

        $query = "INSERT INTO urussyarikat (Jenis_maklumat, Butiran1, Butiran2, Butiran3)
        VALUES('$Jenis_maklumat','$Butiran1', '$Butiran2', '$Butiran3')" ;

        $result =  mysqli_query($con, $query);

        if($result){
            echo '<script>alert("PENAMBAHAN MAKLUMAT SYARIKAT BERJAYA!  ")</script>';
        echo '<script>window.location.href= "+contact.php";</script>';
        
        } else{
           
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubung</title>
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
    <h2 style="text-align: center; color: #3c40c6; margin-top: 80px; ">Tambah Maklumat Syarikat</h2>
    <form  name="+contact" action="" method="post" style=" font-size: large;"> <br>
Jenis Maklumat :   <br><br>
<input type="radio" id="phone" name="Jenis_maklumat" value="Nombor Telefon">
&nbsp; <label for="phone">Nombor Telefon</label><br>
<input type="radio" id="emel" name="Jenis_maklumat" value="Emel">
&nbsp; <label for="emel">Emel</label><br>
<input type="radio" id="addr" name="Jenis_maklumat" value="Alamat">
&nbsp; <label for="addr">Alamat</label><br><br>
Butiran 1 :     <input type="text" name="Butiran1" placeholder="Penerangan" required /> <br><br>
Butiran 2 :     <input type="text" name="Butiran2" placeholder="Penerangan" /><br><br>
Butiran 3 :     <input type="text" name="Butiran3" placeholder="Penerangan" /><br>
<input type="submit" name="submit" value="Tambah" />
</form></div>
    <br><br><br><br>

 <!-- footer--> 
 <Section class="footer">
        <div class="container">
            <p class="footertxt">Hak Cipta Terpelihara. Direka oleh <a href="#">Amelia Zakaria</a>.</p>
        </div>
    </Section>
</body>
</html>