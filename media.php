<?php
session_start();

    // At the top of the page check to see whether the user is logged in or not
    if(empty($_SESSION['user_uid']))
    {
        // If they are not, redirect them to the login page.
        header("Location: register.php");
        
        // Remember that this die statement is absolutely critical.  Without it,
        // people can view your members-only content without logging in.
        die("Redirecting to register.php");
    }

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Skywards</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="style.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="engine0/style.css" />
<script src="engine0/jquery.js"></script>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" type="text/css" href="engine0/style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
</head>

<body>

<div class="container">
     
  <header class="slideRight">
        
    <ul id="navToggle" class="burger slideRight">
          <li></li>
          <li></li>
          <li></li>
    </ul>
        
		  <div class="logo"><a href="#"><img src="img/emirates-skywards-logo.jpg" alt="logo"></a></div>
		  
     
  </header>
      
  <nav class="slideLeft">
    <ul>
          <li><a href="home.php" class="active">Home</a></li>
          <li><a href="http://www.marcliljeqvist.dk/Forum">Forum</a></li>
          <li><a href="media.phpl">Media</a></li>

      </ul>
  </nav>
      

  <div class="content slideRight">
        <div class="responsive">
          <div class="header-section">
           <div class="welcometext">
            <p>Media</p>
            </div>
          </div>
	  </div>  
    <div class="body-section">
    <div class="slidertext">
    <p>Find us on social media</p>
   
    <div class="social">
<a href="https://www.facebook.com/Emirates/" class="fa fa-facebook"></a>
<a href="https://twitter.com/Emirates" class="fa fa-twitter"></a>
<a href="https://plus.google.com/+emirates" class="fa fa-google"></a>
<a href="https://www.linkedin.com/company/emirates" class="fa fa-linkedin"></a>
<a href="https://www.youtube.com/user/EMIRATES?sub_confirmation=1" class="fa fa-youtube"></a>
<a href="https://www.instagram.com/emirates/" class="fa fa-instagram"></a>
		</div>
		</div>
			</div>
         
    <div class="body-section2">
    <div class="slidertext">   
        
   
         <p>Blogs</p></div>
            
            
            
            <div class="blog">
           <div class="blogimg">
           	<a href="https://boardingarea.com/">
            	<img src="img/boarding.png" alt="boardingarea logo">
            </a>
            </div>
            	<p>BoardingArea was developed by the same people who founded some of the most popular business travel and frequent flyer websites on the Internet including InsideFlyer, FlyerTalk, SeatExpert, and other pioneer travel websites.

For more than 25 years, we have been providing news, information and advice for frequent flyers. Our goal has always been to provide frequent travelers with the information needed to make the most of their travel.</p>
            </div>
            
		<div class="blog">
		<div class="blogimg">
		<a href="https://www.frugaltravelguy.com/">
			<img src="img/frugal.png" alt="frugaltravelguy logo">
		</a>
			</div>
			<p>Frugal Travel Guy was founded in 2007 to educate readers about the value of frequent flyer miles and points and is now run by a team of people who travel extensively in first and business class for minimal out-of-pocket cost. The site features travel tips, travel deals and rookie guides to airline alliances, hotel programs and reward schemes.</p>

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
			</div>
			
         
  </div>
<script  src="js/index.js"></script>
		
</body>
</html>
          -
