<?php


include("dataConnected.php");

if(isset($_POST["json"])){
	$userdata = json_decode($_POST["json"]);
	$username = mysql_real_escape_string($userdata->name);
	$post = mysql_real_escape_string($userdata->picture->data->url);
	$mail = mysql_real_escape_string($userdata->email);
	$userid = mysql_real_escape_string($userdata->id);
	
	$sql = "SELECT * FROM `user` WHERE mail='$mail' ";
	
	$inquireresult = mysql_query($sql);
	$row = mysql_fetch_array($inquireresult);
	
	if($row['mail']=='')
	{
		mysql_query("INSERT INTO `user` (username,post,mail,userid,if_use_mask,maskName,maskPhoto) VALUES ('$username','$post','$mail', '$userid',0, '', '') ");
		
		$mydata = mysql_query("SELECT * FROM `user` WHERE mail='$mail' ");
		$mydata = mysql_fetch_array($mydata);
		
		$id = $mydata['ID'];
		mysql_query("CREATE TABLE IF NOT EXISTS `friend".$userid."`
			( `ID` int NOT NULL AUTO_INCREMENT,
			`friend_id` varchar(512) NOT NULL,
			`friend_name` varchar(512) NOT NULL, 
			PRIMARY KEY (ID) 
			) ENGINE=MyISAM DEFAULT CHARSET=utf8");
		
		mysql_query("CREATE TABLE IF NOT EXISTS `".$userid."receiveTable`
				(
					`ID` int NOT NULL AUTO_INCREMENT,
					`time` timestamp NOT NULL default CURRENT_TIMESTAMP,
					`sender` varchar(512) NOT NULL,
					`msg` varchar(512) NOT NULL,
					PRIMARY KEY (ID) 
				) ENGINE=MyISAM DEFAULT CHARSET=utf8");
		$friendlist = $userdata->friends->data;
		
		foreach($friendlist as $each_friend_data)
		{
			mysql_query("INSERT INTO `friend".$userid."` (friend_id,friend_name) VALUES ('$each_friend_data->id','$each_friend_data->name') ");
			mysql_query("INSERT INTO `friend".$each_friend_data->id."` (friend_id,friend_name) VALUES ('$userid','$username') ");
			echo json_encode($each_friend_data->name);
		}
	}
}
else	
{
	echo("failed");
}
?>
