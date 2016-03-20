<?php
$a1=mysql_connect('localhost','root1','oec@123');
$b1=mysql_select_db('rms',$a1);
$bn=$_REQUEST['no1'];
$w='SELECT `group`,email_id FROM admin_user WHERE Sl_no="'.$bn.'"';
$recordset=mysql_query($w,$a1) or die(mysql_error());
$totalrows=mysql_num_rows($recordset);
$row_recordset=mysql_fetch_assoc($recordset);
if($totalrows>0)
{
	do
	{
		$k=$row_recordset['group'];
		$em=$row_recordset['email_id'];
		if($k=='reporter')
		{
			$w1='SELECT * FROM reporter WHERE email_id="'.$em.'"';
			$recordset1=mysql_query($w1,$a1) or die(mysql_error());
			$totalrows1=mysql_num_rows($recordset1);
			$row_recordset1=mysql_fetch_assoc($recordset1);
			if($totalrows1>0)	
			{
					$w2='DELETE FROM reporter WHERE email_id="'.$em.'"';	
			        $recordset2=mysql_query($w2,$a1) or die(mysql_error());
		    }
		}
	}while($row_recordset=mysql_fetch_assoc($recordset));

$sql='DELETE FROM admin_user WHERE Sl_no="'.$bn.'" ';
$s1=mysql_query($sql,$a1) or die(mysql_error());
}
mysql_close($a1);
header('Location: admin.php');
?>
