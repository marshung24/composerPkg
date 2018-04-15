<?php
// 引入composer autoload
require_once "../vendor/autoload.php";

// 宣告使用類別 marshung\hello\HelloWorld
use marshung\hello\HelloWorld;

// 初始化類別-無參數
$obj = new HelloWorld();
// 執行問候
echo $obj->hello();
echo "\n";


// 初始化類別-有參數:Mars Hung
$obj = new HelloWorld('Mars Hung');
// 執行問候
echo $obj->hello();
