<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetWorld Centre</title>
    <link rel="stylesheet" href="css/service.css">
    <style type="text/css">
    #services{
   	width: 99%;
    margin: 1px auto;
   	border: 5px solid #0066cc;
   }
   #img_div{
   	width: 80%;
   	padding: 10px;
   	margin: 25px auto;
   	border: 2px solid #0099cc;
    background:linear-gradient(to right, #66ccff 0%, #ccffff 100%); #87bdd8;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
    </style>
</head>
<body>
    <!-- header-->
    <section class="header">
        <div class="container">
            <div class="logo">
                <img src="images/logo.jpg" alt="PetWorld Logo" class="img-responsive">
            </div>
            <div class="pet">
            PetWorld Centre
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

      <!-- navbar-->
      <section class="nav">
        <div class="container">
            <div class="navigation text-right">
                <ul>
                    <li>
                        <a href="index.php">Utama</a>
                    </li>
                    <li>
                        <a href="service.php">Perkhidmatan</a>
                    </li>
                    <li>
                        <a href="contact.php">Hubungi Kami</a>
                    </li>
                    <li>
                        <a href="daftar.php">Pendaftaran</a>
                    </li>
                    <li>
                        <a href="logmasuk.php">Log Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
       </section>

        <!-- perkhidmatan -->
        <section id="services" style="background-color: #ffff9f; padding: 2% 0;">
<?php

    include "db.php";

    $query = "SELECT * FROM urusperkhidmatan";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result)) {
        echo "<div id='img_div'>";
            echo "<img src='images/".$row['foto']."' >";
            echo "<p><center><b><i>". $row['Jenis_perkhidmatan']."</i></b></center></p>" ;
            echo "<p><center>". $row['Penerangan_perkhidmatan']."</center></p>" ;
            echo "<p><center>". $row['Harga']."</center></p>" ;
        echo "</div>";
    }
?>
        </section>

        <!-- footer -->
    <Section class="footer">
        <div class="container">
            <p class="footertxt">Hak Cipta Terpelihara. Direka oleh <a href="#">Amelia Zakaria</a>.</p>
        </div>
    </Section>
</body>
</html>