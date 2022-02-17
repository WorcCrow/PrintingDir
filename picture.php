<html>
	<head>
		<head>
		<title>NHNet Printing Service</title>
		<link href=".\media\icon.ico" rel="shortcut icon" sizes="196x196">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href=".\css\bootstrap.min.css">
		<script src=".\js\jquery.min.js"></script>
		<script src=".\js\popper.min.js"></script>
		<script src=".\js\bootstrap.min.js"></script>
	
		<script src=".\js\api.js"></script>
		
		<link rel="stylesheet" href=".\css\style.css">
		</head>
			<style>
				
				@page {
				  size: 8.5in 11in;
				}
				@page :left {
				  margin-left: 3cm;
				}

				@page :right {
				  margin-left: 4cm;
				}
				
				@page :first {

				}
				
				
				.oneByone{
					height:96px;
					width:96px;
					border:1px solid black;
					margin:2px;
				}
				
				.twoBytwo{
					height:192px;
					width:192px;
					border:1px solid black;
					margin:1px;
				}
				
				.letter{
					height:1056px;
					width:816px;
					border:1px solid black;
					margin:1px;
				}
				
				
			</style>
		</head>
	<body>
		<div align="center">
			<button onclick="printElem('paper')">Print</button>
			<div id="paper" class="letter">
				<img class="oneByOne" src="media/id.jpg">
				<img class="oneByOne" src="media/id.jpg">
				<img class="oneByOne" src="media/id.jpg">
				<img class="oneByOne" src="media/id.jpg">
				<img class="oneByOne" src="media/id.jpg">
				<img class="oneByOne" src="media/id.jpg">
				<img class="oneByOne" src="media/id.jpg">
				<img class="oneByOne" src="media/id.jpg">
				<img class="oneByOne" src="media/id.jpg">
				<img class="oneByOne" src="media/id.jpg">
				<img class="oneByOne" src="media/id.jpg">
				<img class="oneByOne" src="media/id.jpg">
				
				<img class="twoBytwo" src="media/id.jpg">
			</div>
		</div>
		
		<script>
			function printElem(divId) {
				var content = document.getElementById(divId).innerHTML;
				var mywindow = window.open('', 'Print', 'height=600,width=800');

				mywindow.document.write('<html><head><title>Print</title>');
				mywindow.document.write(document.head.innerHTML);
				mywindow.document.write(content);
				mywindow.document.write('</body></html>');

				
			}
		</script>
	</body>
</html>