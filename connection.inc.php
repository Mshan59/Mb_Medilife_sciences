<?php
session_start();
$conn=mysqli_connect("localhost","root","","life_admin");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/mblife/');
define('SITE_PATH','http://www.mbmedilife.com/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');

// mysqli_query($conn,"update web_unique_visitors set total_count=total_count+1");

if(!isset($_COOKIE['web_unique_visitors'])){
    setCookie('web_unique_visitors','yes',time()+(60*60*24));
    mysqli_query($conn,"update web_unique_visitors set total_count=total_count+1");
}
?>