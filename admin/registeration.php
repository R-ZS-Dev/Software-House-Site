<?php
include 'include/config.php'; 
if (isset($_POST['register'])) {
	$name = $_POST['fname'];
	$lnam = $_POST['lname'];
	$eml = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$insert = $conectdb->query("insert into adminlogin (fname, lname, email, username, password) values ('$name', '$lnam', '$eml', '$user', '$pass')");
	if ($insert) {
		echo "<script>window.location='registeration.php?mess=Successfully Added'</script>";
		echo "Registered Successfully";
	}
		else{
		echo "<script>window.location='registeration.php?mess=Not Successfully Added'</script>";
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include 'include\meta.php' ?>
	<?php include 'include\css.php' ?>
	<title>Registration</title>
</head>
<body class="text-center">
	<form action="" method="POST">
	<h3 class="text-center">REGISTRATION</h3><br><br><br>
<label>First Name:</label><br>
<input type="text" name="fname"><br>
<label>Last Name:</label><br>
<input type="text" name="lname"><br>
<label>Email:</label><br>
<input type="text" name="email"><br>
<label>Username:</label><br>
<input type="text" name="username"><br>
<label>Password</label><br>
<input type="password" name="password"><br><br>
<input class="btn btn-primary" type="submit" name="register" value="Register">
</form>
</body>
</html>