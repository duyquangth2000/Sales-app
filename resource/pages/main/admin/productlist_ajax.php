<?php
include "../class/product_class.php";

$product = new product;
$brand_id = $_GET['brand_id']
?>


<?php 
            $show_brand_ajax = $product -> show_brand_ajax($cartegory_id);
            if ($show_brand_ajax){while($result = $show_brand_ajax -> fetch_assoc()){
?>
        <option value="<?php echo $result['brand_id'] ?>"><?php echo $result['brand_name'] ?></option>
<?php }} ?>