<html>
	<head>
	<script>
			function jsfunction(str) {
				if (str == "") {
					document.getElementById("txtHint").innerHTML = "";
					return;
				} else { 
					if (window.XMLHttpRequest) {
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
					} else {
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange = function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
						}
					};
					xmlhttp.open("GET","/groups/"+str+".php",true);
					xmlhttp.send();
				}
			}</script>
	</head>
	<body>		
		<?php
			$host_name  = "db617636683.db.1and1.com";
			$database   = "db617636683";
			$user_name  = "dbo617636683";
			$password   = "UVMI3Kr4";

			$conn = mysql_connect($host_name, $user_name, $password);
	
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
	
			mysql_select_db($database);
		
			$q = $_REQUEST['q'];
			
				$sql = "select name, pass from passwords";
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid query: ' . mysql_error());
				}
				while($row = mysql_fetch_assoc($result)){
					
					if ($row['pass'] == $q) {
						echo "<br>";
						echo file_get_contents('http://homerunderby2k16theshow.com/groups/'.$row['name'].'.php');
					}
				}
			
		?>
	</body>
</html>

