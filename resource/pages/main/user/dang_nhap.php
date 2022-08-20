<?php 
include "headeruser.php";
include "../class/users_class.php";
?>

<?php
$users = new users;
// $show_users = $users -> show_users();
if(isset($_POST['user_email'])){
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    // if($show_users){
    //     $result = $show_users -> fetch_assoc();
    //     // var_dump($user_email);
    // }
}

?>




<style>
    .has_err {
        color: red;
    }
</style>

       <div class="users-log">
        <div class="container">
            <div class="row">
            <div class="dang_ky">
                <h1>Đăng nhập</h1>
                <form action="" method="POST" role="form"> 
                    <input name="user_email"  type="text" placeholder="Nhập email">
                    <!-- <div class="has_err">
                        <span><?php echo (isset($err['user_email']))?$err['user_email']:'' ?></span>
                    </div> -->
                    <input name="user_password"  type="text" placeholder="Nhập mật khẩu">
                    <!-- <div class="has_err">
                        <span><?php echo (isset($err['user_password']))?$err['user_password']:'' ?></span>
                    </div> -->
                    <div class="button_log row">
                    <button type="submit">Đăng nhập</button>
                    <button>Quay lại</button>
                    </div>
                </form>
            </div>
            </div>
            </div> 
            </div>
<?php 
include "footer.php";
?>