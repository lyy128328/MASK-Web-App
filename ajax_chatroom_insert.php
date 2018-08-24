<?php
include("dataConnected.php");
 

if(isset($_POST["myId"])&&isset($_POST["friendId"])&&isset($_POST["msg"])&&$_POST["myId"]!=""&&$_POST["friendId"]!=""&& $_POST["msg"]!=""&& $_POST["if_use_mask"]!="")
{
	$msg = mysql_real_escape_string($_POST["msg"]);
	$myid = mysql_real_escape_string($_POST["myId"]);
	$friendid = mysql_real_escape_string($_POST["friendId"]);
	$if_use_mask = mysql_real_escape_string($_POST["if_use_mask"]);
	
	$mysql = "SELECT * FROM `user` WHERE userid='$myid' ";
	$myinquireresult = mysql_query($mysql);
	$myrow = mysql_fetch_array($myinquireresult);
	
	$friendsql = "SELECT * FROM `user` WHERE userid='$friendid' ";
	$friendinquireresult = mysql_query($friendsql);
	$friendrow = mysql_fetch_array($friendinquireresult);
	echo "fuckme : ".$myrow['ID']." fuckyou : ".$friendrow['ID'];
	if($myrow['ID']>$friendrow['ID'])
	{
		if($if_use_mask = $_POST["if_use_mask"]==0)
		{
			$sql = "INSERT INTO `messageboard".$friendrow['ID']."to".$myrow['ID']."` (nickname,msg) VALUES ('".$myrow['username']."','$msg')";
			mysql_query($sql);
			
		}
		else
		{
			$sql = "INSERT INTO `messageboard".$friendrow['ID']."to".$myrow['ID']."` (nickname,msg) VALUES ('".$myrow['maskName']."','$msg')";
			mysql_query($sql);	
		}
	}
	else
	{
		
		if($if_use_mask = $_POST["if_use_mask"]==0)
		{
			$sql = "INSERT INTO `messageboard".$myrow['ID']."to".$friendrow['ID']."` (nickname,msg) VALUES ('".$myrow['username']."','$msg')";
			mysql_query($sql);
			
		}
		else
		{
			$sql = "INSERT INTO `messageboard".$myrow['ID']."to".$friendrow['ID']."` (nickname,msg) VALUES ('".$myrow['maskName']."','$msg')";
		
			mysql_query($sql);
		
		}
	}
	
	
	$sql = "INSERT INTO `".$friendrow['userid']."receivetable` (sender,msg) VALUES ('".$myrow['userid']."','$msg')";
	mysql_query($sql);
}
?>