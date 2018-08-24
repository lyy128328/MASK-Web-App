<?php
 
$mysql_host = "localhost";
$mysql_database = "final";
$mysql_user = "icedwater";
$mysql_password = "eecs";
if(!@mysql_connect($mysql_host, $mysql_user, $mysql_password)){
        console.log("無法對資料庫連線");
}

mysql_query("SET NAMES utf8");
 
if(!@mysql_select_db($mysql_database)){
        console.log("無法使用資料庫");
}


mysql_query("CREATE TABLE IF NOT EXISTS `chat` (
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `nickname` varchar(512) NOT NULL,
  `msg` varchar(512) NOT NULL,
  `ip` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

mysql_query("CREATE TABLE IF NOT EXISTS `user` 
			( `ID` int NOT NULL AUTO_INCREMENT,
			`username` varchar(512) NOT NULL,
			`post` varchar(512) NOT NULL, 
			`mail` varchar(512) NOT NULL, 
			`userid` varchar(512) NOT NULL,
			`if_use_mask` int NOT NULL,
			`maskName` varchar(512) NOT NULL,
			`maskPhoto` varchar(512) NOT NULL,
			PRIMARY KEY (ID) 
			) ENGINE=MyISAM DEFAULT CHARSET=utf8");







?>