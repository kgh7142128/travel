<?php
include_once("conn_obj.php");

//預備語法
$sql = "select cID, cName, cSex, cBirthday, cEmail, cPhone, cAddr, cHeight, cWeight  
from students ";
$stmt = $db_link -> prepare($sql);
//沒有傳遞變數不需要 bind_param()
$stmt -> execute();
//儲存結果 (取得筆數會用到)
$stmt -> store_result();
//綁定整數 用於顯示
$stmt -> bind_result( $cID, $cName, $cSex, $cBirthday, $cEmail, $cPhone, $cAddr, 
$cHeight, $cWeight);

// $sql = "select * from students";
// $result = $db_link->query($sql);
// //total_rows 代表總筆數
// $total_rows = $result->num_rows;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BS css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>會員登入</title>
</head>
<body>
    <div class="container py-3">
        <h1 class="text-center">會員資訊</h1>
        <h5 class="text-center">
            <?php echo "查詢目前會員總數: ".$stmt->num_rows. "位"; ?>
            <a href="./06_add.php" class="btn btn-sm btn-warning" style="margin-left: 10px;">新增</a>
            <!-- <a href="./07_score.php" class="btn btn-sm btn-info">分數登入系統</a> -->
        </h5>
            
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <!-- <th>座號</th> -->
                <th>姓名</th>
                <th>稱謂</th>
                <th>生日</th>
                <th>修改</th>
            </tr>

            <!-- php 資料讀出迴圈start -->
            <?php 
                $num = 1;
                while($stmt->fetch()){     
            ?>
            <tr>
                <td><?php echo $num; ?></td>
                <!-- <td> <?php echo "22A_" . $cID; ?> </td> -->
                <td><?php echo $cName; ?></td>
                <td><?php
                if($cSex == 'F'){
                    echo "小姐";
                }else{
                    echo "先生";
                } 
                ?></td>
                <td><?php echo $cBirthday; ?></td>
                <td><a href="./03_detail.php?cID=<?php echo $cID; ?>" class="btn btn-primary btn-sm">詳細</a></td>
                <td><a href="./04_edit.php?cID=<?php echo $cID; ?>" class="btn btn-success btn-sm">編輯</a></td>
                <td><a href="./05_delete.php?cID=<?php echo $cID; ?>" class="btn btn-danger btn-sm">刪除</a></td>
            </tr>
            <?php $num++; } ?>
            <!-- php 資料讀出迴圈end -->
        </table>
    </div>
    <!-- Bootstrap Budle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

<?php 
//關閉 prepare
$stmt -> close();
//關閉連線
$db_link -> close();
?>