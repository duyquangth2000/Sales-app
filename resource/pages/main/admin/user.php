<?php
include "C:/xampp/htdocs/Product-20212/New folder/resource/pages/main/slidebar/slider.php";
include "C:/xampp/htdocs/Product-20212/New folder/resource/pages/main/slidebar/header.php";
?>


<?php
$user = new user;
$show_user = $user -> show_user();
?>

<div class="admin-content-right">
            <div class="admin-content-right-cartegory_list">
                <h1>Danh sách khách hàng</h1>
                <table>
                    <tr height='30px'   >
                        <th>Stt</th>
                        <th>Id</th>
                        <th>Tên KH</th>
                        <th>SĐT</th>
                        <th>Địa chỉ</th>
                    </tr>
                    <?php
                    if($show_user){$i=0;
                        while($result = $show_user->fetch_assoc()) {$i++;
                    ?>
                    <tr height='30px'>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['user_id'] ?></td>
                        <td><?php echo $result['user_name'] ?></td>
                        <td>0<?php echo $result['user_phone'] ?></td>
                        <td><?php echo $result['user_address'] ?></td>
                    </tr>
                    <?php
                    }
                    }
                    ?>
                </table>
            </div>
        </div>