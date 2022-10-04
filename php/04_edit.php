<?php
//如果 $_GET['cID'] 不存在或是空 則網址轉到主畫面
include_once('./getLocation.php');
//連結資料庫
include_once('./conn_obj.php');
$cID = $_GET['cID'];
// $sql = "select * from students where cID = {$cID}";
// $result = $db_link->query($sql);
// $row = $result->fetch_assoc();

$sql = "select cID, cName, cSex, cBirthday, cEmail, cPhone, cAddr, cHeight, cWeight 
from students where cID=?";
$stmt = $db_link->prepare($sql);
$stmt -> bind_param('i', $cID);
$stmt -> execute();
$stmt -> bind_result($cID, $cName, $cSex, $cBirthday, $cEmail, $cPhone, $cAddr, $cHeight, $cWeight );
$stmt -> fetch();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生系統-編輯資料</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container py-3">
    <h1 class="text-center fw-bold">編輯系統</h1>

    <form action="./04_editOK.php" method="get" >
        <table>
            <tr>
            <input type="hidden" name="cID" value="<?php echo $cID; ?>">
            <input type="hidden" name="action" value="edit">
            <tr>
                <td>姓名</td>
                <td><input type="text" name="cName" id="cName" value="<?php echo $cName; ?>"></td>
            </tr>
            <tr>
                <td>性別</td>
                <td>
                    <label><input type="radio" name="cSex" value="F" 
                        <?php if($cSex == 'M'){
                            echo 'checked';
                        } ?>>小姐</label>
                    <label><input type="radio" name="cSex" value="M" 
                        <?php if($cSex == 'F'){
                            echo 'checked';
                        } ?>>先生</label>
                </td>
            </tr>
            <tr>
                <td>生日</td>
                <td><input type="date" name="cBirthday" id="cBirthday" value="<?php echo $cBirthday; ?>"></td>
            </tr>
            </tr>
            <tr>
                <td>電子信箱</td>
                <td><input type="email" name="cEmail" id="cEmail" value="<?php echo $cEmail; ?>"></td>
            </tr>
            <tr>
                <td>密碼</td>
                <td><input type="text" name="cPhone" id="cPhone" value="<?php echo $cPhone; ?>"></td>
            </tr>
            <tr>
                <td>住址</td>
                <td><input type="text" name="cAddr" id="cAddr" value="<?php echo $cAddr; ?>"></td>
            </tr>
        </table>
        
        <input type="submit" value="更新資料">               
        <input type="reset" value="重新填寫">               
    </form>



</div> 








<script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>



</body>
</html>