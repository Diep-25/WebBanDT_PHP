<?php
 session_start();
 if(!isset($_SESSION['dangnhap'])){
 	header('Location:login.php');
 } 
?>
<?php
include "menu.php";

?> 

<div class="main_bot">
            <h1>Chào Mừng Bạn Đến Với Trang Admin</h1>
        </div>

<?php
include "footer.php";
?>        