<?php
include("aclass.php");

  $s = file_get_contents('store');
  $a = unserialize($s);

  // ���ڿ���ʹ�ö���$a����ĺ��� show_one()
  $a->show_one();
?>