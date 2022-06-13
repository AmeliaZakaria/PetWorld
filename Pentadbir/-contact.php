<?php
    include "db.php";
    include "main.php";

    if(isset($_GET['delete_id'])) //delete
{
$idSyarikat=$_REQUEST['idSyarikat'];
$query = "DELETE FROM urussyarikat WHERE idSyarikat=".$_GET['delete_id'];
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: -contact.php");
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

<script type="text/javascript">
function delete_id(idSyarikat)
{
     if(confirm('Anda pasti untuk memadam maklumat ini ?'))
     {
        window.location.href='-contact.php?delete_id='+idSyarikat;
     }
}
</script>

</head>

<body style="background-color: #ffff9f;">

    <div class="wrapper">
    <h2 style="text-align: center; color: #3c40c6; margin-top: 80px; ">Kemaskini Maklumat Syarikat</h2>
    <br><br>
    <table  width="140%" border="2" style="border-collapse:collapse; text-align: center;">
        <thead>
        <tr>
        <th><strong>Bil</strong></th>
        <th><strong>Jenis Maklumat Syarikat</strong></th>
        <th><strong>Kemaskini</strong></th>
        <th><strong>Padam</strong></th>
        </tr>
        </thead>
        <tbody>
        <?php
            $query = "SELECT * FROM urussyarikat ORDER BY idSyarikat ";
            $result = mysqli_query($con, $query);
            $i=1;
            while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['Jenis_maklumat'];?></td>
                <td><a href="editcontact.php?idSyarikat=<?php echo $row["idSyarikat"]; ?>" class="edit" data-toggle="modal">
                <i class="material-icons update" data-toggle="tooltip" 
							data-id="<?php echo $row["idSyarikat"]; ?>"
							data-jenis="<?php echo $row["Jenis_maklumat"]; ?>"
							data-butiran1="<?php echo $row["Butiran1"]; ?>"
							data-butiran2="<?php echo $row["Butiran2"]; ?>"
							data-butiran3="<?php echo $row["Butiran3"]; ?>" > 
	                        <img title="Kemasini" src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/36/000000/external-edit-delivery-kiranshastry-lineal-color-kiranshastry.png"/></i>
                            </a></td>
                <td><a  href="javascript:delete_id(<?php echo $row['idSyarikat']; ?>)"><img title="Padam" src="https://img.icons8.com/stickers/36/000000/filled-trash.png" /></a></td>
                
            </tr>
            <?php 
        $i++; }?>
        </tbody>
        </table> 
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <!-- footer -->
 <Section class="footer">
        <div class="container">
            <p class="footertxt">Hak Cipta Terpelihara. Direka oleh <a href="#">Amelia Zakaria</a>.</p>
        </div>
    </Section>
</body>
</html>