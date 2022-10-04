<?php
// 新增不會填寫 $cID=$_GET['cID'];
if (isset($_GET['action']) && $_GET['action'] == 'add'){
    // $action = $_GET['action'];
    
    $cEmail = $_GET['cEmail'];
    $cPhone = $_GET['login_password'];
    $cName = $_GET['cName'];
    $cBirthday = $_GET['cBirthday'];
    $cAddr = $_GET['cAddr'];
    $cSex = $_GET['cSex'];
    // echo $cPhone;
    // $cHeight = $_GET['cHeight'];
    // $cWeight = $_GET['cWeight'];
    //加入資料庫連線
    include_once('./conn_obj.php');

    //新增資料
    $sql="INSERT INTO students (
        cEmail,
        cPhone,
        cName,
        cBirthday,
        cAddr,
        cSex
           
    ) VALUES ( ?,?,?,?,?,? )";

    $stmt = $db_link->prepare($sql);
    $stmt -> bind_param(
                'ssssss',
                $cEmail,
                $cPhone,
                $cName,
                $cBirthday,
                $cAddr,
                $cSex
                
    );
    $stmt -> execute();

    header("location:./log/04_session_login.php");
    $stmt -> close();
    $db_link -> close();
}else {
     //錯誤訊息
     echo '請由表單填寫送出';
}
//     //新增資料
//     $sql="INSERT INTO students (
//         cName,
//         cSex,
//         cBirthday,
//         cEmail,
//         cPhone,
//         cAddr,
//         cHeight,
//         cWeight
//     ) VALUES (
//         '{$cName}',
//         '{$cSex}',
//         '{$cBirthday}',
//         '{$cEmail}',
//         '{$cPhone}',
//         '{$cAddr}',
//         {$cHeight},
//         {$cWeight}
//     )";
//     $result = $db_link->query($sql);
//     print_r($result);
//     if ($result){
//         header("location:02_tableView.php");
//     } else {
//         echo "資料寫入錯誤";
//     }
//     //轉至主畫面
// } else {
//     //錯誤訊息
//     echo '請由表單填寫送出';
// }
?>