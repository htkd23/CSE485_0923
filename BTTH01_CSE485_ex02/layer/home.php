<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php 
        include "layer/tieude.php";
    ?>
    <div class="row">
        <img class="col-12" src="picture/background_latin.png" alt="">
    </div>
    <div>
        <center class="text-primary mt-3">TOP BÀI HÁT YÊU THÍCH</center>
        <div class="container-fluid">
            <ul class="navbar list-unstyled">
                <li class="col-md-3">
                    <img src="picture/caylagio.png" alt="" class= "w-100">
                    <a href="detail.php"><center class="text-primary mt-3">Cây, lá và gió</center></a>
                </li>
                <li class="col-md-3">
                    <img src="picture/msl_cSmt.png" alt="" class= "w-100">
                    <a href=""><center class="text-primary mt-3">Cuộc sống mến thương</center></a>
                </li>
                <li class="col-md-3">
                    <img src="picture/msl_longme.png" alt="" class= "w-100">
                    <a href=""><center class="text-primary mt-3">Lòng mẹ</center></a>
                </li>
                
                <li class="col-md-3">
                    <img src="picture/msl_phoipha.png" alt="" class= "w-100">
                    <a href=""><center class="text-primary mt-3">Phôi pha</center></a>
                </li>
                <li class="col-md-3">
                    <img src="picture/msl_noitystart.png" alt="" class= "w-100">
                    <a href=""><center class="text-primary mt-3">Nơi tình yêu bắt đầu</center></a>
                </li>
            </ul> 
        </div>
    </div>
    <?php 
        include "footer_layer.php";
    ?>
</body>
</html>