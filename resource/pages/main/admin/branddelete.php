<?php
include "C:/xampp/htdocs/Product-20212/New folder/resource/modules/class/brand_class.php";
?>

<?php
    $brand = new brand;
    $brand_id = $_GET['brand_id'];
    $delete_brand = $brand -> delete_brand($brand_id);
?>
