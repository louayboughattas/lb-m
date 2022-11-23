<?php
session_start();
$con=mysqli_connect("localhost","phpmyadmin","kali","ecom3");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'ecom3/');
define('SITE_PATH','http://145.14.158.58/media/product/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>