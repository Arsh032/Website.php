<html>
<head>
	<title>Majha College website</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<body style="background-image:url(C:\wamp64\www\practice_php\website php\css\Photo.png);background-repeat:no-repeat;background-size:cover">


<?php
include 'header.php';
?>
<div id="content">
		<?php
		include 'left.php';
		?>
		<!--progams content-->
		<div id="center">
	<h1align="center" class="welcome">About us</h1><hr>
	<h4align="center">
		<h4align="center" style="font-family:Lato";>
		 <?php
		 $query=mysqli_query($conn,"SELECT * FROM `contents` WHERE `id`='6'");
		 if ($row=mysqli_fetch_assoc($query)) {
		 	echo $row['full_contents'];

		 }
		 ?>
</h4>
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
</html>
