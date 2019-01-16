<!--mobile site-->

<html>
	<head>
		<title>HOME RUN DIRTY 2K16</title>
		<script>
		var xmlhttp;
		if (window.XMLHttpRequest) {
						// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
					}
		
		function showUser(str) {
				if (str == "") {
					document.getElementById("txtHint").innerHTML = "";
					return;
				} else { 
					xmlhttp.onreadystatechange = function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
						}
					};
					xmlhttp.open("GET","../passDisplay.php?q="+str,true);
					xmlhttp.send();
				}
			}
			
			function showGroup(str) {
				if (str == "") {
					document.getElementById("group").innerHTML = "";
					return;
				} else { 
					xmlhttp.onreadystatechange = function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							document.getElementById("group").innerHTML = xmlhttp.responseText;
						}
					};
					xmlhttp.open("GET","groupSelect.php?q="+str,true);
					xmlhttp.send();
				}
			}
			
			function update() {
				 	xmlhttp.onreadystatechange = function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							document.getElementById("content").innerHTML = xmlhttp.responseText;
						}
					};
					xmlhttp.open("GET","../data.php",true);
					xmlhttp.send();
			}
			
			var dead = new Date("2016-04-03T13:05:00");
			var now = new Date();

			if (now > dead) {
				//setInterval(update, 500);
			}
			else {
				//update();
			}
		</script>
		<style>
			* {
				font-size: 100%;
				text-align: center;
			}
			#wrap {
				text-align: center;
				width: 400px;
				border: 1px solid;
			}
			
		</style>
	</head>
	<body>
	<div id="wrap">
		<table width="100%">
			<tr><th colspan="2">Groups</th></tr>
			<tr><th>Player</th><th>HR</th></tr>
			<tr><td colspan="2"><select name = "groupSelect" oninput="showGroup(this.value)">
					<option value=""> Select Group </option>
					<option value="A"> Group A </option>
					<option value="B"> Group B </option>
					<option value="C"> Group C </option>
					<option value="D"> Group D </option>
				</select></td></tr>
			<tbody id="group"></tbody>
		</table>	
	</div>
	</body>
</html>