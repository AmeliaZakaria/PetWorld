<?php 
include('db.php');
$IdPerkhidmatan = $_REQUEST['IdPerkhidmatan'];
$records = mysqli_query($con,"SELECT * from urusperkhidmatan WHERE IdPerkhidmatan = $IdPerkhidmatan ");
$row = mysqli_fetch_assoc($records);
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
            height: 15%;
            border: 2px;
            border-radius: 05px;
            padding: 8px 15px 20px 15px;
            box-shadow: 1px 1px 2px 1px;
        }
    </style>
    <title>Kemaskini Perkhidmatan</title>
</head>

<body style="background-color: #ffff9f;">
     <!-- profil -->
<section class="content">
<div class="wrapper">
    <h1 style="text-align: center; color: #3c40c6; margin-top: 80px; font-size: 50px; ">KEMASKINI PERKHIDMATAN</h1><br><br>
    <div style='text-align: center;'>

<?php 

if(isset($_POST['cancel']))
{
    echo '<script>window.location.href= "-service.php";</script>';
}
   if(isset($_POST['new']) && $_POST['new']==1)
   {
   $IdPerkhidmatan=$_REQUEST['IdPerkhidmatan']; 
   $Jenis_perkhidmatan=$_REQUEST['Jenis_perkhidmatan']; 
   $Penerangan_perkhidmatan=$_REQUEST['Penerangan_perkhidmatan']; 
   $Harga=$_REQUEST['Harga']; 
   //$foto=$_REQUEST['foto']; 

   $sql = "UPDATE `urusperkhidmatan` SET `Jenis_perkhidmatan`='$Jenis_perkhidmatan',`Penerangan_perkhidmatan`='$Penerangan_perkhidmatan',
        `Harga`='$Harga' WHERE IdPerkhidmatan=$IdPerkhidmatan";

    if (mysqli_query($con, $sql)) {
    echo '<script type="text/javascript"> alert(" Maklumat berjaya Dikemaskini") </script>';
     echo '<script>window.location.href= "-service.php";</script>';
    } }
    else {
    ?>

<form action="editservice.php" method="post" name="edit" enctype="multipart/form-data" >
<input type="hidden" name="new" value="1" />
<input name="IdPerkhidmatan" type="hidden" value="<?php echo $row['IdPerkhidmatan'];?>" />
Jenis Perkhidmatan :  <input type="text" name="Jenis_perkhidmatan" value="<?php echo $row['Jenis_perkhidmatan']; ?>" /> <br> <br> <br>
Penerangan : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input height="500px" type="text" name="Penerangan_perkhidmatan"  value="<?php echo $row['Penerangan_perkhidmatan']; ?>"  /><br><br><br>
Harga :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="Harga"  value="<?php echo $row['Harga']; ?>"  /><br><br><br>
<!--Foto :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input type="file" name="foto" value="<?php echo $row['foto']; ?>" /><br><br> -->
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="updateservice" value="KEMASKINI PERKHIDMATAN"><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="cancel" value="BATAL"> 
    </form>
 <?php } ?>   
    </div>
</section>
</body>
</html>