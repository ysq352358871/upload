<?php
	if(is_uploaded_file($_FILES["file"]["tmp_name"])){
		$posi=strripos($_FILES["file"]["name"],".");
		$str=substr($_FILES["file"]["name"],$posi);
		echo $str;
		if($str==".jpeg"||$str==".jgp"||$str==".xlsx"||$str==".doc"){
			$url="img/".$_FILES["file"]["name"];
			move_uploaded_file($_FILES["file"]["tmp_name"],$url);
		}else{
			echo "文件格式不正确！";
		}
		
	}
?>