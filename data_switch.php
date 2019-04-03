<?php

require __DIR__. '/__connect_db.php';

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;

$pdo->query("UPDATE `member` SET `m_active`=NOT m_active WHERE `m_sid` =$sid");

$goto = 'data_list4  .php'; // 預設值

$page=$_GET['page'];

$perPage=$_GET['perPage'];

$temp = explode("#",$_SERVER['HTTP_REFERER'])[0];

$url=$temp."#".$page."&perPage=".$perPage;

if(isset($_SERVER['HTTP_REFERER'])){
    
    $goto = $url;
}

header("Location: $goto");

