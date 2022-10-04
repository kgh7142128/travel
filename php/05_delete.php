<?php
//如果 $_GET['cID'] 不存在或是空 則網址轉到主畫面
include_once('./getLocation.php');
$cID = $_GET['cID'];
//要開始撈取一個學生的資料
include_once('./conn_obj.php');
$sql = "select cID, cName, cSex, cBirthday, cEmail, cPhone, cAddr, cHeight, cWeight  
from students where cID=?";

$stmt = $db_link->prepare($sql);
$stmt->bind_param('i', $cID);
$stmt->execute();
$stmt->bind_result($cID, $cName, $cSex, $cBirthday, $cEmail, $cPhone, $cAddr, $cHeight, $cWeight);
$stmt->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生系統-刪除資料</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container py-3">
        <h1 class="text-center fw-bold">刪除系統</h1>
        <!-- <p>單一個用戶或學生的資料</p> -->

    <table class="table">
        <tr>
            <td>姓名</td>
            <td><?php echo $cName; ?></td>
        </tr>
        <tr>
            <td>性別</td>
            <td><?php echo $cSex; ?></td>
        </tr>
        <tr>
            <td>生日</td>
            <td><?php echo $cBirthday; ?></td>
        </tr>
        <tr>
            <td>電子信箱</td>
            <td><?php echo $cEmail; ?></td>
        </tr>
        <tr>
            <td>密碼</td>
            <td><?php echo $cPhone; ?></td>
        </tr>
        <tr>
            <td>住址</td>
            <td><?php echo $cAddr; ?></td>
        </tr>
    </table>
    <div class="text-center">
        <!-- 方法1.使用網址 會直接被看到，接收用 $_GET -->
        <!-- <a class="btn btn-danger" href="./05_delete_ok.php?action=delcID=<?php 
       // echo $cID ?>">確定刪除</a> --> 
        <!-- <a class="btn btn-primary" href="./02_tableView.php">回主畫面</a> -->

        <!-- 方法2.使用form PST 部會在網址被看到，接收用 $_POST -->
        <form action="./05_delete_ok.php" method="post">
            <input type="hidden" name="action" value="del">
            <input type="hidden" name="cID" value="<?php echo $cID; ?>">
            <div class="text-center">
                <input class="btn btn-danger" type="submit" value="確定刪除">
                <a class="btn btn-primary" href="./02_tableView.php">回主畫面</a>
            </div>
        </form>


        
    </div>  
    </div> 








    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>



</body>
</html>