$(function() {
	$(".chart1").draggable();
	$(".chart1").resizable();
});

$(function() {
	$(".chart").draggable();
	$(".chart").resizable();
});

function gets() {

	document.getElementById('importbar').onclick = function() {
		$(".chart").show();
		var files = document.getElementById('selectFiles').files;
		console.log(files);
		if (files.length <= 0) {
			return false;
		}
		if (files[0].type != "application/json") {
			alert('Please select json file only');
		}

		var fr = new FileReader();

		fr.onload = function(e) {
			console.log(e);
			var result = JSON.parse(e.target.result);
			var formatted = JSON.stringify(result, null, 2);
			generateGraph(formatted);

		}

		fr.readAsText(files.item(0));
	};

	document.getElementById('importpie').onclick = function() {
		$(".chart1").show();
		var files = document.getElementById('selectFiles').files;
		console.log(files);
		if (files.length <= 0) {
			return false;
		}
		if (files[0].type != "application/json") {
			alert('Please select json file only');
		}

		var fr = new FileReader();

		fr.onload = function(e) {
			console.log(e);
			var result = JSON.parse(e.target.result);
			var formatted = JSON.stringify(result, null, 2);

			generateGraph1(formatted);

		}

		fr.readAsText(files.item(0));
	};

}