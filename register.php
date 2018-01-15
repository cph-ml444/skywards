<?php

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>

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
		margin-top: 40px;
		background-color: #D1011B;
	    border: none;
        border-radius: 40px 10px;
    }
	form {
		width: 400px;
		margin: 0 auto;
		padding-top: 100px;
		padding-bottom: 100px;
	}
	form input {
		width: 90%;
		height: 40px;
		padding: 0px 5px;
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

<div class="wrapper">

<form action="SQL/register_sql.php" method="POST">
    <p>Register here</p>
<input type="text" name="user_first" placeholder="Firstname">
<input type="text" name="user_last" placeholder="Surname">
<input type="text" name="user_email" placeholder="E-mail">
<input type="text" name="user_uid" placeholder="Username">
<input type="text" name="user_pwd" placeholder="Password">
<input type="number" name="skywards" placeholder="Skywards number">
<button type="submit" name="submit">Register</button>
</form>

</div>

</body>
</html>
