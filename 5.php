<?php
include("dataConnected.php");

session_start();
 
if(!isset($_SESSION['if_new_msg']))
{
    $_SESSION['if_new_msg'] = 0;
	$if_new_msg = $_SESSION['if_new_msg'];
}
else {
    $if_new_msg = $_SESSION['if_new_msg'];
}



if(isset($_POST["myId"])&&$_POST["myId"]!="")
{
	//$if_new_msg = 0;
	$myid = mysql_real_escape_string($_POST["myId"]);
	$mysql = "SELECT * FROM `".$myid."receivetable` WHERE ID>$if_new_msg ";
	$myinquireresult = mysql_query($mysql);
	
	$friend_list = [];
	$i = 0;
	
	if(mysql_num_rows($myinquireresult)>0)
	{
		$_SESSION['if_new_msg'] = $_SESSION['if_new_msg']+mysql_num_rows($myinquireresult);
		
		
		
		while($row = mysql_fetch_array($myinquireresult))
		{
			$yee = $row['sender']."newmsg";
			$friend_list[$yee] = $row['sender']."newmsg";
		}
		$yee = "";
		$fuck = array_keys($friend_list);
		
		
		foreach($fuck as $each_new_msg_id)
		{
			$yee = $yee.$each_new_msg_id;
			$yee = $yee.",";
		}
		
		echo $yee;
		
	}

}

?>