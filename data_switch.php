<?php

require __DIR__. '/__connect_db.php';

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;

$pdo->query("UPDATE `member` SET `m_active`=NOT m_active WHERE `m_sid` =$sid");

$goto = 'data_list4  .php'; // 預設值

$page=$_GET['page'];

$perPage=$_GET['perPage'];

$city=$_GET['city'];


$city=$_GET['city'];

$keyword =$_GET['keyword'];

// $sortway=$_GET['sortway'];

$temp = explode("#",$_SERVER['HTTP_REFERER'])[0];

echo $temp;

echo "<br>";

$url=$temp."#".$page."&perPage=".$perPage."&city=".$city."&keyword=".$keyword;

 echo $url;

if(isset($_SERVER['HTTP_REFERER'])){
    
    $goto = $url;
}

header("Location: $goto");

