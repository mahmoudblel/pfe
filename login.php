<?php
session_start();
$nonavbar = '';	
$nofooter = '';
if(isset($_SESSION['usersession'])){
	header('location:sellgear.php');// redirect to home page
}
include 'init.php';
include 'includes/header.php';


//check if user is coming from post request
if(isset($_POST["submit"])){
	$username = $_POST['user'];
	$password = $_POST['pass'];	
	$hashedpass = sha1($password);
	
	//check if user exists in db
	$stmt = $BDD->prepare("SELECT UserName, Password FROM users WHERE UserName = ? AND Password = ? ");
	$stmt->execute(array($username, $hashedpass));
	$count = $stmt->rowCount();

	
	//if count>0 there is information in the db about this user
	if($count > 0){
		$_SESSION['usersession'] = $username; //register session for this user
		header('location:sellgear.php');// redirect to index page
		exit();

	}

}

?>
 
<form class="login" action="login.php" method= "POST">
	<input class = "form-control" type="text" name="user" placeholder="username" autocomplete="off"/>
	<input class = "form-control" type="password" name="pass" placeholder="password" autocomplete="new-password"/>
	<input class = "btn btn-primary btn-block" type="submit" value="login" /><br/>
	<a href="register.php">  <p id="registerphrase"> don't have an account? Register for free</p> </a>


</form>

<?php
include 'includes/footer.php';?>
