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
    <title>Sejarah Tempahan</title>
<style>
    tbody>tr>:nth-child(6){
 color:red;
}

#cari
{
   line-height: 10px;
   vertical-align: middle;
   margin-left:380pt;
   margin-top: -46pt;
   height: 35px;

}
</style>
</head>

<body>
<section class="content">
<div class="wrapper">
    <h2 style="text-align: center; color: #3c40c6; margin-top: 80px; ">Sejarah Tempahan Saya</h2>

     <?php
     $nama_pengguna = $_SESSION["nama_pengguna"];
     $records = mysqli_query($con,"SELECT * from daftar_pelanggan,tempahan WHERE nama_pengguna = '$nama_pengguna'"); // fetch data from database
 while($row = mysqli_fetch_array($records)){
 ?>
             <input   name="nama_pengguna" type="hidden" value="<?php echo $row['nama_pengguna'];?>" />
             
 <?php } ?>
 <form action="" method="GET">
        Masukkan ID Pelanggan anda : <input name="idPelanggan" type="text" value="<?php if(isset($_GET['idPelanggan'])){ echo $_GET['idPelanggan']; }?>" /> 
    <input id="cari" type="submit" value="Cari"></form>
<br><br>


<?php 
    if(isset($_GET['idPelanggan'])){
        $idPelanggan = $_GET['idPelanggan'];
        $query = "SELECT * FROM tempahan WHERE idPelanggan=$idPelanggan ORDER BY tarikh_tempahan";
        $result = mysqli_query($con, $query);
        $i=1; ?>

    <table  width="190%" border="2" style="border-collapse:collapse; text-align: center; margin-left: -60pt;">
        <thead style=" background-color: darkblue; color:white;">
        <tr>
        <th><strong>Bil</strong></th>
        <th><strong>ID Tempahan</strong></th>
        <th><strong>Nama Haiwan</strong></th>
        <th><strong>Jenis Perkhidmatan</strong></th>
        <th><strong>Tarikh</strong></th>
        <th><strong>Masa</strong></th>
        <th><strong>Status</strong></th>
        <th><strong>Maklum Balas</strong></th>
        </tr>
        </thead>
        
        <?php
        while ($row = mysqli_fetch_array ($result)) {
        ?>

        <tbody>
        <tr>
        <td>  <?php echo $i; ?></td>
        <td><?php echo $row['idTempahan'];?></td>
        <td><?php echo $row['nama_haiwan'];?></td>
        <td><?php echo $row['Jenis_perkhidmatan'];?></td>
        <td><?php echo $row['tarikh_tempahan'];?></td>
        <td><?php echo $row['masa_tempahan'];?></td>
        <td style="color=red " ><?php echo $row['status_tempahan'];?>  </td>
        <td><?php echo $row['maklum_balas'];?></td>
        </tr>
        <?php 
        $i++; }?>
        </tbody>
        </table> 
    <?php } ?>
     
        
        <br> <br> <br>
        <br> <br> <br> <br>
</div>
</section>


 <!-- footer-->
 <Section class="footer">
        <div class="container">
            <p class="footertxt">Hak Cipta Terpelihara. Direka oleh <a href="#">Amelia Zakaria</a>.</p>
        </div>
    </Section> 

</body>
</html>