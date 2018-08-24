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
	
	
	echo "iamhandsome".$myid." andyoufuck ".$friendrow['ID'];
	
	
	
	if($myrow['ID']!=""&&$friendrow['ID']!="")
	{
		if($myrow['ID']>$friendrow['ID'])
		{

			mysql_query("CREATE TABLE IF NOT EXISTS `messageboard".$friendrow['ID']."to".$myrow['ID']."`
				( `time` timestamp NOT NULL default CURRENT_TIMESTAMP,
					`nickname` varchar(512) NOT NULL,
					`msg` varchar(512) NOT NULL
				) ENGINE=MyISAM DEFAULT CHARSET=utf8");
				
				
			echo "fucktable".$friendrow['ID']."to".$myrow['ID'];
				
		}
		else
		{
			mysql_query("CREATE TABLE IF NOT EXISTS `messageboard".$myrow['ID']."to".$friendrow['ID']."`
				( `time` timestamp NOT NULL default CURRENT_TIMESTAMP,
					`nickname` varchar(512) NOT NULL,
					`msg` varchar(512) NOT NULL
				) ENGINE=MyISAM DEFAULT CHARSET=utf8");
				
				
			echo "fucktable".$myrow['ID']."to".$friendrow['ID'];
				
		}	
	}
}


?>

