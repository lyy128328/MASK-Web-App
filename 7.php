<?php

include("dataConnected.php");





$friendsql = "SELECT `userid` FROM `user`";
$friendinquireresult = mysql_query($friendsql);
$friendrow1 = mysql_fetch_array($friendinquireresult);
$friendrow2 = mysql_fetch_array($friendinquireresult);

while($row=mysql_fetch_array($friendinquireresult)) { 
echo $row[0].","; 
} 

//echo $friendrow[1];
/*

if(isset($_POST["json"])){
	
	$userdata = json_decode($_POST["json"]);
	$userid = mysql_real_escape_string($userdata->id);

	$friendlist = $userdata->friends->data;
	
	$output = "";	
	$output = $output."<table>";	
	
	$a = rand(0,count($friendlist)-1);
	
	$rand_keys = array_rand($friendlist, 1);
	
	
	
	
	// foreach($friendlist as $each_friend_data)
	// {
		// $friendsql = "SELECT * FROM `user` WHERE userid='".$each_friend_data->id."' ";
		// $friendinquireresult = mysql_query($friendsql);
		// $friendrow = mysql_fetch_array($friendinquireresult);

		// if($friendrow['if_use_mask']==1)
		// {
			// $output = $output."<tr ><td><input id=\"".$each_friend_data->id."\" type=\"button\"  onClick=\" friend_test(".$userid.",".$each_friend_data->id.");\"   value=\"".$friendrow['maskName']."\"></input></td><td><p id=\"".$each_friend_data->id."newmsg\" ></p></td></tr>";
		// }
		// else
		// {
			// $output = $output."<tr ><td><input id=\"".$each_friend_data->id."\" type=\"button\"  onClick=\" friend_test(".$userid.",".$each_friend_data->id.");\"   value=\"".$each_friend_data->name."\"></input></td><td><p id=\"".$each_friend_data->id."newmsg\" ></p></td></tr>";
		// }
	// }
	// $output = $output."</table>";
	//echo("console.log(."$rand_keys->id.")");
	//echo json_encode(($friendlist[$a])->id);
	echo(($friendlist[$a])->id);
}
*/
?>
