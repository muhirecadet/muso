<style type="text/css">
.header .headerleft b {
	color: #933;
	font-weight: bold;
}
</style>
<div class="header">
	<div class="headerleft">
		<b>Hospital Management System</b>
	</div>
	<div class="headerright">
		<b>
			<?php
			require '../includes/connect.php';
			require '../includes/users.php';
			receptiondetails();
			 ?>
		</b>
	</div>
</div>