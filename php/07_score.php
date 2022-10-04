<?php
include_once("conn_obj.php");
$sql = "select * from scorelist";
$result = $db_link->query($sql);
//total_rows 代表總筆數
$total_rows = $result->num_rows;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BS css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>分數系統</title>
</head>
<body>
    <div class="container py-3">
        <h1 class="text-center">分數系統</h1>
        <h5 class="text-center">
            <?php
            include_once('./conn_obj.php');
            $sql = "SELECT * FROM scorelist";
            $result = $db_link->query($sql);
            echo "查詢目前學生總比數: ".$total_rows. "筆"; 
            ?>
            <a href="./08_score_add.php" class="btn btn-sm btn-warning">新增</a>
            <a href="./02_tableView.php" class="btn btn-sm btn-info">返回學生資料系統</a>
        </h5>
            
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>座號</th>
                <th>科目</th>
                <th>成績</th>
                <th>編輯</th>
            </tr>
            <?php
            $i = 1;
            while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $i;
                        $i++; ?></td>
                <td><?php echo $row['cID']; ?></td>
                <td><?php echo $row['course']; ?></td>
                <td><?php echo $row['score']; ?></td>
                <td>
                    <a href="./09_score_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success btn-sm">編輯</a>
                    <a href="./10_score_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger btn-sm">刪除</a>
                </td>
            </tr>
            <?php } ?>
            <!-- php 資料讀出迴圈start --> 
        </table>
    </div>
    <!-- Bootstrap Budle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>