<?php
$data = [
    ['name' => 'Baidu', 'url' => 'www.baidu.com'],
    ['name' => 'Google', 'url' => 'www.google.com'],
];
echo json_encode($data,JSON_UNESCAPED_UNICODE);