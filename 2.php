<?php

include("dataConnected.php");

//if(isset($_POST["mail"]) && isset($_POST["if_use_mask"])){

$aaa = $_POST["mail"];
echo($_POST["if_use_mask"]);

if($_POST["if_use_mask"]==0){
	echo($aaa);
	//echo("<script>console.log(); </script>");
	$mail = mysql_real_escape_string($_POST["mail"]);
	mysql_query("UPDATE `user` 
				 SET `if_use_mask` = 0, `mail` = '$mail'
				 WHERE `mail`= '$mail';");
}
else{
	
/*
	$whiteList = array('txt', 'jpg', 'png');
	$newDir = "./uploadFile/";
	 
	if($_FILES["testFile"]["name"]!=NULL){ // 程式從檔案上傳
		// explode: 切割字串, end: 取最後一個結果
		$extension = strtolower(end(explode(".", $_FILES["testFile"]["name"])));
		if( in_array($extension, $whiteList) &&
			$_FILES["testFile"]["size"]<=1024*1024){
				$resultStr = "Submit file OK.";
				move_uploaded_file($_FILES["testFile"]["tmp_name"], $newDir.time().".".$extension);
		}
		else {
			$resultStr = "Submit file GG!!";
		}
		echo($resultStr);
	}
*/
	//echo("<script>console.log(\"mask\"); </script>");
	//$maskName = mysql_real_escape_string($_POST["maskName"]);
	$mail = mysql_real_escape_string($_POST["mail"]);
	
	//$maskPhoto = mysql_real_escape_string($_POST["maskPhoto"]);
	//$maskPhoto = mysql_real_escape_string($newDir.time().".".$extension);
	mysql_query("UPDATE `user` 
				 SET `if_use_mask` = 1, `mail` = '$mail'
				 WHERE `mail`= '$mail';");
	
}

?>
