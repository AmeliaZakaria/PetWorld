<?php
    include "db.php";
    include "main.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
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
        function printOut()
        {
            window.print();
        }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #ffff9f;">

    <div class="wrapper">
    <h2 style="text-align: center; color: #3c40c6; margin-top: 80px; ">Laporan Tempahan</h2>
    <div class="card-body">
                    <br><br>
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tarikh Dari:</label>
                                        <input required type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tarikh Hingga:</label>
                                        <input required type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label>Tekan untuk tapis</label> <br>
                                      <button type="submit" class="btn btn-primary">Tapis</button>
                                    </div>
                                </div>
                                <div class="col-md-4" style="margin-left:600px; margin-top:-80px;">
                                    <div class="form-group">
                                    <br>
                                      <button title="CETAK" style="margin-left: 40%; margin-top:3%; width:80px; height:60px;" onclick="printOut()" type="submit" class="btn btn-primary"><a href="#"><img src="https://img.icons8.com/stickers/50/000000/print.png"/></a></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div style=" margin-left:25%; width: 58%; margin-bottom:150px;" class="card mt-4">
                    <div class="card-body">
                    
                        <table class="table table-borderd" style=" margin-left:28pt; width:580pt; ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Nama Haiwan</th>
                                    <th>Jenis Perkhidmatan</th>
                                    <th>Status Tempahan</th>
                                    <th>Tarikh Tempahan</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            <?php 
                                $con = mysqli_connect("localhost","root","","petworld");
                                if(isset($_GET['from_date']) && isset($_GET['to_date']))
                                {
                                    $from_date = $_GET['from_date'];
                                    $to_date = $_GET['to_date'];
                                    
                                    $query = "SELECT * FROM tempahan WHERE tarikh_tempahan BETWEEN '$from_date' AND '$to_date' order by tarikh_tempahan ";
                                    $query_run = mysqli_query($con, $query);
                                    
                                    if(mysqli_num_rows($query_run) > 0)
                                    { 
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['idTempahan']; ?></td>
                                                <td><?= $row['nama_penuh']; ?></td>
                                                <td><?= $row['nama_haiwan']; ?></td>
                                                <td><?= $row['Jenis_perkhidmatan']; ?></td>
                                                <td><?= $row['status_tempahan']; ?></td>
                                                <td><?= $row['tarikh_tempahan']; ?></td>
                                            </tr>
                                            <?php   
                                        }
                                    }
                                    else
                                    {
                                        echo "Harap maaf. Tiada Rekod Tempahan Ditemui.";
                                    }
                                    }
                            ?>
                            </tbody>
                        </table>
                    </div>
</div>


 <!-- footer -->
 <Section class="footer">
        <div class="container">
            <p class="footertxt">Hak Cipta Terpelihara. Direka oleh <a href="#">Amelia Zakaria</a>.</p>
        </div>
    </Section>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>