<?php
    //包含吃料庫與連線設定一起
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "school_2022";


    $db_link = @new mysqli($db_host, $db_username, $db_password, $db_name);
    //$db_link = new mysqli("localhost", "school_2022", "1234");
    //new mysqli(主機:port, 使用者名稱, 密碼)

    if($db_link->connect_error !=""){
        echo "資料庫連結失敗";
    }else{
        //成功連結 設定資料庫編碼字元集
        $db_link->query("SET NAMES 'utf8'");
        // echo "ok";
    }

?>