<?php
require __DIR__ . '/parts/connect_db.php';

$postData = [
    'member_sid'=>3,
    'categories_sid' => 2,
    'title' => '從善出發的膳食網',
    'img' => 'https://pgw.udn.com.tw/gw/photo.php?u=https://uc.udn.com.tw/photo/2022/05/19/0/17096139.jpg&x=0&y=0&sw=0&sh=0&sl=W&fw=1050, https://pgw.udn.com.tw/gw/photo.php?u=https://uc.udn.com.tw/photo/2022/05/19/0/17061020.jpg&x=0&y=0&sw=0&sh=0&sl=W&fw=1050',
    'content' => '來自台東的火龍果、嘉義的芒果、南投的菜豆乾...這些都是農友在惜食行善網「農產品公平交易平台」裡上架的商品，利用線上交易形式，讓農民可以創造專屬的網路商場，而在平台上的交易不受大盤控制，也能販賣格外農品。',
    'hashtage'=>'格外農品,農友,有機蔬果',
    
];

$sql = "INSERT INTO `post` (`member_sid`, `categories_sid`, `title`,  `img`, `content`, `hashtag`, `creat_at`) 
VALUES (?,?,?,?,?,?,NOW() )";



$stmt = $pdo->prepare($sql);

$stmt->execute([
    $postData['member_sid'],
    $postData['categories_sid'],
    $postData['title'],
    $postData['img'],
    $postData['content'],
    $postData['hashtage'],
    
]);

echo $stmt->rowCount();
