<?php
session_start(); //絕對必要

//顯示使用這與管理者差異的選單
if( isset($_SESSION['login_type']) && $_SESSION['login_type'] == 'user'){
    echo $_SESSION['login_name'] . '<br>';
    echo $_SESSION['login_type'] . '<br>';
?>
 
<p>會員資料 | 購物車 | 查詢</p>

<?php 
} else if( isset($_SESSION['login_type']) && $_SESSION['login_type'] == 'admin' )
{
    echo $_SESSION['login_name'] . '<br>';
    echo $_SESSION['login_type'] . '<br>';
?>

<p>會員資料 | 購物車 | 查詢 | 後台更新 | 刪除會員</p>
<a href="./04_session_unset.php">登出</a>

<?php 
} else {
    echo '您沒有登入';
}?>
