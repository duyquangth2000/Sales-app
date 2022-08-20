<?php
include "C:/xampp/htdocs/Product-20212/New folder/resource/pages/main/slidebar/slider.php";
include "C:/xampp/htdocs/Product-20212/New folder/resource/pages/main/slidebar/header.php";
?>

<?php 
$product = new product;
     if($_SERVER['REQUEST_METHOD']=== 'POST'){
    // var_dump($_POST,$_FILES);
    // echo '<pre>';
    // echo print_r($_POST);
    // echo '</pre>';
    $insert_product = $product ->insert_product($_POST,$_FILES);
}
?>

<div class="admin-content-right">
            <div class="admin-content-right-product_add">
                <h1>Thêm Sản Phẩm</h1>
                <!-- enctype: để up ảnh lên csdl -->
                <form action="" method="POST" enctype="multipart/form-data"> 
                    <label for="">Nhập tên sản phẩm <span style="color: red;">*</span></label>
                    <input name="product_name" required type="text">
                    <label for="">Chọn danh mục <span style="color: red;">*</span></label>
                    <select name="cartegory_id" id="cartegory_id">
                        <option value="#">--Chọn--</option>
                        <?php 
                        $show_cartegory = $product -> show_cartegory();
                        if ($show_cartegory){while($result = $show_cartegory -> fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
                        <?php }} ?>
                    </select>
                    <label for="">Chọn loại sản phẩm <span style="color: red;">*</span></label>
                    <select name="brand_id" id="brand_id">
                        <option value="#">--Chọn--</option>
                        <?php 
                        $show_brand = $product -> show_brand();
                        if ($show_brand){while($result1 = $show_brand -> fetch_assoc()){
                        ?>
                        <option value="<?php echo $result1['brand_id'] ?>"><?php echo $result1['brand_name'] ?></option>
                        <?php }} ?>
                    </select>
                    <label for="">Giá sản phẩm <span style="color: red;">*</span></label>
                    <input name="product_price" required type="text">
                    <label for="">Giá khuyến mãi <span style="color: red;">*</span></label>
                    <input name="product_price_new" required type="text">
                    <label for="">Mô tả sản phẩm <span style="color: red;">*</span></label>
                    <textarea name="product_desc" required name="" id="editor1" cols="30" rows="10"></textarea>
                    <label for="">Ảnh sản phẩm <span style="color: red;">*</span></label>
                    <input name="product_img" required type="file">
                    <label for="">Ảnh mô tả <span style="color: red;">*</span></label>
                    <input name="product_img_desc[]" required multiple type="file">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>


            <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1', {
	                filebrowserBrowseUrl: '../../../../ckfinder/ckfinder.html',
	                filebrowserUploadUrl: '../../../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
            } );
            </script>

<script>
    $(document).ready(function(){
        $("#cartegory_id").change(function(){
            var x = $(this).val()
            $.get("productadd_ajax.php",{cartegory_id:x},function(data){
                $("#brand_id").html(data);
            })
        })
    })
</script>

</html>