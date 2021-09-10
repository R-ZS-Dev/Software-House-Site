<?php 
		 include 'include/session.php';
		 if(!isset($_SESSION['admins'])){
		 header("Location:index.php");	}
 ?>


<?php include 'include/config.php'; ?>
    
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<?php include 'include/meta.php' ?>
		<?php include 'include/css.php' ?>
	<title></title>
</head>
<body>
<?php include 'include/nav.php' ?>

		<!-- Delete Record -->
		<?php if (isset($_GET['mes'])): ?>
	    <h2 class="text-center text-success"><?php echo $_GET['mes'] ?></h2>
	 	 <?php endif ?>
		
		<!-- form insert -->
		<?php if (isset($_GET['mess'])): ?>
	    <h2 class="text-center text-success"><?php echo $_GET['mess'] ?></h2>
	 	 <?php endif ?>

		<!-- update -->
	 	 <?php if (isset($_GET['message'])): ?>
	    <h2 class="text-center text-success"><?php echo $_GET['message'] ?></h2>
	 	 <?php endif ?>

		<p class="text-success text-center p-2">If you want to ADD new operator Please fill these requirments in the registration form.<br><a class="btn btn-success text-center" href="registeration.php">Registration Now</a></p>
			<h1 class="text-center">Admin View</h1>

		<?php include 'include/form.php' ?><br><br>

		<?php 
			if (isset($_GET['del'])) {
			$id= $_GET['del'];
			$del=$conectdb->query("DELETE FROM information WHERE id='$id'");
		if($del){
	    	echo "<script>window.location='adminview.php?mes=Record Deleted'</script>";
	  	} else {
	    	echo "<script>window.location='adminview.php?mes=Record NOT Deleted'</script>";
	  	}
	}
		 ?>
		 

<table class="table table-striped table-bordered">
			<tr>
				<th>Sr.</th>
				<th>F-Name</th>
				<th>L-Name</th>
				<th>E-Mail</th>
				<th>Number</th>
				<th>Introduction</th>
				<th>CV</th>
				<th>Delete</th>
				<th>Edit</th>
			</tr>	

			<?php
				$i=1;
				$one = $conectdb->query("SELECT * FROM information");
				while($show=$one->fetch_array()){
				?>	
		<tr>
		    <th><?php echo $i++ ?></th>
			<th><?php echo $show['fname']; ?></th>
			<th><?php echo $show['lname']; ?></th>
			<th><?php echo $show['email']; ?></th>
			<th><?php echo $show['cnumber']; ?></th>
			<th><?php echo $show['intro']; ?></th>

			<th><?php echo $show['cv']; ?></th>
			<th><a class="btn btn-primary" href="?del=<?php echo $show['id'] ?>">Delete</a></th>
			<th><a href="?form_upd=yes&dataup=<?php echo $show[0] ?>" class="btn btn-info">Edit</a></th>			
		</tr>
		<?php } ?>

		<?php 
			if (isset($_GET['dataup'])){
			$id = $_GET['dataup'];
			$add=$conectdb->query("SELECT * FROM information where id='$id'"); 
			$show=$add->fetch_array();
		?>
		
			<form method="POST" enctype="multipart/form-data">
			<div class="container">
			<div class="row">
				<div class="col-3">
					<label>First Name</label><br>
					<input class="form-control" type="text" name="fname" placeholder="First Name" value="<?php echo $show['fname'] ?>">
				</div>
				<div class="col-3">
					<label>Last Name</label><br>
					<input class="form-control" type="text" name="lname" placeholder="Last Name" required="" value="<?php echo $show['lname'] ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-3">
					<label>E-mail</label><br>
					<input class="form-control" type="text" name="email" placeholder="Email Address" required="" value="<?php echo $show['email'] ?>">
				</div>
				<div class="col-3">
					<label>Cell Number</label><br>
					<input class="form-control" type="text" name="cnumber" placeholder="Enter Number" pattern="[0-9]{11}" title="write only numbers" minlength="11" maxlength="11" required="" value="<?php echo $show['cnumber'] ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col">
					<label>Write About Your Self</label><br>
					<textarea class="form-control w-50" name="intro" placeholder="Introduce YourSelf with-in 300 words" required=""><?php echo $show['intro'] ?></textarea>
				</div>
				</div><br>
				<div class="row">
				<div class="col-3 form-group">
				    <label>Upload Your CV</label>
				    <input type="file" name="cv" class="form-control-file" >
				    <input readonly type="" name="old_image" value="<?php echo $show['cv'] ?>">
      		

				  </div>
				</div>
				<button type="submit" name="dataup" class="btn btn-primary">Update Record</button>
			</div>

		</form><br><br>
		<?php
	 } 
			if (isset($_POST['dataup'])) {
				$id =$_GET['dataup'];
				$fname = $_POST['fname'];
				$lnam = $_POST['lname'];
				$eml = $_POST['email'];
				$user = $_POST['cnumber'];
				$pass = $_POST['intro'];
				$old=$_POST['old_image'];

				$location1=$_FILES["cv"]["name"];
				$rann = pathinfo($location1, PATHINFO_EXTENSION);
				$rename = time();
				$newname = $rename.'.'.$rann;   
        $folder = "cvfiles/".$newname;
        	move_uploaded_file($_FILES["cv"]["tmp_name"],$folder);	

        	$location1 = $old;

    			$dataup = $conectdb->query("UPDATE information set fname='$fname', lname='$lnam', email='$eml', cnumber='$user', intro='$pass', cv='$newname' where id='$id'");
    			unlink("cvfiles/".$old);
    			if ($dataup) {
					echo "<script>window.location='adminview.php?message=Record Updated'</script>";
				}else{
					echo "<script>window.location='adminview.php?message=Record NOT Updated'</script>";
				}
		 }
		?>
	
	</table>
<?php include 'include/footer.php' ?>

</body>
</html>