<?php
include_once("conn_obj.php");
//需要資料庫
$sql = "SELECT * FROM students";
$result = $db_link->query($sql);
//print_r($result);
// fetch _row 整數索引 _assoc欄位名為索引 _array 整數與欄位名
while ($row_result = $result->fetch_assoc()) {
    //foreach 將陣列以 鍵=>值 方式儲存 建立
    foreach($row_result as $item => $value){
        echo $item . "=" . $value . "<br>";
    }
    echo "<hr>";
}