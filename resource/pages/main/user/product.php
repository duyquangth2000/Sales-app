
<?php
include "C:/xampp/htdocs/Product-20212/New folder/resource/pages/main/slidebar/headeruser.php";
?>


<?php
$product = new product;
$product_id = $_GET['id'];
?>

<!-------------------- product -------------------->
<section class="product">
    <div class="container">
        <?php 
            $show_product_detail = $product -> show_product_detail($product_id);
            if ($show_product_detail){while($result = $show_product_detail -> fetch_assoc()){
                        
        ?>
        <div class="product-top row">
            <p>Trang chủ</p> 
            <span>&#10230;</span>
            <p><?php echo $result['cartegory_name'] ?></p>
            <span>&#10230;</span>
            <p><?php echo $result['brand_name'] ?></p>
            <span>&#10230;</span>
            <p><?php echo $result['product_name'] ?></p>
        </div>
        <div class="product-content row">
            <div class="product-content-left row">
                <div class="product-content-left-big-img">
                            <img src="../../../../img/uploads/<?php echo $result['product_img'] ?>" alt="">    
                </div>
                
                <div class="product-content-left-small-img">
                    <?php 
                    $show_product_img = $product -> show_product_img($product_id);
                    if ($show_product_img){while($result1 = $show_product_img -> fetch_assoc()){
                ?>
                    <img src="../../../../img/uploads/<?php echo $result1['product_img_desc'] ?>" alt="">
                    <?php
                    }}
                    ?>
                </div>
                 
            </div>
            <div class="product-content-right">
                <div class="product-content-right-product-name">
                    <h1><?php echo $result['product_name'] ?></h1>
                    <p>SKU: 57E3346</p>
                </div>
                <div class="product-content-right-product-price">
                    <p><?php echo $result['product_price'] ?><sup>đ</sup></p>
                </div>
                <div class="product-content-right-product-color">
                    <p><span style="font-weight: bold;">Màu sắc</span>: Màu Be<span style="color: red;">*</span></p>
                    <div class="product-content-right-product-color-img">
                        <img src="../../../../img/images/spcolor-be.png" alt="">
                    </div>
                </div>
                <div class="product-content-right-product-size">
                    <p style="font-weight: bold;">Size:</p>
                    <div class="size">
                        <span>S</span>
                        <span>M</span>
                        <span>L</span>
                        <span>XL</span>
                        <span>XXL</span>
                    </div>
                    <?php
                        }}
                    ?>
                    <div class="quantity">
                        <p style="font-weight: bold;">Số lượng:</p>
                        <input type="number" min="0" value="1"> 
                    </div>
                    <p style="color: red;">Vui lòng chọn size *</p>
                    <div class="product-content-right-product-button">
                        <button><a href="cart.php?id=<?php echo $product_id ?>"><i class="fas fa-shopping-cart"></i> <p>MUA HÀNG</p></a></button>
                        <button><p>TÌM TẠI CỬA HÀNG</p></button>
                    </div>
                    <div class="product-content-right-product-icon">
                        <div class="product-content-right-product-icon-item">
                            <i class="fas fa-phone-alt"></i> <p>Hotline</p>
                        </div>
                        <div class="product-content-right-product-icon-item">
                            <i class="fas fa-comments"></i> <p>Chat</p>
                        </div>
                        <div class="product-content-right-product-icon-item">
                            <i class="fas fa-envelope"></i> <p>Mail</p>
                        </div>
                    </div>
                    <div class="product-content-right-product-QR">
                        <img src="../img/images/QR.jpeg" alt="">
                    </div>
                    <div class="product-content-right-bottom">
                        <div class="product-content-right-bottom-top">
                            &#8744;
                        </div>
                        <div class="product-content-right-bottom-content-big">
                            <div class="product-content-right-bottom-content-title row">
                                <div class="product-content-right-bottom-content-title-item gioithieu">
                                    <p><b>Giới thiệu</b></p>
                                </div>
                                <div class="product-content-right-bottom-content-title-item chitiet">
                                    <p><b>Chi tiết sản phẩm</b></p>
                                </div>
                                <div class="product-content-right-bottom-content-title-item baoquan">
                                    <p><b>Bảo quản</b></p>
                                </div>
                            </div>
                            <div class="product-content-right-bottom-content">
                                <div class="product-content-right-bottom-content-gioithieu">
                                    Đầm 2 lớp dài ngang gối, thiết kế lệch vai tạo điểm nhấn. Eo được nhấn bằng dây lưng mỏng và dài có thể tạo hình tùy ý. Phần vạt có độ xòe nhẹ tự nhiên. <br>Một chiếc đầm lụa với chất liệu nhẹ nhàng sẽ khiến ngày mới của quý cô dễ chịu hơn. Thiết kế lệch vai khoe khéo bờ vai nàng, phù hợp với thời tiết mùa hè nhưng vẫn giữ nguyên độ chỉn chu và lịch sự. <br><br>Mẫu mặc size S: <br><br>Chiều cao: 1m68 <br><br>Cân nặng: 52kg <br><br>Số đo 3 vòng: 83-62-95cm
                                </div>
                                <div class="product-content-right-bottom-content-chitiet">
                                    Dòng sản phẩm	Ladies <br><br>Nhóm sản phẩm	Đầm <br><br>Cổ áo	Cổ khác <br><br>Tay áo	Tay ngắn    <br><br>Kiểu dáng	Đầm xòe <br><br>Độ dài	Qua gối <br><br>Họa tiết	Họa tiết khác   <br><br>Chất liệu	Lụa <br><br>
                                </div>
                                <div class="product-content-right-bottom-content-baoquan">
                                    Chi tiết bảo quản sản phẩm : <br><br>* Vải dệt kim : sau khi giặt sản phẩm phải được phơi ngang tránh bai dãn.<br><br>* Vải voan , lụa , chiffon nên giặt bằng tay.<br><br>* Vải thô , tuytsy , kaki không có phối hay trang trí đá cườm thì có thể giặt máy.<br><br>* Vải thô , tuytsy, kaki có phối màu tường phản hay trang trí voan , lụa , đá cườm thì cần giặt tay.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------- product-related------------>
<section class="product-related container">
    <div class="product-related-title">
        <p>Sản phẩm liên quan</p>
    </div>
    <div class="product-content row">
        <div class="product-related-item">
            <img src="../../../../img/images/nam2.jpg" alt="">
            <h1>Áo Polo Cổ Tàu Trụ</h1>
            <p>690.000<sup>đ</sup></p>
        </div>
        <div class="product-related-item">
            <img src="../../../../img/images/nam3.jpg" alt="">
            <h1>Áo Polo Cổ Tàu Trụ</h1>
            <p>690.000<sup>đ</sup></p>
        </div>
        <div class="product-related-item">
            <img src="../../../../img/images/nam4.jpg" alt="">
            <h1>Áo Polo Cổ Tàu Trụ</h1>
            <p>690.000<sup>đ</sup></p>
        </div>
        <div class="product-related-item">
            <img src="../../../../img/images/nam5.jpg" alt="">
            <h1>Áo Polo Cổ Tàu Trụ</h1>
            <p>690.000<sup>đ</sup></p>
        </div>
        <div class="product-related-item">
            <img src="../../../../img/images/nam6.jpg" alt="">
            <h1>Áo Polo Cổ Tàu Trụ</h1>
            <p>690.000<sup>đ</sup></p>
        </div>
    </div>
</section>

<?php
include "C:/xampp/htdocs/Product-20212/New folder/resource/pages/main/slidebar/footer.php";
?>