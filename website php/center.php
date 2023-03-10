<div id="center">
	<h1align="center" class="welcome">Welcome</h1><hr>
	<h4align="center" style="font-family:Lucida Bright;">
		 <?php
		 $query=mysqli_query($conn,"SELECT * FROM `contents` WHERE `id`='1'");
		 if ($row=mysqli_fetch_assoc($query)) {
		 	echo $row['full_contents'];

		 }
		 ?>
</h4></div>