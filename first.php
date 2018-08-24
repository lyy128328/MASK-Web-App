<!DOCTYPE html>
<html>
<head>
<script src="jquery-3.1.1.js"></script>


<style>

body{
background-repeat:no-repeat;
background-attachment:fixed;
background-position:center;
background-size:cover;
}
@font-face{
		font-family:Head;
		src: url(font/Wallpoet-Regular.ttf);
	}
h1{
position:absolute;
top:0.5%;
left:36%;
font-size:85px;
font-family:Head;
}

#batman{
position:absolute;
top:25%;
left:36%;
background-color: lightgrey;
border: 15px solid 	#000000;
}

#btn{
position:absolute;
bottom:5%;
left:45%;

}
</style>



<script>

  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);

    if (response.status === 'connected') {
	  dosubmit();
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
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.8' // use graph api version 2.5
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

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me/friends', function(response) {
      console.log('Successful login for: ' + JSON.stringify(response));
      document.getElementById('status').innerHTML =
        'Friend: ' + response.data[0].name + '!';
    });
	FB.api('/me/picture', function(response){ var
	img_url = response.data['url'];
	document.getElementById('photo').src = img_url;
	});

  }
  
	$(function(){
	  // overwrite the fb connect image - let's force it !!
	  $('#fbconnect_login_button').find('img').attr('src', 'facebook_button.jpg');
	});
	
	//test json
	function dosubmit(){
		
		FB.api('/me?locale=en_US&fields=name,email,picture,friends', function(response) {

			$.when($.ajax({                                      
			  url: '1.php',  

			  type: "POST",
				
			  dataType: 'json',
			  
			  data: {'json' : JSON.stringify(response) },
			  
			  success: function(data) 
			  {			
					console.log("I am handsome");
					console.log(data);
			  } 
			})).done(
				window.location.replace('second.php')
			);
		});
    }

</script>



</head>

<body background="background.jpg">
<center>
<div id="top">
<br>
<h1  style="color:white;"> M A S K </h1> 
<img id="batman" src="batman.jpg" width="350px" height="370px" style="float:center;"> 


<fb:login-button id="btn" size=xlarge scope="public_profile,email,user_friends" onlogin="checkLoginState();"  >
</fb:login-button>

</body>
</html>