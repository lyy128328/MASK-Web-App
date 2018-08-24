<!DOCTYPE html>
<html>
<head>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<style>
@font-face{
		font-family:HI;
		src: url(font/BreeSerif-Regular.ttf);
	}
@font-face{
		font-family:Head;
		src: url(font/Wallpoet-Regular.ttf);
	}	
body{
background-repeat:no-repeat;
background-attachment:fixed;
background-position:center;
background-size:cover;
}

h1{
position:absolute;
top:0.5%;
font-size:45px;
font-family:Head;
}

#box{
		width: 440px;
		height: 500px;
		border: 25px solid black;
		padding: 5px;
		margin: 25px;
}
#status1
{
	font-family:HI;
	font-size:30px;
}


#label_upload{
	position:absolute;
    top:60%;
    left:33.5%;
  font-family:HI;
}
#File_btn{
	position:absolute;
    top:60%;
    left:43.5%;
}
#MaskName_text{
	position:absolute;
    top:63%;
    left:33.5%;	
	font-family:HI;
}
#MaskName_input{
	position:absolute;
    top:63%;
    left:43.5%;	
}
#Email_show{
	position:absolute;
    top:66%;
    left:43.5%;	
}
#Mask_submit{
	position:absolute;
    top:60%;
    left:57%;
  display: inline-block;
 border:3px solid #BDC5C9;
 color: #5E2370;
 border-radius: 0;
 -webkit-border-radius: 0;
 -moz-border-radius: 0;
 font-family: Impact;
 width: 124px;
 height: 59px;
 font-size: 22px;
 padding: 13px 9px;
 box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
 -moz-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
 -webkit-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
 background-image: linear-gradient(to left, #FCE5F0, #9C95FC);
 background-color: #E3E7FC;
}
#Mask_submit:hover, #Mask_submit:active{
 border:3px solid #1F8296;
 color: #201AE8;
 box-shadow: 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
 -moz-box-shadow: 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
 -webkit-box-shadow: 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
 background-color: #3297FC;
}
#Mask_img{
	position:absolute;
    top:69.5%;
    left:43.5%;	
	
}

#blah{
position:absolute;
top:66%;
left:43%;	
}
#blah1{
position:absolute;
top:56%;
left:43%	
}
#blah2{
position:absolute;
top:61%;
left:43%	
}

#Confirm{
display: inline-block;
 border:3px solid #BDC5C9;
 color: #5E2370;
 border-radius: 10px 10px 10px 10px;
 -webkit-border-radius: 10px 10px 10px 10px;
 -moz-border-radius: 10px 10px 10px 10px;
 font-family: Impact;
 width: 110px;
 height: 42px;
 font-size: 16px;
 padding: 5px 18px;
 box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
 -moz-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
 -webkit-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
 background-image: linear-gradient(to left, #FCE5F0, #9C95FC);
 background-color: #E3E7FC;
}
#Confirm:hover, #Confirm:active{
 border:3px solid #1F8296;
 color: #201AE8;
 box-shadow: 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
 -moz-box-shadow: 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
 -webkit-box-shadow: 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
 background-color: #3297FC;
}





@import url('http://fonts.googleapis.com/css?family=Lato');

body, html{
  height: 100%;
  
	font-family: 'Lato', sans-serif;
}

//code from web
.container{
  display: block;
  position: absolute;
  margin: auto;
  height: 450px;
  width: 400px;
  bottom: 0; left:0; right: 0; top:0;
  padding: 0;
}

h2 {
	color: #DDDDDD;
	font-weight: 150;
}

.container ul{
  list-style: none;
  height: 100%;
  width: 100%;
  margin: 0;
  padding: 0;
}


ul li{
  color: #DDDDDD;
  display: block;
  position: relative;
  float: left;
  width: 100%;
  height: 100px;
	border-bottom: 2px solid #111111;
}

ul li input[type=radio]{
  position: absolute;
  visibility: hidden;
}

ul li label{
  display: block;
  position: relative;
  font-weight: 350;
  font-size: 2.35em;
  padding: 25px 25px 25px 80px;
  margin: 5px auto;
  height: 30px;
  z-index: 8;
  cursor: pointer;
  -webkit-transition: all 0.25s linear;
}

ul li:hover label{
	color: #FFFFFF;
}

ul li .check{
  display: block;
  position: absolute;
  border: 5px solid #DDDDDD;
  border-radius: 100%;
  height: 25px;
  width: 25px;
  top: 30px;
  left: 20px;
	z-index: 5;
	transition: border .25s linear;
	-webkit-transition: border .25s linear;
}

ul li:hover .check {
  border: 5px solid #FFFFFF;
}

ul li .check::before {
  display: block;
  position: absolute;
	content: '';
  border-radius: 100%;
  height: 15px;
  width: 15px;
  top: 5px;
  left: 5px;
  margin: auto;
	transition: background 0.25s linear;
	-webkit-transition: background 0.25s linear;
}

input[type=radio]:checked ~ .check {
  border: 5px solid #0DFF92;
}

input[type=radio]:checked ~ .check::before{
  background: #0DFF92;
}

input[type=radio]:checked ~ label{
  color: #0DFF92;
}

</style>
<script>


function User() {
　　　　var name;
		var img_url;
		var email;
		var if_use_mask;
		var maskName;
		var maskPhoto
　　}

User.prototype.setVar = function(name, img_url, email, if_use_mask, maskName, maskPhoto){
	this.name = name;
	this.img_url = img_url;
	this.email = email;
	this.if_use_mask = if_use_mask;
	this.maskName = maskName;
	this.maskPhoto = maskPhoto; 
	
}

User.prototype.setBool = function(if_use_mask){
	this.if_use_mask = if_use_mask;
}


var user = new User();
	function selectFace(){
		
		user.setBool(0);
		
    }
	
	function selectMask(){
		
		user.setBool(1);
		
	}
	
	function confirm(){
		
		console.log("!!!!")
		
		if(user.if_use_mask==0){
			
			var name = user.name;
			var img_url = user.img_url;
			
           
			console.log(user.email);
			console.log(name);
			console.log(img_url);
			
			$.when($.ajax({                                      
			  url: '2.php',  

			  type: "POST",
			  
			  dataType:'text',
				
			  
			  data: {'mail' : user.email,'if_use_mask': 0},
			  
			  success: function(data) 
			  {			
					console.log("I am handsome");
					console.log(data);
			  } 
			})).done(
				window.location.replace('third.php')
			);
			
			
			
			
		}
		else{
			
			var name = $('input[name="name"]').val();
			var fuk = "mail="+user.email+"&if_use_mask=1";
				
				$.when($.ajax({                                      
			  url: 'third.php',  

			  type: "POST",
			  
			  dataType:'text',
				
			  
			  data: "mail="+user.email,
			  
			  success: function(data) 
			  {			
					console.log("I am handsome");
					console.log(data);
			  } 
			})).done(
				console.log(data)
			);
		
		
		}
		
		return false;
		
	}
/////FB 資料
var pass
var pass_img
var pass_name
var pass_btn
var pass_btn1
var sec_third_img

//solve removeElement
var hasCreatedMask = false
var hasCreatedFace = false

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
  
  
  function getFBInfo(){
		FB.api('/me?locale=en_US&fields=name,email,picture,friends', function(response) {
		  
			
			img_url = response.picture.data['url'];
			
			//document.getElementById("faceName").innerHTML = response.name;
			//document.getElementById("facePhoto").src = img_url;
			
			
			user.setVar(response.name,img_url,response.email,0,"","");
		});
		
		
	}
  
  
  
  

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
/////FB 資料  
/////MASK

    function chooseFile() {
      $("#fileInput").click();
   }
  function mask_inn(){
		
		hasCreatedMask = true;
		
        selectMask();
		
		//new version
		output = "<form action='third.php' method='post' onsubmit='return confirm();' enctype='multipart/form-data'> <label id='label_upload' style='color:white;' for='file'>Upload your file: </label><input id='File_btn' type='file' name='testFile' onchange=readURL(this)><br><label id='MaskName_text'style='color:white;'>Input MaskName: </label><input  id='MaskName_input' type='text' name='maskName'><br><input id='Email_show' type='text' name='mail' value="+user.email+"><br><input id='Mask_submit' type='submit' name='submit' value='Submit'></form><div><img id='Mask_img'></img></div>";	
		/*	 
			output +=	"<table>";	
			for (var i = 0; i < friend_list.length; i++) 
			{
					
					output += "<tr ><td><input id=\""+friend_list[i].id+"\" type=\"button\"  onClick=\" friend_test("+response.id+","+friend_list[i].id+");\"   value=\""+friend_list[i].name+"\"></input></td></tr>";
			}
			output +=	"</table>";
			*/
			document.getElementById("myList").innerHTML = output;	
			
		/*
		//製造元件
   		pass = document.createElement('input');
		pass.type = 'file';
		pass.id='blah1';
		pass.onchange= function(){readURL(this);}
		
		pass_img = document.createElement('img');
		pass_img.id = 'blah';
		pass_img.src='';
		
		pass_name = document.createElement('input');
		pass_name.type = 'text';
		pass_name.id = 'blah2';
		pass_name.placeholder='暱稱';
		pass_name.size='16';
		pass_name.name='name';

		
	 document.getElementById("myList").appendChild(pass);
	 document.getElementById("myList").appendChild(pass_img);
	 document.getElementById("myList").appendChild(pass_name);
	 */
	 //清空FB資料
	 if(hasCreatedFace){
	 	document.getElementById('status1').innerHTML ='';
	    document.getElementById('photo1').src = "";
		document.getElementById('photo1').width="";
		document.getElementById('photo1').height="";
		document.getElementById('fbConfirm').innerHTML="";
		hasCreatedFace = false;
	 }
		//removeElement('confirm');
		
	}
    function readURL(input) {

		
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(120)
                    .height(120);
            };
            reader.readAsDataURL(input.files[0]);
			
			console.log(input.files[0]);
        }
    }
  function removeElement(divNum) {

  var d = document.getElementById('myList');

  var olddiv = document.getElementById(divNum);

  d.removeChild(olddiv);

  }     

  /*
  function removeElement1(divNum) {

  var d = document.getElementById('status2');

  var olddiv = document.getElementById(divNum);

  d.removeChild(olddiv);

  }
*/  
  
  
  function face_inn() {
	  
	  hasCreatedFace = true;
	  
     selectFace();
     FB.api('/me', function(response) {
       console.log('Successful login for: ' + JSON.stringify(response));
       document.getElementById('status1').innerHTML =response.name ;
     });
	FB.api('/me/picture', function(response){ 
	var img_url = response.data['url'];
	document.getElementById('photo1').width = 100;
	document.getElementById('photo1').height = 100;
	document.getElementById('photo1').src = img_url;
	
	var output = "<input type='button' id='Confirm'  value='Confirm'  onclick='confirm()'>";
	document.getElementById("fbConfirm").innerHTML = output;
	
	});
	
	
	
	
	if(hasCreatedMask){
		//removeElement('blah');
		//removeElement('blah1');
		//removeElement('blah2');
		document.getElementById("myList").innerHTML = "";
		hasCreatedMask = false;
	}
  }
     function readURL(input) {

		
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#Mask_img')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(150);
            };
            reader.readAsDataURL(input.files[0]);
			
			console.log(input.files[0]);
        }
    }
////MASK
</script>
</head>

<body background="background.jpg">

<div id="top">
<br>
<h1  style="color:white;"> M A S K </h1> 
</div>
<center>
<div id="box" background="background.jpg">
<!--radio button from web-->
	<div class="container">
	
	<h2>FACE / MASK</h2>
	
  <ul>
  <li>
    <input type="radio" id="f-option" name="selector" onclick="face_inn()">
    <label for="f-option">FACE</label>	
   <div class="check"></div>
   </li>
    <div id="status1" style='color:white;'name="insert">
    </div>
    <img id='photo1' name="insert"></img>
	<div id="fbConfirm">
	</div>
	
   <li>
    <input type="radio" id="s-option" name="selector" onclick="mask_inn()">
    <label for="s-option">MASK</label>
    <div class="check"><div class="inside"></div></div>
  </li>
	<div id="myList"></div>
    
    
</ul>
</div>
</center>
<div id="status">
</div>
<input type="hidden" id="jsonstring" name="jsonstring" />

</div>
</body>
</html>