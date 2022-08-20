<?php
include "C:/xampp/htdocs/Product-20212/New folder/resource/pages/main/slidebar/slider.php";
include "C:/xampp/htdocs/Product-20212/New folder/resource/pages/main/slidebar/header.php";
?>


<?php
$user = new user;
if(isset($_GET['id'])){
    $cart_id_select = $_GET['id'];
    $show_order_detail = $user -> show_order_detail($cart_id_select);
}
?>

<style>
    img{
        height: 100px;
        width: 60px;
        padding: 6px 0;
        margin: 0;
    }
    .list-order{
        display: flex;
        flex-wrap: wrap;
    }
    .list-order a{
        position:absolute;
        right:10px;
    }
    .list-order button {
        height: 35px;
        border: 2px solid black;
        padding: 6px 12px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .list-order button:hover {
        background-color: black;
        color: #fff;
    }
    
</style>

<div class="admin-content-right">
            <div class="admin-content-right-cartegory_list">
                <div class="list-order">
                    <h1>Chi tiết đơn hàng</h1>
                    <a href="cartadmin.php"><button>Quay lại</button></a>
                </div>
                <table>
                    <tr height='30px'>
                        <th>Stt</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                    <?php
                    if($show_order_detail){$j=0;
                        while($result = $show_order_detail->fetch_assoc()) {$j++;
                            $cart_id = $result['cart_id'];
                            $total = $result['cart_total'];
                            $user_name = $result['user_name'];
                            $user_phone = $result['user_phone'];
                            $user_address = $result['user_address'];

                    ?>
                    <tr>
                        <td><?php echo $j ?></td>
                        <td><img src="../../../../img/uploads/<?php echo $result['product_img'] ?>" alt=""></td>
                        <td><?php echo $result['product_name'] ?></td>
                        <td><?php echo $result['product_price'] ?><sup>đ</sup></td>
                        <td><?php echo $result['quantity'] ?></td>
                        <td>
                            <?php echo ($result['product_price'] * $result['quantity'])*1000 ?>
                            <sup>đ</sup>
                        </td>
                    </tr>
                    <?php
                    }}
                    ?>
                    <tr height='30px'>
                        <td></td>
                        <td colspan="2">
                            <b>Mã đơn hàng   :</b><?php echo $cart_id ?> <br>
                            <b>Tên khách hàng :</b>  <?php echo $user_name ?> <br>
                            <b>SĐT           :</b>  0<?php echo $user_phone ?> <br>
                            <b>Địa chỉ       :</b>  <?php echo $user_address ?>
                        </td>
                        <td colspan="2"><b>Tổng thanh toán</b></td>
                        <td><b><?php echo $total ?><sup>đ</sup></b></td>
                    </tr>
                </table>
            </div>
        </div>

