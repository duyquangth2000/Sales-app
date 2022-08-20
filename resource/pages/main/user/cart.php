<?php
include "C:/xampp/htdocs/Product-20212/New folder/resource/pages/main/slidebar/headeruser.php";
?>

<?php
session_start();
$product = new product;
$tong = 0;
$tongtien = 0;
?>


<?php
    if(isset($_GET['id'])){
        $product_id = $_GET['id'];
        $show_product_cart = $product -> show_product_cart($product_id);
        $result = $show_product_cart -> fetch_assoc();
        $item = [
            'id'=>$result['product_id'],
            'name'=>$result['product_name'],
            'image'=>$result['product_img'],
            'price'=>$result['product_price'],
            'quantity'=>1
        ];
        if(isset($_SESSION['cart'][$product_id])){
            $_SESSION['cart'][$product_id]['quantity'] +=1 ;
        }else{
            $_SESSION['cart'][$product_id] = $item;
        }
    }
    if(isset($_GET['action'])){
        if($_GET['action']=='X'){
            unset($_SESSION['cart'][$product_id]);
        }
    }
    // session_destroy();
    // die();
    $cart = (isset($_SESSION['cart']))? $_SESSION['cart'] : [];
    // echo '<pre>';
    // print_r($cart);
    // echo '</pre>';
?>

<!-------------------- Cart -------------------->
<section class="cart">
    <div class="container">
        <div class="cart-top-wrap">
            <div class="cart-top">
                <div class="cart-top-cart cart-top-item">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="cart-top-adress cart-top-item">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="cart-top-payment cart-top-item">
                    <i class="fas fa-money-check-alt"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="cart-content row">
            <div class="cart-content-left">
                <table>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Màu</th>
                        <th>Size</th>
                        <th>SL</th>
                        <th>Đơn giá</th>
                        <th>Xóa</th>
                    </tr>
                    <?php foreach ($cart as $key => $item){ 
                        $key++; 
                        $tong += $item['quantity']; 
                        $tongtien += ($item['price'] * $item['quantity']);
                    ?>
                    <tr>
                            <td><img src="../../../../img/uploads/<?php echo $item['image'] ?>" alt=""></td>
                            <td><p><?php echo $item['name'] ?></p></td>
                            <td><img src="../../../../img/images/spcolor-be.png" alt=""></td>
                            <td><p>L</p></td>
                            <td><input type="number" value="<?php echo $item['quantity'] ?>" min="1"></td>
                            <td><p><?php echo $item['price'] ?><sup>đ</sup></p></td>
                            <td><input type="button" value="X" onclick="location='?action=X&id=<?php echo $item['id'] ?>';"></input></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
            <div class="cart-content-right">
                <table>
                    <tr>
                        <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                    </tr>
                    <tr>
                        <td>TỔNG SẢN PHẨM</td>
                        <td><?php echo $tong ?></td>
                    </tr>
                    <tr>
                        <td>TỔNG TIỀN HÀNG</td>
                        <td><p><?php echo $tongtien ?>000<sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td>TẠM TÍNH</td>
                        <td><p style="color: black; font-weight: bold;"><?php echo $tongtien ?>000<sup>đ</sup></p></td>
                    </tr>
                </table>

                <div class="cart-content-right-text">
                    <p>Bạn sẽ được miễn phí ship khi đơn hàng của bạn có tổng giá trị trên 2.000.000 đ</p>
                </div>
                <div class="cart-content-right-button">
                    <button><a href="cartegoryuser.php">TIẾP TỤC MUA SẮM</a></button>
                    <button><a href="delivery.php?action=dangky">THANH TOÁN</a></button>
                </div>

            </div>
        </div>
    </div>
</section>




<!-------------------- footer -------------------->

<?php

include "C:/xampp/htdocs/Product-20212/New folder/resource/pages/main/slidebar/footer.php";
?>