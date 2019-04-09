<pre>
<?php
    $a = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'];
?>
<!-- <a href="<?=$a?>"> home </a>  <a href="<?=$a?>/trustedweb/product/one/"> one index </a>  <a href="<?=$a?>/trustedweb/product/one/one.php"> one.php </a>  <a href="<?=$a?>/trustedweb/product/two/"> two index </a> <a href="<?=$a?>/trustedweb/product/two/two.php"> two.php </a>   -->

<a href="<?=$a?>"> home </a>  <a href="<?=$a?>/product/one/"> one index </a>  <a href="<?=$a?>/product/one/one.php"> one.php </a>  <a href="<?=$a?>/product/two/"> two index </a> <a href="<?=$a?>/product/two/two.php"> two.php </a>  



<?php


echo __FILE__;
echo "<br>";
echo "<br>";
echo "<br>";


echo __DIR__;
echo "<br>";
echo "<br>";
echo "<br>";


echo __LINE__;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";