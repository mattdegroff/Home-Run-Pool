$(document).ready( 
	function() {
		$.ajax ({
			type: 'POST';
			url: 'http://homerunderby2k16theshow.com/makePicks.php';
			success: function() {
				var value = $("#select").val();
				if (value != "") {
					$("#select1 option[value='"+value+"']").remove();
				}
			}
		});		
	});