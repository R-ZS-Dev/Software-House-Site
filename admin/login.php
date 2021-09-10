<?php 	
	include 'adminlogin.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php 
		include_once 'include\css.php';
	?>
	<title></title>

	<style>
		.login-container{
		    margin-top: 5%;
		    margin-bottom: 5%;
		}
		.login-form-1{
		    padding: 5%;
		    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
		}
		.login-form-1 h3{
		    text-align: center;
		    color: #333;
		}
		.login-form-2{
		    padding: 5%;
		    background: #0062cc;
		    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
		}
		.login-form-2 h3{
		    text-align: center;
		    color: #fff;
		}
		.login-container form{
		    padding: 10%;
		}
		.btnSubmit
		{
		    width: 50%;
		    border-radius: 1rem;
		    padding: 1.5%;
		    border: none;
		    cursor: pointer;
		}
		.ologin
		{
		    width: 50%;
		    border-radius: 1rem;
		    padding: 1.5%;
		    border: none;
		    cursor: pointer;
		}
		.login-form-1 .ologin{
		    font-weight: 600;
		    color: #fff;
		    background-color: #0062cc;
		}
		.login-form-2 .btnSubmit{
		    font-weight: 600;
		    color: #0062cc;
		    background-color: #fff;
		}

	</style>
</head>
<body>

<h1 class="text-center p-3">Sign-In</h1>
<div class="container login-container">
            <div class="row">
                <div class="col login-form-1">
                    <h3>Operator Log-In</h3>
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="username" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="ologin" name="cmlogin" value="Login" />
                        </div>
                                                
                    </form>
                </div>
                <div class="col login-form-2">
                    <h3>Admin Log-In</h3>
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email" name="email" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" name="admin" />
                        </div>
                        <div class="form-group">
                        </div>
                    </form>
                </div>
            </div>
        </div>/
</body>
</html>