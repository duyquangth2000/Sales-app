<?php
include "C:/xampp/htdocs/Product-20212/New folder/resource/pages/main/slidebar/slider.php";
include "C:/xampp/htdocs/Product-20212/New folder/resource/pages/main/slidebar/header.php";
?>

<?php
$product = new product;
$show_product = $product -> show_product();
?>

<style>
    img{
        height: 80px;
        width: 60px;
        padding: 6px 0;
        margin: 0;
    }
</style>

<div class="admin-content-right">
            <div class="admin-content-right-cartegory_list">
                <h1>Danh sách sản phẩm</h1>
                <table>
                    <tr height='30px'>
                        <th>Stt</th>
                        <th>Id</th>
                        <th>Ảnh minh họa</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Giá khuyến mãi</th>
                        <th>Danh mục</th>
                        <th>Loại sản phẩm</th>
                        <th>Tùy biến</th>
                    </tr>
                    <?php
                    if($show_product){$i=0;
                        while($result = $show_product->fetch_assoc()) {$i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['product_id'] ?></td>
                        <td> <img src="../../../../img/uploads/<?php echo $result['product_img'] ?>" alt=""></td>
                        <td><?php echo $result['product_name'] ?></td>
                        <td><?php echo $result['product_price'] ?><sup>đ</sup></td>
                        <td><?php echo $result['product_price_new'] ?><sup>đ</sup></td>
                        <td><?php echo $result['cartegory_name'] ?></td>
                        <td><?php echo $result['brand_name'] ?></td>
                        <td><a href="productedit.php?product_id=<?php echo $result['product_id'] ?>">Sửa</a>|<a href="productdelete.php?product_id=<?php echo $result['product_id'] ?>">Xóa</a></td>
                    </tr>
                    <?php
                    }
                    }
                    ?>
                </table>
            </div>
        </div>