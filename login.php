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
		background-size: 100%;
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
        margin-bottom: 250px;
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
        padding-left: 10px;
		border: none;
		background-color: #fff;
		line-height: 40px;
		font-size: 16px;
		margin-bottom: 4px;
        border-radius: 15px;

			
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
        margin-top: 10px;
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
	        width: 70%;
            margin-bottom: 50px;
            margin-top: 130px;   
            
	    }
	    form {
	    width: 200px;  
		margin: 0 auto;
        margin-top: 30px;    
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
	<input type="password" name="user_pwd" placeholder="Password (case sensitive)">
	<button type="submit" name="submit">Login</button> 
	<a href="register.php"><p>Not yet registered?</p></a>
</form>

</div>

</div>

  <div class="footer-section">
           <div class="colums1">
            <div class="colum">
            <p>About Emirates</p>
            	<ul>
            		<li><a href="https://www.emirates.com/dk/english/about/press-room.aspx">About us</a></li>
            		<li><a href="https://www.emirates.com/dk/english/about/emirates-sponsorships/sponsorships.aspx">Sponsorships</a></li>
            		<li><a href="https://www.emirates.com/dk/English/open-skies/issue/4548519/november-2017">Open Skies magazine</a></li>
           		  <li><a href="http://www.emiratesgroupcareers.com/">Careers</a></li>
            	</ul>
            </div>
            
            <div class="colum">
            <p>Top picks</p>
            	<ul>
            		<li><a href="https://www.emirates.com/dk/English/destinations/flights-to-dubai.aspx">Flights to Dubai</a></li>
            		<li><a href="https://www.emirates.com/dk/English/destinations/flights-to-hong-kong.aspx">Flights to Hong Kong</a></li>
            		<li><a href="https://www.emirates.com/dk/English/destinations/flights-to-singapore.aspx">Flights to Singapore</a></li>
            		<li><a href="https://www.emirates.com/dk/English/destinations/flights-to-dublin.aspx">Flights to Dublin</a></li>
            	</ul>
            </div>
            
            <div class="colum">
            <p>Top countries</p>
            	<ul>
            		<li><a href="https://www.emirates.com/dk/English/destinations/flights-to-new-zealand.aspx">Flights to New Zealand</a></li>
            		<li><a href="https://www.emirates.com/dk/English/destinations/flights-to-australia.aspx">Flights to Australia</a></li>
            		<li><a href="https://www.emirates.com/dk/English/destinations/flights-to-india.aspx">Flights to India</a></li>
            		<li><a href="https://www.emirates.com/dk/English/destinations/flights-to-canada.aspx">Flights to Canada</a></li>
            	</ul>
            </div>
             
            <div class="colum">
            <p>Top cities</p>
            	<ul>
            		<li><a href="https://www.emirates.com/dk/English/destinations/flights-to-perth.aspx">Flights to Perth</a></li>
            		<li><a href="https://www.emirates.com/dk/English/destinations/flights-to-boston.aspx">Flights to Boston</a></li>
            		<li><a href="https://www.emirates.com/dk/English/destinations/flights-to-brisbane.aspx">Flights to Brisbane</a></li>
            		<li><a href="https://www.emirates.com/dk/English/destinations/flights-to-budapest.aspx">Flights to Budapest</a></li>
            	</ul>
            </div>
            </div>
            
            <div class="colums2">
            <div class="colum">
            <p>Book</p>
            	<ul>
            		<li><a href="https://www.emirates.com/dk/english/book/">Book flights</a></li>
            		<li><a href="https://www.emirates.com/dk/english/travel-services/">Travel services</a></li>
            		<li><a href="https://www.emirates.com/dk/english/transportation/">Transportation</a></li>
            		<li><a href="https://www.emirates.com/dk/english/planning-your-trip/">Planning your trip</a></li>
            	</ul>
            </div>
            
            <div class="colum">
            <p>Manage</p>
            	<ul>
            		<li><a href="https://www.emirates.com/dk/english/manage-your-booking/">Manage your booking</a></li>
            		<li><a href="https://www.emirates.com/dk/english/baggage/">Baggage</a></li>
            		<li><a href="https://www.emirates.com/dk/english/travel-updates/">Travel updates</a></li>
           		  <li><a href="https://www.emirates.com/dk/english/check-in/">Check in</a></li>
            	</ul>
            </div>
            
            <div class="colum">
            <p>Experience</p>
            	<ul>
            		<li><a href="https://www.emirates.com/dk/english/experience/cabin-features/">Cabin features</a></li>
            		<li><a href="https://www.emirates.com/dk/english/experience/shop-emirates/">Shop Emirates</a></li>
            		<li><a href="https://www.emirates.com/dk/english/experience/inflight-entertainment/">Inflight entertainment</a></li>
            		<li><a href="https://www.emirates.com/dk/english/experience/dining-and-win/">Dining and wine</a></li>
            	</ul>
            </div>
             
            <div class="colum">
            <p>Loyalty</p>
           	  <ul>
            		<li><a href="https://www.emirates.com/dk/english/skywards/about/partners/our-partners.aspx">Our partners</a></li>
            		<li><a href="https://www.emirates.com/dk/english/business-rewards/registration.aspx">register your company</a></li>
            		<li><a href="https://www.emirates.com/dk/english/business-rewards/the-benefits-of-business-rewards.aspx">Business rewards</a></li>
            		<li><a href="https://www.emirates.com/account/dk/english/login/login.aspx">Your account</a></li>
            	</ul>
            </div>
            </div>
          </div>  
    
</body>
</html>
