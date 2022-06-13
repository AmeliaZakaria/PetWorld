<?php 
include('db.php');
$idSyarikat = $_REQUEST['idSyarikat'];
$records = mysqli_query($con,"SELECT * from urussyarikat WHERE idSyarikat = $idSyarikat ");
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
    <title>Kemaskini Maklumat Syarikat</title>
</head>

<body style="background-color: #ffff9f;">
     <!-- profil -->
<section class="content">
<div class="wrapper">
    <h1 style="text-align: center; color: #3c40c6; margin-top: 80px; font-size: 50px; ">KEMASKINI MAKLUMAT SYARIKAT</h1><br><br>
    <div style='text-align: center;'>

<?php 

if(isset($_POST['cancel']))
{
    echo '<script>window.location.href= "-contact.php";</script>';
}
   if(isset($_POST['new']) && $_POST['new']==1)  //update
   {
   $idSyarikat=$_REQUEST['idSyarikat']; 
   $Jenis_maklumat=$_REQUEST['Jenis_maklumat']; 
   $Butiran1=$_REQUEST['Butiran1']; 
   $Butiran2=$_REQUEST['Butiran2']; 
   $Butiran3=$_REQUEST['Butiran3'];

   $sql = "UPDATE `urussyarikat` SET `Jenis_maklumat`='$Jenis_maklumat',`Butiran1`='$Butiran1',
        `Butiran2`='$Butiran2', `Butiran3`='$Butiran3' WHERE idSyarikat=$idSyarikat";

    if (mysqli_query($con, $sql)) {
    echo '<script type="text/javascript"> alert(" Maklumat berjaya Dikemaskini") </script>';
     echo '<script>window.location.href= "-contact.php";</script>';
    } }
    else {
    ?>

<form action="editcontact.php" method="post" name="edit" enctype="multipart/form-data" >
<input type="hidden" name="new" value="1" />
<input name="idSyarikat" type="hidden" value="<?php echo $row['idSyarikat'];?>" />
<?php } ?>
Jenis Maklumat Syarikat :  <input type="text" name="Jenis_maklumat" value="<?php echo $row['Jenis_maklumat']; ?>" /> <br> <br> <br>
Butiran 1 : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; 
<input height="500px" type="text" name="Butiran1"  value="<?php echo $row['Butiran1']; ?>"  /><br><br><br>
Butiran 2 :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="Butiran2"  value="<?php echo $row['Butiran2']; ?>"  /><br><br><br>
Butiran 3 :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="Butiran3"  value="<?php echo $row['Butiran3']; ?>"  /><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="updatecontact" value="KEMASKINI MAKLUMAT SYARIKAT"><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="cancel" value="BATAL"> 
    </form>  
    </div>
</section>
</body>
</html>