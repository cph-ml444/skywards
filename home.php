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
            <p>Welcome back</p>
            </div>
          </div>
	  </div>  
    <div class="body-section">
    <div class="slidertext">
    
    
	  <p>Special offers</p></div>
            <div class="offers">
              <img src="img/offer1.jpg" alt="Rockmiles">
           	  <h3>HOTELS</h3>
           	  <h2>Earn up to 12.000 miles</h2>
           	  <p class="offerp">Book with Rocketmiles over the holidays</p>
           	  <div class="button"><a href="https://www.rocketmiles.com/">Learn more</a>
           	  </div>
            </div>
            
        <div class="offers">
           	  <img src="img/offer2.jpg" alt="Minor Hotels">
           	  <h3>HOTELS</h3>
           	  <h2>Earn more with Minor Hotels</h2>
           	  <p class="offerp">Triple miles, room upgrades and more</p>
           	  <div class="button"><a href="https://www.minorhotels.com/en/">Learn more</a>
			</div>
            </div>
            
        <div class="offers">
       	  <img src="img/offer3.jpg" alt="Avis car rental">
          <h3>CAR RENTALS</h3>
           	  <h2>Enjoy a free upgrade</h2>
           	  <p class="offerp">Rent a car with Avis</p>
			<div class="button"><a href="https://www.avis.com/en/home">Learn more</a></div>
        </div>
           
          </div>
                
          <div class="body-section2">

	
	<div class="slidertext">
	  <p>Earn and spend miles on new destinations</p></div>
	  
	
	<div id="wowslider-container0">
	<div class="ws_images"><ul>
		<li><a href="https://www.emirates.com/dk/English/destinations/flights-to-japan.aspx"><img src="data0/images/1.jpg" alt="1" title="1" id="wows0_0"/></a></li>
		<li><a href="https://www.emirates.com/dk/English/destinations/flights-to-france.aspx"><img src="data0/images/2.jpg" alt="2" title="2" id="wows0_1"/></a></li>
		<li><a href="https://www.emirates.com/dk/English/destinations/flights-to-india.aspx"><img src="data0/images/3.jpg" alt="javascript carousel" title="3" id="wows0_2"/></a></li>
		<li><a href="https://www.emirates.com/dk/English/destinations/flights-to-united-states.aspx"><img src="data0/images/4.jpg" alt="4" title="4" id="wows0_3"/></a></li>
	</ul></div>
	
	<div class="ws_bullets"><div>
		<a href="https://www.emirates.com/dk/English/destinations/flights-to-japan.aspx" title=""><span><img src="data0/tooltips/1.jpg" alt="1"/>1</span></a>
		<a href="https://www.emirates.com/dk/English/destinations/flights-to-france.aspx" title=""><span><img src="data0/tooltips/2.jpg" alt="2"/>2</span></a>
		<a href="https://www.emirates.com/dk/English/destinations/flights-to-india.aspx" title=""><span><img src="data0/tooltips/3.jpg" alt="3"/>3</span></a>
		<a href="https://www.emirates.com/dk/English/destinations/flights-to-united-states.aspx" title=""><span><img src="data0/tooltips/4.jpg" alt="4"/>4</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">bootstrap slider</a> by WOWSlider.com v8.8</div>
	<div class="ws_shadow"></div>
	</div>	
	
	<script src="engine0/wowslider.js"></script>
	<script src="engine0/script.js"></script>
	
          </div>
          

          <div class="body-section3">
          
          	<div class="slidertext"><p>News</p></div>
          	
          	<div class="newsbox">
       		  <img src="img/news1.jpg" alt="news picture">
       		  <p class="source">news.com.au</p>
       		  <p class="headline">Airline reveals which windows seats you should always avoid</p>
       		  <a href="http://www.news.com.au/travel/travel-advice/flights/seats-to-avoid-if-you-want-to-catch-that-skyhigh-view/news-story/bfbdbaa2d12bf4da3911587106c6f7bb">Read more</a>
          	</div>
          	
          	<div class="newsbox">
       		  <img src="img/news2.jpg" alt="news picture">
       		  <p class="source">Dailymail</p>
       		  <p class="headline">First review of the Singapore Airlines A380 first class suite</p>
       		  <a href="http://www.dailymail.co.uk/travel/travel_news/article-5191577/Review-new-Singapore-Airlines-A380-class-suite.html">Read more</a>
          	</div>
          	
          	<div class="newsbox">
          	  <img src="img/news3.jpg" alt="news picture">
       		  <p class="source">BrandIndex</p>
       		  <p class="headline">Why American Airlines Is Currently Experiencing Turbulence</p>
       		  <a href="https://www.forbes.com/sites/brandindex/2017/12/18/why-american-airlines-is-currently-experiencing-turbulence/#22585a9a2a35">Read more</a>
          	</div>
		  
		    <div class="newsbox">
       		  <img src="img/news4.jpg" alt="news picture">
       		  <p class="source">Hello Giggles</p>
       		  <p class="headline">This is the airline with the worst in-flight wi-fi</p>
       		  <a href="https://hellogiggles.com/lifestyle/technology/airline-with-worst-in-flight-wi-fi/">Read more</a>
          	</div>
          	
          	<div class="newsbox">
       		  <img src="img/news5.jpg" alt="news picture">
       		  <p class="source">TravelLeisure</p>
       		  <p class="headline">The Most Exciting New Airline Routes Coming in 2018</p>
       		  <a href="http://www.travelandleisure.com/airlines-airports/new-airlines-routes-2018">Read more</a>
          	</div>
          	
          	<div class="newsbox">
          		<img src="img/news6.jpg" alt="news picture">
       		  <p class="source">Independent UK</p>
       		  <p class="headline">Here are the 10 best airlines currently in the world</p>
       		  <a href="http://www.independent.co.uk/travel/news-and-advice/best-airlines-in-the-world-travel-holidays-air-new-zealand-swiss-air-a8092836.html">Read more</a>
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
