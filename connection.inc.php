<?php
session_start();
$conn=mysqli_connect("localhost","root","","life_admin");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/mblife/');
define('SITE_PATH','http://127.0.0.1/mblife/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>