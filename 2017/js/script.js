$(document).ready( 
	function() {
		$.ajax( {
			type: "GET",
			async: true,
			url: "../autoUpdate.php?q=A",
			success: function(data) {
				$("#A").html(data);
				$.ajax({
					type: "GET",
					async: true,
					url: "../autoUpdate.php?q=B",
					success: function(data) {
						$("#B").html(data);
						$.ajax({
							type: "GET",
							async: true,
							url: "../autoUpdate.php?q=C",
							success: function(data) {
								$("#C").html(data);
								$.ajax({
									type: "GET",
									async: true,
									url: "../autoUpdate.php?q=D1",
									success: function(data) {
										$("#D1").html(data);
										$.ajax({
											type: "GET",
											async: true,
											url: "../autoUpdate.php?q=D2",
											success: function(data) {
												$("#D2").html(data);
											}
										});
									}
								});
							}
						});
					}
				});
			}
		});
	});