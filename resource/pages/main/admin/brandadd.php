<?php
include "C:/xampp/htdocs/Product-20212/New folder/resource/pages/main/slidebar/slider.php";
include "C:/xampp/htdocs/Product-20212/New folder/resource/pages/main/slidebar/header.php";
?>

<?php
$brand = new brand;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $cartegory_id = $_POST['cartegory_id'];
    $brand_name = $_POST['brand_name'];
    $insert_brand = $brand ->insert_brand($cartegory_id,$brand_name);
}
?>

<div class="admin-content-right">
            <div class="admin-content-right-product_add">
                <h1>Thêm Loại Sản Phẩm</h1> <br>
                <label for="">Chọn danh mục <span style="color: red;">*</span></label>
                <form action="" method="POST">
                    <select name="cartegory_id" id="">
                        <option value="#"> --Chọn-- </option>
                        <?php
                        $show_cartegory = $brand -> show_cartegory();
                        if ($show_cartegory){while($result = $show_cartegory -> fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
                        <?php
                        }}
                        ?>
                    </select> 
                    <label for="">Nhập tên loại sản phẩm <span style="color: red;">*</span></label> 
                    <input required name="brand_name" type="text">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>