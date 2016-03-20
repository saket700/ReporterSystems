<?php
$a1=mysql_connect('localhost','root1','oec@123');
$b1=mysql_select_db('rms',$a1);
?> 
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
<li><a href="admin.php">Home</a></li>
<li><a href="branch.php">Branch</a></li>
<li><a href="admin_branchadmin.php">Branch Admin</a></li>
<li><a href="reporteradmin.php">Reporters</a></li>
<li><a href="admin_accountant.php">Accountant</a></li>
<li><a href="setting.php">Settings</a></li>
<li><a href="logout.php">Log out</a></li>
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
<h2 class="intro-text text-center">ADMIN
<strong></strong>
</h2>
<hr>
<form  role="form"  action ="search_accountant.php" method="post">
 
 
<div class="form-group col-lg-4"><p>
  <label for="select"> Select A Branch:</label><br><br>
  <select  name="branch_id" class="form-control" data-placeholder="Choose a Group..." required>
  <option value="0">Choose Branch.... </option>
  <?php
  

$w1='SELECT branch FROM create_branch ' ;
$recordset1=mysql_query($w1,$a1) or die(mysql_error());

$totalrows1=mysql_num_rows($recordset1);
$row_recordset1=mysql_fetch_assoc($recordset1);
if($totalrows1>0)
{
do
{
	$b=$row_recordset1['branch'];
	?>
  
  <option value="<?php echo $b;?>"><?php echo $b;?> </option>
  <?php    
}while($row_recordset1=mysql_fetch_assoc($recordset1));
}
mysql_free_result($recordset1);
?>
</select></p></div>
<br><br><br>
<input type="submit"  class="btn btn-default" value="Search" >
</form>
  



<table id="sample-table" class="table table-hover table-bordered tablesorter">
<thead>
<tr>
<th>Sl no</th>
<th>Name</th>
<th>Email ID</th>
<th>Phone</th>
<th>Branch</th>



</tr>
<?php
$startrow=0;;
if (!isset($_GET['startrow'])){ //or !is_numeric($_GET['startrow'])) {
	$startrow = 0;
}
 else {
  $startrow = (int)$_GET['startrow'];}

	 
	
//$start = $screen * $rows_per_page;
$w='SELECT Sl_no,name,email_id,phone,branch FROM admin_user  WHERE `group`="accountant" LIMIT '.$startrow.'3';
$recordset=mysql_query($w,$a1) or die(mysql_error());

$totalrows=mysql_num_rows($recordset);
$row_recordset=mysql_fetch_assoc($recordset);
if($totalrows>0)
{
do
{
	$r=$row_recordset['Sl_no'];
	$d= $row_recordset['name'];
	$e= $row_recordset['email_id'];
	$q=$row_recordset['phone'];
	$h= $row_recordset['branch'];
	
	
?>




</thead>
<tbody id='tb-content'>
<tr>
<td ><?php echo $r ?></a></td>
<td><?php echo '<a href="inf.php?a2='.$e.'" >'. " $d ".'</a>'; ?></td>
<td><?php echo $e ?></td>
<td><?php echo $q ?></td>
<td><?php echo $h ?></td>

</tr>
<?php    
}while($row_recordset=mysql_fetch_assoc($recordset));
}

mysql_free_result($recordset);

?>

</tbody>
</table>
<?php
echo '<a href="'.$_SERVER['PHP_SELF'].'?startrow='.($startrow+2).'">Next</a>','&nbsp &nbsp';

$prev = $startrow - 2;
if ($prev >= 0)
 echo '<a href="'.$_SERVER['PHP_SELF'].'?startrow='.$prev.'">Previous</a>';



mysql_close($a1);
?>
 </div>
 </div>
</div>

       
    <!-- /.container -->

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
