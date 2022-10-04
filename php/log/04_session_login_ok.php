<?php
session_start(); //絕對必要
include('conn_obj.php');
// 若無輸入顯示 請輸入帳號密碼
if($_POST['login_name'] == '' || $_POST["login_password"] == ''){
   echo ('請輸入帳號密碼');
   echo '<br><a href="./04_session_login.php">返回登入頁面</a>';
}
// 登入成功判斷
if(!empty($_POST['login_name'])){
   $username=$_POST["login_name"];
   $password=$_POST["login_password"];
   $sql = "SELECT * FROM students WHERE cEmail = '$username' && cPhone = '$password' ";
   // echo($sql);
   $ro = mysqli_query($db_link,$sql);
   // echo($ro);
   $row = mysqli_fetch_assoc($ro);
   $total = mysqli_num_rows($ro);
   
   if($total==1){
      echo "登入成功!";
      $_SESSION['cName']=$row['cName'];
      $_SESSION['cSex']=$row['cSex'];
      $_SESSION['cBirthday']=$row['cBirthday'];
      $_SESSION['cEmail']=$row['cEmail'];
      $_SESSION['cPhone']=$row['cPhone'];
      $_SESSION['cAddr']=$row['cAddr'];
      header('location:../02_tableView.php');
   }else{
      echo "帳密錯誤!";
   }
}
?>
