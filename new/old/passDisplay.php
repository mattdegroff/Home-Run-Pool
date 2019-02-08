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
			include_once("connect.php");
			$q = $_REQUEST['q'];
			
			$sql = "select code, pass from standings";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){				
					if ($row['pass'] == $q) {
						echo "<br>";
						echo file_get_contents('http://www.hrderby2k17.com/groups/'.$row['code'].'.php');
					}
				}
			}			
		?>
	</body>
</html>

