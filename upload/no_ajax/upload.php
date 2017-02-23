<?php
	/*
	 * array (size=1)
  		'file' => 
    		array (size=5)
	      'name' => string 'addr.xls' (length=8)
	      'type' => string 'application/vnd.ms-excel' (length=24)
	      'tmp_name' => string 'D:\wamp\wamp\tmp\phpBFC6.tmp' (length=28)
	      'error' => int 0
	      'size' => int 23040
	 * 
	 * 
	 **/
//	var_dump($_FILES);
	if(is_uploaded_file($_FILES["file"]["tmp_name"])){
		move_uploaded_file($_FILES["file"]["tmp_name"],"a.xls");
		echo "ok";
	}
?>