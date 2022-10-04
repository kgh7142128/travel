<?php
//判斷表單送過來
if( isset($_GET['action']) && $_GET['action'] == 'edit'){
    //更新資料   // echo "傳送成功";
    include_once('./conn_obj.php');
    $cID = $_GET['cID'];
    $cName = htmlspecialchars( $_GET['cName'],ENT_QUOTES);
    //ENT_COMPAT 預設 轉換雙引號都 不轉單引號
    //ENT_QUOTES 單雙引號不轉
    //ENT_NOQUOTES 不轉單雙引號
    $cSex = $_GET['cSex'];
    $cBirthday = $_GET['cBirthday'];
    $cEmail = $_GET['cEmail'];
    $cPhone = $_GET['cPhone'];
    $cAddr = $_GET['cAddr'];
    $cHeight = $_GET['cHeight'];
    $cWeight = $_GET['cWeight'];

    //預備語法
    $sql = "update students set 
    cName=?, 
    cSex=?,
    cBirthday=?,
    cEmail=?,
    cPhone=?,
    cAddr=?,
    cHeight=?,
    cWeight=?
    where cID=?";
    $stmt = $db_link->prepare($sql);
    $stmt -> bind_param(
                'ssssssiii',
                $cName,
                $cSex,
                $cBirthday,
                $cEmail,
                $cPhone,
                $cAddr,
                $cHeight,
                $cWeight,
                $cID
    );
    $stmt -> execute();
    $stmt -> close();
    $db_link -> close();
    header("location:02_tableView.php");

// //字串要在加 單引號或是雙引號
//     $sql = "update students set 
//     cName='{$cName}', 
//     cSex='{$cSex}',
//     cBirthday='{$cBirthday}',
//     cEmail='{$cEmail}',
//     cPhone='{$cPhone}',
//     cAddr='{$cAddr}',
//     cHeight={$cHeight},
//     cWeight={$cWeight}
//     where cID={$cID}";
//     $result = $db_link->query($sql);
//     // print_r($result);
//     header("location:02_tableView.php");
}
?>