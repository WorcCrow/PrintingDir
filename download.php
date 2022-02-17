<?php
	$path = "./transfer";
	$files = Array();
	$folders = Array();
	$contents = scandir($path);
	foreach($contents as $content){
		if($content !== "." && $content !== ".."){
			//echo "<b>" . $content . "</b><br>";
			if(is_dir($content)){
				array_push($folders, $content);
			}else{
				array_push($files, $content);
			}
		}
	}
	
	foreach($folders as $folder){
		//echo $folder . "FOLDER <br>";
	}
	foreach($files as $file){
		//echo $file . "FILES <br>";
	}

?>



<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<!--Import Google Icon Font-->
		<link href="./fonts/icon/icon.css" rel="stylesheet">
		<style>
			.files{
				display:inline-block;
				white-space: nowrap;
				overflow: hidden;
				text-overflow: ellipsis;
				width:200px;
			}
		</style>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>

	<body>
		<nav>
			<div class="nav-wrapper">
				<div class="col s12">
					<a href="./index.php" class="breadcrumb"><i class="material-icons">storage</i></a>
					<a href="#!" class="breadcrumb">Storage</a>
				</div>
			</div>
		</nav>
		
		<ul class="collection with-header">
			<li class="collection-header">
				<h5>
					Select File to Download
					<a href="#!" class="right" onclick="window.location.reload()">
						<i class="material-icons">refresh</i>
					</a>
				</h5>
			</li>
			<!--
			<li class="collection-item">
				<div>
					Alvin
					<a href="#!" class="secondary-content">
						<i class="material-icons">file_download</i>
					</a>
				</div>
			</li>
			-->
			
			<?php
				foreach($files as $file){
					//echo $file . "FILES <br>";
					echo '
							<li class="collection-item">
								<div>
									<span class="files">' . $file . '</span>
									<a href="' . $path .'/'. $file. '" class="secondary-content">
										<i class="material-icons">file_download</i>
									</a>
								</div>
							</li>
					';
				}
			?>
			
		</ul>

		<!--JavaScript at end of body for optimized loading-->
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script>
			$(".collection-item").click(function(){
				$(".collection-item").removeClass("active")
				$(this).toggleClass('active');
				$(this).find("a").attr("download","")
			});



		</script>
	</body>
</html>