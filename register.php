<?php
//session_start();
$nonavbar = '';	
$nofooter = '';

include 'init.php';
include 'includes/header.php';
?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$username = $_POST['user'];
	$password = $_POST['pass'];
	$Email = $_POST['E-mail'];
	$fullname = $_POST['fullname'];
	$hashedpass = sha1($password);

$stmt = $BDD->prepare("INSERT INTO users(UserName,Password,email,fullname) Values(?,?,?,?) ");
	$stmt->execute(array($username, $hashedpass, $Email, $fullname ));
	$stmt->CloseCursor();
	header('location:login.php');
}

?>







 
<form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method= "POST">
	<input class = "form-control" type="text" name="user" placeholder="username" autocomplete="off"/>
	<input class = "form-control" type="password" name="pass" placeholder="password" autocomplete="new-password"/>
	<input class = "form-control" type="text" name="E-mail" placeholder="E-mail" autocomplete="off"/>
	<input class = "form-control" type="text" name="fullname" placeholder="full name" autocomplete="off"/>
	<input class = "btn btn-primary btn-block" type="submit" value="Register" /><br/>
	


</form>

<?php
include 'includes/footer.php';?>
