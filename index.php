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
				body{
					background:#eee;
					margin:0px;
					padding:0px;
					font-family:Arial;
				}
				
				#chooseBtn{
					height:150px;
					width:150px;
					cursor:pointer;
					background:url("media/upload.png");
					background-repeat: no-repeat;
					background-size: 150px 150px;
				}
				
				#downloadBtn{
					height:150px;
					width:150px;
					cursor:pointer;
					background:url("media/download.png");
					background-repeat: no-repeat;
					background-size: 150px 150px;
				}
				
				#logo{
					width:300px;
				}
				
				#maincontent{
					width:100%;
					height:100%;
					background:#fff;
					padding:50px 0px 50px 0px;
				}
				
				
			</style>
		</head>
	<body>


		<script>
			function openDownload(path){
				var loc = window.location.pathname;
				var dir = loc.substring(0, loc.lastIndexOf('/'));
				window.location = dir + "/" + path
			}
			function chooseFiles(){
				document.getElementById("files").click()
			}
			
			function chooseFile(){
			
				document.getElementById("fileform").submit()
			}

			function uploadFile(){
				function onprogressHandler(evt) {
					var percent = evt.loaded/evt.total*100;
					console.log('Upload progress: ' + percent + '%');
				}
			}
			
			
			
		</script>
		<div id="body" align="center" >
			<div id="maincontent">
				<h4>Upload Your Documents Here</h4>
				<form id="fileform" action="upload.php" method="post" enctype="multipart/form-data">
					<input type="file" name="selectedFile[]" id="files" onchange="chooseFile()" multiple="multiple" hidden>
				</form>
				<div onclick="chooseFiles()" id="chooseBtn"></div>
				<div onclick="openDownload('download.php')" id="downloadBtn"></div>
				<br>
				<?php 
					if(isset($_GET['success'])){
						echo '<div class="alert alert-success"><strong>Success!</strong> Your file has been successfully uploaded.</div>';
						echo '<div class="alert alert-info"><strong>Get Your Own!</strong> Contact the Developer: francismickobienes@gmail.com</div>';
					}
				?>
			</div>
		</div>
		

		<!-- The Modal -->
		<div class="modal fade" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Other Services</h4>
						<button type="button" class="close" data-dismiss="modal">×</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						 <table class="table">
							<thead>
							  <tr>
								<th>Service</th>
								<th>Price</th>
							  </tr>
							</thead>
							<tbody>
							  <tr>
								<td>Computer/Laptop Reformat</td>
								<td>₱700/Unit</td>
							  </tr>
							  <tr>
								<td>Documents Pro Editing</td>
								<td>₱50/Page</td>
							  </tr>
							  <tr>
								<td>Recover Lost/Forgoten Windows Password</td>
								<td>₱500/Account</td>
							  </tr>
							  <tr>
								<td>Home Service (Computer Related)</td>
								<td>Service + Transport Charge</td>
							  </tr>
							  <tr>
								<td>CCTV Installation</td>
								<td></td>
							  </tr>
							</tbody>
						  </table>
						  <div class="alert alert-success"><strong>Notice!</strong> For other query please ask our Operator or contact 09199693161</div>
					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		
		
		
		<script>
			try{
				//Regular Browser
				localStorage.browser = true
				$("#myModal").modal()
			}catch(e){
				//Captive Portal
				document.getElementById("body").innerHTML = "From your browser go to http://192.168.0.242/"
			}
		</script>
	</body>
</html>