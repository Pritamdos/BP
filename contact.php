<!doctype html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="canonical" href="http://demo.designshopify.com/" />
  <meta name="description" content="" />
  <title>Contact Page</title>
  
    <link href="assets/stylesheets/font.css" rel='stylesheet' type='text/css'>
  
	<link href="assets/stylesheets/font-awesome.min.css" rel="stylesheet" type="text/css" media="all"> 	
	<link href="assets/stylesheets/bootstrap.min.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.bootstrap.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.animate.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.global.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.style.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.media.3x.css" rel="stylesheet" type="text/css" media="all">
	
	<script src="assets/javascripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="assets/javascripts/bootstrap.min.3x.js" type="text/javascript"></script>
	
	<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<script src="assets/javascripts/jquery.gmap.min.js" type="text/javascript"></script>
	
</head>

<body itemscope="" itemtype="http://schema.org/WebPage" class="templatePage notouch">
<?php include "./header/header.php"?>
	<div id="content-wrapper-parent">
		<div id="content-wrapper">   
			<!-- Content -->
			<div id="content" class="clearfix">                
				<div id="breadcrumb" class="breadcrumb">
					<div itemprop="breadcrumb" class="container">
						<div class="row">
							<div class="col-md-24">
								<a href="http://demo.designshopify.com/" class="homepage-link" title="Back to the frontpage">Home</a>
								<span>/</span>
								<span class="page-title">Contact</span>
							</div>
						</div>
					</div>
				</div>               
				<section class="content">    
					<div class="container">
						<div class="row">
							<div id="page-header">
								<h1 id="page-title">Contact Page</h1>
							</div>
						</div>
					</div>
					<div id="col-main" class="contact-page clearfix">
						<div class="group-contact clearfix">
							<div class="container">
								<div class="row">
									<div class="left-block col-md-12">
										<form method="post" action="http://demo.designshopify.com/contact" class="contact-form" accept-charset="UTF-8">
											<input type="hidden" value="contact" name="form_type"><input type="hidden" name="utf8" value="✓">
											<ul id="contact-form" class="row list-unstyled">
												<li class="">
												<h3>DROP US A LINE</h3>
												</li>
												<li class="">
												<label class="control-label" for="name">Your Name</label>
												<input type="text" id="name" value="" class="form-control" name="contact[name]">
												</li>
												<li class="clearfix"></li>
												<li class="">
												<label class="control-label" for="email">Your Email <span class="req">*</span></label>
												<input type="email" id="email" value="" class="form-control email" name="contact[email]">
												</li>
												<li class="clearfix"></li>
												<li class="">
												<label class="control-label" for="message">Your Message <span class="req">*</span></label>
												<textarea id="message" rows="5" class="form-control" name="contact[body]"></textarea>
												</li>
												<li class="clearfix"></li>
												<li class="unpadding-top">
												<button type="submit" class="btn">Submit Contact</button>
												</li>
											</ul>
										</form>
									</div>
									<div class="right-block contact-content col-md-12">
										<h6 class="sb-title"><i class="fa fa-home"></i> Contact Information</h6>
										<ul class="right-content">
											<li class="title">
											<h6>Office Address</h6>
											</li>
											<li class="address">
											<p>
												249 Ung Van Khiem Street, Binh Thanh Dist, HCM city
											</p>
											</li>
											<li class="phone">+84 0123456xxx</li>
											<li class="email"><i class="fa fa-envelope"></i> support@designshopify.com</li>
										</ul>
										<ul class="right-content">
											<li class="title">
											<h6>Follow Us on</h6>
											</li>
											<li class="facebook"><a href="#"><span class="fa-stack fa-lg btooltip" title="" data-original-title="Facebook"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-inverse fa-stack-1x"></i></span></a></li>
											<li class="twitter"><a href="#"><span class="fa-stack fa-lg btooltip" title="" data-original-title="Twitter"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-inverse fa-stack-1x"></i></span></a></li>
											<li class="google-plus"><a href="#"><span class="fa-stack fa-lg btooltip" title="" data-original-title="Google plus"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-google-plus fa-inverse fa-stack-1x"></i></span></a></li>
											<li class="pinterest"><a href="#"><span class="fa-stack fa-lg btooltip" title="" data-original-title="Pinterest"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-pinterest fa-inverse fa-stack-1x"></i></span></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div id="contact_map_wrapper">
								<div id="contact_map" class="map"></div>
								<script>
								jQuery(document).ready(function($) {
									if(jQuery().gMap){
										if($('#contact_map').length){
										  $('#contact_map').gMap({
											zoom: 17,
											scrollwheel: false,
											maptype: 'ROADMAP',
											markers:[
											  {
												address: '249 Ung Văn Khiêm, phường 25, Ho Chi Minh City, Vietnam',
												html: '_address'
											  }
											]
										  });
										}
									}
								});
								</script>
							</div>
						</div>
					</div> 
				</section>        
			</div>
		</div>
	</div>

	<footer id="footer">      
		<div id="footer-content">
			<h6 class="general-title contact-footer-title">Newsletter</h6>  
			<div id="widget-newsletter">
				<div class="container">            
				  <div class="newsletter col-md-24">
					<form action="http://codespot.us5.list-manage.com/subscribe/post?u=ed73bc2d2f8ae97778246702e&amp;id=c63b4d644d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
					  <span class="news-desc">We promise only send the good things</span>
					  <div class="group_input">
						<input class="form-control" type="email" placeholder="Your Email Address" name="Email" id="email-input">
						<div class="unpadding-top"><button class="btn btn-1" type="submit"><i class="fa fa-paper-plane"></i></button></div>
					  </div>              
					</form>
				  </div>						
				</div>
			</div>
			
			<div class="footer-content footer-content-top clearfix">
				<div class="container">
					<div class="footer-link-list col-md-6">
					  <div class="group">
						<h5 class="general-title">About Us</h5>						
						<ul class="list-unstyled list-styled">						  
						  <li class="list-unstyled">
							<a href="account.html">Store Locations</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Whosesalers</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Map Site</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Contact Us</a>
						  </li>						  
						</ul>
					  </div>
					</div>   
					<div class="footer-link-list col-md-6">
					  <div class="group">
						<h5 class="general-title">Information</h5>						
						<ul class="list-unstyled list-styled">						  
						  <li class="list-unstyled">
							<a href="account.html">Help &amp; FAQs</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Advance Search</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Gift Cards</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Shop By Brands</a>
						  </li>						  
						</ul>
					  </div>
					</div>
					<div class="footer-link-list col-md-6">
					  <div class="group">
						<h5 class="general-title">Account</h5>						
						<ul class="list-unstyled list-styled">						  
						  <li class="list-unstyled">
							<a href="account.html">Preferences</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Order History</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Cart Page</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Sign In</a>
						  </li>						  
						</ul>
					  </div>
					</div>
					<div class="footer-link-list col-md-6">
					  <div class="group">
						<h5 class="general-title">Customer</h5>						
						<ul class="list-unstyled list-styled">						  
							<li class="list-unstyled">
								<a href="search.html">Search Advanced</a>
							</li>						  
							<li class="list-unstyled">
								<a href="#">Return Policy</a>
							</li>						  
							<li class="list-unstyled">
								<a href="#">Privacy Policy</a>
							</li>						  
							<li class="list-unstyled">
								<a href="#">Help &amp; Contact</a>
							</li>						  
						</ul>
					  </div>
					</div>   
				</div>
			</div>
			<div class="footer-content footer-content-bottom clearfix">
				<div class="container">
					<div class="copyright col-md-12">
						© 2015 <a href="about-us.html">Jewelry - HTML template</a>. All Rights Reserved.
					</div>
					<div id="widget-payment" class="col-md-12">
						<ul id="payments" class="list-inline animated">
							<li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="Visa"><a href="#" class="icons visa"></a></li>
							<li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mastercard"><a href="#" class="icons mastercard"></a></li>
							<li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="American Express"><a href="#" class="icons amex"></a></li>
							<li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="Paypal"><a href="#" class="icons paypal"></a></li>
							<li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="Moneybookers"><a href="#;" class="icons moneybookers"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>   
	</footer>
</body>