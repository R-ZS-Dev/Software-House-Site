<?php 
 		include 'include/session.php';
		if(!isset($_SESSION['cmadmins'])){
		header("Location:index.php");	}	
 ?>
    
<?php include 'include/config.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<?php include 'include/meta.php' ?>
	<?php include 'include/css.php' ?>
	<title></title>
</head>
<body>
<?php include 'include/nav.php' ?>
<!-- form insert -->
		<?php if (isset($_GET['mess'])): ?>
	    <h2 class="text-center text-success"><?php echo $_GET['mess'] ?></h2>
	 	<?php endif ?>

	<?php include 'include/form.php' ?>
	<table class="table table-striped table-bordered">
			<tr>
				<th>Sr.</th>
				<th>F-Name</th>
				<th>L-Name</th>
				<th>E-Mail</th>
				<th>Number</th>
				<th>Introduction</th>
				<th>CV</th>
			</tr>	
<!-- 2. Use this code stucture because display NO RECORD FOUND -->
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
			<!-- <th><iframe src="cvs/<?php echo $show['cv']; ?>" width="100" height="100"></iframe> </th> -->
			<th><?php echo $show['cv']; ?></th>
		</tr>
	<?php } ?>
	</table>
<?php include 'include\footer.php' ?>
</body> </html>