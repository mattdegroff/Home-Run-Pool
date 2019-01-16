<html>
	<?php
		include "../update.php";
	?>
	<style>
	* {
		text-align: center;
	}
	#passPicks{
		background-color: navy;
		width: 213px;
		height: 450px;
		font-size: 20;
		color: white;
	}
	#middle {
		text-align: center;
		vertical-align: middle;
	}
	
	</style>
	<body>
		<div style="border-radius: 5px" id="passPicks"> 
							<table id="passPicks">
								<tbody>
									<?php
										passPicks('pooch', 1, 8);				
									?>
								</tbody>
							</table>
		<div>					
	</body>
</html>
	