<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>旅遊網站-登入會員</title>
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
<body>
<div class="container py-3">
    <h1 class="text-center fw-bold">會員登入</h1>

    <form action="./04_session_login_ok.php" method="post">
        <!-- <input type="hidden" name="action" value="add"> -->
        
        <table class="table-add">
        
            <tr>
                <td>帳號(電子信箱)</td>
                <td><input type="email" name="login_name" id="cEmail" placeholder="輸入Email" ></td>
            </tr>
            <tr>
                <td>密碼</td>
                <td><input type="password" name="login_password" id="cPhone" placeholder="輸入密碼" ></td>
            </tr>
            
            
        </table>
        <div class="text-center mt-3">
            <!-- <input type="hidden" name="action" value="add"> -->
            <input class="btn btn-warning" type="submit" value="登入" style="width: 30%;">
            <!-- <a class="btn btn-primary" href="02_tableView.php">回主畫面</a> -->
        </div>

    <!-- <form action="./04_session_login_ok.php" method="post">
        <p>使用者名稱: <input type="text" name="login_name" value="" placeholder="請填入帳號"></p> 
        <p>使用者帳號: <input type="password" name="login_password" value=""></p>
        <p><input type="submit" value="登入系統"></p> 
    </form> -->
</body>
</html>