<?php
    include "db.php";
    include "main.php";
  
if(isset($_GET['delete_id']))
{
$IdPerkhidmatan=$_REQUEST['IdPerkhidmatan'];
$query = "DELETE FROM urusperkhidmatan WHERE IdPerkhidmatan=".$_GET['delete_id'];
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: -service.php");
}

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

<script type="text/javascript">
function delete_id(IdPerkhidmatan)
{
     if(confirm('Anda pasti untuk memadam maklumat ini ?'))
     {
        window.location.href='-service.php?delete_id='+IdPerkhidmatan;
     }
}
</script>

</head>

<body style="background-color: #ffff9f;">

    <div class="wrapper">
    <h2 style="text-align: center; color: #3c40c6; margin-top: 80px; ">Kemaskini Perkhidmatan</h2>
    <br><br>
    <table  width="140%" border="2" style="border-collapse:collapse; text-align: center;">
        <thead>
        <tr>
        <th><strong>Bil</strong></th>
        <th><strong>Jenis Perkhidmatan</strong></th>
        <th><strong>Kemaskini</strong></th>
        <th><strong>Padam</strong></th>
        </tr>
        </thead>
        <tbody>
        <?php
            $query = "SELECT * FROM urusperkhidmatan ORDER BY IdPerkhidmatan ";
            $result = mysqli_query($con, $query);
            $i=1;
            while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['Jenis_perkhidmatan'];?></td>
                <td><a href="editservice.php?IdPerkhidmatan=<?php echo $row["IdPerkhidmatan"]; ?>" class="edit" data-toggle="modal">
                <i class="material-icons update" data-toggle="tooltip" 
							data-id="<?php echo $row["IdPerkhidmatan"]; ?>"
							data-jenis="<?php echo $row["Jenis_perkhidmatan"]; ?>"
							data-info="<?php echo $row["Penerangan_perkhidmatan"]; ?>"
							data-harga="<?php echo $row["Harga"]; ?>"
							data-foto="<?php echo $row["foto"]; ?>" > 
	                        <img title="Kemasini" src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/36/000000/external-edit-delivery-kiranshastry-lineal-color-kiranshastry.png"/></i>
                            </a></td>
                <td><a  href="javascript:delete_id(<?php echo $row['IdPerkhidmatan']; ?>)"><img title="Padam" src="https://img.icons8.com/stickers/36/000000/filled-trash.png" /></a></td>
                
            </tr>
            <?php 
        $i++; }?>
        </tbody>
        </table>  <br> 
        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br><br>
</div>


 <!-- footer -->
 <Section class="footer">
        <div class="container">
            <p class="footertxt">Hak Cipta Terpelihara. Direka oleh <a href="#">Amelia Zakaria</a>.</p>
        </div>
    </Section>

</body>
</html>