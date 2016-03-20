<?php
$cn=mysql_connect('localhost','root1',"oec@123");
$db_selected=mysql_select_db('rms',$cn);
$bn=$_REQUEST['no1'];
$sql='DELETE FROM admin_user WHERE Sl_no="'.$bn.'" ';
$s1=mysql_query($sql,$cn);
mysql_close($cn);
header('Location: branchadmin_accountant.php');
?>
