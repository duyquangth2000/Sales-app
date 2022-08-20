<?php
include "C:/xampp/htdocs/Product-20212/New folder/resource/pages/main/slidebar/headeruser.php";
?>



<?php
session_start();

$user = new user;
$tongtien = 0;
$done = 0;
$accept = 0;
$tong_id[] = '';
$call_user = 0;
$show_id = $user -> show_id();
$show_user = $user -> show_user();
switch($_GET['action']){
    case'login' :
        $accept = 0;
        if((isset($_POST['user_phone_check']))&&($_GET['action']==='login')){
            $user_phone_check = $_POST['user_phone_check'];
            $i=0;
            $phone = 0;
            while($result9 = $show_user->fetch_assoc()){$i++;
                if($result9['user_phone']===$user_phone_check){
                    $call_user = 1;
                    $call_user_name = $result9['user_name'];
                    $call_user_address = $result9['user_address'];
                    $accept = 1;
                    break;
                }
        }}
        break;
    case'khachle' :
        $accept = 1;
        break;
    case'dangky' :
        $accept = 0;
        if(($_SERVER['REQUEST_METHOD']=== 'POST')&&isset($_POST['user_phone'])){
            $insert_user = $user -> insert_user($_POST);
            $accept = 1;
        } else break;
        break;
    default:
        break;
}
// if($_SERVER['REQUEST_METHOD']=== 'POST'){
//     // var_dump($_POST,$_FILES);
//     // echo '<pre>';
//     // echo print_r($_POST);
//     // echo '</pre>';
//     $insert_user = $user -> insert_user($_POST);
//     $accept = 1;
// }
$cart = (isset($_SESSION['cart']))? $_SESSION['cart'] : [];
?>


<!-------------------- Delivery -------------------->
<section class="delivery">
    <div class="container">
        <div class="delivery-top-wrap">
            <div class="delivery-top">
                <div class="delivery-top-delivery delivery-top-item">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="delivery-top-adress delivery-top-item">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="delivery-top-payment delivery-top-item">
                    <i class="fas fa-money-check-alt"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="delivery-content row">
            <div class="delivery-content-left">
                <p>Vui lòng nhập thông tin</p>
                <div class="delivery-content-left-khachle row">
                    
                    <input name="loaikhach" onclick="location='?action=login';" type="radio">
                    <p> <span style="font-weight: bold;">Nhập sđt của bạn nếu đã từng mua hàng trước đây</span></p>
                </div>
                <?php if(isset($_GET['action'])&&($_GET['action']='login')){ ?>
                <form action="" method="POST">
                        +84
                        <input name="user_phone_check" type="number">
                        <button type="submit">Xác nhận và thanh toán</button>
                </form>
                <?php } ?>
                <?php if(($call_user==1)&&isset($_POST['user_phone_check'])){
                    echo 'Chào '; 
                    print($result9['user_name']);
                    print('! Bạn đã xác nhận thanh toán thành công.<br />');
                    echo 'Đơn hàng của bạn là:';
                }
                if(($call_user==0)&&isset($_POST['user_phone_check'])){
                    echo 'Thông tin bạn nhập không chính xác! Xin vui lòng nhập lại.';
                }
                ?>
 
                <div class="delivery-content-left-khachle row">
                    <input name="loaikhach" onclick="location='?action=khachle';" type="radio">
                    <p> <span style="font-weight: bold;">Khách lẻ</span> (Nếu bạn không muốn lưu lại thông tin)</p>
                </div>
                <div class="delivery-content-left-dangky row">
                    <input checked name="loaikhach" onclick="location='?action=dangky';" type="radio">
                    <p> <span style="font-weight: bold;">Đăng ký</span> (Tạo mới tài khoản với thông tin bên dưới)</p>
                </div>
                <form action="" method="POST">
                    <div class="delivery-content-left-input-top row">
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Họ tên <span style="color: red;">*</span></label>
                            <input name="user_name" type="text">
                        </div>
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Điện thoại <span style="color: red;">*</span></label>
                            <input name="user_phone" type="phone" >
                        </div>
                    </div>
                    <div class="delivery-content-left-input-bottom">
                        <label for="">Địa chỉ <span style="color: red;">*</span></label>
                        <input name="user_address" type="text">
                    </div>
                    <div class="delivery-content-left-button row">
                        <a href="cart.php"><span style="color: #BF8A49;">&#171;</span><p style="color: #BF8A49;"> Quay lại giỏ hàng</p></a>
                        <a href="payment.php"><button type="submit"><P style="font-weight: bold;">THANH TOÁN VÀ GIAO HÀNG</P></button></a>
                    </div>
                </form>
            </div>
            <div class="delivery-content-right">
                <table>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Giảm giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                    <?php
                        foreach ($cart as $key => $item){ 
                        $key++; 
                        $tongtien += ($item['price'] * $item['quantity']);
                        $tong_id[] = $item['id'];
                    ?>
                    <tr>
                        <td><?php echo $item['name'] ?></td>
                        <td></td>
                        <td><?php echo $item['quantity'] ?></td>
                        <td><p><?php echo $item['price'] ?><sup>đ</sup></p></td>
                    </tr>
                    <?php } ?>
                    <?php
                    if(($_SERVER['REQUEST_METHOD']=== 'POST')&&($accept == 1)){
                        if($call_user==1){
                            $phone = $user_phone_check ;
                        } else {
                            $phone = $_POST['user_phone'];
                        }
                        $done = 1;
                        $insert_order = $user -> insert_order($phone,$tongtien,$cart);
                        session_destroy();
                    }
                    ?>
                    
                    <tr name="">
                        <td style="font-weight: bold;" colspan="3">Tổng</td>
                        <td style="font-weight: bold;"><p><?php echo $tongtien ?>000<sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;" colspan="3">Thuế VAT (8%)</td>
                        <td style="font-weight: bold;"><p><?php echo $tongtien*8/100 ?>000<sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;" colspan="3">Tổng tiền hàng</td>
                        <td style="font-weight: bold;"><p><?php echo $tongtien + $tongtien*8/100 ?>000<sup>đ</sup></p></td>
                    </tr>
                </table> 
            </div>
        </div>
    </div>
</section>


<?php
include "C:/xampp/htdocs/Product-20212/New folder/resource/pages/main/slidebar/footer.php";
?>
<!-- <?php if($done==1){ ?>
<script>
    location.href = '/Product-20212/New%20folder/resource/pages/main/user/delivery.php?action=login';
</script>
<?php } ?> -->