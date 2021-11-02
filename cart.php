<?php
ob_start();
include("header.php");
count($product->getData('cart'))?include('Template/_cart.php'): include ('Template/notFound/_cart_notfound.php');
count($product->getData('wishlist'))?include('Template/_wishlist.php'): include ('Template/notFound/_wish_notfound.php');
include("./Template/new-phones.php");
include("footer.php");

?>
