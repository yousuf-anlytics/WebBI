<?php
function someData() {
	$myFile = "latha.php"; // or .php
	$fh = fopen ( $myFile, 'w' ); // or die("error");
	$stringData = "<!DOCTYPE html>
<head>

	<style>
		.left,.canvas{
			height:100px;
			border:1px dotted black;
		}
	</style>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>	
	
	<script src='https://d3js.org/d3.v3.min.js'></script>
	
</head>
	<body>
		<div class='col-md-12'>
			
			" . $_REQUEST ['canvas_data'] . "
			
		</div>	
	</body>
</html>";
	fwrite ( $fh, $stringData );
	fclose ( $fh );
}
someData ();

?>