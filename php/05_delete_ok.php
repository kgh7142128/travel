<?php
// echo $_POST['action'];
// echo $_POST['cID'];
if (isset($_POST['action']) && $_POST['action'] == 'del' ){
    include_once('./conn_obj.php');

    //預備語法    
    $sql = "DELETE FROM students WHERE cID=?";
    $stmt = $db_link->prepare($sql);
    $stmt -> bind_param('i',$_POST['cID']);
    //$check = $stmt -> execute();
    //顯示 1 表示刪除成功
    //print_r($check);
    if($stmt->execute()) {
        header("location:02_tableView.php");
    } else {
        echo "刪除資料失敗";
    }

    $stmt -> close();
    $db_link -> close();

} else {
         echo '請由表單操作';
}

//     $sql = "DELETE FROM students WHERE cID={$_POST['cID']}";
//     $result = $db_link->query($sql);
//     if ($result) {
//         //刪除成功
//         header("location:02_tableView.php");
//     } else {
//         echo "刪除資料失敗";
//     }
// } else {
//     echo '請由表單操作';
//}
?>
