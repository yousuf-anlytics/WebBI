function magic() {
	$('.save').click(function() {
		$.ajax({
			url : 'index.php',
			type : 'POST',

			data : {
				canvas_data : $('.data-canvas').html()
			},
			success : function(result) {
			}
		});
	});
};