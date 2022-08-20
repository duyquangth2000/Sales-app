<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <script src="../../../ckeditor/ckeditor.js"></script>
    <script src="../../../ckfinder/ckfinder.js"></script>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/cartegory.css">
    <link rel="stylesheet" href="../../css/delivery.css">
    <link rel="stylesheet" href="../../css/cart.css">
    <link rel="stylesheet" href="../../css/payment.css">
    <link rel="stylesheet" href="../../css/product.css">
    <link rel="stylesheet" href="../../css/user.css">
    <title>Website - ThoiTrangNam</title>
</head>

<?php
include "C:/xampp/htdocs/Product-20212/New folder/resource/modules/class/brand_class.php";
include "C:/xampp/htdocs/Product-20212/New folder/resource/modules/class/cartegory_class.php";
include "C:/xampp/htdocs/Product-20212/New folder/resource/modules/class/product_class.php";
include "C:/xampp/htdocs/Product-20212/New folder/resource/modules/class/users_class.php";
?>

<body>
<!-------------------- header -------------------->
<section class="top">
    <div class="container">
        <div class="row">
            <div class="top-logo">
                <a href="indexuser.php"><img src="../../../../img/images/logo.png" alt=""></a>
            </div>
            <div class="top-menu-items">
                
                <ul>
                    <li>NAM
                        <ul class="top-menu-item">
                            <li><a href="cartegoryuser.php">ÁO</a></li>
                            <li><a href="#">QUẦN</a></li>
                            <li><a href="#">GIÀY & DÉP</a></li>
                            <li><a href="#">PHỤ KIỆN</a></li>
                        </ul>
                    </li>
                    <li>TRẺ EM
                        <ul class="top-menu-item">
                            <li><a href="cartegoryuser.php">ÁO</a></li>
                            <li><a href="#">QUẦN</a></li>
                            <li><a href="#">PHỤ KIỆN</a></li>
                        </ul>
                    </li>
                    <li>SALE</li>
                    <li>BỘ SƯU TẬP
                        <ul class="top-menu-item">
                            <li><a href="cartegoryuser.php">NAM</a></li>
                            <li><a href="#">TRẺ EM</a></li>
                        </ul>
                    </li>
                    <li>HOT ITEMS</li>
                    <li>THÔNG TIN</li>
                </ul>
            </div>
            <div class="top-menu-icons">
                <ul>
                    <li>
                            <input type="text" placeholder="Tìm kiếm"/>
                            <i class="fas fa-search"></i>
                    </li>
                    <li>
                        <i class="fas fa-user-secret"></i>
                    </li>
                    <li>
                        <a href="cart.php"><i href class="fas fa-shopping-cart"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-------------------- slider -------------------->
