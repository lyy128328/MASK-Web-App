<?php

ini_set("display_errors", 0);
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL ^ E_WARNING);



include("dataConnected.php");


	
	
	
	

	$whiteList = array('txt', 'jpg', 'png');
	$newDir = "./uploadFile/";
	 
	if($_FILES["testFile"]["name"]!=NULL){ // 程式從檔案上傳
		// explode: 切割字串, end: 取最後一個結果
		//$extension = strtolower(end(explode(".", $_FILES["testFile"]["name"])));
		$extension = end(explode(".", $_FILES["testFile"]["name"]));
		if( in_array($extension, $whiteList) &&
			$_FILES["testFile"]["size"]<=1024*1024){
				$resultStr = "Submit file OK.";
				move_uploaded_file($_FILES["testFile"]["tmp_name"], $newDir.time().".".$extension);
		}
		else {
			$resultStr = "Submit file GG!!";
		}
		$maskName = $_POST["maskName"];
		$maskPhoto = $newDir.time().".".$extension;
		$mail = $_POST['mail'];
		// echo($maskName);
		// echo($maskPhoto);
		// echo($mail);
		// echo("<script>console.log(".$maskName."); </script>");
		mysql_query("UPDATE `user` 
				 SET `if_use_mask` = 1, `maskName` = '$maskName', `maskPhoto` = '$maskPhoto'
				 WHERE `mail`= '$mail';");
	}

	
//}
//}
?>
<html>
<head>
<script type="text/javascript" src="jquery-3.1.1.js"></script>
<script type="text/javascript" src="script.css"></script> 
<meta charset="UTF-8" />
</head>
<style>
@font-face{
		font-family:words;
		src: url(font/SugarpunchDEMO.otf);
	}
@font-face{
		font-family:Head;
		src: url(font/Wallpoet-Regular.ttf);
	}		
@font-face{
		font-family:HI;
		src: url(font/BreeSerif-Regular.ttf);
	}	
body{
background-repeat:no-repeat;
background-attachment:fixed;
background-position:center;
background-size:cover;
}
#HEAD{
position:absolute;
top:0.5%;
font-size:45px;
font-family:Head;
}
#box{
	     position:absolute;	
         top:14.5%;
		 left:2%;
		 width: 9%;
		 height:28%;
		border: 8px solid blue;
		padding: 0.5%;
		
}
#photo
{
 position:absolute;	
 top:20%;
 left:4%;
	
}
 #nickname{
 position:absolute;
 top:36%;	
 left:5%;
 }
 #friend_list{
position:absolute;
 top:21%;	
 left:78%	
}
 #friend_list1{
 position:absolute;
 top:10%;	
 left:78%;	
 background-color:blue;
 width:290px;
 height:40px;
 font-size:30px;
 font-family:HI;
}
#rand{
 position:absolute;
 top:6%;	
 left:81%;	
 background-color:blue;
 width:230px;
 height:40px;
 font-size:30px;
 font-family:HI;
}

 #msg{
 position:absolute;
 bottom:3%;
 left:16% ;
 }
 #msgsend{
 position:absolute;
 bottom:3%;
 left:69.5% ;
 font-family:HI;
 }
#div{
	position:absolute;	
     top:55%;
	 left:1%;
	
}
#showMsgHere{
	 position:absolute;	
     top:15%;
	 margin-left:15%;
	
}
#心情小語{
	position:absolute;	
     top:48%;
	 left:3%;
	 font-family:words;
	 
}
.FriendList_btn{
 display: inline-block;
 border:1px solid #BFBFBF;
 color: #8C8C8C;
 border-radius: 0px 9px 6px;
 -webkit-border-radius: 0px 9px 6px;
 -moz-border-radius: 0px 9px 6px;
 font-family: Verdana;
 width: auto;
 height: auto;
 font-size: 18px;
 padding: 10px 40px;
 width: 230px;
 background-color: #FCFAF9;
}
.FriendList_btn:hover, .FriendList_btn:active{
 border:1px solid #BFBFBF;
 color: #8C8C8C;
 background-color: #E8E8E8;
}

.button1{
 display: inline-block;
 border:3px solid #BDC5C9;
 color: #000000;
 border-radius: 0;
 -webkit-border-radius: 0;
 -moz-border-radius: 0;
 font-family: Impact;
 width: 124px;
 height: 45px;
 font-size: 22px;
 padding: 5px 0px;
 box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
 -moz-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
 -webkit-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
 background-image: linear-gradient(to bottom, #C5C8FC, #3E37FC);
 background-color: #E3E7FC;
}
.button1:hover, .button1:active{
 border:3px solid #1C3596;
 color: #000000;
 box-shadow: 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
 -moz-box-shadow: 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
 -webkit-box-shadow: 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
 background-color: #4F35FC;
}
#rand
{
	position:absolute;	
     top:85%;
	 left:78%;
	 font-family:words;
	 height:11%;
	 width:20%;
		
}
</style>
    <meta charset="UTF-8" />
    <style>
        table,tr,td{border:1px dashed}
        table{width:100%;height:100%}
        #showMsgHere{width:100%;height:100%;font-size:20px;resize:none;}
    </style>
    <script type="text/javascript" src="jquery-3.1.1.js"></script>
<script>
	var timer;
function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    if (response.status === 'connected') {
	  getFBInfo();
    } else if (response.status === 'not_authorized') {
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }




  window.fbAsyncInit = function() {
  FB.init({
    //appId      : '637613369745579', //shih-wei
	appId      : '193142654475342', //ying-yi
    cookie     : true,
    xfbml      : true,
    version    : 'v2.8'
  });

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };
  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
	
	
	function getFBInfo(){
		FB.api('/me?locale=en_US&fields=name,email,picture,friends{picture,name}', function(response) {
		  
			
			img_url = response.picture.data['url'];
			
			console.log(response.picture.data['url']);
			//document.getElementById("faceName").innerHTML = response.name;
			//document.getElementById("facePhoto").src = img_url;
			
			console.log(img_url);
			user.setFbHead(img_url);

			//var thing = {name: response.name, email: response.email, img_url: img_url};
			
			//var dJSONObjects = jQuery.parseJSON(JSON.stringify(response));

			//alert("dJSONObjects: " + dJSONObjects);
			
			/*
			
			friend_list = response.friends.data;
		
			output = "";	
			output +=	"<ul>";	
		for (var i = 0; i < friend_list.length; i++) 
		{
					
			output += "<img src="+response.friends.data[i].picture.data['url']+">"+document.getElementById("textarea").value+"</img><input class='dropbtn' id='btn-class' type='button' onClick=\" friend_test("+response.id+","+friend_list[i].id+") ;\"value="+friend_list[i].name+">";
					
			
			}
			output +=	"</ul>";
			document.getElementById("friend_list").innerHTML += output;
			
			*/
			friend_list = response.friends.data;
			/*
			for (var i = 0; i < friend_list.length; i++){
				friends.setVar(i,friend_list[i].id);
			}
			*/
			friends.setVar(0,friend_list[0].id);
			$.when($.ajax({                                      
			  url: '6.php',  

			  type: "POST",
				
			  dataType: 'json',
			  
			  data: {'json' : JSON.stringify(response) },
			  
			  success: function(data) 
			  {		document.getElementById("friend_list").innerHTML += data;		
			  } 
			})).done();
			
			
			
			$.when($.post({                                      
			  url: 'api.php',       

			  data: {'myId': response.id},
		 
			  success: function(data) 
			  {
				  
				  
				
				var v;
				var i;
				var list;
				var str;
				
				for(i=0; i<data.length; i++)
					v += data[i];
				
				str = v.replace("[", "");
				str = str.replace("]", "");
				str = str.replace(/\"/g, "");
				
				l = str.split(",");
				console.log(l[5]);
				user.setVar(l[0], l[1],l[3],l[4],l[5],l[6],l[7]);
                 
				if(user.if_use_mask==0){
					document.getElementById("nickname").innerHTML = user.name;
					document.getElementById("photo").src = user.img_url;
					console.log(user.name);
					console.log(user.img_url);
				}
				else{
					document.getElementById("nickname").innerHTML =user.maskName;
					document.getElementById("photo").src = user.maskPhoto;
				}
				
					show_if_new_msg(response.id);
			  } 
			}));			
			
		});		
	}
	
	
	
	function friend_test(myId,friendId)
	{
		x = true;
		if(document.getElementById(friendId+"newmsg"))
		{
			document.getElementById(friendId+"newmsg").src = '';
		}
		
		if(x)
		{
			clearTimeout(timer);
		}
		
		
		//clearTimeout(timer);
		$.when(
		$.ajax({                                      
			  url: '4.php',       
				
			  type: "POST",

			  data: "myId="+myId+"&friendId="+friendId,

			  success: function(data) 
			  {			  
				 showMsg(myId,friendId);
				x=false;
				//setInterval("showMsg("+myId+","+friendId+");", 700);
				$("#msgsend").unbind("click");
				$("#msgsend").click(function(){ sendMsg(myId,friendId);});				
			  } 
			})
			
			).done(
			);

		
    }
	
	//chatroom
    function sendMsg(myId,friendId){
		
		var name;
		var photo;
		
		if(user.if_use_mask==0){
			name = user.name;
			photo = user.img_url;
		}
		else{
			name = user.maskName;
			photo = user.maskPhoto;
		}
		
        $.post("ajax_chatroom_insert.php","myId="+myId+"&friendId="+friendId+"&msg="+$("#msg").val()+"&if_use_mask="+user.if_use_mask,function(data){});
        $("#msg").val("");
    }
    
    function showMsg(myId,friendId)
	{
		$.when(
		$.ajax({                                      
			  url: 'ajax_chatroom_disp.php',       
				
			  type: "POST",

			  data: "myId="+myId+"&friendId="+friendId,

			  success: function(data) 
			  {		
				$("#showMsgHere").val(data);
				timer = setTimeout("showMsg("+myId+","+friendId+");", 700);
			  } 
			})
			).done(
				//window.location.replace('ajax_chatroom_disp.php')
			);
	 }
	function show_if_new_msg(myId)
	{
		$.when(
		$.ajax({                                      
			  url: '5.php',       
				
			  type: "POST",

			  data: "myId="+myId,
			  
			  datatype: 'json',
			  
			  success: function(data) 
			  {
				new_msg_data = data.split(",");  
				
				
				for(var i = 0;i<new_msg_data.length-1;i++)
				{
					if(document.getElementById(new_msg_data[i]))
					{
						document.getElementById(new_msg_data[i]).src = 'new_mail.png';
					}
					
				}
					
				
				
				setTimeout("show_if_new_msg("+myId+");", 700);
			  } 
			})
			).done(
			);
	 }
	 
	 
	 
	 function randChoose(){
		 /*
		 
		 FB.api('/me?locale=en_US&fields=name,email,picture,friends{picture,name}', function(response) {
			 
			 console.log(response.friends.data[0].id);
		 */
		 $.when($.ajax({                                      
			  url: 'fuck7.php',  

			  type: "POST",
				
			  //dataType: 'json',
			  
			  //data: {'json' : JSON.stringify(response) },
			  
			  success: function(data) 
			  {		
				  console.log("yes");
				  var list = data.split(",");
				  delete list[(list.length)-1];
				  console.log(list.length);
				  var rand = list[Math.floor(Math.random() * (list.length-1))];
				  console.log(rand);
				  friend_test(rand,user.userid);		
			  } ,
			  error: function(error){
				  console.log("no");
				  console.log(error);
			  }
			})).done();
			
		//var randId = friends.friendId0;
		//console.log(randId);
		//friend_test(user.userid,randId);
		 
	 }
	//data
	function User() {
		var id;
		var name;
		var img_url;
		var email;
		var userid;
		var if_use_mask;
		var maskName;
		var maskPhoto;
		}
		
	function Friends(){
		var friendId0="";
		var friendId1="";
		var friendId2="";
		var friendId3="";
		var friendId4="";
		
	}
Friends.prototype.setVar = function(i,id){
	
	if(i==0)
		friendId0 = id;
	if(i==1)
		friendId1 = id;
	if(i==2)
		friendId2 = id;
	if(i==3)
		friendId3 = id;
	if(i==4)
		friendId4 = id;
	
				//this.friendId[i] = id;
			
}

User.prototype.setVar = function(id, name, email, userid, if_use_mask, maskName, maskPhoto){
	this.id = id;
	this.name = name;
	//this.img_url = img_url;
	this.email = email;
	this.userid = userid;
	this.if_use_mask = if_use_mask;
	this.maskName = maskName;
	this.maskPhoto = maskPhoto; 
	
}

User.prototype.setBool = function(if_use_mask){
	this.if_use_mask = if_use_mask;
}

User.prototype.setFbHead = function(img_url){
	this.img_url = img_url;
}
var user = new User();
var friends = new Friends();
function Done() {
      $("#textarea").attr('readonly', true);
	  }
	  
 // edit div
function Edit() {
       $("#textarea").attr('readonly', false);
   }
function words_deal() {
	var curLength = $("#textarea").val().length;
	if (curLength > 25) {
		var num = $("#textarea").val().substr(0, 25);
		$("#textarea").val(num);
		alert("超過字數限制，多出的字將被移除！");
	} else {
		$("#textCount").text(25 - $("#textarea").val().length);
	}
} 
</script>


<body background="background.jpg">
<table >
<tr><td><h1 id="HEAD"style="color:white;"> M A S K </h1> </td><tr>

<input type="button"  class="button1" id="rand" value="Random" onClick="randChoose()">
<p align="center" id="friend_list1" style="color:white" >Friends<p> 
<img id="photo" style="max-width:7%;height:14%"></img>
<text id="nickname" placeholder="Name" style="color:white;font-size:20px"></text>
<div id="box"></div>
<p id="心情小語" style="color:white;">~Say Something~</p>
<div id="div">
<textarea  cols="38" rows="8" id="textarea"  onkeyup="words_deal();" style="font-size:20px;color:blue;height:60%;width:40%;background-color:lightyellow;" >hiii</textarea><br>
<input type="button"  class="button1" style="width:20%" value="Done" onclick="Done()"><input type="button"  class="button1" style="width:20%" value="Edit" onclick="Edit()"></div>






	 
<tr height="80%" ><td ><textarea id="showMsgHere" style="height:75%;width:61%;background-color:lightgray;" disabled="disabled"></textarea></td></tr>
	
<tr><td>			
<input type="text" id="msg" placeholder="message"  style="font-size:24px;width:53%">
<input type="button"  style="width:7.5%;height:5.5%;font-size:20px;" id="msgsend" value="Send">
<br>
</td></tr>
<div class="dropdown" id="friend_list"></div>

<!--<input type="button"  class="button1" id="rand" value="Random" onClick="randChoose()" style="width:20%">-->

</table> 
</body></html>