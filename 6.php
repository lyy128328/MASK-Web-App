<?php

include("dataConnected.php");

if(isset($_POST["json"])){
	
	$userdata = json_decode($_POST["json"]);
	$userid = mysql_real_escape_string($userdata->id);

	$friendlist = $userdata->friends->data;
	
	$output = "";	
	$output = $output."<table>";	
	
	foreach($friendlist as $each_friend_data)
	{
		$friendsql = "SELECT * FROM `user` WHERE userid='".$each_friend_data->id."' ";
		$friendinquireresult = mysql_query($friendsql);
		$friendrow = mysql_fetch_array($friendinquireresult);

		if($friendrow['if_use_mask']==1)
		{
			$output = $output."<tr ><td><img style='width:50px;height:50px;' src=\"".$friendrow['maskPhoto']."\"></img><input class=\"FriendList_btn\"id=\"".$each_friend_data->id."\" type=\"button\"  onClick=\" friend_test(".$userid.",".$each_friend_data->id.");\"   value=\"".$friendrow['maskName']."\"></input></td><td><img style='width:50px;height:50px;'class=\"NewMsg\" id=\"".$each_friend_data->id."newmsg\" ></img></td></tr>";
		}
		else
		{
			$output = $output."<tr ><td><img style='width:50px;height:50px;' src=\"".$friendrow['post']."\"></img><input class=\"FriendList_btn\" id=\"".$each_friend_data->id."\" type=\"button\"  onClick=\" friend_test(".$userid.",".$each_friend_data->id.");\"   value=\"".$each_friend_data->name."\"></input></td><td><img  style='width:50px;height:50px;'class=\"NewMsg\" id=\"".$each_friend_data->id."newmsg\" ></img></td></tr>";
		}
	}
	$output = $output."</table>";
	echo json_encode($output);
}
?>
