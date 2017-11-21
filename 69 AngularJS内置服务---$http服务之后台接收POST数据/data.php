<?php
// 方式一 index.html
$content=file_get_contents('php://input');
print_r($_POST);
print_r(json_decode($content,true));

// 方式二 index_jQuery.html
print_r($_POST);