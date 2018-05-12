<?php 
	session_start();

	if(isset($_SESSION['id'])) {
		$status = 'logout';
		$ref = 'logout.php';
		if($_SESSION['username'] == 'admin') {$admin = '<li><a href="#">Admin Page</a></li>';}
		else {$admin = null;}
	}
	else {
		$status = 'login';
		$ref = 'login.php';
		$admin = null;
	}
?>

<?php
if(isset($_POST['submit'])) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ta_web";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	$nama = ($_POST['nama']);
	$umur = ($_POST['umur']);
	$email = ($_POST['email']);
	$genre = implode(" - ",$_POST['genre']);
	$kritiksaran = ($_POST['kritiksaran']);

	$sql = "INSERT INTO survey VALUES ('".$nama."', '".$umur."', '".$email."', '".$genre."', '".$kritiksaran."')";
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
      <a id="logo-container" href="default.php" class="brand-logo">Music</a>
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
 
<div class="formcontainer">
    <form method="POST" action="survey.php">
    	<div class="row center">
			<h2>Survey</h2>
      	</div>
		<div class="row">
			<div class="input-field">
			  <input id="nama" placeholder="Name" type="text" name="name" class="validate" required>
			</div>
      	</div>
		<div class="row">
			<div class="input-field">
			  <input id="umur" placeholder="Age" type="number" name="age" class="validate" required>
			</div>
      	</div>
		<div class="row">
			<div class="input-field">
			  <input id="email" placeholder="Email" type="email" name="email" class="validate" required>
			</div>
      	</div>
      	<div class="row">
      		<h4 align="left">To :</h2>
      	</div>
		<div class="row">
			<div class="col s3">
				<input type="checkbox" class="filled-in" id="cb1" name="dev[]" value="1"/>
			  	<label for="cb1">Developer</label>
			</div>
			<div class="col s3">
				<input type="checkbox" class="filled-in" id="cb2" name="advice[]" value="2"/>
			  	<label for="cb2">New Lesson</label>
			</div>
   			<div class="col s3">
				<input type="checkbox" class="filled-in" id="cb3" name="error[]" value="3"/>
			  	<label for="cb3">Error</label>
			</div>
   			<div class="col s3">
				<input type="checkbox" class="filled-in" id="cb4" name="other[]" value="4"/>
			  	<label for="cb4">Other</label>
			</div>
  		</div>
  		<div class="row">
			<div class="input-field">
			  <textarea id="kritiksaran" name="kritiksaran" class="materialize-textarea"></textarea>
			  <label for="kritiksaran">Critic and Advice</label>
			</div>
    	</div> 
      	<div class="row center">
		  	<button class="btn waves-effect waves-light" type="submit" name="submit" id="submit" value="submit">Submit</button>
    	</div>
    </form>
</div>

<div class="formresultcontainer">
<button class="accordion">Hasil Survey</button>
	<div class="panel">
  
<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ta_web";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		 die("Connection failed: " . $conn->connect_error);
	} 

	$sqlselect = "SELECT nama, umur, email, genre, kritiksaran FROM survey";
	$result = $conn->query($sqlselect);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "".$row["nama"].", ".$row["umur"].", ".$row["email"].", ".$row["genre"].", ".$row["kritiksaran"]."<br>";
		}
	} else {
		echo "0 results";
	}
?>
	</div>
</div>

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
