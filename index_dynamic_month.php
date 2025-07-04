<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Wings Over Haiti</title>
      <meta property="og:url" content="https://www.wingsoverhaiti.net" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="Wings Over Haiti" />
      <meta property="og:description" content="Your description" />
      <meta property="og:image" content="https://www.wingsoverhaiti.net" />
      <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
      <script type="text/javascript" src="js/jquery.validate.js"></script>
      <script src="js/jquery.slicknav.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/style.css" />
      <link rel="stylesheet" type="text/css" href="css/slicknav.css">
      <link rel="stylesheet" type="text/css" href="css/loader.css">
      <meta name="viewport" content="width=device-width,initial-scale=1" />
      <script type="text/javascript">
         function showLoader() {
         	'use strict';
         	var loadingHtml =
         		'<div id="loader-overlay">' +
         			'<div id="ajaxLoading">' +
         				'<div class="block" id="rotate_01"></div>' + 
         				'<div class="block" id="rotate_02"></div>' +
         				'<div class="block" id="rotate_03"></div>' +
         				'<div class="block" id="rotate_04"></div>' +
         				'<div class="block" id="rotate_05"></div>' +
         				'<div class="block" id="rotate_06"></div>' +
         				'<div class="block" id="rotate_07"></div>' +
         				'<div class="block" id="rotate_08"></div>' +
         			'</div>' +
         		'</div>';
         	$('body').append(loadingHtml);
         }
         
         function hideLoader() {
         	'use strict';
         	$('#loader-overlay').remove();
         }
         
         function showThankyouOverlay() {
         	'use strict';
         	var overlayHtml =
         		'<div id="message-overlay"></div>' + 
         		'<div class="message-overlay-content-container">' + 
         			'<div class="message-overlay-content">' +
         				'<a class="close" href="#">Close</a>' +
         				'<h2>Thank You.</h2>' +
         				'<h4>Your email address will be added to our mailing list.</h4>' +
         			'</div>' + 
         		'</div>';
         	$('body').append(overlayHtml);
         	$('#message-overlay,.message-overlay-content-container').fadeIn();
         	setTimeout(function(){
         				$('#message-overlay,.message-overlay-content-container').fadeOut();
         	}, 5000);
         	setTimeout(function(){
         				$('#message-overlay,.message-overlay-content-container').remove();
         	}, 6000);
         }
         
         (function($)
         {
         	$.getParam = function(key)
         	{
         		//get querystring(s) without the ?
         		var urlParams = decodeURI( window.location.search.substring(1) ); //MySideNOTE: do not use unescape() for URI, use decodeURI()
         
         		//if no querystring, return null
         		if(urlParams == false | urlParams == '') return null;
         
         		//get key/value pairs
         		var pairs = urlParams.split("&");
         
         		var keyValue_Collection = {};
         		for(var value in pairs)
         		{
         			//let's get the position of the first occurrence of "=", in case value has "=" in it
         			var equalsignPosition = pairs[value].indexOf("=");
         
         			if (equalsignPosition == -1) //in case there's only the key, e.g: http://7php.com/?niche
         				keyValue_Collection[ pairs[value] ] = ''; //you could change the value to true as per your needs
         			else
         				keyValue_Collection[ pairs[value].substring(0, equalsignPosition) ] = pairs[value].substr(equalsignPosition + 1);
         		}
         		return keyValue_Collection[key];
         	}
         })
         (jQuery);
         
            $(document).ready(function() {
                'use strict';
                //showLoader();
                $('#logo').click(function() {
                    $(window.location).attr('href', 'index.php');
                });
                //positionEvents();
                $('#menu').slicknav({
                    brand:"",
                    label:""
                });
                $('.slicknav_brand').click(function() {
                    $(window.location).attr('href', 'index.php');
                });

                var url = location.pathname;
                var filename = url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.'));
                $('body').addClass(filename);

                var bodyClass = $('body').attr('class');
                $('nav a').each(function() {
                    var pageId = $(this).attr('id');
                    var bodyClass = $('body').attr('class');
                    if (pageId == bodyClass)
                    $(this).addClass('active');
                  });
         	});
         	
         	$(window).load(function() {
         		'use strict';
         		//var main = $('#main');
         		//hideLoader();
         		//main.show();
         		var sourceValue = $.getParam('source');
         		if (sourceValue == 'signup'){
         			//console.log('show overlay');
         			showThankyouOverlay();
         		}
         		
         		$('.message-overlay-content a.close').click(function(e) {
         			e.preventDefault();
         			$('#message-overlay,.message-overlay-content-container').fadeOut();
         		});
         		
         	});
         	
      </script>
   </head>
   <body class="home">
      <div id="fb-root"></div>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
      <div id="main">
      <header>
      <section class="content-block banner kents-well">
            <article>
               <div class="call-to-action-left">
                  <h5>This <span style="float: none; text-transform: none;padding: 0;" id="current-month"></span></h5>
                  <h2>Donate to build KENT&rsquo;s well</h2>
                  <h3>so the kids have clean water to drink!</h3>
                  <h4>Where there&rsquo;s a will, there&rsquo;s a well.</h4>
                  <p>The Well will be dedicated to Kent Feurring, pilot,&nbsp;<br class="mobile-hide" />tireless supporter, and friend of Wings Over Haiti.</p>
                  <div class="paypalButton desktop-hide">
                     <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_donations">
                        <input type="hidden" name="business" value="jdjeunecpa@gmail.com">
                        <input type="hidden" name="lc" value="US">
                        <input id="paypal-message-mobile" type="hidden" name="item_name">
                        <input type="hidden" name="no_note" value="0">
                        <input type="hidden" name="currency_code" value="USD">
                        <!-- <input type="hidden" name="amount" value="250.00"> -->
                        <input type="submit" value="DONATE" title="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                     </form>
                  </div>
               </div>
               <div class="call-to-action-right">
                  <div class="paypalButton">
                     <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_donations">
                        <input type="hidden" name="business" value="jdjeunecpa@gmail.com">
                        <input type="hidden" name="lc" value="US">
                        <input id="paypal-message-desktop" type="hidden" name="item_name">
                        <input type="hidden" name="no_note" value="0">
                        <input type="hidden" name="currency_code" value="USD">
                        <!-- <input type="hidden" name="amount" value="250.00"> -->
                        <input type="image" src="images/donate_kents_well_desktop.png" border="0" width="" name="submit" alt="PayPal - The safer, easier way to pay online!" title="DONATE">
                        <!-- <input type="submit" value="DONATE" title="PayPal - The safer, easier way to pay online!"> -->
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                     </form>
                  </div>
               </div>
            </article>
         </section>
		  <!-- <section class="content-block banner">
		  	<a href="https://www.eventbrite.com/e/hamptons-artists-for-haiti-tickets-632614816947"><img class="mobile-hide" src="images/benefit_banner_2023.jpg" alt="6th Annual Hamptons Artists for Haiti Benefit Bash | The Party Takes off Saturday, July 29th 5:30-8:00pm" /><img class="desktop-hide tablet-hide" src="images/benefit_banner_2023_mobile.gif" alt="6th Annual Hamptons Artists for Haiti Benefit Bash | The Party Takes off Saturday, July 29th 5:30-8:00pm" /></a>
		  </section> -->
         	<!-- <section class="content-block banner be-a-buddy">
            <article>
               <div class="call-to-action-left">
                  <h2>Be a buddy. Sponsor a child</h2>
               </div>
               <div class="call-to-action-right">
				  <div class="call-to-action-right-wrapper">
                      <h4>Feed and Sponsor a Child for Less Than $1.50 a Day</h4>
                      <div class="call-to-action-option">
                         <span class="call-to-action-option-amount">$250</span>
                         <span class="call-to-action-option-description">Cover 50% Food and<br/>Education for a Year</span>
                         <div class="paypalButton">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                               <input type="hidden" name="cmd" value="_donations">
                               <input type="hidden" name="business" value="jdjeunecpa@gmail.com">
                               <input type="hidden" name="lc" value="US">
                               <input type="hidden" name="item_name" value="Sample Item">
                               <input type="hidden" name="no_note" value="0">
                               <input type="hidden" name="currency_code" value="USD">
								<input type="hidden" name="amount" value="250.00">
                               <input type="submit" value="Be a Buddy!" title="PayPal - The safer, easier way to pay online!">
                               <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                         </div>
                      </div>
                      <div class="call-to-action-option">
                         <span class="call-to-action-option-amount">$500</span>
                         <span class="call-to-action-option-description">Cover 100% Food and<br/>Education for a Year</span>
                         <div class="paypalButton">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                               <input type="hidden" name="cmd" value="_donations">
                               <input type="hidden" name="business" value="jdjeunecpa@gmail.com">
                               <input type="hidden" name="lc" value="US">
                               <input type="hidden" name="item_name" value="Sample Item">
                               <input type="hidden" name="no_note" value="0">
                               <input type="hidden" name="currency_code" value="USD">
								<input type="hidden" name="amount" value="500.00">
                               <input type="submit" value="Be a Best Buddy!" title="PayPal - The safer, easier way to pay online!">
                               <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                         </div>
                      </div>
					  <div class="call-to-action-option text-link tablet-hide">
                         <span class="call-to-action-option-description">Already a buddy?</span>
						  <div class="paypal-text-link">
						  	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                               <input type="hidden" name="cmd" value="_donations">
                               <input type="hidden" name="business" value="jdjeunecpa@gmail.com">
                               <input type="hidden" name="lc" value="US">
                               <input type="hidden" name="item_name" value="Sample Item">
                               <input type="hidden" name="no_note" value="0">
                               <input type="hidden" name="currency_code" value="USD">
                               <input type="submit" value="Click here to continue your sponsorship" title="PayPal - The safer, easier way to pay online!">
                               <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
						  </div>
                      </div>
				   </div>
               </div>
            </article>
         </section> -->
         <div id="logo">
            <h1 title="Wings Over Haiti">Wings Over Haiti</h1>
            <h2 class="mobile-hide" title="Helping the Children of Haiti Soar">Helping the Children of Haiti Soar</h2>
         </div>
         <nav>
            <span class="nav-desktop">
               <a id="how-we-work" href="how-we-work.php">
               <span>How</span>
               We Work
               </a>
               <a id="how-we-started" href="how-we-started.php">
               <span>How</span>
               We Started
               </a>
               <a id="who-we-are" href="who-we-are.php">
               <span>Who</span>
               We Are
               </a>
               <a id="events" href="events.php" class="single">
                  Events
                  <!--<span class="events-info">
                     3<sup>rd</sup> Annual Art Auction<br/>Sat. June 22<sup>nd</sup>.
                     <span class="learn-more-link">Learn More</span>
                     </span>-->
               </a>
               <!--<span class="events-info">
                  3rd ANNUAL ART AUCTION<br/>SAT. JUNE 22<sup>ND</sup>.
                  <a href="#">LEARN MORE</a>
                  </span>-->
               <a id="in-the-news" href="in-the-news.php">In The
               <span>News</span></a>
               <!-- <a id="kents-well" href="kents-well.php">Kent's
               <span>Well</span></a> -->
            </span>
         </nav>
         <!-- mobile nav -->
         <ul id="menu">
            <li>
               <a href="how-we-work.php">How We Work</a>
            </li>
            <li>
               <a href="how-we-started.php">How We Started</a>
            </li>
            <li>
               <a href="who-we-are.php">Who We Are</a>
            </li>
            <li>
               <a href="events.php">Events</a>
            </li>
            <li>
               <a href="in-the-news.php">In The News</a>
            </li>
         </ul>
         <!-- /mobile nav -->
         <div id="buttons">
            <!--<div class="fb-like" data-href="https://www.facebook.com/Wings-Over-Haiti-348311238900152/" data-width="" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="false"></div>-->
            <!--<div class="paypalButton">
               <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                   <input type="hidden" name="cmd" value="_donations">
                   <input type="hidden" name="business" value="jdjeunecpa@gmail.com">
                   <input type="hidden" name="lc" value="US">
                   <input type="hidden" name="item_name" value="">
                   <input type="hidden" name="no_note" value="0">
                   <input type="hidden" name="currency_code" value="USD">
                   <input type="image" src="images/donate.png" border="0" width="" name="submit" alt="PayPal - The safer, easier way to pay online!" title="DONATE">
                   <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
               </form>
               </div>-->
         </div>
         <img src="images/nav_wedge.png" alt="" />
      </header>
      <style type="text/css">
         #cycler{
         position:relative;
         background:url(images/every_child_02.jpg) no-repeat;
         background-size:100%;
         background-position:0px 40px;
         }
      </style>
      <link rel="stylesheet" type="text/css" href="css/carousel.css" />
      <section class="content-block every-child">
         <article>
            <!-- <h3>Donate to Build a Well</h3>
            <h4>So the Kids Have Clean Water to Drink!</h4>
            <h5>Where there's a will, there's a well.</h5> -->
            <h3>Every Child</h3>
            <h4>Deserves a Chance</h4>
            <h5>We've built one school already. <br/>With your help we're doing it again.</h5>
         </article>
         <div class="paypalButton">
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
               <input type="hidden" name="cmd" value="_donations">
               <input type="hidden" name="business" value="jdjeunecpa@gmail.com">
               <input type="hidden" name="lc" value="US">
               <input type="hidden" name="item_name" value="">
               <input type="hidden" name="no_note" value="0">
				   <!-- <input type="hidden" name="amount" value="250.00"> -->
               <input type="hidden" name="currency_code" value="USD">
               <input type="image" src="images/donate.png" border="0" width="" name="submit" alt="PayPal - The safer, easier way to pay online!" title="DONATE">
               <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
         </div>
         <!-- <div>
            <img class="active" src="images/kents_well.jpg" alt="" />
         </div> -->
          <div id="cycler">
            <img class="active" src="images/every_child_01.jpg" alt="" />
         </div>
      </section>
		<!-- <section class="content-block banner be-a-buddy">
            <article>
               <div class="call-to-action-left">
                  <h2>Be a buddy. Sponsor a child</h2>
               </div>
               <div class="call-to-action-right">
				  <div class="call-to-action-right-wrapper">
                      <h4>Feed and Sponsor a Child for Less Than $1.50 a Day</h4>
                      <div class="call-to-action-option">
                         <span class="call-to-action-option-amount">$250</span>
                         <span class="call-to-action-option-description">Cover 50% Food and<br/>Education for a Year</span>
                         <div class="paypalButton">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                               <input type="hidden" name="cmd" value="_donations">
                               <input type="hidden" name="business" value="jdjeunecpa@gmail.com">
                               <input type="hidden" name="lc" value="US">
                               <input type="hidden" name="item_name" value="Sample Item">
                               <input type="hidden" name="no_note" value="0">
                               <input type="hidden" name="currency_code" value="USD">
								<input type="hidden" name="amount" value="250.00">
                               <input type="submit" value="Be a Buddy!" title="PayPal - The safer, easier way to pay online!">
                               <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                         </div>
                      </div>
                      <div class="call-to-action-option tablet-hide">
                         <span class="call-to-action-option-amount">$500</span>
                         <span class="call-to-action-option-description">Cover 100% Food and<br/>Education for a Year</span>
                         <div class="paypalButton">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                               <input type="hidden" name="cmd" value="_donations">
                               <input type="hidden" name="business" value="jdjeunecpa@gmail.com">
                               <input type="hidden" name="lc" value="US">
                               <input type="hidden" name="item_name" value="Sample Item">
                               <input type="hidden" name="no_note" value="0">
                               <input type="hidden" name="currency_code" value="USD">
								<input type="hidden" name="amount" value="500.00">
                               <input type="submit" value="Be a Best Buddy!" title="PayPal - The safer, easier way to pay online!">
                               <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                         </div>
                      </div>
					  <div class="call-to-action-option text-link tablet-hide">
                         <span class="call-to-action-option-description">Already a buddy?</span>
						  <div class="paypal-text-link">
						  	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                               <input type="hidden" name="cmd" value="_donations">
                               <input type="hidden" name="business" value="jdjeunecpa@gmail.com">
                               <input type="hidden" name="lc" value="US">
                               <input type="hidden" name="item_name" value="Sample Item">
                               <input type="hidden" name="no_note" value="0">
                               <input type="hidden" name="currency_code" value="USD">
                               <input type="submit" value="Click here to continue your sponsorship" title="PayPal - The safer, easier way to pay online!">
                               <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
						  </div>
                      </div>
				   </div>
               </div>
            </article>
         </section> -->
      <section class="content-block mandela">
         <article>
            <p>&#8220;Education is the most powerful weapon which you can use to change the world.&#8221;</p>
            <p>
               <cite>&#8211;&#160;Nelson Mandela</cite>
            </p>
         </article>
      </section>
      <div class="content-wrapper">
         <section class="content-block first-school">
            <article>
               <h3><a href="https://goo.gl/maps/G488apKpuB6E6Cd57" title="Heart School">Our 1<sup>st</sup> School <span>Near</span> Port Au Prince</a></h3>
               <h4>The Heart School opened in 2010, only 3 months after the earthquake</h4>
               <div class="article-content">
                  <img class="tablet-hide" src="images/heart_school.jpg" alt="Heart School" />
                  <div class="article-content-text">
                     <span class="article-content-text-large">215</span>
                     <span class="article-content-text-medium">Students</span>
                     <span class="article-content-text-medium-small">and adding</span>
                     <span class="article-content-text-small">a grade per year!</span>
                     <span class="article-content-text-featured">Now up to Grade 9</span>
                  </div>
               </div>
            </article>
         </section>
         <section class="content-block survive-and-thrive">
            <article>
               <h3>We Want Kids To <strong>Survive &#38; Thrive</strong></h3>
               <ul>
                  <li class="food">We feed the kids two meals a day, because you can't educate a hungry child</li>
                  <li class="medical">We give them free medical attention</li>
                  <li class="community">We give them a community based on learning and growing</li>
               </ul>
            </article>
         </section>
      </div>
      <section class="content-block one-hundred-percent">
         <article>
            <span class="one-hundred-percent-large">100<span class="one-hundred-percent-percent">%</span></span>
            <span class="one-hundred-percent-right">
            <span class="one-hundred-percent-medium">of your tax deductable dollars go to work!</span>
            <span class="one-hundred-percent-medium-small"><span class="one-hundred-percent-medium">0<sup>%</sup></span>goes to administrative salaries</span>
            <span class="one-hundred-percent-small">WOH is a 501(C)(3) nonprofit</span>
            </span>
         </article>
      </section>
      <div class="content-wrapper">
         <section class="content-block ranquitte">
            <article>
               <h3>OUR NEW SCHOOL IN RANQUITTE IS OPEN AND EXPANSION IS ONGOING!</h3>
               <!--<h3>Our 2<sup>nd</sup> school, <span>in</span> Ranquitte<br/>Construction has begun!</h3>-->
               <h4>Build a school. <br class="desktop-hide" />Build a human being.</h4>
               <div class="article-content">
                  <div class="article-content-image tablet-hide">
                     <img class="mobile-hide" src="images/flight_school_01.jpg" alt="Ranquitte School" />
                     <img class="mobile-hide" src="images/flight_school_02.png" alt="Ranquitte School" />
                  </div>
                  <div class="article-content-text">
                     <span class="article-content-text-large">400</span>
                     <span class="article-content-text-medium">Students</span>
                     <span class="article-content-text-medium-small">need a school</span>
                     <span class="article-content-text-medium-large">please</span>
                     <div class="paypalButton">
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                           <input type="hidden" name="cmd" value="_donations">
                           <input type="hidden" name="business" value="jdjeunecpa@gmail.com">
                           <input type="hidden" name="lc" value="US">
                           <input type="hidden" name="item_name" value="">
                           <input type="hidden" name="no_note" value="0">
                           <input type="hidden" name="currency_code" value="USD">
                           <input type="image" src="images/donate.png" border="0" width="303" name="submit" alt="PayPal - The safer, easier way to pay online!" title="DONATE">
                           <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                     </div>
                  </div>
               </div>
               <div class="article-content">
                  <img class="tablet-hide" src="images/flight_school_03.jpg" alt=""/>
                  <p>We’ve built one building with 4 classrooms that now has over 100 students, and once work is completed will educate hundreds of kids with the goal of getting as many of them into college as possible. We need your help to continue building so we can grow the school by one grade every year, and continue to add more students just as we are doing with our first school.
                  <div class="paypalButton">
                     <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_donations">
                        <input type="hidden" name="business" value="jdjeunecpa@gmail.com">
                        <input type="hidden" name="lc" value="US">
                        <input type="hidden" name="item_name" value="">
                        <input type="hidden" name="no_note" value="0">
                        <input type="hidden" name="currency_code" value="USD">
                        <input type="submit" value="Please consider a donation" title="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                     </form>
                  </div>
                  </p>
               </div>
            </article>
         </section>
         <section class="content-block carousel-main">
            <article class="lazy slider">
               <div class="slider-image">
                  <img data-lazy="images/carousel/carousel_01.png" data-srcset="images/carousel/carousel_01.png" />
                  <h4>For so little, they get so much.</h4>
               </div>
               <div class="slider-image">
                  <img data-lazy="images/carousel/carousel_02.png" data-srcset="images/carousel/carousel_02.png" />
                  <h4>$20 = School lunches for 10 children for a month</h4>
               </div>
               <div class="slider-image">
                  <img data-lazy="images/carousel/carousel_03.png" data-srcset="images/carousel/carousel_03.png" />
                  <h4>$50 = soccer supplies for 5 children</h4>
               </div>
               <div class="slider-image">
                  <img data-lazy="images/carousel/carousel_04.png" data-srcset="images/carousel/carousel_04.png" />
                  <h4>$150 = school tuition for a year</h4>
               </div>
               <div class="slider-image">
                  <img data-lazy="images/carousel/carousel_05.png" data-srcset="images/carousel/carousel_05.png" />
                  <h4>$175 = monthly salary for a teacher</h4>
               </div>
               <div class="slider-image">
                  <img data-lazy="images/carousel/carousel_06.png" data-srcset="images/carousel/carousel_06.png" />
                  <h4>$300 = furniture and supplies for one classroom</h4>
               </div>
               <div class="slider-image">
                  <img data-lazy="images/carousel/carousel_07.png" data-srcset="images/carousel/carousel_07.png" />
                  <h4>$1000 = who says money can't buy happiness</h4>
               </div>
               <div class="slider-image">
                  <img data-lazy="images/carousel/carousel_07.png" data-srcset="images/carousel/carousel_08.png" />
                  <h4></h4>
               </div>
               <div class="slider-image">
                  <img data-lazy="images/carousel/carousel_07.png" data-srcset="images/carousel/carousel_09.png" />
                  <h4></h4>
               </div>
               <div class="slider-image">
                  <img data-lazy="images/carousel/carousel_07.png" data-srcset="images/carousel/carousel_10.png" />
                  <h4></h4>
               </div>
            </article>
         </section>
         <section class="content-block carousel-bottom"></section>
         <section class="content-block history">
            <article>
               <h3>How Wings Over Haiti took Off</h3>
               <p>Jonathan Glynn, a Sag Harbor artist, was flying his Cessna single-engine plane to Florida on January 13, 2010, the day after a major earthquake devastated the impoverished country of Haiti. Mr. Glynn, who had visited Haiti when he was younger and who also had experience flying...</p>
               <p>
                  <span class="author">By Stephen J. Kotz</span>
                  <a href="https://sagharborexpress.com/pilot-returns-haiti-school-building-mission/" class="read-more">Read More</a>
               </p>
            </article>
         </section>
      </div>
      <script src="js/carousel.js" type="text/javascript" charset="utf-8"></script>
      <script type = "text/javascript">

         const monthNames= ["January","February","March","April","May","June","July",
            "August","September","October","November","December"];
         let currentDate = new Date();
         const month = currentDate.getMonth();
         document.getElementById("paypal-message-desktop").value = `This ${monthNames[month]}, all donations go to building Kent's Well`;
         document.getElementById("paypal-message-mobile").value = `This ${monthNames[month]}, all donations go to building Kent's Well`; 
			document.getElementById("current-month").innerHTML = monthNames[month];

         function cycleImages() {
             var $active = $('#cycler .active');
             $active.delay(3000).fadeTo(3000, 0).delay(10000).fadeTo(0, 1, cycleImages);
         }
         
         function setCtaHeight() {
             var ctaImage = $('.call-to-action img:visible');
             var ctaImageHeight = ctaImage.height()
             $('.call-to-action').css('height', ctaImageHeight);
         }
         
         function setCyclerHeight() {
             var cyclerImage = $('#cycler img:first-of-type');
             var cyclerImageHeight = cyclerImage.height()
             $('#cycler').css('height', cyclerImageHeight);
         }
         
         $(document).on('ready', function() {
         	setCtaHeight();
             $('.lazy').slick({
                 lazyLoad: 'ondemand', // ondemand progressive anticipated
                 infinite: false,
                 autoplay: true
             });
         
         });
         
         $(window).load(function() {
             cycleImages();
         });
         
         $(window).resize(function() {
             setCtaHeight();
         });
         
      </script>
      <?php include 'includes/footer.php' ?>