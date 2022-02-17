<?php
	if(!file_exists("file:///D:/Worc/xampp/htdocs/Printing/transfer/")){
		system("mkdir D:\\Worc\\xampp\\htdocs\\Printing\\transfer");
	}
	$target_dir = "file:///D:/Worc/xampp/htdocs/Printing/transfer/";
	
	if(isset($_FILES["selectedFile"])) {
		multipleUpload();
	}
	
	/*
	 ["name"]=> string(21) "01031401-page-001.jpg" 
	 ["type"]=> string(10) "image/jpeg" 
	 ["tmp_name"]=> string(29) "D:\Worc\xampp\tmp\php1269.tmp" 
	 ["error"]=> int(0) 
	 ["size"]=> int(592788) 
	*/
	
	function multipleUpload(){
		GLOBAL $target_dir;
		
		for($x = 0; $x < count($_FILES["selectedFile"]["size"]); $x++){
			$filename = $_FILES["selectedFile"]["name"][$x];
			$filetype = $_FILES["selectedFile"]["type"][$x];
			$filetmp = $_FILES["selectedFile"]["tmp_name"][$x];
			$fileerror = $_FILES["selectedFile"]["error"][$x];
			$filesize = $_FILES["selectedFile"]["size"][$x];
			
			$target_file = $target_dir . basename($filename);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
			if ($filesize > 500000000000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			} else {
				if (move_uploaded_file($filetmp, $target_file)) {
					echo "The file ". basename( $filename). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}
		}
	}
	system("start D:\\Worc\\xampp\\htdocs\\Printing\\transfer");
	header("Location: index.php?success");
?>