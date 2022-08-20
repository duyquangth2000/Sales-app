<?php
include "C:/xampp/htdocs/Product-20212/New folder/resource/pages/main/slidebar/slider.php";
include "C:/xampp/htdocs/Product-20212/New folder/resource/pages/main/slidebar/header.php";
?>


<?php
$user = new user;
$show_order = $user -> show_order();
?>

<div class="admin-content-right">
            <div class="admin-content-right-cartegory_list">
                <h1>Danh sách đơn hàng</h1>
                <table>
                    <tr height='30px'>
                        <th>Stt</th>
                        <th>Tên KH</th>
                        <th>SĐT</th>
                        <th>Địa chỉ</th>
                        <th>Trạng thái đơn hàng</th>
                        <th>Chi tiết đơn hàng</th>
                    </tr>
                    <?php
                    if($show_order){$i=0;
                        while($result = $show_order->fetch_assoc()) {$i++;
                    ?>
                    <tr height='30px'>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['user_name'] ?></td>
                        <td>0<?php echo $result['user_phone'] ?></td>
                        <td><?php echo $result['user_address'] ?></td>
                        <td><?php echo $result['cart_status'] ?></td>
                        <td><a href="listorder.php?id=<?php echo $result['cart_id'] ?>" style="color:blue;">Xem chi tiết</a></td>
                    </tr>
                    <?php
                    }}
                    ?>
                </table>
            </div>
        </div>
