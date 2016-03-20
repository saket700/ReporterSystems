<?php
$a1=mysql_connect('localhost','root1','oec@123');
$b1=mysql_select_db('rms',$a1);
$bn=$_REQUEST['no1'];
$sql='DELETE FROM create_branch WHERE branch="'.$bn.'" ';
$s1=mysql_query($sql,$a1) or die(mysql_error());
echo $sql;
if($s1)
 {
	 $sql2='DELETE FROM admin_user where branch="'.$bn.'"';
	 $s2=mysql_query($sql2,$a1)  or die(mysql_error());
	 if($s2)
	 	{
			$sql3='DELETE FROM reporter where branch="'.$bn.'"';
	        $s3=mysql_query($sql3,$a1)  or die(mysql_error());
 		}
 }
mysql_close($a1);
header('Location: branch.php');
?> 