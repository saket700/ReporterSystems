<?php
$cn=mysql_connect('localhost','root1',"oec@123");
$db_selected=mysql_select_db('rms',$cn);
$bn=$_REQUEST['no1'];
$sql='DELETE FROM reporter WHERE email_id="'.$bn.'" ';
$s1=mysql_query($sql,$cn);
if($s1)
 {
	 $sql1='DELETE FROM admin_user WHERE email_id="'.$bn.'" ';
	$s2=mysql_query($sql1,$cn);
 }
mysql_close($cn);
header('Location: branchadmin_reporter1.php');
?>
