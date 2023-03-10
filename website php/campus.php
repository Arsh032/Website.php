<html>
<head>
	<title>Majha College website</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
include 'header.php';
?>
		<div id="content">
		<?php
		include 'left.php';
		?>
		<!--progams content-->
		<div id="center">
	<h1align="center" class="welcome">Our Campus</h1><hr>
	<h4align="center">
		<?php
		$query=mysqli_query($conn,"SELECT * FROM `contents` WHERE `id`='5'");
		if ($row=mysqli_fetch_assoc($query)) {
			echo $row['full_contents'];
		}
		?>
</div></h4>
        <!--programs -->
		<?php
		include 'right.php';
		?>
	</div>
</div>
	
	<?php
	include 'footer.php';
	?>
</body>
</html>