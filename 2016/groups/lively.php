<html>
	<?php
		include "../update.php";
	?>
	<style>
	* {
		text-align: center;
	}
	#passPicks{
		background-color: #90ee90;
		width: 213px;
		height: 450px;
		font-size: 20;
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
										passPicks('lively', 1, 8);				
									?>
								</tbody>
							</table>
		<div>					
	</body>
</html>
	