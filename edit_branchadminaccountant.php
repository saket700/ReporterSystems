<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Reporter Management System - Start Bootstrap Theme</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/business-casual.css" rel="stylesheet">
<!-- Fonts -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
</head>

<body>
<div class="brand">Reporter Management System</div>
<div class="address-bar">Print Media | A Samaj Initiative | 2015</div>

<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation">
<div class="container">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
<a class="navbar-brand" href="index.html">Business Casual</a>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li><a href="branchadmin.php">Home</a></li>
<li><a href="branchadmin_reporter.php">Reporters</a></li>
<li><a href="branchadmin_accountant.php">Accountant</a></li>
<li><a href="branchadmin_createUser.php">Add user</a></li>
<li><a href="logout.php">Log Out</a></li>
</ul>
</div>
<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>

<div class="container">
<div class="row">
<div class="box">
<div class="col-lg-12 text-center">
<div id="carousel-example-generic" class="carousel slide">
<!-- Indicators -->
<ol class="carousel-indicators hidden-xs">
<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
<li data-target="#carousel-example-generic" data-slide-to="1"></li>
<li data-target="#carousel-example-generic" data-slide-to="2"></li>
</ol>
<!-- Wrapper for slides -->
<div class="carousel-inner">
<div class="item active">
<img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
</div>
<div class="item">
<img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
</div>
<div class="item">
<img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
</div>
</div>

<!-- Controls -->
<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
</a>
</div>
<h2 class="brand-before">
<small>Welcome to</small>
</h2>
<h1 class="brand-name">The Samaj</h1>
<hr class="tagline-divider">
<h2>
<small><strong></strong></small>
</h2>
</div>
</div>
</div>
<div class="row">
<div class="box">
<div class="col-lg-12"><hr>
<h2 class="intro-text text-center">BRANCH
<strong></strong>
</h2>
<hr>
 
 
<?php
$a1=mysql_connect('localhost','root1','oec@123');
$b1=mysql_select_db('rms',$a1);
$sn=$_REQUEST['hidden'];
$n=$_REQUEST['name'];
$cn=$_REQUEST['company_name'];
$em=$_REQUEST['email_id'];
$ph=$_REQUEST['phone'];
$p=$_REQUEST['password'];
$cp=$_REQUEST['confirm_password'];
$gid=$_REQUEST['group_id'];
$bid=$_REQUEST['branch_id'];
if($p!=$cp)
{
	echo "<script>alert(' password do not match')</script>" ;
	exit(0);
}
else
{
	$w1= 'SELECT `group` a,branch,email_id,name,Sl_no,phone FROM admin_user;';
	$recordset=mysql_query($w1,$a1) or die(mysql_error());
	$totalrows=mysql_num_rows($recordset);
	$row_recordset=mysql_fetch_assoc($recordset);
	if($totalrows>0)
	{
		do
		{
	
	
	
			$gid1=$row_recordset['a'];
			$bid1=$row_recordset['branch'];
			$r=$row_recordset['Sl_no'];
	        $n1= $row_recordset['name'];
	        $em1= $row_recordset['email_id'];
	        $ph1=$row_recordset['phone'];
			
	
	
			if ( $n==$n1 && $em==$em1 && $bid==$bid1 && $gid==$gid1 )
			{ 
				echo "user already exist";
				exit(0);
     		}
			
	
		$w= 'UPDATE  admin_user SET name="'.$n.'", company_name="'.$cn.'", email_id="'.$em.'", `group`="'.$gid.'", branch="'.$bid.'", phone="'.$ph.'",  password="'.$p.'", confirm_password="'.$cp.'"  where Sl_no="'.$sn.'";';
		//echo $w;
		$x=mysql_query($w,$a1) or die(mysql_error());
		if($x)
		{
    		header('Location: branchadmin_accountant.php');
		}
		else
		{
			echo "fail to create user";
		}
		
	
		} while($row_recordset=mysql_fetch_assoc($recordset));
	}
else
{
		$w= 'INSERT INTO admin_user( name, company_name, email_id, `group`, branch, phone,  password, confirm_password) 		
				VALUES ("'.$n.'","'.$cn.'","'.$em.'","'.$gid.'","'.$bid.'","'.$ph.'","'.$p.'","'.$cp.'");';
		//echo $w;
		$x=mysql_query($w,$a1) or die(mysql_error());
		if($x)
		{
    		header('Location: branchadmin_accountant.php');
		}
		else
		{
			echo "fail to create user";
		}	
}
	
mysql_close($a1);
}


?>
<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Reporter Management System 2015</p>
                </div>
            </div>
        </div>
    </footer>
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
interval: 5000 //changes the speed
})
</script>

</body>

</html>
