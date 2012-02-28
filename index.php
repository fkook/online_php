<?php
/**
 * 应用入口文件
 * @copyright   Copyright(c) 2012
 * @author      fkook
 * @version     1.0
 */
header("Content-type:text/html;charset=utf-8");
define('ROOT_PATH', str_replace('\\','/',dirname(__FILE__)));

//define('INDEX_PATH', dirname(__FILE__));
define('ONLINE_PATH', ROOT_PATH.'/online/');


require ONLINE_PATH.'/init.php';

$control = new Controller();

$control -> run();

?>