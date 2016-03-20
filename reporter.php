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
 <li><a href=""></a></li>
<li><a href=""></a></li>
<li><a href=""></a></li>

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
<h2 class="intro-text text-center">REPORTER
<strong></strong>
</h2>
<hr>
<form  role="form"  action ="reporter1.php" method="post">

<div class="form-group col-lg-4">
<p><label for="name">Name:</label><br><br>
<input type="text" class="form-control" placeholder="Name" id = "name" name="name" required></p><br></div>

 <div class="form-group col-lg-4"><p>
  <label for="select"> Select A Branch:</label><br><br>
  <select  name="branch_id" class="form-control" data-placeholder="Choose a branch..." required>
  <option value="0">Choose Branch.... </option>
  <?php
  
$a1=mysql_connect('localhost','root1','oec@123');
$b1=mysql_select_db('rms',$a1);
$w='SELECT branch FROM create_branch ' ;
$recordset=mysql_query($w,$a1) or die(mysql_error());

$totalrows=mysql_num_rows($recordset);
$row_recordset=mysql_fetch_assoc($recordset);
if($totalrows>0)
{
do
{
	$b=$row_recordset['branch'];
	?>
  
  <option value="<?php echo $b;?>"><?php echo $b;?> </option>
  <?php    
}while($row_recordset=mysql_fetch_assoc($recordset));
}
mysql_free_result($recordset);
mysql_close($a1);?>
  
  </select></p>
  <br></div>

<div class="form-group col-lg-4">
<p><label for="email">Email:</label><br><br>
<input type="email" class="form-control" placeholder="Email" name="email_id" required></p><br></div>

<div class="form-group col-lg-4">
<p><label for="phone">Phone:</label><br><br>
<input type="phone" class="form-control" placeholder="phone" name="phone" required></p><br></div>

<div class="form-group col-lg-4">
<p><label for="subject">Subject:</label><br><br>
<input type="text" class="form-control" name="subject" placeholder="Subject" required></p><br> <br><br></div>

<div class="form-group col-lg-4">
<p><label for="report">Report(*should not exceed 800 words):</label><br><br>
<textarea name="report" type="text area" cols="35" rows="8"class="form-control" placeholder="REPORT"></textarea></p><br> <br><br></div>

<input type="submit" class="btn btn-default" value="submit"></div>

</form>
  
  </div>
  </div>
  </div>
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
