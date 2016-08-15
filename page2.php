<?php
include("aclass.php");

  $s = file_get_contents('store');
  $a = unserialize($s);

  // 现在可以使用对象$a里面的函数 show_one()
  $a->show_one();
?>