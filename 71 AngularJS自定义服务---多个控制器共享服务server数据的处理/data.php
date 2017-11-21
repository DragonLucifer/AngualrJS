<?php
$data = [
    ['id'=>'1','name' => 'Baidu', 'url' => 'www.baidu.com'],
    ['id'=>'2','name' => 'Google', 'url' => 'www.google.com'],
];
echo json_encode($data,JSON_UNESCAPED_UNICODE);