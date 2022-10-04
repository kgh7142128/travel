<?php
session_start(); //絕對必要
unset( $_SESSION['login_name'] );
unset( $_SESSION['login_type'] );
echo 'session 已經刪除，您已經登出' . "<br>";
?>
<a href="./04_session_login.php">我要重新登入</a>
