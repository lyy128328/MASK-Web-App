<!DOCTYPE html>
<html>
<head>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<style>
body{
background-repeat:no-repeat;
background-attachment:fixed;
background-position:center;
background-size:cover;
}

h1{
position:absolute;
top:0.5%;
font-size:40px;
}

#box{
		width: 440px;
		height: 440px;
		border: 25px solid black;
		padding: 5px;
		margin: 25px;
}

.radioBtn{

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
	color: #AAAAAA;
	font-weight: normal;
}

.container ul{
  list-style: none;
  height: 100%;
  width: 100%;
  margin: 0;
  padding: 0;
}


ul li{
  color: #AAAAAA;
  display: block;
  position: relative;
  float: left;
  width: 100%;
  height: 100px;
	border-bottom: 1px solid #111111;
}

ul li input[type=radio]{
  position: absolute;
  visibility: hidden;
}

ul li label{
  display: block;
  position: relative;
  font-weight: 300;
  font-size: 1.35em;
  padding: 25px 25px 25px 80px;
  margin: 10px auto;
  height: 30px;
  z-index: 9;
  cursor: pointer;
  -webkit-transition: all 0.25s linear;
}

ul li:hover label{
	color: #FFFFFF;
}

ul li .check{
  display: block;
  position: absolute;
  border: 5px solid #AAAAAA;
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

</head>


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

function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      //testAPI();
	  getFBInfo();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }




  window.fbAsyncInit = function() {
  FB.init({
    appId      : '193142654475342',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.8' // use graph api version 2.5
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

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





	function selectFace(){
		
		user.setBool(0);
		
    }
	
	function selectMask(){
		
		user.setBool(1);
		
	}
	
	function confirm(){
		
		
		
		if(user.if_use_mask==0){
			
			var name = user.name;
			var img_url = user.img_url;
			
			console.log(img_url);
			
			document.getElementById("faceName").innerHTML = name;
			document.getElementById("facePhoto").src = img_url;
			document.getElementById("maskName").innerHTML = "";
			document.getElementById("maskPhoto").src = "";
			
			console.log(user.email);
			console.log(name);
			console.log(img_url);
			
			
			$.post("2.php","mail="+user.email+"&if_use_mask=0")
			window.location.replace('third.php')
				//console.log(user.email)
			
			
		}
		else{
			
			var name = "Batman";
			var img_url = "batman.jpg";
			
			document.getElementById("maskName").innerHTML = name;
			document.getElementById("maskPhoto").src = img_url;
			document.getElementById("faceName").innerHTML = "";
			document.getElementById("facePhoto").src = "";
			
			
			var fuk = "mail="+user.email+"&if_use_mask=1&maskName="+name+"&maskPhoto="+img_url;
				

				$.post("2.php",fuk);
				

		
				//window.location.replace('api.php');
				window.location.replace('third.php');
				//console.log(user.email)
		
		}
		
	}
	
	function getFBInfo(){
		
		
		
		FB.api('/me?locale=en_US&fields=name,email,picture,friends', function(response) {
		  
			
			img_url = response.picture.data['url'];
			
			//document.getElementById("faceName").innerHTML = response.name;
			//document.getElementById("facePhoto").src = img_url;
			
			
			user.setVar(response.name,img_url,response.email,0,"","");

			
		});
		
		
	}
	
	
	
	
</script>

<body background="background.jpg">
<center>
<div id="top">
<br>
<h1  style="color:white;"> M A S K </h1> 
</div>
<div id="box" background="background.jpg">

<!--radio button from web-->
	<div class="container">
	
	<h2>FACE / MASK</h2>
	
  <ul>
  <li>
    <input type="radio" id="f-option" name="selector" onclick=selectFace()>
    <label for="f-option">FACE</label>
    
    <div class="check"></div>
  </li>
  
  <li>
    <input type="radio" id="s-option" name="selector" onclick=selectMask()>
    <label for="s-option">MASK</label>
    
    <div class="check"><div class="inside"></div></div>
  </li>
  
    
</ul>
</div>

<img id="facePhoto">
</img>
<div id="faceName">
</div>
<img id="maskPhoto">
</img>
<div id="maskName">
</div>

<button id="confirm" onclick=confirm()>
Confirm
</button>

</div>







</body>
</html>