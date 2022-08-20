<?php
include "C:/xampp/htdocs/Product-20212/New folder/resource/pages/main/slidebar/headeruser.php";

?>


<?php
$product = new product;
?>



<?php
    if(isset($_GET['field'])&&($_GET['field']==='price')){
        if((isset($_GET['sort']))&&($_GET['sort']==='asc')){
            $show_product = $product -> show_product_asc();
        }else{
            $show_product = $product -> show_product_desc();
        }
    }else{
        $show_product = $product -> show_product();
    }
    $result = $show_product -> fetch_assoc();



?>
<!-------------------------- Cartegory -------------------------->

<section class="cartegory">
    <div class="container">
        <div class="cartegory-top row">
                    
            <p><a href="indexuser.php">Trang chủ</a></p> 
            <span>&#10230;</span>
            <p><a href=""><?php echo $result['cartegory_name'] ?></a></p>
            <!-- <span>&#10230;</span>
            <p><a href=""><?php echo $result['brand_name'] ?></a></p> -->
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="cartegory-left">
            
                <ul>
                    <li class="cartegory-left-li"><a href="#">NAM</a>
                        <ul>
                            <li><a href="">ÁO</a></li>
                            <li><a href="">QUẦN</a></li>
                            <li><a href="">GIÀY & DÉP</a></li>
                            <li><a href="">PHỤ KIỆN</a></li>
                        </ul>
                    </li>
                    <li class="cartegory-left-li"><a href="#">TRẺ EM</a>
                        <ul>
                            <li><a href="">ÁO</a></li>
                            <li><a href="">QUẦN</a></li>
                            <li><a href="">PHỤ KIỆN</a></li>
                        </ul>
                    </li>
                    <li class="cartegory-left-li"><a href="#">SALE</a></li>
                    <li class="cartegory-left-li"><a href="#">BỘ SƯU TẬP</a>
                        <ul>
                            <li><a href="">NAM</a></li>
                            <li><a href="">TRẺ EM</a></li>
                        </ul>
                    </li>
                    <li class="cartegory-left-li"><a href="#">HOT ITEMS</a></li>
                </ul>
            </div>
            <div class="cartegory-right row">
                <div class="cartegory-right-top-item">
                    <p>Nam</p>
                </div>
                <div class="cartegory-right-top-item">
                    <button><span>Bộ lọc</span> <i class="fas fa-sort-down"></i></button>
                </div>
                <div class="cartegory-right-top-item">
                    <select name="" id="" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                        <option value="">Sắp xếp</option>
                        <option value="?field=price&sort=desc">Giá cao đến thấp</option>
                        <option value="?field=price&sort=asc">Giá thấp đến cao</option>
                    </select>
                </div>
                <div class="cartegory-right-content row">
                    <?php
                    if($show_product){$i=0;
                        while($result = $show_product->fetch_assoc()) {$i++;
                    ?>
                    <div class="cartegory-right-content-item">
                        <a href="product.php?id=<?php echo $result['product_id'] ?>"><img src="../../../../img/uploads/<?php echo $result['product_img'] ?>" alt=""></a>
                        <h1><?php echo $result['product_name'] ?></h1>
                        <p><?php echo $result['product_price'] ?><sup>đ</sup></p>
                        <p>
                            <a href="product.php?id=<?php echo $result['product_id'] ?>">Xem</a>
                            <a href="cart.php?id=<?php echo $result['product_id'] ?>">Mua hàng</a>
                        </p>
                    </div>
                
                    <?php }} ?>
                </div>
                <div class="cartegory-right-bottom row">
                    <div class="cartegory-right-bottom-items">
                        <p>Hiển thị 8 <span>|</span> 16 sản phẩm</p>
                    </div>
                    <div class="cartegory-right-bottom-items">
                        <p><span>&#171;<span>1 2 3 4 5</span>&#187;</span>Trang cuối</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-------------------- footer -------------------->
<?php
include "C:/xampp/htdocs/Product-20212/New folder/resource/pages/main/slidebar/footer.php";
?>