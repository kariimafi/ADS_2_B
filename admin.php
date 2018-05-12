<?php 
	session_start();

	if(isset($_SESSION['id'])) {
		$status = 'logout';
		$ref = 'logout.php';
		if($_SESSION['username'] == 'admin') {$admin = '<li><a href="admin.php">Admin Page</a></li>';}
		else {$admin = null;}
	}
	else {
		$status = 'login';
		$ref = 'login.php';
		$admin = null;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>A Great Place To Learn</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="css/w3.css">
</head>
<body>
<div style="width: 100%;padding:5px;background-color:#4b79f1;text-align: right;color:white">
Jl. Damai No 53 Malang, Indonesia (0341) 14045
	
</div>
<nav role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="default.php" class="brand-logo">SIPAUD</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="default.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="lesson.php">Education</a></li>
        <li><a href="survey.php">Survey</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="<?php echo($ref)?>" style="width:auto;" class="waves-effect waves-light btn"><?php echo($status)?></a></li>
		<?php echo($admin)?>
      </ul>

      <ul id="nav-mobile" class="side-nav">
		<li><a href="default.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="lesson.php">Education</a></li>
        <li><a href="survey.php">Survey</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <?php echo($admin)?>
        <li><a href="<?php echo($ref)?>" style="width:auto;" class="waves-effect waves-light btn"><?php echo($status)?></a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
 
<footer class="page-footer" style="padding-bottom:10px;padding-top: 1px">
	<div style="text-align: center;color:white">
		Copyright ©2018 SIPAUD
	</div>
	
</footer>
<div style="width: 100%;padding:10px;background-color:#4b79f1;color:white">
</div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/function.js"></script>
  <script>
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
		acc[i].onclick = function(){
			this.classList.toggle("active");
			this.nextElementSibling.classList.toggle("show");
	  }
	}
	</script>
  </body>
</html>
