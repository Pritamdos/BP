<?php 
	include_once "./backend/contact-validation.php";
?>
<!doctype html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="canonical" href="http://demo.designshopify.com/" />
    <meta name="description" content="" />
    <title>Jewelry HTML Template</title>

    <link href="assets/stylesheets/font.css" rel='stylesheet' type='text/css'>

    <link href="assets/stylesheets/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/jquery.camera.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/jquery.fancybox-buttons.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/application.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/swatch.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/jquery.owl.carousel.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/jquery.bxslider.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/bootstrap.min.3x.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.bootstrap.3x.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.global.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.style.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.media.3x.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/custom.css" rel="stylesheet" type="text/css" media="all">
    <!-- <link href="assets/stylesheets/demo-page.css" rel="stylesheet" type="text/css" media="all"> -->
    <link href="assets/stylesheets/hover.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/hover-min.css" rel="stylesheet" type="text/css" media="all">

    <script src="assets/javascripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/jquery.imagesloaded.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/bootstrap.min.3x.js" type="text/javascript"></script>
    <script src="assets/javascripts/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="assets/javascripts/jquery.camera.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/cookies.js" type="text/javascript"></script>
    <script src="assets/javascripts/modernizr.js" type="text/javascript"></script>
    <script src="assets/javascripts/application.js" type="text/javascript"></script>
    <script src="assets/javascripts/jquery.owl.carousel.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/jquery.bxslider.js" type="text/javascript"></script>
    <script src="assets/javascripts/skrollr.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/jquery.fancybox-buttons.js" type="text/javascript"></script>
    <script src="assets/javascripts/jquery.zoom.js" type="text/javascript"></script>
    <script src="assets/javascripts/cs.script.js" type="text/javascript"></script>
</head>

<body itemscope="" itemtype="http://schema.org/WebPage" class="templatePage notouch">
    <?php include "header.php"?>
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
														<h6 class="sb-title"><i class="fa fa-home"></i> Contact Information</h6>
                            </div>
                        </div>
                    </div>
                    <div id="col-main" class="contact-page clearfix">
                        <div class="group-contact clearfix">
                            <div class="container">
                                <div class="row">
                                    <div class="left-block col-md-12">
                                        <form method="post" action="" class="contact-form"
                                            accept-charset="UTF-8">
                                            <input type="hidden" value="contact" name="form_type"><input type="hidden"
                                                name="utf8" value="✓">
                                            <ul id="contact-form" class="row list-unstyled">
                                            
                                                <li class="">
                                                    <label class="control-label" for="name">Your Name</label>
                                                    <input type="text" id="name" value="" class="form-control" name="Fdname" required/>
                                                </li>
                                                <li class="clearfix"></li>
                                                <li class="">
                                                    <label class="control-label" for="email">Your Email <span class="req">*</span></label>
                                                    <input type="email" id="email" value="" class="form-control email"
                                                        name="Fdemail" required/>
                                                </li>
                                                <li class="clearfix"></li>
                                                <li class="">
                                                    <label class="control-label" for="message">Your Message <span class="req">*</span></label>
                                                    <textarea id="message" rows="5" class="form-control" name="Textar" required></textarea>
                                                </li>
                                                <li class="clearfix"></li>
                                                <li class="unpadding-top">
                                                    <button type="submit" class="btn" name="submitfeedback">Submit Contact</button>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                    <div class="right-block contact-content col-md-12 pd-lt">
																			
																			
                                        <ul class="right-content">
                                            <li class="title">
                                                <h6>Our Address</h6>
																						</li>
																						<li>
																						<h6 class="sb-title">
																							Babban Prasad Jewellers
																							<span class="vp">
																								Vishambhar Prasad Jewellers
																							<span>
																			      </h6>
																						<li>

                                            <li class="address">
                                                <p>
																									 Near Zama Maszid Railway Station Bilthara Road Ballia
																									 <br>
																									 Uttar Pradesh
                                                </p>
																						</li>
																						<br>
																						<li class="phone">+(91) 9919216402</li>
																						  <br>
																						<li class="phone">+(91) 7084415907</li>
																					    	<br>
																						<li class="email"><i class="fa fa-envelope"></i>pritamson5555@gmail.com</li>
																					    	<br>
																						<li class="email"><i class="fa fa-envelope"></i>pritamdos768@gmail.com</li>
                                        </ul>
                                     
                                    </div>
                                </div>
                            </div>
                            <div id="contact_map_wrapper">
                                <div id="contact_map" class="map">
																<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3582.224163534762!2d83.8485139154607!3d26.124233099874527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sBabban+Prasad+Jama+Masjid%2C+Belthara+Road%2C+Uttar+Pradesh!5e0!3m2!1sen!2sin!4v1550568914682" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
																</div>
                                
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
		</div>
		<?php include_once "footer.php" ?>
</body>

<div class="login-modal hide" id="lg-modals">
		<div class="llg-inners">
			<div class="lg-sub-inners animated fadeInDown">
						<a href="javascript:void(0)" id="closelink">
							<i class="fa fa-times" aria-hidden="true"></i>
						</a>
            <h6 class="general-title">Thanks For Contact With Us</h6>
						<span class="bp-j">

							<img src="./assets/images/bpnew.png" class="bps">
						</span>

			</div>

		</div>
	</div>
<?php 
 if(isset($_GET["check"]))
 {
  if($_GET['check'] == true)
  {
	 ?>
	 <script>
		   $(document).ready(function()
		   {
			 $('#lg-modals').removeClass('hide');
		   });
	 </script>
	

<?php

  }
}
?>
<script>
    $("#closelink").click(function () {
        $("#lg-modals").addClass("hide-md");
    });
</script>