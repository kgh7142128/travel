<?php
//如果 $_GET['cID'] 不存在或是空 則網址轉到主畫面
if( !isset($_GET['cID']) or $_GET['cID'] == ""){
    header('location:02_tableView.php');
    exit();
}