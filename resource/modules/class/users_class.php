<?php
include_once "C:/xampp/htdocs/Product-20212/New folder/resource/database/database.php";
?>

<?php
class user {
    private $db;

    public function __construct(){
        $this -> db = new Database();
    }

    public function show_user(){
        $query = "SELECT * FROM tbl_user ORDER BY user_id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function show_id() {
        $query = "SELECT * FROM tbl_user ORDER BY user_id DESC LIMIT 1";
        $result = $this->db->select($query);
        return $result;
    }

    public function insert_order($phone,$tongtien,$cart) {
            $user_phone = $phone;
            $cart_total = ($tongtien + $tongtien*8/100)*1000;
            $cart_status = 'Hoàn thành';
            $query = "INSERT INTO tbl_cart (
                user_phone, 
                cart_total, 
                cart_status )
                VALUES (
                '$user_phone',
                '$cart_total',
                '$cart_status')";
            $result = $this->db->insert($query);
            if($result){
                $query = "SELECT * FROM tbl_cart ORDER BY cart_id DESC LIMIT 1";
                $result = $this->db->select($query)->fetch_assoc();
                $cart_id = $result['cart_id'];
                foreach ($cart as $key => $item) {
                    $product_id = $item['id'];
                    $quantity = $item['quantity'];
                    $query = "INSERT INTO tbl_cart_details (cart_id,product_id,quantity) VALUES ('$cart_id','$product_id',$quantity)";
                    $result = $this->db->insert($query);
                }
            }
        return $result;
    }

    public function show_order(){
        $query = "SELECT tbl_cart.*, tbl_user.*
        FROM tbl_user, tbl_cart
        WHERE tbl_cart.user_phone = tbl_user.user_phone
        ORDER BY cart_id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function show_order_detail($cart_id_select){
        $query = "SELECT tbl_cart_details.*, tbl_product.*, tbl_cart.*, tbl_user.*
        FROM tbl_cart_details, tbl_product, tbl_cart, tbl_user
        WHERE tbl_cart_details.cart_id = '$cart_id_select' 
        AND tbl_cart_details.product_id = tbl_product.product_id
        AND tbl_cart.cart_id = '$cart_id_select' 
        AND tbl_cart.user_phone = tbl_user.user_phone
        ORDER BY cart_detail_id DESC";
        $result = $this->db->select($query);
        return $result;
    }


    public function insert_user() {
        $user_name = $_POST['user_name'];
        $user_phone = $_POST['user_phone'];
        $user_address = $_POST['user_address'];
        $query = "INSERT INTO tbl_user (
            user_name, 
            user_phone, 
            user_address )
            VALUES (
            '$user_name',
            '$user_phone',
            '$user_address')";
        $result = $this->db->insert($query);
        return $result;
    }


}

?>