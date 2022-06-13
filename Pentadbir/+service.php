<?php
    include "db.php";
    include "main.php";

    // upload

    if (isset($_POST['upload'])){

        $target = "images/".basename($_FILES['foto']['name']);

        $Jenis_perkhidmatan = mysqli_real_escape_string($con, $_POST['Jenis_perkhidmatan']);
        $Penerangan_perkhidmatan = mysqli_real_escape_string($con, $_POST['Penerangan_perkhidmatan']);
        $Harga = mysqli_real_escape_string($con, $_POST['Harga']);
        $foto = $_FILES['foto']['name'];
        
        $query = "INSERT INTO urusperkhidmatan (Jenis_perkhidmatan, Penerangan_perkhidmatan, Harga, foto)
        VALUES('$Jenis_perkhidmatan','$Penerangan_perkhidmatan', '$Harga', '$foto')" ;

        mysqli_query($con, $query);

        if(move_uploaded_file($_FILES['foto']['tmp_name'], $target)){
            echo '<script>alert("PENAMBAHAN PERKHIDMATAN BERJAYA!  ")</script>';
        echo '<script>window.location.href= "+service.php";</script>';
        
        } else{
           
        }
    }
    $result = mysqli_query($con, "SELECT * FROM urusperkhidmatan");
    
        
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkhidmatan</title>
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
    <h2 style="text-align: center; color: #3c40c6; margin-top: 80px; ">Tambah Perkhidmatan</h2>
    <form name="+service" action="" method="post" enctype='multipart/form-data' style=" font-size: large;"> <br><br>
Jenis Perkhidmatan :  <input type="text" name="Jenis_perkhidmatan" placeholder="Jenis Perkhidmatan" required /> <br> <br>
Penerangan : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<textarea name="Penerangan_perkhidmatan" id="detail" cols="35" rows="5" placeholder=" Maklumat Lanjut"></textarea><br><br>
Harga :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="Harga" placeholder="Harga" required /><br><br>
Foto :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input type="file" name="foto" placeholder="Foto Haiwan" required /><br><br>
<input type="submit" name="upload" value="Tambah" />
</form>
<br><br><br><br>
</div>


 <!-- footer -->
 <Section class="footer">
        <div class="container">
            <p class="footertxt">Hak Cipta Terpelihara. Direka oleh <a href="#">Amelia Zakaria</a>.</p>
        </div>
    </Section>


</body>
</html>

