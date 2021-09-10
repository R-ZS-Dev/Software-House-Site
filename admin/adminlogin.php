<?php include 'include/session.php';
include 'include/config.php';

	// Admin Login

if (isset($_POST["admin"])) {

	$email = $_POST["email"];
	$password = $_POST["password"];

		$qry="SELECT * FROM admin WHERE email= '".$email."' AND password='".$password."'";
		$result=$conectdb->query($qry);
		if ($row=$result->fetch_array()) {
			$_SESSION['admins'] = $row[0];
//below line is use for login both admin/user login and $_SESSION['session_login'] also use in nav or main file
			$_SESSION['session_login']=true;
			//$_SESSION['admins'] = $email; 
		header("Location:adminview.php");
	}else{
		echo "Wrong password or Username";
	}
}

	// Computer Operator Login

	if (isset($_POST["cmlogin"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];

		$cmqry="SELECT * FROM adminlogin WHERE username='".$username."' AND password='".$password."'";
		 $results=$conectdb->query($cmqry);
		 if ($rows=$results->fetch_array()) {
			$_SESSION['cmadmins'] = $rows[0];
//below line is use for login both admin/user login and $_SESSION['session_login'] also use in nav or main file
			$_SESSION['session_login']=true;
			//$_SESSION['cmadmins'] = $username;
		header("Location:cmoperator.php");
	}else{
		echo "Wrong password or Username";
	}
}
?>