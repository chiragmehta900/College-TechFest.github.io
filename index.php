
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8" />
	<title>Event Responsive HTML Template</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta name="description"  content="Event"/>
	<meta name="keywords" content="Live Event, Business template, Event, party, company, Shows" />
	<meta name="author"  content=""/>
	<meta name="MobileOptimized" content="320" />
	<!-- style -->
	<link rel="stylesheet" type="text/css" href="css/animate.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css"/>
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css"/>
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css"/>
	
	<link rel="stylesheet" type="text/css" href="css/fonts.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<!-- favicon links -->
	<link rel="shortcut icon" type="image/icon" href="images/header/favicon.ico" />
<style>	
#header {
  height: 90px;
  padding: 25px 0;
  position: fixed;
  left: 0;
  top: 0;
  right: 0;
  transition: all 0.5s;
  z-index: 997;
  background: #17a2b8;;
}

#header.header-scrolled,
#header.header-fixed {
  background: #17a2b8;;
  height: 70px;
  padding: 15px 0;
  transition: all 0.5s;
}

#header #logo h1 {
  font-size: 36px;
  margin: 0;
  padding: 6px 0;
  line-height: 1;
  font-family: "Raleway", sans-serif;
  font-weight: 700;
  letter-spacing: 3px;
  text-transform: uppercase;
}

#header #logo h1 span {
  color: #f82249;
}

#header #logo h1 a,
#header #logo h1 a:hover {
  color: #fff;
}

#header #logo img {
  padding: 0;
  margin: 0;
  max-height: 50px;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/

/* Nav Menu Essentials */

.nav-menu,
.nav-menu * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav-menu ul {
  position: absolute;
  display: none;
  top: 100%;
  left: 0;
  z-index: 99;
}

.nav-menu li {
  position: relative;
  white-space: nowrap;
}

.nav-menu > li {
  float: left;
}

.nav-menu li:hover > ul,
.nav-menu li.sfHover > ul {
  display: block;
}

.nav-menu ul ul {
  top: 0;
  left: 100%;
}

.nav-menu ul li {
  min-width: 180px;
}

/* Nav Menu Arrows */

.sf-arrows .sf-with-ul {
  padding-right: 30px;
}

.sf-arrows .sf-with-ul:after {
  content: "\f107";
  position: absolute;
  right: 15px;
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
}

.sf-arrows ul .sf-with-ul:after {
  content: "\f105";
}

/* Nav Meu Container */

#nav-menu-container {
  float: right;
  margin: 0;
}

/* Nav Meu Styling */

.nav-menu a {
  padding: 8px;
  text-decoration: none;
  display: inline-block;
  color: rgba(202, 206, 221, 0.8);
  font-family: "Raleway", sans-serif;
  font-weight: 600;
  font-size: 14px;
  outline: none;
}

.nav-menu .menu-active a,
.nav-menu a:hover {
  color: #fff;
}

.nav-menu > li {
  margin-left: 8px;
}

.nav-menu > li > a:before {
  content: "";
  position: absolute;
  width: 0;
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: #f82249;
  visibility: hidden;
  transition: all 0.3s ease-in-out 0s;
}

.nav-menu a:hover:before,
.nav-menu li:hover > a:before,
.nav-menu .menu-active > a:before {
  visibility: visible;
  width: 100%;
}

.nav-menu li.buy-tickets a {
  color: #fff;
  background: #f82249;
  padding: 7px 22px;
  border-radius: 50px;
  border: 2px solid #f82249;
  transition: all ease-in-out 0.3s;
  font-weight: 500;
  margin-left: 8px;
  margin-top: 2px;
  line-height: 1;
  font-size: 13px;
}

.nav-menu li.buy-tickets a:hover {
  background: none;
}

.nav-menu li.buy-tickets:hover a:before,
.nav-menu li.buy-tickets.menu-active a:before {
  visibility: hidden;
}

.nav-menu ul {
  margin: 4px 0 0 0;
  padding: 10px;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  background: #fff;
  border-radius: 3px;
}

.nav-menu ul li {
  transition: 0.3s;
}

.nav-menu ul li a {
  padding: 10px;
  color: #060c22;
  transition: 0.3s;
  display: block;
  font-size: 13px;
  text-transform: none;
  border-radius: 3px;
}

.nav-menu ul li:hover > a {
  background: #f82249;
  color: #fff;
}

.nav-menu ul ul {
  margin: 0;
}

/* Mobile Nav Toggle */

#mobile-nav-toggle {
  position: fixed;
  right: 0;
  top: 0;
  z-index: 999;
  margin: 15px 15px 0 0;
  border: 0;
  background: none;
  font-size: 24px;
  display: none;
  transition: all 0.4s;
  outline: none;
  cursor: pointer;
}

#mobile-nav-toggle i {
  color: #fff;
}

/* Mobile Nav Styling */

#mobile-nav {
  position: fixed;
  top: 0;
  padding-top: 18px;
  bottom: 0;
  z-index: 998;
  background: rgba(6, 12, 34, 0.9);
  left: -260px;
  width: 260px;
  overflow-y: auto;
  transition: 0.4s;
}

#mobile-nav ul {
  padding: 0;
  margin: 0;
  list-style: none;
}

#mobile-nav ul li {
  position: relative;
}

#mobile-nav ul li a {
  color: #fff;
  font-size: 17px;
  overflow: hidden;
  padding: 10px 22px 10px 15px;
  position: relative;
  text-decoration: none;
  width: 100%;
  display: block;
  outline: none;
}

#mobile-nav ul li a:hover {
  color: #f82249;
}

#mobile-nav ul li li {
  padding-left: 30px;
}

#mobile-nav ul .menu-has-children i {
  position: absolute;
  right: 0;
  z-index: 99;
  padding: 15px;
  cursor: pointer;
  color: #fff;
}

#mobile-nav ul .menu-has-children i.fa-chevron-up {
  color: #f82249;
}

#mobile-nav ul .menu-item-active {
  color: #f82249;
}

#mobile-body-overly {
  width: 100%;
  height: 100%;
  z-index: 997;
  top: 0;
  left: 0;
  position: fixed;
  background: rgba(6, 12, 34, 0.8);
  display: none;
}

/* Mobile Nav body classes */

body.mobile-nav-active {
  overflow: hidden;
}

body.mobile-nav-active #mobile-nav {
  left: 0;
}

body.mobile-nav-active #mobile-nav-toggle {
  color: #fff;
}
.card
{
        box-shadow: 0 4px 8px 0 rgba( 0, 0, 0, 0.2,)
        max-width:300;
        margin:;
        margin-left: 42px;
        margin-right: 42px;
        margin-bottom: 2px;
        text-align: center;
        font-family: sans-serif;
}
.card1
{
        box-shadow: 0 4px 8px 0 rgba( 0, 0, 0, 0.2,)
        max-width:300;
        margin:;
        margin-left: 42px;
        margin-right: 42px;
        margin-bottom: 2px;
        text-align: center;
        font-family: sans-serif;
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/

#footer {
  background: #101522;
  padding: 0 0 25px 0;
  color: #eee;
  font-size: 14px;
}

#footer .footer-top {
  background: #040919;
  padding: 60px 0 30px 0;
}

#footer .footer-top .footer-info {
  margin-bottom: 30px;
}

#footer .footer-top .footer-info h3 {
  font-size: 26px;
  margin: 0 0 20px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-family: "Raleway", sans-serif;
  font-weight: 700;
  color: #fff;
}

#footer .footer-top .footer-info img {
  height: 90px;
  margin-bottom: 10px;
}

#footer .footer-top .footer-info p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Raleway", sans-serif;
  color: #fff;
}

#footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #222636;
  color: #eee;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#footer .footer-top .social-links a:hover {
  background: #f82249;
  color: #fff;
}

#footer .footer-top h4 {
  font-size: 14px;
  font-weight: bold;
  color: #fff;
  text-transform: uppercase;
  position: relative;
  padding-bottom: 12px;
  border-bottom: 2px solid #f82249;
}

#footer .footer-top .footer-links {
  margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#footer .footer-top .footer-links ul i {
  padding-right: 5px;
  color: #f82249;
  font-size: 18px;
}

#footer .footer-top .footer-links ul li {
  border-bottom: 1px solid #262c44;
  padding: 10px 0;
}

#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

#footer .footer-top .footer-links ul a {
  color: #eee;
}

#footer .footer-top .footer-links ul a:hover {
  color: #f82249;
}

#footer .footer-top .footer-contact {
  margin-bottom: 30px;
}

#footer .footer-top .footer-contact p {
  line-height: 26px;
}

#footer .footer-top .footer-newsletter {
  margin-bottom: 30px;
}

#footer .footer-top .footer-newsletter input[type="email"] {
  border: 0;
  padding: 6px 8px;
  width: 65%;
}

#footer .footer-top .footer-newsletter input[type="submit"] {
  background: #f82249;
  border: 0;
  width: 35%;
  padding: 6px 0;
  text-align: center;
  color: #fff;
  transition: 0.3s;
  cursor: pointer;
}

#footer .footer-top .footer-newsletter input[type="submit"]:hover {
  background: #e0072f;
}

#footer .copyright {
  text-align: center;
  padding-top: 30px;
}

#footer .credits {
  text-align: center;
  font-size: 13px;
  color: #ddd;
}
</style>
</head>
<body>

<!-- Header Wrapper Start
<div data-scroll-index='0'  style="width:100%;float:left;">
<div class="lv_header_wrapper">
	<div class="lv_img_overlay"></div>
	<div class="lv_top_header_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="responsive_main_logo">	
						<img src="images/header/logo.png" alt="Logo" title="Bizzness Logo">
					</div>	
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<button class="lv_menu_btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
			</div>
		</div>
	</div>
	<div class="lv_bottom_header_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
					<div class="event_logo_wrapper">
						<div class="logo_wrapper">
							<img src="images/header/logo.png" alt="Logo" title="Bizzness Logo">
						</div>
					</div>	
				</div>
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
						<div class="lv_mainmenu_wrapper">
							<div class="lv_main_menu_wrapper">
								<div class="lv_main_menu lv_single_index_menu">
									<ul>
										<li><a href="http://webstrot.com/html/tm/liveevent/03_Home/0">Home</a></li>
										<li><a href="http://webstrot.com/html/tm/liveevent/03_Home/1">About</a></li>
										<li><a href="http://webstrot.com/html/tm/liveevent/03_Home/3">Schedule</a></li>
										<li><a href="http://webstrot.com/html/tm/liveevent/03_Home/2">Speakers</a></li>
										
										<li><a href="http://webstrot.com/html/tm/liveevent/03_Home/4">Pricing</a></li>
										<li><a href="http://webstrot.com/html/tm/liveevent/03_Home/8">FAQ’s</a></li>
										<li><a href="http://webstrot.com/html/tm/liveevent/03_Home/6">Sponsors</a></li>
										<li><a href="http://webstrot.com/html/tm/liveevent/03_Home/7">News</a></li>
										
										<li><a href="http://webstrot.com/html/tm/liveevent/03_Home/9">Contact</a></li>
										
									</ul>
								</div>
							</div>
						</div>					
					</div>
					<div class="col-lg-1 col-md-1 hidden-xs hidden-sm">
						<div class="submit_btn">
							<ul>
								<li><a href="#"><img src="images/header/More.png" alt="more_img"></a></li>
							</ul>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>
<!-- Header Wrapper End -->
<!-- timer section start -->
<header id="header">
	<div class="container">
		<div id="logo" class="pull-left">				
			<a href="index-2.html#intro" class="scrollto"><img src="images/ind_logo.tif" alt="" title=""></a>
		</div>
		
		<nav id="nav-menu-container">
		   <ul class="nav-menu">
			  <li class="menu-active"><a href="index.php">Home</a></li>
			  <li><a href="#about">About</a></li>
			  <li><a href="#events">Events</a></li>
			  <li><a href="#schedule">Schedule</a></li>
			  <li><a href="#gallery">Gallery</a></li>
			  <!--<li><a href="#supporters">Sponsors</a></li>-->
			  <li><a href="#contact">Contact</a></li>
			  <li class="buy-tickets"><a href="regi.php">Registration</a></li>
		   </ul>
		</nav>
		<!-- #nav-menu-container -->
	</div>
</header>
<div class="lv_timer_wrapper lv_single_index_menu">
	<div class="overlay">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="lv_timer_info">
							<h1>Aayam 2020</h1>
							<p>2nd - 6th March, 2020, Surat</p>
						</div>
						<div id="clockdiv" style="padding-top: 50px;">
						<?php
						$rem = strtotime('2020-03-02 11:00:00') - time(); // change date and time to suit.
						$day = floor($rem / 86400);
						$hr  = floor(($rem % 86400) / 3600);
						$min = floor(($rem % 3600) / 60);
						$sec = ($rem % 60);
							//<div><span class="day"> $day </span><div class="smalltext"><b> Days </b></div></div>
							//<div><span class="hours"> $hr </span><div class="smalltext"><b> Hours </b></div></div>
							//<div><span class="minutes">$min </span><div class="smalltext"><b> Minutes</b></div></div>
							//<div><span class="seconds"> $sec </span><div class="smalltext"><b>Seconds</b></div></div>
				if($day) echo $day. "Day&nbsp&nbsp;";
				if($hr) echo $hr. "Hour&nbsp;&nbsp;";
				if($min) echo $min. "Minute&nbsp;";
				if($sec) echo $sec. "Second&nbsp;&nbsp;";
							?>
						</div>
					
					</div>
				</div>
				<div class="scroll_down">
					<a href="#down" class="smoothScroll"><img src="images/content/selectarrow.png" alt="icon"/><br>Scroll Down</a>
				</div>
			</div>
		</div>
	</div>	
<!-- timer section end -->	
<!-- categories section start -->	
<div class="categories_sec_wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="category1_wrapper" style="margin-top:120px">
					<div class="category1">
						<img src="images/header/category_pin.png" alt="icon_pin"/>
						<h3> Surat </h3>
						<p> INDIA </p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="category1_wrapper" style="margin-top:120px">
					<div class="category1">
						<img src="images/header/category2_pin.png" alt="icon_pin"/>
						<h3> 2nd - 6th March </h3>
						<p>2020</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="category1_wrapper" style="margin-top:120px">
					<div class="category1">
						<img src="images/header/category3_pin.png" alt="icon_pin"/>
						<h3>29 Events</h3>
						<p> 5 Engineering and 2 General fields </p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="category1_wrapper" style="margin-top:120px">
					<div class="category1">
						<img src="images/header/category4_pin.png" alt="icon_pin"/>
						<h3> 2500 Seats </h3>
						<p> CONFIRM </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- categories section end -->		
<!-- About Wrapper Start -->
<section id="about">
<div data-scroll-index='1'  style="width:100%;float:left;">
<div class="lv_about_wrapper lv_toppadder100 lv_bottompadder100" id="down">
	<div class="container">
		<div class="row">
			<div class="about_content_wrapper">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 lv_toppadder50">
					<div class="lv_heading_left">
						<div class="about_heading_wrapper">
							<h1>About Aayam</h1>
						</div>	
					</div>
					<div class="lv_about_info">
						<span> Knowledge is Infinity </span>
						<p>
                        Aayam  is the annual technical festival of BMU Surat. Aayam started in 2013. It has been witnessing active participation for 8 years and has seen the amalgamation of ideas and practical exposure. <br>
                        It has been a platform for inspiring innovation and promotes engineering students of diverse disciplines from various colleges across the nation; and urges them to create, share and propagate their initiatives.<br>
                        The overwhelming participation of over 4000 students from across the country.
                        </p>
					</div>
					<div class="about_btn">
						<div class="lv_btn lv_toppadder30">
							<a href="regi.php"><i class="#" aria-hidden="true"></i> Registration </a> <a class="btn_2" href="#">Read More</a>
						</div>
                        
					</div>	    
                    
				</div>
                
			</div>	
            
		</div>
        
	</div>
   </div>
  </div>
</section>
	
<!-- Events Section -->      
    
<div class="container">            
            <div class="section-header" align="center">
                
                <h2>Department Wise Events</h2>
                <p>Click here for all the department wise events</p>
            </div>
    
  <section id="events" class="wow fadeInUp">
      <table align="center">
              <tr>
                <td>   
                    <div class="card" align="center">   
                    <div class="row">
                    <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="images/Branch/Computer.png" alt="Mechanical" class="img-fluid" height="165px" width="180px">
                         <!-- <div class="details"> -->
                            <h3><a href="computer_event.html">      COMPUTER </a></h3>
                            <p></p>
                            <br>
                            <p></p>
                            <br>
                        <!-- </div> -->
                    </div>
                    </div>
                    </div>
                    </div>
                </td>
                <td>
                    <div class="card" align="center">
                    <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="images/Branch/Chemical.png" alt="Chemical" class="img-fluid"  height="165px" width="180px">
                        <div class="details">
                            <h3><a href="chemical_event.html"> CHEMICAL </a></h3>
                            <p></p>
                            <br>
                            <p></p>
                            <br>
                        </div>
                    </div>
                    </div>
                    </div>
                </td>
                <td>
                    <div class="card" align="center">
                    <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="images/Branch/Civil.png" alt="Computer" class="img-fluid" height="165px" width="180px">
                        <!--<div class="details">-->
                            <h3><a href="civil_event.html"> CIVIL </a></h3>
                            <p> </p>
                            <br>
                            <p></p>
                            <br>
                        <!--</div>-->
                    </div>
                    </div>
                    </div>
                </td>
              
                 <!-- <div class="col-lg-4 col-md-6">
                   <div class="speaker">
                     <img src="img/speakers/mars_showcase.jpg" alt="Speaker 6" class="img-fluid">
                     <div class="details">
                       <h3><a href="#mars-showcase" data-toggle="modal" data-target="#mars-showcase">MARS SPECIAL SHOWCASE</a></h3>
                       <p></p><br>
                   <p></p><br>
                       <div class="social">
                         <a href=""><i class="fa fa-twitter"></i></a>
                         <a href=""><i class="fa fa-facebook"></i></a>
                         <a href=""><i class="fa fa-google-plus"></i></a>
                         <a href=""><i class="fa fa-linkedin"></i></a>
                       </div>
                     </div>
                   </div>
                   </div> -->
            
              <td>
                    <div class="card" align="center">
                    <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="images/Branch/Electrical.png" alt="Electrical" class="img-fluid" height="165px" width="180px">
                        <div class="details">
                            <h3><a href="electrical_event.html"> ELECTRICAL </a></h3>
                            <p></p>
                            <br>
                            <p></p>
                            <br>
                        </div>
                    </div>
                    </div>
                    </div>
              </td>
          </tr>
      </table>
      <table align="center">
          <tr align="center">
              <td>
                    <div class="card1" align="center">
                    <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="images/Branch/Mechanical.png" alt="Robotics" class="img-fluid" height="165px" width="180px">
                        <div class="details">
                            <h3><a href="mechanical_event.html"> MECHANICAL </a></h3>
                            <p></p>
                            <br>
                            <p></p>
                            <br>
                        </div>
                    </div>
                    </div>
                    </div>
              </td>
              <td>
                    <div class="card1" align="center">
                    <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="images/Branch/generaltechnical.png" alt="Speaker 1" class="img-fluid" height="165px" width="180px">
                        <div class="details">
                            <h3><a href="general_event.html"> TECHNICAL </a></h3>
                            <p></p>
                            <br>
                            <p></p>
                            <br>
                        </div>
                    </div>
                    </div>
                    </div>
             </td>
          
          
             <td>
<!--                    <div class="card1" align="center">-->
<!--                    <div class="col-lg-4 col-md-6">-->
<!--                    <div class="speaker">-->
                        <img src="images/Branch/generalnontech.png" alt="Speaker 1" class="img-fluid" height="165px" width="180px">
                        <div class="details">
                            <h3><a href="general_non_tech.html"> NON-TECHNICAL </a></h3>
                            <p></p>
                            <br>
                            <p></p>
                            <br>
                        </div>
<!--                    </div>-->
<!--                    </div>-->
<!--                    </div>-->
            </td>
          </tr>
      </table>
  </section>
</div>
    
    
    
    
<!-- End of Events Section -->  
    
<!-- About Wrapper End -->

<!-- Event Gallry Wrapper Start -->
<div class="lv_event_glry_wrapper lv_toppadder100 lv_bottompadder100">
	<div class="lv_slider_overlay"></div>
	<div class="container-fluid">
		<div class="row">
            <section id="gallery">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
                <div class="lv_heading_center">
					<h1>Our Events Gallery</h1>
					<p>Some people look for a beautiful place. Others make a place BEAUTIFUL.<br> Don’t wait for extraordinary opportunities. Seize common occasions and make them great.</p>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="lv_glry_slider popup-gallery">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<a href="#" title=""><img src="images/Lastevent/1.jpg" alt="Event" height="250px" width="180px"></a>
						</div>
						<div class="item">
							<a href="#" title=""><img src="images/Lastevent/2.jpg" alt="Event" height="250px" width="180px"></a>
						</div>
						<div class="item">
							<a href="#" title=""><img src="images/Lastevent/4.jpg" alt="Event" height="250px" width="180px"></a>
						</div>
						<div class="item">
							<a href="#" title=""><img src="images/Lastevent/5.jpg" alt="Event" height="250px" width="180px"></a>
						</div>
						<div class="item">
							<a href="#" title=""><img src="images/Lastevent/6.jpg" alt="Event" height="250px" width="180px"></a>
						</div>
						<div class="item">
							<a href="#" title=""><img src="images/Lastevent/7.jpg" alt="Event" height="250px" width="180px"></a>
						</div>
                        <div class="item">
							<a href="#" title=""><img src="images/Lastevent/8.jpg" alt="Event" height="250px" width="180px"></a>
						</div>
                        <div class="item">
							<a href="#" title=""><img src="images/Lastevent/10.jpg" alt="Event" height="250px" width="180px"></a>
						</div>
                        <div class="item">
							<a href="#" title=""><img src="images/Lastevent/12.jpg" alt="Event" height="250px" width="180px"></a>
						</div>
                        <div class="item">
							<a href="#" title=""><img src="images/Lastevent/14.jpg" alt="Event" height="250px" width="180px"></a>
						</div>
                        <div class="item">
							<a href="#" title=""><img src="images/Lastevent/16.jpg" alt="Event" height="250px" width="180px"></a>
						</div>
                        <div class="item">
							<a href="#" title=""><img src="images/Lastevent/17.jpg" alt="Event" height="250px" width="180px"></a>
						</div>
                        <div class="item">
							<a href="#" title=""><img src="images/Lastevent/18.jpg" alt="Event" height="250px" width="180px"></a>
						</div>
                        <div class="item">
							<a href="#" title=""><img src="images/Lastevent/20.jpg" alt="Event" height="250px" width="180px"></a>
						</div>
                        <div class="item">
							<a href="#" title=""><img src="images/Lastevent/21.jpg" alt="Event" height="250px" width="180px"></a>
						</div>
                        <div class="item">
							<a href="#" title=""><img src="images/Lastevent/22.jpg" alt="Event" height="250px" width="180px"></a>
						</div>
                        <div class="item">
							<a href="#" title=""><img src="images/Lastevent/23.jpg" alt="Event" height="250px" width="180px"></a>
						</div>
                        <div class="item">
							<a href="#" title=""><img src="images/Lastevent/24.jpg" alt="Event" height="250px" width="180px"></a>
						</div>
                        <div class="item">
							<a href="#" title=""><img src="images/Lastevent/26.jpg" alt="Event" height="250px" width="180px"></a>
						</div>
                        <div class="item">
							<a href="#" title=""><img src="images/Lastevent/28.jpg" alt="Event" height="250px" width="180px"></a>
						</div>
                        <div class="item">
							<a href="#" title=""><img src="images/Lastevent/30.jpg" alt="Event" height="250px" width="180px"></a>
						</div>
                        <div class="item">
							<a href="#" title=""><img src="images/Lastevent/32.jpg" alt="Event" height="250px" width="180px"></a>
						</div>
                        <div class="item">
							<a href="#" title=""><img src="images/Lastevent/33.jpg" alt="Event" height="250px" width="180px"></a>
						</div>
					</div>
				</div>
			</div>
            </section>
		</div>
	</div>
</div>
<!-- Event Gallry Wrapper End -->
<!-- Event Schedule Wrapper Start -->

<div data-scroll-index='3'  style="width:100%;float:left;">
<div class="lv_event_schedule_wrapper lv_toppadder100 lv_bottompadder100">
    
	<div class="event_schedule_section">
        <section id="schedule">
	<div class="container">
		<div class="row">
            
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
				<div class="lv_heading_center">
					<div class="event_schedule_content">
						<h1>Event Schedule</h1>
						<p>Large projects and events can seem doubting and overwhelming, and it is natural to worry that you have taken on too much Keep working on it and chipping away – it is amazing what you can achieve when you put your mind to it.</p>
					</div>	
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="lv_schedule_infotabs">
				<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#0" aria-controls="0" role="tab" data-toggle="tab"><p>March 2, 2020</p><span>Monday</span></a></li>
						<li role="presentation"><a href="#1" aria-controls="1" role="tab" data-toggle="tab"><p>March 3 & 4, 2020</p><span>Tuesday</span></a></li>
						<li role="presentation"><a href="#2" aria-controls="2" role="tab" data-toggle="tab"><p>March 5 & 6, 2020</p><span>Wednesday</span></a></li>
					</ul>
					<!--Tab panes     -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="0">
							<ul>
								<li>
									<div class="lv_schedule_details">
										<div class="lv_schedule_details_img">
											<img src="images/content/es3.png" alt="Event Schedule">
										</div>
										<div class="lv_schedule_details_text">
											<h3>How to make beautiful design ?</h3>
											<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum the auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit... </p>
											<ul>
												<li><img src="images/content/admin.png" alt="by">By Sunita A.</li>
												<li><img src="images/content/time.png" alt="time">2:30 - 4:30</li>
												<li><img src="images/content/pin.png" alt="pin">Business Hall No. 1</li>
											</ul>
										</div>
										<div class="lv_schedule_details_btn">
											<div class="lv_btn lv_toppadder40">
												<a class="btn_2" href="#">datails</a>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="lv_schedule_details">
										<div class="lv_schedule_details_img">
											<img src="images/content/es4.png" alt="Event Schedule">
										</div>
										<div class="lv_schedule_details_text">
											<h3>How to optimize design ?</h3>
											<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum the auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit... </p>
											<ul>
												<li><img src="images/content/admin.png" alt="by">By Atish M.</li>
												<li><img src="images/content/time.png" alt="time">4:30 - 6:30</li>
												<li><img src="images/content/pin.png" alt="pin">Business Hall No. 1</li>
											</ul>
										</div>
										<div class="lv_schedule_details_btn">
											<div class="lv_btn lv_toppadder40">
												<a class="btn_2" href="#">datails</a>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="lv_schedule_details">
										<div class="lv_schedule_details_img">
											<img src="images/content/es1.png" alt="Event Schedule">
										</div>
										<div class="lv_schedule_details_text">
											<h3>Welcome & Registration</h3>
											<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum the auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit... </p>
											<ul>
												<li><img src="images/content/admin.png" alt="by">By Akshay H.</li>
												<li><img src="images/content/time.png" alt="time">9:30 - 11:30</li>
												<li><img src="images/content/pin.png" alt="pin">Business Hall No. 1</li>
											</ul>
										</div>
										<div class="lv_schedule_details_btn">
											<div class="lv_btn lv_toppadder40">
												<a class="btn_2" href="#">datails</a>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="lv_schedule_details">
										<div class="lv_schedule_details_img">
											<img src="images/content/es2.png" alt="Event Schedule">
										</div>
										<div class="lv_schedule_details_text">
											<h3>Introduction about event & conference</h3>
											<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum the auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit... </p>
											<ul>
												<li><img src="images/content/admin.png" alt="by">By Ajay Suy.</li>
												<li><img src="images/content/time.png" alt="time">11:00 - 2:30</li>
												<li><img src="images/content/pin.png" alt="pin">Business Hall No. 1</li>
											</ul>
										</div>
										<div class="lv_schedule_details_btn">
											<div class="lv_btn lv_toppadder40">
												<a class="btn_2" href="#">datails</a>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="1">
							<ul>
								<li>
									<div class="lv_schedule_details">
										<div class="lv_schedule_details_img">
											<img src="images/content/es1.png" alt="Event Schedule">
										</div>
										<div class="lv_schedule_details_text">
											<h3>Welcome & Registration</h3>
											<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum the auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit... </p>
											<ul>
												<li><img src="images/content/admin.png" alt="by">By Akshay H.</li>
												<li><img src="images/content/time.png" alt="time">9:30 - 11:30</li>
												<li><img src="images/content/pin.png" alt="pin">Business Hall No. 1</li>
											</ul>
										</div>
										<div class="lv_schedule_details_btn">
											<div class="lv_btn lv_toppadder40">
												<a class="btn_2" href="#">datails</a>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="lv_schedule_details">
										<div class="lv_schedule_details_img">
											<img src="images/content/es2.png" alt="Event Schedule">
										</div>
										<div class="lv_schedule_details_text">
											<h3>Introduction about event & conference</h3>
											<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum the auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit... </p>
											<ul>
												<li><img src="images/content/admin.png" alt="by">By Ajay Suy.</li>
												<li><img src="images/content/time.png" alt="time">11:00 - 2:30</li>
												<li><img src="images/content/pin.png" alt="pin">Business Hall No. 1</li>
											</ul>
										</div>
										<div class="lv_schedule_details_btn">
											<div class="lv_btn lv_toppadder40">
												<a class="btn_2" href="#">datails</a>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="lv_schedule_details">
										<div class="lv_schedule_details_img">
											<img src="images/content/es3.png" alt="Event Schedule">
										</div>
										<div class="lv_schedule_details_text">
											<h3>How to make beautiful design ?</h3>
											<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum the auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit... </p>
											<ul>
												<li><img src="images/content/admin.png" alt="by">By Sunita A.</li>
												<li><img src="images/content/time.png" alt="time">2:30 - 4:30</li>
												<li><img src="images/content/pin.png" alt="pin">Business Hall No. 1</li>
											</ul>
										</div>
										<div class="lv_schedule_details_btn">
											<div class="lv_btn lv_toppadder40">
												<a class="btn_2" href="#">datails</a>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="lv_schedule_details">
										<div class="lv_schedule_details_img">
											<img src="images/content/es4.png" alt="Event Schedule">
										</div>
										<div class="lv_schedule_details_text">
											<h3>How to optimize design ?</h3>
											<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum the auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit... </p>
											<ul>
												<li><img src="images/content/admin.png" alt="by">By Atish M.</li>
												<li><img src="images/content/time.png" alt="time">4:30 - 6:30</li>
												<li><img src="images/content/pin.png" alt="pin">Business Hall No. 1</li>
											</ul>
										</div>
										<div class="lv_schedule_details_btn">
											<div class="lv_btn lv_toppadder40">
												<a class="btn_2" href="#">datails</a>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="2">
							<ul>
								<li>
									<div class="lv_schedule_details">
										<div class="lv_schedule_details_img">
											<img src="images/content/es2.png" alt="Event Schedule">
										</div>
										<div class="lv_schedule_details_text">
											<h3>Introduction about event & conference</h3>
											<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum the auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit... </p>
											<ul>
												<li><img src="images/content/admin.png" alt="by">By Ajay Suy.</li>
												<li><img src="images/content/time.png" alt="time">11:00 - 2:30</li>
												<li><img src="images/content/pin.png" alt="pin">Business Hall No. 1</li>
											</ul>
										</div>
										<div class="lv_schedule_details_btn">
											<div class="lv_btn lv_toppadder40">
												<a class="btn_2" href="#">datails</a>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="lv_schedule_details">
										<div class="lv_schedule_details_img">
											<img src="images/content/es3.png" alt="Event Schedule">
										</div>
										<div class="lv_schedule_details_text">
											<h3>How to make beautiful design ?</h3>
											<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum the auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit... </p>
											<ul>
												<li><img src="images/content/admin.png" alt="by">By Sunita A.</li>
												<li><img src="images/content/time.png" alt="time">2:30 - 4:30</li>
												<li><img src="images/content/pin.png" alt="pin">Business Hall No. 1</li>
											</ul>
										</div>
										<div class="lv_schedule_details_btn">
											<div class="lv_btn lv_toppadder40">
												<a class="btn_2" href="#">datails</a>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="lv_schedule_details">
										<div class="lv_schedule_details_img">
											<img src="images/content/es4.png" alt="Event Schedule">
										</div>
										<div class="lv_schedule_details_text">
											<h3>How to optimize design ?</h3>
											<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum the auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit... </p>
											<ul>
												<li><img src="images/content/admin.png" alt="by">By Atish M.</li>
												<li><img src="images/content/time.png" alt="time">4:30 - 6:30</li>
												<li><img src="images/content/pin.png" alt="pin">Business Hall No. 1</li>
											</ul>
										</div>
										<div class="lv_schedule_details_btn">
											<div class="lv_btn lv_toppadder40">
												<a class="btn_2" href="#">datails</a>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="lv_schedule_details">
										<div class="lv_schedule_details_img">
											<img src="images/content/es1.png" alt="Event Schedule">
										</div>
										<div class="lv_schedule_details_text">
											<h3>Welcome & Registration</h3>
											<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum the auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit... </p>
											<ul>
												<li><img src="images/content/admin.png" alt="by">By Akshay H.</li>
												<li><img src="images/content/time.png" alt="time">9:30 - 11:30</li>
												<li><img src="images/content/pin.png" alt="pin">Business Hall No. 1</li>
											</ul>
										</div>
										<div class="lv_schedule_details_btn">
											<div class="lv_btn lv_toppadder40">
												<a class="btn_2" href="#">datails</a>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				    
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="pricing_button_wrapper">
					<div class="pricing_button">
						<div class="lv_btn">
							<a class="btn_2" href="#"><i class="fa fa-download" aria-hidden="true"></i> download schedule</a>
						</div>
					</div>	
				</div>
			</div>
                
		</div>
        
	</div>
         </section>
	</div>
       
</div>
</div>

<!-- Event Schedule Wrapper End -->
<!-- FAQ Wrapper Start -->
<section id="FAQ">
<div data-scroll-index='8'  style="width:100%;float:left;">
<div class="lv_faq_wrapper lv_toppadder100 lv_bottompadder100">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
				<div class="lv_heading_center">
					<div class="faq_content_wrapper">
						<h1>Ask Question?</h1>
						<p>Some question that may arise in your mind related to Aayam and schedules before register with such questions are listed below with respective answers kindly refer it.</p>
					</div>	
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="accordionFifteen">
					<div class="panel-group" id="accordionFifteenLeft" role="tablist">
                        <div class="panel panel-default lv_border_top_radius">
							<div class="panel-heading desktop">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftone" aria-expanded="true" class="lv_border_top_radius"> How can we register for event?</a>
								</h4>
							</div>
							<div id="collapseFifteenLeftone" class="panel-collapse collapse in" aria-expanded="true" role="tabpanel">
								<div class="panel-body">
									You can register for event on our website as well as offline via registration team. 
								</div>
							</div>
						</div><!-- /.panel-default --> 
                        <div class="panel panel-default">
							<div class="panel-heading horn">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftTwo" aria-expanded="false">Can we do on the spot registration?</a>
								</h4>
							</div>
							<div id="collapseFifteenLeftTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;" role="tabpanel">
								<div class="panel-body">
									Yes. There are on spot registration for few selected event.
								</div>
							</div>
                        </div><!-- /.panel-default --> 
                        <div class="panel panel-default">
							<div class="panel-heading bell">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftThree" aria-expanded="false">Do you provide accommodation for outside student?</a>
								</h4>
							</div>
							<div id="collapseFifteenLeftThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;" role="tabpanel">
								<div class="panel-body">
									No, we don’t provide accommodation.
								</div>
							</div>
                        </div><!-- /.panel-default --> 
						<div class="panel panel-default">
							<div class="panel-heading bell">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftFour" aria-expanded="false">Event is of how many days ?</a>
								</h4>
							</div>
							<div id="collapseFifteenLeftFour" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;" role="tabpanel">
								<div class="panel-body">
									Aayam is of 5 days event.
								</div>
							</div>
                        </div><!-- /.panel-default --> 
						<!--<div class="panel panel-default lv_border_bottom_radius">
							<div class="panel-heading bell">
								<h4 class="panel-title">
									<a class="collapsed lv_border_bottom_radius" data-toggle="collapse" data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftFive" aria-expanded="false">How to Set Price ? What our Price list ?</a>
								</h4>
							</div>
							<div id="collapseFifteenLeftFive" class="panel-collapse collapse lv_border_bottom_radius" aria-expanded="false" style="height: 0px;" role="tabpanel">
								<div class="panel-body lv_border_bottom_radius">
									Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue. <a href="#">http://www.webstrot.com</a>
								</div>
							</div>
                        </div> -->
						<!-- /.panel-default -->                             
					</div><!--end of /.panel-group-->
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</section>
<!-- FAQ Wrapper End -->
<!-- Video Wrapper Start -->

<div class="lv_video_wrapper lv_toppadder100 lv_bottompadder100">
	<div class="video_box_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="lv_video_box">
					<h1>Old Memories</h1>
					<h2>Are You Ready <span>Joing Our Event programs ?</span></h2>
					<div class="clearfix"></div>
					<p><a class="popup-youtube" href="https://www.youtube.com/embed/xImpyYRVGOc"><img src="images/content/play.png" alt="Play"> play video</a></p>
					<div class="video_btn_wrapper">
						<a class="btn" href="#">join us!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Video Wrapper End -->
<div data-scroll-index='6'  style="width:100%;float:left;">
<!-- Testimonials Wrapper Start -->
<!-- <div class="lv_testimonial_wrapper lv_toppadder100 lv_bottompadder100">
	<div class="lv_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="lv_heading_center">
					<div class="testimonial_heading_wrapper">
						<h1>Testimonials</h1>
					</div>	
				</div>	
			<div class="lv_testimonial_info">
				<img src="images/content/quote.png" alt="quotes">
				<div class="carousel slide" data-ride="carousel" id="quote-carousel"> 
					<!-- Bottom Carousel Indicators -->
					<!--<ol class="carousel-indicators">
						<li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="images/content/tst1.png" alt="test">
						</li>
						<li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="images/content/tst2.png" alt="test">
						</li>
						<li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="images/content/tst3.png" alt="test">
						</li>
					</ol>
					<!-- Carousel Slides / Quotes -->
					<!--<div class="carousel-inner text-center">
						<!-- Quote 1 -->
						<!--<div class="item active">
							<p>“Donec feugiat id augue consequat vulputate Suspendisse at magna mattis dignissim libero  fringilla leo aiquam veh. ultrices fringilla est tortor sollicitudin. This is Photoshop's version  of Lorem Ipsum. Proin graida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.”</p>
							<h4>Jeniffer Doe</h4>
							<small>(CEO, webstrot)</small>
						</div>
						<!-- Quote 2 -->
						<!--<div class="item">
							 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
							 <h4>Joaana Max</h4>
							 <small>(MD, webstrot)</small>
						</div>
						<!-- Quote 3 -->
						<!--<div class="item">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
							<h4>Robot Dev</h4>
							<small>(Co-Fo, webstrot)</small>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="sponsore_main_wrapper">
                <section id="supporters">
						<div class="lv_heading_center">
							<div class="testimonial_heading_wrapper">
								<h1>Our Event Sponsors</h1>
							</div>	
						</div>
						<div class="lv_sponsors_box">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="sponsore1_wrapper">
										<img src="images/content/logo01.png" alt="sponsor_img"/>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="sponsore1_wrapper">
										<img src="images/content/logo02.png" alt="sponsor_img"/>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="sponsore1_wrapper">
										<img src="images/content/logo03.png" alt="sponsor_img"/>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="sponsore1_wrapper">
										<img src="images/content/logo04.png" alt="sponsor_img"/>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="sponsore1_wrapper">
										<img src="images/content/logo05.png" alt="sponsor_img"/>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="sponsore1_wrapper">
										<img src="images/content/logo06.png" alt="sponsor_img"/>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="sponsore1_wrapper">
										<img src="images/content/logo07.png" alt="sponsor_img"/>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="sponsore1_wrapper">
										<img src="images/content/logo08.png" alt="sponsor_img"/>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="sponsore1_wrapper">
										<img src="images/content/logo01.png" alt="sponsor_img"/>
									</div>
								</div>
							</div>
						</div>
                       </section>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div> 

<!-- Testimonials Wrapper End -->
<!-- Map Wrapper Start -->
<div data-scroll-index='9'  style="width:100%;float:left;">
<div class="mapouter"><div class="gmap_canvas"><iframe width="1500" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=BMEF&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://periodic-table-of-elements.net">?period table to study with</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:1500px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1500px;}</style></div>
<!-- Map Wrapper End -->
<!-- contact section start -->	
<div class="contact_sec_wrapper">
	<div class="container">
        <section id="contact">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" >
				<div class="contact1_wrapper">
					<div class="contact1">
						<div class="contact_box">
							<img src="images/content/contact_img1.png" alt="contact_img" style="padding-top: 50;"/>
						</div>	
						<h3>Address</h3>
						<p>BMEF Campus, Bharthana Road,<br>
							Vesu, Surat, Gujarat 395017.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="contact1_wrapper">
					<div class="contact1">
						<div class="contact_box">
							<img src="images/content/contact_img2.png" alt="contact_img" style="padding-top: 50;" />
						</div>
						<h3>Phone</h3>
						<p> 08866449237 </p>
					</div>
				</div>
			</div>
        <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="contact1_wrapper">
					<div class="contact1">
						<div class="contact_box">
							<img src="images/content/contact_img3.png" alt="contact_img"/>
						</div>
						<h3>Fax</h3>
						<p><br>
							</p>
					</div>
            </div>
			</div> -->
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="contact1_wrapper">
					<div class="contact1">
						<div class="contact_box">
							<img src="images/content/contact_img4.png" alt="contact_img" style="padding-top: 50;" />
						</div>
						<h3>Email</h3>
						<span> techfest@bmefcolleges.edu.in </span>
						<span><a href="#"></a></span>
					</div>
				</div>
			</div>
		</div>
        </section>
	</div>
</div>
<!-- contact section end -->		
<!-- Footer Wrapper Start -->
<!--  <div class="lv_footer_wrapper">
	<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;"><span></span></a>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="lv_footer_section">
					<div class="footer_logo_wrapper">
						<img src="Logo/WhiteAyam.png" alt="125px" height="" width="125px">
					</div>	
				</div>                  
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="footer_social_wrapper">
					<div class="footer_social">
						<ul>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer_botton_wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="copy_right_wrapper">
					<div class="copy_right">
						<p>© 2020 Aayam. All rights reserved.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="footer2_social_wrapper">
					<div class="footer2_social">
						<ul>
							<li><a href="#">CONTACT US</a></li>
							<li><a href="#">PRIVACY POLICY</a></li>
							<li><a href="#">SITEMAP</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->

<!--Footer-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                  <div class="col-lg-4 col-md-6 footer-info">
                     <img src="images/aayam logo/wfinal_logo.png" alt="TheEvenet">
                     <p>Aayam is the annual technical festival of BMU Surat. Aayam started in 2013. It has been witnessing active participation for 8 years and has seen the amalgamation of ideas and practical exposure.</p>
                  </div>
                  <div class="col-lg-3 col-md-6 footer-links">
                     <h4>Useful Links</h4>
                     <ul>
                        <li><i class="fa fa-angle-right"></i> <a href="index.php">Home</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="https://www.bmefcolleges.edu.in/" target="_blank">BMU Website</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="developer.html">Web-Development Team</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="techfest_teams.html">Techfest Teams</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-3 col-md-6 footer-contact">
                     <div style = "position:relative;">
                        <h4>Contact Us</h4>
                        <p>
                           Bhagwan Mahavir University, <br>
                           Bharthana Road,<br>
                           Surat, Gujarat.<br>
                           <strong>Pin:</strong> 395017<br>
                           <strong>Phone:</strong> +91-261-677 0100;<br>
                           <strong>Email:</strong> techfest@bmefcolleges.edu.in <br>
                        </p>
                     </div>
                     <!--<div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                        -->
                  </div>
               </div>
            </div>
         </div>
         <!--
            <div class="container">
              <div class="copyright">
                &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved
              </div>
              <div class="credits">
                
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
                
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>-->
</footer>
<!-- Footer Wrapper End -->
<!--main js file start--> 
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script>$(function() { $.scrollIt(); });</script> 
<script>
var end = new Date('03/02/2020 11:00 AM');

var _second = 1000;
var _minute = _second * 60;
var _hour = _minute * 60;
var _day = _hour * 24;
var timer;

function showRemaining() {
    var now = new Date();
    var distance = end - now;
    if (distance < 0) {

        clearInterval(timer);
        document.getElementById('countdown').innerHTML = 'EXPIRED!';

        return;
    }
    var days = Math.floor(distance / _day);
    var hours = Math.floor((distance % _day) / _hour);
    var minutes = Math.floor((distance % _hour) / _minute);
    var seconds = Math.floor((distance % _minute) / _second);

    document.getElementById('countdown').innerHTML = days + 'days ';
    document.getElementById('countdown').innerHTML += hours + 'hrs ';
    document.getElementById('countdown').innerHTML += minutes + 'mins ';
    document.getElementById('countdown').innerHTML += seconds + 'secs';
}

timer = setInterval(showRemaining, 100
</script>
<!--main js file end-->
</body>

<!-- Mirrored from www.webstrot.com/html/tm/liveevent/03_Home/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2020 03:23:15 GMT -->
</html
