<?php
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["file-upload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$output1=null;
	$output2=null;
	$output3=null;
	$output4=null;
	$output5=null;
	
	// Check if image file is a actual image or fake image / actual document or fake document
	if(isset($_POST["submit"])) 
	{
		$check = getimagesize($_FILES["file-upload"]["tmp_name"]);
		
		if($check !== false) 
		{
			$output1="File is - " . $check["mime"] . ".";
			$uploadOk = 1;
			return $output1;
		} 
		
		else 
		{
			$output1="File is neither an image nor a document.";
			$uploadOk = 0;
			return $output1;
		}
	}

	// Check if file already exists
	if (file_exists($target_file)) 
	{
		$output2="Sorry, file already exists.";
		$uploadOk = 0;
		return $output2;
	}

	// Check file size
	if ($_FILES["file-upload"]["size"] > 500000) 
	{
		$output3="Sorry, your file is too large.";
		$uploadOk = 0;
		return $output3;
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	   && $imageFileType != "gif" && $imageFileType != "pdf" && $imageFileType != ".txt" 
	   && $imageFileType != "docx") 
	   {
			$output4="Sorry, only JPG, JPEG, PNG, GIF, PDF, TXT & DOCX files are allowed.";
			$uploadOk = 0;
			return $output4;
	   }

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) 
	{
		$output5="Sorry, your file was not uploaded.";
		return $output5;
	}	 
	
	// if everything is ok, try to upload file
	else 
	{
		if (move_uploaded_file($_FILES["file-upload"]["tmp_name"], $target_file)) 
		{
			$output5="The file ". basename( $_FILES["file-upload"]["name"]). " has been uploaded.";
			return $output5;
		} 
		
		else 
		{
			$output5="Sorry, there was an error uploading your file.";
			return $output5;
		}
	}
?>
