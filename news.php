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
<nav role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="default.php" class="brand-logo">Music</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="default.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="lesson.php">Education</a></li>
        <li><a href="survey.php">Survey</a></li>
		<?php echo($admin)?>
        <li><a href="<?php echo($ref)?>" style="width:auto;" class="waves-effect waves-light btn"><?php echo($status)?></a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
		<li><a href="default.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="lesson.php">Education</a></li>
        <li><a href="survey.php">Survey</a></li>
        <?php echo($admin)?>
        <li><a href="<?php echo($ref)?>" style="width:auto;" class="waves-effect waves-light btn"><?php echo($status)?></a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
 
<div class="w3-content w3-display-container">
  <img class="mySlides" src="img/hot1.jpg" style="width:100%">
  <img class="mySlides" src="img/hot2.jpg" style="width:100%">
  <img class="mySlides" src="img/hot3.jpg" style="width:100%">

  <a class="w3-btn-floating w3-display-left" onclick="plusDivs(-1)">&#10094;</a>
  <a class="w3-btn-floating w3-display-right" onclick="plusDivs(1)">&#10095;</a>
  
</div>

<div class="fullwidth">
 <h2 style="text-align: center; padding-top: 10px;"> Trending Topic </h2>
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="card">
				<div class="card-image waves-effect waves-block waves-light">
				  <img class="activator" src="img/n1.jpg">
				</div>
				<div class="card-content">
				  <span class="card-title activator grey-text text-darken-4">Sherly Juara Lomba Menyanyi 2018<i class="material-icons right">More</i></span>
				</div>
				<div class="card-reveal">
				  <span class="card-title grey-text text-darken-4">Sherly Juara Lomba Menyanyi 2018<i class="material-icons right">close</i></span>
				  <p>[Your description for Article 1] Lorem ipsum dolor sit amet, consectetur adipising elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipising elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
		  </div>
        </div>

        <div class="col s12 m4">
          <div class="card">
			<div class="card-image waves-effect waves-block waves-light">
			  <img class="activator" src="img/n2.jpg">
			</div>
			<div class="card-content">
			  <span class="card-title activator grey-text text-darken-4">Ben Atlet Karate Termuda 2018<i class="material-icons right">More</i></span>
			</div>
			<div class="card-reveal">
			   <span class="card-title grey-text text-darken-4">Ben Atlet Karate Termuda 2018<i class="material-icons right" color="red">close</i></span>
			   <p>[Your description for Article 2] Lorem ipsum dolor sit amet, consectetur adipising elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipising elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
		  </div>
        </div>

        <div class="col s12 m4">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
				  <img class="activator" src="img/n3.jpg">
				</div>
				<div class="card-content">
				  <span class="card-title activator grey-text text-darken-4">Shania Juara Lomba Pidato 2018<i class="material-icons right">More</i></span>
				</div>
				<div class="card-reveal">
				  <span class="card-title grey-text text-darken-4">Shania Juara Lomba Pidato 2018<i class="material-icons right">close</i></span>
				  <p>[Your description for Article 3] Lorem ipsum dolor sit amet, consectetur adipising elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipising elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			  </div>	
        </div>
      </div>
    </div>
  </div>
</div>
		<div class="formresultcontainer">
	<h2 style="text-align: center">Good Article To Learn</h2>
		<input type="text" id="myInput" onkeyup="myFunctionSearch()" placeholder="Search The Topic" title="Search The Topic">
		<button class="accordion">Top 10 : The Child's Achievements</button>
		<div class="panel">
			<ul id="myUL">
			  	<li><a>1. Child 1 – hailey</a></li>
				<li><a>2. Child 2 – oliver</a></li>
				<li><a>3. Child 3 – hadid</a></li>
				<li><a>4. Child 4 – benedict</a></li>
				<li><a>5. Child 5 – marsha</a></li>
				<li><a>6. Child 6 – kittleson</a></li>
				<li><a>7. Child 7 – david</a></li>
				<li><a>8. Child 8 – merry</a></li>
				<li><a>9. Child 9 – charlie</a></li>
				<li><a>10. Child 10 – justin</a></li>
			</ul>
		</div>
	<button class="accordion">Being A Good Parents</button>
		<div class="panel">
			<ul id="myUL">
				<li><a>1. Art 1 - Abc</a></li>
				<li><a>2. Art 2 - Def</a></li>
				<li><a>3. Art 3 - Ghi</a></li>
				<li><a>4. Art 4 - Jkl</a></li>
				<li><a>5. Art 5 - Mno</a></li>
				<li><a>6. Art 6 - Pqr</a></li>
				<li><a>7. Art 7 - Stu</a></li>
				<li><a>8. Art 8 - Vwx</a></li>
				<li><a>9. Art 9 - Yza</a></li>
				<li><a>10. Art 10 - Bcd</a></li>
			</ul>
		</div>
</div>

<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            Copyright ©2018 SIPAUD
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>


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
	<script>
		var slideIndex = 0;
		carousel();

		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
			  x[i].style.display = "none"; 
			}
			slideIndex++;
			if (slideIndex > x.length) {slideIndex = 1} 
			x[slideIndex-1].style.display = "block"; 
			setTimeout(carousel, 5000); // Change image every 2 seconds
		}
	</script>
	
	<script>
	function myFunctionSearch() {
		var input, filter, ul, li, a, i;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		ul = document.getElementById("myUL");
		li = ul.getElementsByTagName("li");
		for (i = 0; i < li.length; i++) {
			a = li[i].getElementsByTagName("a")[0];
			if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
				li[i].style.display = "";
			} else {
				li[i].style.display = "none";
			}
		}
	}
	</script>
  </body>
</html>
