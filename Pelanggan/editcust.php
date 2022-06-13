<?php 
include('db.php');
include('auth.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        input{
            width: 40%;
            height: 5%;
            border: 2px;
            border-radius: 05px;
            padding: 8px 15px 8px 15px;
            box-shadow: 1px 1px 2px 1px;
        }
    </style>
    <title>Kemaskini Profil</title>
</head>

<body style="background-color: #ffff9f;">
     <!-- profil -->
<section class="content">
<div class="wrapper">
    <h1 style="text-align: center; color: #3c40c6; margin-top: 80px; font-size: 50px; ">KEMASKINI PROFIL</h1>
    <div style='text-align: center;'>

    <?php 
    $nama_pengguna = $_SESSION["nama_pengguna"];
    $records = mysqli_query($con,"select * from daftar_pelanggan where nama_pengguna = '$nama_pengguna'"); // fetch data from database
while($row = mysqli_fetch_array($records)){
?>
    <form action="editcust.php" method="post" name="edit" enctype="multipart/form-data" >
Nama Penuh: &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="text" name="new_nama_penuh" value="<?php echo $row['nama_penuh']; ?>" /><br><br>
Alamat Emel:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="email" name="new_alamat_emel" value="<?php echo $row['alamat_emel']; ?>" /><br><br>
Nombor Telefon: <input type="number" name="new_nombor_telefon"  value="<?php echo $row['nombor_telefon']; ?>" /><br><br>
Nama Pengguna:&nbsp; <input type="text" name="new_nama_pengguna" value="<?php echo $row['nama_pengguna']; ?>"  /><br><br>
<input type="hidden" name="idPelanggan" value="<?php echo $row[0]; ?>"  /><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="update" value="KEMASKINI"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="cancel" value="BATAL"> 
    </form>
 <?php } ?>   
    </div>
</section>

</body>
</html>

<?php 


if(isset($_POST['cancel']))
{
    echo '<script>window.location.href= "profil.php";</script>';
} 
    if(isset($_POST['update']))
    {
        $idPelanggan = $_POST['idPelanggan'];

        $query = " SELECT * FROM daftar_pelanggan WHERE idPelanggan = '$idPelanggan' ";

         $query_run = mysqli_query($con, $query);
    }

    if(isset($_POST['new_nama_penuh']))
    {
        $new_nama_penuh = $_POST['new_nama_penuh'];
        $new_alamat_emel = $_POST['new_alamat_emel'];
        $new_nombor_telefon = $_POST['new_nombor_telefon'];
        $new_nama_pengguna = $_POST['new_nama_pengguna'];
        $idPelanggan = $_POST['idPelanggan'];

        $query = "UPDATE daftar_pelanggan SET nama_penuh='$new_nama_penuh', alamat_emel='$new_alamat_emel', nombor_telefon='$new_nombor_telefon', nama_pengguna='$new_nama_pengguna'
                    WHERE idPelanggan = '$idPelanggan'";

        $query_run = mysqli_query($con, $query);
    
         if($query_run)
         {
             echo '<script type="text/javascript"> alert(" Maklumat berjaya Dikemaskini") </script>';
             echo '<script>window.location.href= "profil.php";</script>';
         }
         else {
            echo '<script type="text/javascript"> alert(" Maklumat tidak berjaya Dikemaskini") </script>';
            echo '<script>window.location.href= "profil.php";</script>';
         }
    }
?>