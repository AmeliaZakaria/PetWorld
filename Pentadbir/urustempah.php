<?php
    include "db.php";
    include "main.php";
    include "auth.php";

    if(isset($_POST['hantar']))
    {
        $idTempahan = $_POST['idTempahan'];

        $query = " SELECT * FROM tempahan WHERE idTempahan = '$idTempahan' ";

         $query_run = mysqli_query($con, $query);
    }
    if (isset($_POST ['status_tempahan'])){

        $status_tempahan = $_POST['status_tempahan'];
        $maklum_balas = $_POST['maklum_balas'];
        $idTempahan = $_POST['idTempahan'];

        $query = "UPDATE tempahan SET status_tempahan='$status_tempahan', maklum_balas='$maklum_balas'
          WHERE idTempahan = '$idTempahan'" ;

        $result =  mysqli_query($con, $query);

        if($result){
            echo '<script>alert("PENGESAHAN TEMPAHAN TELAH DILAKUKAN.  ")</script>';
        echo '<script>window.location.href= "urustempah.php";</script>';
    
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
    <title>Urus Tempahan</title>
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
    <h2 style="text-align: center; color: #3c40c6; margin-top: 80px; ">Urus Tempahan Perkhidmatan</h2>
    <br><br>
     <table  width="220%" border="2" style="border-collapse:collapse; text-align: center; margin-left: -100pt;">
        <thead>
        <tr>
        <th><strong>Nama Penuh</strong></th>
        <th><strong>Alamat Emel</strong></th>
        <th><strong>Nama Haiwan</strong></th>
        <th><strong>Jenis Perkhidmatan</strong></th>
        <th><strong>Tarikh</strong></th>
        <th><strong>Masa</strong></th>
        <th><strong>Status</strong></th>
        <th><strong>Tindakan</strong></th>
        </tr>
        </thead>
        <tbody>
        <?php
           $query = "SELECT * FROM tempahan order by tarikh_tempahan desc";
           $result = mysqli_query($con, $query);
           $i=1;
           while ($row = mysqli_fetch_array($result)) {
            ?>
        <tr>
        <td ><?php echo $row['nama_penuh'];?></td>
        <td ><?php echo $row['alamat_emel'];?></td>
        <td ><?php echo $row['nama_haiwan'];?></td>
        <td ><?php echo $row['Jenis_perkhidmatan'];?></td>
        <td ><?php echo $row['tarikh_tempahan'];?></td>
        <td ><?php echo $row['masa_tempahan'];?></td>
        <td>
        <form name="status" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <select name="status_tempahan" style=" width:100pt; height:28pt;">
        <option style="text-align: center;" disabled <?php  echo "selected='selected'";?>>--Status--</option>
        <option  <?php if (isset($status_tempahan) && $status_tempahan=="Tempahan Berjaya") echo "selected='selected'";?>>Tempahan Berjaya</option>
        <option  <?php if (isset($status_tempahan) && $status_tempahan=="Tempahan Gagal") echo "selected='selected'";?>>Tempahan Gagal</option>
                required
</select> 
</td>
        <td> 
            <input name="idTempahan" type="hidden" value="<?php echo $row[0]; ?>" />
            <input type="text" name="maklum_balas" value="<?php echo $row['maklum_balas']; ?> " placeholder="Sila beri maklum balas">
            <input style="margin-left:10px; padding:5px; margin-top:5px; margin-bottom:2px;" type="submit" name="hantar" value="Hantar">
        </td></form> 
        </tr>
         <?php 
         $i++; }?>
        </tbody>
        </table> 
</div>


 <!-- footer -->
 <br> <br> <br> <br>
 <Section class="footer">
        <div class="container">
            <p class="footertxt">Hak Cipta Terpelihara. Direka oleh <a href="#">Amelia Zakaria</a>.</p>
        </div>
    </Section>

</body>
</html>
