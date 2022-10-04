<?php
//判斷 $_GET['id']
if (!isset($_GET['id']) && $_GET['id'] == '' ){
    header("location:07_score.php");
    
}
//設定變數
$id = $_GET['id'];
//判斷是否送出刪除按鈕  有的話進行刪除資料
if(isset($_GET['action']) && $_GET['action']='del'){
    include_once('./conn_obj.php');
    $sql = "delete from scorelist where id={$id}";
    $result = $db_link->query($sql);
    //print_r($result);
    if($result){
        //刪除成功
        header('location:07_score.php');
    }else{
        echo '刪除資料失敗';
    }
}else{
    //不做任何動作，往下執行

}


//顯示 $_GET['id']所有資料
include_once('./conn_obj.php');
$sql = "select * from scorelist where id={$id}";
$result = $db_link->query($sql);
//print_r($result);
$row = $result->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BS css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>分數刪除系統</title>
</head>
<body>
<div class="container py-3">
        <h1 class="text-center">分數刪除系統</h1>

        <table >
            <tr >
                <td>編號:<?php echo $row['id']; ?></td>
            </tr>
            <tr>
                <td>座號:<?php echo $row['cID']; ?></td>
            </tr>
            <tr>
                <td>科目:<?php echo $row['course']; ?></td>
            </tr>
            <tr>
                <td>分數:<?php echo $row['score']; ?></td>
            </tr>
        </table>


        <h5 class="text-center">
            <a href="./10_score_delete.php?action=del&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger">確定刪除</a>
            <a href="./07_score.php" class="btn btn-sm btn-info">回主畫面</a>
        </h5>
    </div>
 <!-- Bootstrap Budle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>