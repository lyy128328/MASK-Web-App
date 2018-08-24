<?php
include("dataConnected.php");



if(isset($_POST["myId"])&&isset($_POST["friendId"])&&$_POST["myId"]!=""&&$_POST["friendId"]!="")
{
	$myid = mysql_real_escape_string($_POST["myId"]);
	$friendid = mysql_real_escape_string($_POST["friendId"]);
	$mysql = "SELECT * FROM `user` WHERE userid='$myid' ";
	$myinquireresult = mysql_query($mysql);
	$myrow = mysql_fetch_array($myinquireresult);
	
	$friendsql = "SELECT * FROM `user` WHERE userid='$friendid' ";
	$friendinquireresult = mysql_query($friendsql);
	$friendrow = mysql_fetch_array($friendinquireresult);
	
	if($myrow['ID']>$friendrow['ID'])
	{
		
		$sql = "SELECT * FROM (SELECT * from messageboard".$friendrow['ID']."to".$myrow['ID']." ORDER BY time DESC LIMIT 500) AS OAO ORDER BY time";
		$result = mysql_query($sql);
		if(mysql_num_rows($result)>0){
			while($row = mysql_fetch_array($result)){
				echo $row["nickname"]."(".$row["time"]."): ".$row["msg"]."\n";
			}
		}
	}
	else
	{
		$sql = "SELECT * FROM (SELECT * from messageboard".$myrow['ID']."to".$friendrow['ID']." ORDER BY time DESC LIMIT 500) AS OAO ORDER BY time";
		$result = mysql_query($sql);
		if(mysql_num_rows($result)>0){
			while($row = mysql_fetch_array($result)){
				echo $row["nickname"]."(".$row["time"]."): ".$row["msg"]."\n";
			}
		}
	}

}
?>