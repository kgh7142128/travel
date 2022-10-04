<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>旅遊網站-加入會員</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>

    .table-add input{
       
        background-color: transparent;
        border: 1px transparent solid;
        border-bottom: 1px #e6007a solid;
        width: 120%;
    }
    .table-add tr{
        display: flex;
        flex-direction: column;
        margin: 15px 0px;
    }
    .table-add input:hover{
        
        border-bottom: 1px #e6007a solid;
       transform: scale(1.2);
   }
</style>
<body >

<div class="container py-3" >
    <h1 class="text-center fw-bold">加入會員</h1>

    <form action="./06_add_ok.php" method="get">
        <!-- 提供給 06_add_ok.php 加入前判斷用 -->
        <input type="hidden" name="action" value="add">
        
        <table class="table-add">
 
            <tr>
                <td>帳號(電子信箱)</td>
                <td><input type="email" name="cEmail" id="cEmail" placeholder="輸入Email" ></td>
            </tr>
            <tr>
                <td>密碼</td>
                <td><input type="password" name="login_password" id="cPhone" placeholder="輸入密碼" ></td>
            </tr>
            <tr>
                <td>姓名</td>
                <td><input type="text" name="cName" id="cName" placeholder="輸入姓名" required ></td>
            </tr>
            <tr>
                <td>生  日</td>
                <!-- required 必填 -->
                <td><input type="date" name="cBirthday" id="cBirthday" required></td>
            </tr>
            <tr>
                <td>住址</td>
                <td><input type="text" name="cAddr" id="cAddr" placeholder="輸入住址" ></td>
            </tr>
            <tr>
                <td>性  別</td>
                <td>
                    <label style="margin-right: 10px;"><input type="radio" name="cSex" value="F"
                    checked>女</label>
                    <label><input type="radio" name="cSex" value="M">男</label>
                </td>
            </tr>
            
        </table>
        <div class="text-center mt-3">
            <!-- <input type="hidden" name="action" value="add"> -->
            <input class="btn btn-warning" type="submit" value="送出" style="width: 30%;">
            <!-- <a class="btn btn-primary" href="02_tableView.php">回主畫面</a> -->
        </div>
    </form>



</div> 








<script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>



</body>
</html>