<?php
include("aclass.php");
  
  $a = new A;
  $s = serialize($a);
  // �ѱ���$s���������Ա��ļ�page2.php�ܹ�����'
  file_put_contents('store', $s);
?>