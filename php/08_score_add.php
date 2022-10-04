<!-- 如果有action add 就 插入資料，並轉址到首頁 -->
<?php
if (isset($_GET['action']) && $_GET['action'] == 'add' ){
    $cID = $_GET['cID'];
    $course = $_GET['course'];
    $score = $_GET['score'];
    include_once('./conn_obj.php');
    $sql = "insert into scorelist (cID, course, score) 
        values ({$cID}, '{$course}', {$score})";
    $result = $db_link->query($sql);
    if ($result) {
        header("location:07_score.php");
        exit();
    } else {
        echo '插入資料失敗';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BS css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>分數系統-新增</title>
</head>
<body>
<div class="container py-3">
        <h1 class="text-center">分數系統-新增</h1>

        <form action="" method="get">
            <table>
                <tr>
                    <td>座號</td>
                    <td><input type="text" name="cID" id="cID"
                    required></td>
                </tr>
                <tr>
                    <td>科目</td>
                    <td>
                        <select name="course" id="course">
                            <option value="">請選擇</option>
                            <option value="國文">國文</option>
                            <option value="英文">英文</option>
                            <option value="數學">數學</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>分數</td>
                    <td><input type="number" name="score" id="score"></td>
                </tr> 
            </table>
            <div class="text-center">
                <input name="action" type="hidden" value="add">
                <input class="btn m-2 btn-primary" type="submit" value="新增">
                <a href="./07_score.php" class="btn m-2 btn-primary">回主畫面</a>
            </div>
        </form>
</div>




 <!-- Bootstrap Budle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>