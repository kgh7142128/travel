<?php
include_once('./getLocation.php');
$cID = $_GET['cID'];
//要開始撈取一個學生的資料
include_once('./conn_obj.php');

// //標準語法
// $sql = "select * from students where cID={$cID}";
// //上條程式碼 防止 SQL 注入攻擊 改寫 prepare 的語法
// $result = $db_link->query($sql);
// $row = $result->fetch_assoc();

// //預備語法 prepare 兩個變數這樣寫 
// $sql = "select * from students where cID=? and cBirthday=?";
// $stmt = $db_link->prepare($sql);
// $stmt -> bind_param('is', $cID, $cBirthday);
// //bind_param 代號 i代表整數 s代表字串 b是布林 d是浮點

//預備語法 prepare 
$sql = "select cID, cName, cSex, cBirthday, cEmail, cPhone, cAddr, cHeight, cWeight 
from students where cID=?";
//宣告stmt物件
$stmt = $db_link->prepare($sql);
//使用 -> 方法
$stmt -> bind_param('i', $cID);
//bind_param 代號 i代表整數 s代表字串 b是布林 d是浮點
$stmt -> execute();
//資料設定變數
$stmt -> bind_result($cID, $cName, $cSex, $cBirthday, $cEmail, $cPhone, $cAddr, $cHeight, $cWeight );
//成功為1 可做判斷
$stmt -> fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生系統-詳細資料</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container py-3">
        <h1 class="text-center fw-bold">會員資訊</h1>
        <?php 
            // echo $_GET['cID'];
        ?>
        <!-- 單一個用戶或學生的資料 -->
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
            <a class="btn btn-primary" href="./02_tableView.php">回主畫面</a>
        </div>  
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
            crossorigin="anonymous">
    </script>
</body>
</html>

<?php 
//關閉 prepare
$stmt -> close();
//關閉連線
$db_link -> close();
?>