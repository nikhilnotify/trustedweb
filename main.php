<pre>
<?php
    $a = $_SERVER['REQUEST_SCHEME'] . 's://' . $_SERVER['SERVER_NAME'];
?>
<!-- <a href="<?=$a?>"> home </a>  <a href="<?=$a?>/trustedweb/product/one/"> one index </a>  <a href="<?=$a?>/trustedweb/product/one/one.php"> one.php </a>  <a href="<?=$a?>/trustedweb/product/two/"> two index </a> <a href="<?=$a?>/trustedweb/product/two/two.php"> two.php </a>   -->

<a href="<?=$a?>"> home </a>  <a href="<?=$a?>/product/one/"> one index </a>  <a href="<?=$a?>/product/one/one.php"> one.php </a>  <a href="<?=$a?>/product/two/"> two index </a> <a href="<?=$a?>/product/two/two.php"> two.php </a>  



<h1><?=$_SERVER['QUERY_STRING']?></h1>