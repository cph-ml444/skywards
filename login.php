<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
<meta name="viewport" content="width=device-width">
<link href="style.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="engine0/style.css" />
<script src="engine0/jquery.js"></script>
<link rel="stylesheet" href="css/main.css">

<style>

	body {
		background-image: url(img/airport2.jpg);
		background-size: cover;
		background-repeat: no-repeat;
		background-color: #212121;
	}
	.wrapper {
        width: 40%;
        margin: 0 auto;
		margin-top: 50px;
		background-color: #D1011B;
	    border: none;
        border-radius: 40px 10px;
    }
    form {
		width: 70%;
		margin: 0 auto;
		padding-top: 20px;
	}
	form input {
		width: 100%;
		height: 40px;
		padding-top: 5px;
		padding-bottom: 5px;
		border: none;
		background-color: #fff;
		line-height: 40px;
		font-size: 16px;
		margin-bottom: 4px;
			
	}
	form button {
		display: block;
		width: 30%;
		height: 40px;
		border: none;
		background-color: #212121;
		font-size: 16px;
		cursor: pointer;
		margin: 0 auto;
		color: #fff;
		margin-bottom: 10px;
			
	}
	form button:hover {
		background-color: #111;
			
	}
	h2 {
		text-align: center;
		color: #fff;
		font-size: 3em;
		font-family: 'fontastique';
	    src: url(font/fontastique.ttf);
		padding-top: 40px;
		padding-bottom: 40px;
	}
	form p {
	    text-align: center;
		padding-bottom: 10px;
		color: #fff;
		font-size: 2em;
		font-family: 'fontastique';
	    src: url(font/fontastique.ttf);
	
	}
	a {
		text-decoration: none;
	}
	@media only screen and (max-width: 780px) {
	    .wrapper {
	        width: 250px;
	    }
	    form {
	    width: 200px;
		margin: 0 auto;
		padding-top: 100px;
		padding-bottom: 100px;
	    }
	    form button {
	        width: 40%;
	    }
	}
</style>


</head>

<body>

<div id="boxes">
  <div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window"> THIS IS A SCHOOL PROJECT
    <div id="lorem">
      <p>The page you are about to enter is NOT the official website for Emirates Airlines. The content stored on this website has been created for educational purpose online. If you wish to visit the official Emirates website, please <a href="http://www.emirates.com">click here</a>.</p>
    </div>
    <div id="popupfoot"><a href="#" class="close agree">I understand</a>
	  <a class="agree" style="color:red;" href=""></a></div>
  </div>
  <div style="width: 1478px; font-size: 32pt; color:white; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script> 
<script src="js/main.js"></script>
<script>

  $(document).ready(function () {

    //select the POPUP FRAME and show it
    $("#boxes").hide().fadeIn(1000);

    //close the POPUP if the button with id="close" is clicked
    $("#popupfoot").on("click", function (e) {
        e.preventDefault();
        $("#boxes").fadeOut(1000);
    });

});

</script>

<h2 class="loginh2">Welcome to Emirates Skywards</h2>

<div class="wrapper">


<div class="login">

<form action="SQL/login_sql.php" method="POST">
<p>Please Login to explore</p>
	<input type="text" name="user_uid" placeholder="Username">
	<input type="text" name="user_pwd" placeholder="Password">
	<button type="submit" name="submit">Login</button> 
	<a href="register.php"><p>Not yet registered?</p></a>
</form>

</div>

</div>

</body>
</html>
