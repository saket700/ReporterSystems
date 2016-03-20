<?php 
$a1=mysql_connect('localhost','root1','oec@123');
$b1=mysql_select_db('rms',$a1);
$sub=$_REQUEST['hidden'];
$pay=$_REQUEST['payment'];

$w= 'UPDATE reporter SET payment="'.$pay.'"  WHERE subject="'.$sub.'";';
		//echo $w;
		$x=mysql_query($w,$a1) or die(mysql_error());
		if($x)
		{
    		header('Location: accounts.php');
		}
?>		