<?php
include "C:/xampp/htdocs/Product-20212/New folder/resource/modules/class/cartegory_class.php";
?>

<?php
$cartegory = new cartegory;
if(!isset($_GET['cartegory_id']) || $_GET['cartegory_id']==NULL) {
    echo "<script>window.location = 'cartegorylist.php'</script>";
}
else {
    $cartegory_id = $_GET['cartegory_id'];
}
    $delete_cartegory = $cartegory -> delete_cartegory($cartegory_id);

?>
