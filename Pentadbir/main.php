<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" ></script>
</head>
<body>
    <!-- header-->
    <section class="header">
        <div class="container">

            <div class="pet">
            Sistem PetWorld Centre | Pentadbir
            </div>
            <div class="out">
               <a href="logoutA.php"> <img title="Log Keluar" src="https://img.icons8.com/external-sbts2018-mixed-sbts2018/58/000000/external-logout-social-media-basic-1-sbts2018-mixed-sbts2018.png"/></a>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    <!--side bar -->
   <nav>
    <label for="btn" class="button" >PENTADBIR
        <span class="fas fa-caret-down"></span>
    </label>
    <input type="checkbox" id="btn">
    <ul class="menu">
        <li><a href="profiladmin.php">Profil</a></li>
        <li>
        <label for="btn-2" class="first">Urus Perkhidmatan
        <span class="fas fa-caret-down"></span>
        </label>
        <input type="checkbox" id="btn-2">
        <ul>
            <li><a href="+service.php">Tambah</a></li>
            <li><a href="-service.php">Kemaskini</a></li>
        </ul>
        </li>
        <li>
        <label for="btn-3" class="second">Urus Syarikat
        <span class="fas fa-caret-down"></span>
        </label>
        <input type="checkbox" id="btn-3">
        <ul>
            <li><a href="+contact.php">Tambah</a></li>
            <li><a href="-contact.php">Kemaskini</a></li>
        </ul>
        </li>
        <li><a href="urustempah.php">Urus Tempahan</a></li>
        <li><a href="laporan.php">Laporan</a></li>
    </ul>
</nav>

</body>
</html>